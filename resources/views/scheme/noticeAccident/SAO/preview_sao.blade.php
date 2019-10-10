@extends('general.layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')


<!-- Column -->
<div class="my-3 my-md-5">
    <div class="row" >
        <div class="col-lg-12">
            <div class="row" id="rowindex">

                <div class="col-md-12">
                        <span class="title-beside-green">Preview</span>

                    <div class="card text-left" id="cardindex">
                        <div class="card-body" id="cardbody">
                            <table>
                                <thead>
                                    <tr>
                                        <td><span class="no_bold">@lang('form/scheme.general.green_header.name')</span>&nbsp; <span class="no_bold">@lang('form/scheme.general.green_header.dash')</span>&nbsp; <span class="no_bold">@lang('form/scheme.general.green_header.idno')</span></td>
                                    </tr>
                                    <tr>
                                        <td><label class="no_margin">Putri Nor Shamiera Natasha Binti Azizan Shah - 940117015674</label></td>
                                    </tr>
                                    <tr>
                                        <td><label></label></td>
                                    </tr>
                                    
                                    <tr>
                                        <td><span class="no_bold">@lang('form/scheme.general.green_header.scheme_ref_no')</span>&nbsp; <span class="no_bold">@lang('form/scheme.general.green_header.dash')</span>&nbsp; <span class="no_bold">@lang('form/scheme.general.green_header.date_of_death')</span></td>
                                    </tr>
                                    <tr>
                                        <td><label class="no_margin">A31FOT181234569-NTU004 - 31/01/2018</label></td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-body">
                    <form action="/back" method="POST"> 
                    <div id="accordion2" role="tablist" class="accordion" >

                        <!-- ================================== INSURED PERSON INFORMATION ================================ -->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingZero0">
                                    <h6 class="mb-0">                           
                                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseZero0" aria-expanded="false" aria-controls="collapseZero0">
                                                    <h4 class="card-title"><i class="fa fa-plus"></i> Insured Person Information</h4>
                                            </a>
                                    </h6>
                            </div>
                            <div id="collapseZero0" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                <span class="no_bold">Name</span>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="Putri Nor Shamiera Natasha Binti Azizan Shah" disabled style="background-color:transparent">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Identification Type
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Identification No
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="000726106294" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Date of Birth
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="26/07/2000" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Race
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="Malay" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Gender
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="Female" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Occupation (Based on Form 34)
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="Programmer" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Occupation
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="Armed Forces" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Sub Occupation
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="Programmer" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Occupation
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="Armed Forces" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Address
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="No 5, Taman Merak" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                State
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="Selangor" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                City
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="Subang Jaya" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Postcode
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="44000" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                P.O Box
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="456" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Locked Bag
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="345" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                W.D.T
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="567" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                House Telephone No.
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="042589637" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Mobile No.
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="0165893647" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Email Address
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="nisa@gmail.com" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Nationality
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="Malaysia" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ================================== CASE INFO ================================ -->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingZero0">
                                <h6 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#caseInfo" aria-expanded="false" aria-controls="caseInfo">
                                                <h4 class="card-title"><i class="fa fa-plus"></i> Case Info </h4>
                                        </a>
                                </h6>
                            </div>
                            <div id="caseInfo" class="collapse" role="tabpanel" aria-labelledby="headingZero0">  
                                {{-- <h5 class="card-title">Employer Information</h5>
                                <hr class="m-t-0 m-b-40"> --}}
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                <span class="no_bold">Case Category</span>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="0004" disabled style="background-color:transparent">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Scheme Ref. No.
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="HEITECH PADU BERHAD" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Type of Scheme
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="456" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Notice
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="657" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Notice Date
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="555" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Form 34 Received Date
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Registration Date
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="A09KI892" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                    SOCSO Registration Office
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                    SOCSO Office
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="Subang Jaya, Selangor" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ================================== EMPLOYER INFORMATION ================================ -->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingZero0">
                                <h6 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#EmployerInformation" aria-expanded="false" aria-controls="EmployerInformation">
                                                <h4 class="card-title"><i class="fa fa-plus"></i> Employer Information</h4>
                                        </a>
                                </h6>
                            </div>
                            <div id="EmployerInformation" class="collapse" role="tabpanel" aria-labelledby="headingZero0">  
                                {{-- <h5 class="card-title">Employer Information</h5>
                                <hr class="m-t-0 m-b-40"> --}}
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                <span class="no_bold">Employer Code</span>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="0004" disabled style="background-color:transparent">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Employer Name
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="HEITECH PADU BERHAD" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Business Entity
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="456" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Sub-Business Entity
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="657" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Sub-Business Entity List
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="555" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Service Type
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Industry Code
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="A09KI892" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Sub-Industry Code List
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Address
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="Subang Jaya, Selangor" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                State
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="Selangor" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                City
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="Subang Jaya" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Postcode
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="42700" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                P.O Box
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="A09KI892" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Locked Bag
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="543" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                W.D.T
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="A09KI892" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Telephone No.
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="012 2277927" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Fax No.
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="03 33778873" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Email Address
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="mal@gmail.com" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <!-- ================================== ACCIDENT INFORMATION ================================ -->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingZero0">
                                <h6 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#AccidentInformation" aria-expanded="false" aria-controls="AccidentInformation">
                                                <h4 class="card-title"><i class="fa fa-plus"></i> Accident Information</h4>
                                        </a>
                                </h6>
                            </div>
                            <div id="AccidentInformation" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
                            {{-- <h5 class="card-title">Accident Information</h5>
                            <hr class="m-t-0 m-b-40"> --}}
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                            Accident Date
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control-preview" value="11/05/2019" disabled style="background-color:white">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                            Accident Time
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control-preview" value="11:00AM" disabled style="background-color:white">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                            Place of Accident
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control-preview" value="Inside of the company" disabled style="background-color:white">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                            When Accident Happen?
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control-preview" value="During Emergency" disabled style="background-color:white">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                            How the Accident Happened?
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control-preview" value="Jatuh Tangga" disabled style="background-color:white">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                            Reason for Travelling on The Day of Accident (For road accident only)
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control-preview" value="Send document" disabled style="background-color:white">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                            Injury Description
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control-preview" value="Patah tangan" disabled style="background-color:white">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                            Is Accident Date a Working Day For The Insured Person
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control-preview" value="Yes" disabled style="background-color:white">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                            Start Working Time on Accident Day
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control-preview" value="9:00AM" disabled style="background-color:white">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                            Time Of Recess On The Accident Date
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control-preview" value="10:00AM" disabled style="background-color:white">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                            Ending Time of Work on The Accident Date
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control-preview" value="6:00AM" disabled style="background-color:white">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                            Name of Witness(If any)
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control-preview" value="AFIQAH BINTI AIMAN" disabled style="background-color:white">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                            Witness Phone No.
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control-preview" value="013 2456865" disabled style="background-color:white">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group-preview row">
                                        <div class="col-sm-9 label-preview">
                                                Name and Address of Clinic Which Provides First Treatment
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control-preview" value="Klinik Subang, USJ7" disabled style="background-color:white">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        
                         <!-- ================================== WAGES INFORMATION ================================ -->
                        {{-- <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingZero0">
                                <h6 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#wagesInfo" aria-expanded="false" aria-controls="wagesInfo">
                                                <h4 class="card-title"><i class="fa fa-plus"></i> Wages Information </h4>
                                        </a>
                                </h6>
                            </div>
                            <div id="wagesInfo" class="collapse" role="tabpanel" aria-labelledby="headingZero0">     
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Employer Code
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="HEITECH PADU BERHAD" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Employer Name
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                    Employment Start Date
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                    Employment End Date
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                    Details of Wages for the Period of 6 Consecutive Months Before the Month of Death
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        
                        <!-- ================================== SOCSO OFFICE  ================================ -->
                        {{-- <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingZero0">
                                <h6 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#socsoOffice" aria-expanded="false" aria-controls="socsoOffice">
                                                <h4 class="card-title"><i class="fa fa-plus"></i> SOCSO Office </h4>
                                        </a>
                                </h6>
                            </div>
                            <div id="socsoOffice" class="collapse" role="tabpanel" aria-labelledby="headingZero0">       
                          
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                State
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                City
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                            
                        <!-- ================================== CERTIFICATION ================================ -->
                        {{-- <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingZero0">
                                <h6 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#certificationEmployer" aria-expanded="false" aria-controls="certificationEmployer">
                                                <h4 class="card-title"><i class="fa fa-plus"></i> Certification By Employer </h4>
                                        </a>
                                </h6>
                            </div>
                            <div id="certificationEmployer" class="collapse" role="tabpanel" aria-labelledby="headingZero0">   
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Name
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                    Designation
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Date
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        <!-- ================================== BANK ================================ -->
                        {{-- <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingZero0">
                                <h6 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#bankInformation" aria-expanded="false" aria-controls="bankInformation">
                                                <h4 class="card-title"><i class="fa fa-plus"></i> Bank Information </h4>
                                        </a>
                                </h6>
                            </div>
                            <div id="bankInformation" class="collapse" role="tabpanel" aria-labelledby="headingZero0">  

                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Payment Mode
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="EFT" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Bank Location
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="Johor" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Bank Name
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="CIMB Bank" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Bank Account No.
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="765432346" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Type of Account
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Bank Address
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="Subang" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        <!-- ================================== CONFIRMATION  ================================ -->
                        {{-- <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingZero0">
                                <h6 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#confirmation" aria-expanded="false" aria-controls="confirmation">
                                                <h4 class="card-title"><i class="fa fa-plus"></i>Confirmation of Insured Person/Dependant/Claimant </h4>
                                        </a>
                                </h6>
                            </div>
                            <div id="confirmation" class="collapse" role="tabpanel" aria-labelledby="headingZero0">  
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Acceptance Stamp Date
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="20/07/2019" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Completion Completed?
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="24/07/2019" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Remark
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="Send to IO" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        <!-- ================================== INCONSISTENCY  ================================ -->
                        {{-- <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingZero0">
                                <h6 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#inconsistencyDoubtful" aria-expanded="false" aria-controls="inconsistencyDoubtful">
                                                <h4 class="card-title"><i class="fa fa-plus"></i> Inconsistency and Doubtful Info </h4>
                                        </a>
                                </h6>
                            </div>
                            <div id="inconsistencyDoubtful" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
                                <div class="row p-t-20">
                                    <div class="col-md-12">
                                        <table class="table table-sm table-bordered" data-toggle-column="first" id="table_inconsistent">
                                            <thead>
                                                <tr>
                                                    <th style='width:5%'>No.</th> 
                                                    <th style='width:15%'>@lang('scheme/inconsistency.attr.section')</th> 
                                                    <th style='width:15%'>@lang('scheme/inconsistency.attr.item')</th> 
                                                    <th style='width:15%'>@lang('scheme/inconsistency.attr.noticedetails')</th> 
                                                    <th style='width:10%'>@lang('scheme/inconsistency.attr.supportDoc')</th>
                                                    <th style='width:10%'>@lang('scheme/inconsistency.attr.correcData')</th>
                                                    <th style='width:5%'>Justification</th>
                                                    <th style='width:5%'>@lang('scheme/inconsistency.attr.findings')</th>
                                                    <th style='width:15%'>@lang('scheme/inconsistency.attr.consistent')</th>
                                                    <th style='width:5%'>@lang('scheme/inconsistency.attr.action')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr data-expanded="true" class="workrow" id="tr0_0">
                                                    <td>
                                                        <div class="col-md-0">
                                                            1.
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <select class="form-control" name="hussts[]">
                                                            <option value="" selected>Please select</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <select class="form-control" name="hussts[]">
                                                            <option value="" selected>Please select</option>
                                                            <option value="" >Accident Time</option>
                                                            <option value="" >Accident Date</option>
                                                            <option value="" >Place Of Accident </option>
                                                            <option value="" >Injury Type</option>
                                                            <option value="" >How Accident Happen</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input id="noticedetails" name="noticedetails" type="text" value="" class="form-control" >
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input type="text" id="supportDoc" name="supportDoc" value="" class="form-control " >
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input type="text" id="correctdata" name="correctdata" value="" class="form-control" >
                                                    </td>
                                                    <td>
                                                        <div class="col-md-0">
                                                            <button type="button" name="action" id="action" class="btn btn-facebook waves-effect waves-light" data-toggle="modal" data-target="#exampleModal3" data-whatever="@fat">View</button>
                                                        </div>
                                                        <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3">
                                                            <div class="modal-dialog modal-xl" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header  card-title">
                                                                        <h4 class="modal-title" id="exampleModalLabel3">@lang('scheme/index.attr.inconsistency')</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        @include('scheme.noticeAccident.SCO.inconsistency_popup') 
                                                                    </div>
                            
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">@lang('scheme/accidentDetails.close')</button>
                                                                        <button type="submit" class="btn btn-primary">@lang('scheme/accidentDetails.save')</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </td> 
                                                    <td>
                                                        <div class="custom-control custom-checkbox mr-sm-2 mb-3">
                                                            <input type="checkbox" class="custom-control-input" id="checkbox0" value="check">
                                                            <label class="custom-control-label" for="checkbox0"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input type="text" id="consistent" name="consistent" value="" class="form-control" readonly>
                                                    </td>
                                                    <td>
                                                        <button type="button"  class="btn btn-sm btn-danger btn_del_workinconsistency" id="del_attended_work0_0"><i class="fas fa-trash-alt fa-sm"></i></button>
                                                        </td>
                                                </tr>
                                            </tbody>
                                        </table> 
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                         <!-- ================================== APPOINTMENT  ================================ -->
                        {{-- <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingZero0">
                                <h6 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#appointment" aria-expanded="false" aria-controls="appointment">
                                                <h4 class="card-title"><i class="fa fa-plus"></i> Appointment </h4>
                                        </a>
                                </h6>
                            </div>
                            <div id="appointment" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
                                <div class="row p-t-20">
                                    <div class="col-md-12">
                                        <table id="table_appointment" class="table table-bordered" data-toggle-column="first">
                                            <thead>
                                            <tr>
                                                <th style='width:8%'>@lang('scheme/appointment.attr.investigate_date')</th>
                                                <th style='width:8%'>@lang('scheme/appointment.attr.investigate_time')</th>
                                                <th style='width:8%'>@lang('scheme/appointment.attr.location')</th>
                                                <th style='width:8%'>Attendees</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr data-expanded="true">
                                                <td><input type="date" name="investigate_date" id="investigate_date" class="form-control"></td>
                                                <td><div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                                    data-autoclose="true">
                                                    <input type="text" class="form-control" name="time" value="">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                                    </div>
                                                    </div>
                                                </td>
                                                <td><select class="form-control clearFields" name="interviewLocation">
                                                        <option selected hidden readonly value="please select">@lang('scheme/noticetype.attr.please_select')</option>
                                                        <option value='' >SOCSO Office</option>
                                                        <option value='' >Employer Premise</option>
                                                        <option value='' >Insured Person Premise</option>
                                                        <option value='' >Others</option>
                                                    </select>
                                                </td>
                                                <td><input type="text" class="form-control" name="category_interviewee"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        
                        <!-- ================================== INVESTIGATION  ================================ -->
                        {{-- <div class="card-header" role="tab" id="headingZero0">
                            <h6 class="mb-0">                           
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#investigationDoc" aria-expanded="false" aria-controls="investigationDoc">
                                            <h4 class="card-title"><i class="fa fa-plus"></i> Investigation Document</h4>
                                    </a>
                            </h6>
                            <div id="investigationDoc" class="collapse" role="tabpanel" aria-labelledby="headingZero0">  
                                
                            </div>
                        </div> --}}

                         <!-- ================================== QUERY AND OPINION  ================================ -->
                        {{-- <div class="card-header" role="tab" id="headingZero0">
                            <h6 class="mb-0">                           
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#queryOpinion" aria-expanded="false" aria-controls="queryOpinion">
                                            <h4 class="card-title"><i class="fa fa-plus"></i>Query and Opinion</h4>
                                    </a>
                            </h6>
                            <div id="queryOpinion" class="collapse" role="tabpanel" aria-labelledby="headingZero0">  
                                <h6 class="card-title-sub">Query</h6>
                                <hr>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                    Description
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                    Route to:
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="000726106294" disabled style="background-color:transparent">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ================================== OPINION ================================ -->
                                <h6 class="card-title-sub">Opinion</h6>
                                <hr>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Type of Opinion
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Purpose of Reference
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="000726106294" disabled style="background-color:transparent">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Case Details
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Investigation Details
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="000726106294" disabled style="background-color:transparent">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Doubtful/Issue
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Recommendation
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="000726106294" disabled style="background-color:transparent">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        <!-- ================================== RECOMMENDATION  ================================ -->
                        <div class="card-header" role="tab" id="headingZero0">
                            <h6 class="mb-0">                           
                                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#resommendation" aria-expanded="false" aria-controls="resommendation">
                                            <h4 class="card-title"><i class="fa fa-plus"></i>Recommendation</h4>
                                    </a>
                            </h6>
                            <div id="resommendation" class="collapse" role="tabpanel" aria-labelledby="headingZero0">  
                                <h5 class="card-title-sub"> Recommendation </h5>
                                <hr>
                                <table class="table table-sm table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th style='width:2%'>No</th>
                                            <th style='width:8%'>Recommendation Date</th>  
                                            <th style='width:20%'>Recommend By</th>
                                            <th style='width:15%'>Role</th>
                                            <th style='width:8%'>Employment Injury</th>
                                            <th style='width:12%'>@lang('scheme/mc.attr.action')</th>
                                        </tr>
                                    </thead>
                                    <tbody class='align-middle'>
                                        <tr> 
                                            <td>1</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="col-md-0">
                                                    <button type="button" name="action" id="action" class="btn btn-facebook waves-effect waves-light" data-toggle="modal" data-target="#recommendationview_popup" data-whatever="@fat">View</button>
                                                    <button type="button" name="action" id="btn_recommendation_update" class="btn btn-facebook waves-effect waves-light" data-toggle="modal" data-target="#recommendation_update" data-whatever="@fat">Update</button>
                                                </div>
                                            </td> 
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                    Recommendation
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                    Reason reject
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="000726106294" disabled style="background-color:transparent">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="card-title-sub"> Potentials </h5>
                                <hr>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                    Potential HUK
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                    Potential Invalidity
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="000726106294" disabled style="background-color:transparent">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- FIFTH SCHEDULE--}}
                                <h5 class="card-title-sub"> Fifth Schedule </h5>
                                <hr>
                                <div class='row'>
                                    <div class="col-md-12 col-lg-12">
                                        <div class="card">
                                            <table class="table table-sm table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th style='width:2%'>No</th>
                                                        <th style='width:8%'>Employment Injury</th>  
                                                        <th style='width:20%'>Causative Agent</th>
                                                        <th style='width:15%'>Reference</th>
                                                    </tr>
                                                </thead>
                                                <tbody class='align-middle'>
                                                    <tr> 
                                                        <td>1</td>
                                                        <td><select name="employment_injury" id="employment_injury" class="form-control">
                                                                <option value=""  >Please Select</option> 
                                                                <option value=""></option>  
                                                            </select>
                                                        </td>
                                                        <td><select name="causative_agent" id="causative_agent" class="form-control">
                                                                <option value=""  >Please Select</option> 
                                                                <option value=""></option>  
                                                            </select>
                                                        </td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                {{-- WRONG NOTICE TYPE SECTION--}}
                                <h5 class="card-title-sub"> Wrong Notice Type </h5>
                                <hr>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                    Recommended Notice Type
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                    Justification
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="000726106294" disabled style="background-color:transparent">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{--CASE TRANSFER SECTION--}}
                                <h5 class="card-title-sub">Case Transfer </h5>
                                <hr>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                    State
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:transparent">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                    Preferred Socso
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="000726106294" disabled style="background-color:transparent">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ================================== WAGES INFORMATION ================================ -->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingZero0">
                                <h6 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#wagesInfo1" aria-expanded="false" aria-controls="wagesInfo1">
                                                <h4 class="card-title"><i class="fa fa-plus"></i> Wages Information </h4>
                                        </a>
                                </h6>
                            </div>
                            <div id="wagesInfo1" class="collapse" role="tabpanel" aria-labelledby="headingZero0">     
                                {{-- <h5 class="card-title">Wages Information</h5>
                                <hr class="m-t-0 m-b-40"> --}}
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Employer Code
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="HEITECH PADU BERHAD" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Employer Name
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                    Employment Start Date
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                    Employment End Date
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                        <div class="col-md-12">
                                            <div class="form-group-preview row">
                                                <div class="col-sm-9 label-preview">
                                                        Details of Wages for the Period of 6 Consecutive Months Before the Month of Death
                                                </div>
                                                <div class="col-md-12">
                                                    <table  id="" class="table table-sm table-bordered" data-toggle-column="first">
                                                        <thead>
                                                            <tr>
                                                                <th data-breakpoints="xs">@lang('table-header.wages.num')</th>
                                                                <th>@lang('table-header.wages.year')</th>
                                                                <th>@lang('table-header.wages.month')</th>
                                                                <th data-breakpoints="xs sm">@lang('table-header.wages.wages')</th>
                                                                <th data-breakpoints="xs">@lang('table-header.wages.contribution_paid')</th>
                                                                <th data-breakpoints="xs">Contribution Payable (RM)</th>
                                                                <th data-breakpoints="xs">Contribution Surplus</th>
                                                                <th data-breakpoints="xs">Reject</th>
                                                                <th data-breakpoints="xs">Reason</th>
                                                            </tr>
                                                        </thead>
                                                            <tr data-expanded="true" class="workrow">
                                                                <td></td> 
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                        <tbody>
                                                            <tr data-expanded="true" class="workrow" >
                                                                <td></td> 
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>

                        <!-- ================================== BANK ================================ -->
                        {{-- <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingZero0">
                                <h6 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#bankInformation1" aria-expanded="false" aria-controls="bankInformation1">
                                                <h4 class="card-title"><i class="fa fa-plus"></i> Bank Information </h4>
                                        </a>
                                </h6>
                            </div>
                            <div id="bankInformation1" class="collapse" role="tabpanel" aria-labelledby="headingZero0">  
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Payment Mode
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="EFT" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Bank Location
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="Johor" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Bank Name
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="CIMB Bank" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Bank Account No.
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="765432346" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Type of Account
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group-preview row">
                                            <div class="col-sm-9 label-preview">
                                                Bank Address
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-preview" value="Subang" disabled style="background-color:white">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        <!-- ================================== HUS ================================ -->
                        <div class="card m-b-0">
                            <div class="card-header" role="tab" id="headingZero0">
                                <h6 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#medicalCert" aria-expanded="false" aria-controls="medicalCert">
                                                <h4 class="card-title"><i class="fa fa-plus"></i> HUS Info</h4>
                                        </a>
                                </h6>
                            </div>
                            <div id="medicalCert" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
                                <div class="row p-t-20">
                                <div class="col-md-12">
                                    <table  id="table-medical-details0" class="table table-sm table-bordered" data-toggle-column="first">
                                        <thead>
                                            <tr>
                                                <th style='width:15%'>@lang('scheme/mc.attr.type_hus')</th> 
                                                <th style='width:20%'>@lang('scheme/mc.attr.nameAddress_clinic')</th> 
                                                <th style='width:8%'>@lang('scheme/mc.attr.start_date')</th>
                                                <th style='width:8%'>@lang('scheme/mc.attr.end_date')</th>
                                                <th style='width:10%'>@lang('scheme/mc.attr.days_work')</th>
                                                <th style='width:15%'>HUS Recommendation</th>
                                            </tr>
                                        </thead>
            
            
                                        @if(!empty($husinfo->parent))
                                            @foreach($husinfo->parent as $key => $parent)
            
                                            <tr data-expanded="true" class="workrow" id="tr0_{{$key}}">
                                                <td></td> 
                                                <td></td>
                                                <td></td>
                                                <td> </td>
                                                <td> </td>
                                                <td></td>
                                            </tr>
                                            @if(!empty($husinfo->child[$key]))
                                            {
                                                    @foreach($husinfo->child[$key] as $num => $child)
                                                    {
                                                            <!-- @php print_r($child); @endphp  -->
                                                        <tr id="tr'+i+'_'+j+'_'+w+'">
                                                            <td> </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td> </td>
                                                            <td></td> 
                                                        </tr>
                                        
                                                @endforeach
                                                @endif
                                                <script> 
                                                    $(document).ready(function() {
                                                var key = {!! $key !!};
                                                console.log(key);
                                                if(key !=0){
                                                    add_attend_work(0,key); 
                                                }
                                                
                                                });
                                                </script>
                                            @endforeach
                                                
                                        @else
                                        <tbody>
                                            <tr data-expanded="true" class="workrow" id="tr0_0">
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                        @endif  
                                    </table> 
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-12">
                            <div class="form-actions">
                                <button type="submit" class="btn btn waves-effect waves-light btn-success">Submit</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">Back</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    //redirect to specific tab
    $(document).ready(function () {
    //$('#tabMenu a[href="#{{ old('tab') }}"]').tab('show')
    });
    
    $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
        $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
    });
    
</script>

@endsection