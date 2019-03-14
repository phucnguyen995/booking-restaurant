@extends('layouts.admin-master')
@section('title','Search Result')
@section('menu')
@parent
@endsection
@section('content')
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget no-padding">
            <div class="panel panel-default table-responsive">
            <button style="font-size: 1.2em;"> <b><a style="color: #000;" href="{{ url('food-admin/add-food')}}"> Add Food</a></b></button>
              <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>
                    <td style="width:5%"><a href="" class="white-text templatemo-sort-by">ID <span class="caret"></span></a></td>
                    <td style="width:25%"><a href="" class="white-text templatemo-sort-by">Food Name <span class="caret"></span></a></td>
                    <td style="width:10%"><a href="" class="white-text templatemo-sort-by">Food Category <span class="caret"></span></a></td>
                    <td style="width:15%"><a href="" class="white-text templatemo-sort-by">Food Description <span class="caret"></span></a></td>
                    <td style="width:5%"><a href="" class="white-text templatemo-sort-by">Price <span class="caret"></span></a></td>
                    <td style="width:20%"><a href="" class="white-text templatemo-sort-by">Food img <span class="caret"></span></a></td>
                    <td style="width:20%">Action</td>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    foreach ($fResult as $key) {
                   ?>
                  <tr>
                    <td><?php echo $key['id']; ?></td>
                    <td><?php echo $key['food_name']; ?></td>
                    <td><?php echo $key['food_cate']; ?></td>
                    <td><?php echo substr($key['food_desc'], 0 , 10)."..."; ?></td>
                    <td><?php echo $key['food_price'] ?></td>
                
                    <td><img style="width: 100px; height:60px;" src="img/foods/<?php echo $key['food_img'] ?>" alt=""></td>
                    <td><a href="food-admin/<?php echo $key['id']; ?>/edit" class="templatemo-edit-btn btn-success">Edit</a>
                   <a href="food-admin/<?php echo $key['id']; ?>/delete" class="templatemo-edit-btn btn-danger" onclick="return confirm('Are you sure?');">Delete</a></td>
                  </tr>   
                  <?php } ?>                
                </tbody>
              </table> 
            </div>                          
          </div> 
          <?php
                 $fResult->setPath('food-admin/admin-search');
                  echo $fResult->appends(["keySearch"=>$_GET['keySearch']])->render(); 
               ?>   
@endsection
