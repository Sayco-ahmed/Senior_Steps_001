
@extends('layouts.master')

@section('title' , 'Add Users')


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
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">

            <div class="row res-ltr">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="sparkline16-list responsive-mg-b-30">
                        <div class="profile-img mg-b-23">
                            <img src="img/items/00.jpg" alt="" />
                        </div>
                        <div class="file-upload-inner ts-forms mg-b-15">
                            <div class="input prepend-big-btn">

                                <div class="file-button" style="background-color: transparent;">

                                    <input type="file" name="branch_image"
                                        onchange="document.getElementById('prepend-big-btn').value = this.value;">
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
                                <h1 style="text-align:left"> User Data </h1>
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
                                    <label>User Id</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="number" name="User_Id" class="form-control"
                                            placeholder="User Id">
                                    </div>
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>User Name</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="text" name="User_name" class="form-control"
                                            placeholder="User name">
                                    </div>
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left" id="passconta">
                                    <label>Password</label>
                                    <input type="password" name="password" id="password"
                                        placeholder="Enter the password" class="form-control">
                                    <i class="glyphicon glyphicon-eye-open" id="togglePassword"></i>


                                    <script>
                                        const togglePassword = document.querySelector('#togglePassword');
                                        const password = document.querySelector('#password');
                                        togglePassword.addEventListener('click', function (e) {
                                            // toggle the type attribute
                                            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                                            password.setAttribute('type', type);
                                            // toggle the eye slash icon
                                            this.classList.toggle('glyphicon-eye-close');
                                        });
                                    </script>
                                </div>


                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>User Full Name</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="text" name="lab_address" class="form-control"
                                            placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>User Hire Date</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="date" name="lab_map_url" class="form-control"
                                            placeholder="Hire Date">
                                    </div>
                                </div>

                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>User Mobile</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="number" name="lab_map_url" class="form-control"
                                            placeholder="User Mobile">
                                    </div>
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>User Mobile 2</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="number" name="lab_map_url" class="form-control"
                                            placeholder="User Mobile 2">
                                    </div>
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>User Email</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="email" name="lab_map_url" class="form-control"
                                            placeholder="User Email">
                                    </div>
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>User Address</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="text" name="lab_address" class="form-control"
                                            placeholder="User Address">
                                    </div>
                                </div>
                                <div class="form-group data-custon-pick">

                                    <div class="input-mark-inner mg-b-22">

                                        
                                            <div class="list" tabindex="-1">
                                                <div class="filter"><input style="display: none;" type="text"
                                                        placeholder="Filter options...">
                                                </div>
                                                
                                            </div>
                                            <select id="demo" >
                                                <option value="">Choose Branch</option>
                                                <option value="Branch 1">mohandsen</option>
                                                <option value="Branch 2">dokki</option>
                                                <option value="Branch 3">nasr city</option>
                                                <option value="Branch 4">makram</option>
                                                <option value="Branch 5">alex</option>
                                                <option value="Branch 6">giza</option>
                                                <option value="Branch 7">fayoum</option>
                                                <option value="Branch 8">cairo</option>
                                            
                                            </select>
                                        
                                    </div>

                                </div>

                                <div class="form-group data-custon-pick">

                                    <div class="input-mark-inner mg-b-22">


                                        <div class="list" tabindex="-1">
                                            <div class="filter"><input style="display: none;" type="text"
                                                    placeholder="Filter options...">
                                            </div>
                                            
                                        </div>
                                        <select id="demo2" >
                                            <option value="">Choose Role</option>
                                            <option value="Branch 1">Super Manager</option>
                                            <option value="Branch 2">Manager</option>
                                            <option value="Branch 3">Super admin</option>
                                            <option value="Branch 4">Admin</option>
                                            <option value="Branch 5">super user</option>
                                            <option value="Branch 6">User</option>
                                            <option value="Branch 7">Gest</option>
                                            
                                        
                                        </select>
                                    </div>
                                </div>

                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary waves-effect waves-light mg-b-15 active">
                                        <input type="radio" name="options" id="option1" checked> Active
                                    </label>
                                    <label class="btn btn-primary waves-effect waves-light mg-b-15">
                                        <input type="radio" name="options" id="option2"> interested
                                    </label>
                                    <label class="btn btn-primary waves-effect waves-light mg-b-15">
                                        <input type="radio" name="options" id="option3"> Not Active
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div
                class="col-lg-6 col-lg-offset-3 col-md-6 col-lg-offset-3 col-sm-8 col-sm-offset-2 text-center ">

                <a href="Users.html" class="btn btn-primary waves-effect waves-light mg-b-15">Back</a>
                <a href="Users.html" class="btn btn-primary waves-effect waves-light mg-b-15">Save</a>

            </div>
        </form>
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