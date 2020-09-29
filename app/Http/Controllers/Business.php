<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Retailer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Business extends Controller
{
    //
    function save(Request $req){
      //dd($req->all());
      //  dd($req->file('image'));
      $retailer= new Retailer;
      $retailer->busi_name= $req->busi_name;
      $retailer->busi_type= $req->busi_type;
      $retailer->contact= $req->contact;
      $retailer->landmark= $req->landmark;
      $retailer->city= $req->city;
      $retailer->zip= $req->zip;

      $busi_name= $req->input('busi_name');
      $req->file('busi_img')->storeAs('image',$busi_name.'.jpg','public');
      $retailer->busi_img= $busi_name;
     //   $req->image->store('image','public');
      //  return $busi_name;
       // print_r($req->input());
      //  $retailer= new Retailer;
      //  $retailer->fname= $req->fname;
      //  $retailer->lname= $req->lname;
       $retailer->save();
       return redirect()->back()->with('message', 'RETAILER ADDED
       !');


    }
    function list(){

       // $data= Retailer::all()->paginate(1);
        $data = DB::table('business')->paginate(15);
        return view('worker/edit',['data'=>$data]);
      // dd($data);


      }


      public function edit($id)
      {
           // get the shark
        $shop = Retailer::find($id);

        // show the edit form and pass the shark
        return View('worker/retailer-edit')
            ->with('shop', $shop);
      }

      public function update(Request $req , $id)
      {

        $shop = Retailer::find($id);
        $shop->busi_name= $req->busi_name;
        $shop->busi_type= $req->busi_type;
        $shop->contact= $req->contact;
       // $$shop->landmark= $req->landmark;
        $shop->city= $req->city;
        $shop->zip= $req->zip;

        $busi_name= $req->input('busi_name');
        $req->file('busi_img')->storeAs('image',$busi_name.'.jpg','public');
        $shop->busi_img= $busi_name;

        $shop->update();
       return redirect('/edit')->with('message', 'RETAILER UPDATED
       !');

      }

      public function delete($id)
      {
           // get the shark
        $shop = Retailer::find($id);
        $del= $shop->busi_name;


        Storage::delete('image/'.$del.'.jpg');

        $shop->delete();
        return redirect('/edit')->with('message', 'RETAILER DELETED
        !');
      }


}
