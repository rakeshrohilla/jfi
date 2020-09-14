<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Retailer;

class Business extends Controller
{
    //
    function save(Request $req){
      //  dd($req->file('image'));
      
        $req->image->store('image','public');
        return 'image uploded';
       // print_r($req->input());
      //  $retailer= new Retailer;
      //  $retailer->fname= $req->fname;
      //  $retailer->lname= $req->lname;
       // echo $retailer->save();
        

    }
}
