<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutflexboxController extends Controller
{
    //
    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = [];
        return view('layoutflexbox',$data);
    }

}
