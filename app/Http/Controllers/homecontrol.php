<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\models\project;
use App\models\lecture;
use Illuminate\Support\Facades\DB;

class homecontrol extends Controller
{
    function index(){
        $data=project::paginate(5);
        return view('homepage',['member'=>$data]);
    }

    function redirect(){
        $typeuser=Auth::user()->uesrtype;
        $data=project::paginate(5);
        
        if($typeuser =='1')
        {
            return view('admin.adminpage',['member'=>$data]);
        }
        
        else
        {
        return view('user',['member'=>$data]);
        }
    }
    
    function newdata(Request $req){
        $member = new project;
        $member ->studentname = $req ->studentname;
        $member ->title = $req ->title;
        $member ->type = $req ->type;
        $member ->supervisor = $req ->supervisor;
        $member ->examone = $req ->examone;
        $member ->examtwo = $req ->examtwo;
        $member ->save();
        return redirect('redirect');
    }

    function upd($x){
        $data=project::find($x);
        return view('update',['disp'=>$data]);
    }

    function heh(Request $req){
        $data=project::find($req->id);

        $data->progress=$req->progress;
        $data->status=$req->status;
        $data->start=$req->start;
        $data->end=$req->end;

        $data ->save();
        
        return redirect('redirect');
    }
}
