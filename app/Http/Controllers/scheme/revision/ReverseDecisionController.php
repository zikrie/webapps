<?php

namespace App\Http\Controllers\scheme\revision;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use DB;

class ReverseDecisionController extends Controller
{

    public function index()
    {
        return view ('scheme.noticeAccident.revision.reverse_decision.PK.index');
    }

    public function index_IO()
    {
        // return view ('scheme.noticeAccident.revision.reverse_decision.IO.index');
    }

    public function index_SCO()
    {
        // return view ('scheme.noticeAccident.revision.reverse_decision.SCO.index');
    }

    public function index_SAO()
    {
        // return view ('scheme.noticeAccident.revision.reverse_decision.SAO.index');
    }

  
}