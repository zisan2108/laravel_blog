<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CategoeyController extends Controller
{
    public function AllCategory()
    {
    	$category=DB::table('categories')->get();
    	//return response()->json($category); normaliy show korabe
    	return view('post.all_category',compact('category'));
    }

    public function ViewCategory($id)
    {
    	$category=DB::table('categories')->where('id',$id)->first();
    	return view('post.categoryview',compact('category'));
    }

    public function DeleteCategory($id)
    {
    	$delete=DB::table('categories')->where('id',$id)->delete();

            $notification=array(
                'messege'=>'Successfully Category Delete',
                'alert-type'=>'success'
                );
             return Redirect()->back()->with($notification);
        }

        public function EditCategory($id)
        {
        	$category=DB::table('categories')->where('id',$id)->first();
        	return view('post.eidtcategory',compact('category'));
        }

        public function UpdateCategory(Request $request,$id)
        {
        	$validatedData = $request->validate([
        'name' => 'required|max:25|min:4',
        'slug' => 'required|max:25|min:4',
        ]);

        $data=array();
        $data['name']=$request->name;
        $data['slug']=$request->slug;
        $catrgory=DB::table('categories')->where('id',$id)->update($data);

        if ($catrgory) {
            $notification=array(
                'messege'=>'Successfully Category Update',
                'alert-type'=>'success'
                );
            return Redirect()->route('all.category')->with($notification);
        }else{
            $notification=array(
                'messege'=>'Nothing to Update!',
                'alert-type'=>'error'
                );
            return Redirect()->route('all.category')->with($notification);

        }
        }


    }

