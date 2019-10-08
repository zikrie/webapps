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
         'query_opinion' => 'Query and Opinion',
         'investigation' => 'Investigation',
         'medical_board' => 'Medical Board Decision',

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

      'preview_page' => [

         'title' => 'Preview',

      ],

      /* ==================================================== COLLAPSE TAB ========================================================== */

      'collapse' => [
         
         'ob' => [

            'title' => 'Insured Person Information',
            
         ],

         'employer' => [

            'title' => 'Employer Information',

         ],

         'employer_history' => [
            'title' => 'Employer History',
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

            'title' => 'Confirmation of Insured Person/Dependant/Claimant',
            'title_ob'=>'Confirmation of Insured Person',
            'title_ot'=>'Confirmation of Claimant',
            'title_confirmation' => 'Confirmation',
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
            'joint' => 'Joint',

         ],

         'accident' => [

            'title' => 'Accident Information',

         ],

         'mc' => [

            'title' => 'Medical Certification',
            'title1' => 'HUS Information',

         ],

         'certification' => [

            'title' => 'Certification By Employer',

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

            'title' => 'Investigation Documents',

         ],

         'case_fact' => [

            'title' => 'Case Fact',
         ],

         'od_info' => [

            'title' => 'OD Info',
         ],

         'recommendation' => [

            'title' => 'Recommendation',
         ],

         'inconsistent' => [

            'title' => 'Inconsistency and Doubtful Info',
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

         'statement' => [
            'title' => 'Statement',
         ],
         'investigation_assistant' => [

            'title' => 'Investigation Assistant',
            'sender_note' => 'Sender Note',
            'office' => 'Office',
            'notes' => "Recipient's Notes",

         ],

         'appointment' => [

            'title' => 'Appointment',

         ],

         'investigation_document' => [

            'title' => 'Investigation Document',

         ],

         'supporting_document' => [

            'title' => 'Supporting Document',
            'title1' => 'Upload Document',

         ],

         'generate_document' => [

            'title' => 'Generate Document',

         ],

         'preparer' => [

            'title' => 'Preparer Information',

            'prepared_by' => 'Prepared By',
            'prepared_date' => 'Prepared Date',

         ],

         'query_opinion' => [

            'title' => 'Query and Opinion',

            'prepared_by' => 'Prepared By',
            'prepared_date' => 'Prepared Date',
            
         ],

      ],
            
   ],

   /* ======================================== ALL NOTICES (ACCIDENT, OD, INVALIDITY, DEATH & REVISION) ============================================== */

   'notice_accident' => [

      'PK' => [
         'accident_info' => [

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
            'during_work' => 'During Work',
            'during_emergency' => 'During Emergency',
            'during_travel' => 'During Travel Between Residence',
            'during_tarvel_time' => 'During Travel Time Allowed',
            'during_course' => 'During The Course of Employment Related Activities',
            'during_travel_related' => 'During Travel Related To Work',
            'others' => 'Others',
            'add_acc_place' => 'Address Accident Place', 
         ],

      ],

      'SCO' => [

         'investigation_doc' => [
            //Notice Accident
            'appendix50' => 'Panduan Soalan Pernyataan Kes Kemalangan KEMALANGAN SEMASA PERJALANAN ANTARA TEMPAT TINGGAL KEDIAMAN',
            'appendix51' => 'Panduan Soalan Pernyataan Kes Kemalangan SEMASA BEKERJA',
            'appendix52' => 'Panduan Soalan Pernyataan Kes Kemalangan SEMASA KECEMASAN',
            'appendix53' => 'Panduan Soalan Pernyataan Kes Kemalangan SEMASA MELAKUKAN LAIN-LAIN AKTIVITI LUARAN',
            'appendix54' => 'Panduan Soalan Pernyataan Kes Kemalangan SEMASA PERJALANAN BERKAITAN DENGAN PEKERJAAN',
            'appendix55' => 'Panduan Soalan Pernyataan Kes Kemalangan SEMASA PERJALANAN DALAM MASA REHAT YANG DIBENARKAN',
           
            //Question50
            '3_1' => '3.1',
            'question3_1' => 'Nyatakan jawatan, tarikh mula kerja , senarai tugas OB dan kaedah pembayaran gaji.',
            '3_2' => '3.2',
            'question3_2' => 'Adakah OB pernah bekerja dengan majikan lain 6 bulan ke belakang sebelum tarikh kemalangan? Sila nyatakan? ',
            '3_3' => '3.3',
            'question3_3' => 'Nyatakan masa kerja biasa termasuk kerja lebih masa, hari bekerja dan hari cuti OB?',
            '3_4' => '3.4',
            'question3_4' => 'Adakah OB mohon cuti pada hari kemalangan? ',
            '3_5' => '3.5',
            'question3_5' => 'Nyatakan tarikh, tempat dan masa kemalangan?',
            '3_6' => '3.6',
            'question3_6' => 'Bagaimana kemalangan berlaku ?',
            '3_7' => '3.7',
            'question3_7' => 'Apakah jenis kecederaan yang dialami? Kali pertama atau terdapat kecederaan terdahulu? Adakah pernah membuat tuntutan terdahulu?',
            '3_8' => '3.8',
            'question3_8' => 'Nyatakan tujuan dan kaedah perjalanan semasa kemalangan berlaku.',
            '3_9' => '3.9',
            'question3_9' => 'Adakah wujudnya saksi semasa kemalangan berlaku? Jika ADA, nyatakan nama dan no.tel saksi untuk dihubungi.',
            '3_10' => '3.10',
            'question3_10' => 'Siapakah orang pertama yang diberitahu tentang kemalangan? Nyatakan tarikh dan masa?',
            '3_11' => '3.11',
            'question3_11' => 'Nama dan alamat Hospital/ Klinik di mana pekerja mendapat rawatan pertama / tarikh rawatan?',
            '3_12' => '3.12',
            'question3_12' => 'Sila jelaskan sekiranya terdapat cuti sakit yang ketara tidak berturutan?',
            '3_13' => '3.13',
            'question3_13' => 'Sila jelaskan sekiranya OB bertukar tempat rawatan.',
            '3_14' => '3.14',
            'question3_14' => 'Nyatakan tempoh cuti sakit dan adakah OB bekerja dalam tempoh tersebut?',
            '3_15' => '3.15',
            'question3_15' => 'Adakah majikan menyediakan kerja ringan? Jika YA Adakah OB hadir bekerja bagi tempoh tersebut?',
            '3_16' => '3.16',
            'question3_16' => 'Bilakah OB kembali bekerja semula?',
            '3_17' => '3.17',
            'question3_17' => 'Sekiranya wujud ketidakseragaman dan kemunasabahan fakta (keraguan dari segi masa dan laluan kemalangan), 
                              dapatkan penjelasan perihal dan butiran aktiviti yang dilakukan sebelum kemalangan.',
            '3_18' => '3.18',
            'question3_18' => 'Sekiranya kemalangan menyebabkan KEMATIAN.',
            'question3_18a' =>  'a)	Bilakah tarikh kematian? ',
            'question3_18b' => 'b)	Maklumat waris, no telefon / alamat waris?',
            '3_19' => '3.19',
            'question3_19' => 'Adakah apa-apa maklumat tambahan yang ingin anda nyatakan?',
            '3_20' => '3.20',
            'question3_20' => 'Tempat dan masa penyataan diambil. (Cadangan Penambahbaikan Lampiran 1- Borang Penyataan)',
        
            //Question51
            '1_1' => '1.1',
            'question1_1' => 'Nyatakan jawatan, tarikh mula kerja , senarai tugas OB dan kaedah pembayaran gaji.',
            '1_2' => '1.2',
            'question1_2' => 'Adakah OB pernah bekerja dengan majikan lain 6 bulan ke belakang sebelum tarikh kemalangan? Sila nyatakan? ',
            '1_3' => '1.3',
            'question1_3' => 'Nyatakan masa kerja biasa termasuk kerja lebih masa, hari bekerja dan hari cuti OB? ',      
            '1_4' => '1.4',
            'question1_4' => 'Adakah gaji dibayar pada hari kemalangan?',  
            '1_5' => '1.5',
            'question1_5' => 'Apakah aktiviti yang dilakukan oleh OB semasa berlakunya kemalangan?',  
            '1_6' => '1.6',
            'question1_6' => 'Nyatakan tarikh, tempat dan masa kemalangan?',  
            '1_7' => '1.7',
            'question1_7' => 'Bagaimana kemalangan berlaku ?',  
            '1_8' => '1.8',
            'question1_8' => 'Apakah jenis kecederaan yang dialami? Kali pertama atau terdapat kecederaan terdahulu? Adakah pernah membuat tuntutan terdahulu?',  
            '1_9' => '1.9',
            'question1_9' => 'Adakah wujudnya saksi semasa kemalangan berlaku? Jika ADA, nyatakan nama dan no.tel saksi untuk dihubungi.',  
            '1_10' => '1.10',
            'question1_10' => 'Siapakah orang pertama yang diberitahu tentang kemalangan? Nyatakan tarikh dan masa?',  
            '1_11' => '1.11',
            'question1_11' => 'Nama dan Alamat Hospital/ Klinik di mana pekerja mendapat rawatan pertama / tarikh rawatan?',  
            '1_12' => '1.12',
            'question1_12' => 'Sila jelaskan sekiranya cuti sakit tidak berturutan dengan tarikh rawatan pertama.',  
            '1_13' => '1.13',
            'question1_13' => 'Sila jelaskan sekiranya terdapat cuti sakit yang ketara tidak berturutan? ',  
            '1_14' => '1.14',
            'question1_14' => 'Sila jelaskan sekiranya OB bertukar tempat rawatan.',  
            '1_15' => '1.15',
            'question1_15' => 'Nyatakan tempoh cuti sakit dan adakah OB bekerja dalam tempoh tersebut?',  
            '1_16' => '1.16',
            'question1_16' => 'Adakah majikan menyediakan kerja ringan? Jika YA ,adakah OB hadir bekerja bagi tempoh tersebut? ',  
            '1_17' => '1.17',
            'question1_17' => 'Bilakah OB kembali bekerja semula?',  
            '1_18' => '1.18',
            'question1_18' => 'Sekiranya kemalangan berlaku DI LUAR PREMIS MAJIKAN. Adakah aktiviti yang dilakukan oleh OB :-',
            'question1_18a' =>  'a)	Merupakan tugas hakiki?',
            'question1_18b' => 'b)	Mendapat kebenaran majikan?',  
            '1_19' => '1.19',
            'question1_19' => 'Sekiranya wujud ketidakseragaman dan kemunasabahan fakta (keraguan dari segi masa dan laluan kemalangan), 
            dapatkan penjelasan perihal dan butiran aktiviti yang dilakukan sebelum kemalangan.',  
            '1_20' => '1.20',
            'question1_20' => 'Sekiranya kemalangan menyebabkan KEMATIAN.',
            'question1_20a' =>  'a)	Bilakah tarikh kematian?', 
            'question1_20b' =>  'b)	Maklumat waris, no telefon / alamat waris? ',  
            '1_21' => '1.21',
            'question1_21' => 'Adakah apa-apa maklumat tambahan yang ingin anda nyatakan?',  
            '1_22' => '1.22',
            'question1_22' => 'Nyatakan tempat dan masa peryataan diambil. (penambahbaikan Lampiran 1- Borang Pernyataan)',  

            //Question52
            '2_1' => '2.1',
            'question2_1' => 'Nyatakan jawatan, tarikh mula kerja , senarai tugas OB dan kaedah pembayaran gaji.',
            '2_2' => '2.2',
            'question2_2' => 'Adakah OB pernah bekerja dengan majikan lain 6 bulan ke belakang sebelum tarikh kemalangan? Sila nyatakan?',
            '2_3' => '2.3',
            'question2_3' => 'Nyatakan masa kerja biasa termasuk kerja lebih masa, hari bekerja dan hari cuti OB?',
            '2_4' => '2.4',
            'question2_4' => 'Adakah gaji dibayar pada hari kemalangan?',
            '2_5' => '2.5',
            'question2_5' => 'Apakah aktiviti yang dilakukan oleh OB semasa berlakunya kemalangan?',
            '2_6' => '2.6',
            'question2_6' => 'Nyatakan tarikh, tempat dan masa kemalangan?',
            '2_7' => '2.7',
            'question2_7' => 'Bagaimana kemalangan berlaku ?',
            '2_8' => '2.8',
            'question2_8' => 'Apakah jenis kecederaan yang dialami? Kali pertama atau terdapat kecederaan terdahulu? Adakah pernah membuat tuntutan terdahulu?',
            '2_9' => '2.9',
            'question2_9' => 'Adakah wujudnya saksi semasa kemalangan berlaku? Jika ADA, nyatakan nama dan no.tel saksi untuk dihubungi.',
            '2_10' => '2.10',
            'question2_10' => 'Siapakah orang pertama yang diberitahu tentang kemalangan? Nyatakan tarikh dan masa?',
            '2_11' => '2.11',
            'question2_11' => 'Nama dan Alamat Hospital/ Klinik di mana pekerja mendapat rawatan pertama / tarikh rawatan?',
            '2_12' => '2.12',
            'question2_12' => 'Sila jelaskan sekiranya cuti sakit tidak berturutan dengan tarikh rawatan pertama.',
            '2_13' => '2.13',
            'question2_13' => 'Sila jelaskan sekiranya terdapat cuti sakit yang ketara tidak berturutan?',
            '2_14' => '2.14',
            'question2_14' => 'Sila jelaskan sekiranya OB bertukar tempat rawatan.',
            '2_15' => '2.15',
            'question2_15' => 'Nyatakan tempoh cuti sakit dan adakah OB bekerja dalam tempoh tersebut?',
            '2_16' => '2.16',
            'question2_16' => 'Adakah majikan menyediakan kerja ringan? Jika YA ,adakah OB hadir bekerja bagi tempoh tersebut?',
            '2_17' => '2.17',
            'question2_17' => 'Bilakah OB kembali bekerja semula?',
            '2_18' => '2.18',
            'question2_18' => 'Sekiranya wujud ketidakseragaman dan kemunasabahan fakta (keraguan dari segi masa dan laluan kemalangan), 
                              dapatkan penjelasan perihal dan butiran aktiviti yang dilakukan sebelum kemalangan.',
            '2_19' => '2.19',
            'question2_19' => 'Sekiranya kemalangan menyebabkan KEMATIAN.',
            'question2_19a' => 'a)	Bilakah tarikh kematian? ',
            'question2_19b' => 'b)	Maklumat waris, no telefon / alamat waris? ',
            '2_20' => '2.20',
            'question2_20' => 'Adakah apa-apa maklumat tambahan yang ingin anda nyatakan?',
            '2_21' => '2.21',
            'question2_21' => 'Nyatakan tempat dan masa peryataan diambil. (penambahbaikan Lampiran 1- Borang Pernyataan)',

            //Question53
            '6_1' => '6.1',
            'question6_1' => 'Nyatakan jawatan, tarikh mula kerja , senarai tugas OB dan kaedah pembayaran gaji.',
            '6_2' => '6.2',
            'question6_2' => 'Adakah OB pernah bekerja dengan majikan lain 6 bulan ke belakang sebelum tarikh kemalangan? Sila nyatakan?',
            '6_3' => '6.3',
            'question6_3' => 'Nyatakan masa kerja biasa termasuk kerja lebih masa, hari bekerja dan hari cuti OB.',
            '6_5' => '6.5',
            'question6_5' => 'Bagaimana kemalangan berlaku?',
            '6_6' => '6.6',
            'question6_6' => 'Apakah jenis kecederaan yang dialami? Kali pertama atau terdapat kecederaan terdahulu? Adakah pernah membuat tuntutan terdahulu?',
            '6_7' => '6.7',
            'question6_7' => 'Nyatakan tarikh, tempat dan masa kemalangan?',
            '6_8' => '6.8',
            'question6_8' => 'Adakah wujudnya saksi semasa kemalangan berlaku? Jika ADA, nyatakan nama dan no.tel saksi untuk dihubungi.',
            '6_9' => '6.9',
            'question6_9' => 'Siapakah orang pertama yang diberitahu tentang kemalangan? Nyatakan tarikh dan masa?',
            '6_10' => '6.10',
            'question6_10' => 'Nama dan alamat Hospital/ Klinik di mana pekerja mendapat rawatan pertama / tarikh rawatan?',
            '6_11' => '6.11',
            'question6_11' => 'Nyatakan tempoh cuti sakit dan adakah OB bekerja dalam tempoh tersebut?',
            '6_12' => '6.12',
            'question6_12' => 'Sila jelaskan sekiranya terdapat cuti sakit yang ketara tidak berturutan?',
            '6_13' => '6.13',
            'question6_13' => 'Sila jelaskan sekiranya OB bertukar tempat rawatan.',
            '6_14' => '6.14',
            'question6_14' => 'Adakah majikan menyediakan kerja ringan? Jika YA Adakah OB hadir bekerja bagi tempoh tersebut?',
            '6_15' => '6.15',
            'question6_15' => 'Bilakah OB kembali bekerja semula?',
            '6_16' => '6.16',
            'question6_16' => 'Adakah aktiviti yang dilakukan sebelum berlakunya kemalangan adalah merupakan suatu aktiviti umum atau anjuran majikan? ',
            '6_17' => '6.17',
            'question6_17' => 'Sekiranya wujud ketidakseragaman dan kemunasabahan fakta (keraguan dari segi masa dan laluan kemalangan), 
            dapatkan penjelasan perihal dan butiran aktiviti yang dilakukan sebelum kemalangan.',
            '6_18' => '6.18',
            'question6_18' => 'Sekiranya kemalangan menyebabkan KEMATIAN.',
            'question6_18a' => 'a)	Bilakah tarikh kematian? ',
            'question6_18b' => 'b)	Maklumat waris, no telefon / alamat waris?',
            '6_19' => '6.19',
            'question6_19' => 'Adakah apa-apa maklumat tambahan yang ingin anda nyatakan?',
            '6_20' => '6.20',
            'question6_20' => 'Tempat dan masa peryataan diambil. (penambahbaikan Lampiran 1- Borang Pernyataan)',
            
            //Question54
            '5_1' => '5.1',
            'question5_1' =>  'Nyatakan jawatan, tarikh mula kerja , senarai tugas OB dan kaedah pembayaran gaji.',
            '5_2' => '5.2',
            'question5_2' =>  'Adakah OB pernah bekerja dengan majikan lain 6 bulan ke belakang sebelum tarikh kemalangan? Sila nyatakan? ',
            '5_3' => '5.3',
            'question5_3' =>  'Nyatakan masa kerja biasa termasuk kerja lebih masa, hari bekerja dan hari cuti OB.',
            '5_4' => '5.4',
            'question5_4' =>  'Nyatakan masa rehat yang dibenarkan majikan.',
            '5_5' => '5.5',
            'question5_5' =>  '',
            '5_6' => '5.6',
            'question5_6' =>  'Bagaimana kemalangan berlaku?',
            '5_7' => '5.7',
            'question5_7' =>  'Apakah jenis kecederaan yang dialami? Kali pertama atau terdapat kecederaan terdahulu? Adakah pernah membuat tuntutan terdahulu?',
            '5_8' => '5.8',
            'question5_8' =>  'Nyatakan tarikh, tempat dan masa kemalangan?',
            '5_9' => '5.9',
            'question5_9' =>  'Adakah wujudnya saksi semasa kemalangan berlaku? Jika ADA, nyatakan nama dan no.tel saksi untuk dihubungi.',
            '5_10' => '5.10',
            'question5_10' =>  'Siapakah orang pertama yang diberitahu tentang kemalangan? Nyatakan tarikh dan masa? ',
            '5_11' => '5.11',
            'question5_11' =>  'Nama dan alamat Hospital/ Klinik di mana pekerja mendapat rawatan pertama / tarikh rawatan?',
            '5_12' => '5.12',
            'question5_12' =>  'Sila jelaskan sekiranya terdapat cuti sakit yang ketara tidak berturutan? ',
            '5_13' => '5.13',
            'question5_13' =>  'Sila jelaskan sekiranya OB bertukar tempat rawatan.',
            '5_14' => '5.14',
            'question5_14' =>  'Nyatakan tempoh cuti sakit dan adakah OB bekerja dalam tempoh tersebut?',
            '5_15' => '5.15',
            'question5_15' =>  'Adakah majikan menyediakan kerja ringan? Jika YA Adakah OB hadir bekerja bagi tempoh tersebut?',
            '5_16' => '5.16',
            'question5_16' =>  'Bilakah OB kembali bekerja semula?',
            '5_17' => '5.17',
            'question5_17' =>  'Adakah kemalangan berlaku DI DALAM WAKTU KERJA BIASA atau LUAR WAKTU KERJA BIASA?',
            '5_18' => '5.18',
            'question5_18' =>  'Apakah aktiviti yang dilakukan oleh OB semasa berlakunya kemalangan?',
            '5_19' => '5.19',
            'question5_19' =>  'Adakah aktiviti yang dilakukan oleh OB merupakan tugas hakiki atau atas arahan majikan?',
            '5_20' => '5.20',
            'question5_20' =>  'Sekiranya wujud ketidakseragaman dan kemunasabahan fakta (keraguan dari segi masa dan laluan kemalangan), 
                                 dapatkan penjelasan perihal dan butiran aktiviti yang dilakukan sebelum kemalangan.',
            '5_21' => '5.21',
            'question5_21' =>  'Sekiranya kemalangan menyebabkan KEMATIAN.',
            'question5_21a' => 'a)	Bilakah tarikh kematian? ',
            'question5_21b' => 'b)	Maklumat waris, no telefon / alamat waris?',
            '5_22' => '5.22',
            'question5_22' =>  'Adakah apa-apa maklumat tambahan yang ingin anda nyatakan?',
            '5_23' => '5.23',
            'question5_23' =>  'Tempat dan masa peryataan diambil. (penambahbaikan Lampiran 1- Borang Pernyataan)',
            
            //Question55
            '4_1' => '4.1',
            'question4_1' =>  'Nyatakan jawatan, tarikh mula kerja , senarai tugas OB dan kaedah pembayaran gaji.',
            '4_2' => '4.2',
            'question4_2' =>  'Adakah OB pernah bekerja dengan majikan lain 6 bulan ke belakang sebelum tarikh kemalangan? Sila nyatakan?',
            '4_3' => '4.3',
            'question4_3' =>  'Nyatakan masa kerja biasa termasuk kerja lebih masa, hari bekerja dan hari cuti OB.',
            '4_4' => '4.4',
            'question4_4' =>  'Nyatakan masa rehat yang dibenarkan majikan.',
            '4_5' => '4.5',
            'question4_5' =>  'Bagaimana kemalangan berlaku?',
            '4_6' => '4.6',
            'question4_6' =>  'Apakah jenis kecederaan yang dialami? Kali pertama atau terdapat kecederaan terdahulu? Adakah pernah membuat tuntutan terdahulu?',
            '4_7' => '4.7',
            'question4_7' =>  'Nyatakan tarikh, tempat dan masa kemalangan?',
            '4_8' => '4.8',
            'question4_8' =>  'Nyatakan tujuan dan kaedah perjalanan semasa kemalangan berlaku.',
            '4_9' => '4.9',
            'question4_9' =>  'Adakah tempat makan disediakan oleh majikan? Jika YA adakah pekerja juga dibenarkan keluar premis?',
            '4_10' => '4.10',
            'question4_10' =>  'Adakah wujudnya saksi semasa kemalangan berlaku? Jika ADA, nyatakan nama dan no.tel saksi untuk dihubungi.',
            '4_11' => '4.11',
            'question4_11' =>  'Siapakah orang pertama yang diberitahu tentang kemalangan? Nyatakan tarikh dan masa?',
            '4_12' => '4.12',
            'question4_12' =>  'Nama dan alamat Hospital/ Klinik di mana pekerja mendapat rawatan pertama / tarikh rawatan? ',
            '4_14' => '4.14',
            'question4_14' =>  'Sila jelaskan sekiranya terdapat cuti sakit yang ketara tidak berturutan?',
            '4_15' => '4.15',
            'question4_15' =>  'Sila jelaskan sekiranya OB bertukar tempat rawatan.',
            '4_16' => '4.16',
            'question4_16' =>  'Nyatakan tempoh cuti sakit dan adakah OB bekerja dalam tempoh tersebut?',
            '4_17' => '4.17',
            'question4_17' =>  'Adakah majikan menyediakan kerja ringan? Jika YA, adakah OB hadir bekerja bagi tempoh tersebut? ',
            '4_18' => '4.18',
            'question4_18' =>  'Bilakah OB kembali bekerja semula?',
            '4_19' => '4.19',
            'question4_19' =>  'Adakah wujud pemberhentian semasa perjalanan pergi atau balik makan? Jika YA, apakah tujuan pemberhentian perjalanan sebelum kemalangan berlaku?',
            '4_20' => '4.20',
            'question4_20' =>  'Sekiranya wujud ketidakseragaman dan kemunasabahan fakta (keraguan dari segi masa dan laluan kemalangan), 
                                 dapatkan penjelasan perihal dan butiran aktiviti yang dilakukan sebelum kemalangan. ',
            '4_21' => '4.21',
            'question4_21' =>  'Sekiranya kemalangan menyebabkan KEMATIAN.',
            'question4_21' =>  'a)	Bilakah tarikh kematian?' ,
            'question4_21' =>   'b)	Maklumat waris, no telefon / alamat waris?',
            '4_22' => '4.22',
            'question4_22' =>  'Adakah apa-apa maklumat tambahan yang ingin anda nyatakan? Sek.20, Sek.22, Sek.26, Jadual Keempat AKSP1969',
            '4_23' => '4.23',
            'question4_23' =>  'Tempat dan masa peryataan diambil. (penambahbaikan Lampiran 1- Borang Pernyataan)',

         ],

      ],

      'IO' => [
         'appointment' => [
               'title' => 'Appointment'            
         ],
      ],

   ],

   'notice_od' => [

      'PK' => [

         'medical_decision' => [
            'title' => 'Medical Board Decision',
         ],
      ],

      'SCO' => [

         'investigation_doc' => [
            //Notice OD
            'appendix64' => 'Panduan Soalan Pernyataan Kes Penyakit Khidmat  Hilang Pendengaran Akibat Bunyi Bising  (SEK 28, JADUAL KELIMA, PENYAKIT KHIDMAT)',
            'appendix65' => 'Panduan Soalan Pernyataan Kes Penyakit Khidmat Sakit Tulang Belakang Atau Tengkuk Back or Neck Pain',
            'appendix66' => 'Panduan Soalan Pernyataan Kes Penyakit Khidmat Asma Pekerjaan Occupational Asthma',
            'appendix67' => 'Panduan Soalan Pernyataan Kes Penyakit Khidmat Carpal Tunnel Syndrome CTS',
            'appendix68' => 'Panduan Soalan Pernyataan Kes Penyakit Khidmat Penyakit Kulit Pekerjaan Occupational Skin Disease',
            'appendix69' => 'Panduan Soalan Pernyataan Kes Penyakit Khidmat  Kanser Pekerjaan Occupation Cancer',
            'appendix70' => 'Panduan Soalan Pernyataan Kes Penyakit Khidmat Penyakit Paru-Paru Pekerjaan Occupational Lung Disease Silicosis , Asbestosis',
            'appendix71' => ' Panduan Soalan Pernyataan Kes Penyakit Khidmat Rotator Cuff Syndrome Supraspinatus Tendinitis',

            //Question 64
            '1_1' => '1.1',
            'question1_1' => 'Nyatakan jawatan, tarikh mula kerja , senarai tugas OB dan kaedah pembayaran gaji.',
            '1_2' => '1.2',
            'question1_2' => 'Adakah OB pernah bekerja dengan majikan lain 6 bulan ke belakang sebelum tarikh notis Penyakit Khidmat diterima? Sila nyatakan?',
            '1_3' => '1.3',
            'question1_3' => 'Nyatakan berapa lama masa kerja biasa termasuk kerja lebih masa, OB terdedah pada kawasan bising di tempat kerja.',
            '1_4' => '1.4',
            'question1_4' => 'Adakah OB bekerja dikawasan bising, nyatakan tempat / kawasan kerjanya.',
            '1_5' => '1.5',
            'question1_5' => 'Adakah OB pernah bekerja di majikan lain yang mana ia terdedah pada kawasan bising. Nyatakan nama dan alamat majikan terdahulu',
            '1_6' => '1.6',
            'question1_6' => 'Bila mula mendapat rawatan akibat masalah hilang pendengaran ? Adakah cuti sakit telah di perolehi, sila nyatakan. Jika dari hospital lain , adakah cuti sakit itu berkaitan dengan masalah pendengaran.',
            '1_7' => '1.7',
            'question1_7' => 'Adakah OB hadir bekerja dan dibayar gaji dalam tempoh cuti sakit / Sijil Kerja Ringan.',
            '1_8' => '1.8',
            'question1_8' => 'Nyatakan nama Hospital dimana OB mendapat rawatan',
            '1_9' => '1.9',
            'question1_9' => 'Adakah OB telah menjalani rawatan Audiogram',
            '1_10' => '1.10',
            'question1_10' => 'Adakah majkan ada membuat Laporan Audiometric Testing Screening tempat kerja',
            '1_11' => '1.11',
            'question1_11' => 'Adakah majikan ada membuat Personal Noise Monitoring dari pihak majikan',
            '1_12' => '1.12',
            'question1_12' => 'Sila nyatakan hobi / kegemaran OB dimasa lapang.',
            '1_13' => '1.13',
            'question1_13' => 'Sekiranya Penyakit Khidmat  menyebabkan KEMATIAN.',
            'question1_13a' => 'a)	Bilakah tarikh kematian? ',
            'question1_13b' => 'b)	Maklumat waris, no telefon / alamat waris? ',
            '1_14' => '1.14',
            'question1_14' => 'Adakah apa-apa maklumat tambahan yang ingin anda nyatakan? Seperti kemalangan terdahulu , jenis kecederaan, Pejabat Perkeso yang menguruskan kes. ',
            
            //Question 65
            '2_1' => '2.1',
            'question2_1' => 'Nyatakan jawatan, tarikh mula kerja , senarai tugas OB dan kaedah pembayaran gaji.', 
            '2_2' => '2.2',
            'question2_2' => 'Adakah OB pernah bekerja dengan majikan lain 6 bulan ke belakang sebelum tarikh Notis Penyakit Khidmat di terima? Sila nyatakan?', 
            '2_3' => '2.3',
            'question2_3' => 'Nyatakan berapa lama masa kerja biasa termasuk kerja lebih masa, OB terdedah pada kerja yang menyebabkan sakit belakang atau tengkuk. Nyatakan cara kerja OB', 
            '2_4' => '2.4',
            'question2_4' => 'Adakah OB pernah bekerja di majikan lain yang mana ia terdedah pada kerja yang menyebabkan sakit belakang atau tenguk. Nyatakan nama dan alamat majikan terdahulu', 
            '2_5' => '2.5',
            'question2_5' => 'Bila mula mendapat rawatan akibat masalah sakit belakang atau tengkuk ? Adakah cuti sakit telah di perolehi, sila nyatakan. Jika dari hospital lain , adakah cuti sakit itu berkaitan dengan masalah sakit belakang atau tengkuk.', 
            '2_6' => '2.6',
            'question2_6' => 'Adakah OB hadir bekerja dan dibayar gaji dalam tempoh cuti sakit / Sijil Kerja Ringan.', 
            '2_7' => '2.7',
            'question2_7' => 'Nyatakan nama Hospital dimana OB mendapat rawatan', 
            '2_8' => '2.8',
            'question2_8' => 'Adakah OB ada menjalani ujian MRI', 
            '2_9' => '2.9',
            'question2_9' => 'Adakah majikan ada membuat ujian Penilian Risiko Ergonomic.', 
            '2_10' => '2.10',
            'question2_10' => 'Dapatkan maklumat bergambar atau video – cara kerja OB focus kepada Risiko Ergonomik', 
            '2_11' => '2.11',
            'question2_11' => 'Sekiranya Penyakit Khidmat  menyebabkan KEMATIAN.',
            'question2_11a' => 'a)	Bilakah tarikh kematian? ',
            'question2_11b' => 'b)	Maklumat waris, no telefon / alamat waris? ', 
            '2_20' => '2.20',
            'question2_20' => 'Adakah apa-apa maklumat tambahan yang ingin anda nyatakan? Seperti kemalangan terdahulu , jenis kecederaan, Pejabat Perkeso yang menguruskan kes.', 

             //Question 66
             '3_1' => '3.1',
             'question3_1' => 'Nyatakan jawatan, tarikh mula kerja , senarai tugas OB dan kaedah pembayaran gaji.',
             '3_2' => '3.2',
             'question3_2' => 'Adakah OB pernah bekerja dengan majikan lain 6 bulan ke belakang sebelum tarikh Notis Penyakit Khidmat di terima? Sila nyatakan? ',
             '3_3' => '3.3',
             'question3_3' => 'Nyatakan berapa lama masa kerja biasa termasuk kerja lebih masa, OB terdedah pada kerja yang menyebabkan Asma Pekerjaan. Nyatakan cara kerja OB dan  Bahan yang selalu digunakan .',
             '3_4' => '3.4',
             'question3_4' => 'Adakah OB pernah bekerja di majikan lain yang mana ia terdedah pada kerja yang menyebabkan Asma Pekerjaan. Nyatakan nama dan alamat majikan terdahulu',
             '3_5' => '3.5',
             'question3_5' => 'Bila mula mendapat rawatan akibat masalah sakit Asma Pekerjaan ? Adakah cuti sakit telah di perolehi, sila nyatakan. Jika dari hospital lain , adakah cuti sakit itu berkaitan dengan masalah sakit Asma Pekerjaan.',
             '3_6' => '3.6',
             'question3_6' => 'Adakah OB hadir bekerja dan dibayar gaji dalam tempoh cuti sakit / Sijil Kerja Ringan.',
             '3_7' => '3.7',
             'question3_7' => 'Nyatakan nama Hospital dimana OB mendapat rawatan',
             '3_8' => '3.8',
             'question3_8' => 'Adakah OB ada menjalani ujian Laporan Spiromentry / Lung Function Test ',
             '3_9' => '3.9',
             'question3_9' => 'Adakah majikan ada menyimpan bukti pendedahan kepada hazad atau bahan yang terdedah dalam proses kerja',
             '3_10' => '3.10',
             'question3_10' => 'Dapatkan maklumat bergambar atau video – cara kerja OB focus kepada Risiko Penyakit Asma Pekerjaan.',
             '3_11' => '3.11',
             'question3_11' => 'Sekiranya Penyakit Khidmat menyebabkan KEMATIAN.',
             'question3_11a' => 'a)	Bilakah tarikh kematian? ',
             'question3_11a' => 'b)	Maklumat waris, no telefon / alamat waris? ',
             '3_12' => '3.12',
             'question3_12' => 'Adakah apa-apa maklumat tambahan yang ingin anda nyatakan? Seperti kemalangan terdahulu , jenis kecederaan, Pejabat Perkeso yang menguruskan kes.',

             //Question 67
             '4_1' => '4.1',
             'question4_1' => 'Nyatakan jawatan, tarikh mula kerja , senarai tugas OB dan kaedah pembayaran gaji.',
             '4_2' => '4.2',
             'question4_2' => 'Adakah OB pernah bekerja dengan majikan lain 6 bulan ke belakang sebelum tarikh Notis Penyakit Khidmat di terima? Sila nyatakan? ',
             '4_3' => '4.3',
             'question4_3' => 'Nyatakan berapa lama masa kerja biasa termasuk kerja lebih masa, OB terdedah pada kerja yang menyebabkan Carpal Tunnel Syndrome. Nyatakan cara kerja OB.',
             '4_4' => '4.4',
             'question4_4' => 'Adakah OB pernah bekerja di majikan lain yang mana ia terdedah pada kerja yang menyebabkan Carpal Tunnel Syndrome. Nyatakan nama dan alamat majikan terdahulu',
             '4_5' => '4.5',
             'question4_5' => 'Bila mula mendapat rawatan akibat masalah Carpal Tunnel Syndrome? Adakah cuti sakit telah di perolehi, sila nyatakan. Jika dari hospital lain , adakah cuti sakit itu berkaitan dengan masalah Carpal Tunnel Syndrome.',
             '4_6' => '4.6',
             'question4_6' => 'Adakah OB hadir bekerja dan dibayar gaji dalam tempoh cuti sakit / Sijil Kerja Ringan.',
             '4_7' => '4.7',
             'question4_7' => 'Nyatakan nama Hospital dimana OB mendapat rawatan',
             '4_8' => '4.8',
             'question4_8' => 'Adakah OB ada menjalani ujian Nerve Conduction Study (NCS)',
             '4_9' => '4.9',
             'question4_9' => 'Adakah majikan ada membuat Penilaian Risiko Ergonomik (ERA).',
             '4_10' => '4.10',
             'question4_10' => 'Dapatkan maklumat bergambar atau video – lokasi dan cara kerja OB focus kepada factor risiko ergonomik.',
             '4_11' => '4.11',
             'question4_11' => 'Sekiranya Penyakit Khidmat menyebabkan KEMATIAN.',
             'question4_11a' => 'a)	Bilakah tarikh kematian? ',
             'question4_11b' => 'b)	Maklumat waris, no telefon / alamat waris?',
             '4_12' => '4.12',
             'question4_12' => 'Adakah apa-apa maklumat tambahan yang ingin anda nyatakan? Seperti kemalangan terdahulu , jenis kecederaan, Pejabat Perkeso yang menguruskan kes.',
        
            //Question 68
            '5_1' => '5.1',
            'question5_1' => 'Nyatakan jawatan, tarikh mula kerja , senarai tugas OB dan kaedah pembayaran gaji.',
            '5_2' => '5.2',
            'question5_2' => 'Adakah OB pernah bekerja dengan majikan lain 6 bulan ke belakang sebelum tarikh Notis Penyakit Khidmat di terima? Sila nyatakan? ',
            '5_3' => '5.3',
            'question5_3' => 'Nyatakan berapa lama masa kerja biasa termasuk kerja lebih masa, OB terdedah pada kerja yang menyebabkan Penyakit Kulit Pekerjaan. Nyatakan cara kerja OB dan Bahan yang digunakan.',
            '5_4' => '5.4',
            'question5_4' => 'Adakah OB pernah bekerja di majikan lain yang mana ia terdedah pada kerja yang menyebabkan Penyakit Kulit Pekerjaan. Nyatakan nama dan alamat majikan terdahulu',
            '5_6' => '5.6',
            'question5_6' => 'Bila mula mendapat rawatan akibat masalah Penyakit Kulit Pekerjaan? Adakah cuti sakit telah di perolehi, sila nyatakan. Jika dari hospital lain , adakah cuti sakit itu berkaitan dengan masalah Penyakit Kulit Pekerjaan.',
            '5_7' => '5.7',
            'question5_7' => 'Adakah OB hadir bekerja dan dibayar gaji dalam tempoh cuti sakit / Sijil Kerja Ringan.',
            '5_8' => '5.8',
            'question5_8' => 'Nyatakan nama Hospital dimana OB mendapat rawatan',
            '5_9' => '5.9',
            'question5_9' => 'Adakah OB ada menjalani  Patch Test ',
            '5_10' => '5.10',
            'question5_10' => 'Adakah majikan ada menyimpan bukti pendedahan kepada hazad atau bahan yang terdedah dalam proses kerja',
            '5_11' => '5.11',
            'question5_11' => 'Dapatkan maklumat bergambar atau video – cara kerja OB fokus kepada Risiko Penyakit Kulit Pekerjaan.',
            '5_12' => '5.12',
            'question5_12' => 'Sekiranya Penyakit Khidmat menyebabkan KEMATIAN.',
            'question5_12a' => 'a)	Bilakah tarikh kematian?', 
            'question5_12b' =>  'b)	Maklumat waris, no telefon / alamat waris?',
            '5_13' => '5.13',
            'question5_13' => 'Adakah apa-apa maklumat tambahan yang ingin anda nyatakan? Seperti kemalangan terdahulu , jenis kecederaan, Pejabat Perkeso yang menguruskan kes.',

            //Question69
            '6_1' => '6.1',
            'question6_1' => 'Nyatakan jawatan, tarikh mula kerja , senarai tugas OB dan kaedah pembayaran gaji.',
            '6_2' => '6.2',
            'question6_2' => 'Adakah OB pernah bekerja dengan majikan lain 6 bulan ke belakang sebelum tarikh Notis Penyakit Khidmat di terima? Sila nyatakan? ',
            '6_3' => '6.3',
            'question6_3' => 'Nyatakan berapa lama masa kerja biasa termasuk kerja lebih masa, OB terdedah pada kerja yang menyebabkan Penyakit Kanser Pekerjaan. Nyatakan cara kerja OB dan Bahan yang digunakan.',
            '6_5' => '6.5',
            'question6_5' => 'Adakah OB pernah bekerja di majikan lain yang mana ia terdedah pada kerja yang menyebabkan Penyakit Kanser Pekerjaan. Nyatakan nama dan alamat majikan terdahulu',
            '6_6' => '6.6',
            'question6_6' => 'Bila mula mendapat rawatan akibat masalah Penyakit Kanser Pekerjaan? Adakah cuti sakit telah di perolehi, sila nyatakan. Jika dari hospital lain , adakah cuti sakit itu berkaitan dengan masalah Penyakit Kanser Pekerjaan.',
            '6_7' => '6.7',
            'question6_7' => 'Adakah OB hadir bekerja dan dibayar gaji dalam tempoh cuti sakit / Sijil Kerja Ringan.',
            '6_8' => '6.8',
            'question6_8' => 'Nyatakan nama Hospital dimana OB mendapat rawatan',
            '6_9' => '6.9',
            'question6_9' => 'Adakah OB ada menjalani ujian Laporan Spiromentry / Lung Function Test',
            '6_10' => '6.10',
            'question6_10' => 'Adakah majikan ada menyimpan bukti pendedahan kepada hazad atau bahan yang terdedah dalam proses kerja.',
            '6_11' => '6.11',
            'question6_11' => 'Sekiranya Penyakit Khidmat menyebabkan KEMATIAN.',
            'question6_11a' => 'a)	Bilakah tarikh kematian? ',
            'question6_11b' => ' b)	Maklumat waris, no telefon / alamat waris?',
            '6_12' => '6.12',
            'question6_12' => 'Adakah apa-apa maklumat tambahan yang ingin anda nyatakan? Seperti kemalangan terdahulu , jenis kecederaan, Pejabat Perkeso yang menguruskan kes.',

             //Question70
             '7_1' => '7.1',
             'question7_1' => 'Nyatakan jawatan, tarikh mula kerja , senarai tugas OB dan kaedah pembayaran gaji.',
             '7_2' => '7.2',
             'question7_2' => 'Adakah OB pernah bekerja dengan majikan lain 6 bulan ke belakang sebelum tarikh Notis Penyakit Khidmat di terima? Sila nyatakan? ',
             '7_3' => '7.3',
             'question7_3' => 'Nyatakan berapa lama masa kerja biasa termasuk kerja lebih masa, OB terdedah pada kerja yang menyebabkan Penyakit Paru-paru Pekerjaan. Nyatakan cara kerja OB dan Bahan yang digunakan.',
             '7_4' => '7.4',
             'question7_4' => 'Adakah OB pernah bekerja di majikan lain yang mana ia terdedah pada kerja yang menyebabkan Penyakit Paru-paru Pekerjaan. Nyatakan nama dan alamat majikan terdahulu',
             '7_5' => '7.5',
             'question7_5' => 'Bila mula mendapat rawatan akibat masalah Penyakit Paru-paru Pekerjaan? Adakah cuti sakit telah di perolehi, sila nyatakan. Jika dari hospital lain , adakah cuti sakit itu berkaitan dengan masalah Penyakit Paru-paru Pekerjaan.',
             '7_5d' => '7.5',
             'question7_5d' => 'Adakah OB hadir bekerja dan dibayar gaji dalam tempoh cuti sakit / Sijil Kerja Ringan.',
             '7_6' => '7.6',
             'question7_6' => 'Nyatakan nama Hospital dimana OB mendapat rawatan',
             '7_7' => '7.7',
             'question7_7' => 'Adakah OB ada menjalani ujian Laporan Spiromentry / Lung Function Test',
             '7_8' => '7.8',
             'question7_8' => 'Adakah OB ada menjalani ujian CT Scan / X-Ray dada yang terkini',
             '7_9' => '7.9',
             'question7_9' => 'Adakah majikan ada menyimpan bukti pendedahan kepada hazad atau bahan yang terdedah dalam proses kerja.',
             '7_10' => '7.10',
             'question7_10' => 'Dapatkan maklumat bergambar atau video – cara kerja OB fokus kepada Risiko Penyakit Paru-paru Pekerjaan.',
             '7_11' => '7.11',
             'question7_11' => 'Sekiranya Penyakit Khidmat menyebabkan KEMATIAN.',
             'question7_11a' => 'a)	Bilakah tarikh kematian? ',
             'question7_11b' => 'b)	Maklumat waris, no telefon / alamat waris?',
             '7_12' => '7.12',
             'question7_12' => 'Adakah apa-apa maklumat tambahan yang ingin anda nyatakan? Seperti kemalangan terdahulu , jenis kecederaan, Pejabat Perkeso yang menguruskan kes.',

             //Question71
             '8_1' => '8.1',
             'question8_1' => 'Nyatakan jawatan, tarikh mula kerja , senarai tugas OB dan kaedah pembayaran gaji.',
             '8_2' => '8.2',
             'question8_2' => 'Adakah OB pernah bekerja dengan majikan lain 6 bulan ke belakang sebelum tarikh Notis Penyakit Khidmat di terima? Sila nyatakan? ',
             '8_3' => '8.3',
             'question8_3' => 'Nyatakan berapa lama masa kerja biasa termasuk kerja lebih masa, OB terdedah pada kerja yang menyebabkan Rotator Cuff Syndrome . Nyatakan cara kerja OB dan Bahan yang digunakan.',
             '8_4' => '8.4',
             'question8_4' => 'Adakah OB pernah bekerja di majikan lain yang mana ia terdedah pada kerja yang menyebabkan Rotator Cuff Syndrome. Nyatakan nama dan alamat majikan terdahulu',
             '8_5' => '8.5',
             'question8_5' => 'Bila mula mendapat rawatan akibat masalah Rotator Cuff Syndrome? Adakah cuti sakit telah di perolehi, sila nyatakan. Jika dari hospital lain , adakah cuti sakit itu berkaitan dengan masalah Rotator Cuff Syndrome.',
             '8_6' => '8.6',
             'question8_6' => 'Adakah OB hadir bekerja dan dibayar gaji dalam tempoh cuti sakit / Sijil Kerja Ringan.',
             '8_7' => '8.7',
             'question8_7' => 'Nyatakan nama Hospital dimana OB mendapat rawatan',
             '8_8' => '8.8',
             'question8_8' => 'Adakah OB ada menjalani ujian MRI',
             '8_9' => '8.9',
             'question8_9' => 'Adakah majikan ada membuat ujian Penilian Risiko Ergonomic',
             '8_10' => '8.10',
             'question8_10' => 'Dapatkan maklumat bergambar atau video – cara kerja OB fokus kepada Rotator Cuff Syndrome',
             '8_11' => '8.11',
             'question8_11' => 'Sekiranya Penyakit Khidmat menyebabkan KEMATIAN.',
             'question8_11a' => 'a)	Bilakah tarikh kematian? ',
             'question8_11b' => 'b)	Maklumat waris, no telefon / alamat waris?',
             '8_12' => '8.12',
             'question8_12' => 'Adakah apa-apa maklumat tambahan yang ingin anda nyatakan? Seperti kemalangan terdahulu , jenis kecederaan, Pejabat Perkeso yang menguruskan kes.',
            ],
      ],
   ],

   'notice_invalidity' => [

      'PK' => [

      ],

      'SCO' => [

         'investigation_doc' => [
            //Notice Accident
            'appendix59' => 'Panduan Soalan Pernyataan Kes ILAT NOTIS KEILATAN SETELAH MENCAPAI UMUR 60 TAHUN (PERATURAN 46, PPAKSP 1971)',
            'appendix60' => 'Panduan Soalan Pernyataan Kes BANTUAN ILAT (SEK.21 AKSP 1969)',
            'appendix61' => 'Panduan Soalan Pernyataan Kes ILAT TARIKH MULA MASUK SKIM',
            'appendix62' => 'Panduan Soalan Pernyataan Kes ILAT Melibatkan Badan Berkanun',

            //Question59
            '1_1' => '1.1',
            'question1_1' =>  'Nyatakan jawatan, tarikh mula kerja , senarai tugas OB dan kaedah pembayaran gaji.',
            '1_2' => '1.2',
            'question1_2' =>  'Adakah OB pernah bekerja dengan majikan lain 6 bulan ke belakang sebelum tarikh notis Keilatan? Sila nyatakan?',
            '1_3' => '1.3',
            'question1_3' =>  'Adakah OB telah berhenti kerja, nyatakan tarikh. Jika OB masih bekerja setelah mencapai umur 60 tahun ,adakah OB masih menerima Gaji.',
            '1_4' => '1.4',
            'question1_4' =>  'Adakah OB menerima gaji bagi 24 bulan sebelum bulan notis keilatan diterima atau sebelum mencapai 60 tahun',
            '1_5' => '1.5',
            'question1_5' =>  'Apakah jenis Penyakit yang dihiidapi? ',
            '1_6' => '1.6',
            'question1_6' =>  'Bila OB mula mendapat cuti sakit atas penyakit yang dihadapi itu.',
            '1_7' => '1.7',
            'question1_7' =>  'Adakah cuti sakit lain di perolehi , selain dari cuti sakit diatas.(Dalam tempoh 6 bulan dari tarikh notis Keilatan)',
            '1_8' => '1.8',
            'question1_8' =>  'Sekiranya OB telah mula menjadi Ilat, adakah ia tidak lagi hadir bekerja ?. (Tidak lagi bekerja bermaksud tidak lagi membuat atau menjalankan kerja seperti yang ditetapkan dalam bidang tugasnya walaupun dia masih lagi dalam pekerjaan atau pengajian mana-mana majikan yang mengambilnya bekerja). ',
            '1_9' => '1.9',
            'question1_9' =>  'Adakah OB mengambil cuti tanpa gaji yang berpanjangan berikutan penyakitnya',
            '1_10' => '1.10',
            'question1_10' =>  'Sekiranya OB tidak hadir bekerja, Adakah ia masih menerima pendapatan. Adakah pendapatan itu dikira gaji oleh majikan atau sebagai satu pemberian ehsan @ sumbangan @ saguhati.',
            '1_11' => '1.11',
            'question1_11' =>  'Adakah OB pernah mengemukan notis Keilatan sebelum ini dan nyatakan pejabat yang menguruskannya.',
            
            //Question60
            '2_1' => '2.1',
            'question2_1' =>  'Nyatakan jawatan, tarikh mula kerja , senarai tugas OB dan kaedah pembayaran gaji.',
            '2_2' => '2.2',
            'question2_2' =>  'Adakah OB pernah bekerja dengan majikan lain 6 bulan ke belakang sebelum tarikh Notis Keilatan diterima? Sila nyatakan?',
            '2_3' => '2.3',
            'question2_3' =>  'Adakah OB telah berhenti kerja, nyatakan tarikh.',
            '2_4' => '2.4',
            'question2_4' =>  'Adakah OB menerima gaji bagi 24 bulan sebelum bulan notis keilatan diterima.',
            '2_5' => '2.5',
            'question2_5' =>  'Adakah OB bekerja dan menerima gaji dalam tempoh yang tiada caruman di CPO.',
            '2_6' => '2.6',
            'question2_6' =>  'Adakah OB masih bekerja dan menerima Gaji seperti di maklumat Borang 34, tetapi tiada caruman di CPO',
         
            //Question61
            '4_1' => '4.1',
            'question4_1' =>  'Nyatakan jawatan, tarikh mula kerja , senarai tugas OB dan kaedah pembayaran gaji.',
            '4_2' => '4.2',
            'question4_2' =>  'Adakah OB pernah bekerja dengan majikan lain 6 bulan ke belakang sebelum tarikh Notis Keilatan di terima? Sila nyatakan?',

            //Question62
            '3_1' => '3.1',
            'question3_1' =>  'Nyatakan jawatan, tarikh mula kerja , senarai tugas OB dan kaedah pembayaran gaji.',
            '3_2' => '3.2',
            'question3_2' =>  'Nyatakan status perjawatan  semasa bekerja di Badan Berkanun tersebut.',
            '3_3' => '3.3',
            'question3_3' =>  'Nyatakan bila tarikh OB di tawarkan ke jawatan Tetap',
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
            
            // NEW 04/09/2019

            'dependant_available' => 'Dependant Information Available?',

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
            'claimant_title' => 'Applicant Profile',

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
            'pension' => 'ILT Pension Receiver',

         ],

      ],

      'IO' => [

      ],

      'SAO' => [

      ],
   ],
];
