<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class BossController extends Controller
{
        public function index()
    {
        return view('bosses.index');
    }

    public function create()
    {
        return "Add a new boss (from the controller)";
    //
}

}
