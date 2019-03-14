@extends('layouts.admin-master')
@section('title','Add Category Form')
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

						<!-- BEGIN FORM -->
						<form action="{{URL::action('FoodAdminController@update_category')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
							 <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
							 <input type="hidden" name="id" value="{{$cateById->id}}">
							<div class="form-group">
						      <label class="control-label col-sm-2" for="cate_name">Category name:</label>
						      <div class="col-sm-10">
						        <input type="text" required="required" class="form-control" id="food_name" placeholder="Enter category name" value="{{ $cateById->cate_name }}" name="cate_name">
						      </div>
						    </div>
					
							<div class="form-group">
								<label class="control-label col-sm-2">Choose an image :</label>
								<div class="col-sm-10">
									<input type="file" name="file" id="file">
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-2">Description</label>
									<div class="col-sm-10">
										<textarea style="width:100%;" class="span11" placeholder="Description" name = "cate_desc">{{ $cateById->cate_desc }}</textarea>
									</div>
							</div>

							<div class="form-group">        
								<div class="col-sm-offset-2 col-sm-10">
								    <button type="submit" name="add_category" class="btn btn-success">Update Category</button>
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
