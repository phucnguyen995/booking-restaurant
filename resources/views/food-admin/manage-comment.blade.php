@extends('layouts.admin-master')
@section('title','Manage Comment')
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
                    <td><a href="" class="white-text templatemo-sort-by">Comment Content<span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Food Name<span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Food Image<span class="caret"></span></a></td>
            
                    <td>Action</td>
                  </tr>
                </thead>
                <tbody>
                <?php 
                foreach($comment as $cmt)
                {
                  ?>
                  <tr>
                    <td><?php echo $cmt->id ?></td>
                    <td><?php echo $cmt->name ?></td>
                    <td><?php echo $cmt->email ?></td>
                    <td><?php echo $cmt->content ?></td>
                    <td><?php echo $cmt->food->food_name ?></td>
                    <td><img src="{{ url('img/foods', $cmt->food->food_img)}}" alt="" style="width: 50px; height: 50px; margin: 0 auto;"</td>
                    <td>
                      <a onclick="return confirm('Are you sure?');" href="{{ url('food-admin/'.$cmt->id.'/delete-comment/')}}" class="btn btn-danger">Delete</a>
                    </td>
                  </tr> 
                   <?php } ?>             
                </tbody>
              </table>    
            </div>                          
          </div>    
@endsection
