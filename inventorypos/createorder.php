<?php
include_once'connectdb.php';

session_start();
include_once 'header.php';

?>
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin Dashboard
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <div class="box box-warning">
          <form action="" method="post">
           <div class="box-header with-border">
              
               <h3 class="box-title">Create  New Order</h3>
           </div>
            <div class="box-body"><!-- customer and date -->
              <div class="col-md-6">
                  <div class="form-group">
                  <label >Customer Name</label>
                  <input type="text" class="form-control" name="txtcustomername" placeholder="Enter Name" required="required">
                </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                <label>Date:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>
              </div>
              </div> 
            <div class="box-body">
                <div class="col-md-12">
                    <table id="tableproducts" class="table table-stripped">
                        
                        <thead>
                            <tr>
                                <th>#</th>
                                <td>Search Product </td>
                                <td>Stock</td>
                                <td>Price</td>
                                <td>Enter Quantity</td>
                                 <td>Total</td>
                            </tr>
                        </thead>
                        
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div> <!-- this is for table -->
            <div class="box-body"></div>    <!-- tax discount and extra -->       
            </form>
        </div>
        
    </section>
    <!-- /.content -->
  </div>
  
  <script>
   //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })
  </script>
  <!-- /.content-wrapper -->

  <?php
include_once 'footer.php';
?>