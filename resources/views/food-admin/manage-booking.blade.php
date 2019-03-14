@extends('layouts.admin-master')
@section('title','Manage Booking')
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
                    <td><a class="white-text">Customer Name</a></td>
                    <td><a class="white-text">Phone</a></td>
                    <td><a class="white-text">Date Book</a></td>
                    <td><a class="white-text ">Time</a></td>
                    <td><a class="white-text ">Paty Size</span></a></td>
                    <td>Confirm</td>
                    <td>Action</td>
                  </tr>
                </thead>
                <tbody>
                  @foreach($book as $key)
                  <tr>
                    <td>{{$key->id}}</td>
                    <td>{{$key->user->name}}</td>
                    <td>{{$key->user->phone}}</td>
                    <td>{{$key->date_book}}</td>
                    <td>{{$key->time_book}}</td>
                    <td>{{$key->party_size}}</td>
                    @if ($key->confirm == 0)
                      <td class="check"><a onclick="return confirm('Are you sure?');" href="{{url('food-admin/manage-booking')}}?id={{$key->id}}&confirm=yes" class="templatemo-link"><i class="fa fa-times-circle"></i></a></td>
                    @else 
                    <td class="check"><a onclick="return confirm('Are you sure?');" href="{{url('food-admin/manage-booking')}}?id={{$key->id}}&confirm=no" class="templatemo-link"><i class="fa fa-check-square"></i></a></td>
                    @endif
                    <td><a onclick="return confirm('Are you sure?');" href="food-admin/{{$key->id}}/delete-booking" class="templatemo-link btn btn-danger">Delete</a></td>
                  </tr> 
                  @endforeach                  
                </tbody>
              </table> 
              <style type="text/css">
              .check {
                font-size: 2em;
                text-align: center;
                
              }
              .fa-times-circle {
                color: red;
              }
              .fa-times-circle:hover {
                color: green;
              }
              .fa-check-square {
                color: green;
              }
              .fa-check-square:hover {
                color: red;
              }
              </style>   
            </div>                          
          </div>    
@endsection
