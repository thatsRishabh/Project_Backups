<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userinfo;

class ApiTrail extends Controller
{
    function data()
    {
        // echo "hello";
        return ['name'=>'Rishabh'];
        // data is stored in from of array
    }

    function displayInfo()
    {
        return Userinfo::all();
    }
    function displayIndividual($id=null)
    {
        // return ['Result'=>'Your id is '.$id];
        // above is to debug id number


        return $id?Userinfo::find($id):Userinfo::all();
        // above logic say, if $id is available than find with respect to $id else display all
    }
    function addData(Request $req)
    {
        $info = new Userinfo;
        $info->name =$req['name'];
        $info->mobile =$req['mobile'];
        $info->email =$req['email'];
        $info->cpassword =$req['cpassword'];
        $result=$info-> save();
        if($result)
        {
            return ['Result'=>'Your data has been saved successfully'];
        }else
        {
            return ['Result'=>'Your data has not been saved'];
        }
        
    }

    function updateData(Request $req)
    {
        $info=Userinfo::find($req->id);
        $info->name =$req['name'];
        $info->mobile =$req['mobile'];
        $info->email =$req['email'];
        $info->cpassword =$req['cpassword'];
        $result=$info-> save();
        if($result)
        {
            return ['Result'=>'Your data has been saved successfully'];
        }else
        {
            return ['Result'=>'Your data has not been saved'];
        }

    }

    function delete($id)
    {
        $info=Userinfo::find($id);
        $result=$info->delete();
        if($result)
        {
            return ['Result'=>'Your data has deleted successfully'];
        }else
        {
            return ['Result'=>'Your data has not been deleted'];
        }
    }

    function search($name)
    {
        return Userinfo::where("name", "like", "%".$name."%")->get();
    }

    function upload(Request $req)
    {
        $result=$req->file('file')->store('myFolder');
        return ['Result'=>$result]; 
    }

}