<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use App\Models\Product;
use App\Models\Product_sold;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function index(){

        $product = Product::paginate(9);

        return view('home.userpage', compact('product'));
    }

    
    public function redirect()
    {
        if(Auth::check()) {
            $usertype = Auth::user()->usertype;
    
            if($usertype =='1'){
                return view('admin.home');
            } else {
                $product = Product::paginate(9);
                return view('home.userpage', compact( 'product' ));
            }
        } else {
            return redirect('login');
        }
    }
    
    public function product_details($id){
        $product=Product::find($id);
        return view('home.product_details', compact('product'));
    }

    public function product_sold_details($id){
        $product=Product_sold::find($id);
        return view('home.product_sold_details', compact('product'));
    }

    public function all_product(){

        $product = Product::paginate(3);
        return view('home.all_product', compact('product'));
    }
    public function about(){
        return view('home.about' );
    }
    public function blog(){
        $product_sold = Product_sold::paginate(9);
        return view('home.blog', compact('product_sold'));
    }
    public function contact(){
        return view('home.contact');
    }

    public function add_message( Request $request ){
        
        if(Auth::id()){
            $user = Auth::user();
            $user_message =new Message;
            $user_message->name=$user->name ;
            $user_message->email=$user->email;
            $user_message->phone=$user->phone;

            $user_message->message=$request->message;
            $user_message->save();
            Alert::success(' sending Message  successfully');
            return redirect()->back();
        }
            
        else{
            return redirect('login');
        }
    }

    public function fidelity_card(){
        if(Auth::id()){
        $user = auth()->user();
        $fidelity_card = $user->numcarte;
        $points = $user->points;
        return view('home.fidelity_card', compact('fidelity_card' , 'points'));
        }else{
            return redirect('login');
        }
        
    }

    public function search_product(Request $request){
        $search_text = $request->search;
        $product = Product::where('title', 'LIKE', "%$search_text%")
                           ->orWhere('catagory', 'LIKE', "%$search_text%")
                           ->paginate(9);
    
        return view('home.all_product', compact('product'));
    }


    public function filter($catagory){
        $product = Product::where('catagory', $catagory)->paginate(9);;
        return view('home.all_product', compact('product'));
    }
    
    

    



}
