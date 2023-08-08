<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\clientsheet;
use App\Models\agent;
use App\Models\report;
use App\Models\user;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Hekmatinasser\Verta\Verta;
use App\Notifications\ReportAdded;
use App\Notifications\ReportEdited;
use App\Notifications\ReportDeleted;
class reportController extends Controller
{
    public $verta;
    public function construct()
    {
        $this->verta = new verta;
    }

    public function index(Verta $verta)
    {
        $reports = report::where('month', $verta->month)
        ->orderBy('created_at' , 'desc')
        ->get();
        // dd($reports);
        return view('report.index', compact('reports'));
    }

    public function add()
    {

        $rep = DB::table('reports')->get();
        $clients = user::select('id' , 'name')->get();

        return view('report.add', compact('clients', 'rep'));
    }

    public function getAgentById($id)
    {

       $agent = DB::table('agents')
                ->select('name', 'id')
                ->where('companyId', '=' , $id)->get();

       return response()->json($agent);
    }

    public function searchClient($name)
    {
        // $reports = DB::table('reports')
        //         ->where('userId', '=' , $name)->get();
        $verta = new Verta;
        if($name == 'all')
        {
            $reports = $this->getThisMonthReports();
        }else{
            $reports = report::where('year' , $verta->year)
              ->where('month', $verta->month)
              ->where('userId' , $name)
              ->orderBy('created_at' , 'desc')
              ->get();
        }


        $returnHTML = view('ajaxComponents.reportTable', compact('reports'))->render();

       return response()->json(array('success' => true, 'html' => $returnHTML));
    }

    public function viewSingle($id,$notificationId)
    {
        auth()->user()->unreadNotifications->where('id', $notificationId)->markAsRead();

        $report = report::where('id', $id)->first();

            // dd($report);

        return view('report.singleUser', compact('report'));
    }

    public function single()
    {
        return view('report.single');
    }

    public function editSingle($id)
    {
        $report = report::where('id', $id)->first();

        return view('report.single', compact('report'));
    }

    public function request()
    {
        return view('report.request');
    }

    public function new(Request $request)
    {
        $verta = new Verta;
        if($request->contribution == 'Contribute')
        {
            $contribution = 1;
        }else{
            $contribution = 0;
        }
        // dd($request->all());
        $reports = new report;

        $reports->userId = intval($request->CompanyName);
        $reports->agentId  = $request->agent;
        $reports->message     = [
                'message1' => $request->messageDate1,
                'message2' => $request->messageDate2,
                'message3' => $request->messageDate3
        ];

        $reports->call = [
                'call1' => $request->callDate1,
                'call2' => $request->callDate2,
                'call3' => $request->callDate3
        ];

        $reports->contribution = $contribution;
        $reports->receivedEvidencesDate = $request->receivedEvidenceDate;
        $reports->sendReportClientDate = $request->sentCompanyDate;
        $reports->sendReportTaxDate = $request->sendTaxDate;
        $reports->month             = $verta->month;
        $reports->year              = $verta->year;

        $reports->save();

        $lastInsertedId = $reports->id;

        // dd($lastInsertedId);

        User::find($request->CompanyName)->notify(new ReportAdded($lastInsertedId,'text-green-500'));

        return redirect()->route('report.add')->with('status' , 'رکورد با موفقیت ثبت شد');
    }

    public function edit()
    {
        $verta = new Verta;
        $reports = report::where('year' , $verta->year)
            ->where('month', $verta->month)
            ->orderBy('created_at' , 'desc')
            ->get();

        return view('report.edit', compact('reports'));
    }

    public function getThisMonthReports()
    {
        $verta = new Verta;

        return report::where('year' , $verta->year)
        ->where('month', $verta->month)
        ->orderBy('created_at' , 'desc')
        ->get();
    }

    public function update(Request $request, Verta $verta)
    {
        // dd($request->all());
       $report = new report;

       $report->userId = $request->name;
       $report->agentId = $request->agent;
       $report->message = array(
        'message1' => $request->message1,
        'message2' => $request->message2,
        'message3' => $request->message3
       );

       $report->call = array(
        'call1' => $request->call1,
        'call2' => $request->call2,
        'call3' => $request->call3
       );

       $report->contribution = $request->contribution;

       $report->receivedEvidencesDate = $request->receivedEvidencesDate;
       $report->sendReportClientDate = $request->sendReportClientDate;
       $report->sendReportTaxDate = $request->sendReportTaxDate;
       $report->month = $verta->month;
       $report->year = $verta->year;
       $report->save();

       $lastInsertedId = $report->id;

       User::find($request->name)->notify(new ReportEdited($lastInsertedId,'text-blue-500'));

       return redirect()->back()->with('ReportEditSuccess' , 'رکورد با موفقیت بروزرسانی شد');

    }

    public function destroy($id)
    {
        report::find($id)->delete();

        User::find(auth()->user()->id)->notify(new ReportDeleted('text-red-500'));

        return response()->json(array('status' => true));
    }
}
