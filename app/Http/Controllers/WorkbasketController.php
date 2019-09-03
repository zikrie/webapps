<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Input;
use App\Workbasket;
use App\Caseinfo;
use App\Reftable;
use DB;
use Cookie;
use Response;
use Mail;

class WorkbasketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    function deletedraft(Request $req)
    {
        $caserefno = $req->query('caserefno');
        $wbid = $req->query('wbid');
        $operid = session('loginname');
        $brcode = session('loginbranchcode');
        
        //return redirect()->back();
        
    $draft = ['caserefno'=> $caserefno, 'operid'=> $operid,'brcode'=> $brcode, 'wbid'=>$wbid];
        $jsondata = json_encode($draft);
        
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/deletedraft';
        $ch = curl_init();
        
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch,CURLOPT_POSTFIELDS, $jsondata);
        curl_setopt($ch, CURLOPT_HTTPGET, FALSE);
        
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);

            //close connection
        curl_close($ch);
        
        $jsonresult = json_decode($result);
        
        $errorcode = $jsonresult->{'errorcode'};
        if ($errorcode == 0)
        {
            return redirect()->back();
        }
        else
        {
            return redirect()->back()->with('errorwb','Failed to delete draft');
        }
    }
    
    function getnotice(Request $req)
    {
        $caserefno = $req->query('caserefno');
        $casetype = $req->query('casetype');
        $wbid = $req->query('wbid');
        $idno='';
        $idtype='';
        $empcode = '';
        
        session(['caserefno'=>$caserefno]);
        session(['noticetype'=>$casetype]);
        session(['wbid'=>$wbid]);
        
        $caseinfo = DB::selectOne('select * from caseinfo where caserefno=?',[$caserefno]);
        if (!$caseinfo)
        {
            return redirect()->back();
        }
        
        if ($caseinfo->status == '01')//draft
        {
            
            
            if ($casetype == '01')
            {
                $obprofile = DB::selectOne('select idno, idtype from caseobprofile where caserefno=?',[$caserefno]);
                if ($obprofile)
                {
                    $idno=$obprofile->idno;
                    $idtype=$obprofile->idtype;
                }
                
                $employer = DB::selectOne('select empcode from caseemployer where caserefno=?',[$caserefno]);
                if ($employer)
                {
                    $empcode=$employer->empcode;
                }
                
                $accdinfo = DB::selectOne('select accddate, accdtime from accidentinfo where caserefno=?',[$caserefno]);
                if ($accdinfo)
                {
                    $accddate=$accdinfo->accddate;
                    $accdtime=$accdinfo->accdtime;
                    
                    $accdyear = substr($accddate,0,4);
                    $accdmonth = substr($accddate,4,2);
                }
                
                session(['idtype' =>$idtype, 'idno' => $idno, 'empcode' => $empcode]);
                session(['accddate' =>$accddate, 'accdtime' => $accdtime, 'accdmonth'=>$accdmonth, 'accdyear'=>$accdyear]);
                
                return redirect('/Scheme/noticeaccident');
            }
           else if ($casetype == '02')
            { 
                $obprofile = DB::selectOne('select idno, idtype from caseobprofile where caserefno=?',[$caserefno]);
                if ($obprofile)
                {
                    $idno=$obprofile->idno;
                    $idtype=$obprofile->idtype;
                }
                
                $employer = DB::selectOne('select empcode from caseemployer where caserefno=?',[$caserefno]);
                if ($employer)
                {
                    $empcode=$employer->empcode;
                }
                
                session(['idtype' =>$idtype, 'idno' => $idno, 'empcode' => $empcode]);
               
               return redirect('/Scheme/obform_od');
            }
            else if ($casetype == '03')
            { 
                $obprofile = DB::selectOne('select idno, idtype from caseobprofile where caserefno=?',[$caserefno]);
                if ($obprofile)
                {
                    $idno=$obprofile->idno;
                    $idtype=$obprofile->idtype;
                }
                
                $employer = DB::selectOne('select empcode from caseemployer where caserefno=?',[$caserefno]);
                if ($employer)
                {
                    $empcode=$employer->empcode;
                }
                
                session(['idtype' =>$idtype, 'idno' => $idno, 'empcode' => $empcode]);
                
                return redirect('/Scheme/obformilat');
            }
            else if ($casetype == '04')
            {
                $obprofile = DB::selectOne('select c.idno, c.idtype from caseobprofile c, personcat p '
                        . 'where c.caserefno=? and c.uniquerefno=p.uniquerefno and p.category=?',[$caserefno,'OB']);
                if ($obprofile)
                {
                    $idno=$obprofile->idno;
                    $idtype=$obprofile->idtype;
                }
                
                $employer = DB::selectOne('select empcode from caseemployer where caserefno=?',[$caserefno]);
                if ($employer)
                {
                    $empcode=$employer->empcode;
                }
                
                session(['idtype' =>$idtype, 'idno' => $idno, 'empcode' => $empcode]);
                
                
                return redirect('/Scheme/noticedeath');
            }
        }
        else if ($caseinfo->status == '02')//submitted to SCO - nanti change routing to screen SCO
        {
            if ($casetype == '01')
            {
                $obprofile = DB::selectOne('select idno, idtype from caseobprofile where caserefno=?',[$caserefno]);
                if ($obprofile)
                {
                    $idno=$obprofile->idno;
                    $idtype=$obprofile->idtype;
                }
                
                $employer = DB::selectOne('select empcode from caseemployer where caserefno=?',[$caserefno]);
                if ($employer)
                {
                    $empcode=$employer->empcode;
                }
                
                $accdinfo = DB::selectOne('select accddate, accdtime from accidentinfo where caserefno=?',[$caserefno]);
                if ($accdinfo)
                {
                    $accddate=$accdinfo->accddate;
                    $accdtime=$accdinfo->accdtime;
                    
                    $accdyear = substr($accddate,0,4);
                    $accdmonth = substr($accddate,4,2);
                }
                
                session(['idtype' =>$idtype, 'idno' => $idno, 'empcode' => $empcode]);
                session(['accddate' =>$accddate, 'accdtime' => $accdtime, 'accdmonth'=>$accdmonth, 'accdyear'=>$accdyear]);
                
                return redirect('/Scheme/noticeaccident');
            }
           else if ($casetype == '02')
            { 
                $obprofile = DB::selectOne('select idno, idtype from caseobprofile where caserefno=?',[$caserefno]);
                if ($obprofile)
                {
                    $idno=$obprofile->idno;
                    $idtype=$obprofile->idtype;
                }
                
                $employer = DB::selectOne('select empcode from caseemployer where caserefno=?',[$caserefno]);
                if ($employer)
                {
                    $empcode=$employer->empcode;
                }
                
                session(['idtype' =>$idtype, 'idno' => $idno, 'empcode' => $empcode]);
               
               return redirect('/Scheme/obform_od');
            }
            else if ($casetype == '03')
            { 
                $obprofile = DB::selectOne('select idno, idtype from caseobprofile where caserefno=?',[$caserefno]);
                if ($obprofile)
                {
                    $idno=$obprofile->idno;
                    $idtype=$obprofile->idtype;
                }
                
                $employer = DB::selectOne('select empcode from caseemployer where caserefno=?',[$caserefno]);
                if ($employer)
                {
                    $empcode=$employer->empcode;
                }
                
                session(['idtype' =>$idtype, 'idno' => $idno, 'empcode' => $empcode]);
                
                return redirect('/Scheme/obformilat');
            }
            else if ($casetype == '04')
            {
                $obprofile = DB::selectOne('select c.idno, c.idtype from caseobprofile c, personcat p '
                        . 'where c.caserefno=? and c.uniquerefno=p.uniquerefno and p.category=?',[$caserefno,'OB']);
                if ($obprofile)
                {
                    $idno=$obprofile->idno;
                    $idtype=$obprofile->idtype;
                }
                
                $employer = DB::selectOne('select empcode from caseemployer where caserefno=?',[$caserefno]);
                if ($employer)
                {
                    $empcode=$employer->empcode;
                }
                
                session(['idtype' =>$idtype, 'idno' => $idno, 'empcode' => $empcode]);
                
                
                return redirect('/Scheme/noticedeath');
            }
        }
        
        else if ($caseinfo->status == '03')//submitted to IO - nanti change routing to screen IO
        {
            if ($casetype == '01')
            {
                $obprofile = DB::selectOne('select idno, idtype from caseobprofile where caserefno=?',[$caserefno]);
                if ($obprofile)
                {
                    $idno=$obprofile->idno;
                    $idtype=$obprofile->idtype;
                }
                
                $employer = DB::selectOne('select empcode from caseemployer where caserefno=?',[$caserefno]);
                if ($employer)
                {
                    $empcode=$employer->empcode;
                }
                
                $accdinfo = DB::selectOne('select accddate, accdtime from accidentinfo where caserefno=?',[$caserefno]);
                if ($accdinfo)
                {
                    $accddate=$accdinfo->accddate;
                    $accdtime=$accdinfo->accdtime;
                    
                    $accdyear = substr($accddate,0,4);
                    $accdmonth = substr($accddate,4,2);
                }
                
                session(['idtype' =>$idtype, 'idno' => $idno, 'empcode' => $empcode]);
                session(['accddate' =>$accddate, 'accdtime' => $accdtime, 'accdmonth'=>$accdmonth, 'accdyear'=>$accdyear]);
                
                return redirect('/Scheme/noticeaccident');
            }
           else if ($casetype == '02')
            { 
                $obprofile = DB::selectOne('select idno, idtype from caseobprofile where caserefno=?',[$caserefno]);
                if ($obprofile)
                {
                    $idno=$obprofile->idno;
                    $idtype=$obprofile->idtype;
                }
                
                $employer = DB::selectOne('select empcode from caseemployer where caserefno=?',[$caserefno]);
                if ($employer)
                {
                    $empcode=$employer->empcode;
                }
                
                session(['idtype' =>$idtype, 'idno' => $idno, 'empcode' => $empcode]);
               
               return redirect('/Scheme/obform_od');
            }
            else if ($casetype == '03')
            { 
                $obprofile = DB::selectOne('select idno, idtype from caseobprofile where caserefno=?',[$caserefno]);
                if ($obprofile)
                {
                    $idno=$obprofile->idno;
                    $idtype=$obprofile->idtype;
                }
                
                $employer = DB::selectOne('select empcode from caseemployer where caserefno=?',[$caserefno]);
                if ($employer)
                {
                    $empcode=$employer->empcode;
                }
                
                session(['idtype' =>$idtype, 'idno' => $idno, 'empcode' => $empcode]);
                
                return redirect('/Scheme/obformilat');
            }
            else if ($casetype == '04')
            {
                $obprofile = DB::selectOne('select c.idno, c.idtype from caseobprofile c, personcat p '
                        . 'where c.caserefno=? and c.uniquerefno=p.uniquerefno and p.category=?',[$caserefno,'OB']);
                if ($obprofile)
                {
                    $idno=$obprofile->idno;
                    $idtype=$obprofile->idtype;
                }
                
                $employer = DB::selectOne('select empcode from caseemployer where caserefno=?',[$caserefno]);
                if ($employer)
                {
                    $empcode=$employer->empcode;
                }
                
                session(['idtype' =>$idtype, 'idno' => $idno, 'empcode' => $empcode]);
                
                
                return redirect('/Scheme/noticedeath');
            }
        }
        else if ($caseinfo->status == '07')//submitted to SAO - nanti change routing to screen SAO
        {
            if ($casetype == '01')
            {
                $obprofile = DB::selectOne('select idno, idtype from caseobprofile where caserefno=?',[$caserefno]);
                if ($obprofile)
                {
                    $idno=$obprofile->idno;
                    $idtype=$obprofile->idtype;
                }
                
                $employer = DB::selectOne('select empcode from caseemployer where caserefno=?',[$caserefno]);
                if ($employer)
                {
                    $empcode=$employer->empcode;
                }
                
                $accdinfo = DB::selectOne('select accddate, accdtime from accidentinfo where caserefno=?',[$caserefno]);
                if ($accdinfo)
                {
                    $accddate=$accdinfo->accddate;
                    $accdtime=$accdinfo->accdtime;
                    
                    $accdyear = substr($accddate,0,4);
                    $accdmonth = substr($accddate,4,2);
                }
                
                session(['idtype' =>$idtype, 'idno' => $idno, 'empcode' => $empcode]);
                session(['accddate' =>$accddate, 'accdtime' => $accdtime, 'accdmonth'=>$accdmonth, 'accdyear'=>$accdyear]);
                
                return redirect('/Scheme/noticeaccident');
            }
           else if ($casetype == '02')
            { 
                $obprofile = DB::selectOne('select idno, idtype from caseobprofile where caserefno=?',[$caserefno]);
                if ($obprofile)
                {
                    $idno=$obprofile->idno;
                    $idtype=$obprofile->idtype;
                }
                
                $employer = DB::selectOne('select empcode from caseemployer where caserefno=?',[$caserefno]);
                if ($employer)
                {
                    $empcode=$employer->empcode;
                }
                
                session(['idtype' =>$idtype, 'idno' => $idno, 'empcode' => $empcode]);
               
               return redirect('/Scheme/obform_od');
            }
            else if ($casetype == '03')
            { 
                $obprofile = DB::selectOne('select idno, idtype from caseobprofile where caserefno=?',[$caserefno]);
                if ($obprofile)
                {
                    $idno=$obprofile->idno;
                    $idtype=$obprofile->idtype;
                }
                
                $employer = DB::selectOne('select empcode from caseemployer where caserefno=?',[$caserefno]);
                if ($employer)
                {
                    $empcode=$employer->empcode;
                }
                
                session(['idtype' =>$idtype, 'idno' => $idno, 'empcode' => $empcode]);
                
                return redirect('/Scheme/obformilat');
            }
            else if ($casetype == '04')
            {
                $obprofile = DB::selectOne('select c.idno, c.idtype from caseobprofile c, personcat p '
                        . 'where c.caserefno=? and c.uniquerefno=p.uniquerefno and p.category=?',[$caserefno,'OB']);
                if ($obprofile)
                {
                    $idno=$obprofile->idno;
                    $idtype=$obprofile->idtype;
                }
                
                $employer = DB::selectOne('select empcode from caseemployer where caserefno=?',[$caserefno]);
                if ($employer)
                {
                    $empcode=$employer->empcode;
                }
                
                session(['idtype' =>$idtype, 'idno' => $idno, 'empcode' => $empcode]);
                
                
                return redirect('/Scheme/noticedeath');
            }
        }
        
        
        
    }

    public function wblist()
    {

        //$workbasket = new Workbasket;

        $operid = session('loginname');
        
        if ($operid == '')
        {
            return redirect('/login');
        }
        
        session(['caserefno'=>'']); 
        session(['uniquerefno'=>'']); 
        session(['message'=>'']);
        session(['noticetype'=>'']);
        
        session(['caserefno'=>'', 'uniquerefno'=>'','accddate'=>'', 'accdtime'=>'']);
        session(['accdmonth'=>'', 'accdyear'=>'','mcmonth'=>'', 'mcyear'=>'']);
        session(['messagent'=>'','messageob'=>'','messagewage'=>'','messageconf'=>'','schemerefno'=>'']);
        session(['casestatus'=>'','source'=>'','messagemc'=>'','messageacc'=>'','messagebank'=>'']);
        session(['messagecert'=>'','messageemp'=>'','messageod'=>'']);

        //chg23072019 - tambah get column status from caseinfo
        $result = DB::select('select w.wbid, w.date, w.time, c.schemerefno, w.caseid, w.revisionrefno, w.medrefno, 
            w.rtwrefno, r.descen, w.caserefno, c.casetype, c.status from "workbasket" w, caseinfo c, reftable r where 
            w.caserefno = c.caserefno and w.taskcode = r.refcode and r.tablerefcode =? and w.operid=? order by w.date,w.time',
                ['taskcode', $operid]);

        // $now = time(); // or your date as well
        // $your_date = strtotime('date');
        // $datediff = $now - $your_date;
        if (!$result)
        {
            $item = null;
            //$workbasket->workbasket = null;
        }
        else
        {
            $cnt = 0;
            $item = array();
            foreach($result as $res)
            {
                $reftable = DB::selectOne('select descen from reftable where refcode=? and tablerefcode=?',
                        [$res->casetype,'casetype']);
                if ($reftable)
                {
                    $casetypedesc = $reftable->descen;
                }
                else
                {
                    $casetypedesc = null;
                }
                
                $idno = '';
                
                //chg22072019 - check if noticetype = '04', get caseobprofile & personcat
                
                if ($res->casetype != '04')
                {
                    $caseobprofile = DB::selectOne('select idno from caseobprofile where caserefno=?',[$res->caserefno]);
                    if ($caseobprofile)
                    {
                        $idno = $caseobprofile->idno;
                    }
                }
                else
                {
                    $personcat = DB::selectOne('select uniquerefno from personcat where caserefno=? and category=?',
                            [$res->caserefno, 'OB']);
                    
                    $caseobprofile = DB::selectOne('select idno from caseobprofile where caserefno=? and uniquerefno=?',
                            [$res->caserefno,$personcat->uniquerefno]);
                    if ($caseobprofile)
                    {
                        $idno = $caseobprofile->idno;
                    }
                }
                
                
                //chg23072019 - return status
                $item[$cnt++] = ['wbid'=>$res->wbid,'date'=>$res->date,'time'=>$res->time,'schemerefno'=>$res->schemerefno,
                    'caseid'=>$res->caseid,
                    'revisionrefno'=>$res->revisionrefno,'medrefno'=>$res->medrefno,'rtwrefno'=>$res->rtwrefno,
                    'descen'=>$res->descen,
                    'caserefno'=>$res->caserefno,'noticetype'=>$res->casetype,'noticetypedesc'=>$casetypedesc,
                    'idno'=>$idno, 'status'=>$res->status];
            }
            
            
            //$workbasket->workbasket = $item;
        }

        
        //return $item;
        return view('common.home',['workbasket'=>$item]);

        // $workbasket = Workbasket::all();
        // return view('home', compact ('workbasket'));

    }

}
