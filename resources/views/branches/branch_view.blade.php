@extends('layouts.master')

@section('title' , 'Branch View')


@section('breadcome-area')
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-left">
                            <ul class="breadcome-menu pull-left" style="direction: ltr;">
                                <li>
                                    <a href="{{route('branch.index')}}"> All Branches </a><span class="bread-slash"> / </span>
                                </li>
                                <li>
                                    <span class="bread-blod"> Branch View </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('maincontent')
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container">
        <!-- <button class="btn btn-primary waves-effect waves-light mg-b-15" data-toggle="modal" data-target="#r">Back</button> -->
        
        <div class="row res-ltr" >
            <div class="col-lg-6 col-lg-offset-3 col-sm-12 col-xs-12" style="margin-bottom: 20px;">
                <div class="profile-info-inner">
                    <div class="profile-img">
                        <img src="{{asset('uploads/branch/' . $requested_branch->branchImg)}}" alt="" />
                    </div>
                    <div class="profile-details-hr">
                        
                        <div class="row text-center">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="address-hr">
                                    <p><b>ID</b><br /> {{$requested_branch->branchCode}} </p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                    <p><b>Branch name</b><br /> {{$requested_branch->branchName}}</p>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-lg-offset-3 col-sm-12 col-xs-12" style="margin-bottom: 20px;">
                <div class="profile-info-inner">
                    <div class="profile-img">

                        {{-- https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6049.881319200985!2d-74.00151372674895!3d40.69730452928296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a47df06b185%3A0xc889234bc07c42ee!2sBrooklyn+Heights%2C+Brooklyn%2C+NY+11201!5e0!3m2!1sen!2sus!4v1461598289488 --}}

                        <iframe  width="100%" height="450px" src="{{$requested_branch->branchMapUrl}}"  frameborder="0" style="border:0" allowfullscreen></iframe>

                    </div>
                    <div class="profile-details-hr">
                        
                       
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                <div class="address-hr">
                                    <p><b>Branch address</b><br />{{$requested_branch->branchAddress}} 
                                    </p>
                                </div>
                            </div>
                            {{-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                    <p><b>Google Map </b><br /> {{$requested_branch->branchMapUrl}}</p>
                                </div>
                            </div> --}}
                        </div>
                        
                    </div>
                </div>
            </div>                  
            
        </div>
        <br>
    <a href="{{route('branch.index')}}" class="btn btn-primary waves-effect waves-light mg-b-15 col-lg-2 col-lg-offset-5 col-sm-6 col-sm-offset-3  col-xs-6 col-xs-offset-3">Back</a>

    </div>
</div>

@endsection

