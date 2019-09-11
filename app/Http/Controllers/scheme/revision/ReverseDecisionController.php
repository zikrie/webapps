<?php

namespace App\Http\Controllers\scheme\revision;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use DB;

class ReverseDecisionController extends Controller
{
    // BK TO BBK
    public function index_bk_to_bbk()
    {
        return view ('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.PK.index');
    }

    public function index_IO_bk_to_bbk()
    {
          return view ('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.IO.index');
    }

    public function index_SCO_bk_to_bbk()
    {
         return view ('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SCO.index');
    }

    public function index_SAO_bk_to_bbk()
    {
          return view ('scheme.noticeAccident.revision.reverse_decision_bk_to_bbk.SAO.index');
    }
    // BK TO BBK


    // NATIONALITY
    public function index_nationality()
    {
        return view ('scheme.noticeAccident.revision.reverse_decision_nationality.PK.index');
    }
    public function index_IO_nationality()
    {
          return view ('scheme.noticeAccident.revision.reverse_decision_nationality.IO.index');
    }

    public function index_SCO_nationality()
    {
         return view ('scheme.noticeAccident.revision.reverse_decision_nationality.SCO.index');
    }

    public function index_SAO_nationality()
    {
          return view ('scheme.noticeAccident.revision.reverse_decision_nationality.SAO.index');
    }
    //NATIONALITY
  
}





