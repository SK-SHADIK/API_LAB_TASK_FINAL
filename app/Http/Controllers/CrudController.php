<?php

namespace App\Http\Controllers;
use App\Models\CrudModel;


use Illuminate\Http\Request;

class CrudController extends Controller
{
    function Crud(){
        $c=CrudModel::all();
        // return view('crud', ['c' => $c]);
        return response()->json($c);
    }
    function CreateNews(){
        // return view('createNews');
        return response()->json();

    }
    function StoreNews(Request $request){
        $a = new CrudModel();
        $a->title= $request->title;
        $a->description= $request->description;
        $a->type= $request->type;
        $a->date= $request->date;
        $a->save();
        // return redirect()->route('crud');
        return response()->json('$a');
    }
    function showNews($id){
        $data = CrudModel::find($id);
        // return redirect()->route('updateNews',['data'=>$data]);
        return response()->json($data);
    }
    function updateNews(Request $req){
        $Data = CrudModel::find($req->id);
        $Data->title = $req->title;
        $Data->description = $req->description;
        $Data->type = $req->type;
        $Data->date = $req->date;
        $Data->save();

        // return redirect()->route('updateNews');
        return response()->json();
    }
    function DeleteNews(Request $request){
        $id=$request->id;
        $data = CrudModel::where('id',$id)->first();
        $data->delete();
        // return redirect()->route('crud');
        return response()->json();
    }
    function newsById($id){
        $newsId = CrudModel::where('id', '=', "$id")->get();

        return response()->json($newsId);
        //return redirect()->route('crud',['newsId'=>$newsId]);
    }
    function newsByType($type){
        $newsType = CrudModel::where('type', '=', "$type")->get();

        return response()->json($newsType);
        //return redirect()->route('crud',['newsType'=>$newsType]);
    } 
    function newsByDate($date){
        $newsDate = CrudModel::where('date', '=', "$date")->get();

        return response()->json($newsDate);
        //return redirect()->route('crud',['newsDate'=>$newsDate]);
    }
}
