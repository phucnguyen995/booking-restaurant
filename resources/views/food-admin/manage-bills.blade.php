@extends('layouts.admin-master')
@section('title','Manage Bills')
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
                    <td><a href="" class="white-text templatemo-sort-by">Customer Name<span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Total<span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Address<span class="caret"></span></a></td>
                     <td><a href="" class="white-text templatemo-sort-by">Phone<span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Order Date <span class="caret"></span></a></td>
                    <td style="text-align: center;">Action</td>
                  </tr>
                </thead>
                <tbody>


                <?php 
                foreach($bills as $key)
                {

                  ?>

                  <tr>
                    <td><?php echo $key->id ?></td>
                    <td><?php echo $key->user->name ?></td>
                    <td>$ <?php echo $key->total ?></td>
                    <td><?php echo $key->address ?></td>
                    <td><?php echo $key->user->phone ?></td>
                    <td><?php echo $key->date_order ?></td>
                    <td>
                      <a href="{{url('food-admin/'.$key->id.'/delete-bill/')}}" class="templatemo-edit-btn btn-danger" onclick="return alert('Are you sure?')">Delete</a>
                      <a href="food-admin/manage-bills/<?php echo $key->id ?>/bill-detail" class="templatemo-edit-btn btn-success">Detail <i class="fa fa-eye"></i></a>
                    </td>

                  </tr>
                 <?php } ?>             
                </tbody>
              </table>    
            </div>                          
          </div>    
@endsection
