<?php

namespace App\Http\Controllers\scheme\revision;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use DB;

class OBProfileController extends Controller
{

    public function index()
    {
        $idtype=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['idtype']);
        $sql = 'select d.docdescen,d.doctype,d.docdescbm, d.doccat, n.priority from doctype d, noticedoc n '
                . 'where n.casetype=? and n.doctype = d.doctype order by n.priority';
        $uniquerefno = "2019070001";
        $caserefno = "201907240008";
        $noticetype="03";
        $doclist = DB::select($sql,[$noticetype]);
        $alldoclist = DB::select('select docdescen,doctype,docdescbm, doccat from doctype order by doccat desc, doctype');
        $docinfo =DB::select('Select r.notes, r.docid, r.date, r.time, r.doccat, r.doctype, r.docname, r.doccount, t.docdescen from docrepository r,doctype t where r.doctype=t.doctype AND caserefno=? AND idno=?', [$caserefno,$uniquerefno]);
        $month = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['month']);
        return view('scheme.noticeAccident.revision.ob_profile.PK.index',['idtype'=>$idtype,'doclist'=>$doclist,'docinfo'=>$docinfo,'doclist_select'=>$alldoclist, 'month' => $month]);
    }

    public function index_IO()
    {
        return view ('scheme.noticeAccident.revision.ob_profile.IO.index');
    }

    public function index_SCO()
    {
        return view ('scheme.noticeAccident.revision.ob_profile.SCO.index');
    }

    public function index_SAO()
    {
        return view ('scheme.noticeAccident.revision.ob_profile.SAO.index');
    }

  
}