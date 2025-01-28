<?php

namespace Modules\Admin\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Admin\Entities\JobType;

class JobTypeController extends Controller
{


    /************  Get JOB Type    *************/ 


        public function index()
        {
            $job_types=JobType::orderBy('id','desc')->get();
            return view('admin::admin.job_type.index',get_defined_vars());
        }

    /************  Create JOB Type    *************/ 

        public function add()
        {
            return view('admin::admin.job_type.add');
        }

    /************  Get JOB Type    *************/

        public function store(Request $request)
        {
        $request->validate([
            'name' => ['required', 'unique:job_types', 'max:255'],
           
        ]);

        JobType::create([
            "name"=>$request->name,
            "description"=>$request->description,
        ]);


            return redirect()->route('admin.job.type')->with('success', 'Your Job Type has been Inserted.');
        }
    /************  Edit JOB Type    *************/

        public function edit($id)
        {
            $job_type=JobType::find($id);
            return view('admin::admin.job_type.edit',get_defined_vars());
        }

    /************  Update JOB Type    *************/

        public function update(Request $request)
        {
            $request->validate([
                // 'name' => 'required|unique:job_types|max:255' . $request['id'],
                'name' => 'required|unique:job_types,name,' . $request->id

            ]);

            // return 1;

            JobType::find($request['id'])->update([
                "name" => $request->name,
                "description" => $request->description,
            ]);


            return redirect()->route('admin.job.type')->with('success', 'Your Job Type has been Update.');
        }

    /************  Destroy JOB Type    *************/

        public function delete($id)
        {
             JobType::find($id)->delete();

        
             return redirect()->route('admin.job.type')->with('success', 'Your Job Type has been Delete.');
        }

}
