<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TrainingCourse;
use App\TrainingCenters;
use Illuminate\Support\Facades\Crypt;

class TrainingCentersController extends Controller
{
     public function list()
    {
        $centers = TrainingCenters::orderby('id','desc')->paginate(10);
        return view('admin.trainingCenters.list', compact('centers'));
    }

    public function add()
    {
        $courses = TrainingCourse::orderby('id','desc')->get();
        return view('admin.trainingCenters.add',compact('courses'));
    }

    public function save(Request $request)
    {
        $new = new TrainingCenters;
        $new->name = $request->name;
        $new->email = $request->email;
        $new->mobile_no = $request->mobile_no;
        $new->location = $request->location;
        $new->training_course_id = implode(', ', $request->centers);
        $new->save();

         $new = TrainingCenters::find($new->id);
        $new->link = config('app.url')."trainee/enquiry/" . encrypt($new->id);
        $new->save();
        return redirect(route('training.centers.list'))->withSuccess('Training Center  Added Successfully');

    }

    public function edit($id)
    {
        $courses = TrainingCourse::orderby('id','desc')->get();
        $center = TrainingCenters::where('id',$id)->first();
        return view('admin.trainingCenters.edit',compact('center','courses'));
    }

    public function update(Request $request)
    {
        $new = TrainingCenters::find($request->id);
        $new->name = $request->name;
        $new->email = $request->email;
        $new->mobile_no = $request->mobile_no;
        $new->location = $request->location;
        if($request->courses!=null)
        {
            $new->training_course_id = implode(', ', $request->courses);
        }
        $new->save();
               
        return redirect(route('training.centers.list'))->withSuccess('Training Center Updated Successfully');
    }

    public function delete(Request $request)
    {
        $Service = Service::find($request->id);

        if($Service->delete()){
        return redirect(route('service.provider.list'))->withSuccess('Supplier Removed Successfully');

        }else{
            return redirect(route('service.provider.list'))->withSuccess('Supplier Removed Successfully');

        }
    }
}
