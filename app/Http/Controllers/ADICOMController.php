<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ADICOMController extends Controller
{
    public function academie()
    {
        return view('adicom.academy');
    }

    public function awards()
    {
        return view('adicom.awards');
    }
}
