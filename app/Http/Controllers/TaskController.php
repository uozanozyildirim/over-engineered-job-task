<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class TaskController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function index()
    {
        return view('homepage');
    }


}
