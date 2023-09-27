<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ticket;
use App\Models\reply;
use App\Models\user;
use Illuminate\Support\Facades\DB;
use App\Notifications\newTicketNotification;
use App\Notifications\newReplyNotification;
class ticketController extends Controller
{
    public function index()
    {

        $openTickets = ticket::where('userId', $this->getUser('id'))
        ->where('isOpen', 1)
        ->orderBy('created_at', 'desc')
        ->get();

        if($this->isAdmin() == true)
        {
            $openTickets = ticket::where('isOpen', 1)
            ->orderBy('created_at', 'desc')
            ->get();
        }

        return view('ticket.index', compact('openTickets'));
    }

    public function single($id)
    {
        // $replies = reply::where('ticketId', $id)
        //             ->get();
        $ticketId = $id;

        $replies = DB::table('replies')
            ->where('ticketId', '=', $id)
            ->join('tickets', 'replies.ticketId', '=', 'tickets.id')
            ->select('replies.*', 'tickets.body', 'tickets.title')
            ->get();

            $ticketBody = DB::table('tickets')
                    ->where('id', '=', $id)
                    ->first();

        // if($replies->isEmpty())
        // {
        //     return redirect()->back();
        // }

         $userId = $this->getUser('id');
        return view('ticket.single', compact('replies', 'userId', 'ticketId','ticketBody'));
    }

    public function new()
    {
        return view('ticket.new');
    }

    public function add(Request $request)
    {
        // dd($this->adminUserId());
        $ticket = new ticket;

        $ticket->title = $request->title;
        $ticket->body  = $request->body;
        $ticket->userId = $this->getUser('id');
        $ticket->isOpen = true;

        $ticket->save();

        $lastInsertedTicket = $ticket->id;

        User::find($this->adminUserId())->notify(new newTicketNotification($lastInsertedTicket,'text-blue-300','ticket.single'));

        return redirect()->route('ticket.index')->with('ticketAdded', 'تیکت با موفقیت ثبت شد.');
    }

    public function newReply(Request $request, int $isAdmin = 0)
    {
        $request->validate([
            'reply' => 'required'
        ]);

        if($this->isAdmin() == true){
            $isAdmin = 1;
        }

        // dd($request->all());

        $reply = new reply;

        $reply->userId = $this->getUser('id');
        $reply->adminAnswer = $isAdmin;
        $reply->ticketId    = $request->ticketId;
        $reply->message     = $request->reply;

        $reply->save();

        $lastInsertedId = $reply->id;

        if($isAdmin == 1)
        {
            User::find(2)->notify(new newReplyNotification($request->ticketId,'text-orange-500', 'ticket.single'));
        }else{
            User::find($this->adminUserId())->notify(new newReplyNotification($lastInsertedId,'text-orange-500', 'ticket.single'));
        }

        return redirect()->back();


    }
}
