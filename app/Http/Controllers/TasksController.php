<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    //index
    public function index()
    {
    	return view('tasks.index');
    }
}
