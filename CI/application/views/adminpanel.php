<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>

</head>
<body>   


        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="page-header">
                        <h3>Admin Panel</h3>
                    </div>
                    <table border="1" class="table table-bordered table-responsive">
                        <thead>
                        <th>SN</th>
                        <th>Hospital Name</th>
                        <th>Email</th>
                        <th>Operations</th>
                        </thead>
                        <tbody>
                        <?php $i=1 ?>
                     
                            <tr>
                                <td>a</td>
                                <td>a</td>
                                <td>a</td>
                                <td>
                                    <a href="" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-view"></i>&nbsp;&nbsp;View</a>
                                    <a href="" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"
                                                                                style="display: inline-block"></i>&nbsp;&nbsp;Edit</a>
                                    <a href="" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i>&nbsp;&nbsp;Delete</a>
                                </td>
                            </tr><tr>
                                <td>a</td>
                                <td>a</td>
                                <td>a</td>
                                <td>
                                    <a href="" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-view"></i>&nbsp;&nbsp;View</a>
                                    <a href="" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"
                                                                                style="display: inline-block"></i>&nbsp;&nbsp;Edit</a>
                                    <a href="" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i>&nbsp;&nbsp;Delete</a>
                                </td>
                            </tr><tr>
                                <td>a</td>
                                <td>a</td>
                                <td>a</td>
                                <td>
                                    <a href="" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-view"></i>&nbsp;&nbsp;View</a>
                                    <a href="" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"
                                                                                style="display: inline-block"></i>&nbsp;&nbsp;Edit</a>
                                    <a href="" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i>&nbsp;&nbsp;Delete</a>
                                </td>
                            </tr>
                            <?php $i++ ?>
               
                        </tbody>
                    </table>
                    <a role="button" href="/admin/hospital/create" class="btn btn-primary btn-md">Admin</a>
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

