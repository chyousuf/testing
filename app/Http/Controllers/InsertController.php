<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class insertController extends Controller
{

    public function pageshow(){

        return view('insert');
    }


     function insert(Request $request){
     $name = Input::post('name');
     $email = Input::post('email');
     $password = Input::post('password');
     $gender =Input::post('gender');

     $insert = new User();
     $insert->name = $name;
        $insert->email = $email;
        $insert->password = $password;
        $insert->gender = $gender;
        $insert->save();
        echo 'Values insert Successfully';


    }

    public function showdata(){

          $getdata = User::all();

         return view('showdata',compact('getdata'));
    }

    public function Editview($id){
       $data = User::where('id',$id)->get();
        return view('Editview',compact('data'));
    }


    public function Edit($id){
        $name = Input::post('name');
        $email = Input::post('email');
        $password = Input::post('password');
        $gender =Input::post('gender');

        $update = User::where('id',$id)->update(['name'=>$name,'email'=>$email,'password'=>$password,'gender'=>$gender]);
        if($update > 0){
            echo 'update successfully';
        }else{
            echo 'failure';
        }
    }


    public function delete($id){

        $delete = User::where('id',$id)->delete();

        if($delete > 0){
            echo 'ok';
        }

    }

}
