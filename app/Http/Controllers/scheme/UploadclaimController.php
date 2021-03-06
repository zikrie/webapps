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
        $docinfo =DB::select('SELECT t.dn_page_note,t.dn_details_note ,t.specific_notes from docrepository r,docnotes t where r.docid=t.dn_docid AND r.docname=? ORDER BY t.dn_page_note ASC, t.specific_notes ASC' ,[$docname]);
  
        $count ="0";

        if($docinfo!=null){
            foreach($docinfo as $index){
                $dn_page_note[$count]=$index->dn_page_note;
                $dn_details_note[$count]=$index->dn_details_note;
                $dn_specific_note[$count]=$index->specific_notes;
                // $array_pdf[$count] = [
                //     'dn_details_note' =>$index->dn_details_note,
                //     'specific_notes' =>$index->specific_notes
                // ];
                
                //   $dn_details_note[$count]=nl2br($dn_details_note[$count]);
                $count++;
               
              }
              session(['dn_page_note' =>$dn_page_note,'dn_details_note'=>$dn_details_note,'dn_specific_note'=>$dn_specific_note,'docname'=>$docname]);
            // $_SESSION['dn_page_note'] = $dn_page_note;
            // $_SESSION['dn_details_note'] = $dn_details_note;
            // $_SESSION['docname'] = $docname;
            
        }
        else{
            $dn_page_note=null;
            $dn_details_note=null;
        }
     
// dd($dn_page_note);
    //    dd(session($dn_details_note[2]));
    //       $testing=nl2br($dn_details_note[2]);
   
    
   
    //  dd($dn_details_note[0]);
    //  dd($testing) ;
        //   return $dn_details_note[0];
    //    if(in_array("2",$dn_page_note)>1){
       
    //    }
    // dd(count(array_keys($dn_page_note, $dn_page_note[0])));
 
    //    dd(strlen($dn_details_note[0]));
        return view('scheme.general.testing',['notes'=>$notes,'docid'=>$docid,'docname'=>$docname,'docinfo'=>$docinfo,'show'=>$show]);
       
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
            
            // $extension = $pdf->getClientOriginalExtension();
 
            // //filename to store
            // $filenametostore = $docname.'_'.uniqid().'.'.$extension;
            
            // Storage::disk('ftp')->put($filenametostore, fopen($pdf, 'r+'));
            //  $testing=  Storage::disk('ftp');
            //  $pdf->storeAs($testing, $docname);

             
            //  Storage::disk('sftp')->append($pdf, $docname);
             Storage::disk('sftp')->put($docname, file_get_contents($pdf));
            //  $pdf->storeAs('documents', $docname);
            
             
        }

        
        
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
  $docname = session('docname');  
   $dn_page_note=session('dn_page_note');
   $dn_details_note=session('dn_details_note');
   $dn_specific_note=session('dn_specific_note');
 
   
//    $array_pdf=session('array_pdf');
   
   $pdf = new Fpdi();
   $docpath = 'app/documents/'.$docname;
   //$docpath = 'C:/MOTION/IMAGES/'.$docname;
   $path = storage_path($docpath);
   $pageCount = $pdf->setSourceFile($path);

   $countfor="0";
   $xaxis="30";
   $yaxis="30";
for ($i = 1; $i <= $pageCount; $i++) {
  if($dn_page_note[$countfor]==$i)
  {
     
      $tplIdx = $pdf->importPage($i, '/MediaBox');
      $pdf->SetTitle($docname);
      $pdf->AddPage();
      $pdf->useTemplate($tplIdx);
      $pdf->SetFont('Helvetica');
      $pdf->SetTextColor(0, 0, 0);
      $pdf->setFillColor(255,255,0); //rgb color
     
      if(count(array_keys($dn_page_note, $dn_page_note[$countfor]))>1){

        for ($u = 1; $u <= $pageCount; $u++) {
            if($dn_specific_note[$u]==$u){
                if(strpos(nl2br($dn_details_note[$u]),"<br />")!=false){
                    $pdf->Multicell(($pdf->GetStringWidth($dn_details_note[$u]) +  strlen($dn_details_note[$u])), 10, $dn_details_note[$u], 90, 20 ,'L', TRUE);
                    $pdf->SetXY($xaxis, $yaxis);
                }
            else{
                $pdf->cell(($pdf->GetStringWidth($dn_details_note[$u]) + strlen($dn_details_note[$u])), 10, $dn_details_note[$u], 90, 20 ,'L', TRUE);
                $pdf->SetXY($xaxis, $yaxis);
            }    
            }
            $yaxis++;
            
           
        }
        $countfor++;
      }
      
      else{
        if(strpos(nl2br($dn_details_note[$countfor]),"<br />")!=false){
            $pdf->Multicell(($pdf->GetStringWidth($dn_details_note[$countfor]) +  strlen($dn_details_note[$countfor])), 10, $dn_details_note[$countfor], 90, 20 ,'L', TRUE);
            $pdf->SetXY(30, 30);
        }
    else{
        $pdf->cell(($pdf->GetStringWidth($dn_details_note[$countfor]) + strlen($dn_details_note[$countfor])), 10, $dn_details_note[$countfor], 90, 20 ,'L', TRUE);
        $pdf->SetXY(30, 30);
    }

      }
      

    //   if(count(array_keys($dn_page_note, $dn_page_note[$countfor]))>1){
    //     $pdf->Cell(($pdf->GetStringWidth(nl2br($dn_details_note[$countfor])) + 2), 7, nl2br($dn_details_note[$countfor]), 2, 20 ,'L', TRUE);
    //     $pdf->Cell(($pdf->GetStringWidth($dn_details_note[$countfor]) + 20), 7, $dn_details_note[2], 90, 20 ,'L', TRUE);
    //   }
    //   else{
    //     $pdf->Cell(($pdf->GetStringWidth(nl2br($dn_details_note[$countfor])) + 2), 10, nl2br($dn_details_note[$countfor]), 90, 20 ,'L', TRUE);
    //   }
      $countfor++;
  }
  elseif($dn_details_note[$countfor]!=null){
    $tplIdx = $pdf->importPage($i, '/MediaBox');
    $pdf->SetTitle($docname);
    $pdf->AddPage();
    $pdf->useTemplate($tplIdx);
    $pdf->SetFont('Helvetica');
    $pdf->SetTextColor(0, 0, 0);
    $pdf->setFillColor(255,255,0); //rgb color
    $pdf->SetXY(30, 30);
     if(strpos(nl2br($dn_details_note[$countfor]),"<br />")!=false){
            $pdf->Multicell(($pdf->GetStringWidth($dn_details_note[$countfor]) +  strlen($dn_details_note[$countfor])), 10, $dn_details_note[$countfor], 90, 20 ,'L', TRUE);
        }
    else{
        $pdf->cell(($pdf->GetStringWidth($dn_details_note[$countfor]) + strlen($dn_details_note[$countfor])), 10, $dn_details_note[$countfor], 90, 20 ,'L', TRUE);
    }

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
