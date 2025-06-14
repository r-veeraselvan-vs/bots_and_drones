<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TrainingCourse;

class TrainingCoursesController extends Controller
{
    public function list()
    {
        $courses = TrainingCourse::orderby('id','desc')->paginate(10);
        return view('admin.trainingCourse.list', compact('courses'));
    }

    public function add()
    {
        return view('admin.trainingCourse.add');
    }

    public function save(Request $request)
    {
        $new = new TrainingCourse;
        $new->name = $request->name;
        $new->description = $request->description;
        $new->save();
        return redirect(route('courses.list'))->withSuccess('Courses Added Successfully');

    }

    public function edit($id)
    {
        $course = TrainingCourse::where('id',$id)->first();
        return view('admin.trainingCourse.edit',compact('course'));
    }

    public function update(Request $request)
    {
        $new = TrainingCourse::find($request->id);
        $new->name = $request->name;
        $new->description = $request->description;
        $new->save();
               
        return redirect(route('courses.list'))->withSuccess('Courses Updated Successfully');
    }

    public function delete(Request $request)
    {
        $Service = TrainingCourse::find($request->id);

        if($Service->delete()){
        return redirect(route('courses.list'))->withSuccess('Supplier Removed Successfully');

        }else{
            return redirect(route('courses.list'))->withSuccess('Supplier Removed Successfully');

        }
    }
}
