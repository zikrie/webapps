<?php
 
 $question1 = session('question1');
 $question2 = session('question2');

return [

  'title' => 'SCO Recommendation',

    'attr' => [
      
        'case_status' => 'Case Status',
        'scheme_ref_no' => 'Scheme Reference Number',
        'notice_date' => 'Notice Date',
        'notice_type' => 'Notice Type',
        'working' => 'Is Still Working?',
        'declare_117' => 'Declaration 117',
        'death_source' => 'Death Source',
        'death_age' => 'Death Age',
        'acc_potential' => 'Accident Potential',
        'yes' => 'Yes',
        'no' => 'No',
        'approved'=>'Approved',
       'investigation'=> 'Investigation',
       'new'=> 'New',
       'close_payment'=>'Close with Payment',
       'close_wo_payment'=>'Close without Payment',
       'not_approved'=>'Not Approved',
       'inquiry'=>'Inquiry',
       'not_finished'=>'Not Finished',
       'request'=>'Request',
       'remark'=>'Remark',
       'in_process'=> 'In Process',
       'appeal_jdr'=>'Appeal to JDR',
       'question_1'=> $question1,
       'question_2'=>$question2,
       'question_3'=>' Whether the personal injury is caused by an OD?',
       'question_4'=>' Whether the accident or OD is in the course of his/her employment?',
       'question_5'=>' Whether the OD arised out of his employment? ',
       'wrong_benefit'=>' Wrong Benefit Type',
       'system_recommend'=>' System Recommendation',
       'scheme_recommend_date'=>' SCO Scheme Recommendation Date',
       'scheme_by'=>' Scheme Recommended By',
       'potential_96'=>'Potential 96',

      // 
    ],

    'save' => 'Save',
    'cancel' => 'Cancel',
    'clear' => 'Clear',
    'submit' => 'Submit',
    'view'=> 'View',
 
];