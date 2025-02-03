<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        return view("courses.index");
    }

    public function show(){
        return view("courses.show");
    }

    public function create(){
        return view("courses.create");
    }

    public function store(){
        dd('Cadastrar no banco de dados');
    }

    public function edit(){
        return view("courses.edit");
    }

    public function update(){
        dd('Editar no banco de dados');
    }
    
    public function destroy(){
        dd('Excluir do banco de dados');
    }
}
