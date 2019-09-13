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
            
            'form34_date' => 'Form 34 Received Date',
            'pobox' => 'P.O Box',
            'locked_bag' => 'Locked Bag',
            'wdt' => 'W.D.T',
            'notice' => 'Notice',
            'case_type' => 'Case Type',
            'notice_ID' => 'Notice ID',
            'status' => 'Status',

         ],

         'employer' => [

            'title' => 'Employer Information',

            'empcode' => 'Employer Code',
            'emptype' => 'Employer Type',
            'empname' => 'Employer Name',
            'business_entity' => 'Business Entity',
            'sub_business' => 'Sub-Business Entity',
            'sub_businesslist' => 'Sub-Business Entity List',
            'service_type' => 'Service Type',
            'industry_code' => 'Industry Code',
            'sub_industry' => 'Sub-Industry Code List',
            'pobox' => 'P.O Box',
            'locked_bag' => 'Locked Bag',
            'wdt' => 'W.D.T',
         ],

         'wages' => [

            'title' => 'Wages Information',
            'title_additional' => 'Additional Wages Information',

            'empcode' => 'Employer Code',
            'company_name' => 'Employer Name',
            'status_work' => 'Status Attended Work',
            'commencement_date' => 'Employment Start Date',
            'end_date' => 'Employment End Date',
            'wages_paid_accident' => 'Do Wages Paid On Day Accident?',
            'month_contribution' => 'Month of Contribution',
            'details_wages_accd' => 'Details of Wages for the Period of 6 Consecutive Months Before the Month of Accident',
            'details_wages_od' => 'Details of Wages for the Period of 6 Consecutive Months Before the Month of Notice of Occupational Disease',
            'details_wages_ilat' => 'Details of Wages for the Period of 6 Consecutive Months Before the Month of Notice of Invalidity',
            'details_wages_death' => 'Details of Wages for the Period of 6 Consecutive Months Before the Month of Death',
            'employer_info' => 'Employer Information',
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
            'num' =>'No.',
            'month' => 'Month',
            'year' => 'Year',
            'wages' => 'Wages (RM)',
            'contribution_paid' => 'Contribution Paid (RM)',
            'contribution_payable' => 'Contribution Payable (RM)',
            'contribution_surplus' => 'Contribution Surplus/Deficit (RM)',
            'contribution' => 'Contribution (RM)',
            'reason' => 'Reason',

         ],

         'socso' => [

            'title' => 'SOCSO Office',

            'state' => 'State',
            'city' => 'City',
            'preferred_socso' => 'Preferred SOCSO Office',
            'origin' => 'Origin',
            'current' => 'Current',

         ],

         'confirmation' => [

            'title' => 'Confirmation of Dependant',
            'title_ob'=>'Confirmation of Insured Person',
            'title_ot'=>'Confirmation of Claimant',
            'bank_info' => 'Bank Information',
            'bankrupt' => 'Bankrupt',
            'preparer' => 'Preparer',
            'approver' => 'Approver',

            'bank_completed' => 'Bank Information Completed?',
            'stamp_date' => 'Acceptance Stamp Date',
            'completion_completed' => 'Completion Completed?',
            'completion_date' => 'Completion Date',
            'remarks' => 'Remarks',
           

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

         ],

         'mc' => [

            'title' => 'Medical Certification',

            'title_hus' => 'HUS Information',
            'type_hus' => 'Type of HUS',
            'mc' => 'MC',
            'clinic_details' => 'Name and Address of Clinic of Which Provides Treatment',
            'start_date' => 'Start Date',
            'end-date' => 'End Date',
            'total_days' => 'Total Days',
            'hus_status' => 'HUS Approval Status',
            'hus_recommendation_date' => 'HUS Recommendation Date',
            'hus_recommendation_status' => 'HUS Recommendation Status',
            'mc_recommendation' => 'MC Recommendation by IO',
            'total_hus' => 'Total HUS',
            'remarks' => 'Remarks',
            'action' => 'Action',
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
            'type_revision' => 'Type of Revision',

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
            'received_revision' => 'Received Revision Notice Date',
            'source' => 'Source',

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

         'investigation_report' => [

            'title' => 'Investigation Report',

            'date' => 'Investigation Date',
            'question1' => 'Whether the insured person is an employee under the SOCSO Act?',
            'question2' => 'Whether the SOCSO Act applies to this industry?',
            'question3' => 'Whether the personal injury is caused by an accident or an OD?',
            'question4' => 'Whether the accident or OD is in the course of his/her employment?',
            'question5' => 'Whether the accident or the OD arised out of his employment?',
            'system_recommendation' => 'System Recommendation from IO',
            'recommendation_date' => 'Recommendation Date',

         ],

         'appointment' => [

            'title' => 'Appointment',

            'investigation_date' => 'Investigation Date',
            'investigation_time' => 'Investigation Time',
            'type_person' => 'Type of Person in an Appointment',
            'address' => 'Address',
            'name_officer' => 'Name of Investigating Officer',
            'email_officer' => 'Email of Investigating Officer',
            'place_officer' => 'Place of Investigating Officer',

         ],


         'interviewee_info' => [

            'title' => 'Interviewee Information',

            'inspector_name' => 'Inspector Name',
            'age' => 'Age',
            'about_investigation' => 'About the Investigation',
            
         ],

         'case_fact' => [

            'title' => 'Case Fact',

            'list_tasks' => 'List of Tasks',
            'reviewer_comment' => 'Reviewer Comment',
            'approval_comment' => 'Approval Comment',
            'reviewer_reviews' => 'Reviewer Reviews',
            'recommendation' => 'Recommendation',
            'investigator_name' => 'Investigator Name',
            'date' => 'Date',
         ],

         'case_transfer' => [

            'title' => 'Case Transfer',

            'transfer' => 'Transfer',
            'remarks' => 'Remarks',
            'origin' => 'Origin',
            'current' => 'Current',

         ],

         'statement' => [

            'title' => 'Statement',

            'download' => 'Download',
            'no' => 'No.',
            'doc_name' => 'Document Name',

         ],

         'witness_information' => [

            'title' => 'Witness Information',

            'language' => 'Language',
            'witness_statement' => 'Witness Statement',
            'translator_name' => 'Translator Name',
            'investigation_date' => 'Investigation Date',
            'investigation_start' => 'Investigation Start Time',
            'investigation_end' => 'Investigation End Time',

         ],

         'employer_information' => [

            'title' => 'Employer Information',

            'language' => 'Language',
            'employers_statement' => 'Employers Statement',
            'translator_name' => 'Translator Name',
            'investigation_date' => 'Investigation Date',
            'investigation_start' => 'Investigation Start Time',
            'investigation_end' => 'Investigation End Time',

         ],

         'approval' => [

            'title' => 'Approval',
         ],

         'recommendation' => [

            'title' => 'Recommendation',
            'updatedBy' => 'Updated By',
            'updatedDate' => 'Updated Date',
            'recommendationIO' => 'Recommended IO',
            'recommended_by' => 'Recommended By',
            'recommended_date' => 'Recommended Date',
         ],

         'IO_recommendation' => [

            'title' => 'IO Recommendation',
            'recommendation' => 'Recommendation',
            'recommended_by' => 'Recommended By',
            'recommended_date' => 'Recommended Date',
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

         'declaration' => [

            'title' => 'Declaration 117',
            'doc' => 'Document',
            'action' => 'Action',

         ],

         'investigation_document' => [

            'title' => 'Investigation Document',
            'doc' => 'Document',
            'action' => 'Action',

         ],

         'supporting_document' => [

            'title' => 'Supporting Document',

         ],

         'upload_document' => [

            'title' => 'Upload Document',
            'revisionNoticeID' => 'Revision Notice ID',
            'updateBy' => 'Update By',
            'updateDate' => 'Update Date',
            'docdesc' => 'Document Description',
            'docpath' => 'Document Path',
            'date' => 'Date',
            'view' => 'View',
            'delete' => 'Delete',

         ],

         'generate_document' => [

            'title' => 'Generate Document',

            'doc_description' => 'Document Description',
            'date' => 'Generated Date',
            'view' => 'View',
            
         ],

         'preparer' => [

            'title' => 'Preparer Information',

            'prepared_by' => 'Prepared By',
            'prepared_date' => 'Prepared Date',


         ],
            /*========= FOR REVISION =========*/
         'pks' => [

            'title' => 'PKS',

         ],
      ],
            
   ],

   /* ======================================== ALL NOTICES (ACCIDENT, OD, INVALIDITY, DEATH & REVISION) ============================================== */

   'notice_accident' => [

      'PK' => [

      ],

   ],

   'notice_invalidity' => [

      'PK' => [

      ],
   ],

   'notice_od' => [

      'PK' => [

         'employment_history' => [
            
            'title' => 'Employment History',

            'details' => 'Name & Address of Employer for the Last 5 Years of Employment',
            'no' => 'No.',
            'name' => 'Employer Name',
            'address' => 'Employer Address',
            'working_period' => 'Working Period',
            'designation' => 'Designation',
            'delete' => 'Delete',

         ],

         'od_info' => [
            
            'title' => 'Occupational Disease Information',

            'od_date' => 'Occupational Disease Date',
            'description' => 'Description of Occupational Disease',
            'disease_related' => 'Is the Disease Related to Employment?',
            'duties' => 'Specify Duties and How Insured Person Exposed to the Danger',
            'symptoms' => 'Please Explain Symptoms/Sign Encountered',
            'date_death' => 'Date of Death (if applicable)',
            'about_disease' => 'About the Disease',

         ],
      ],

      'SCO' => [

         'jdk_decision' => [
            
            'title' => 'JDK Decision',

            'potential' => 'Potential Not Employment Injury',
            'session_date' => 'Session Date',
            'od_decision' => 'OD Decision',
            'jdk_decision' => 'JDK Decision',
            'jdk_type' => 'JDK Type',
            'assessment_type' => 'Assessment Type',
            'assessment' => 'Assessment(%)',
            'provisional_enddate' => 'Provisional Assessment End Date',
            'els' => 'ELS',
            'remarks' => 'Remarks',
            'hus_enddate' => 'HUS End Date',
            'accrual_date' => 'Accrual Date',
            'provisional_accrual' => 'Provisional Assessment Accrual Date',
            'final_accrual' => 'Final Assessment Accrual Date',

            //sao

            'speciality' => 'Speciality',
            'part_injury' => 'Part of Injury',
            'location' => 'Appointment Location',
            'session_date' => 'Session Date',
            'od_decision' => 'OD Decision',

         ],

         'od_report' => [
            
            'title' => 'OD Report',

            'disease' => 'Disease',
            'type_illness' => 'Type of Illness',
            'type_questionbank' => 'Type of Question Bank',
            'question_bank' => 'Question Bank',
            'no' => 'No.',
            'question' => 'Question',
            'evidence' => 'Evidence',
            'reference' => 'Reference',
            'recommendation' => 'Recommendation refer to JDK',

         ],

      ],

      'SAO' => [

         'sao_approval' => [
            
            'title' => 'SAO Approval',

            'case_status' => 'Case Status',
            'question1' => 'Whether the insured person is an employee under the SOCSO Act?',
            'question2' => 'Whether the insured person is an employee under the SOCSO Act?',
            'question3' => 'Whether the personal injury is caused by an OD?',
            'question4' => 'Whether the OD is in the course of his/her employment?',
            'question5' => 'Whether the OD arised out of his/her employment?',
            'wrong_benefit' => 'Wrong Benefit Type',
            'status_scheme' => 'Status Scheme EI Decision',
            'sao_approval' => 'SAO Approval',
            'reject_reason' => 'Reject Reason',
            'close_reason' => 'Close Reason',
            'approval' => 'Approval Refer to JDK',
            'mar_opinion' => 'MAR Opinion',
            'approved_date' => 'Scheme Approved Date',
            'approved_by' => 'Scheme Approved By',
            'route' => 'Route',

         ],

         'ms_opinion' => [
            
            'title' => 'MS Opinion',

            'opinion_type' => 'Opinion Type',
            'ms_opinion' => 'MS Opinion',

         ],

         'payment_option' => [
            
            'title' => 'Payment Option',

            'huk_payment' => 'HUK Payment Option',
            'date_payment' => 'Date Payment Option',
            'updated_by' => 'Updated by',
            'updated_date' => 'Updated Date',
            'approved_by' => 'Approved By',
            'approved_date' => 'Approved Date',

         ],

         'benefit_decision' => [
            
            'title' => 'Benefit Management Decision',

            'benefit_date' => 'Benefit Approved Date',
            'benefit_by' => 'Benefit Approved By',
            'remarks' => 'Remarks',

         ],

         'overpayment' => [
            
            'title' => 'Overpayment Information',

            'reason' => 'Overpayment Reason',
            'debtor_id' => "Debtor's ID",
            'period' => 'Overpayment Period',

         ],
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
