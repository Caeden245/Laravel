<?php

namespace App\Http\Controllers;
use App\Models\Bosses;

use Illuminate\Http\Request;


class BossController extends Controller
{
    public function index()
    {
        $bosses = Bosses::all();
        return view('bosses.index', ['bosses' => $bosses]);
    }

    public function create()
    {
        return view('bosses.create');
        //
    }
}
