<?php

namespace Modules\Admin\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Admin\Entities\Services;
use Intervention\Image\ImageManagerStatic as Image;
use File;

class ServiceController extends Controller
{

    /***************  View Service ****************/ 

        public function index()
        {
            $total_services = Services::get();
            return view('admin::admin.service.index', get_defined_vars());
        }

    /***************  Create Service ****************/ 

        public function add(Request $request)
        {
            $parent_services=Services::where('parent_id',0)->get();
            return view('admin::admin.service.add',get_defined_vars());
        }

    /***************  Store Service ****************/ 

        public function store(Request $request)
        {
            // return $request;

            // Upload Image

            if ($request->image) {
                $filename = time() . '.' . $request->image->extension();
                $path = public_path('services/image/');
                $upload_image = $path . $filename;
                if (!File::exists($path)) {
                    File::makeDirectory($path, $mode = 0777, true, true);
                }
                $img = Image::make($request->image)->resize(540, 400);
                $img->save($upload_image);

                $image_name = 'services/image/' . $filename;
            } else {
                $image_name = "";
            }

            // Upload Icon

            if ($request->icon) {
                $filenameicon = time() . '.' . $request->icon->extension();
                $path = public_path('services/image/');
                $upload_icon = $path . $filenameicon;
                if (!File::exists($path)) {
                    File::makeDirectory($path, $mode = 0777, true, true);
                }
               $img = Image::make($request->image);
                $img->save($upload_icon);

                $icon_name = 'services/image/' . $filenameicon;
            } else {
                $icon_name = "";
            }

        
            // Save Data to Mysql

            $data = [
                'name' => $request->name,
                'description' => $request->description,
                'icon' => $icon_name,
                'image' => $image_name,
                'parent_id' => $request->parent_id==null?0:$request->parent_id,
            ];
            $response = Services::insert($data);

            if ($response) {
                return redirect()->route('admin.services')->with('success', 'Your Service has been Inserted.');
            } else {
                return redirect()->route('admin.services')->with('error', 'Something Went Wrong');
            }
        }

    /***************  Update Service ****************/ 

        public function update(Request $request)
        {
            // return $request;
            /**** Upload Image  ****/

       
            $image_name = $request->old_image;
            if ($request->image) {
                $filename = time() . '.' . $request->image->extension();
                $path = public_path('services/images/');
                $upload_image = $path . $filename;
                if (!File::exists($path)) {
                    File::makeDirectory($path, $mode = 0777, true, true);
                }
                $img = Image::make($request->image)->resize(540, 400);
                $img->save($upload_image);

                $image_name = 'services/images/' . $filename;
            } 

            // return $image_name ;
            /**** Upload Icon  ****/

            
            $icon_name = $request->old_icon;

            if ($request->icon) {
                $filenameicon = time() . '.' . $request->icon->extension();
                $path = public_path('services/images/');
                $upload_icon = $path . $filenameicon;
                if (!File::exists($path)) {
                    File::makeDirectory($path, $mode = 0777, true, true);
                }
                $img = Image::make($request->icon);
                $img->save($upload_icon);

                $icon_name = 'services/images/' . $filenameicon;
            } else {
               
            }

            /**** Upload Service  ****/

            // return $image_name;

           
            $response = Services::find($request['id'])->update(['name' => $request->name,
            'description' => $request->description,
            'icon' => $icon_name,
            'image' => $image_name,
            ]);
            if ($response) {
                return redirect()->route('admin.services')->with('success', 'Your Service has been Updated.');
            } else {
                return redirect()->route('admin.services')->with('error', 'Something Went Wrong');
            }
        }

    /***************  Edit Service ****************/ 

        public function edit($id)
        {
            $service = Services::find($id);
            return view('admin::admin.service.edit', get_defined_vars());
        }

    /***************  Delete Service ****************/    

        public function destroy($id, Request $request)
        {
            $response = Services::where('id', $id)->delete();
            if ($response) {
                return redirect('/admin/services')->with('success', 'Your Packages has been Deleted.');
            } else {
                return redirect('/admin/services')->with('error', 'Something Went Wrong');
            }
        }

    /***************  Delete Service ****************/    

        public function view(Request $request)
        {
            return view('admin::admin.service.view');
        }
}
