<?php
include "includes/header.php";
if(isset($_GET['del_id'])){
    $del_id = $_GET['del_id'];
    $sql_del = "DELETE FROM transfers WHERE id = '$del_id'";
    $query_del = mysqli_query($conn,$sql_del);
    header("location:transfers.php");
}
?>
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            FIP Tracking List

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Home</a></li>
            <li class="active">transfers</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Total Trackings</h3>
                        <div class="box-tools">
                            <div class="input-group">
                                <input type="text" name="table_search" class="form-control input-sm pull-right"
                                    style="width: 150px;" placeholder="Search" />
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>


                                <th>Tracking Number</th>
                                <th>Status</th>
                                <th>Tracking Note</th>

                                <th>Amount</th>
                                <th>Date</th>
                                <th>End Note</th>

                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            <?php
                            $track_sql = "SELECT * FROM transfers";
                            $track_query = mysqli_query($conn, $track_sql);
                            while ($user = mysqli_fetch_assoc($track_query)) {?>
                            <tr>


                                <td><?php echo $user['track_id']; ?></td>
                                <td><?php echo $user['transfer_status']; ?></td>
                                <td><?php echo $user['note']; ?></td>
                                <td><?php echo $user['amount']; ?></td>
                                <td><?php echo $user['created_at']; ?></td>

                                <td><?php echo $user['last_note']; ?></td>

                                <td><a href="editTracking.php?id=<?php echo $user['id']; ?>"
                                        class="btn btn-block btn-success btn-xs">edit</a></td>
                                <td><a href="transfers.php?del_id=<?php echo $user['id']; ?>"
                                        class="btn btn-block btn-danger btn-xs"
                                        onclick="return confirm('Are you sure you want to delete this record? This action cannot be undone!');">Delete</a></td>

                            </tr>
                            <?php }?>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<?php
include "includes/footer.php";

?>