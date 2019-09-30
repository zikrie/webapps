<?php

namespace App\Http\Controllers\scheme\NewClaim;

use Illuminate\Http\Request;
use DB;
use App\ObForm;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Cache;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;

class NoticeOdController extends CommonController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operid = session('loginname');
        
        if ($operid == '')
        {
            return redirect('/login');
        }
        
        $idno = session('idno');
        if ($idno == '')
        {
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
        // return $idtype;
        $occucode=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['occupation']);
        // return $occucode;
        // $suboccupation=DB::select('select so_occcode, so_suboccdescen from suboccupation  where  occupationcode=?', [$occupation[0]->refcode]);
        $race=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['race']);
        // return $race;
        $national=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['national']);
        // return $national;
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
        // return $hussts;
        
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
        $sql = 'select d.docdescen,d.doctype,d.docdescbm, d.doccat, n.priority from doctype d, noticedoc n '
        . 'where n.casetype=? and n.doctype = d.doctype order by n.priority';
        $doclist = DB::select($sql,[session('noticetype')]);
        
        //chg28062019 irina - get all doc
        $alldoclist = DB::select('select docdescen,doctype,docdescbm, doccat from doctype order by doccat desc, doctype');


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
        
        $url = $this->getWages($contrinfo,$wagesinfo);
        //return $url;

        $docinfo = array();
        $this->getDoc($docinfo);

        $jsondecodepermanent = null;
        $bankinfo = null;
        $test = $this->getBankInfo($jsondecodebank);
        
        //return $test;
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
        $obprofile = null;
        $obcontact = null;
        $date = null;
        $empcert = null;

        $permanentrep = null;

        //return $jsondecode;
        
        if ($jsondecode && $jsondecode!='')//irina
        {
            // return json_encode($jsondecode);
            // return $jsondecode;
            $record = $jsondecode->{'record'};
            if ($record == 0)
            {
                $obprofile = null;
            }
            else
            {
                $obprofile = $jsondecode->{'data'};
                $uniquerefno = $obprofile->{'uniquerefno'};
                session(['uniquerefno'=>$uniquerefno]);
            }


            
            //$test = json_encode($obprofile);
            //return $test;
        }

        //notice od
        $jsondecodeOdinfo="";
        $this->getOdInfo($jsondecodeOdinfo);

        if ($jsondecodeOdinfo && $jsondecodeOdinfo!='')//hannis
        {
            $errorcode = $jsondecodeOdinfo->{'errorcode'};
            if ($errorcode == 0)
            {
                $oddata = $jsondecodeOdinfo->{'data'};
            }
            else
            {
                $oddata = null;
            }
        }


        $jsondecodeOdEmphistory="";
        $this->getOdEmphistory($jsondecodeOdEmphistory);

        if ($jsondecodeOdEmphistory && $jsondecodeOdEmphistory!='')//hannis
        {
            $record = $jsondecodeOdEmphistory->{'record'};
            if ($record > 0)
            {
                $odempinfo = $jsondecodeOdEmphistory->{'data'};
            }
            else
            {
                $odempinfo = null;
            }
            //$date = $jsondecodeEmployer->{'data'};
        }

        // return $odempinfo;

        


        /*if ($jsondecod1 && $jsondecod1!='')//irina
        {
            $obcontact = $jsondecod1->{'data'};
        }*/

        //HANNIS
        //return json_encode($jsondecodeEmployer);
        if ($jsondecodeEmployer && $jsondecodeEmployer!='')//irina
        {
            $record = $jsondecodeEmployer->{'record'};
            if ($record > 0)
            {
                $emprecord = $jsondecodeEmployer->{'emprecord'};
                // $emprecord = $jsondecodeEmployer->{'emprecord'};
                // if ($record == 1)
                // {
                //     // $empcode = $emprecord[0]->{'empcode'};
                //     // session(['empcode'=>$empcode]);
                // }
            }
            else
            {
                $emprecord = null;
            }
            //$date = $jsondecodeEmployer->{'data'};
        }

        //return $jsondecodebank;
        if ($jsondecodebank && $jsondecodebank!='')//irina
        {
            $errorcode = $jsondecodebank->{'errorcode'};
            if ($errorcode == 0)
            {
                $bankinfo = $jsondecodebank->{'data'};
                //return json_encode($bankinfo);
            }
            else
            {
                $bankinfo = null;
            }
            

        }
        

        $jsondecodeConfirmation="";
        $confirmation = null;
        $this->getConfirmation($jsondecodeConfirmation);
        //return json_encode($jsondecodeConfirmation);

        if ($jsondecodeConfirmation && $jsondecodeConfirmation!='')//irina
        {
            $record = $jsondecodeConfirmation->{'record'};
            if ($record <= 0)
            {
                 //$jsondecodeConfirmation = null;
               $confirmation = null;
           }
           else
           {
            $confirmation = $jsondecodeConfirmation->{'data'};
                //return $confirmation;
        }

    }

        //return $confirmation;

    $jsondecodemc = '';
    $this->GetMCDetails($jsondecodemc);
        //return json_encode($jsondecodemc);
    if ($jsondecodemc && $jsondecodemc != '')
    {
        $errorcode = $jsondecodemc->{'errorcode'};

        if ($errorcode != 0)
        {
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

        //return json_encode($jsondecodemc);
        /*
        $mcinfo = $jsondecodemc->{'mcinfo'};
        foreach($mcinfo as $mc)
        {
            //return json_encode($mc);
            if (!empty($mc->workinfo) && $mc->workinfo != '')
            {
                foreach($mc->workinfo as $key2 => $work)
                {
                    return $key2;
                }
            }
            else
            {
                return 'empty';
            }
                                      
        }*/
        
        //return $bankinfo;
        
        return view('scheme.noticeOd.PK.index',['obprofile'=>$obprofile,'state'=>$state, 
            'idtype'=>$idtype, 'occucode'=>$occucode, 'race'=>$race, 'national'=>$national, 'mcsts'=>$mcsts, 'transport'=>$transport,
            'accdplace'=>$accdplace, 'accdwhen'=>$accdwhen , 'obformassist' => $jsondecodeAssist, 
            'employer' => $jsondecodeAssistEmployer, 'emprecord' => $emprecord,'wagesinfo' => $wagesinfo,
            'contribution'=>$contrinfo, 'data'=>$data,'bankinfo'=>$bankinfo, 'optionbank'=>$optionbank, 
            'optionreason'=>$optionreason,'optionbai'=>$optionbai, 'optionpay'=>$optionpay, 'bankcode'=>$bankcode, 
            'accountype'=>$accountype, 'overseasbank'=>$overseasbank, 'overseasbanktype'=>$overseasbanktype, 'month'=>$month,
            'causative'=>$causative,'accdcode'=>$accdcode,'industcode'=>$industcode, 'profcode'=>$profcode, 'worksts'=>$worksts, 
            'caserefno'=>$caserefno, 'doclist'=>$doclist, 'emptype'=>$emptype,
            'docinfo'=>$docinfo, 'odempinfo' => $odempinfo, 'oddata'=>$oddata, 'confirmation'=>$confirmation,
            'hussts'=>$hussts,'mcdata'=>$jsondecodemc,'doclist_select'=>$alldoclist]);
    }
    
    public function GetMCDetails(&$jsondecode)
    {
        $caserefno = session('caserefno');
        
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/getmcinfo?caserefno='.$caserefno;
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        
        //return $result;
        $jsondecode = json_decode($result);
        // dd($jsondecode);
        //close connection
        curl_close($ch);
    }
    
    public function UpdMC(Request $req)
    {
        if ($req->action== 'Submit') {

            dd($req->all());

            $parent = count($req->hussts);

            for($i=0;$i<$parent;$i++)
            {
                $hussts = $req->input('hussts')[$i];
                $clinicinfo = $req->input('clinicinfo')[$i];
                $startdate = $req->input('startdate')[$i];
                $enddate = $req->input('enddate')[$i];
                $totalmc = $req->input('totalmc')[$i];

                $child = count($req->mcitemstartdate[$i]);

                    for($j=0;$j<$child;$j++)
                    {
                        $mcitemstartdate = $req->input('mcitemstartdate')[$i][$j];
                        $mcitemenddate = $req->input('mcitemenddate')[$i][$j];
                        $totalmcitem = $req->input('totalmcitem')[$i][$j];
                        $approvalsts = $req->input('approvalsts')[$i][$j];

                        $mcitem[$i][$j]=['mcitemstartdate'=>$mcitemstartdate,'mcitemenddate'=>$mcitemenddate,'totalmcitem'=>$totalmcitem,'approvalsts'=>$approvalsts];
                    }

                $mcinfo[$i] = ['husstatus'=>$hussts,'clinicinfo'=>$clinicinfo,'startdate'=>$startdate,'enddate'=>$enddate,'totalmc'=>$totalmc,'scorecommend'=>$scorecommend];



            }

            $data = ['mcinfo'=>mcinfo, 'mcitem'=>$mcitem];

            dd($data);

            // dd($data);
            $endpoint ='http://127.0.0.1:8000/api/scheme/noticedeath';
            $options = [
                'exceptions' => false,
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json'],
                    'body' => json_encode($data)
                ];
    
            
            // dd($options);
            $client = new Client();
            $response = $client->post($endpoint, $options);

            dd($response->getBody()->getContents());
        // dd($response);

        }

    }
       // dd('ya');


        // $clinicinfo = $req->clinicinfo;

        // // $parent = count($req->hussts);

        // for($i=0;$i<$clinicinfo;$i++)
        //     {
        //         $hussts = $req->hussts[$i];
        //         $mcstartdate = $req->mcstartdate[$i];
        //         // dd($mcstartdate);
        //         $mcenddate = $req->mcenddate[$i];
        //         $totalmc = $req->totalmc[$i];
        //         $mcstatus = '8';//New

        //         // $child = count($req->workstartdate[$i]);

        //             for($j=0;$j<$clinicinfo;$j++)
        //             {
        //                 $wagespaid = null;
        //                 $workstartdate = $req->workstartdate[$i][$j];
        //                 $workenddate = $req->workenddate[$i][$j];
        //                 $totalwork = $req->totalwork[$i][$j];
        //                 $statuswork = null;

        //                 $workinfo[$i][$j]=['workstartdate'=>$workstartdate,'workenddate'=>$workenddate,'totalwork'=>$totalwork, 'wagespaid'=>null, 'statuswork'=>null];
        //             }

        //         $mcinfo[$i] = ['hussts'=>$hussts,'startdate'=>$mcstartdate,'enddate'=>$mcenddate,'totalmc'=>$totalmc,'mcstatus'=>$mcstatus, 'workinfo'=>$workinfo];

        //     }

        //     $mcdata = ['operid'=>$operid, 'brcode'=>$brcode, 'caserefno'=>$caserefno, 'idno'=>$idno, 'mcinfo'=>$mcinfo];

        //     dd($mcdata);


       //  $clinicinfo = $req->clinicinfo;
       //  $hussts = $req->hussts;
       //  $mcstartdate = $req->mcstartdate;
       //  // dd($mcstartdate);
       //  $mcenddate = $req->mcenddate;
       //  $mcstatus = '08';//New
       //  $totalmc = $req->totalmc;
       //  $workinfo = array();
       //  $cnt = 0;
       //  $lola="9";
       //  for($i=1;$i<=$lola;$i++){
       // $parent =$req->mcstartdate_0_.$i;
       //  }

       //     dd($parent);
        // for($i=0,i<)
// $testing=$req->workstartdate[];
// dd($testing);
//         foreach ($req->workstartdate_0_0_0[] as $idx)
//         {

//             $wagespaid = null;
//             $workenddate = $req->workenddate[$idx];
//             // dd($workenddate);
//             $totalwork = $req->totalwork[$idx];
//             $statuswork = null;

//             $workinfo[$cnt] = ['wagespaid'=>null,'workstartdate'=>$workstartdate, 'workenddate'=>$workenddate, 'totalwork'=>$totalwork, 'statuswork'=>null];
//         }

        // $mcinfo = array();
        // $mcinfo[0] = ['hussts'=>$hussts,'startdate'=>$mcstartdate,'enddate'=>$mcenddate, 'mcsts'=>$mcstatus, 'totalmc'=>$totalmc,
        // 'workinfo'=>$workinfo];

        // $mcdata = ['operid'=>$operid, 'brcode'=>$brcode, 'caserefno'=>$caserefno, 'idno'=>$idno, 
        // 'clinicinfo'=>$clinicinfo, 'mcinfo'=>$mcinfo];

        // dd($mcdata);

            // dd($data);

        //     $options = [
        //     'headers' => [
        //         'Content-Type' => 'application/json',
        //         'Accept' => 'application/json'
        //     ],
        //     'json' => [
        //         "data" => $data
        //     ],     

        // ];

        // $res = json_decode($result);
        // //return $jsondata.'++'.$result;
        // $retcode = $res->{'errorcode'};

        // if ($retcode == 0)
        // {
        //     session(['mcmonth'=>$mcmonth,'mcyear'=>$mcyear]);
        //     //return redirect()->back()->with('messagemc','Save successful');//++'.$x.'++'.$accdrefno.'++'.$jsondata.'++');
        //     return redirect()->back()->withInput(['tab'=>'wages'])->with('messagemc','Save successful');
        // }
        // else
        // {
        //     ///return redirect()->back()->with('messagemc','Save unsuccessful');
        //     return redirect()->back()->withInput(['tab'=>'mcdetails'])->with('messagemc','Save unsuccessful');
        // }




        // if (strlen($mcstartdate) == 10)
        // {
        //     $mcstartdate = str_replace('-', '', $mcstartdate);
        //     $mcmonth = substr($mcstartdate,4,2);
        //     $mcyear = substr($mcstartdate,0,4);
        // }



        // if (strlen($mcenddate) == 10)
        // {
        //     $mcenddate = str_replace('-', '', $mcenddate);
        // }



        // if (strlen($workstartdate) == 10)
        // {
        //     $workstartdate = str_replace('-', '', $workstartdate);
        // }


        // if (strlen($workenddate) == 10)
        // {
        //     $workenddate = str_replace('-', '', $workenddate);
        // }



        //$clinicinfo = array();
        //$clinicinfo[0] = ['clinicname'=>$clinicname, 'mcinfo'=>$mcinfo];



        // return $jsondata;
    
    //irina
    
    public function checkOdRecordExist($jsondecodeOdRecord)
    {
        $idno = session('idno');
        $idtype = session('idtype');
        
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/odrecordexist?idno='.$idno.'&idtype'.$idtype;
        
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        //return '++'.$result.'++';

        //close connection
        curl_close($ch);
        // return $result;
        $jsondecodeOdRecord = json_decode($result);

    }

    //get ob profile
    public function getObProfile(&$jsondecode)
    {    
        $idno= session('idno');
        $idtype= session('idtype');
        $caserefno= session('caserefno');
        $operid= session('loginname');


        $url = env('WS_IP', 'localhost').'/api/wsmotion/';

        $options = [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ],
            'json' => [
                'idno' => $idno,
                'idtype' => $idtype,
                'caserefno' => $caserefno,
                'operid' => $operid
            ],     
            
        ];
        // dd($options);
        $client = new Client();

        $response = $client->get($url.'obprofile?idno='.$idno.'&idtype='.$idtype.'&caserefno='.$caserefno.'&operid='.$operid)->getBody();
        $jsondecode = json_decode($response->getContents());
        // dd($jsondecode);
        
    }

      // GET EMPLOYER FROM DB - HANNIS 
    public function getEmployer(&$jsondecodeEmployer)
    {

        $caserefno = session('caserefno');

        $url = env('WS_IP', 'localhost').'/api/wsmotion/';
        
        $options = [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ],
            'json' => [
                'caserefno' => $caserefno
            ],     
            
        ];
        // dd($options);
        $client = new Client();

        $response = $client->get($url.'employer?caserefno='.$caserefno)->getBody();
        $jsondecodeEmployer = json_decode($response->getContents());
        
    }

    //  get od employer history
    public function getOdEmphistory(&$jsondecodeOdEmphistory)
    {
        $idno= session('idno');
        $idtype= session('idtype');
        $caserefno= session('caserefno');
        $operid= session('loginname');


        $url = env('WS_IP', 'localhost').'/api/wsmotion/';

        $options = [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ],
            'json' => [
                'caserefno' => $caserefno,
            ],     
            
        ];
        // dd($options);
        $client = new Client();

        $response = $client->get($url.'odemphistory?caserefno='.$caserefno)->getBody();
        $jsondecodeOdEmphistory = json_decode($response->getContents());
        // dd($jsondecodeOdEmphistory);

    }


    //get od info
    public function getOdInfo(&$jsondecodeOdinfo)
    {

        $caserefno = session('caserefno');

        $url = env('WS_IP', 'localhost').'/api/wsmotion/';

        $options = [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ],
            'json' => [
                'caserefno' => $caserefno,
            ],     
            
        ];
        // dd($options);
        $client = new Client();

        $response = $client->get($url.'getodinfo?caserefno='.$caserefno)->getBody();
        $jsondecodeOdinfo = json_decode($response->getContents());
        // dd($jsondecodeOdinfo);

    }
    
    
    public function createnoticedraft()
    {
        $noticetype = session('noticetype');
        $operid = session('loginname');
        $brcode = session('loginbranchcode');
        $idno = session('idno');

        $notice = ['noticetype'=> $noticetype, 'operid'=> $operid,'brcode'=> $brcode, 'idno'=>$idno];
        $jsondata = json_encode($notice);

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/createdraft';
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
        
        return json_decode($result);
    }

     //Get OBFORM from Assist
    public function getObFormAssist(&$jsondecodeAssist)
    {

        $idno= session('idno');
        $idtype= session('idtype');


        $url = 'http://'.env('ASSIST_IP', 'localhost').'/wsassistsimulation/obprofile/'.$idno.'&idtype='.$idtype;
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        
        $jsondecodeAssist = json_decode($result);
        //close connection
        curl_close($ch);
    }


    // GET EMPLOYER FROM ASSIST - HANNIS 
    public function getAssist(&$jsondecodeAssistEmployer)
    {
        //$idno = '1';

        $idno = session('idno');
        $empcode = session('empcode');
        $url = 'http://'.env('ASSIST', 'localhost').'/wsassistsimulation/employer/'.$empcode;
        $ch = curl_init();
        
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);

        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
        
        
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);

        //close connection
        curl_close($ch);

        $jsondecodeAssistEmployer = json_decode ($result);

    }

    public function getDoc(&$docinfo)//&$newwages)
    {
        $idno = session ('idno'); // get session
        $uniquerefno = session('uniquerefno');
        $caserefno = session ('caserefno');

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/getdoc?uniquerefno='.$uniquerefno.'&caserefno='.$caserefno;//irina
        
        $ch = curl_init();
        
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);

        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
        
        
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);

        //close connection
        curl_close($ch);

        $docinfo = json_decode ($result);

    }

    // GET WAGES FROM DB - HANNIS 
    public function getWages(&$contrinfo, &$wagesinfo)//&$newwages)
    {
        $caserefno = session ('caserefno'); // get session
        $idno = session ('idno'); // get session
        $month = session ('mcmonth');
        $year = session('mcyear');
        
        if ($month == '')
        {
            $month = date('m');
        }
        if ($year == '')
        {
            $year = date('Y');
        }

        //$idno = '960422016554';
        // $month = '03';
        // $year = '2019';
        $count = '6';

        
        //$url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/wage/'.$idno.'/'.$month.'/'.$year.'/'.$count;//irina
        $url = env('WS_IP', 'localhost').'/api/wsmotion/';//kai

        $options = [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ],
            'json' => [
                'caserefno' => $caserefno,
                'month' => $month,
                'year' => $year,
                'count' => $count
            ],     
            
        ];
        // dd($options);
        $client = new Client();

        $response = $client->get($url.'wages?caserefno='.$caserefno.'&month='.$month.'&year='.$year.'&count='.$count)->getBody();
        $jsondecodeWages = json_decode($response->getContents());
        // dd($jsondecodeWages);

        if ($jsondecodeWages != null && $jsondecodeWages != '')
        {
         // $wagesinfo = $jsondecodeWages->{'wagesinfo'};
           $record = $jsondecodeWages->{'record'};
         // return $record;

           if ($record > 0)
           {
            $wagesinfo = $jsondecodeWages->{'data'};
        }
        else
        {
            $wagesinfo = null;
        }

    }


        $url = env('ASSIST_IP', 'localhost').'/wsassistsimulation/contribution/';//kai

        $options = [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ],
            'json' => [
                'idno' => $idno
            ],     
            
        ];
        // dd($options);
        $client = new Client();
        $newwages = array();
        $count = 0;

        $response = $client->get($url.$idno)->getBody();
        $jsondecodeContribution = json_decode($response->getContents());
        // dd($jsondecodeContribution);

        if ($jsondecodeContribution && $jsondecodeContribution!='')
        {
            $contrinfo = $jsondecodeContribution->{'contributioninfo'};
        }

    }


    //GET BRANCH NAME FROM DB - FOR SOCSO
    // public function getbranchname($statecode)
    // {
    //     $branch=DB::select('select brcode, brname from branch  where  statecode=?', [$statecode]);
    //     return json_encode($branch);

    // }


     //GET BANK INFO FROM DB - SYAHIRAH
    public function getBankInfo(&$jsondecodebank)
    {

        $caserefno = session('caserefno');

        $url = env('WS_IP', 'localhost').'/api/wsmotion/';

        $options = [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ],
            'json' => [
                'caserefno' => $caserefno,
            ],     
            
        ];
        // dd($options);
        $client = new Client();

        $response = $client->get($url.'bankinfo?caserefno='.$caserefno)->getBody();
        $jsondecodebank = json_decode($response->getContents());
        // dd($jsondecodebank);

    }


    public function getConfirmation(&$jsondecodeConfirmation)
    {

        $caserefno = session('caserefno');
        $uniquerefno = session('uniquerefno');
        // $idno = session('idno');
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/';

        $options = [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ],
            'json' => [
                'caserefno' => $caserefno,
                'uniquerefno' => $uniquerefno
            ],     
            
        ];
        // dd($options);
        $client = new Client();

        $response = $client->get($url.'getconfirmation?caserefno='.$caserefno.'&applicantid='.$uniquerefno)->getBody();
        $jsondecodeConfirmation = json_decode($response->getContents());
        // dd($jsondecodeConfirmation);
    }

   //for preview - GET
    public function preview()
    {
        $operid = session('loginname');
        
        if ($operid == '')
        {
            return redirect('/login');
        }
        
        $idno = session('idno');
        if ($idno == '')
        {
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
        $doclist = DB::select($sql,['02']);

        //return view ('fileupload.claim_info')->with('name',$select);

        $jsondecodeAssist='';
        $jsondecodeAccddate='';
        $how = '';


        $this->getObProfile($jsondecode);
        //$test = json_encode($jsondecode);
        // return $jsondecode;
        //$this->getObContact($jsondecod1);
        $this->getObFormAssist($jsondecodeAssist);

        if ($jsondecodeAssist && $jsondecodeAssist!='')//irina
        {
            // foreach($jsondecodeAssist as $ob)
            // {
            //     $listid = $ob->{'idinfo'};
            // }
            // return $listid;
        }
        
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
        
        $url = $this->getWages($contrinfo,$wagesinfo);
        //return $url;

        $docinfo = array();
        $this->getDoc($docinfo);

        $jsondecodepermanent = null;
        $test = $this->getBankInfo($jsondecodebank);
        
        //return $test;
        
        //return '++'.json_encode($jsondecodebank).'++';
        //$this->getPermanentInfo($jsondecodepermanent);



        //$accdrefcode = session('accdrefno');
        //if($accdrefcode != '')
        //{
        //    $this->getAccidentinfo($jsondecod3); 
            //$data= $jsondecod3->{'data'};
            // $how= $data['how'];
        //}
        
        // $this->getAccidentinfo($jsondecod3); 

        // if ($jsondecod3 && $jsondecod3!='')//irina
        // {
        //     $errorcode = $jsondecod3->{'errorcode'};
        //     if ($errorcode == 0)
        //     {
        //         $accddata = $jsondecod3->{'data'};
        //         session(['accddate'=>$accddata->accddate]);
        //     }
        //     else
        //     {
        //         $accddata = null;
        //     }

        // }
        //irina
        $obprofile = null;
        $obcontact = null;
        $date = null;
        $empcert = null;

        $permanentrep = null;

        //return $jsondecode;
        
        if ($jsondecode && $jsondecode!='')//irina
        {
            // return json_encode($jsondecode);
            // return $jsondecode;
            $record = $jsondecode->{'record'};
            if ($record == 0)
            {
                $obprofile = null;
            }
            else
            {
                $obprofile = $jsondecode->{'data'};
                $uniquerefno = $obprofile->{'uniquerefno'};
                session(['uniquerefno'=>$uniquerefno]);
            }


            
            //$test = json_encode($obprofile);
            //return $test;
        }

        //notice od
        $jsondecodeOdinfo="";
        $this->getOdInfo($jsondecodeOdinfo);

        if ($jsondecodeOdinfo && $jsondecodeOdinfo!='')//hannis
        {
            $errorcode = $jsondecodeOdinfo->{'errorcode'};
            if ($errorcode == 0)
            {
               $oddata = $jsondecodeOdinfo->{'data'};
           }
           else
           {
               $oddata = null;
           }
       }


       $jsondecodeOdEmphistory="";
       $this->getOdEmphistory($jsondecodeOdEmphistory);

         if ($jsondecodeOdEmphistory && $jsondecodeOdEmphistory!='')//hannis
         {
           $record = $jsondecodeOdEmphistory->{'record'};
           if ($record > 0)
           {
               $odempinfo = $jsondecodeOdEmphistory->{'data'};
           }
           else
           {
               $odempinfo = null;
           }
             //$date = $jsondecodeEmployer->{'data'};
       }

        // return $odempinfo;




        /*if ($jsondecod1 && $jsondecod1!='')//irina
        {
            $obcontact = $jsondecod1->{'data'};
        }*/

        //HANNIS
        //return json_encode($jsondecodeEmployer);
        if ($jsondecodeEmployer && $jsondecodeEmployer!='')//irina
        {
            $record = $jsondecodeEmployer->{'record'};
            if ($record > 0)
            {
                $emprecord = $jsondecodeEmployer->{'emprecord'};
                // $emprecord = $jsondecodeEmployer->{'emprecord'};
                // if ($record == 1)
                // {
                //     // $empcode = $emprecord[0]->{'empcode'};
                //     // session(['empcode'=>$empcode]);
                // }
            }
            else
            {
                $emprecord = null;
            }
            //$date = $jsondecodeEmployer->{'data'};
        }

        
        if ($jsondecodebank && $jsondecodebank!='')//irina
        {
            $errorcode = $jsondecodebank->{'errorcode'};
            if ($errorcode == 0)
            {
                $bankinfo = $jsondecodebank->{'data'};
                //return json_encode($bankinfo);
            }
            else
            {
                $bankinfo = null;
            }
            

        }
        

        $jsondecodeConfirmation="";
        $confirmation = null;
        $this->getConfirmation($jsondecodeConfirmation);
        //return json_encode($jsondecodeConfirmation);

        if ($jsondecodeConfirmation && $jsondecodeConfirmation!='')//irina
        {
            $record = $jsondecodeConfirmation->{'record'};
            if ($record <= 0)
            {
                 //$jsondecodeConfirmation = null;
               $confirmation = null;
           }
           else
           {
            $confirmation = $jsondecodeConfirmation->{'data'};
                //return $confirmation;
        }

    }

        //return $confirmation;

    $jsondecodemc = '';
    $this->GetMCDetails($jsondecodemc);
        //return json_encode($jsondecodemc);
    if ($jsondecodemc && $jsondecodemc != '')
    {
        $errorcode = $jsondecodemc->{'errorcode'};

        if ($errorcode != 0)
        {
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



        //return $bankinfo;

    return view('scheme.noticeOd.preview',['obprofile'=>$obprofile,'state'=>$state, 
        'idtype'=>$idtype, 'race'=>$race, 'national'=>$national, 'mcsts'=>$mcsts, 'transport'=>$transport,
        'accdplace'=>$accdplace, 'accdwhen'=>$accdwhen , 'obformassist' => $jsondecodeAssist, 
        'employer' => $jsondecodeAssistEmployer, 'emprecord' => $emprecord,'wagesinfo' => $wagesinfo,
        'contribution'=>$contrinfo, 'data'=>$data,'bankinfo'=>$bankinfo, 'optionbank'=>$optionbank, 
        'optionreason'=>$optionreason,'optionbai'=>$optionbai, 'optionpay'=>$optionpay, 'bankcode'=>$bankcode, 
        'accountype'=>$accountype, 'overseasbank'=>$overseasbank, 'overseasbanktype'=>$overseasbanktype, 'month'=>$month, 
        'causative'=>$causative,'accdcode'=>$accdcode,'industcode'=>$industcode, 'profcode'=>$profcode, 'worksts'=>$worksts, 
        'caserefno'=>$caserefno, 'doclist'=>$doclist, 'emptype'=>$emptype, 'oddata'=>$oddata,
        'docinfo'=>$docinfo, 'confirmation'=>$confirmation,'odempinfo'=>$odempinfo,
        'hussts'=>$hussts,'mcdata'=>$jsondecodemc, 'listid'=>$listid]);
}









    //  --------POST-----------



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
        //return redirect()->back();
        // return $this->index();
}

     //POST OBFORM AT DB 
public function postObForm(Request $req)
{
        // $previdno = $req->previdno;
    $idno  = $req->idno;
    $idtype = $req->idtype;
    $oldidno = '';
    $passportno='';
    $name = $req->name;
    $dob = $req->dob;
    $dob = substr($req->dob,6,4).substr($req->dob, 3,2).substr($req->dob,0,2);
    $race = $req->race;
    $gender = $req->gender;
    $occupation = $req->occupation;
    $dodeath='';
    $add1 = $req->add1;
    $add2 = $req->add2;
    $add3 = $req->add3;
    $postcode = $req->postcode;
    $city = $req->city;
    $pobox = '';
    $lockedbag = '';
    $wdt = '';
    $statecode = $req->statecode;
    $telno = $req->telno;
    $mobileno = $req->mobileno;
    $email = $req->email;
    $nationality = $req->nationality;

    $operid = session('loginname');
    $brcode = session('loginbranchcode');
    $caserefno = session('caserefno');
        // $uniquerefno = session('uniquerefno');

    $obForm = ['caserefno'=>$caserefno,'idno'=> $idno,'idtype'=> $idtype,'oldidno' =>$oldidno, 'passportno'=>$passportno,
    'name'=> $name, 'dob'=> $dob, 'race'=> $race, 'gender'=> $gender, 'occupation'=> $occupation, 'dodeath'=>$dodeath, 'add1'=>$add1,'add2'=>$add2,'add3'=>$add3,
    'postcode'=>$postcode, 'city'=>$city,'pobox'=>$pobox, 'lockedbag'=>$lockedbag, 'wdt'=>$wdt, 'statecode'=>$statecode, 'telno'=>$telno, 'mobileno'=>$mobileno, 'email'=>$email,'nationality'=>$nationality, 'operid'=>$operid, 'brcode'=>$brcode];

    $jsondata = json_encode($obForm);
        // return $jsondata;

    $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/newobprofile';
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

        //return '++'.$result.'++';
            //close connection
    curl_close($ch);
        //return redirect()->back();
        // return $this->index();

        //$this->postOBContact($req);
    $jsondecode = json_decode($result);
        //return $result;

    $errorcode = $jsondecode->{'errorcode'};
    if ($errorcode == 0)
    {
        $uniquerefno = $jsondecode->{'uniquerefno'};
        session(['uniquerefno'=>$uniquerefno]);
        return redirect()->back()->with('messageob','Save successful');
    }
    else
    {
        return redirect()->back()->with('messageob','Save unsuccessful');
    }

}

    //POST EMPLOYER AT DB - HANNIS
public function postEmployer(Request $req)
{
    $caserefno= session('caserefno');
    $operid= session('loginname');
    $brcode= session('loginbranchcode');
    $empcode= $req->empcode;
    $empname = $req->empname;
    $emptype= $req->emptype;
    $add1 = $req->add1;
    $add2 = $req->add2;
    $add3 = $req->add3;
    $postcode = $req->postcode;
    $city = $req->city;
    $statecode = $req->state;
    $pobox = $req->pobox;
    $lockedbag = $req->lockedbag;
    $wdt = $req->wdt;
    $telno = $req->telno;
    $faxno = $req->faxno;
    $email = $req->email;

    $employer = ['caserefno'=>$caserefno,'operid'=>$operid,'brcode'=>$brcode, 'empcode'=>$empcode,
    'empname'=>$empname, 'emptype'=>$emptype,'add1'=>$add1,'add2'=>$add2,'add3'=>$add3, 'postcode'=>$postcode,
    'city'=>$city, 'statecode'=>$statecode,'pobox'=>$pobox, 'lockedbag'=>$lockedbag, 'wdt'=>$wdt, 'telno'=>$telno, 'faxno'=>$faxno, 'email'=>$email];

    $jsondata = json_encode($employer);

        // return $jsondata;


    $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/newemployer';

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
        //return $result;

    $jsondecode = json_decode($result);

    if ($jsondecode && $jsondecode != '')
    {
        $errorcode = $jsondecode->{'errorcode'};
            // return $errorcode;
        if ($errorcode == 0)
        {
                // session(['empcode',$empcode]);
            return redirect()->back()->with('messageemp','Save successful');
        }
        else
        {
            return redirect()->back()->with('messageemp','Save unsuccessful');
        }
    }

}

//POST WAGES AT DB - HANNIS
public function postWages(Request $req)
{

    $data = array();
    $cntdata = 0;
    foreach ($req->empcode as $index => $empcodefld)
    {
        $empcode = $empcodefld;
        $empname = $req->empname[$index];
        $startdate = $req->startdate[$index];
        $startdate = str_replace('-', '', $startdate);
        $enddate = $req->enddate[$index];
        $enddate = str_replace('-', '', $enddate);
        $wagesinfo = array();
        $cnt = 0;

        foreach($req->month[$index] as $idx => $monthfld)
        {
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

    // dd($data);

    $url = env('WS_IP', 'localhost').'/api/wsmotion/'; 

    $options = [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ],

        'json' => [
            "operid"=> session('loginname'),
            "caserefno"=> session('caserefno'),
            "data" => $data
        ],

    ];
    // dd($options);
    $client = new Client();

    try {

        $response = $client->post($url.'newwages',$options);
            // dd($response);
        $body = $response->getBody()->getContents();
            // dd($body);
        $jsondecode = json_decode($body);

        $errorcode = $jsondecode->{'errorcode'};
        // return $errorcode;
        if ($errorcode == 0)
        {
            return redirect()->back()->withInput(['tab'=>'wages'])->with('messagewage','Save successful');
        }
        else
        {
            return redirect()->back()->withInput(['tab'=>'wages'])->with('messagewage','Save unsuccessful');
        }


    }

    catch(\Exception $e)
    {
        return $e->getMessage();

    }

    // $wages = ['caserefno'=>$caserefno, 'operid'=>$operid, 'data'=>$data];
    // $jsondata = json_encode($wages);
    //     // return $jsondata;

    // $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/newwages';

    // $ch = curl_init();

    // curl_setopt($ch,CURLOPT_URL, $url);
    // curl_setopt($ch, CURLOPT_PROXY, '');

    // curl_setopt($ch,CURLOPT_POSTFIELDS, $jsondata);
    // curl_setopt($ch, CURLOPT_HTTPGET, FALSE);

    // curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // $result = curl_exec($ch);
    // $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);

    // curl_close($ch);

    // $jsondecode = json_decode($result);
    //     // return $jsondata.'++'.$result;

    // $errorcode = $jsondecode->{'errorcode'};
    //     // return $errorcode;
    // if ($errorcode == 0)
    // {
    //     return redirect()->back()->withInput(['tab'=>'wages'])->with('messagewage','Save successful');
    // }
    // else
    // {
    //     return redirect()->back()->withInput(['tab'=>'wages'])->with('messagewage','Save unsuccessful');
    // }

}

public function Submit(Request $req)
{


}


    //post bank info
public function postBankInfo(Request $req)
{

    $url = env('WS_IP', 'localhost').'/api/wsmotion/';

    $accexist = '';
    $reasonnoacc= $req->reasonnoacc;
    $baists= '';
    $substsdesc= '';
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

    if ($paymode == '01')
    {
        $options = [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ],

            'json' => [
                "accexist" => '',
                "reasonnoacc"=> $reasonnoacc,
                "baists"=> '',
                "substsdesc"=> '',
                "paymode"=> $paymode,
                "bankloc"=> null,
                "bankcode"=> null,
                "ovbankname"=>null,
                "swiftcode" => null,
                "bsbcode" => null,
                "bankbr"=> null,
                "bankaddr" => null,
                "accno"=> null,
                "acctype"=> null,
                "caserefno"=> session('caserefno'),
                "operid"=> session('loginname'),
                "brcode"=> session('loginbranchcode')
            ],

        ];
    }

    else if ($paymode == '02')
    {
        if ($bankloc == 'L')
        {
            $options = [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json'
                ],

                'json' => [
                    "accexist" => '',
                    "reasonnoacc"=> null,
                    "baists"=> '',
                    "substsdesc"=> '',
                    "paymode"=> $paymode,
                    "bankloc"=> $bankloc,
                    "bankcode"=> $bankcode,
                    "ovbankname"=> null,
                    "swiftcode" => null,
                    "bsbcode" => null,
                    "bankbr"=> null,
                    "accno"=> $localaccno,
                    "bankaddr" => $localbankaddr,
                    "acctype"=> $localacctype,

                    "caserefno"=> session('caserefno'),
                    "operid"=> session('loginname'),
                    "brcode"=> session('loginbranchcode')
                ],

            ];
        }
        else if ($bankloc == 'O')
        {
           $options = [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ],

            'json' => [
                "accexist" => '',
                    // dd($accexist);
                "reasonnoacc"=> null,
                    // dd($reasonnoacc);
                "baists"=> '',
                "substsdesc"=> '',
                "paymode"=> $paymode,
                "bankloc"=> $bankloc,
                "bankcode"=> null,
                "ovbankname"=> $ovbankname,
                "swiftcode" => $swiftcode,
                "bsbcode" => $bsbcode,
                "bankbr"=> null,
                "accno" => $ovaccno,
                "bankaddr" => $ovbankaddr,
                "acctype" => $ovacctype,

                "caserefno"=> session('caserefno'),
                "operid"=> session('loginname'),
                "brcode"=> session('loginbranchcode')
            ],

        ];
    }
}

else 
{
    $options = [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ],

        'json' => [
            "accexist" => '',
                // dd($accexist);
            "reasonnoacc"=> null,
                // dd($reasonnoacc);
            "baists"=> '',
            "substsdesc"=> '',
            "paymode"=> null,
            "bankloc"=> null,
            "bankcode"=> null,
            "ovbankname"=> null,
            "swiftcode" => null,
            "bsbcode" => null,
            "accno" => null,
            "bankaddr" => null,
            "bankbr" => null,
            "acctype" => null,
            "caserefno"=> session('caserefno'),
            "operid"=> session('loginname'),
            "brcode"=> session('loginbranchcode')
        ],

    ];
}

    // dd($options);
