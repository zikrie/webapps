<?php

namespace App\Http\Controllers\scheme;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use DB;
use Storage;
use Response;
use setasign\Fpdi\Fpdi;



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
    public function test(Request $req)
    {
        $docname = $req->query('docname');
        $show=$req->query('show');
       
        $notes = $req->query('notes');
        $docid = $req->query('docid');
        
        // $docinfo =DB::select('Select t.dn_page_note,t.dn_details_note  from docrepository r,docnotes t where r.docid=t.dn_docid AND r.caserefno=t.dn_caserefno AND r.docname=? ',[$docname]);
        $docinfo =DB::select('SELECT t.dn_page_note,t.dn_details_note  from docrepository r,docnotes t where r.docid=t.dn_docid AND r.docname=? ',[$docname]);
        $count ="0";

        if($docinfo!=null){
            foreach($docinfo as $index){
                $dn_page_note[$count]=$index->dn_page_note;
                $dn_details_note[$count]=$index->dn_details_note;
                $count++;
              }
              session(['dn_page_note' =>$dn_page_note,'dn_details_note'=>$dn_details_note]);
            // $_SESSION['dn_page_note'] = $dn_page_note;
            // $_SESSION['dn_details_note'] = $dn_details_note;
            // $_SESSION['docname'] = $docname;
            
        }
        else{
            $dn_page_note=null;
            $dn_details_note=null;
        }
        session(['docname' =>$docname]);
        // $testing=nl2br($dn_details_note[2]);
        //  dd($dn_details_note) ;
        //  return $dn_details_note[2];   
  
        return view('scheme.general.testing',['docname'=>$docname,'notes'=>$notes,'docid'=>$docid,'dn_page_note'=>$dn_page_note,'dn_details_note'=>$dn_details_note,'docinfo'=>$docinfo,'show'=>$show]);
       
        // return view('testing',['docname'=>$docname,'notes'=>$notes,'docid'=>$docid,'docinfo'=>$docinfo]);
        
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
        // dd($uniquerefno);
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
        // dd($result);
        
        
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
    public function viewnotes(){
 // $docname = session('docname');
   $docname="201907240008_C03_20190823_1.pdf";
   
   $dn_page_note=session('dn_page_note');
   $dn_details_note=session('dn_details_note');
   
   $pdf = new Fpdi();
   $docpath = 'app/documents/'.$docname;
   //$docpath = 'C:/MOTION/IMAGES/'.$docname;
   $path = storage_path($docpath);
   $pageCount = $pdf->setSourceFile($path);

   $countfor="0";
for ($i = 1; $i <= $pageCount; $i++) {
  if($dn_page_note[$countfor]==$i)
  {
    // $dn_details_note[$countfor]=nl2br($dn_details_note[$countfor]);
    $tplIdx = $pdf->importPage($i, '/MediaBox');
    $pdf->SetTitle($docname);
    $pdf->AddPage();
    $pdf->useTemplate($tplIdx);
    $pdf->SetFont('Helvetica');
    $pdf->SetTextColor(0, 0, 0);
    $pdf->setFillColor(255,255,0); //rgb color
    $pdf->SetXY(30, 30);
    $pdf->Cell(($pdf->GetStringWidth($dn_details_note[$countfor]) + 2), 7, $dn_details_note[$countfor], 2, 20 ,'L', TRUE);
    $countfor++;
  }
  else{
    $pdf->SetTitle($docname);
    $tplIdx = $pdf->importPage($i, '/MediaBox');
    $pdf->AddPage();
    $pdf->header = false;
    $pdf->useTemplate($tplIdx);
 
  }
}

$pdf->Output();
    }
    public function viewNonotes(){
         $docname = session('docname');
        
       
        $pdf = new Fpdi();

        //Merging of the existing PDF pages to the final PDF
        $docpath = 'app/documents/'.$docname;
        //$docpath = 'C:/MOTION/IMAGES/'.$docname;
        $path = storage_path($docpath);
        $pageCount = $pdf->setSourceFile($path);
        for ($i = 1; $i <= $pageCount; $i++) {
        
            $tplIdx = $pdf->importPage($i, '/MediaBox');
           
            $pdf->AddPage();
            $pdf->SetTitle($docname);
            $pdf->header = false;
            
            $pdf->useTemplate($tplIdx);
        }
        
        $pdf->Output();
    }
}
