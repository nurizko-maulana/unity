<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Report::all();
        return view('report.index', [
            'reports' => $reports
        ]);
    }

    public function store(Request $request){

        $report = new Report;
        $report->title = $request->title;
        $report->message = $request->message;
        $report->user_id = $request->auth()->user()->id;
        $report->save();

        return redirect()->route('report.index');
    }

    public function show($id){
        $report = Report::firstOrFail($id);
        
        return view('report.comment', [
            'report' => $report
        ]);

    }
}
