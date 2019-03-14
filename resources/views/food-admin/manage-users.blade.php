@extends('layouts.admin-master')
@section('title','Manage Users')
@section('menu')
@parent
@endsection
@section('content')
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget no-padding">
            <div class="panel panel-default table-responsive">
              <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>
                    <td><a href="" class="white-text templatemo-sort-by">ID <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Name <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Email<span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Gender<span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Phone <span class="caret"></span></a></td>
                     <td><a href="" class="white-text templatemo-sort-by">Type User <span class="caret"></span></a></td>
                    <td>Action</td>
                  </tr>
                </thead>
                <tbody>
                <?php 
                foreach($data['user'] as $key)
                {
                  ?>
                  <tr>
                    <td><?php echo $key->id ?></td>
                    <td><?php echo $key->name ?></td>
                    <td><?php echo $key->email ?></td>
                    <td>
                    <?php

                    if ($key->gender == 1)
                     $gen = "Nam";
                   elseif  ($key->gender == 0)
                    $gen = "Nữ";
                      echo $gen;
                      ?>
                          
                      </td>
                    <td><?php echo $key->phone; ?></td>
                    <td>

                    <?php

                    if ($key->user_level == 1)
                     $ad = "Admin";
                   elseif  ($key->user_level == 0)
                    $ad = "User";
                      echo $ad;

                     ?>
                      
                    </td>
                    <td><a href="{{ url('food-admin/'.$key->id.'/edit-user/')}}" class="templatemo-edit-btn btn-success">Edit</a>
                    <a href="{{ url('food-admin/'.$key->id.'/delete-user/')}}" class="templatemo-edit-btn btn-danger">Delete</a></td>
                  </tr> 
                   <?php } ?>             
                </tbody>
              </table>    
            </div>                          
          </div>    
@endsection
