<?php

// For scheme's modules

return [

	'general' => [
                    
      'tab_title' => [

         'accident_notice' => 'Accident Notice',
         'remarks' => 'Remarks',
         'claim' => 'Claim Details',
         'investigation' => 'Investigation Details',
         'recommendation' => ' Recommendation',
         'supporting_document' => 'Supporting Document',
         'queryOpinion' => 'Query and Opinion',
         

      ],

      'notice_type' => [
               
         'title' => 'Insured Person and Employer Registration Status',
         'details' => 'Please fill in these information',
         'id_type' => 'Identification Type',
         'new_ic' => 'New IC',
         'old_ic' => 'Old IC',
         'army_id' => 'Army ID',
         'police_id' => 'Police ID ',
         'ssn_id' => 'Social Security Number ID(SSN)',
         'enter_ic' => 'Identification No.',
         'notice_type' => 'Notice Type',
         'accident_notice' => 'Accident Notice',
         'od_notice' => 'Occupational Disease Notice',
         'invalidity_notice' => 'Invalidity Notice',
         'death_notice' => 'Death Notice',
         'please_select' => 'Please Select',
         'employer' => 'Employer Registration Status',
         'employer_code' => 'Employer Code',
         'Insured_Person' => 'Insured Person Registration Status',
         'in_employment' => 'Is Insured Person Still in Employement?',
         'death_accident' => 'Is the Death due to Accident?',
      ],

      'green_header' => [

         'name' => 'Name', 
         'idno' => 'Identification No',
         'scheme_ref_no' => 'Scheme Ref No',
         'date_of_death' => 'Date of Death',

         'dash' => '-',

      ],

      /* ==================================================== COLLAPSE TAB ========================================================== */

      'collapse' => [
         
         'ob' => [

            'title' => 'Insured Person Information',
            
         ],

         'employer' => [

            'title' => 'Employer Information',

         ],

         'wages' => [

            'title' => 'Wages Information',

            'empcode' => 'Employer Code',
            'company_name' => 'Employer Name',
            'status_work' => 'Status Attended Work',
            'commencement_date' => 'Employment Start Date',
            'end_date' => 'Employment End Date',
            'wages_paid_accident' => 'Do Wages Paid On Day Accident',
            'details_wages_accd' => 'Details of Wages for the Period of 6 Consecutive Months Before the Month of Accident',
            'details_wages_od' => 'Details of Wages for the Period of 6 Consecutive Months Before the Month of Notice of Occupational Disease',
            'details_wages_ilat' => 'Details of Wages for the Period of 6 Consecutive Months Before the Month of Notice of Invalidity',
            'details_wages_death' => 'Details of Wages for the Period of 6 Consecutive Months Before the Month of Death',
            'recommended' => 'Recommended',
            'minimum_wages' => 'Minimum Wages',
            'wages_type' => 'Wages Type',
            'multiple' => 'Multiple',
            'similar_worker' => 'Similar Worker',
            'similar_industry' => 'Similar Industry',
            'minimum_wages' => 'Minimum Wages',
            'reject' => 'Reject',
            'recommended' => 'Recommended',
            'employer_info' => 'Employer Information',
            'remarks' => 'Remarks',

            'num' =>'No',
            'month' => 'Month',
            'year' => 'Year',
            'wages' => 'Wages (RM)',
            'contribution_paid' => 'Contribution Paid (RM)',
      
         ],

         'socso' => [

            'title' => 'SOCSO Office',

         ],

         'confirmation' => [

            'title' => 'Confirmation of Dependant',
            'title_ob'=>'Confirmation of Insured Person',
            'title_ot'=>'Confirmation of Claimant',
            'bank_info' => 'Bank Information',
            'bankrupt' => 'Bankrupt',
            'preparer' => 'Preparer',
            'approver' => 'Approver',

            'sectionj_received' => 'Section J Received',
            'complete_sectionj' => 'Complete Section J Received Date',
           

         ],

         'bank' => [
            
            'title' => 'Bank Information',

            'bank_account' => 'Bank Account',
            'reason' => 'Reason No Bank Account',
            'bai_status' => 'Status BAI',
            'active' => 'Active',
            'inactive' => 'Inactive',
            'suspense' => 'Suspense',
            'closed' => 'Closed',
            'substatus_desc' => 'Sub Status Description',
            'payment' => 'Payment Mode',
            'cheque' => 'Cheque',
            'eft' => 'EFT',
            'no_payment' => 'No Payment',
            'bank_name' =>'Bank Name',
            'bank_branch' => 'Bank Branch',
            'bank_accNo' => 'Bank Account No.',
            'bank_address' => 'Bank Address',
            'type_acc' => 'Bank Account type',
            'savings' => 'Savings',
            'current' => 'Current',
            'swift_code' => 'Swift Code',
            'bsb_code' => 'BSB Code',
            'reason_no_ic' => 'Reason No IC',
            'reason_no_bankAcc' => 'Reason No Bank Account',
            'no_ic' => 'No IC',
            'permanent_representative' => 'Permanent Representative',
            'bankrupt' => 'Bankrupt',
            'local' => 'Local',
            'overseas' => 'Overseas',
            'bank_account' => 'Bank Account',
            'local_bank' => 'Local Bank',
            'overseas_bank' => 'Overseas Bank',
            'ov_type_acc' => 'Overseas Bank Account Type',
            'country' => 'Country',
            'currency' => 'Currency',
            'ov_bank_address' => 'Overseas Bank Address',

         ],

         'accident' => [

            'title' => 'Accident Information',
            'accident_date' => 'Accident Date',
            'accident_time' => 'Accident Time',
            'place_accident' => 'Place of Accident',
            'when_accident' => 'When Accident Happen?',
            'date_death' => 'Date of Death',
            'how_accident' => 'How the Accident Happened?',
            'mode_transport' => 'Mode of Transport',
            'causeOfAccd' => 'Cause of Accident',
            'typeInjury' => 'Type of Injury',
            'locationOfInjury'=> 'Location of Injury',
            'causative_agent' => 'Causative Agent',
            'accident_code' => 'Accident Code',
            'industrial_code' => 'Industrial Code',
            'employment_code' => 'Employment Code',
            'reason_travelling' => 'Reason for Travelling on The Day of Accident (For road accident only)',
            'injury_desc' => 'Injury Description',
            'accident_workingDay' => 'Is Accident Date a Working Day For The Insured Person',
            'nameAddress_clinic' => 'Name and Address of Clinic Which Provides First Treatment',
            'start_date' => 'Attended Work Start Date',
            'end_date' => 'Attended Work End Date',
            'start_workingTime' => 'Start Working Time on Accident Day',
            'rest_period' => 'Time Of Recess On The Accident Date',
            'end_workingTime' => 'Ending Time of Work on The Accident Date',
            'witness_name' => 'Name of Witness(If any)',
            'witness_no' => 'Witness Phone No.',
            'are_wagesPaid'=> 'Are wages paid on the day of accident?',
         ],

         'mc' => [

            'title' => 'Medical Certification'

         ],

         'certification' => [

            'title' => 'Employer Certification',

            'details' => 'I hereby certify to the best of my knowledge and belief that all particulars given are true.',
            'sign' => 'Signature',
            'name' => 'Name',
            'designation' => 'Designation',
            'date' => 'Date',
            'no_sign' => 'No signature is required if the submission of this form is via electronic medium subject to verification by SOCSO',

         ],

         'case_info' => [

            'title' => 'Case Info',

            'case_status' => 'Case Status',
            'acceptance' => 'Acceptance',
            'scheme_ref_no' => 'Scheme Reference Number',
            'SPIeligible' => 'SPI Eligible',
            'notice_date' => 'Notice Date',
            'form34_date' => 'Form 34 Received Date',
            'registrationDate' => 'Registration Date',
            'notice_type' => 'Notice Type',
            'working' => 'Is Still Working?',
            'declare_117' => 'Declaration 117',
            'acc_potential' => 'Accident Potential',
            'yes' => 'Yes',
            'no' => 'No',

            // OD_RTW
            
            'caseinfo' => 'Case Information',
            'caseCategory' => 'Case Category',
            'spi_eligible' => 'SPI Eligible',
            'scheme_eligible' => 'Scheme Eligible',
            'typeOfScheme' => 'Type Of Scheme',
            'status_scheme' => 'Status Scheme EI Decision',
            'death_date' => 'Date of Death',
            'death_age' => 'Age At the time of Death',
            'death_source' => 'Source of Death Information',
            'potential_96' => 'Potential Sek 96',
            'potential_HUK' => 'Potential HUK case',
            'refer_to_JD' => 'Refer to JD',
            'ilat_notice' => 'Ilat Notice ID',
            'type_update' => 'Type of Update',
            'remark' => 'Remark',
            'support_doc' => 'Supporting Document',
            'pending' => 'Pending',
            'reject' => 'Reject',
            'qualified' => 'Qualified',
            'not_qualified' => ' Not Qualified',
            'not_qualified' => ' Not Qualified',
            'minimum_12' => ' Minimum 12 Months',
            'socsoRegistrationOffice' => 'SOCSO Registration Office ',
            'socsoOffice'=> 'SOCSO Office ',
            'accident_date' => 'Accident Date',

            //DEATH NOTICE

            'notice_id' => 'Notice ID',
            'qualifying_condition' => 'Qualifying Condition',
            'periodical_receiver' => 'Periodical HUS/HUK Receiver',
            'date_death' => 'Date of Death',
            'age_death' => 'Age at the time of death',
            'source_death' => 'Source of death information',

         ],

         'similar' => [

            'title' => 'Similar Worker Information',

            'similar_name' => 'Similar Worker Name',
            'similar_idtype' => 'Identification Type',
            'new_id_no' => 'New Identification Number',
            'similar_id' => 'Identification Number',
            'similar_emptype' => 'Employer Type',
            'similar_empcode' => 'Employer Code',
            'similar_empname' => 'Employer Name',
            'similar_startdate' => 'Employment Start Date',
            'similar_enddate' => 'Employment End Date',
            'new_ic' => 'New IC',
            'old_ic' => 'Old IC',
            'army_id' => 'Army ID',
            'police_id' => 'Police ID ',
            'ssn_id' => 'Social Security Number ID(SSN)',
            'cid' => 'CID',
            'badan_berkanun' => 'Statutory Body',
            'swasta' => 'Private',
            'kerajaan' => 'Government'

         ],

         'investigation' => [

            'title' => 'Investigation',
         ],

         'case_fact' => [

            'title' => 'Case Fact',
         ],

         'recommendation' => [

            'title' => 'Recommendation',
         ],

         'inconsistency' => [

            'title' => 'Inconsistency',
            'add_item' => 'Add Item',
            'section' => 'Section',
            'item' => 'Item',
            'notice_details' => 'Notice Details',
            'supporting_documents' => 'Supporting Documents',
            'corrected_data' => 'Corrected Data',
            'investigation' => 'Investigation Justification',
            'findings' => 'Findings',
            'consistent' => 'Consistent',
            'action' => 'Action',
            'review' => 'Review',
            'review_by' => 'Review By',

         ],

         'remarks' => [

            'title' => 'Remarks',
            'date' => 'Date',
            'time' => 'Time',
            'from' => 'From',
            'to' => 'To',
            'remark' => 'Remark',

         ],

         'investigation_assistant' => [

            'title' => 'Investigation Assistant',
            'sender_note' => 'Sender Note',
            'office' => 'Office',
            'notes' => "Recipient's Notes",

         ],

         'supporting_document' => [

            'title' => 'Supporting Document',

         ],

         'generate_document' => [

            'title' => 'Generate Document',

         ],

         'preparer' => [

            'title' => 'Preparer Information',

            'prepared_by' => 'Prepared By',
            'prepared_date' => 'Prepared Date',


         ],

      ],
            
   ],

   /* ======================================== ALL NOTICES (ACCIDENT, OD, INVALIDITY, DEATH & REVISION) ============================================== */

   'notice_accident' => [

      'PK' => [

      ],

   ],

   'notice_od' => [

      'PK' => [

      ],
   ],

	'notice_invalidity' => [

      'PK' => [

      ],

   ],

   'notice_death' => [

      'PK' => [
         
         'death' => [
            
            'title' => 'Death Information',

         ],

         'dependant' => [

            'title' => 'Dependant Information',

            'ot_name' => 'Dependant Name',
            'id_type' => 'Identification Type',
            'new_ic' => 'New IC',
            'old_ic' => 'Old IC',
            'army_id' => 'Army ID',
            'police_id' => 'Police ID ',
            'ssn_id' => 'Social Security Number ID(SSN)',
            'cid' => 'CID',
            'id_no' => 'Identification Number',
            'relationship' => 'Relationship with Insured Person',
            'dateOfBirth' => 'Date of Birth',
            'married_date' => 'Marriage Date',
            'registered_married' => 'Registered Married?',
            'edah' => 'In Edah?',
            'disability' => 'Disability?',
            'passport_expired' => 'Passport Expired Date',
            'eligibility_start' => 'Eligibility Start Date',
            'eligibility_end' => 'Eligibility End Date',
            'status' => 'Dependant Status',
            'date_death' => 'Date of Death',
            'date_marriedOb' => 'Marriage Date with Insured Person',
            'date_divorcedOb' => 'Divorced Date with Insured Person',
            'disability_beforeAfter_death' => 'Disability before Insured Person death',
            'postal_address' => 'Postal Address day for the Insured Person',
            'city' => 'City',
            'state' => 'State',
            'postcode' => 'Postcode',
            'po_box' => 'P.O Box',
            'locked_bag' => 'Locked Bag',
            'wdt' => 'W.D.T',
            'telephoneNo' => 'Telephone No.',
            'mobileNo' => 'Mobile No.',
            'email' => 'Email Address',
            'ot_guardian' => 'Does Dependant Have Guardian?',
            'yes' => 'Yes',
            'no' => 'No',
            'otobdependence' => 'Dependence',
            'qualification' => 'Qualification',
            'eligibility' => 'Eligibility',
            'pendingpay' => 'Pending Pay',
            'maritalstatus' => 'Marital Status',
            'address' => 'Address',
            'T_select' => 'Select',
            'T_name' => 'Name',
            'T_idno' => 'ID No',
            'M_guardian_info' => 'Guardian Info',

         ],

         'dependant_study' => [
            
            'title' => 'Education Information',

            'study_start_date' => 'Start Date',
            'study_end_date' => 'Expected End Date',
            'status' => 'Status',
            'edu_level' => 'Education Level',
            'pls_specify' => 'Please  Specify',
            'course_name' => 'Course Name',
            'inst_univer_name' => 'Institution/University Name',

         ],

         'applicant' => [

            'title' => 'FPM Information',
            'claimant_title' => 'Claimant Profile',

         ],

         'guardian' => [

            'title' => 'Guardian Information',

            'ot_name' => 'OT Name',
            'guardian_name' => 'Guardian Name',
            'id_type' => 'Identification Type',
            'id_no' => 'Identification Number',
            'OT_name' => 'OT Name',
            'pass_exp_date' => 'Passport Expired Date',
            'eligibility_start_date' => 'Eligibility Start Date',
            'eligibility_end_date' => 'Eligibility End Date',
            'address' => 'Address',
            'city' => 'City',
            'state' => 'State',
            'postcode' => 'Postcode',
            'demised_date' => 'Demised Date',   
            'po_box' => 'P.O Box',
            'locked_bag' => 'Locked Bag',
            'wdt' => 'W.D.T', 

         ],

      ],

      'SCO' => [

         'scheme_q' => [

            'title' => 'Scheme Qualifying Information',

            'scheme_type' => 'Scheme Type',
            'entry_date' => 'Scheme Entry Date',
            'age_entry_date' => 'Age at the time of scheme entry date',
            'statutory_body' => 'Statutory body',
            'start_date' => 'Employment Start Date',
            'end_date' => 'Employment End Date',
            'total_months_entry_death' => 'Total months between Scheme Entry & Death Date',
            'total_months_contributed' => 'Total Months Contributed',
            'qualifying_condition' => 'Qualifying Condition',
            'pension' => 'Pension %',

         ],

      ],

      'IO' => [

      ],

      'SAO' => [

      ],
   ],
];