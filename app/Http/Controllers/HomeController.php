<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\students;
use Illuminate\Http\Request;
use App\Rules\ValidCodeStudent;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $student = students::find(auth()->user()->id);
        $lessons=null;
        foreach ($student->codes()->where('status','1')->get() as $code) {
            $lesson = $code->lesson;
            $lessons[] = [
                'id' => $lesson->id,
                'title' => $lesson->title,
            ];
        }
        return view('home')->with('lessons',$lessons);
    }
    public function verifiycode(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'code'=>['required', new ValidCodeStudent]
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        DB::table('codes')->where('code',$request->code)->update([
            'status'=>'1'
        ]);
        return response()->json(['success'=>'lesson added'],200);
    }
    public function lesson($id)
    {
        $lesson = Lesson::where('id',$id)->select('title', 'path')->get()[0];
        $name0 = explode('/',$lesson->path)[2];
        $name = explode('.',$name0)[0];
        return view('video')->with('lesson',$lesson)->with('name',$name);
        // return Storage::disk('other')->get($name.'.mp4');
    }
    public function play($name)
    {
         return Storage::disk('other')->get($name.'.mp4');
    }
}
