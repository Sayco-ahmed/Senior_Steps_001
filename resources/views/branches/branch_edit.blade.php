@extends('layouts.master')

@section('title' , 'edit Branch')


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
                                    <span class="bread-blod"> edit branch </span>
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

        @include('errors.errors')

    <form action="{{route('branch.update',$requested_branch->id)}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('put') }}
            <div class="row res-ltr">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="sparkline16-list responsive-mg-b-30">
                        <div class="profile-img mg-b-23">
                            <img src="{{asset('uploads/branch/' . $requested_branch->branchImg)}}" alt="" class="image-preview" />
                        </div>
                        <div class="file-upload-inner ts-forms mg-b-15">
                            <div class="input prepend-big-btn">
                           
                                <div class="file-button" style="background-color: transparent;">
                                  
                                <input type="file" name="branchImg"  value="{{$requested_branch->branchImg}}" class="image" >
                                </div>
                                <!-- <input type="text" id="prepend-big-btn" placeholder="" autofocus type="button" > -->
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <div class="sparkline14-list">
                        <div class="sparkline14-hd">
                            <div class="main-sparkline14-hd">
                                <h1 style="text-align:left"> Branch Data </h1>
                            </div>
                        </div>
                        <div class="sparkline16-hd">
                            <div class="main-sparkline16-hd">
                                <h1 style="text-align:left">Main Data </h1>
                                <br />
                            </div>
                        </div>
                        <div class="sparkline16-graph">
                            <div class="date-picker-inner" style="text-align:left">
                                
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Branch Id</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="number" name="branchCode" class="form-control" placeholder="Branch Id" value="{{$requested_branch->branchCode}}">
                                    </div>
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Branch Name</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="text" name="branchName" class="form-control" placeholder="Branch Name" value="{{$requested_branch->branchName}}">
                                    </div>
                                </div>
                               
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Branch Address</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="text" name="branchAddress" class="form-control" placeholder="Branch Address" value="{{$requested_branch->branchAddress}}">
                                    </div>
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Branch url On Map</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="text" name="branchMapUrl" class="form-control" placeholder="Branch url On Map" value="{{$requested_branch->branchMapUrl}}">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-lg-6 col-lg-offset-3 col-md-6 col-lg-offset-3 col-sm-8 col-sm-offset-2 text-center ">
                                   
            <a href="{{url('/branch')}}" class="btn btn-primary waves-effect waves-light mg-b-15" >Back</a>
            
            <button type="submit"  class="btn btn-primary waves-effect waves-light mg-b-15"> save </button>
           
            </div>
    </form>
    </div>
</div>
@endsection

@section('this_page_scripts')
<script>
 $(".image").change(function () {

     if (this.files && this.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.image-preview').attr('src', e.target.result);
        }
       reader.readAsDataURL(this.files[0]);
    }

 });
</script>
@endsection

