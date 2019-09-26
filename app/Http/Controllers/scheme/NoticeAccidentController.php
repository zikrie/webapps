<?php

namespace App\Http\Controllers\scheme;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\ObForm;
use Illuminate\Support\Facades\Input;
use Log;//asma

use GuzzleHttp\Psr7; //atikah
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;

class NoticeAccidentController extends CommonController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return session('caserefno');
        $operid = session('loginname');
        
        if ($operid == '') {
            return redirect('/login');
        }
        
        $idno = session('idno');
        if ($idno == '') {
            return redirect('/home');
        }
        
        $jsondecode='';
        $jsondecod1='';
        $jsondecod3='';

        //HANNIS
        $jsondecodeAssistEmployer="";
        $jsondecodeEmployerdate="";
        $jsondecodeWages="";
        $jsondecodeEmployer="";
        $jsondecodepermanent='';

        //$state=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['state']);
        //$branch = DB::select('select brcode,brname from branch where statecode=?',[$state[0]->refcode]);
        $idtype=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['idtype']);
        $race=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['race']);
        $national=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['national']);
        $mcsts=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['mcsts']);
        $transport=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['transport']);
      
        
        $causative=DB::select('Select refcode, descen from reftable where tablerefcode=? order by descen', ['causative']);
        // dd($causative);
        $accdcode = DB::select('Select refcode, descen from reftable where tablerefcode=? order by descen', ['accdcode']);
        $industcode = DB::select('Select refcode, descen from reftable where tablerefcode=? order by descen', ['industcode']);
    
        $profcode = DB::select('Select refcode, descen from reftable where tablerefcode=? order by descen', ['profcode']);
        $month = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['month']);
        $worksts = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['worksts']);
        $hussts = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['hussts']);
     
        //$transport=DB::select('Select refcode, descen from reftable where tablerefcode=?', ['transport']);
        //$transport=DB::select('Select refcode, descen from reftable where tablerefcode=?', ['transport']);

        //SYAHIRAH
        $optionbank=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['bankloc']);
        $optionreason=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['rsnnoacc']);
        $optionbai=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['baists']);
        $optionpay=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['paymode']);
        $bankcode=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['bankcode']);
        $accountype=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['acctype']);
        $overseasbank=$bankcode;//DB::select('Select refcode, descen from reftable where tablerefcode=?', ['bankcode']);
        $overseasbanktype=$accountype;//DB::select('Select refcode, descen from reftable where tablerefcode=?', ['acctype']);
        $emptype = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['emptype']);
        $occucode=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['occupation']);
        
        //najmi
        //$doclist = DB::select('select docdescen,doctype,docdescbm from doctype where doccat=?',['C']);
        $sql = 'select d.docdescen,d.doctype,d.docdescbm, d.doccat, n.priority from doctype d, noticedoc n '
                . 'where n.casetype=? and n.doctype = d.doctype order by n.priority';
        $doclist = DB::select($sql, [session('noticetype')]);
        
        //chg28062019 irina - get all doc
        $alldoclist = DB::select('select docdescen,doctype,docdescbm, doccat from doctype order by doccat desc, doctype');


        //return view ('fileupload.claim_info')->with('name',$select);

        $jsondecodeAssist='';
        $jsondecodeAccddate='';
        $how = '';
        $jsondecodeConfirmation = '';

        //$test = json_encode($jsondecode);
        //return $test;
        //$this->getObContact($jsondecod1);

        // $this->getObFormAssist($jsondecodeAssist);
        // $url = $this->getConfirmation($jsondecodeConfirmation);
        
        //return $url;
        //return json_encode($jsondecodeConfirmation);
        // dd('ya');

        $confirmation = null;
        if ($jsondecodeConfirmation && $jsondecodeConfirmation!='') {
            $record = $jsondecodeConfirmation->{'record'};
            if ($record <= 0) {
                //$jsondecodeConfirmation = null;
                $confirmation = null;
            } else {
                $confirmation = $jsondecodeConfirmation->{'data'};
            }
        }
        //return json_encode($confirmation);
        
        //irina - begin
        $jsondecodemc = '';
        $accdrefno = session('accdrefno');
        //return accdrefno;
        $caserefno = session('caserefno');
        $jsonOBAssist = session('jsonOBAssist');
        $jsondecodeAssistEmployer = session('jsondecodeAssistEmployer');
        
        // $accddata = null;
        $mcdata = null;
        $this->getAccidentinfo($jsondecod3);
                
        if ($jsondecod3 && $jsondecod3!='') {//irina
            $errorcode = $jsondecod3->{'errorcode'};
            if ($errorcode == 0) {
                $accddata = $jsondecod3->{'data'};
                session(['accddate'=>$accddata->accddate]);
            } else {
                $accddata = null;
            }
        }
        
        //return '++'.$accdrefno.'++'.$caserefno.'++';
        $jsondecodemc = '';
        $this->GetMCDetails($jsondecodemc);
        //return $jsondecodemc;
        if ($jsondecodemc && $jsondecodemc != '') {
            $errorcode = $jsondecodemc->{'errorcode'};

            if ($errorcode != 0) {
                $jsondecodemc = null;
            }
        }
                
                
        
        
        //irina - end

        //HANNIS
        $this->getAssist($jsondecodeAssistEmployer);
        
        //return json_encode($jsondecodeEmployer);
        //$jsondecodeWages = array();
       
        
        //return $wagesinfo;
        
        $docinfo = array();
        $this->getDoc($docinfo);


        //SYAHIRAH
        $this->getCertificateEmp($jsondecodemp);
         
        $jsondecodepermanent = null;
        $jsondecodebank='';
        $this->getBankInfo($jsondecodebank);
        
        //return '++'.json_encode($jsondecodebank).'++';
        //$this->getPermanentInfo($jsondecodepermanent);



        //$accdrefcode = session('accdrefno');
        //if($accdrefcode != '')
        //{
        //    $this->getAccidentinfo($jsondecod3);
        //$data= $jsondecod3->{'data'};
        // $how= $data['how'];
        //}
        
        //irina
        
        $obcontact = null;
        $date = null;
        $empcert = null;

        $permanentrep = null;
            
        $this->getObProfile($jsondecode);
        
        // $obprofile = null;
        if ($jsondecode && $jsondecode!='') {//irina
            // return json_encode($jsondecode);
            $record = $jsondecode->{'record'};
            if ($record == 0) {
                $obprofile = null;
            } else {
                $obprofile = $jsondecode->{'data'};
                $uniquerefno = $obprofile->{'uniquerefno'};
                session(['uniquerefno'=>$uniquerefno]);
            }
            
            // $test = json_encode($obprofile);
            // return $test;
        }

        /*if ($jsondecod1 && $jsondecod1!='')//irina
        {
            $obcontact = $jsondecod1->{'data'};
        }*/

        //HANNIS
        //return json_encode($jsondecodeEmployer);
        
        $this->getEmployer($jsondecodeEmployer);
        if ($jsondecodeEmployer && $jsondecodeEmployer!='') {//irina
            $record = $jsondecodeEmployer->{'record'};
            if ($record > 0) {
                if ($record == 1) {
                    $emprecord = $jsondecodeEmployer->{'emprecord'};
                }
            } else {
                $emprecord = null;
            }
            //$date = $jsondecodeEmployer->{'data'};
        }
        
        $contrinfo = array();
        $wagesinfo = array();
       

        $this->getWages($contrinfo, $wagesinfo);

        $empcert = null;
        //SYAHIRAH
        if ($jsondecodemp && $jsondecodemp!='') {//irina
            $errorcode = $jsondecodemp->{'errorcode'};
            if ($errorcode == 0) {
                $empcert = $jsondecodemp->{'data'};
            }
        }
        
        $bankinfo = null;
        if ($jsondecodebank && $jsondecodebank!='') {//irina
            $errorcode = $jsondecodebank->{'errorcode'};
            if ($errorcode == 0) {
                $bankinfo = $jsondecodebank->{'data'};
                //return json_encode($bankinfo);
            }
        }
        if ($jsondecodepermanent && $jsondecodepermanent!='') {//irina
            $permanentrep = $jsondecodepermanent->{'data'};
        }
        
        $state=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['state']);
        // if ($confirmation != null && $confirmation->statecode != '')
        // {
        //     $branch = DB::select('select brcode,brname from branch where statecode=?',[$confirmation->statecode]);
        //     //return $branch;
        // }
        // else
        // {
        //     $branch = DB::select('select brcode,brname from branch where statecode=?',[$state[0]->refcode]);
        //     //return $branch;
        // }
        
        //return $state;
        
        $accdplace=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['accdplace']);
        $accdwhen = null;
        if ($accddata != null) {
            if ($accddata->place != '') {
                $accdwhen = $this->getdsaccwhen($accddata->place);
                //return $accdwhen;
            }
        }
        
        //$accdwhen=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['accdwhen']);
        //return $accdwhen;
        
        return view('scheme.noticeAccident.PK.index', ['obprofile'=>$obprofile,'state'=>$state,
            'idtype'=>$idtype, 'race'=>$race, 'national'=>$national, 'mcsts'=>$mcsts, 'transport'=>$transport,
            'accdplace'=>$accdplace, 'accdwhen'=>$accdwhen , 'obformassist' => $jsondecodeAssist, 'accinfo'=>$accddata,
            'employer' => $jsondecodeAssistEmployer, 'emprecord' => $emprecord,'wagesinfo' => $wagesinfo, 'contribution'=>$contrinfo,
            'empcert'=>$empcert,'bankinfo'=>$bankinfo, 'permanentrep'=>$permanentrep, 'optionbank'=>$optionbank,
            'optionreason'=>$optionreason,'optionbai'=>$optionbai, 'optionpay'=>$optionpay, 'bankcode'=>$bankcode,
            'accountype'=>$accountype, 'overseasbank'=>$overseasbank, 'overseasbanktype'=>$overseasbanktype, 'month'=>$month,
            'causative'=>$causative,'accdcode'=>$accdcode,'industcode'=>$industcode, 'profcode'=>$profcode, 'worksts'=>$worksts,
            'mcdata'=>$mcdata,'caserefno'=>$caserefno, 'accdrefno'=>$accdrefno, 'doclist'=>$doclist, 'emptype'=>$emptype,
            'docinfo'=>$docinfo, 'hussts'=>$hussts,'mcdata'=>$jsondecodemc,'confirmation'=>$confirmation,
            'doclist_select'=>$alldoclist,'occucode'=>$occucode]);
    }
    
    //irina
    public function AccidentDate()
    {
        $idno = session('idno');
       
        return view('scheme.noticeAccident.accidentdatetime');
    }

    //CHECKING ACCIDENT DATE & EMPLOYER CODE
    public function checkAccidentDate(Request $request)
    {
        $idno=session('idno');
        $idtype=session('idtype');
        $date= $request->date;//2019-05-31
        $date = str_replace('-', '', $date);
        $time= $request->time;//01:00
        // $empcode= $request->empcode; //0004
        
        $accdtime = str_replace(':', '', $time);
        if (strlen($accdtime) == 4) {
            $accdtime = $accdtime.'00';
        }
        
        $accdyear = substr($date, 0, 4);
        $accdmonth = substr($date, 4, 2);
        
        //return '++'.$idno.'++'.$date.'++'.$time.'++';
        //$idno = '800920145348';
        //$date ='20170114';
        //$time = '100000';
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/checkaccidentdate?date='.$date.'&time='.$accdtime.'&idno='.$idno.'&idtype='.$idtype;
        //return $url;
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        //return '++'.$result.'++';
        $jsondecode = json_decode($result);
        // dd($jsondecode);
        //close connection
        
        curl_close($ch);
        
        //return $result;

        $record = $jsondecode->{'record'};
        //return $record;
        if ($record=='0') {
            session(['accdrefno'=>'']);
            
            $noticedraft = $this->createnoticedraft($date, $accdtime);//chg27062019 - send $accddate & $accdtime into param
            //return $noticedraft;
            // dd($noticedraft);
            $errorcode = $noticedraft->{'errorcode'};
            
            if ($errorcode == 0) {
                $caserefno = $noticedraft->{'caserefno'};
                session(['caserefno'=>$caserefno]);
                session(['accdmonth'=>$accdmonth, 'accdyear'=> $accdyear]);
                session(['accddate'=>$date,'accdtime'=>$accdtime]);
                
                //chg07072019 - get wbid & put into session
                $wbid = $noticedraft->{'wbid'};
                session(['wbid'=>$wbid]);
                        
                return redirect('/scheme/noticeaccident');
            } else {
                return redirect()->back()->with('messagent', 'Failed to create draft');
            }
            //return $this->index();//irina comment
        } else {
            $data= $jsondecode->{'data'};
            foreach ($data as $d) {
                //chg07072019 - check if record exist & not draft, cannot proceed
                $schemerefno = $d->schemerefno;
                
                if ($schemerefno != '') {
                    $message = 'Accident notice application for this Insured Person is already exist. scheme Ref No: '.$schemerefno;
                    return redirect()->back()->withInput(Input::all())->with('messagent', $message);
                }
                
                session(['caserefno' => $d->caserefno]);
                session(['accdmonth'=>$accdmonth, 'accdyear'=> $accdyear]);
                session(['accddate'=>$date,'accdtime'=>$accdtime]);
                
                //chg07072019 - get wbid & put into session
                $wbid = $d->wbid;
                session(['wbid'=>$wbid]);
                //return $this->index();//irina comment
                return redirect('/scheme/noticeaccident');
            }
        }
        //return $this->index();//irina comment
        session(['accdmonth'=>$accdmonth, 'accdyear'=> $accdyear]);
        session(['accddate'=>$date,'accdtime'=>$accdtime]);
        return redirect('/scheme/noticeaccident');
    }
    
    //FOR CREATE NOTICE DRAFT
    //chg27062019 - add $accddate & $accdtime in the parameter
    public function createnoticedraft($accddate, $accdtime)
    {
        $noticetype = session('noticetype');
        $operid = session('loginname');
        $brcode = session('loginbranchcode');
        $idno = session('idno');
        $idtype = session('idtype');
        $empcode = session('empcode');//chg27062019 - to send empcode to ws

        //chg27062019 - send $accddate & $accdtime to ws
        $notice = ['noticetype'=> $noticetype, 'operid'=> $operid,'brcode'=> $brcode, 'idno'=>$idno,
            'idtype'=>$idtype, 'empcode'=>$empcode,'accddate'=>$accddate, 'accdtime'=>$accdtime];

        
        $jsondata = json_encode($notice);
        //    dd($jsondata);
        //return $jsondata;
       
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/createdraft';
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsondata);
        curl_setopt($ch, CURLOPT_HTTPGET, false);
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        // dd($result);
        //close connection
        curl_close($ch);
        
        return json_decode($result);
    }

    //GET OBROFILE
    public function getObProfile(&$jsondecode)
    {
        $idno= session('idno');
        $idtype= session('idtype');
        $caserefno= session('caserefno');
        $operid= session('loginname');

        
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/obprofile?idno='.$idno.'&idtype='.$idtype.'&caserefno='.$caserefno.'&operid='.$operid;

        ///return $url;

        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        // $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        
        $jsondecode = json_decode($result);
        //close connection
        curl_close($ch);
    }

    //GET OBFORM FROM ASSIST
    public function getObFormAssist(&$jsondecodeAssist)
    {
        $idno= session('idno');
        $url = 'http://'.env('ASSIST_IP', 'localhost').'/wsassistsimulation/obprofile/'.$idno;
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        
        $jsondecodeAssist = json_decode($result);
        //close connection
        curl_close($ch);
    }

    //get ObContact FROM API
    public function getObContact(&$jsondecod1)
    {
        //$idno='9611121';
        $idno= session('idno');
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/obcontact/'.$idno;
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        
        $jsondecod1 = json_decode($result);
        //close connection
        curl_close($ch);
    }

    // GET EMPLOYER FROM ASSIST - HANNIS
    public function getAssist(&$jsondecodeAssistEmployer)
    {
        //$idno = '1';

        $idno = session('idno');
        $empcode = session('empcode');
        $url = 'http://'.env('ASSIST_IP', 'localhost').'/wsassistsimulation/employer/'.$empcode;
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, true);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
    
        //close connection
        curl_close($ch);

        $jsondecodeAssistEmployer = json_decode($result);
    }

    public function getDoc(&$docinfo)//&$newwages)
    {
        $idno = session('idno'); // get session
        $uniquerefno = session('uniquerefno');
        $caserefno = session('caserefno');

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/getdoc?uniquerefno='.$uniquerefno.'&caserefno='.$caserefno;//irina
        
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, true);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
    
        //close connection
        curl_close($ch);

        $docinfo = json_decode($result);
    }

    // GET WAGES FROM DB - HANNIS
     public function getWages(&$contrinfo, &$wagesinfo)//&$newwages)
     {
         $caserefno = session('caserefno'); // get session
        $idno = session('idno'); // get session
        $month = session('accdmonth');
         $year = session('accdyear');

         //$idno = '960422016554';
         // $month = '03';
         // $year = '2019';
         $count = '6';

         $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/wages?caserefno='.$caserefno.'&month='.$month.'&year='.$year.'&count='.$count;//irina
        
         $ch = curl_init();
        
         curl_setopt($ch, CURLOPT_URL, $url);
         curl_setopt($ch, CURLOPT_PROXY, '');
        
         curl_setopt($ch, CURLOPT_HTTPGET, true);

         curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        
         $result = curl_exec($ch);
         $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
         $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
    
         //close connection
         curl_close($ch);

         $jsondecodeWages = json_decode($result);
        
         if ($jsondecodeWages != null && $jsondecodeWages != '') {
             // $wagesinfo = $jsondecodeWages->{'wagesinfo'};
             $record = $jsondecodeWages->{'record'};
             if ($record > 0) {
                 $wagesinfo = $jsondecodeWages->{'data'};
             } else {
                 $wagesinfo = null;
             }
         }

         $url = 'http://'.env('ASSIST_IP', 'localhost').'/wsassistsimulation/contribution/'.$idno;//irina
         $ch = curl_init();
        
         curl_setopt($ch, CURLOPT_URL, $url);
         curl_setopt($ch, CURLOPT_PROXY, '');
        
         curl_setopt($ch, CURLOPT_HTTPGET, true);

         curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        
         $result = curl_exec($ch);
         $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
         $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
    
         //close connection
         curl_close($ch);

         $newwages = array();
         $count = 0;
         $jsondecodeContribution = json_decode($result);
        
         if ($jsondecodeContribution && $jsondecodeContribution!='') {
             $contrinfo = $jsondecodeContribution->{'contributioninfo'};
             //$contribution = $contributioninfo[0]->{'contribution'};
            /*
            if ($jsondecodeWages != null && $jsondecodeWages!='')//irina
            {
                $record = $jsondecodeWages->{'record'};
                if ($record > 0)
                {
                    $data = $jsondecodeWages->{'data'};

                    foreach ($data as $d)
                    {
                        $empcode = $d->{'empcode'};
                        $empname = $d->{'empname'};
                        $wagesinfo = $d->{'wagesinfo'};

                        foreach ($$contributioninfo as $contr)
                        {
                            if ($contr->{'empcode'} == $empcode)
                            {
                                $assistcontr = $contr->{'contribution'};

                                foreach($assistcontr as $ass)
                                {

                                    if($ass->{'month'} == $contr->{'month'} &&
                                        $ass->{'year'} == $contr->{'year'})
                                    {
                                        $newwages[$count] = ['month'=>$wages->{'month'}, 'year'=>$wages->{'year'}, 'wages'=>$wages->{'wages'}, 'contribution'=>$contr->{'contribution'}];
                                        $count++;
                                    }
                                }
                            }
                        }
                    }
                }

                foreach($jsondecodeWages as $wages)
                {
                    foreach($contribution as $contr)
                    {
                        if($wages->{'month'} == $contr->{'month'} &&
                            $wages->{'year'} == $contr->{'year'})
                        {
                            $newwages[$count] = ['month'=>$wages->{'month'}, 'year'=>$wages->{'year'}, 'wages'=>$wages->{'wages'}, 'contribution'=>$contr->{'contribution'}];
                            $count++;
                        }
                    }
                }
            }
            else
            {
                foreach($contribution as $contr)
                {

                    $newwages[$count] = ['month'=>$contr->{'month'}, 'year'=>$contr->{'year'}, 'wages'=>null, 'contribution'=>$contr->{'contribution'}];
                    $count++;

                }
            }*/
         }
         /*else
         {
             if ($jsondecodeWages != null && $jsondecodeWages!='')//irina
             {
                 foreach($jsondecodeWages as $wages)
                 {
                     $newwages[$count] = ['month'=>$wages->{'month'}, 'year'=>$wages->{'year'}, 'wages'=>$wages->{'wages'}, 'contribution'=>null];
                     $count++;

                 }
             }
         }*/
     }
    
    public function GetMCDetails(&$jsondecode)
    {
        $caserefno = session('caserefno');
        
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/getmcinfo?caserefno='.$caserefno;
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        
        //return $result;
        $jsondecode = json_decode($result);
        //close connection
        curl_close($ch);
    }

    //GET ACCIDENT INFO
    public function getAccidentinfo(&$jsondecod3)
    {
        //$accdrefno='1';
        //$idno='800920145348';
        $caserefno=session('caserefno');
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/getaccidentinfo?caserefno='.$caserefno;
        
        $ch = curl_init();
        
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        
        $jsondecod3 = json_decode($result);

        // return $jsondecod3;
        //close connection
        curl_close($ch);
    }

    //GET MC DETAIL
    public function getMCDetail(&$jsondecodeMCdetail)
    {
        $caserefno = session('caserefno');
         
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/getmcinfo?caserefno='.$caserefno;
        $ch = curl_init();
         
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
         
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
         
        //return $result;
        $jsondecodeMCdetail = json_decode($result);
        //close connection
        curl_close($ch);
    }

    //     public function getMCDetail(&$jsondecod4)
    // {
    //     $mcrefno='1';
    //     $url = 'http://perkesows.com/api/mcdetail/'.$mcrefno;
    //     $ch = curl_init();
        
    //     curl_setopt($ch, CURLOPT_URL, $url);
    //     curl_setopt($ch, CURLOPT_PROXY, '');
        
    //     curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
    //     curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //     $result = curl_exec($ch);
    //     $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    //     // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        
    //     $jsondecod4 = json_decode($result);
    //     //close connection
    //     curl_close($ch);
    // }

    //GET BRANCH NAME FROM DB - FOR SOCSO
    public function getbranchname($statecode)
    {
        $branch=DB::select('select brcode, brname from branch  where  statecode=?', [$statecode]);
        return json_encode($branch);
    }

    //GET ACCWHEN FROM DB - ACCIDENT DETAIL
    public function getaccwhen($refcode)
    {
        // $accwhen=DB::select('select tablerefcode, descen from reftable  where  refcode=?', [$refcode]);
        // return json_encode($accdwhen);

        $accdwhen=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['accdwhen']);

        if (!$accdwhen) {
            return null;
        }
        $cnt = 0;

        if ($refcode == 'I') {
            foreach ($accdwhen as $acc) {
                if ($acc->refcode == '01' || $acc->refcode == '06' || $acc->refcode == '07') {
                    $accwhen[$cnt]=['refcode'=>$acc->refcode,'descen'=>$acc->descen];
                    $cnt++;
                }
            }
        } elseif ($refcode == 'O') {
            foreach ($accdwhen as $acc) {
                $accwhen[$cnt]=['refcode'=>$acc->refcode,'descen'=>$acc->descen];
                $cnt++;
            }
        }
        
        
        return json_encode($accwhen);
    }
    
    public function getdsaccwhen($refcode)
    {
        // $accwhen=DB::select('select tablerefcode, descen from reftable  where  refcode=?', [$refcode]);
        // return json_encode($accdwhen);

        $accdwhen=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['accdwhen']);

        if (!$accdwhen) {
            return null;
        }
        $cnt = 0;
        $accwhen = null;
        if ($refcode == 'I') {
            foreach ($accdwhen as $acc) {
                if ($acc->refcode == '01' || $acc->refcode == '06' || $acc->refcode == '07') {
                    $accwhen[$cnt]=$acc;//['refcode'=>$acc->refcode,'descen'=>$acc->descen];
                    $cnt++;
                }
            }
        } elseif ($refcode == 'O') {
            foreach ($accdwhen as $acc) {
                $accwhen[$cnt]=$acc;//['refcode'=>$acc->refcode,'descen'=>$acc->descen];
                $cnt++;
            }
        } else {
            return null;
        }
        
        
        return $accwhen;
    }

    //GET CERTIFICATE FROM DB - SYAHIRAH
    public function getCertificateEmp(&$jsondecodemp)
    {
        // $caserefno='1';
        $caserefno = session('caserefno');
        // $url = 'http://perkesows.localhost/api/certificates/'.$caserefno;
        $url = 'http://'.env('WS_IP', 'perkesows.com').'/api/wsmotion/certificate?caserefno='.$caserefno;
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');

        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);


        $jsondecodemp=json_decode($result);
        // $data =$jsondecode->{'data'};

        //close connection
        curl_close($ch);
        //return view('noticeAccident.certificateEmployee',['data'=>$jsondecode]);
        //return view ('noticeAccident.obForm');
        // return $httpcode; //$httpcode will contain json data returned by API
    }

    //GET BANK INFO FROM DB - SYAHIRAH
    public function getBankInfo(&$jsondecodebank)
    {
        //$idno='1';
        $caserefno = session('caserefno');
        $url = 'http://'.env('WS_IP', 'perkesows.com').'/api/wsmotion/bankinfo?caserefno='.$caserefno;
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        

        $jsondecodebank =json_decode($result);
        // $data =$jsondecode->{'data'};

        //close connection
        curl_close($ch);
        //return view('noticeAccident.certificateEmployee',['data'=>$jsondecode]);
        //return view ('noticeAccident.obForm');
        // return $httpcode; //$httpcode will contain json data returned by API
    }
   
    //GET PERMANENT FROM DB - SYAHIRAH
    public function getPermanentInfo(&$jsondecodepermanent)
    {
        //$idno='1';
        $idno = session('idno');
        $url = 'http://'.env('WS_IP', 'perkesows.com').'/api/wsmotion/permanentrep/'.$idno;
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        

        $jsondecodepermanent =json_decode($result);
        // $data =$jsondecode->{'data'};
        

        //close connection
        curl_close($ch);
        //return view('noticeAccident.certificateEmployee',['data'=>$jsondecode]);
        //return view ('noticeAccident.obForm');
        // return $httpcode; //$httpcode will contain json data returned by API
    }

    public function getConfirmation(&$jsondecodeConfirmation)
    {
        $caserefno = session('caserefno');
        $uniquerefno = session('uniquerefno');
        // $idno = session('idno');
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/getconfirmation?caserefno='.$caserefno.'&applicantid='.$uniquerefno;

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        
        $jsondecodeConfirmation = json_decode($result);
        //close connection
        curl_close($ch);
        
        return $result;
    }

    /* ----------------POST-------------------- */
    //POST OBFORM AT DB
    public function postObForm(Request $req)
    {
        $idno  = $req->idno;
        $idtype = $req->idtype;
        $name = $req->name;
        //$previdno = $req->previdno;
        $dob = $req->dob;
        $dob = substr($req->dob, 6, 4).substr($req->dob, 3, 2).substr($req->dob, 0, 2);
        $race = $req->race;
        $gender = $req->gender;
        $occupation = $req->occupation;
        $dodeath='';
        $oldidno = '';
        $passportno='';
        $add1 = $req->add1;
        $add2 = $req->add2;
        $add3 = $req->add3;
        $postcode = $req->postcode;
        $city = $req->city;
        $state = $req->state;
        $pobox ='';
        $lockedbag='';
        $wdt='';
        $statecode = $req->statecode;
        $telno = $req->telno;
        $mobileno = $req->mobileno;
        $email = $req->email;
        $nationality = $req->nationality;
        $caserefno = session('caserefno');
        $operid = session('loginname');
        $brcode = session('loginbranchcode');
        //$noticetype = session('noticetype');

        $obForm = ['caserefno'=>$caserefno, 'idno'=> $idno, 'idtype'=> $idtype,'oldidno' =>$oldidno, 'passportno'=>$passportno,
            'name'=> $name, 'dob'=> $dob, 'race'=> $race, 'gender'=> $gender, 'occupation'=> $occupation, 'dodeath'=>$dodeath,
            'add1'=>$add1,'add2'=>$add2,'add3'=>$add3, 'postcode'=>$postcode, 'city'=>$city, 'pobox'=>$pobox, 'lockedbag'=>$lockedbag, 'wdt'=>$wdt,
            'statecode'=>$statecode, 'telno'=>$telno, 'mobileno'=>$mobileno, 'email'=>$email,'nationality'=>$nationality, 'operid'=>$operid, 'brcode'=>$brcode];
        
        $jsondata = json_encode($obForm);
        //return $jsondata;

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/newobprofile';
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');

        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsondata);
        curl_setopt($ch, CURLOPT_HTTPGET, false);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);

        //return '++'.$result.'++';
        //close connection
        curl_close($ch);
        //return redirect()->back();
        // return $this->index();

        //$this->postOBContact($req);
        $jsondecode = json_decode($result);
        //return $result;
        
        $errorcode = $jsondecode->{'errorcode'};
        if ($errorcode == 0) {
            $uniquerefno = $jsondecode->{'uniquerefno'};
            session(['uniquerefno'=>$uniquerefno]);
            return redirect()->back()->with('messageob', 'Save successful');
        } else {
            return redirect()->back()->with('messageob', 'Save unsuccessful');
        }
    }
    

    //POST OBCONTANT AT DB
    public function postObcontact(Request $req)
    {
        $idno  = $req->idno;
        $add1 = $req->add1;
        $add2 = $req->add2;
        $add3 = $req->add3;
        $postcode = $req->postcode;
        $city = $req->city;
        $statecode = $req->statecode;
        $telno = $req->telno;
        $mobileno = $req->mobileno;
        $email = $req->email;
        $nationality = $req->nationality;
        $addby = $req->addby;
        $dateadd = $req->dateadd;

        $obForm = ['idno'=> $idno, 'add1'=> $add1,'add2'=> $add2, 'add3'=> $add3, 'postcode'=> $postcode, 'city'=> $city, 'statecode'=> $statecode,  'telno'=> $telno,  'mobileno'=> $mobileno,  'email'=> $email,  'nationality'=> $nationality,  'addby'=> $addby, 'dateadd'=> $dateadd ];
        $jsondata = json_encode($obForm);
       
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/newobcontact';
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsondata);
        curl_setopt($ch, CURLOPT_HTTPGET, false);
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);

        //close connection
        curl_close($ch);
        //return redirect()->back();
        // return $this->index();
    }

    //POST WAGES AT DB - HANNIS
    public function postWages(Request $req)
    {
        $caserefno= session('caserefno');
        $operid = session('loginname');
        // $brcode = session('loginbranchcode');
        

        $data = array();
        $cntdata = 0;
        foreach ($req->empcode as $index => $empcodefld) {
            $empcode = $empcodefld;
            $empname = $req->empname[$index];
            $startdate = $req->startdate[$index];
            $startdate = str_replace('-', '', $startdate);
            $enddate = $req->enddate[$index];
            $enddate = str_replace('-', '', $enddate);
            $wagesinfo = array();
            $cnt = 0;
            
            foreach ($req->month[$index] as $idx => $monthfld) {
                $month = $monthfld;
                $year = $req->year[$index][$idx];
                $wages = $req->wages[$index][$idx];
                $contr = $req->contrpaid[$index][$idx];
                
                $wagesinfo[$cnt] = ['month'=>$month, 'year'=>$year, 'wages'=>$wages, 'contrpaid'=>$contr, 'assumedwages'=>'',
                    'contrpayable'=>'','contrdiff'=>'', 'contrsts'=>'','recommended'=>'', 'reason'=>'', 'wageremarks'=>''];
                
                $cnt++;
            }
            
            $data[$cntdata] = ['empcode'=>$empcode, 'empname'=>$empname, 'startdate'=>$startdate, 'enddate'=>$enddate, 'wagesinfo'=>$wagesinfo];
            $cntdata++;
        }
        
        $wages = ['caserefno'=>$caserefno, 'operid'=>$operid, 'data'=>$data];
        $jsondata = json_encode($wages);
        // return $jsondata;

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/newwages';

        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsondata);
        curl_setopt($ch, CURLOPT_HTTPGET, false);
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);

        curl_close($ch);
        
        $jsondecode = json_decode($result);
        // return $jsondata.'++'.$result;
        
        $errorcode = $jsondecode->{'errorcode'};
        if ($errorcode == 0) {
            return redirect()->back()->withInput(['tab'=>'wages'])->with('messagewage', 'Save successful');
        } else {
            return redirect()->back()->withInput(['tab'=>'wages'])->with('messagewage', 'Save unsuccessful');
        }
    }

    //POST ACCIDENT AT DB
    public function postAccident(Request $req)
    {
        if ($req->action== 'Submit') {
            $operid = session('loginname');
            $brcode = session('loginbranchcode');
            $caserefno = session('caserefno');
            //$idno= session('idno');
            //$accddate = substr($accddate,6,4).substr($accddate,3,2).substr($accddate,0,2);
        
            $accddate= $req->accddate;//31/05/2019
            $accddate = str_replace('-', '', $accddate);
            $accdtime= $req->timeaccident;
            $accdtime = str_replace(':', '', $accdtime);
            if (strlen($accdtime) == 4) {
                $accdtime = $accdtime.'00';
            }
            $place= $req->placeaccd;
            $accwhen= $req->accwhen;
            $whendesc= $req->whendesc;
            $how= $req->how;
            $wagespaid= $req->wagespaid;
            $transport= $req->transport;
            $transportothers= $req->trothers;
            $causative= $req->causative;
            $accdcode= $req->accdcode;
            $industrialcode= $req->industcode;
            $employmentcode= $req->profcode;
            $reasontravel= $req->reason;
            $injurydesc= $req->injurydesc;
            $accwork= $req->accdworkingday;
            $startworktime= $req->startworkingtime;
            $startworktime = str_replace(':', '', $startworktime);

            //  if($accwhen !='02' || $accwhen !='03' || $accwhen !='05'){
            //     $reasontravel=null;
            //  }
            if (strlen($startworktime) == 4) {
                $startworktime = $startworktime.'00';
            }
            $restperiod= $req->restperiod;
            $restperiod = str_replace(':', '', $restperiod);
            if (strlen($restperiod) == 4) {
                $restperiod = $restperiod.'00';
            }
            $endworktime= $req->endworkingtime;
            $endworktime = str_replace(':', '', $endworktime);
            if (strlen($endworktime) == 4) {
                $endworktime = $endworktime.'00';
            }
            $witnessname= $req->witnessname;
            $witnesscontact= $req->witnesscontact;
            $clinicinfo= $req->clinicinfo;
    
            // $addby= session('loginname');
            //$empcode = session('empcode');
            
            //return $req->all();
            
            if ($accwhen == '07') {
                $accident=[ 'operid'=>$operid, 'brcode'=>$brcode, 'caserefno'=>$caserefno, 'accddate'=>$accddate,'accdtime'=>$accdtime,
                'place'=>$place, 'accwhen'=>$accwhen, 'whendesc'=>$whendesc,'how'=>$how,  'wagespaid'=>$wagespaid, 'transport'=>$transport,
                'transportothers'=>$transportothers, 'causative'=>$causative, 'accdcode'=>$accdcode,
                'industrialcode'=>$industrialcode,'employmentcode'=>$employmentcode,'reasontravel'=>$reasontravel,
                'injurydesc'=>$injurydesc, 'accwork'=>$accwork,'startworktime'=>$startworktime,
                'restperiod'=>$restperiod, 'endworktime'=>$endworktime,'witnessname'=>$witnessname,'witnesscontact'=>$witnesscontact,
                'clinicinfo'=>$clinicinfo];
            } else {
                $accident=[ 'operid'=>$operid, 'brcode'=>$brcode, 'caserefno'=>$caserefno, 'accddate'=>$accddate,'accdtime'=>$accdtime,
                'place'=>$place, 'accwhen'=>$accwhen, 'whendesc'=>null, 'how'=>$how,  'wagespaid'=>$wagespaid, 'transport'=>$transport,
                'transportothers'=>$transportothers, 'causative'=>$causative, 'accdcode'=>$accdcode,
                'industrialcode'=>$industrialcode,'employmentcode'=>$employmentcode,'reasontravel'=>$reasontravel,
                'injurydesc'=>$injurydesc, 'accwork'=>$accwork,'startworktime'=>$startworktime,
                'restperiod'=>$restperiod, 'endworktime'=>$endworktime,'witnessname'=>$witnessname,'witnesscontact'=>$witnesscontact,
                'clinicinfo'=>$clinicinfo];
            }
            
    
            $jsondata = json_encode($accident);
            
            //return $jsondata;
    
    
            $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/updaccidentinfo';
            
    
            $ch = curl_init();
            
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_PROXY, '');
            
            curl_setopt($ch, CURLOPT_POSTFIELDS, $jsondata);
            curl_setopt($ch, CURLOPT_HTTPGET, false);
            
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
    
            curl_close($ch);
            
            
            
            $jsondecode = json_decode($result);
            //return $result;
            $errorcode = $jsondecode->{'errorcode'};
            
            if ($errorcode == 0) {
                $caserefno = $jsondecode->{'caserefno'};
                session(['caserefno'=>$caserefno]);
                session(['accddate'=>$accddate]);
                
                //chg14072019 - put accdyear & month in session after save
                $accdyear = substr($accddate, 0, 4);
                $accdmonth = substr($accddate, 4, 2);
                session(['accdmonth'=>$accdmonth, 'accdyear'=> $accdyear]);
                
                return redirect()->back()->withInput(['tab'=>'mcdetails'])->with('messageacc', 'Save successful');//++'.$x.'++'.$accdrefno.'++'.$jsondata.'++');
            } else {
                return redirect()->back()->withInput(['tab'=>'mcdetails'])->with('messageacc', 'Save unsuccessful');
            }
        } elseif ($req->action== 'Back') {
            return redirect('/noticeaccident')->withInput(['tab'=>'employer']);
        }
    }
    
    //for confirmation - post
    public function postConfirmation(Request $req)
    {
        if ($req->action== 'Save') {
            $caserefno = session('caserefno');
            $operid = session('loginname');
            $brcode = session('loginbranchcode');
            $uniquerefno = session('uniquerefno');
            
            $preferedbranch = $req->brname;
            $stampdate = $req->stampdate;
            $stampdate = str_replace('-', '', $stampdate);
            $jrecv = $req->jrecv;
            $jrecvdate = $req->jrecvdate;
            $jrecvdate = str_replace('-', '', $jrecvdate);
            $remarks = $req->remarks;
            
            
            $confirmation = ['caserefno'=>$caserefno, 'operid'=>$operid, 'brcode'=>$brcode,
                            'stampdate'=>$stampdate, 'preferedbranch'=>$preferedbranch, 'uniquerefno'=>$uniquerefno,
                            'jrecv'=>$jrecv, 'jrecvdate'=>$jrecvdate, 'remarks'=>$remarks];
            
            
            $jsondata = json_encode($confirmation);
            
            //return $jsondata;


            $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/updconfirmation';
            

            $ch = curl_init();
            
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_PROXY, '');
            
            curl_setopt($ch, CURLOPT_POSTFIELDS, $jsondata);
            curl_setopt($ch, CURLOPT_HTTPGET, false);
            
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);

            curl_close($ch);

            $jsondecodeConfirmation = json_decode($result);

            // return $jsondecodeConfirmation;
            $errorcode = $jsondecodeConfirmation->{'errorcode'};
            if ($errorcode == 0) {
                return redirect()->back()->withInput(['tab'=>'confirmation'])->with('messageconf', 'Save Successful');
            } else {
                return redirect()->back()->withInput(['tab'=>'confirmation'])->with('messageconf', 'Save Unsuccessful');
            }
        } elseif ($req->action== 'Submit') {
            $operid = session('loginname');
            $brcode = session('loginbranchcode');
            $caserefno= session('caserefno');
            $wbid = session('wbid');//chg07072019

            $prevschemerefno='';


            $datatosend = ['operid'=>$operid, 'brcode'=>$brcode, 'caserefno'=>$caserefno, 'prevschemerefno'=>$prevschemerefno,
                'wbid'=>$wbid];//chg07072019


            $jsondata = json_encode($datatosend);

            //return $jsondata;


            $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/submit';


            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_PROXY, '');

            curl_setopt($ch, CURLOPT_POSTFIELDS, $jsondata);
            curl_setopt($ch, CURLOPT_HTTPGET, false);

            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);

            curl_close($ch);

            $jsondecode = json_decode($result);
            //return $result;
            $errorcode = $jsondecode->{'errorcode'};

            if ($errorcode == 0) {
                $schemerefno = $jsondecode->{'schemerefno'};
                $casestatus = $jsondecode->{'casests'};
                $source = $jsondecode->{'source'};
                //session(['messageconf'=>'scheme Reference No: '.$schemerefno]);
                session(['schemerefno'=>$schemerefno]);
                session(['casestatus'=>$casestatus]);
                session(['source'=>$source]);
                return redirect('/success');//++'.$x.'++'.$accdrefno.'++'.$jsondata.'++');
            } else {
                $errordesc = $jsondecode->{'errordesc'};
                return redirect()->back()->withInput(['tab'=>'confirmation'])->with('messageconf', 'Submission unsuccessful. '.$errordesc);
            }
        }
    }

    //for preview - GET
    public function Preview()
    {
        $operid = session('loginname');
        
        if ($operid == '') {
            return redirect('/login');
        }
        
        $idno = session('idno');
        if ($idno == '') {
            return redirect('/home');
        }
        
        $jsondecode='';
        $jsondecod1='';
        $jsondecod3='';

        //HANNIS
        $jsondecodeAssistEmployer="";
        $jsondecodeEmployerdate="";
        $jsondecodeWages="";


        //SYAHIRAH

        // $jsondecodemp='';
        $jsondecodebank='';
        $jsondecodepermanent='';

        
        $idtype=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['idtype']);
        $race=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['race']);
        $national=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['national']);
        $mcsts=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['mcsts']);
        $transport=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['transport']);
        $accdplace=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['accdplace']);
        $accdwhen=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['accdwhen']);
        $causative=DB::select('Select refcode, descen from reftable where tablerefcode=? order by descen', ['causative']);
        $accdcode = DB::select('Select refcode, descen from reftable where tablerefcode=? order by descen', ['accdcode']);
        $industcode = DB::select('Select refcode, descen from reftable where tablerefcode=? order by descen', ['industcode']);
        $profcode = DB::select('Select refcode, descen from reftable where tablerefcode=? order by descen', ['profcode']);
        $month = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['month']);
        $worksts = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['worksts']);
        $hussts = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['hussts']);
        $occucode=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['occupation']);
        
        //$transport=DB::select('Select refcode, descen from reftable where tablerefcode=?', ['transport']);
        //$transport=DB::select('Select refcode, descen from reftable where tablerefcode=?', ['transport']);

        //SYAHIRAH
        $optionbank=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['bankloc']);
        $optionreason=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['rsnnoacc']);
        $optionbai=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['baists']);
        $optionpay=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['paymode']);
        $bankcode=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['bankcode']);
        $accountype=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['acctype']);
        $overseasbank=$bankcode;//DB::select('Select refcode, descen from reftable where tablerefcode=?', ['bankcode']);
        $overseasbanktype=$accountype;//DB::select('Select refcode, descen from reftable where tablerefcode=?', ['acctype']);
        $emptype = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['emptype']);
        
        //najmi
        //$doclist = DB::select('select docdescen,doctype,docdescbm from doctype where doccat=?',['C']);
        $sql = 'select d.docdescen,d.doctype,d.docdescbm, d.doccat from doctype d, noticedoc n '
                . 'where n.casetype=? and n.doctype = d.doctype';
        $doclist = DB::select($sql, ['02']);

        //return view ('fileupload.claim_info')->with('name',$select);

        $jsondecodeAssist='';
        $jsondecodeAccddate='';
        $how = '';


        $this->getObProfile($jsondecode);
        //$test = json_encode($jsondecode);
        // return $jsondecode;
        //$this->getObContact($jsondecod1);
        $this->getObFormAssist($jsondecodeAssist);
        
        //irina - begin
        $caserefno = session('caserefno');
     

        //HANNIS
        $this->getAssist($jsondecodeAssistEmployer);
        $jsondecodeEmployer="";
        $this->getEmployer($jsondecodeEmployer);
        
        //return json_encode($jsondecodeEmployer);
        //$jsondecodeWages = array();
        //$this->getWages($jsondecodeWages);
        
        $contrinfo = array();
        // $wagesinfo = array();
        $data = array();

        // $all = ['contrinfo'=>$contrinfo, 'wagesonfo'=>$wagesinfo, 'data'=>$data];
        
        $url = $this->getWages($contrinfo, $wagesinfo);
        //return $url;

        $docinfo = array();
        $this->getDoc($docinfo);
         
        $jsondecodepermanent = null;
        $this->getBankInfo($jsondecodebank);
        
        //return '++'.json_encode($jsondecodebank).'++';
        //$this->getPermanentInfo($jsondecodepermanent);



        //$accdrefcode = session('accdrefno');
        //if($accdrefcode != '')
        //{
        //    $this->getAccidentinfo($jsondecod3);
        //$data= $jsondecod3->{'data'};
        // $how= $data['how'];
        //}
        
        $this->getAccidentinfo($jsondecod3);
                
        if ($jsondecod3 && $jsondecod3!='') {//irina
            $errorcode = $jsondecod3->{'errorcode'};
            if ($errorcode == 0) {
                $accddata = $jsondecod3->{'data'};
                session(['accddate'=>$accddata->accddate]);
            } else {
                $accddata = null;
            }
        }
        //irina
        $obprofile = null;
        $obcontact = null;
        $date = null;
        $empcert = null;

        $permanentrep = null;
     
        //return $jsondecode;
        
        if ($jsondecode && $jsondecode!='') {//irina
            // return json_encode($jsondecode);
            // return $jsondecode;
            $record = $jsondecode->{'record'};
            if ($record == 0) {
                $obprofile = null;
            } else {
                $obprofile = $jsondecode->{'data'};
                $uniquerefno = $obprofile->{'uniquerefno'};
                session(['uniquerefno'=>$uniquerefno]);
            }


            
            //$test = json_encode($obprofile);
            //return $test;
        }

        //notice od
        // $jsondecodeOdinfo="";
        // $this->getOdInfo($jsondecodeOdinfo);
            
        // if ($jsondecodeOdinfo && $jsondecodeOdinfo!='')//hannis
        // {
        //     $errorcode = $jsondecodeOdinfo->{'errorcode'};
        //     if ($errorcode == 0)
        //     {
        //         $oddata = $jsondecodeOdinfo->{'data'};
        //     }
        //     else
        //     {
        //         $oddata = null;
        //     }
        // }


        // $jsondecodeOdEmphistory="";
        // $this->getOdEmphistory($jsondecodeOdEmphistory);

        // if ($jsondecodeOdEmphistory && $jsondecodeOdEmphistory!='')//hannis
        // {
        //     $record = $jsondecodeOdEmphistory->{'record'};
        //     if ($record > 0)
        //     {
        //         $odempinfo = $jsondecodeOdEmphistory->{'data'};
        //     }
        //     else
        //     {
        //         $odempinfo = null;
        //     }
        //     //$date = $jsondecodeEmployer->{'data'};
        // }

        // return $odempinfo;

        


        /*if ($jsondecod1 && $jsondecod1!='')//irina
        {
            $obcontact = $jsondecod1->{'data'};
        }*/

        //HANNIS
        //return json_encode($jsondecodeEmployer);
        if ($jsondecodeEmployer && $jsondecodeEmployer!='') {//irina
            $record = $jsondecodeEmployer->{'record'};
            if ($record > 0) {
                $emprecord = $jsondecodeEmployer->{'emprecord'};
            // $emprecord = $jsondecodeEmployer->{'emprecord'};
                // if ($record == 1)
                // {
                //     // $empcode = $emprecord[0]->{'empcode'};
                //     // session(['empcode'=>$empcode]);
                // }
            } else {
                $emprecord = null;
            }
            //$date = $jsondecodeEmployer->{'data'};
        }

        
        if ($jsondecodebank && $jsondecodebank!='') {//irina
            $errorcode = $jsondecodebank->{'errorcode'};
            if ($errorcode == 0) {
                $bankinfo = $jsondecodebank->{'data'};
            //return json_encode($bankinfo);
            } else {
                $bankinfo = null;
            }
        }
        

        $jsondecodeConfirmation="";
        $confirmation = null;
        $this->getConfirmation($jsondecodeConfirmation);
        //return json_encode($jsondecodeConfirmation);

        if ($jsondecodeConfirmation && $jsondecodeConfirmation!='') {//irina
            $record = $jsondecodeConfirmation->{'record'};
            if ($record <= 0) {
                //$jsondecodeConfirmation = null;
                $confirmation = null;
            } else {
                $confirmation = $jsondecodeConfirmation->{'data'};
                //return $confirmation;
            }
        }
        
        //return $confirmation;
        
        $jsondecodemc = '';
        $this->GetMCDetails($jsondecodemc);
        //return $jsondecodemc;
        if ($jsondecodemc && $jsondecodemc != '') {
            $errorcode = $jsondecodemc->{'errorcode'};

            if ($errorcode != 0) {
                $jsondecodemc = null;
            }
        }
        
        $state=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['state']);
        // if ($confirmation != null && $confirmation->statecode != '')
        // {
        //     $branch = DB::select('select brcode,brname from branch where statecode=?',[$confirmation->statecode]);
        // }
        // else
        // {
        //     $branch = DB::select('select brcode,brname from branch where statecode=?',[$state[0]->refcode]);
        // }
        
        

        //return $confirmation;
        
        return view('scheme.noticeAccident.preview', ['obprofile'=>$obprofile,'state'=>$state,
            'idtype'=>$idtype, 'race'=>$race, 'national'=>$national, 'mcsts'=>$mcsts, 'transport'=>$transport,
            'accdplace'=>$accdplace, 'accdwhen'=>$accdwhen , 'obformassist' => $jsondecodeAssist,
            'employer' => $jsondecodeAssistEmployer, 'emprecord' => $emprecord,'wagesinfo' => $wagesinfo,
            'contribution'=>$contrinfo, 'data'=>$data,'bankinfo'=>$bankinfo, 'optionbank'=>$optionbank,
            'optionreason'=>$optionreason,'optionbai'=>$optionbai, 'optionpay'=>$optionpay, 'bankcode'=>$bankcode,
            'accountype'=>$accountype, 'overseasbank'=>$overseasbank, 'overseasbanktype'=>$overseasbanktype, 'month'=>$month, 'accinfo'=>$accddata,
            'causative'=>$causative,'accdcode'=>$accdcode,'industcode'=>$industcode, 'profcode'=>$profcode, 'worksts'=>$worksts,
            'caserefno'=>$caserefno, 'doclist'=>$doclist, 'emptype'=>$emptype,
            'docinfo'=>$docinfo, 'confirmation'=>$confirmation,
            'hussts'=>$hussts,'mcdata'=>$jsondecodemc,'occucode'=>$occucode]);
    }

    
    //for preview - post
    public function Submit(Request $req)
    {
        $operid = session('loginname');
        $brcode = session('loginbranchcode');
        // $idno= session('idno');
        $caserefno = session('caserefno');//session('caserefno');
        
        //$preferedbranch = $req->brname;
        
        $prevschemerefno='';
        
        
        $datatosend = ['operid'=>$operid, 'brcode'=>$brcode, 'caserefno'=>$caserefno, 'prevschemerefno'=>$prevschemerefno];
        
        
        $jsondata = json_encode($datatosend);
        
        //return $jsondata;

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/submit';
        

        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsondata);
        curl_setopt($ch, CURLOPT_HTTPGET, false);
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);

        curl_close($ch);
        
        $jsondecode = json_decode($result);
        //return $result;
        $errorcode = $jsondecode->{'errorcode'};
        
        if ($errorcode == 0) {
            $schemerefno = $jsondecode->{'schemerefno'};
            //session(['messageconf'=>'scheme Reference No: '.$schemerefno]);
            //session(['caserefno'=>'']);

            $casestatus = $jsondecode->{'casests'};
            $source = $jsondecode->{'source'};
            //session(['messageconf'=>'scheme Reference No: '.$schemerefno]);
            session(['schemerefno'=>$schemerefno]);
            session(['casestatus'=>$casestatus]);
            session(['source'=>$source]);
            return redirect('/success');//++'.$x.'++'.$accdrefno.'++'.$jsondata.'++');
        } else {
            //return redirect()->back()->with('messageconf','Save unsuccessful');
            return redirect()->back()->withInput(['tab'=>'confirmation'])->with('messageconf', 'Save Successful');
        }
    }
    
    //chg10072019 - new UpdMC from Asma
    public function UpdMC(Request $req)
    {
        if ($req->action== 'Submit') {
            //$no = count($req->hussts);

            $mcmonth = '';
            $mcyear = '';
            $mcinfo = array();
            // dd($req->all());

            $mc_arr = $req->input('hussts');
            $i = 0;
            // Loop for dynamic medical leave
            if ($mc_arr != null) {
                foreach ($mc_arr as $key => $value) {
                    // Log::info($key .' dan '. $value);

                    ${'workinfo'.$i} = array();

                    $arr = $req->input('workstartdate'.$key);
                    if ($arr != null) {
                        foreach ($arr as $key2 => $value) {
                            // Log::info($key2 .' dan '. $value);

                            if (empty($value) || $value == null || $value == "") {
                                $mcinfo[$i] = ['hussts'=>$req->hussts[$key],'startdate'=>str_replace('-', '', $req->mcstartdate[$key]),'enddate'=>str_replace('-', '', $req->mcenddate[$key]), 'mcsts'=>$req->mcstatus[$key], 'totalmc'=>$req->totalmc[$key], 'workinfo'=>[]];
                                Log::info($mcinfo[$i]);
                            } else {
                                // dd('ada value');
                                $no_work = count($req->input('workstartdate'.$key));
                                // // dd($no_work);

                                for ($j = 0; $j<$no_work; $j++) {
                                    ${'workinfo'.$key}[$j] = ['wagespaid'=>'','workstartdate'=>str_replace('-', '', $req->input('workstartdate'.$key.'.'.$j)), 'workenddate'=>str_replace('-', '', $req->input('workenddate'.$key.'.'.$j)),'totalwork'=>$req->input('totalwork'.$key.'.'.$j), 'statuswork'=>$req->input('statuswork'.$key.'.'.$j)];
                                }

                                $mcinfo[$i] = ['hussts'=>$req->hussts[$key],'startdate'=>str_replace('-', '', $req->mcstartdate[$key]),'enddate'=>str_replace('-', '', $req->mcenddate[$key]), 'mcsts'=>$req->mcstatus[$key], 'totalmc'=>$req->totalmc[$key], 'workinfo'=>${'workinfo'.$i}];
                            }
                        }

                        $i++;
                    }
                }
            } else {
                $mcinfo = null;
            }

            $mcdata = ['operid'=>session('loginname'), 'brcode'=>session('loginbranchcode'), 'caserefno'=>session('caserefno'), 'clinicinfo'=>$req->clinicinfo, 'mcinfo'=>$mcinfo];
        
            //dd($mcdata);
            $jsondata = json_encode($mcdata);

            //dd($jsondata);
            
            $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/updmcinfo';
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_PROXY, '');
            curl_setopt($ch, CURLOPT_POSTFIELDS, $jsondata);
            curl_setopt($ch, CURLOPT_HTTPGET, false);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
            curl_close($ch);
            
            $res = json_decode($result);
            $retcode = $res->{'errorcode'};
            
            if ($retcode == 0) { // Success insert
                // session(['mcmonth'=>$mcmonth,'mcyear'=>$mcyear]);
                return redirect()->back()->withInput(['tab'=>'wages'])->with('messagemc', 'Save successful');
            } else { // Fail insert
                return redirect()->back()->withInput(['tab'=>'wages'])->with('messagemc', 'Save unsuccessful');
            }
        } elseif ($req->action== 'Back') {
            return redirect('/noticeaccident')->withInput(['tab'=>'accddetails']);
        }
    }
    
    //chg10072019 - comment off the whole thing. ganti dgn from Asma
    /*
    public function UpdMC(Request $req)
    {
        $operid = session('loginname');
        $brcode = session('loginbranchcode');
        $idno= session('idno');
        $caserefno = session('caserefno');

        $clinicname = $req->clinicinfo;
        $mcstartdate = $req->mcstartdate;
        $mcmonth = '';
        $mcyear = '';

        if (strlen($mcstartdate) == 10)
        {
            $mcstartdate = str_replace('-', '', $mcstartdate);
            $mcmonth = substr($mcstartdate,4,2);
            $mcyear = substr($mcstartdate,0,4);
        }


        $mcenddate = $req->mcenddate;
        if (strlen($mcenddate) == 10)
        {
            $mcenddate = str_replace('-', '', $mcenddate);
        }


        $mcstatus = '08';//New
        $totalmc = $req->totalmc;
        $hussts = $req->hussts;

        $wagespaid = $req->wagespaid;

        $workstartdate = $req->workstartdate;
        if (strlen($workstartdate) == 10)
        {
            $workstartdate = str_replace('-', '', $workstartdate);
        }

        $workenddate = $req->workenddate;
        if (strlen($workenddate) == 10)
        {
            $workenddate = str_replace('-', '', $workenddate);
        }

        $totalwork = $req->totalwork;
        $worksts = $req->statuswork;
        $wagespaid = $req->wagespaid;

        $workinfo = array();
        $workinfo[0] = ['wagespaid'=>'','workstartdate'=>$workstartdate, 'workenddate'=>$workenddate,
                        'totalwork'=>$totalwork, 'statuswork'=>$worksts];

        $mcinfo = array();
        $mcinfo[0] = ['hussts'=>$hussts,'startdate'=>$mcstartdate,'enddate'=>$mcenddate, 'mcsts'=>$mcstatus, 'totalmc'=>$totalmc,
                    'workinfo'=>$workinfo];

        //$clinicinfo = array();
        //$clinicinfo[0] = ['clinicname'=>$clinicname, 'mcinfo'=>$mcinfo];

        $mcdata = ['operid'=>$operid, 'brcode'=>$brcode, 'caserefno'=>$caserefno,
                'clinicinfo'=>$clinicname, 'mcinfo'=>$mcinfo];

        $jsondata = json_encode($mcdata);

        //return $jsondata;


        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/updmcinfo';


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

        curl_close($ch);

        $res = json_decode($result);
        //return $jsondata.'++'.$result;
        $retcode = $res->{'errorcode'};

        if ($retcode == 0)
        {
            session(['mcmonth'=>$mcmonth,'mcyear'=>$mcyear]);
            //return redirect()->back()->with('messagemc','Save successful');//++'.$x.'++'.$accdrefno.'++'.$jsondata.'++');
            return redirect()->back()->withInput(['tab'=>'mcdetails'])->with('messagemc','Save successful');
        }
        else
        {
            ///return redirect()->back()->with('messagemc','Save unsuccessful');
            return redirect()->back()->withInput(['tab'=>'mcdetails'])->with('messagemc','Save unsuccessful');
        }


    }*/

    //POST MCDETAIL AT DB
    // public function postMcDetails(Request $req)
    // {
    //     $caserefno= $req->caserefno;
    //     $mcrefno= $req->mcrefno;
    //     $husstatus= $req->husstatus;
    //     $clinicrefno= $req->clinicrefno;
    //     $startdate= $req->startdate;
    //     $enddate= $req->enddate;
    //     $mcsts= $req->mcsts;
    //     $totalmc= $req->totalmc;
    //     $wagespaid= $req->wagespaid;
    //     $workstartdate= $req->workstartdate;
    //     $workenddate= $req->workenddate;
    //     $totalwork= $req->totalwork;
    //     $statuswork= $req->statuswork;
    //     $adddate= $req->adddate;
    //     $addby= $req->addby;
    //     $baoappdate= $req->baoappdate;
        
    //     $mcdetails=['caserefno'=>$caserefno,'mcrefno'=>$mcrefno,'husstatus'=>$husstatus,'clinicrefno'=>$clinicrefno, 'startdate'=>$startdate,'enddate'=>$enddate, 'mcsts'=>$mcsts, 'totalmc'=>$totalmc, 'wagespaid'=>$wagespaid, 'workstartdate'=>$workstartdate, 'workenddate'=>$workenddate, 'totalwork'=>$totalwork, 'statuswork'=>$statuswork, 'adddate'=>$adddate,'addby'=>$addby, 'addby'=>$addby, 'baoappdate'=>$baoappdate];

    //     $jsondata = json_encode($mcdetails);


    //     $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/newmcdetail';

    //     $ch = curl_init();
        
    //     curl_setopt($ch,CURLOPT_URL, $url);
    //     curl_setopt($ch, CURLOPT_PROXY, '');
        
    //     curl_setopt($ch,CURLOPT_POSTFIELDS, $jsondata);
    //     curl_setopt($ch, CURLOPT_HTTPGET, FALSE);
        
    //     curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //     $result = curl_exec($ch);
    //     $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    //     $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);

    //     curl_close($ch);
    //     return redirect()->back();
    // }

    //POST BANK INFO AT DB - SYAHIRAH
    /*
    public function postBankInfo(Request $req)
    {
        $caserefno = session('caserefno');
        //$idno= session('idno');//$req->idno;
        $operid = session('loginname');
        $brcode = session('loginbranchcode');

        $accexist= $req->accexist;
        $reasonnoacc= $req->reasonnoacc;
        $baists= $req->baists;
        $substsdesc= $req->substsdesc;
        $paymode= $req->paymode;
        $bankloc= $req->bankloc;
        $bankcode= $req->bankcode;

        $ovbankname= $req->ovbankname;
        $bankbr = $req->bankbr;
        $bankaddr = $req->bankaddr;
        $accno = $req->accno;
        $acctype = $req->acctype;
        $swiftcode= $req->swiftcode;
        $bsbcode= $req->bsbcode;

        // $ovbankacc = $req->ovbankacc;
        // $ovbankaddr = $req->ovbankaddr;
        // $ovbankbr = $req->ovbankbranch;
        // $ovacctype = $req->ovacctype;
        // $localbankbr= $req->localbankbranch;
        // $localaccno= $req->localbankacc;
        // $localbankaddr = $req->localbankadd;
        // $localacctype= $req->localacctype;



        if ($bankloc == 'L')
        {
            $bankinfo=['operid'=>$operid,'brcode'=>$brcode, 'caserefno'=>$caserefno, 'accexist'=>$accexist,'reasonnoacc'=>$reasonnoacc,
            'baists'=>$baists,'substsdesc'=>$substsdesc,'paymode'=>$paymode,'bankloc'=>$bankloc,'bankcode'=>$bankcode,
            'ovbankname'=>null,'bankbr'=>$bankbr,'bankaddr'=>$bankaddr,'accno'=>$accno,'acctype'=>$acctype,
            'swiftcode'=>null,'bsbcode'=>null];
        }
        else if ($bankloc == 'O')
        {
            $bankinfo=['operid'=>$operid,'brcode'=>$brcode, 'caserefno'=>$caserefno, 'accexist'=>$accexist,'reasonnoacc'=>$reasonnoacc,
            'baists'=>$baists,'substsdesc'=>$substsdesc,'paymode'=>$paymode,'bankloc'=>$bankloc,'bankcode'=>$bankcode,
            'ovbankname'=>$ovbankname,'bankbr'=>$bankbr,'bankaddr'=>$bankaddr,'accno'=>$accno,'acctype'=>$acctype,
            'swiftcode'=>$swiftcode,'bsbcode'=>$bsbcode];
        }

        $jsondata = json_encode($bankinfo);

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/bankinfo';

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

        // return view('noticeAccident.index');
       // return redirect()->back;
            //close connection
        curl_close($ch);

        $jsondecode = json_decode($result);

        if ($jsondecode && $jsondecode != '')
        {
            $errorcode = $jsondecode->{'errorcode'};
            if ($errorcode == 0)
            {
                return redirect()->back()->withInput(['tab'=>'bankinfo'])->with('messagebank','Save successful');
            }
            else
            {
                return redirect()->back()->withInput(['tab'=>'bankinfo'])->with('messagebank','Save unsuccessful');
            }
        }
        // return $httpcode;
    }*/
    
    public function postBankInfo(Request $req)
    {
        $caserefno= session('caserefno');//$req->idno;
        $operid = session('loginname');
        $brcode = session('loginbranchcode');
        
        $accexist= $req->accexist;
        $reasonnoacc= $req->reasonnoacc;
        $baists= $req->baists;
        $substsdesc= $req->substsdesc;
        $paymode= $req->paymode;
        $bankloc= $req->bankloc;
        $bankcode= $req->bankcode;
        $ovbankname= $req->ovbankname;
        $swiftcode = $req->swiftcode;
        $bsbcode = $req->bsbcode;
        $localbankbr= $req->localbankbr;
        $localaccno= $req->localaccno;
        $localbankaddr = $req->localbankaddr;
        $localacctype= $req->localacctype;
        $ovaccno = $req->ovaccno;
        $ovbankaddr = $req->ovbankaddr;
        $ovbankbr = $req->ovbankbr;
        $ovacctype = $req->ovacctype;

        if ($paymode == '01') {
            $bankinfo=['operid'=>$operid,'brcode'=>$brcode,'caserefno'=>$caserefno,'accexist'=>$accexist,'reasonnoacc'=>$reasonnoacc, 'baists'=>null, 'substsdesc'=>null, 'paymode'=>$paymode, 'bankloc'=>null,'bankcode'=>null,'ovbankname'=>null,'bankbr'=>null,'bankaddr'=>null,'accno'=>null,'acctype'=>null,'swiftcode'=>null,'bsbcode'=>null];
        } elseif ($paymode == '02') {
            if ($bankloc == 'L') {
                $bankinfo=['operid'=>$operid,'brcode'=>$brcode,'caserefno'=>$caserefno,'accexist'=>null,'reasonnoacc'=>null, 'baists'=>$baists, 'substsdesc'=>$substsdesc, 'paymode'=>$paymode,'bankloc'=>$bankloc,'bankcode'=>$bankcode,'ovbankname'=>null,'bankbr'=>$localbankbr,'bankaddr'=>$localbankaddr,'accno'=>$localaccno,'acctype'=>$localacctype,'swiftcode'=>null,'bsbcode'=>null];
            } elseif ($bankloc == 'O') {
                $bankinfo=['operid'=>$operid,'brcode'=>$brcode,'caserefno'=>$caserefno,'accexist'=>null,'reasonnoacc'=>null, 'baists'=>$baists, 'substsdesc'=>$substsdesc, 'paymode'=>$paymode,'bankloc'=>$bankloc,'bankcode'=>$bankcode, 'ovbankname'=>$ovbankname,'bankbr'=>$ovbankbr,'bankaddr'=>$ovbankaddr,'accno'=>$ovaccno,'acctype'=>$ovacctype, 'swiftcode'=>$swiftcode,'bsbcode'=>$bsbcode];
            }
        } else {
            $bankinfo=['operid'=>$operid,'brcode'=>$brcode,'caserefno'=>$caserefno,'accexist'=>null,'reasonnoacc'=>null, 'baists'=>null, 'substsdesc'=>null, 'paymode'=>$paymode,'bankloc'=>null,'bankcode'=>null,'ovbankname'=>null,'bankbr'=>null,'bankaddr'=>null,'accno'=>null,'acctype'=>null,'swiftcode'=>null,'bsbcode'=>null];
        }

        
        $jsondata = json_encode($bankinfo);
        // return $jsondata;


        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/bankinfo';

        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsondata);
        curl_setopt($ch, CURLOPT_HTTPGET, false);
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);

        // return view('noticeAccident.index');
        // return redirect()->back;
        //close connection
        curl_close($ch);
        
        $jsondecode = json_decode($result);
        // return $jsondata.'+'.$result;
        
        if ($jsondecode && $jsondecode != '') {
            $errorcode = $jsondecode->{'errorcode'};
            // return $errorcode;
            if ($errorcode == 0) {
                return redirect()->back()->withInput(['tab'=>'bankinfo'])->with('messagebank', 'Save successful');
            } else {
                return redirect()->back()->withInput(['tab'=>'bankinfo'])->with('messagebank', 'Save unsuccessful');
            }
        }
      
        
        // return $httpcode;
    }

    //POST CERTIFICATE AT DB - SYAHIRAH
    public function postCertificateEmployee(Request $req)
    {
        $caserefno= session('caserefno');//$req->caserefno;
        $emprepname= $req->emprepname;
        $emprepdes= $req->emprepdes;
        $emprepdate= $req->emprepdate;
        // return $emprepdate;
        if (strlen($emprepdate) == 10) {
            //$emprepdate = substr($emprepdate,6,4).substr($emprepdate,3,2).substr($emprepdate,0,2);
            $emprepdate = str_replace('-', '', $emprepdate);
        }
        

        $certemp=['caserefno'=>$caserefno,'emprepname'=>$emprepname,'emprepdes'=>$emprepdes,'emprepdate'=>$emprepdate];

        $jsondata = json_encode($certemp);
        
        //return $jsondata;


        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/certificate';

        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsondata);
        curl_setopt($ch, CURLOPT_HTTPGET, false);
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        
        //return $result;

        // return view('noticeAccident.index');
        // return redirect()->back;
        //close connection
        curl_close($ch);
        
        $jsondata = json_decode($result);
        $errorcode = $jsondata->{'errorcode'};
        if ($errorcode ==0) {
            return redirect()->back()->with('messagecert', 'Save Successful');
        } else {
            return redirect()->back()->with('messagecert', 'Save Unsuccessful');
        }
        


        
        // return $httpcode;
    }

    //POST POST PERMANENT AT DB - SYAHIRAH
    public function postPermanentRep(Request $req)
    {
        $idno= $req->idno;
        $perrep= $req->perrep;
        $perrepname= $req->perrepname;
        $id_type= $req->id_type;
        $dob= $req->dob;
        $passexpiry= $req->passexpiry;
        $insuredper= $req->insuredper;
        $repstatus= $req->repstatus;
        $ic_no= $req->ic_no;
        
  

        $permanent=['idno'=>'3','perrep'=>$perrep,'perrepname'=>$perrepname,'id_type'=>$id_type,'dob'=>$dob,'passexpiry'=>$passexpiry,'insuredper'=>$insuredper,'repstatus'=>$repstatus,'ic_no'=>$ic_no];

        $jsondata = json_encode($permanent);


        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/permanentrep';

        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsondata);
        curl_setopt($ch, CURLOPT_HTTPGET, false);
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);

        // return view('noticeAccident.index');
        // return redirect()->back;
        //close connection
        curl_close($ch);
        return redirect()->back();


        
        // return $httpcode;
    }

    // POST REMARKS
    public function postRemark(Request $req)
    {
        $remarkid = $req->remarkid;
        $remarks = $req->remarks;
        $remark = ['remarkid'=> $remarkid, 'remarks'=> $remarks];
        $jsondata = json_encode($remark);
       
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/newremark';
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsondata);
        curl_setopt($ch, CURLOPT_HTTPGET, false);
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);

        //close connection
        curl_close($ch);
        return redirect()->back();
        // return $this->index();
    }

    public function viewObForm()
    {
        return view('noticeAccident.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



    /* ---------------- NOTICE ACCIDENT -- SCO-------------------- */
    //  public function indexSCO()
    // {
    //     return view('scheme.noticeAccident.index_SCO');
    // }

    public function indexSCO()
    {
        //return session('caserefno');
        $operid = session('loginname');
        
        if ($operid == '') {
            return redirect('/login');
        }
        
        $idno = session('idno');
        if ($idno == '') {
            return redirect('/home');
        }
        
        $jsondecode='';
        $jsondecod1='';
        $jsondecod3='';

        //HANNIS
        $jsondecodeAssistEmployer="";
        $jsondecodeEmployerdate="";
        $jsondecodeWages="";
        $jsondecodeEmployer="";
        $jsondecodepermanent='';

        //$state=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['state']);
        //$branch = DB::select('select brcode,brname from branch where statecode=?',[$state[0]->refcode]);
        $idtype=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['idtype']);
        $race=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['race']);
        $national=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['national']);
        $mcsts=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['mcsts']);
        $transport=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['transport']);
        
        $causative=DB::select('Select refcode, descen from reftable where tablerefcode=? order by descen', ['causative']);
        $accdcode = DB::select('Select refcode, descen from reftable where tablerefcode=? order by descen', ['accdcode']);
        $industcode = DB::select('Select refcode, descen from reftable where tablerefcode=? order by descen', ['industcode']);
        $profcode = DB::select('Select refcode, descen from reftable where tablerefcode=? order by descen', ['profcode']);
        $month = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['month']);
        $worksts = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['worksts']);
        $hussts = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['hussts']);

        //$transport=DB::select('Select refcode, descen from reftable where tablerefcode=?', ['transport']);
        //$transport=DB::select('Select refcode, descen from reftable where tablerefcode=?', ['transport']);

        //SYAHIRAH
        $optionbank=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['bankloc']);
        $optionreason=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['rsnnoacc']);
        $optionbai=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['baists']);
        $optionpay=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['paymode']);
        $bankcode=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['bankcode']);
        $accountype=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['acctype']);
        $overseasbank=$bankcode;//DB::select('Select refcode, descen from reftable where tablerefcode=?', ['bankcode']);
        $overseasbanktype=$accountype;//DB::select('Select refcode, descen from reftable where tablerefcode=?', ['acctype']);
        $emptype = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['emptype']);
        $occucode=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['occupation']);
        
        //najmi
        //$doclist = DB::select('select docdescen,doctype,docdescbm from doctype where doccat=?',['C']);
        $sql = 'select d.docdescen,d.doctype,d.docdescbm, d.doccat, n.priority from doctype d, noticedoc n '
                . 'where n.casetype=? and n.doctype = d.doctype order by n.priority';
        $doclist = DB::select($sql, [session('noticetype')]);
        
        //chg28062019 irina - get all doc
        $alldoclist = DB::select('select docdescen,doctype,docdescbm, doccat from doctype order by doccat desc, doctype');

        $question1 = 'Whether the insured person is an employee under the SOCSO Act?';
        $question2 = ' Whether the SOCSO Act applies to this industry?';

        session(['question1' =>$question1,'question2' => $question2]);
        //return view ('fileupload.claim_info')->with('name',$select);

        $jsondecodeAssist='';
        $jsondecodeAccddate='';
        $how = '';
        $jsondecodeConfirmation = '';

        //$test = json_encode($jsondecode);
        //return $test;
        //$this->getObContact($jsondecod1);
        $this->getObFormAssist($jsondecodeAssist);
        $url = $this->getConfirmation($jsondecodeConfirmation);
        //return $url;
        //return json_encode($jsondecodeConfirmation);

        $confirmation = null;
        if ($jsondecodeConfirmation && $jsondecodeConfirmation!='') {
            $record = $jsondecodeConfirmation->{'record'};
            if ($record <= 0) {
                //$jsondecodeConfirmation = null;
                $confirmation = null;
            } else {
                $confirmation = $jsondecodeConfirmation->{'data'};
            }
        }
        //return json_encode($confirmation);
        
        //irina - begin
        $jsondecodemc = '';
        $accdrefno = session('accdrefno');
        //return accdrefno;
        $caserefno = session('caserefno');
        
        // $accddata = null;
        $mcdata = null;
        $this->getAccidentinfo($jsondecod3);
                
        if ($jsondecod3 && $jsondecod3!='') {//irina
            $errorcode = $jsondecod3->{'errorcode'};
            if ($errorcode == 0) {
                $accddata = $jsondecod3->{'data'};
                session(['accddate'=>$accddata->accddate]);
            } else {
                $accddata = null;
            }
        }
        
        //return '++'.$accdrefno.'++'.$caserefno.'++';
        $jsondecodemc = '';
        $this->GetMCDetails($jsondecodemc);
        //return $jsondecodemc;
        if ($jsondecodemc && $jsondecodemc != '') {
            $errorcode = $jsondecodemc->{'errorcode'};

            if ($errorcode != 0) {
                $jsondecodemc = null;
            }
        }
                
                
        
        
        //irina - end

        //HANNIS
        $this->getAssist($jsondecodeAssistEmployer);
        
        //return json_encode($jsondecodeEmployer);
        //$jsondecodeWages = array();
       
        
        //return $wagesinfo;
        
        $docinfo = array();
        $this->getDoc($docinfo);


        //SYAHIRAH
        $this->getCertificateEmp($jsondecodemp);
         
        $jsondecodepermanent = null;
        $jsondecodebank='';
        $this->getBankInfo($jsondecodebank);
        
        //return '++'.json_encode($jsondecodebank).'++';
        //$this->getPermanentInfo($jsondecodepermanent);



        //$accdrefcode = session('accdrefno');
        //if($accdrefcode != '')
        //{
        //    $this->getAccidentinfo($jsondecod3);
        //$data= $jsondecod3->{'data'};
        // $how= $data['how'];
        //}
        
        //irina
        
        $obcontact = null;
        $date = null;
        $empcert = null;

        $permanentrep = null;
            
        $this->getObProfile($jsondecode);
        
        // $obprofile = null;
        if ($jsondecode && $jsondecode!='') {//irina
            // return json_encode($jsondecode);
            $record = $jsondecode->{'record'};
            if ($record == 0) {
                $obprofile = null;
            } else {
                $obprofile = $jsondecode->{'data'};
                $uniquerefno = $obprofile->{'uniquerefno'};
                session(['uniquerefno'=>$uniquerefno]);
            }
            
            // $test = json_encode($obprofile);
            // return $test;
        }

        /*if ($jsondecod1 && $jsondecod1!='')//irina
        {
            $obcontact = $jsondecod1->{'data'};
        }*/

        //HANNIS
        //return json_encode($jsondecodeEmployer);
        
        $this->getEmployer($jsondecodeEmployer);
        if ($jsondecodeEmployer && $jsondecodeEmployer!='') {//irina
            $record = $jsondecodeEmployer->{'record'};
            if ($record > 0) {
                if ($record == 1) {
                    $emprecord = $jsondecodeEmployer->{'emprecord'};
                }
            } else {
                $emprecord = null;
            }
            //$date = $jsondecodeEmployer->{'data'};
        }
        
        $contrinfo = array();
        $wagesinfo = array();
       

        $this->getWages($contrinfo, $wagesinfo);

        $empcert = null;
        //SYAHIRAH
        if ($jsondecodemp && $jsondecodemp!='') {//irina
            $errorcode = $jsondecodemp->{'errorcode'};
            if ($errorcode == 0) {
                $empcert = $jsondecodemp->{'data'};
            }
        }
        
        $bankinfo = null;
        if ($jsondecodebank && $jsondecodebank!='') {//irina
            $errorcode = $jsondecodebank->{'errorcode'};
            if ($errorcode == 0) {
                $bankinfo = $jsondecodebank->{'data'};
                //return json_encode($bankinfo);
            }
        }
        if ($jsondecodepermanent && $jsondecodepermanent!='') {//irina
            $permanentrep = $jsondecodepermanent->{'data'};
        }
        
        $state=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['state']);
        // if ($confirmation != null && $confirmation->statecode != '')
        // {
        //     $branch = DB::select('select brcode,brname from branch where statecode=?',[$confirmation->statecode]);
        //     //return $branch;
        // }
        // else
        // {
        //     $branch = DB::select('select brcode,brname from branch where statecode=?',[$state[0]->refcode]);
        //     //return $branch;
        // }
        
        //return $state;
        
        $accdplace=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['accdplace']);
        $accdwhen = null;
        if ($accddata != null) {
            if ($accddata->place != '') {
                $accdwhen = $this->getdsaccwhen($accddata->place);
                //return $accdwhen;
            }
        }
        
        //$accdwhen=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['accdwhen']);
        //return $accdwhen;
        
        return view('scheme.noticeAccident.SCO.index', ['obprofile'=>$obprofile,'state'=>$state,
            'idtype'=>$idtype, 'race'=>$race, 'national'=>$national, 'mcsts'=>$mcsts, 'transport'=>$transport,
            'accdplace'=>$accdplace, 'accdwhen'=>$accdwhen , 'obformassist' => $jsondecodeAssist, 'accinfo'=>$accddata,
            'employer' => $jsondecodeAssistEmployer, 'emprecord' => $emprecord,'wagesinfo' => $wagesinfo, 'contribution'=>$contrinfo,
            'empcert'=>$empcert,'bankinfo'=>$bankinfo, 'permanentrep'=>$permanentrep, 'optionbank'=>$optionbank,
            'optionreason'=>$optionreason,'optionbai'=>$optionbai, 'optionpay'=>$optionpay, 'bankcode'=>$bankcode,
            'accountype'=>$accountype, 'overseasbank'=>$overseasbank, 'overseasbanktype'=>$overseasbanktype, 'month'=>$month,
            'causative'=>$causative,'accdcode'=>$accdcode,'industcode'=>$industcode, 'profcode'=>$profcode, 'worksts'=>$worksts,
            'mcdata'=>$mcdata,'caserefno'=>$caserefno, 'accdrefno'=>$accdrefno, 'doclist'=>$doclist, 'emptype'=>$emptype,
            'docinfo'=>$docinfo, 'hussts'=>$hussts,'mcdata'=>$jsondecodemc,'confirmation'=>$confirmation,
            'doclist_select'=>$alldoclist, 'occucode'=>$occucode, 'question1' => $question1 , 'question2' => $question2]);
    }

    // public function recommendationTestGet()
    // {
    //     $question1 = 'Whether the insured person is an employee under the SOCSO Act?';
    //     $question2 = ' Whether the SOCSO Act applies to this industry?';


    //     return view('noticeAccident.SCO.recommendation_popup', ['question1' => $question1 , 'question2' => $question2]);
    // }

    public function recommendationTestPost(req $req)
    {
        $question1 = $req->question1;
        $question2 = $req->question2;

        $question = [
            "ques1" => $question1,
            "ques2" => $question2
        ];

        return redirect()->back();
    }

    /* ---------------- NOTICE ACCIDENT -- IO-------------------- */

    public function indexIO()
    {
        //return session('caserefno');
        $operid = session('loginname');
        
        if ($operid == '') {
            return redirect('/login');
        }
        
        $idno = session('idno');
        if ($idno == '') {
            return redirect('/home');
        }
        
        $jsondecode='';
        $jsondecod1='';
        $jsondecod3='';

        //HANNIS
        $jsondecodeAssistEmployer="";
        $jsondecodeEmployerdate="";
        $jsondecodeWages="";
        $jsondecodeEmployer="";
        $jsondecodepermanent='';

        //$state=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['state']);
        //$branch = DB::select('select brcode,brname from branch where statecode=?',[$state[0]->refcode]);
        $idtype=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['idtype']);
        $race=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['race']);
        $national=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['national']);
        $mcsts=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['mcsts']);
        $transport=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['transport']);
        
        $causative=DB::select('Select refcode, descen from reftable where tablerefcode=? order by descen', ['causative']);
        $accdcode = DB::select('Select refcode, descen from reftable where tablerefcode=? order by descen', ['accdcode']);
        $industcode = DB::select('Select refcode, descen from reftable where tablerefcode=? order by descen', ['industcode']);
        $profcode = DB::select('Select refcode, descen from reftable where tablerefcode=? order by descen', ['profcode']);
        $month = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['month']);
        $worksts = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['worksts']);
        $hussts = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['hussts']);

        //$transport=DB::select('Select refcode, descen from reftable where tablerefcode=?', ['transport']);
        //$transport=DB::select('Select refcode, descen from reftable where tablerefcode=?', ['transport']);

        //SYAHIRAH
        $optionbank=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['bankloc']);
        $optionreason=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['rsnnoacc']);
        $optionbai=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['baists']);
        $optionpay=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['paymode']);
        $bankcode=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['bankcode']);
        $accountype=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['acctype']);
        $overseasbank=$bankcode;//DB::select('Select refcode, descen from reftable where tablerefcode=?', ['bankcode']);
        $overseasbanktype=$accountype;//DB::select('Select refcode, descen from reftable where tablerefcode=?', ['acctype']);
        $emptype = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['emptype']);
        $occucode=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['occupation']);
        
        //najmi
        //$doclist = DB::select('select docdescen,doctype,docdescbm from doctype where doccat=?',['C']);
        $sql = 'select d.docdescen,d.doctype,d.docdescbm, d.doccat, n.priority from doctype d, noticedoc n '
                . 'where n.casetype=? and n.doctype = d.doctype order by n.priority';
        $doclist = DB::select($sql, [session('noticetype')]);
        
        //chg28062019 irina - get all doc
        $alldoclist = DB::select('select docdescen,doctype,docdescbm, doccat from doctype order by doccat desc, doctype');


        //return view ('fileupload.claim_info')->with('name',$select);

        $jsondecodeAssist='';
        $jsondecodeAccddate='';
        $how = '';
        $jsondecodeConfirmation = '';

        //$test = json_encode($jsondecode);
        //return $test;
        //$this->getObContact($jsondecod1);
        $this->getObFormAssist($jsondecodeAssist);
        $url = $this->getConfirmation($jsondecodeConfirmation);
        //return $url;
        //return json_encode($jsondecodeConfirmation);

        $confirmation = null;
        if ($jsondecodeConfirmation && $jsondecodeConfirmation!='') {
            $record = $jsondecodeConfirmation->{'record'};
            if ($record <= 0) {
                //$jsondecodeConfirmation = null;
                $confirmation = null;
            } else {
                $confirmation = $jsondecodeConfirmation->{'data'};
            }
        }
        //return json_encode($confirmation);
        
        //irina - begin
        $jsondecodemc = '';
        $accdrefno = session('accdrefno');
        //return accdrefno;
        $caserefno = session('caserefno');
        
        // $accddata = null;
        $mcdata = null;
        $this->getAccidentinfo($jsondecod3);
                
        if ($jsondecod3 && $jsondecod3!='') {//irina
            $errorcode = $jsondecod3->{'errorcode'};
            if ($errorcode == 0) {
                $accddata = $jsondecod3->{'data'};
                session(['accddate'=>$accddata->accddate]);
            } else {
                $accddata = null;
            }
        }
        
        //return '++'.$accdrefno.'++'.$caserefno.'++';
        $jsondecodemc = '';
        $this->GetMCDetails($jsondecodemc);
        //return $jsondecodemc;
        if ($jsondecodemc && $jsondecodemc != '') {
            $errorcode = $jsondecodemc->{'errorcode'};

            if ($errorcode != 0) {
                $jsondecodemc = null;
            }
        }
                
                
        
        
        //irina - end

        //HANNIS
        $this->getAssist($jsondecodeAssistEmployer);
        
        //return json_encode($jsondecodeEmployer);
        //$jsondecodeWages = array();
       
        
        //return $wagesinfo;
        
        $docinfo = array();
        $this->getDoc($docinfo);


        //SYAHIRAH
        $this->getCertificateEmp($jsondecodemp);
         
        $jsondecodepermanent = null;
        $jsondecodebank='';
        $this->getBankInfo($jsondecodebank);
        
        //return '++'.json_encode($jsondecodebank).'++';
        //$this->getPermanentInfo($jsondecodepermanent);



        //$accdrefcode = session('accdrefno');
        //if($accdrefcode != '')
        //{
        //    $this->getAccidentinfo($jsondecod3);
        //$data= $jsondecod3->{'data'};
        // $how= $data['how'];
        //}
        
        //irina
        
        $obcontact = null;
        $date = null;
        $empcert = null;

        $permanentrep = null;
            
        $this->getObProfile($jsondecode);
        
        // $obprofile = null;
        if ($jsondecode && $jsondecode!='') {//irina
            // return json_encode($jsondecode);
            $record = $jsondecode->{'record'};
            if ($record == 0) {
                $obprofile = null;
            } else {
                $obprofile = $jsondecode->{'data'};
                $uniquerefno = $obprofile->{'uniquerefno'};
                session(['uniquerefno'=>$uniquerefno]);
            }
            
            // $test = json_encode($obprofile);
            // return $test;
        }

        /*if ($jsondecod1 && $jsondecod1!='')//irina
        {
            $obcontact = $jsondecod1->{'data'};
        }*/

        //HANNIS
        //return json_encode($jsondecodeEmployer);
        
        $this->getEmployer($jsondecodeEmployer);
        if ($jsondecodeEmployer && $jsondecodeEmployer!='') {//irina
            $record = $jsondecodeEmployer->{'record'};
            if ($record > 0) {
                if ($record == 1) {
                    $emprecord = $jsondecodeEmployer->{'emprecord'};
                }
            } else {
                $emprecord = null;
            }
            //$date = $jsondecodeEmployer->{'data'};
        }
        
        $contrinfo = array();
        $wagesinfo = array();
       

        $this->getWages($contrinfo, $wagesinfo);

        $empcert = null;
        //SYAHIRAH
        if ($jsondecodemp && $jsondecodemp!='') {//irina
            $errorcode = $jsondecodemp->{'errorcode'};
            if ($errorcode == 0) {
                $empcert = $jsondecodemp->{'data'};
            }
        }
        
        $bankinfo = null;
        if ($jsondecodebank && $jsondecodebank!='') {//irina
            $errorcode = $jsondecodebank->{'errorcode'};
            if ($errorcode == 0) {
                $bankinfo = $jsondecodebank->{'data'};
                //return json_encode($bankinfo);
            }
        }
        if ($jsondecodepermanent && $jsondecodepermanent!='') {//irina
            $permanentrep = $jsondecodepermanent->{'data'};
        }
        
        $state=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['state']);
        // if ($confirmation != null && $confirmation->statecode != '')
        // {
        //     $branch = DB::select('select brcode,brname from branch where statecode=?',[$confirmation->statecode]);
        //     //return $branch;
        // }
        // else
        // {
        //     $branch = DB::select('select brcode,brname from branch where statecode=?',[$state[0]->refcode]);
        //     //return $branch;
        // }
        
        //return $state;
        
        $accdplace=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['accdplace']);
        $accdwhen = null;
        if ($accddata != null) {
            if ($accddata->place != '') {
                $accdwhen = $this->getdsaccwhen($accddata->place);
                //return $accdwhen;
            }
        }
        
        //$accdwhen=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['accdwhen']);
        //return $accdwhen;
        
        return view('scheme.noticeAccident.IO.index', ['obprofile'=>$obprofile,'state'=>$state,
            'idtype'=>$idtype, 'race'=>$race, 'national'=>$national, 'mcsts'=>$mcsts, 'transport'=>$transport,
            'accdplace'=>$accdplace, 'accdwhen'=>$accdwhen , 'obformassist' => $jsondecodeAssist, 'accinfo'=>$accddata,
            'employer' => $jsondecodeAssistEmployer, 'emprecord' => $emprecord,'wagesinfo' => $wagesinfo, 'contribution'=>$contrinfo,
            'empcert'=>$empcert,'bankinfo'=>$bankinfo, 'permanentrep'=>$permanentrep, 'optionbank'=>$optionbank,
            'optionreason'=>$optionreason,'optionbai'=>$optionbai, 'optionpay'=>$optionpay, 'bankcode'=>$bankcode,
            'accountype'=>$accountype, 'overseasbank'=>$overseasbank, 'overseasbanktype'=>$overseasbanktype, 'month'=>$month,
            'causative'=>$causative,'accdcode'=>$accdcode,'industcode'=>$industcode, 'profcode'=>$profcode, 'worksts'=>$worksts,
            'mcdata'=>$mcdata,'caserefno'=>$caserefno, 'accdrefno'=>$accdrefno, 'doclist'=>$doclist, 'emptype'=>$emptype,
            'docinfo'=>$docinfo, 'hussts'=>$hussts,'mcdata'=>$jsondecodemc,'confirmation'=>$confirmation,
            'doclist_select'=>$alldoclist, 'occucode'=>$occucode]);
    }
    // public function indexIO()
    // {
    //     return view('scheme.noticeAccident.IO.index_IO');
    // }
    /* ---------------- NOTICE ACCIDENT -- SAO-------------------- */
   
    public function indexSAO()
    {
        //return session('caserefno');
        $operid = session('loginname');
        
        if ($operid == '') {
            return redirect('/login');
        }
        
        $idno = session('idno');
        if ($idno == '') {
            return redirect('/home');
        }
        
        $jsondecode='';
        $jsondecod1='';
        $jsondecod3='';

        //HANNIS
        $jsondecodeAssistEmployer="";
        $jsondecodeEmployerdate="";
        $jsondecodeWages="";
        $jsondecodeEmployer="";
        $jsondecodepermanent='';

        //$state=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['state']);
        //$branch = DB::select('select brcode,brname from branch where statecode=?',[$state[0]->refcode]);
        $idtype=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['idtype']);
        $race=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['race']);
        $national=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['national']);
        $mcsts=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['mcsts']);
        $transport=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['transport']);
        
        $causative=DB::select('Select refcode, descen from reftable where tablerefcode=? order by descen', ['causative']);
        $accdcode = DB::select('Select refcode, descen from reftable where tablerefcode=? order by descen', ['accdcode']);
        $industcode = DB::select('Select refcode, descen from reftable where tablerefcode=? order by descen', ['industcode']);
        $profcode = DB::select('Select refcode, descen from reftable where tablerefcode=? order by descen', ['profcode']);
        $month = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['month']);
        $worksts = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['worksts']);
        $hussts = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['hussts']);

        //$transport=DB::select('Select refcode, descen from reftable where tablerefcode=?', ['transport']);
        //$transport=DB::select('Select refcode, descen from reftable where tablerefcode=?', ['transport']);

        //SYAHIRAH
        $optionbank=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['bankloc']);
        $optionreason=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['rsnnoacc']);
        $optionbai=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['baists']);
        $optionpay=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['paymode']);
        $bankcode=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['bankcode']);
        $accountype=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['acctype']);
        $overseasbank=$bankcode;//DB::select('Select refcode, descen from reftable where tablerefcode=?', ['bankcode']);
        $overseasbanktype=$accountype;//DB::select('Select refcode, descen from reftable where tablerefcode=?', ['acctype']);
        $emptype = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['emptype']);
        $occucode=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['occupation']);
        
        //najmi
        //$doclist = DB::select('select docdescen,doctype,docdescbm from doctype where doccat=?',['C']);
        $sql = 'select d.docdescen,d.doctype,d.docdescbm, d.doccat, n.priority from doctype d, noticedoc n '
                . 'where n.casetype=? and n.doctype = d.doctype order by n.priority';
        $doclist = DB::select($sql, [session('noticetype')]);
        
        //chg28062019 irina - get all doc
        $alldoclist = DB::select('select docdescen,doctype,docdescbm, doccat from doctype order by doccat desc, doctype');


        //return view ('fileupload.claim_info')->with('name',$select);

        $jsondecodeAssist='';
        $jsondecodeAccddate='';
        $how = '';
        $jsondecodeConfirmation = '';

        //$test = json_encode($jsondecode);
        //return $test;
        //$this->getObContact($jsondecod1);
        $this->getObFormAssist($jsondecodeAssist);
        $url = $this->getConfirmation($jsondecodeConfirmation);
        //return $url;
        //return json_encode($jsondecodeConfirmation);

        $confirmation = null;
        if ($jsondecodeConfirmation && $jsondecodeConfirmation!='') {
            $record = $jsondecodeConfirmation->{'record'};
            if ($record <= 0) {
                //$jsondecodeConfirmation = null;
                $confirmation = null;
            } else {
                $confirmation = $jsondecodeConfirmation->{'data'};
            }
        }
        //return json_encode($confirmation);
        
        //irina - begin
        $jsondecodemc = '';
        $accdrefno = session('accdrefno');
        //return accdrefno;
        $caserefno = session('caserefno');
        
        // $accddata = null;
        $mcdata = null;
        $this->getAccidentinfo($jsondecod3);
                
        if ($jsondecod3 && $jsondecod3!='') {//irina
            $errorcode = $jsondecod3->{'errorcode'};
            if ($errorcode == 0) {
                $accddata = $jsondecod3->{'data'};
                session(['accddate'=>$accddata->accddate]);
            } else {
                $accddata = null;
            }
        }
        
        //return '++'.$accdrefno.'++'.$caserefno.'++';
        $jsondecodemc = '';
        $this->GetMCDetails($jsondecodemc);
        //return $jsondecodemc;
        if ($jsondecodemc && $jsondecodemc != '') {
            $errorcode = $jsondecodemc->{'errorcode'};

            if ($errorcode != 0) {
                $jsondecodemc = null;
            }
        }
                
                
        
        
        //irina - end

        //HANNIS
        $this->getAssist($jsondecodeAssistEmployer);
        
        //return json_encode($jsondecodeEmployer);
        //$jsondecodeWages = array();
       
        
        //return $wagesinfo;
        
        $docinfo = array();
        $this->getDoc($docinfo);


        //SYAHIRAH
        $this->getCertificateEmp($jsondecodemp);
         
        $jsondecodepermanent = null;
        $jsondecodebank='';
        $this->getBankInfo($jsondecodebank);
        
        //return '++'.json_encode($jsondecodebank).'++';
        //$this->getPermanentInfo($jsondecodepermanent);



        //$accdrefcode = session('accdrefno');
        //if($accdrefcode != '')
        //{
        //    $this->getAccidentinfo($jsondecod3);
        //$data= $jsondecod3->{'data'};
        // $how= $data['how'];
        //}
        
        //irina
        
        $obcontact = null;
        $date = null;
        $empcert = null;

        $permanentrep = null;
            
        $this->getObProfile($jsondecode);
        
        // $obprofile = null;
        if ($jsondecode && $jsondecode!='') {//irina
            // return json_encode($jsondecode);
            $record = $jsondecode->{'record'};
            if ($record == 0) {
                $obprofile = null;
            } else {
                $obprofile = $jsondecode->{'data'};
                $uniquerefno = $obprofile->{'uniquerefno'};
                session(['uniquerefno'=>$uniquerefno]);
            }
            
            // $test = json_encode($obprofile);
            // return $test;
        }

        /*if ($jsondecod1 && $jsondecod1!='')//irina
        {
            $obcontact = $jsondecod1->{'data'};
        }*/

        //HANNIS
        //return json_encode($jsondecodeEmployer);
        
        $this->getEmployer($jsondecodeEmployer);
        if ($jsondecodeEmployer && $jsondecodeEmployer!='') {//irina
            $record = $jsondecodeEmployer->{'record'};
            if ($record > 0) {
                if ($record == 1) {
                    $emprecord = $jsondecodeEmployer->{'emprecord'};
                }
            } else {
                $emprecord = null;
            }
            //$date = $jsondecodeEmployer->{'data'};
        }
        
        $contrinfo = array();
        $wagesinfo = array();
       

        $this->getWages($contrinfo, $wagesinfo);

        $empcert = null;
        //SYAHIRAH
        if ($jsondecodemp && $jsondecodemp!='') {//irina
            $errorcode = $jsondecodemp->{'errorcode'};
            if ($errorcode == 0) {
                $empcert = $jsondecodemp->{'data'};
            }
        }
        
        $bankinfo = null;
        if ($jsondecodebank && $jsondecodebank!='') {//irina
            $errorcode = $jsondecodebank->{'errorcode'};
            if ($errorcode == 0) {
                $bankinfo = $jsondecodebank->{'data'};
                //return json_encode($bankinfo);
            }
        }
        if ($jsondecodepermanent && $jsondecodepermanent!='') {//irina
            $permanentrep = $jsondecodepermanent->{'data'};
        }
        
        $state=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['state']);
        // if ($confirmation != null && $confirmation->statecode != '')
        // {
        //     $branch = DB::select('select brcode,brname from branch where statecode=?',[$confirmation->statecode]);
        //     //return $branch;
        // }
        // else
        // {
        //     $branch = DB::select('select brcode,brname from branch where statecode=?',[$state[0]->refcode]);
        //     //return $branch;
        // }
        
        //return $state;
        
        $accdplace=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['accdplace']);
        $accdwhen = null;
        if ($accddata != null) {
            if ($accddata->place != '') {
                $accdwhen = $this->getdsaccwhen($accddata->place);
                //return $accdwhen;
            }
        }
        
        //$accdwhen=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['accdwhen']);
        //return $accdwhen;
        
        return view('scheme.noticeAccident.SAO.index', ['obprofile'=>$obprofile,'state'=>$state,
            'idtype'=>$idtype, 'race'=>$race, 'national'=>$national, 'mcsts'=>$mcsts, 'transport'=>$transport,
            'accdplace'=>$accdplace, 'accdwhen'=>$accdwhen , 'obformassist' => $jsondecodeAssist, 'accinfo'=>$accddata,
            'employer' => $jsondecodeAssistEmployer, 'emprecord' => $emprecord,'wagesinfo' => $wagesinfo, 'contribution'=>$contrinfo,
            'empcert'=>$empcert,'bankinfo'=>$bankinfo, 'permanentrep'=>$permanentrep, 'optionbank'=>$optionbank,
            'optionreason'=>$optionreason,'optionbai'=>$optionbai, 'optionpay'=>$optionpay, 'bankcode'=>$bankcode,
            'accountype'=>$accountype, 'overseasbank'=>$overseasbank, 'overseasbanktype'=>$overseasbanktype, 'month'=>$month,
            'causative'=>$causative,'accdcode'=>$accdcode,'industcode'=>$industcode, 'profcode'=>$profcode, 'worksts'=>$worksts,
            'mcdata'=>$mcdata,'caserefno'=>$caserefno, 'accdrefno'=>$accdrefno, 'doclist'=>$doclist, 'emptype'=>$emptype,
            'docinfo'=>$docinfo, 'hussts'=>$hussts,'mcdata'=>$jsondecodemc,'confirmation'=>$confirmation,
            'doclist_select'=>$alldoclist, 'occucode'=>$occucode]);
    }
    // public function indexSAO()
    // {
    //     return view('scheme.noticeAccident.SAO.index_SAO');
    // }
}
