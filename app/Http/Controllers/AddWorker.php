<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AddWorker extends Controller
{


    function save(Request $req){
        //dd($req->all());
         // dd($req->file('image'));

        $worker= new User;
        $worker->name= $req->name;
        $worker->user_type= $req->user_type;
        $worker->phone= $req->phone;
        $worker->email= $req->email;
        $worker->password= Hash::make($req['password']);


        $name= $req->input('name');
        $req->file('user_img')->storeAs('image/users',$name.'.jpg','public');
        $worker->user_img= $name;
       //   $req->image->store('image','public');
        //  return $busi_name;
         // print_r($req->input());
        //  $worker= new Retailer;
        //  $worker->fname= $req->fname;
        //  $worker->lname= $req->lname;
         $worker->save();
         return redirect()->back()->with('message', 'Employee Added
         !');
    }

    function list(){

        // $data= Retailer::all()->paginate(1);
         $data = DB::table('users')->paginate(15);
         return view('admin/list-employees',['data'=>$data]);
       // dd($data);


       }

       public function delete($id)
      {
           // get the shark
           $worker = User::find($id);
        $del= $worker->name;


        Storage::delete('image/users'.$del.'.jpg');

        $worker->delete();
        return redirect('/list-employees')->with('message', 'USER DELETED
        !');
      }

      public function edit($id)
      {
           // get the shark
        $worker = User::find($id);

        // show the edit form and pass the shark
        return view('admin/edit-employees')
            ->with('worker', $worker);
      }

      public function update(Request $req , $id)
      {

        $worker = User::find($id);
        $worker->name= $req->name;
        $worker->user_type= $req->user_type;
        $worker->phone= $req->phone;
        $worker->email= $req->email;
        $worker->password= Hash::make($req['password']);


        $name= $req->input('name');
        $req->file('user_img')->storeAs('image/users',$name.'.jpg','public');
        $worker->user_img= $name;

         $worker->save();
         return redirect("/list-employees")->with('message', 'Employee Update
         !');

      }
}