$client = new Client();

try {

    $response = $client->post($url.'bankinfo',$options);
        // dd($response);
    $body = $response->getBody()->getContents();
        // dd($body);
    $jsondecode = json_decode($body);

    if ($jsondecode && $jsondecode != '')
    {
        $errorcode = $jsondecode->{'errorcode'};
            // return $errorcode;
        if ($errorcode == 0)
        {
            return redirect()->back()->withInput(['tab'=>'bankinfo'])->with('messagebank','Save successful');
        }
        else
        {
            return redirect()->back()->withInput(['tab'=>'bankinfo'])->with('messagebank','Save unsuccessful');
        }
    }


}

catch(\Exception $e)
{
    return $e->getMessage();

}

}

    //post od employer history
public function postOdEmphistory(Request $req)
{

    $url = env('WS_IP', 'localhost').'/api/wsmotion/';


    $emprecord = Input::get('empname');
    $data = array();
    $i = 0;
    foreach ($emprecord as $idx =>$name)
    {
            //return $name.'++'.$idx;
        $empname= $req->empname[$idx];
        $empadd= $req->empadd[$idx];
        $duration= $req->duration[$idx];
        $designation= $req->designation[$idx];

        if ($empname == '' && $empadd == '' && $duration == '' && $designation == '')
        {
            continue;
        }

        $data[$i] = ['empname'=>$empname, 'empadd'=>$empadd, 'duration'=>$duration, 'designation'=>$designation];

        $i++;
    }

        // dd($data);

    $options = [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ],

        'json' => [
            "data" => $data,
            "operid"=> session('loginname'),
            "brcode"=> session('brcode'),
            "caserefno"=> session('caserefno')
        ],

    ];
        // dd($options);
    $client = new Client();

    try {

        $response = $client->post($url.'odemphistory',$options);
            // dd($response);
        $body = $response->getBody()->getContents();
            // dd($body);
        $jsondecode = json_decode($body);

        $errorcode = $jsondecode->{'errorcode'};
            // return $errorcode;
        if ($errorcode == 0)
        {
            return redirect()->back()->withInput(['tab'=>'odinfo'])->with('msgodemphist','Save Successful');
        }
        else
        {
            return redirect()->back()->withInput(['tab'=>'odempinfo'])->with('msgodemphist','Save Unsuccessful');
        }


    }

    catch(\Exception $e)
    {
        return $e->getMessage();

    }
}


    //post od info
