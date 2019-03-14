@extends('layouts.admin-master')
@section('title','Manage Bill-Detail')
@section('menu')
@parent
@endsection
@section('content')
      <!-- <?php //echo var_dump($billDetail); die(); ?>  -->
      <?php $total = 0;?>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget no-padding">
            <div class="panel panel-default table-responsive">
              <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>
                    <td><a href="" class="white-text templatemo-sort-by">ID <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Bill ID<span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Food Image<span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Food Name<span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Quantity<span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Price <span class="caret"></span></a></td>
                     <td><a href="" class="white-text templatemo-sort-by">Subtotal <span class="caret"></span></a></td>
                  </tr>
                </thead>
                <tbody>


                <?php 
                foreach($billDetail as $key)
                {

                  ?>

                  <tr>
                    <td><b><?php echo $key->id ?></b></td>
                    <td><b><?php echo $key->bill_id ?></b></td>
                    <td><img src="{{ url('') }}/img/foods/{{@$key->food->food_img}}" style="width: 100px; height: 80px;"></td>
                    <td><b><?php echo $key->food->food_name?></b></td>
                    <td><b><?php echo $key->qty?></b></td>
                    <td><b>$<?php echo $key->price?></b></td>
                    <td><b>$<?php echo $key->subtotal?></b></td>
                    <?php $total = $total + $key->subtotal; ?>
                  </tr>
                 <?php } ?>             
                </tbody>
              </table>
            </div>
            <h3><b>Total: $ <?php echo number_format($total,2); ?></b></h3>                          
          </div>    
@endsection
