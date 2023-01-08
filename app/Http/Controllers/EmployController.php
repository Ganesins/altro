<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employ;

class EmployController extends Controller
{
    //
    
        public function create(){
            return view('create_view');
        
    } 
    public function store(Request $request){

// $request->validate([
//             'name' => 'required',
//             'email' => 'required',
//             'contact_no'=>'required|numeric',
//             'qualify' => 'required',
//             'experience' => 'required|numeric',
//             'resume' => 'required|mimes:pdf,doc,docx|max:2048'
//         ]);

        // $file_name = time().".".$request->resume->extension();
        // $request->resume->move(public_path('files'), $file_name);
        
        $name=$request->input('name');
        $age=$request->input('age');
        $phone=$request->input('phone');
        $email=$request->input('email');
        $address=$request->input('address');
        $dob=$request->input('dob');
        $qulificatio=$request->input('qulification');

        $user= new employ;
        $user->name=$name;
        $user->age=$age;
        $user->phone=$phone;
        $user->email=$email;
        $user->address=$address;
        $user->dob=$dob;
        $user->qulification=$qulificatio;


        $user->save();

        return'New employ added <a href="list">view employ list</a>';

    }

    public function list(){
        $employ=employ::all();
        return view('employ_list',['employ'=>$employ]);
    }

    public function edit($id){
        $employ=employ::find($id);
        return view('edit_employ',['employ'=>$employ]);
    }

    public function update(Request $request,$id){
        $employ=employ::find($id);
        $employ->name=$request->input('name');
        $employ->age=$request->input('age');
        $employ->phone=$request->input('phone');
        $employ->email=$request->input('email');
        $employ->address=$request->input('address');
        $employ->dob=$request->input('dob');
        $employ->qulification=$request->input('qulification');

        $employ->save();
        return 'record updated! <a href="'.url('list').'">view list</a>';

    }

    public function delete($id){
        $employ=employ::find($id);
        $employ->delete();
        return'record deleted<a href="'.url('list').'"> click to list</a>';

    }

}
