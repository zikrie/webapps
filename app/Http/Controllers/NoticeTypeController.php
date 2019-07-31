<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;

class NoticeTypeController extends Controller
{
    //
    
    public function index()
    {
        $operid = session('loginname');
        if ($operid == '')
        {
            return redirect('/login');
        }
        $idtype=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['idtype']);
        $noticetype =DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['casetype']);
        return view('noticeType', ['idtype'=>$idtype, 'noticetype'=>$noticetype]);
    }

    public function noticeType(Request $request)
    {

    	$idtype = $request->idtype;
        $idno = $request->idno;
        $empcode = $request->empcode;
        $noticetype = $request->notice_type;

        session(['idtype' =>$idtype, 'idno' => $idno, 'empcode' => $empcode]);
        // session(['accdrefno'=>'', 'caserefno'=>'']); 
        session(['caserefno'=>'']); 
        session(['uniquerefno'=>'']); 
        session(['message'=>'']);
        session(['noticetype'=>$noticetype]);
        
        session(['caserefno'=>'', 'uniquerefno'=>'','accddate'=>'', 'accdtime'=>'']);
        session(['accdmonth'=>'', 'accdyear'=>'','mcmonth'=>'', 'mcyear'=>'']);
        session(['messagent'=>'','messageob'=>'','messagewage'=>'','messageconf'=>'','schemerefno'=>'']);
        session(['casestatus'=>'','source'=>'','messagemc'=>'','messageacc'=>'','messagebank'=>'']);
        session(['messagecert'=>'','messageemp'=>'','messageod'=>'']);

        if ($noticetype == "01") //accident
        {
            
            if ($empcode == '')
            {
                return redirect()->back()->withInput(Input::all())->with('messagent','Please fill in employer code');
            }
            
            if ($idno == '')
            {
                return redirect()->back()->withInput(Input::all())->with('messagent','Please fill in Identification No.');
            }
            $jsondecodeAssistEmployer="";
            $this->getAssist($jsondecodeAssistEmployer);
            
            if ($jsondecodeAssistEmployer)
            {
                return redirect('/accdatetime');
            }
            else
            {
                return redirect()->back()->withInput(Input::all())->with('messagent','Employer record not found');
            }
            
        }

        else if ($noticetype == "02") //od
        {
            if ($empcode == '')
            {
                return redirect()->back()->withInput(Input::all())->with('messagent','Please fill in employer code');
            }
            
            $jsonOBAssist= '';
            $retcode = $this->getOBAssist($idno, $idtype, $jsonOBAssist);
            
            if ($retcode < 0)
            {
                return redirect()->back()->withInput(Input::all())->with('messagent','Insured Person\'s profile not found');
            }
            
            $jsondecodeAssistEmployer="";

            $this->getAssist($jsondecodeAssistEmployer);
            
            if (!$jsondecodeAssistEmployer)
            {
                // return redirect('/obform_od');
                return redirect()->back()->withInput(Input::all())->with('messagent','Employer record not found');
            }
            
            $jsondecodeOdRecord="";
            $a=$this->checkOdRecordExist($jsondecodeOdRecord);
            // return $a;

            $record = $jsondecodeOdRecord->{'record'};

        // return $record;
            if($record=='0')
            {
                session(['caserefno'=>'']);

                $noticedraft = $this->createnoticedraft();
                $errorcode = $noticedraft->{'errorcode'};

                if ($errorcode == 0)
                {
                    $caserefno = $noticedraft->{'caserefno'};
                    session(['caserefno'=>$caserefno]);
                    //chg07072019 - get wbid & put into session
                    $wbid = $noticedraft->{'wbid'};
                    session(['wbid'=>$wbid]);
                    
                    
                    return redirect('/obform_od');
                }
                else
                {
                    return redirect()->back()->with('messagent','Failed to create draft');
                }
            //return $this->index();//irina comment

            }
            else
            {
                $caserefno= $jsondecodeOdRecord->{'caserefno'};
                session(['caserefno' => $caserefno]);
                
                //chg07072019 - get wbid & put into session
                $wbid = $jsondecodeOdRecord->{'wbid'};
                session(['wbid'=>$wbid]);
                //return $this->index();//irina comment
                return redirect('/obform_od');
        
            }
            //return $this->index();//irina comment
            return redirect('/obform_od');



            
        }

        else if ($noticetype == "03") //invalidity
        {
            $jsonOBAssist= '';
            $retcode = $this->getOBAssist($idno, $idtype, $jsonOBAssist);
            
            if ($retcode < 0)
            {
                return redirect()->back()->withInput(Input::all())->with('messagent','Insured Person\'s profile not found');
            }
            
            $jsondecode="";
            $a=$this->checkIlatNotice($jsondecode);
            // return $a;

            $record = $jsondecode->{'record'};

            // return $record;
                
                if($record=='0')
                {
                    session(['caserefno'=>'', 'schemerefno'=>'']);
                    
                    $noticedraft = $this->createnoticedraft();
                    $errorcode = $noticedraft->{'errorcode'};
                    
                    if ($errorcode == 0)
                    {
                        $caserefno = $noticedraft->{'caserefno'};
                        session(['caserefno'=>$caserefno]);
                        
                        //chg07072019 - get wbid & put into session
                        $wbid = $noticedraft->{'wbid'};
                        session(['wbid'=>$wbid]);
                    
                        return redirect('/obformilat');
                    }
                    else
                    {
                        return redirect()->back()->withInput(Input::all())->with('messagent','Failed to create draft');
                    }
                    //return $this->index();//irina comment
                    
                }
                else
                {
                    $schemerefno = $jsondecode->{'schemerefno'};
                    
                    if ($schemerefno != '')
                    {
                        $message = 'Invalidity notice application for this Insured Person is already exist. Scheme Ref No: '.$schemerefno;
                        return redirect()->back()->withInput(Input::all())->with('messagent',$message);
                    }
                    $caserefno= $jsondecode->{'caserefno'};
                    session(['caserefno'=>$caserefno]);
                    
                    //chg07072019 - get wbid & put into session
                    $wbid = $jsondecode->{'wbid'};
                    session(['wbid'=>$wbid]);
                    
                    return redirect('/obformilat');
                }
                //return redirect('/obformilat');
        }
        
        
        else if ($noticetype == "04") //death
        {
            $jsondecodeDeathRecord = "";
            $a = $this->checkDeathRecord($jsondecodeDeathRecord);
            // return $a;
            $record = $jsondecodeDeathRecord->{'record'};
        
            // return $record;
            if($record=='0')
            {
                session(['caserefno'=>'', 'schemerefno'=>'']);

                $noticedraft = $this->createnoticedraft();
                $errorcode = $noticedraft->{'errorcode'};

                if ($errorcode == 0)
                {
                    $caserefno = $noticedraft->{'caserefno'};
                    session(['caserefno'=>$caserefno]);
                    $wbid = $noticedraft->{'wbid'};
                    session(['wbid'=>$wbid]);
                    return redirect('/obform_death');
                }
                else
                {
                    return redirect()->back()->with('messagent','Failed to create draft');
                }

            }
            else
            {
                $schemerefno = $jsondecodeDeathRecord->{'schemerefno'};
                    
                if ($schemerefno != '')
                {
                    $message = 'Death notice application for this Insured Person is already exist. Scheme Ref No: '.$schemerefno;
                    return redirect()->back()->withInput(Input::all())->with('messagent',$message);
                }
                $caserefno= $jsondecodeDeathRecord->{'caserefno'};
                session(['caserefno'=>$caserefno]);

                //chg07072019 - get wbid & put into session
                $wbid = $jsondecodeDeathRecord->{'wbid'};
                session(['wbid'=>$wbid]);
                
                return redirect('/obform_death');

            }

            //return redirect('/obform_death');

        }

    }
        // {
        //     $jsondecodeOdRecord ="";
        //     $this->checkOdRecordExist($jsondecodeOdRecord);

        //     if ($jsondecodeOdRecord && $jsondecodeOdRecord!='')//hannis
        //     {
        //     $record = $jsondecodeOdRecord->{'record'};
        //         if ($record > 0)
        //         {
        //         $odrecord = $jsondecodeOdRecord->{'data'};
        //             if ($record == 1)
        //             {
        //                 $odrecord = $odrecord[0]->{'data'};
        //                 session(['odrefno'=>$odrefno]);
        //                 return redirect('/obform_od');
        //             }
        //             else
        //             {
        //                 return redirect()->back()->with('messagent','OD record not exist');
        //             }
        //         }
        //         else
        //         {
        //         return redirect()->back()->with('messagent','OD record not exist');
        //         } 
        //     }
        // }
       

        //irina comment out
    	/*
        $result = DB::selectOne('select idno from obprofile where idno=?' , [$idno]);
        if(is_null($result))
        {
                return view('/accidentdatetime');
        }
         return view('/accidentdatetime', ['idno'=>$result->idno]);
         */
	
	// return redirect('/accdatetime');
    
    public function checkDeathRecord(&$jsondecodeDeathRecord)
    {
        $idno=session('idno');
        $idtype=session('idtype');
       
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/deathrecordexist?idno='.$idno.'&idtype='.$idtype;

        // return $url;
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
        $jsondecodeDeathRecord = json_decode($result);
        //close connection
        curl_close($ch);

    }
    
    public function getOBAssist($idno, $idtype, &$jsonOBAssist)
    {
        //$idno = '1';

        $url = 'http://'.env('ASSIST_IP', 'localhost').'/wsassistsimulation/obprofile/'.$idno;
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

        $jsonOBAssist = json_decode ($result);
        
        if ($jsonOBAssist != null)
        {
            return 0;
        }
        
        return -1;
    
    }
    
    public function checkIlatNotice(&$jsondecode)
    {
        $idno=session('idno');
        $idtype=session('idtype');

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/ilatrecordexist?idno='.$idno.'&idtype='.$idtype;
                       
            // return $url;
            $ch = curl_init();
            
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_PROXY, '');
            
            curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
            //return $result;
            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
            //return '++'.$result.'++';

             //close connection
             curl_close($ch);

            $jsondecode = json_decode($result);

    }
    
     public function getAssist(&$jsondecodeAssistEmployer)
    {
        //$idno = '1';

        $idno = session('idno');
        $empcode = session('empcode');
        $url = 'http://'.env('ASSIST_IP', 'localhost').'/wsassistsimulation/employer/'.$empcode;
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

    public function checkOdRecordExist(&$jsondecodeOdRecord)
    {
        $idno = session('idno');
        $idtype = session('idtype');
        
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/odrecordexist?idno='.$idno.'&idtype='.$idtype;
        
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

    public function createnoticedraft()
    {
        $noticetype = session('noticetype');
        $operid = session('loginname');
        $brcode = session('loginbranchcode');
        $idno = session('idno');
        $idtype = session('idtype');
        $empcode = session('empcode');//chg27062019 - to send empcode to ws

        //chg27062019 - send accddate & accdtime to ws but null value
        $notice = ['noticetype'=> $noticetype, 'operid'=> $operid,'brcode'=> $brcode, 'idno'=>$idno, 
            'idtype'=>$idtype, 'empcode'=>$empcode,'accddate'=>'', 'accdtime'=>''];
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
}

    
    

