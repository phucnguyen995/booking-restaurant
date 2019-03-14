@extends('layouts.admin-master')
@section('title','Manage Categories')
@section('menu')
@parent
@endsection
@section('content')
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget no-padding">
             <button style="font-size: 1.2em;"> <b><a style="color: #000;" href="{{ url('food-admin/add-category')}}"> Add Category</a></b></button>
            <div class="panel panel-default table-responsive">
              <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>
                    <td><a href="" class="white-text templatemo-sort-by">ID <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Cate Name <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Img <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Description <span class="caret"></span></a></td>
                    <td>Action</td>
                  </tr>
                </thead>
                <tbody>
                   <?php
                    foreach ($data['category'] as $key) {
                   ?>
                  <tr>
                    <td><?php echo $key->id ?></td>
                    <td><?php echo $key->cate_name ?></td>
                    <td><img style="width: 80px; height:80px;" src="img/category/<?php echo $key->cate_img ?>" alt=""></td>
                    <td><?php echo substr($key->cate_desc, 0 , 10)."..."; ?></td>
                    <td><a href="food-admin/<?php echo $key->id ?>/edit-category" class="templatemo-edit-btn btn-success">Edit</a>
                   <a href="food-admin/<?php echo $key->id ?>/delete-category" class="templatemo-edit-btn btn-danger" onclick="return confirm('Are you sure?');">Delete</a></td>
                  </tr>   
                  <?php } ?>                               
                </tbody>
              </table>    
            </div>                          
          </div>    
         
@endsection