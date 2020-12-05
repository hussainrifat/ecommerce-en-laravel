<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\category;

class ProductController extends Controller
{
    public function add_new_category(Request $request){

        $category_name= $request->category_name;
        $category_description= $request->category_description;
        $category_status= $request->category_status;
        $category_image= $request->category_image;

        $category_image = time().'.'.request()->category_image->getClientOriginalExtension();               
        request()->category_image->move(base_path('category_image'), $category_image);
   


         category::create([
             'category_name'=>$category_name, 
             'category_description'=>$category_description, 
             'active_status'=>$category_status, 
            'category_image'=>"category_image/".$category_image, 

             ]);

          return redirect('add_category');


    }

    public function add_new_product(Request $request){

        $category= category::get();
        
        file_put_contents('category.txt',$category);
          return view('admin.add_product',['category'=>$category]);

    }

    public function all_category()
    {
        $category= category::get();

        return view('admin.all_category',['categories'=>$category]);


    }
}
