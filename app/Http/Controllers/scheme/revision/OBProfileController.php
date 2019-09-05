<?php

namespace App\Http\Controllers\scheme\revision;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use DB;

class ChangeDateODController extends Controller
{

    public function index()
    {
        // return view ('scheme.noticeAccident.revision.ob_profile.PK.index');
    }

    public function index_IO()
    {
        // return view ('scheme.noticeAccident.revision.ob_profile.IO.index');
    }

    public function index_SCO()
    {
        // return view ('scheme.noticeAccident.revision.ob_profile.SCO.index');
    }

    public function index_SAO()
    {
        // return view ('scheme.noticeAccident.revision.ob_profile.SAO.index');
    }

  
}