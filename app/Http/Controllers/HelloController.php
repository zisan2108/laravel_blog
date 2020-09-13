<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HelloController extends Controller
{
    public function index()
    {
        $post=DB::table('posts')->join('categories','posts.categories_id','categories.id')
                ->select('posts.*','categories.name','categories.slug')->paginate(3);
       return view('page.index',compact('post'));
    }


    public function Welcome()
    {
        return view('welcome');
    }

    public function contract()
    {
    	return view('page.contact');
    	
    }

     public function about()
    {
    	return view('page.about');
    	
    }
  

 public function AddCategory()
    {
        return view('post.add_category');
        
    }
    public function StoreCategory(Request $request)
    {
         $validatedData = $request->validate([
        'name' => 'required|unique:categories|max:25|min:4',
        'slug' => 'required|unique:categories|max:25|min:4',
        ]);

        $data=array();
        $data['name']=$request->name;
        $data['slug']=$request->slug;
        $catrgory=DB::table('categories')->insert($data);
       
       //return response()->json($data);
        //echo "<pre>";
        //print_r($data);

        if ($catrgory) {
            $notification=array(
                'messege'=>'Successfully Category Incerted',
                'alert-type'=>'success'
                );
            return Redirect()->route('all.category')->with($notification);
        }else{
            $notification=array(
                'messege'=>'Something is Worng!',
                'alert-type'=>'error'
                );
            return Redirect()->back()->with($notification);

        }
    }

}
