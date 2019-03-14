@extends('layouts.admin-master')
@section('title','Add Food Form')
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
						<form action="{{URL::action('FoodAdminController@add_food')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
							 <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
							<div class="form-group">
						      <label class="control-label col-sm-2" for="food_name">Food:</label>
						      <div class="col-sm-10">
						        <input type="text" required="required" class="form-control" id="food_name" placeholder="Enter food name" name="food_name">
						      </div>
						    </div>

							<div class="form-group">
								<label class="control-label col-sm-2" for="food_cate">Choose a food type :</label>
								<div class="col-sm-10">
									<select required="required" name="food_cate" id="food_cate" class="form-control">
										@foreach ($cates as $key)
										<option value="{{ $key->id}}">{{ $key->cate_name}}</option>
										@endforeach
									</select> 
								</div>
							</div>
					
							<div class="form-group">
								<label class="control-label col-sm-2">Choose an image :</label>
								<div class="col-sm-10">
									<input required="required" type="file" name="file" id="file" onchange="return fileValidation()">
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-2">Description</label>
									<div class="col-sm-10">
										<textarea style="width:100%;" class="span11" placeholder="Description" name = "food_desc"></textarea>
									</div>
							</div>

							<div class="form-group">
						      <label class="control-label col-sm-2">Price:</label>
						      <div class="col-sm-10">
						        <input required="required" type="number" max="999" class="form-control" placeholder="Enter price" name="food_price">
						      </div>
						    </div>

							<div class="form-group">        
								<div class="col-sm-offset-2 col-sm-10">
								    <button type="submit" name="add_food" class="btn btn-success">Add food</button>
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
<script type="text/javascript">
	function fileValidation(){
		var fileInput = document.getElementById('file');
		var filePath = fileInput.value;//lấy giá trị input theo id
		var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;//các tập tin cho phép
		//Kiểm tra định dạng
		if(!allowedExtensions.exec(filePath)){
		alert('Vui lòng upload các file có định dạng: .jpeg/.jpg/.png.');
		fileInput.value = '';
		}
	}
</script>
