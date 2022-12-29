<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\QuestionCategory;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function Qview(){
        $catg = QuestionCategory::get();
        $data = Question::with(['Qcategory'])->get();
        return view('superadmin.page.question_view', compact('data','catg'));
    }
    public function Qadd(){
        $data = QuestionCategory::get();
        return view('superadmin.page.question_add',compact('data'));
    }
    public function Qstore(Request $request){
        // return $request;
        $q_counte = count($request->question);
        
        if($q_counte !=NULL){
            for ($i=0; $i < $q_counte; $i++) { 
                // echo $request->question[$i];
                $qus = new Question();
                $qus->que_cat_id = $request->que_cat_id;
                $qus->question = $request->question[$i]; 
                $qus->op_1 = $request->op_1[$i]; 
                $qus->op_2 = $request->op_2[$i]; 
                $qus->op_3 = $request->op_3[$i]; 
                $qus->op_4 = $request->op_4[$i]; 
                $qus->ans = $request->ans[$i]; 
                $qus->save();
               
            }
            
        }else{
            return 'not save';
        }
        return redirect()->route('q.view');
    }

    public function Qdelete($id){
        Question::find($id)->delete();
        return redirect()->back();
    }

    public function Qcategory(){
        $data = QuestionCategory::get();
        return view('superadmin.page.question_catg', compact('data'));
    }
    public function Catstore(Request $request){
        $request->validate([
            'name' => 'required'
        ]);
        $data = new QuestionCategory();
        $data->name = $request->name;
        $data->save();
        return redirect()->back();
    }

}
