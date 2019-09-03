<?php

namespace App\Http\Controllers\Scheme;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use DB;
use Storage;
use Response;

class UploadclaimController extends Controller
{
    //chg03072019
    //to refresh the page after scanning is done at PK's pc
    public function ScanningDone(Request $req)
    {
        $scancaserefno = $req->query('caserefno');
        $caserefno = session('caserefno');
        
        return $scancaserefno.'++'.$caserefno;
        if ($scancaserefno == $caserefno)
        {
            return redirect()->back()->withInput(['tab'=>'uploaddoc'])->with('messagedoc','Scan successful');
        }
        
    }
    
    public function viewstorage(Request $req)
    {
        $docname = $req->query('docname');
        $docpath = 'app/documents/'.$docname;
        //$docpath = 'C:/MOTION/IMAGES/'.$docname;
        $path = storage_path($docpath);
        // return Storage::disk('partitionI')->response($show_pdf);
        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$docpath.'"'
        ]);
    }
    
    public function getdoc()
    {
        $sql = 'select d.docdescen,d.doctype,d.docdescbm, d.doccat from doctype d, noticedoc n '
                . 'where n.casetype=? and n.doctype = d.doctype order by n.priority';
        $doclist = DB::select($sql,['01']);
        return view('test.uploadDocument',['doclist'=>$doclist]);
    }
    
    public function upload(Request $request){

      // for($i = 1;$i<=$array;$i++){
        //     $doctype = $request->doctype[$i];
        //     $docdescen = $request->docdescen[$i];

        //     $combine=$fe
        // }
        
        //return $request->all();

       
        $idno = session('idno');
        $uniquerefno = session('uniquerefno');
        $caserefno = session('caserefno');
        $operid = session('loginname');
        $brcode = session('loginbranchcode');
        $dataSet = array();
        
        $cnt = 0;
        $a = '';
        
        
        // $select_idtype=$request->select_idtype[4];
        // $doctype=substr($select_idtype,4);
        // $doccat=substr($select_idtype,0,3);
        // return $doccat;

      
      
        if ($request->pdf == null)
        {
            return redirect()->back()->withInput(['tab'=>'uploaddoc'])->with('messagedoc','No document to be uploaded');
        }
         $doccount="1";
        $doctype_select = $request->doccat;
         
        $values_array= array_count_values($doctype_select);
        // return $values_array['C01|C'];
        // $values_array='C01|C'->$values_array;
        // return 
        foreach ($request->pdf as $index => $pdf)
        {      
            // $doctype = $request->doctype[$index];
            $date = date('Ymd');
            $docall = $request->doccat[$index];
            // $coun_array= count(in_array($docall, $doctype_select));
            $doccat=substr($docall,4);
            $doctype=substr($docall,0,3);
      
            if($values_array[$docall]==$doccount){
                $doccount="1";
                // return $values_array[$docall];
            }
            else{
                $doccount++;
            }

            
            // if (in_array($docall, $doctype_select) && count(in_array($docall, $doctype_select))>$index){
            //     $doccount++;
            //     }
            //     else{
            //         $doccount="1";
            //     }
            if ($doccat == 'O')
            {
                $docname = $caserefno.'_'.$doctype.'_'.$date.'_'.$doccount.'.pdf';
                
                $dataSet[$cnt++] = [
                    'caserefno' => $caserefno,
                    'uniquerefno' =>$uniquerefno,
                    'docdate' =>$date,
                    'doctime' =>date('His'), 
                    'doccat' => $doccat,
                    'doctype' => $doctype,
                    'docname' => $docname,
                    'doccount'=>$doccount

                ];
            }
            else if ($doccat == 'C')
            {
                $docname = $caserefno.'_'.$doctype.'_'.$date.'_'.$doccount.'.pdf';
                $dataSet[$cnt++] = [
                    'caserefno' => $caserefno,
                    'uniquerefno' =>$uniquerefno,
                    'docdate' =>$date,
                    'doctime' =>date('His'), 
                    'doccat' => $doccat,
                    'doctype' => $doctype,
                    'docname' => $docname,
                    'doccount'=>$doccount

                ];
            }
            
          
            
             $pdf->storeAs('documents', $docname);
            
             
        }

        //najmi
        /*
        foreach ($request->pdf_selection as $pdf_selection)
        {
            
            $date = date('Ymd');
            $doctype_selection = $request->idtype;
            $doccat_selection=DB::select('Select doccat from doctype where docdescen=?', [$doctype_selection]);
            
            if ($doccat_selection == 'O')
            {
                $docname_selection = $idno.'_'.$doctype_selection.'_'.$date.'.pdf';
                $dataSet_selection[$cnt++] = [
                    'caserefno' => '',
                    'idno' =>$idno,
                    'docdate' =>$date,
                    'doctime' =>date('His'), 
                    'doccat' => $doccat_selection,
                    'doctype' => $doctype_selection,
                    'docname' => $docname_selection,
                    'doccount'=>2

                ];
            }
            else if ($doccat_selection == 'C')
            {
                $docname_selection = $caserefno.'_'.$doctype_selection.'_'.$date.'.pdf';
                $dataSet_selection[$cnt++] = [
                    'caserefno' => $caserefno,
                    'idno' =>$idno,
                    'docdate' =>$date,
                    'doctime' =>date('His'), 
                    'doccat' => $doccat_selection,
                    'doctype' => $doctype_selection,
                    'docname' => $docname_selection,
                    'doccount'=>2

                ];
            }
            
          
            
            $pdf_selection->storeAs('documents', $docname_selection);
        }*/
        
        $docrepo = ['operid'=>$operid, 'brcode'=>$brcode, 'docinfo'=>$dataSet];
        
        
        $jsondata = json_encode($docrepo);
       

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/upddoc';

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
        
        $jsondecode = json_decode($result);
        
        
        $errorcode = $jsondecode->{'errorcode'};
    
        if ($errorcode == 0)
        {
            return redirect()->back()->withInput(['tab'=>'uploaddoc'])->with('messagedoc','Upload successful');
        }
        else
        {
            return redirect()->back()->withInput(['tab'=>'uploaddoc'])->with('messagedoc','Upload unsuccessful');
        }
        
      
    }
}
