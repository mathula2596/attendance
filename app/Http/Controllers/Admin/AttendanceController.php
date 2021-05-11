<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modlels\Attendance;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendances = Attendance::where('user_id',Auth::id())->get();
        return view('admin.attendance.index',compact('attendances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->data == "in")
        {
            $attendance = Attendance::where('date',date('Y-m-d'))->where('user_id',Auth::id())->first();
            if(empty($attendance))
            {
                $attendance = new Attendance();
                $attendance->date = date("Y-m-d");
                $attendance->user_id = Auth::id();
                $attendance->in = date("h:i:sa");
                $attendance->save();
            }
            else{
                $attendance->user_id = Auth::id();
                $attendance->date = date("Y-m-d");
                $attendance->in = date("h:i:sa");
                $attendance->save();
            }
            
        }
        elseif($request->data == "out")
        {
            $attendance = Attendance::where('date',date('Y-m-d'))->where('user_id',Auth::id())->first();
            if(empty($attendance))
            {
                $attendance = new Attendance();
                $attendance->user_id = Auth::id();
                $attendance->date = date("Y-m-d");
                $attendance->out = date("h:i:sa");
                $attendance->save();
            }
            else{
                $attendance->user_id = Auth::id();
                $attendance->date = date("Y-m-d");
                $attendance->out = date("h:i:sa");
                $attendance->save();
            }
            
        }
        return $request->data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
