<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::get()->all();
        return view('todo.index')->with(compact('todos'));
    }
    public function create(){
        return view('todo.create');
    }
    public function add(Request $request){
        $request->validate([
            'title'=>'required|max:10',
        ]);
        Todo::create([
            'title'=>$request->title,
        ]);
       return redirect()->back()->with('success','Created Sucessfully!');
    }
    public function edit($id){
        $todo= Todo::find($id);
        return view('todo.edit')->with(compact('todo'));
    }
    public function update(Request $request){
        $todo= Todo::find($request->id);
        $todo->update([
            'title'=>$request->title,
        ]);
       return redirect('/index')->with('success','Updated Sucessfully!');
    }
    public function delete($id){
        $todo= Todo::find($id);
        $todo->delete();
        return redirect()->back()->with('success','Deleted Sucessfully!');
    }
}
