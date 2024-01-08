<?php

include 'header.php';


?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Welcome ! <?php echo $_SESSION['name'];?></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body" >
          <div class="card" id="membership">
            <div class="card-header">
              <h3 class="card-title"> Memberships</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th>Packages</th>
                    <th>Billing Detail</th>
                    <th>Expiry Date</th>
                    <th >Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $id = $_SESSION['package_id'];
                

                  $q2 = "SELECT * FROM `members_package` WHERE `package_id` = '$id'";
                  $row2 = mysqli_query($con,$q2);
                  
                  while ($data2 = mysqli_fetch_assoc($row2)) {
                  ?>
                        
                  
                
                  <tr>
                    <td value="<?php echo $data2['package_id']; ?>"> <?php echo $data2['packages']; ?></td>
                    <td><?php echo $data2['Price']; ?></td>
                    <?php

while ($data1 = mysqli_fetch_assoc($row1)) {
?>
                    <td><?php echo $data1['expiry_date'];?></td>
                    <td><?php echo $data['Status'];?></td>
                  </tr>  
                  <?php }?>  
                  <?php }?>  

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <br><br>
          <div class="card">
            <div class="card-header">
              <h2 class="card-title">Past Invoice</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th>Packages</th>
                    <th>Membership Date</th>   
                    <th>Months</th>
                    <th >Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>22 oct 2023</td>
                    <td>Standard</td>
                    <td>September</td>  
                    <td>Paid</td>
                  </tr>            
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>

          <br><br>
          <div class="card">
            <div class="card-header">
              <h2 class="card-title">Total Product</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th>Month</th>
                    <th>Product</th>   
                    <th>Price</th>
                    <th >Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>22 oct 2023</td>
                    <td>Standard</td>
                    <td>September</td>  
                    <td>Paid</td>
                  </tr>            
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 





  

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
