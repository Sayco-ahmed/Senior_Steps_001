

@extends('layouts.master')

@section('title' , 'All Users')


@section('breadcome-area')
    
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-right">
                            <div class="breadcome-heading pull-right">
                                <form role="search" class="sr-input-func">
                                    <input type="text" placeholder="...search " class="search-int form-control"
                                        style="text-align:left" name="branch_search">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-left">
                            <ul class="breadcome-menu pull-left" style="direction: ltr;">
                                <li>
                                    <a href="index.html"> Home </a><span class="bread-slash"> / </span>
                                </li>
                                <li>
                                    <span class="bread-blod"> Users </span>
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
<div class="contacts-area mg-b-15">
    <div class="container">


        <div style="direction:ltr!important" class="text-left">
            <!-- <button  data-toggle="modal" data-target="#r">Add</button> -->
        <a href="{{route('user/create')}}" class="btn btn-primary waves-effect waves-light mg-b-15">Add</a>
        </div>


        <div class="row res-ltr " >
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="student-inner-std res-mg-b-30">
                    <div class="student-img">
                        <img src="img/branch/1.jpg" alt=""   />
                    </div>
                    <div class="student-dtl ">
                        <h2>User Name</h2>
                        <div class="col-sm-12 text-center" style="padding: 15px;">
                            
                            
                            
                            <p class="dp col-sm-12">User Full Name</p>
                            <p class="dp col-sm-12">Role</p>
                            <p class="dp col-sm-12">Branch</p>
                            
                        </div>

                        <br />
                        <div class="product-buttons text-center ">
                            <a href="Users_view.html"><button data-toggle="tooltip" title="View"
                                    class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                            <!--<button data-toggle="modal" data-target="#add" title="New" class="pd-setting-ed"><i class="fa fa-file" aria-hidden="true"></i></button>-->
                            <a href="Users_edit.html"><button data-toggle="tooltip" title="Edit"
                                    class="pd-setting-ed"><i class="fa fa-pencil-square-o"
                                        aria-hidden="true"></i></button></a>
                                        <button data-toggle="modal" data-target="#del" title="Trash"
                                        class="pd-setting-ed"><i class="fa fa-trash-o"
                                            aria-hidden="true"></i></button>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="student-inner-std res-mg-b-30">
                    <div class="student-img">
                        <img src="img/branch/2.jpg" alt="" />
                    </div>
                    <div class="student-dtl ">
                        <h2>User Name</h2>
                        <div class="col-sm-12 text-center" style="padding: 15px;">
                            
                            
                            
                            <p class="dp col-sm-12">User Full Name</p>
                            <p class="dp col-sm-12">Role</p>
                            <p class="dp col-sm-12">Branch</p>
                            
                        </div>

                        <br />
                        <div class="product-buttons text-center ">
                            <a href="Users_view.html"><button data-toggle="tooltip" title="View"
                                    class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                            <!--<button data-toggle="modal" data-target="#add" title="New" class="pd-setting-ed"><i class="fa fa-file" aria-hidden="true"></i></button>-->
                            <a href="Users_edit.html"><button data-toggle="tooltip" title="Edit"
                                    class="pd-setting-ed"><i class="fa fa-pencil-square-o"
                                        aria-hidden="true"></i></button></a>
                                        <button data-toggle="modal" data-target="#del" title="Trash"
                                        class="pd-setting-ed"><i class="fa fa-trash-o"
                                            aria-hidden="true"></i></button>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="student-inner-std res-mg-b-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                    <div class="student-img">
                        <img src="img/branch/3.jpg" alt=""   />
                    </div>
                    <div class="student-dtl ">
                        <h2>User Name</h2>
                        <div class="col-sm-12 text-center" style="padding: 15px;">
                            
                            
                            
                            <p class="dp col-sm-12">User Full Name</p>
                            <p class="dp col-sm-12">Role</p>
                            <p class="dp col-sm-12">Branch</p>
                            
                        </div>

                        <br />
                        <div class="product-buttons text-center ">
                            <a href="Users_view.html"><button data-toggle="tooltip" title="View"
                                    class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                            <!--<button data-toggle="modal" data-target="#add" title="New" class="pd-setting-ed"><i class="fa fa-file" aria-hidden="true"></i></button>-->
                            <a href="Users_edit.html"><button data-toggle="tooltip" title="Edit"
                                    class="pd-setting-ed"><i class="fa fa-pencil-square-o"
                                        aria-hidden="true"></i></button></a>
                                        <button data-toggle="modal" data-target="#del" title="Trash"
                                        class="pd-setting-ed"><i class="fa fa-trash-o"
                                            aria-hidden="true"></i></button>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="student-inner-std res-tablet-mg-t-30 dk-res-t-pro-30">
                    <div class="student-img">
                        <img src="img/branch/4.jpg" alt=""  />
                    </div>
                    <div class="student-dtl ">
                        <h2>User Name</h2>
                        <div class="col-sm-12 text-center" style="padding: 15px;">
                            
                            
                            
                            <p class="dp col-sm-12">User Full Name</p>
                            <p class="dp col-sm-12">Role</p>
                            <p class="dp col-sm-12">Branch</p>
                            
                        </div>

                        <br />
                        <div class="product-buttons text-center ">
                            <a href="Users_view.html"><button data-toggle="tooltip" title="View"
                                    class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                            <!--<button data-toggle="modal" data-target="#add" title="New" class="pd-setting-ed"><i class="fa fa-file" aria-hidden="true"></i></button>-->
                            <a href="Users_edit.html"><button data-toggle="tooltip" title="Edit"
                                    class="pd-setting-ed"><i class="fa fa-pencil-square-o"
                                        aria-hidden="true"></i></button></a>
                                        <button data-toggle="modal" data-target="#del" title="Trash"
                                        class="pd-setting-ed"><i class="fa fa-trash-o"
                                            aria-hidden="true"></i></button>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row res-ltr" >
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="student-inner-std mg-t-30">
                    <div class="student-img">
                        <img src="img/branch/1.jpg" alt=""  />
                    </div>
                    <div class="student-dtl ">
                        <h2>User Name</h2>
                        <div class="col-sm-12 text-center" style="padding: 15px;">
                            
                            
                            
                            <p class="dp col-sm-12">User Full Name</p>
                            <p class="dp col-sm-12">Role</p>
                            <p class="dp col-sm-12">Branch</p>
                            
                        </div>

                        <br />
                        <div class="product-buttons text-center ">
                            <a href="Users_view.html"><button data-toggle="tooltip" title="View"
                                    class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                            <!--<button data-toggle="modal" data-target="#add" title="New" class="pd-setting-ed"><i class="fa fa-file" aria-hidden="true"></i></button>-->
                            <a href="Users_edit.html"><button data-toggle="tooltip" title="Edit"
                                    class="pd-setting-ed"><i class="fa fa-pencil-square-o"
                                        aria-hidden="true"></i></button></a>
                                        <button data-toggle="modal" data-target="#del" title="Trash"
                                        class="pd-setting-ed"><i class="fa fa-trash-o"
                                            aria-hidden="true"></i></button>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="student-inner-std mg-t-30">
                    <div class="student-img">
                        <img src="img/branch/2.jpg" alt=""  />
                    </div>
                    <div class="student-dtl  ">
                        <h2>User Name</h2>
                        <div class="col-sm-12 text-center" style="padding: 15px;">
                            
                            
                            
                            <p class="dp col-sm-12">User Full Name</p>
                            <p class="dp col-sm-12">Role</p>
                            <p class="dp col-sm-12">Branch</p>
                            
                        </div>

                        <br />
                        <div class="product-buttons text-center ">
                            <a href="Users_view.html"><button data-toggle="tooltip" title="View"
                                    class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                            <!--<button data-toggle="modal" data-target="#add" title="New" class="pd-setting-ed"><i class="fa fa-file" aria-hidden="true"></i></button>-->
                            <a href="Users_edit.html"><button data-toggle="tooltip" title="Edit"
                                    class="pd-setting-ed"><i class="fa fa-pencil-square-o"
                                        aria-hidden="true"></i></button></a>
                                        <button data-toggle="modal" data-target="#del" title="Trash"
                                        class="pd-setting-ed"><i class="fa fa-trash-o"
                                            aria-hidden="true"></i></button>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="student-inner-std mg-t-30">
                    <div class="student-img">
                        <img src="img/branch/3.jpg" alt=""  />
                    </div>
                    <div class="student-dtl ">
                        <h2>User Name</h2>
                        <div class="col-sm-12 text-center" style="padding: 15px;">
                            
                            
                            
                            <p class="dp col-sm-12">User Full Name</p>
                            <p class="dp col-sm-12">Role</p>
                            <p class="dp col-sm-12">Branch</p>
                            
                        </div>

                        <br />
                        <div class="product-buttons text-center ">
                            <a href="Users_view.html"><button data-toggle="tooltip" title="View"
                                    class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                            <!--<button data-toggle="modal" data-target="#add" title="New" class="pd-setting-ed"><i class="fa fa-file" aria-hidden="true"></i></button>-->
                            <a href="Users_edit.html"><button data-toggle="tooltip" title="Edit"
                                    class="pd-setting-ed"><i class="fa fa-pencil-square-o"
                                        aria-hidden="true"></i></button></a>
                                        <button data-toggle="modal" data-target="#del" title="Trash"
                                        class="pd-setting-ed"><i class="fa fa-trash-o"
                                            aria-hidden="true"></i></button>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="student-inner-std mg-t-30">
                    <div class="student-img">
                        <img src="img/branch/4.jpg" alt=""  />
                    </div>
                    <div class="student-dtl ">
                        <h2>User Name</h2>
                        <div class="col-sm-12 text-center" style="padding: 15px;">
                            
                            
                            
                            <p class="dp col-sm-12">User Full Name</p>
                            <p class="dp col-sm-12">Role</p>
                            <p class="dp col-sm-12">Branch</p>
                            
                        </div>

                        <br />
                        <div class="product-buttons text-center ">
                            <a href="Users_view.html"><button data-toggle="tooltip" title="View"
                                    class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                            <!--<button data-toggle="modal" data-target="#add" title="New" class="pd-setting-ed"><i class="fa fa-file" aria-hidden="true"></i></button>-->
                            <a href="Users_edit.html"><button data-toggle="tooltip" title="Edit"
                                    class="pd-setting-ed"><i class="fa fa-pencil-square-o"
                                        aria-hidden="true"></i></button></a>
                                        <button data-toggle="modal" data-target="#del" title="Trash"
                                        class="pd-setting-ed"><i class="fa fa-trash-o"
                                            aria-hidden="true"></i></button>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('this_page_scripts')
         <!--Delete-->
	 <div id="del" class="modal modal-edu-general fullwidth-popup-InformationproModal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header header-color-modal bg-color-2">
					<h4 class="modal-title" style="text-align:left">Delete Lab</h4>
					<div class="modal-close-area modal-close-df">
						<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
					</div>
				</div>
				<div class="modal-body">
					<span class="educate-icon educate-danger modal-check-pro information-icon-pro"> </span>
					<h2>Lab Name</h2>
					<h4>Do you want to delete this Lab</h4>
				</div>
				<div class="modal-footer info-md">
					<a href="#">delete</a>
					<a data-dismiss="modal" href="#">cancel</a>
					
				</div>
			</div>
		</div>
	</div>
	<!--/Delete-->
@endsection