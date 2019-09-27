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
                        <h5 class="card-title">Insured Person Information</h5>
                        <hr class="m-t-0 m-b-40">
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
                                        <input type="text" class="form-control-preview" value="New IC" disabled style="background-color:white">
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
                                        Occupation
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control-preview" value="Programmer" disabled style="background-color:white">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ================================== EMPLOYER INFORMATION ================================ -->
                        <h5 class="card-title">Employer Information</h5>
                        <hr class="m-t-0 m-b-40">
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
                                        <input type="text" class="form-control-preview" value="ABC" disabled style="background-color:white">
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
                                        <input type="text" class="form-control-preview" value="ABC" disabled style="background-color:white">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group-preview row">
                                    <div class="col-sm-9 label-preview">
                                        Sub-Business Entity List
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control-preview" value="ABC" disabled style="background-color:white">
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
                                        <input type="text" class="form-control-preview" value="ABC" disabled style="background-color:white">
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
@endsection