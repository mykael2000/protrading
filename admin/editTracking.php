<?php
include "includes/header.php";

$depoid = $_GET['id'];
$sqleu = "SELECT * FROM transfers WHERE id='$depoid'";
$queryeu = mysqli_query($conn, $sqleu);
$usereu = mysqli_fetch_assoc($queryeu);
$message = "";

if (isset($_POST['add'])) {
     $track_id = mysqli_real_escape_string($conn, $_POST['track_id']);
    $transfer_status = mysqli_real_escape_string($conn, $_POST['transfer_status']);
    $note = mysqli_real_escape_string($conn, $_POST['note']);
    $amount = mysqli_real_escape_string($conn, $_POST['amount']);
    $created_at = mysqli_real_escape_string($conn, $_POST['created_at']);
    $last_note = mysqli_real_escape_string($conn, $_POST['last_note']);
    
    $updateSQL = "UPDATE transfers SET 
        transfer_status = '$transfer_status', 
        note = '$note', 
        amount = '$amount', 
        created_at = '$created_at', 
        last_note = '$last_note' 
        WHERE track_id = '$track_id'";
        
        if (mysqli_query($conn, $updateSQL)) {
        header("location:editTracking.php?id=$depoid");
       
    } else {
        echo "Error: " . mysqli_error($conn);
    }

}
?>
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Protradingoption Transfer List

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Home</a></li>
            <li class="#">users</li>
            <li class="active">edit</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Edit Tracking Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form action="" method="post" role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputltc">Tracking Number</label>
                                <input type="text" name="track_id" class="form-control" id="exampleInputltc"
                                    value="<?php echo htmlspecialchars($usereu['track_id'] ?? ''); ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputltc">Transfer Status</label>
                                <select class="form-control" name="transfer_status">
                                    <option value="<?php echo $usereu['transfer_status'] ?? ''; ?>">Stage <?php echo $usereu['transfer_status'] ?? 'Select'; ?></option>
                                    <option value="one">Stage one</option>
                                    <option value="two">Stage two</option>
                                    <option value="three">Stage three</option>
                                    <option value="four">Stage four</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputltc">Status Note</label>
                                <input type="text" name="note" class="form-control" id="exampleInputltc"
                                    value="<?php echo htmlspecialchars($usereu['note'] ?? ''); ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputltc">Amount</label>
                                <input type="text" name="amount" class="form-control" id="exampleInputltc"
                                    value="<?php echo htmlspecialchars($usereu['amount'] ?? ''); ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputltc">Date of Transaction</label>
                                <input type="date" name="created_at" class="form-control" id="exampleInputltc"
                                    value="<?php echo htmlspecialchars($usereu['created_at'] ?? ''); ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputltc">Last Note</label>
                                <input type="text" name="last_note" class="form-control" id="exampleInputltc"
                                    value="<?php echo htmlspecialchars($usereu['last_note'] ?? ''); ?>">
                            </div>
                        </div>
                    
                        <div class="box-footer">
                            <button name="add" type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div><!-- /.box -->



            </div>
            <!--/.col (left) -->
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<?php
include "includes/footer.php";

?>