<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
class notificationController extends Controller
{
    public function getNewReports($id)
    {
        $notifications = user::find($id)->unreadNotifications;
        $notificationsCount = user::find($id)->unreadNotifications->count();
        return response()->json(array('notifications' => $notifications,
                'count' => $notificationsCount));
    }

    public function getNewTickets()
    {
        $tickets = ticket::where('isOpen', 1)->unreadNotifications;

    }

    public function handleNotification(Request $request)
    {
        auth()->user()->unreadNotifications->where('id', $request->notificationId)->markAsRead();

        // dd($request->all());

        if($request->route == 'undefined')
        {
            return redirect()->back();
        }

        return redirect()->route($request->route, $request->id);
    }
}
