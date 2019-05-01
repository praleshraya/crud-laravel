<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crud;

class CrudController extends Controller
{
    public function index()
    {
        $cruds = Crud::latest()->paginate(5);
        $result = array(
            'cruds' => $cruds,
        );
        return view('includes.index',$result);
    }

    public function show($id)
    {
        $crud = Crud::find($id);
        return view('includes.show',['crud' => $crud]);
    }

    public function create()
    {
        return view('includes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'country'=> 'required',
            'gender'=> 'required',
        ]);

        Crud::create($request->all());
        return redirect()->route('index')->with('Success','Added Successfully.');
    }
    public function edit($id)
    {
        $crud = Crud::find($id);
        return view('includes.edit',$crud);
    }

    public function update(Request $request, $id)
    {
        return "I am Updated..";
    }
}
