<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index(){
       return view ('admin_index') ;
    }
//product
    public function product(){
        return view ('admin_product') ;
     }
     public function addproduct(){
        return view ('addproduct') ;
     }
     public function editproduct(){
        return view ('editproduct') ;
     }

     //category
     public function category(){
        return view ('admin_category') ;
     }
     public function addcategory(){
        return view ('addcategory') ;
     }
     public function editcategory(){
        return view ('editcategory') ;
     }


//account
     public function account(){
        return view ('admin_account') ;
     }
     public function addaccount(){
        return view ('addaccount') ;
     }
     public function editaccount(){
        return view ('editaccount') ;
     }

//oders
     public function oders(){
        return view ('admin_oders') ;
     }
     public function detailoders(){
        return view ('detailoders') ;
     }






    
}
