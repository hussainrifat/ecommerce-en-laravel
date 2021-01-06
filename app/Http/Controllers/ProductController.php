<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\category;
use App\Models\product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\cart;

class ProductController extends Controller
{
    public function addNewCategory(Request $request){

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


    public function addProduct(Request $request){

        $category= category::get();
        
          return view('admin.add_product',['category'=>$category]);

    }

    public function allProduct(Request $request){

        $product= product::get();
        
          return view('admin.product',['products'=>$product]);

    }

    public function editProduct($id){

        $category= category::get();
        $product= product::find($id);
     
        return view('admin.edit_product')->with (compact('category','product'));
    }


    public function updateProduct(Request $request,$id){

        $product= product::find($id);

         $product_image = time().'.'.request()->product_image->getClientOriginalExtension();               
        request()->product_image->move(base_path('product_image'), $product_image);
       

        product::where('id',$id)->update([
            'product_name'=>$request->product_name, 
            'category_name'=>$request->product_category, 
            'product_selling_price'=>$request->product_selling_price, 
            'product_discount_price'=>$request->product_discount_price, 
           'product_image'=>"product_image/".$product_image, 
           'product_long_description'=>$request->product_long_description, 
           'product_short_description'=>$request->product_short_description, 
           'product_quantity'=>$request->product_quantity, 
           'product_slug'=>str_replace(' ','-',$request->product_name), 
           'active_status'=>$request->product_status, 
            ]);

            return redirect('admin_product');

      
    }



    public function addNewProduct(Request $request){
        

        $product_image = time().'.'.request()->product_image->getClientOriginalExtension();               
        request()->product_image->move(base_path('product_image'), $product_image);

       

        product::create([
            'product_name'=>$request->product_name, 
            'category_name'=>$request->product_category, 
            'product_selling_price'=>$request->product_selling_price, 
            'product_discount_price'=>$request->product_discount_price, 
           'product_image'=>"product_image/".$product_image, 
           'product_long_description'=>$request->product_long_description, 
           'product_short_description'=>$request->product_short_description, 
           'product_quantity'=>$request->product_quantity, 
           'product_slug'=>str_replace(' ','-',$request->product_name), 
           'active_status'=>$request->product_status, 
            ]);
   

    }





    public function allCategory()
    {
        $category= category::get();

        return view('admin.all_category',['categories'=>$category]);

    }

    public function addToCart(Request $request)
    {

        if (Auth::check()) {

            $id=auth()->user()->id;

            if($carts=cart::where('product_id',$request->product_id)->where('user_id',$id)->where('active_status','0')->first())
            {
                $old_cart=$carts->product_quantity;
                $new_cart=$request->product_quantity;
                $new= $old_cart+$new_cart;

                cart::where('user_id',$id)->where('product_id',$request->product_id)->update(['product_quantity'=>$new]);

            }

            else
            {
                cart::create([
                    'user_id'=>$id,
                    'product_id'=>$request->product_id,
                    'product_quantity'=>$request->product_quantity,
                    ]);
            }

            return back();
        }
        
        else return redirect('sign_in');
    }


    public function removeFromCart(Request $req)
    {

        if (Auth::check()) {

            // $user_id=auth()->user()->id;
            // $cart_id=$req->cart_id;
            // cart::where('id',$cart_id)->where('user_id',$user_id)->delete();
            cart::destroy($req->cart_id);

   
            return back();
        }
        
        else return redirect('sign_in');

        

    }


    /// Showing Number Of Cart

    static function cartItem()
    {

        if(Auth::check())

        {
            $id=auth()->user()->id;
            return cart::where('user_id',$id)->where('active_status','0')->count();
        }
    }


        /// Showing Number Of Cart in Sidebar
    static function cartList()
    {

            $user_id=auth()->user()->id;
    
            // $product= cart::where('user_id',$user_id)->first();
            // dd( cart::where('user_id',$user_id)->with('getProduct')->get());
            $product=cart::where('user_id', $user_id)->where('active_status','0')->orderBy('id','desc')->with('getProduct')->get();
            return $product;
       
        
    }




}
