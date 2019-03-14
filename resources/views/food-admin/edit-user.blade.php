@extends('layouts.admin-master')
@section('title','Edit User Form')
@section('menu')
@parent
@endsection
@section('content')
<div class="container-fluid">
		<hr>
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-box">
					<div class="widget-content nopadding">
					<!-- <?php
					//echo var_dump($userById); die();
					?> -->
						<!-- BEGIN FORM -->
						<form action="{{URL::action('UsersAdminController@update_user')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
							 <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
							 <input type="hidden" name="id" value="{{$userById->id}}">

							<div class="form-group">
						      <label class="control-label col-sm-2" for="user_name">Name:</label>
						      <div class="col-sm-10">
						        <input type="text" required="required" class="form-control" id="user_name" placeholder="Enter user name" name="user_name" value="{{$userById->name}}">
						      </div>
						    </div>

						    <div class="form-group">
								<label class="control-label col-sm-2">Email</label>
								<div class="col-sm-10">
						        	<input type="email" required="required" class="form-control" id="user_email" placeholder="Enter user email" name="user_email" value="{{$userById->email}}">
						      	</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-2" for="user_gender">Choose a gender:</label>
								<div class="col-sm-10">
									<select name="user_gender" id="user_gender" class="form-control">
										<option value="1" <?php if ($userById->gender == 1) echo "selected='selected'"?>>
											Male
										</option>
										<option value="0" <?php if ($userById->gender == 0) echo "selected='selected'"?>>
											Female
										</option>
									</select> 
								</div> 
							</div>

							<div class="form-group">
								<label class="control-label col-sm-2">Phone</label>
								<div class="col-sm-10">
						        	<input type="text" required="required" class="form-control" id="user_phone" placeholder="Enter user phone" name="user_phone" value="{{$userById->phone}}">
						      </div>
							</div>

							<div class="form-group">        
								<div class="col-sm-offset-2 col-sm-10">
								    <button type="submit" name="edit_user" class="btn btn-success">Update</button>
								</div>
   							</div>
						</form>
						<!-- END FORM -->
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
