<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use App\Models\Product;
use App\Models\Catagory;
use App\Models\Product_sold;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function view_catagory(){
        if(Auth::id()){
        $data=Catagory::all();
        return view('admin.catagory', compact('data') );
        }else{
            return redirect('login');
        }
    }
    public function add_catagory(Request $request){
        if(Auth::id()){

        $data =new Catagory;
        $data->catagory_name=$request->catagory;
        $data->save();
        Alert::success('Catagor Added successfully');
        return redirect()->back()->with('message','Ctagory Added successfully') ;
        }else{
            return redirect('login');
        }
    }
    public function delete_catagory($id){
        if(Auth::id()){
        $data=Catagory::find($id);
        $data->delete();
        Alert::warning('Catagor deleted successfully');
        return redirect()->back();
        }else{
            return redirect('login');
        }
    }

    public function view_product(){
        if(Auth::id()){
        $catagory = Catagory::all();
        return view('admin.product', compact('catagory') );
        }else{
            return redirect('login');
        }
    }

    public function add_product(Request $request){
        if(Auth::id()){
        $product =new Product;
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->discount_price=$request->dis_price;
        $product->catagory=$request->catagory;
        $product->title=$request->title;

        
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product', $imagename);
        $product->image=$imagename ;
        $product->save();
        Alert::success('Product Added successfully');
        return redirect()->back();
        }else{
            return redirect('login');
        }
    }
    public function show_product(){
        if(Auth::id()){
        $product = Product::all();
        return view('admin.show_product', compact('product') );
        }else{
            return redirect('login');
        }
    }

    
    public function delete_product($id){
    if(Auth::id()){
    $product=Product::find($id);

    $image_path = public_path('product/'.$product->image);

    if(file_exists($image_path))
    {
        unlink($image_path);
    }
    $product->delete();
    Alert::warning('Product deleted successfully');
    return redirect()->back();
    }else{
        return redirect('login');
    }
    }
    public function update_product($id){
        if(Auth::id()){
        $product=Product::find($id);
        $catagory=Catagory::all();
        return view('admin.update_product', compact('product' , 'catagory') );
        }else{
            return redirect('login');
        }
    }
    public function update_product_confirm(Request $request , $id){
        if(Auth::id()){
            $product=Product::find($id);

            $product->title=$request->title;
            $product->description=$request->description;
            $product->price=$request->price;
            $product->quantity=$request->quantity;
            $product->discount_price=$request->dis_price;
            $product->catagory=$request->catagory;

            if($request->hasFile('image')){
                
                $destination = 'product/'.$product->image;
                if(File::exists($destination)){
                    File::delete($destination);
                }
                $file = $request->file('image');
                $extention = $file->getClientOriginalExtension();
                $filename = time().'.'.$extention;
                $file->move('product/', $filename);
                $product->image= $filename;
            }
           
            $product->save();
            Alert::success('Product Updated successfully');

            return redirect()->back();
        }else{
           return redirect('login');
        }
       
    }

    public function show_message(){
        if(Auth::id()){
        $message=Message::all();
        return view('admin.show_message', compact('message') );
        }else{
            return redirect('login');
        }
    }
    public function fidelity_cart(){

        $cart = User::where('usertype', '!=', 1)->get();

        return view('admin.carts', compact('cart'));
    }

    public function cart($id){
        if(Auth::id()){
        $user=user::find($id);
        return view('admin.add_cart', compact('user'));
        }else{
            return redirect('login');
        }
    }


    public function add_cart(Request $request , $id){
        if(Auth::id()){
            $user=user::find($id);
            $user->numcarte=$request->numcarte;
           
            $user->save();
            Alert::success('fidelity carte Added successfully');

            return redirect()->route('fidelity_cart');
        }else{
           return redirect('login');
        }
       
    }

    public function points($id){
        if(Auth::id()){
        $user=user::find($id);
        return view('admin.add_points', compact('user'));
        }else{
            return redirect('login');
        }
    
    }

    public function add_points(Request $request , $id){
        if(Auth::id()){
            $user=user::find($id);
            $user->points=$request->points;
            $user->save();
            Alert::success('points Added successfully');
            return redirect()->route('fidelity_cart');
        }else{
           return redirect('login');
        }
       
    }
    public function delete_carte($id ){
        if(Auth::id()){

        $user=user::find($id);
        $user->numcarte = null;
        $user->points = null;
        $user->save();
        Alert::warning('carte deleted successfully');
        return redirect()->back();
        }else{
            return redirect('login');
        }
    }



    public function view_product_sold(){
        if(Auth::id()){
        $catagory = Catagory::all();
        return view('admin.product_sold', compact('catagory') );
        }else{
            return redirect('login');
        }
    }


    public function add_product_sold(Request $request){
        if(Auth::id()){
        $product =new Product_sold;
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->discount_price=$request->dis_price;
        $product->catagory=$request->catagory;
        $product->title=$request->title;
        $product->quantity_sold=$request->quantity_sold;


        
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product', $imagename);
        $product->image=$imagename ;
        $product->save();
        Alert::success('the Product sold Added successfully');
        return redirect()->back();
        }else{
            return redirect('login');
        }
    }

    public function show_product_sold(){
        if(Auth::id()){
        $product = Product_sold::all();
        return view('admin.show_product_sold', compact('product') );
        }else{
            return redirect('login');
        }
    }

    public function delete_product_sold($id){
        if(Auth::id()){
        $product=Product_sold::find($id);
    
        $image_path = public_path('product/'.$product->image);
    
        if(file_exists($image_path))
        {
            unlink($image_path);
        }
        $product->delete();
        Alert::warning('Product deleted successfully');
        return redirect()->back();
        }else{
            return redirect('login');
        }
        }
        public function update_product_sold($id){
            if(Auth::id()){
            $product=Product_sold::find($id);
            $catagory=Catagory::all();
            return view('admin.update_product_sold', compact('product' , 'catagory') );
            }else{
                return redirect('login');
            }
        }
        public function update_product_confirm_sold(Request $request , $id){
            if(Auth::id()){
                $product=Product_sold::find($id);
    
                $product->title=$request->title;
                $product->description=$request->description;
                $product->price=$request->price;
                $product->quantity=$request->quantity;
                $product->discount_price=$request->dis_price;
                $product->catagory=$request->catagory;
                $product->quantity_sold=$request->quantity_sold;

    
                if($request->hasFile('image')){
                    
                    $destination = 'product/'.$product->image;
                    if(File::exists($destination)){
                        File::delete($destination);
                    }
                    $file = $request->file('image');
                    $extention = $file->getClientOriginalExtension();
                    $filename = time().'.'.$extention;
                    $file->move('product/', $filename);
                    $product->image= $filename;
                }
               
                $product->save();
                Alert::success('Product Updated successfully');
    
                return redirect()->back();
            }else{
               return redirect('login');
            }
           
        }
    



}
