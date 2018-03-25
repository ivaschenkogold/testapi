<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Status;

class HomeController extends Controller
{
    public function index(Status $status)
    {
        return view('testapi_index')->withStatuses($status->all());
    }
}