public function postOdinfo(Request $req)
{

    $url = env('WS_IP', 'localhost').'/api/wsmotion/';

    $options = [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ],

        'json' => [
            "oddesc" => $req->oddesc,
            "emprelated"=> $req->emprelated,
            "dutydesc"=> $req->dutydesc,
            "symptom"=> $req->symptom,
            "clinicinfo"=>$req->clinicinfo,
            "operid"=> session('loginname'),
            "brcode"=> session('loginbranchcode'),
            "caserefno"=> session('caserefno')
        ],

    ];
        // dd($options);
    $client = new Client();

    try {

        $response = $client->post($url.'updodinfo',$options);
            // dd($response);
        $body = $response->getBody()->getContents();
            // dd($body);
        $jsondecode = json_decode($body);

        $errorcode = $jsondecode->{'errorcode'};
            // return $errorcode;
        if ($errorcode == 0)
        {
            return redirect()->back()->withInput(['tab'=>'odinfo'])->with('messageod','Save Successful');
        }
        else
        {
            return redirect()->back()->withInput(['tab'=>'odempinfo'])->with('messageod','Save Unsuccessful');
        }


    }

    catch(\Exception $e)
    {
        return $e->getMessage();

    }


}

    //for confirmation 
public function postConfirmation(Request $req)
{
    // if ($req->action == 'Save')
    // // {   
    //     $caserefno = session('caserefno');
    //     $operid = session('loginname');
    //     $brcode = session('loginbranchcode');
    //     $uniquerefno = session('uniquerefno');

    $preferedbranch = $req->brname;
    $stampdate = $req->stampdate;
        // $stampdate = substr($stampdate,6,4).substr($stampdate,3,2).substr($stampdate,0,2);
    $stampdate = str_replace('-', '', $stampdate);
    $jrecv = $req->jrecv;
    $jrecvdate = $req->jrecvdate;
    $jrecvdate = str_replace('-', '', $jrecvdate);
        // $jrecvdate = substr($jrecvdate,6,4).substr($jrecvdate,3,2).substr($jrecvdate,0,2);
    $remarks = $req->remarks;

    $url = env('WS_IP', 'localhost').'/api/wsmotion/';

    $options = [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ],

        'json' => [
            "caserefno"=> session('caserefno'),
            "operid"=> session('loginname'),
            "brcode"=> session ('loginbranchcode'),
            "uniquerefno"=> session ('uniquerefno'),
            "preferedbranch"=> $preferedbranch,
            "stampdate"=> $stampdate,
            "jrecv"=> $jrecv,
            "jrecvdate"=> $jrecvdate,
            "remarks"=> $remarks
        ],

    ];


    // dd($options);
    $client = new Client();

    try {

        $response = $client->post($url.'updconfirmation',$options);
        // dd($response);
        $body = $response->getBody()->getContents();
        // dd($body);
        $jsondecodeConfirmation = json_decode($body);

        $errorcode = $jsondecodeConfirmation->{'errorcode'};
        // return $errorcode;
        if ($errorcode == 0)
        {
            return redirect()->back()->withInput(['tab'=>'confirmation'])->with('messageconf','Save Successful');
        }
        else
        {
            return redirect()->back()->withInput(['tab'=>'confirmation'])->with('messageconf','Save Unsuccessful');
        }


    }

    catch(\Exception $e)
    {
        return $e->getMessage();

    }

}
    
    //kai comment off 27092019

    // }
    // else if($req->action=='Preview')
    // {
    //         // return redirect('/success');
    // }
    // else if ($req->action == 'Submit')
    // {
    // $operid = session('loginname');
    // $brcode = session('loginbranchcode');
    // $caserefno= session('caserefno');
    //         $wbid = session('wbid');//chg07072019

    //         $prevschemerefno='';


    //         $datatosend = ['operid'=>$operid, 'brcode'=>$brcode, 'caserefno'=>$caserefno, 'prevschemerefno'=>$prevschemerefno,
    //             'wbid'=>$wbid];//chg07072019


    //             $jsondata = json_encode($datatosend);

    //         //return $jsondata;


    //             $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/submit';


    //             $ch = curl_init();

    //             curl_setopt($ch,CURLOPT_URL, $url);
    //             curl_setopt($ch, CURLOPT_PROXY, '');

    //             curl_setopt($ch,CURLOPT_POSTFIELDS, $jsondata);
    //             curl_setopt($ch, CURLOPT_HTTPGET, FALSE);

    //             curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    //             curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //             $result = curl_exec($ch);
    //             $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    //             $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);

    //             curl_close($ch);

    //             $jsondecode = json_decode($result);
    //         //return $result;
    //             $errorcode = $jsondecode->{'errorcode'};

    //             if ($errorcode == 0)
    //             {
    //                 $schemerefno = $jsondecode->{'schemerefno'};
    //                 $casestatus = $jsondecode->{'casests'};
    //                 $source = $jsondecode->{'source'};
    //             //session(['messageconf'=>'Scheme Reference No: '.$schemerefno]);
    //                 session(['schemerefno'=>$schemerefno]);
    //                 session(['casestatus'=>$casestatus]);
    //                 session(['source'=>$source]);
    //             return redirect('/success');//++'.$x.'++'.$accdrefno.'++'.$jsondata.'++');
    //         }
    //         else
    //         {
    //             $errordesc = $jsondecode->{'errordesc'};
    //             return redirect()->back()->withInput(['tab'=>'confirmation'])->with('messageconf','Submission unsuccessful. '.$errordesc);
    //         }
    //     // }


        public function indexIO()
        {
            $operid = session('loginname');

            if ($operid == '')
            {
                return redirect('/login');
            }

            $idno = session('idno');
            if ($idno == '')
            {
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
            $occucode=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['occupation']);
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
        $sql = 'select d.docdescen,d.doctype,d.docdescbm, d.doccat, n.priority from doctype d, noticedoc n '
        . 'where n.casetype=? and n.doctype = d.doctype order by n.priority';
        $doclist = DB::select($sql,[session('noticetype')]);
        
        //chg28062019 irina - get all doc
        $alldoclist = DB::select('select docdescen,doctype,docdescbm, doccat from doctype order by doccat desc, doctype');


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
        
        $url = $this->getWages($contrinfo,$wagesinfo);
        //return $url;

        $docinfo = array();
        $this->getDoc($docinfo);

        $jsondecodepermanent = null;
        $bankinfo = null;
        $test = $this->getBankInfo($jsondecodebank);
        
        //return $test;
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
        $obprofile = null;
        $obcontact = null;
        $date = null;
        $empcert = null;

        $permanentrep = null;

        //return $jsondecode;
        
        if ($jsondecode && $jsondecode!='')//irina
        {
            // return json_encode($jsondecode);
            // return $jsondecode;
            $record = $jsondecode->{'record'};
            if ($record == 0)
            {
                $obprofile = null;
            }
            else
            {
                $obprofile = $jsondecode->{'data'};
                $uniquerefno = $obprofile->{'uniquerefno'};
                session(['uniquerefno'=>$uniquerefno]);
            }


            
            //$test = json_encode($obprofile);
            //return $test;
        }

        //notice od
        $jsondecodeOdinfo="";
        $this->getOdInfo($jsondecodeOdinfo);

        if ($jsondecodeOdinfo && $jsondecodeOdinfo!='')//hannis
        {
            $errorcode = $jsondecodeOdinfo->{'errorcode'};
            if ($errorcode == 0)
            {
                $oddata = $jsondecodeOdinfo->{'data'};
            }
            else
            {
                $oddata = null;
            }
        }


        $jsondecodeOdEmphistory="";
        $this->getOdEmphistory($jsondecodeOdEmphistory);

        if ($jsondecodeOdEmphistory && $jsondecodeOdEmphistory!='')//hannis
        {
            $record = $jsondecodeOdEmphistory->{'record'};
            if ($record > 0)
            {
                $odempinfo = $jsondecodeOdEmphistory->{'data'};
            }
            else
            {
                $odempinfo = null;
            }
            //$date = $jsondecodeEmployer->{'data'};
        }

        // return $odempinfo;

        


        /*if ($jsondecod1 && $jsondecod1!='')//irina
        {
            $obcontact = $jsondecod1->{'data'};
        }*/

        //HANNIS
        //return json_encode($jsondecodeEmployer);
        if ($jsondecodeEmployer && $jsondecodeEmployer!='')//irina
        {
            $record = $jsondecodeEmployer->{'record'};
            if ($record > 0)
            {
                $emprecord = $jsondecodeEmployer->{'emprecord'};
                // $emprecord = $jsondecodeEmployer->{'emprecord'};
                // if ($record == 1)
                // {
                //     // $empcode = $emprecord[0]->{'empcode'};
                //     // session(['empcode'=>$empcode]);
                // }
            }
            else
            {
                $emprecord = null;
            }
            //$date = $jsondecodeEmployer->{'data'};
        }

        //return $jsondecodebank;
        if ($jsondecodebank && $jsondecodebank!='')//irina
        {
            $errorcode = $jsondecodebank->{'errorcode'};
            if ($errorcode == 0)
            {
                $bankinfo = $jsondecodebank->{'data'};
                //return json_encode($bankinfo);
            }
            else
            {
                $bankinfo = null;
            }
            

        }
        

        $jsondecodeConfirmation="";
        $confirmation = null;
        $this->getConfirmation($jsondecodeConfirmation);
        //return json_encode($jsondecodeConfirmation);

        if ($jsondecodeConfirmation && $jsondecodeConfirmation!='')//irina
        {
            $record = $jsondecodeConfirmation->{'record'};
            if ($record <= 0)
            {
                 //$jsondecodeConfirmation = null;
               $confirmation = null;
           }
           else
           {
            $confirmation = $jsondecodeConfirmation->{'data'};
                //return $confirmation;
        }

    }

        //return $confirmation;

    $jsondecodemc = '';
    $this->GetMCDetails($jsondecodemc);
        //return json_encode($jsondecodemc);
    if ($jsondecodemc && $jsondecodemc != '')
    {
        $errorcode = $jsondecodemc->{'errorcode'};

        if ($errorcode != 0)
        {
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

        //return json_encode($jsondecodemc);
        /*
        $mcinfo = $jsondecodemc->{'mcinfo'};
        foreach($mcinfo as $mc)
        {
            //return json_encode($mc);
            if (!empty($mc->workinfo) && $mc->workinfo != '')
            {
                foreach($mc->workinfo as $key2 => $work)
                {
                    return $key2;
                }
            }
            else
            {
                return 'empty';
            }
                                      
        }*/
        
        //return $bankinfo;
        
        return view('scheme.noticeOd.IO.index',['obprofile'=>$obprofile,'state'=>$state, 
            'idtype'=>$idtype, 'occucode'=> $occucode, 'race'=>$race, 'national'=>$national, 'mcsts'=>$mcsts, 'transport'=>$transport,
            'accdplace'=>$accdplace, 'accdwhen'=>$accdwhen , 'obformassist' => $jsondecodeAssist, 
            'employer' => $jsondecodeAssistEmployer, 'emprecord' => $emprecord,'wagesinfo' => $wagesinfo,
            'contribution'=>$contrinfo, 'data'=>$data,'bankinfo'=>$bankinfo, 'optionbank'=>$optionbank, 
            'optionreason'=>$optionreason,'optionbai'=>$optionbai, 'optionpay'=>$optionpay, 'bankcode'=>$bankcode, 
            'accountype'=>$accountype, 'overseasbank'=>$overseasbank, 'overseasbanktype'=>$overseasbanktype, 'month'=>$month,
            'causative'=>$causative,'accdcode'=>$accdcode,'industcode'=>$industcode, 'profcode'=>$profcode, 'worksts'=>$worksts, 
            'caserefno'=>$caserefno, 'doclist'=>$doclist, 'emptype'=>$emptype,
            'docinfo'=>$docinfo, 'odempinfo' => $odempinfo, 'oddata'=>$oddata, 'confirmation'=>$confirmation,
            'hussts'=>$hussts,'mcdata'=>$jsondecodemc,'doclist_select'=>$alldoclist]);

    }

    public function indexSCO()
    {
        $operid = session('loginname');
        
        if ($operid == '')
        {
            return redirect('/login');
        }
        
        $idno = session('idno');
        if ($idno == '')
        {
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
        $occucode=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['occupation']);
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
        $sql = 'select d.docdescen,d.doctype,d.docdescbm, d.doccat, n.priority from doctype d, noticedoc n '
        . 'where n.casetype=? and n.doctype = d.doctype order by n.priority';
        $doclist = DB::select($sql,[session('noticetype')]);
        
        //chg28062019 irina - get all doc
        $alldoclist = DB::select('select docdescen,doctype,docdescbm, doccat from doctype order by doccat desc, doctype');


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
        
        $url = $this->getWages($contrinfo,$wagesinfo);
        //return $url;

        $docinfo = array();
        $this->getDoc($docinfo);

        $jsondecodepermanent = null;
        $bankinfo = null;
        $test = $this->getBankInfo($jsondecodebank);
        
        //return $test;
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
        $obprofile = null;
        $obcontact = null;
        $date = null;
        $empcert = null;

        $permanentrep = null;

        //return $jsondecode;
        
        if ($jsondecode && $jsondecode!='')//irina
        {
            // return json_encode($jsondecode);
            // return $jsondecode;
            $record = $jsondecode->{'record'};
            if ($record == 0)
            {
                $obprofile = null;
            }
            else
            {
                $obprofile = $jsondecode->{'data'};
                $uniquerefno = $obprofile->{'uniquerefno'};
                session(['uniquerefno'=>$uniquerefno]);
            }


            
            //$test = json_encode($obprofile);
            //return $test;
        }

        //notice od
        $jsondecodeOdinfo="";
        $this->getOdInfo($jsondecodeOdinfo);

        if ($jsondecodeOdinfo && $jsondecodeOdinfo!='')//hannis
        {
            $errorcode = $jsondecodeOdinfo->{'errorcode'};
            if ($errorcode == 0)
            {
                $oddata = $jsondecodeOdinfo->{'data'};
            }
            else
            {
                $oddata = null;
            }
        }


        $jsondecodeOdEmphistory="";
        $this->getOdEmphistory($jsondecodeOdEmphistory);

        if ($jsondecodeOdEmphistory && $jsondecodeOdEmphistory!='')//hannis
        {
            $record = $jsondecodeOdEmphistory->{'record'};
            if ($record > 0)
            {
                $odempinfo = $jsondecodeOdEmphistory->{'data'};
            }
            else
            {
                $odempinfo = null;
            }
            //$date = $jsondecodeEmployer->{'data'};
        }

        // return $odempinfo;

        


        /*if ($jsondecod1 && $jsondecod1!='')//irina
        {
            $obcontact = $jsondecod1->{'data'};
        }*/

        //HANNIS
        //return json_encode($jsondecodeEmployer);
        if ($jsondecodeEmployer && $jsondecodeEmployer!='')//irina
        {
            $record = $jsondecodeEmployer->{'record'};
            if ($record > 0)
            {
                $emprecord = $jsondecodeEmployer->{'emprecord'};
                // $emprecord = $jsondecodeEmployer->{'emprecord'};
                // if ($record == 1)
                // {
                //     // $empcode = $emprecord[0]->{'empcode'};
                //     // session(['empcode'=>$empcode]);
                // }
            }
            else
            {
                $emprecord = null;
            }
            //$date = $jsondecodeEmployer->{'data'};
        }

        //return $jsondecodebank;
        if ($jsondecodebank && $jsondecodebank!='')//irina
        {
            $errorcode = $jsondecodebank->{'errorcode'};
            if ($errorcode == 0)
            {
                $bankinfo = $jsondecodebank->{'data'};
                //return json_encode($bankinfo);
            }
            else
            {
                $bankinfo = null;
            }
            

        }
        

        $jsondecodeConfirmation="";
        $confirmation = null;
        $this->getConfirmation($jsondecodeConfirmation);
        //return json_encode($jsondecodeConfirmation);

        if ($jsondecodeConfirmation && $jsondecodeConfirmation!='')//irina
        {
            $record = $jsondecodeConfirmation->{'record'};
            if ($record <= 0)
            {
                 //$jsondecodeConfirmation = null;
               $confirmation = null;
           }
           else
           {
            $confirmation = $jsondecodeConfirmation->{'data'};
                //return $confirmation;
        }

    }

        //return $confirmation;

    $jsondecodemc = '';
    $this->GetMCDetails($jsondecodemc);
        //return json_encode($jsondecodemc);
    if ($jsondecodemc && $jsondecodemc != '')
    {
        $errorcode = $jsondecodemc->{'errorcode'};

        if ($errorcode != 0)
        {
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

        //return json_encode($jsondecodemc);
        /*
        $mcinfo = $jsondecodemc->{'mcinfo'};
        foreach($mcinfo as $mc)
        {
            //return json_encode($mc);
            if (!empty($mc->workinfo) && $mc->workinfo != '')
            {
                foreach($mc->workinfo as $key2 => $work)
                {
                    return $key2;
                }
            }
            else
            {
                return 'empty';
            }
                                      
        }*/
        
        //return $bankinfo;
        
        return view('scheme.noticeOd.SCO.index',['obprofile'=>$obprofile,'state'=>$state, 
            'idtype'=>$idtype, 'occucode'=> $occucode, 'race'=>$race, 'national'=>$national, 'mcsts'=>$mcsts, 'transport'=>$transport,
            'accdplace'=>$accdplace, 'accdwhen'=>$accdwhen , 'obformassist' => $jsondecodeAssist, 
            'employer' => $jsondecodeAssistEmployer, 'emprecord' => $emprecord,'wagesinfo' => $wagesinfo,
            'contribution'=>$contrinfo, 'data'=>$data,'bankinfo'=>$bankinfo, 'optionbank'=>$optionbank, 
            'optionreason'=>$optionreason,'optionbai'=>$optionbai, 'optionpay'=>$optionpay, 'bankcode'=>$bankcode, 
            'accountype'=>$accountype, 'overseasbank'=>$overseasbank, 'overseasbanktype'=>$overseasbanktype, 'month'=>$month,
            'causative'=>$causative,'accdcode'=>$accdcode,'industcode'=>$industcode, 'profcode'=>$profcode, 'worksts'=>$worksts, 
            'caserefno'=>$caserefno, 'doclist'=>$doclist, 'emptype'=>$emptype,
            'docinfo'=>$docinfo, 'odempinfo' => $odempinfo, 'oddata'=>$oddata, 'confirmation'=>$confirmation,
            'hussts'=>$hussts,'mcdata'=>$jsondecodemc,'doclist_select'=>$alldoclist]);
    }


    public function indexSAO()
    {
        $operid = session('loginname');
        
        if ($operid == '')
        {
            return redirect('/login');
        }
        
        $idno = session('idno');
        if ($idno == '')
        {
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
        $occucode=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['occupation']);
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
        $sql = 'select d.docdescen,d.doctype,d.docdescbm, d.doccat, n.priority from doctype d, noticedoc n '
        . 'where n.casetype=? and n.doctype = d.doctype order by n.priority';
        $doclist = DB::select($sql,[session('noticetype')]);
        
        //chg28062019 irina - get all doc
        $alldoclist = DB::select('select docdescen,doctype,docdescbm, doccat from doctype order by doccat desc, doctype');


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
        
        $url = $this->getWages($contrinfo,$wagesinfo);
        //return $url;

        $docinfo = array();
        $this->getDoc($docinfo);

        $jsondecodepermanent = null;
        $bankinfo = null;
        $test = $this->getBankInfo($jsondecodebank);
        
        //return $test;
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
        $obprofile = null;
        $obcontact = null;
        $date = null;
        $empcert = null;

        $permanentrep = null;

        //return $jsondecode;
        
        if ($jsondecode && $jsondecode!='')//irina
        {
            // return json_encode($jsondecode);
            // return $jsondecode;
            $record = $jsondecode->{'record'};
            if ($record == 0)
            {
                $obprofile = null;
            }
            else
            {
                $obprofile = $jsondecode->{'data'};
                $uniquerefno = $obprofile->{'uniquerefno'};
                session(['uniquerefno'=>$uniquerefno]);
            }


            
            //$test = json_encode($obprofile);
            //return $test;
        }

        //notice od
        $jsondecodeOdinfo="";
        $this->getOdInfo($jsondecodeOdinfo);

        if ($jsondecodeOdinfo && $jsondecodeOdinfo!='')//hannis
        {
            $errorcode = $jsondecodeOdinfo->{'errorcode'};
            if ($errorcode == 0)
            {
                $oddata = $jsondecodeOdinfo->{'data'};
            }
            else
            {
                $oddata = null;
            }
        }


        $jsondecodeOdEmphistory="";
        $this->getOdEmphistory($jsondecodeOdEmphistory);

        if ($jsondecodeOdEmphistory && $jsondecodeOdEmphistory!='')//hannis
        {
            $record = $jsondecodeOdEmphistory->{'record'};
            if ($record > 0)
            {
                $odempinfo = $jsondecodeOdEmphistory->{'data'};
            }
            else
            {
                $odempinfo = null;
            }
            //$date = $jsondecodeEmployer->{'data'};
        }

        // return $odempinfo;

        


        /*if ($jsondecod1 && $jsondecod1!='')//irina
        {
            $obcontact = $jsondecod1->{'data'};
        }*/

        //HANNIS
        //return json_encode($jsondecodeEmployer);
        if ($jsondecodeEmployer && $jsondecodeEmployer!='')//irina
        {
            $record = $jsondecodeEmployer->{'record'};
            if ($record > 0)
            {
                $emprecord = $jsondecodeEmployer->{'emprecord'};
                // $emprecord = $jsondecodeEmployer->{'emprecord'};
                // if ($record == 1)
                // {
                //     // $empcode = $emprecord[0]->{'empcode'};
                //     // session(['empcode'=>$empcode]);
                // }
            }
            else
            {
                $emprecord = null;
            }
            //$date = $jsondecodeEmployer->{'data'};
        }

        //return $jsondecodebank;
        if ($jsondecodebank && $jsondecodebank!='')//irina
        {
            $errorcode = $jsondecodebank->{'errorcode'};
            if ($errorcode == 0)
            {
                $bankinfo = $jsondecodebank->{'data'};
                //return json_encode($bankinfo);
            }
            else
            {
                $bankinfo = null;
            }
            

        }
        

        $jsondecodeConfirmation="";
        $confirmation = null;
        $this->getConfirmation($jsondecodeConfirmation);
        //return json_encode($jsondecodeConfirmation);

        if ($jsondecodeConfirmation && $jsondecodeConfirmation!='')//irina
        {
            $record = $jsondecodeConfirmation->{'record'};
            if ($record <= 0)
            {
                 //$jsondecodeConfirmation = null;
               $confirmation = null;
           }
           else
           {
            $confirmation = $jsondecodeConfirmation->{'data'};
                //return $confirmation;
        }

    }

        //return $confirmation;

    $jsondecodemc = '';
    $this->GetMCDetails($jsondecodemc);
        //return json_encode($jsondecodemc);
    if ($jsondecodemc && $jsondecodemc != '')
    {
        $errorcode = $jsondecodemc->{'errorcode'};

        if ($errorcode != 0)
        {
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

        //return json_encode($jsondecodemc);
        /*
        $mcinfo = $jsondecodemc->{'mcinfo'};
        foreach($mcinfo as $mc)
        {
            //return json_encode($mc);
            if (!empty($mc->workinfo) && $mc->workinfo != '')
            {
                foreach($mc->workinfo as $key2 => $work)
                {
                    return $key2;
                }
            }
            else
            {
                return 'empty';
            }
                                      
        }*/
        
        //return $bankinfo;
        
        return view('scheme.noticeOd.SAO.index',['obprofile'=>$obprofile,'state'=>$state, 
            'idtype'=>$idtype, 'occucode'=> $occucode, 'race'=>$race, 'national'=>$national, 'mcsts'=>$mcsts, 'transport'=>$transport,
            'accdplace'=>$accdplace, 'accdwhen'=>$accdwhen , 'obformassist' => $jsondecodeAssist, 
            'employer' => $jsondecodeAssistEmployer, 'emprecord' => $emprecord,'wagesinfo' => $wagesinfo,
            'contribution'=>$contrinfo, 'data'=>$data,'bankinfo'=>$bankinfo, 'optionbank'=>$optionbank, 
            'optionreason'=>$optionreason,'optionbai'=>$optionbai, 'optionpay'=>$optionpay, 'bankcode'=>$bankcode, 
            'accountype'=>$accountype, 'overseasbank'=>$overseasbank, 'overseasbanktype'=>$overseasbanktype, 'month'=>$month,
            'causative'=>$causative,'accdcode'=>$accdcode,'industcode'=>$industcode, 'profcode'=>$profcode, 'worksts'=>$worksts, 
            'caserefno'=>$caserefno, 'doclist'=>$doclist, 'emptype'=>$emptype,
            'docinfo'=>$docinfo, 'odempinfo' => $odempinfo, 'oddata'=>$oddata, 'confirmation'=>$confirmation,
            'hussts'=>$hussts,'mcdata'=>$jsondecodemc,'doclist_select'=>$alldoclist]);
    }
}




