<?php
/*
 *   CC BY-NC-AS UTA FabLab 2016-2017
 *   FabApp V 0.9
 */
include_once ($_SERVER['DOCUMENT_ROOT'].'/pages/header.php');
?>
<title><?php echo $sv['User Management'];?> FabApp - User Management</title>
<div id="page-wrapper">
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">User Management</h1>
        </div>
        <!-- /.col-md-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-ticket fa-fw"></i> Manage Users
                </div>
                <div class="panel-body">
                    Possibly list all users?                   
                </div>
            </div>
        </div>
        <!-- /.col-md-8 -->
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-ticket fa-fw"></i> Create New Users
                </div>
                <div class="panel-body">
                    Links for Creating a new User?
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->
<?php
//Standard call for dependencies
include_once ($_SERVER['DOCUMENT_ROOT'].'/pages/footer.php');
?>