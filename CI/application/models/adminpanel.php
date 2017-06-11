<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
</head>
<body>   

   <div id="wrapper">
        <div class="container-fluid">
        </div>
      

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="page-header">
                        <h3>Manage Hospitals</h3>
                    </div>
                    <table class="table table-bordered table-responsive">
                        <thead>
                        <th>SN</th>
                        <th>Hospital Name</th>
                        <th>Email</th>
                        <th>Operations</th>
                        </thead>
                        <tbody>
                  
                     
                            </tr>
                      
               
                        </tbody>
                    </table>
                    <a role="button" href="/admin/hospital/create" class="btn btn-primary btn-md">Add Hospital</a>
                </div>

            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
</body>
</html>

    <!-- jQuery -->
    <script src="../assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>

