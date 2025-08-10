<?php
include "includes/header.php";

$message = "";

if (isset($_POST['add'])) {
    $track_id = $_POST['track_id'];
    $transfer_status = $_POST['transfer_status'];
    $note = $_POST['note'];
    $amount = $_POST['amount'];
    $created_at = $_POST['created_at'];
    $last_note = $_POST['last_note'];

    // Validate inputs
    if (!empty($track_id) && !empty($transfer_status) && !empty($amount) && !empty($created_at)) {
        $stmt = $conn->prepare("INSERT INTO transfers (track_id, transfer_status, note, amount, created_at, last_note) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $track_id, $transfer_status, $note, $amount, $created_at, $last_note);

        if ($stmt->execute()) {
            $message = "<div class='alert alert-success'>Transfer record added successfully!</div>";
        } else {
            $message = "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
        }

        $stmt->close();
    } else {
        $message = "<div class='alert alert-warning'>Please fill all required fields.</div>";
    }
}
// Close the database connection
mysqli_close($conn);
?>
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Main row -->
        <div class="row">
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Add Tracking</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form action="" method="post" role="form">
                        <?php echo $message; ?>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputltc">Tracking Number</label>
                                <input type="text" name="track_id" class="form-control" id="exampleInputltc"
                                    placeholder="Enter Tracking Number">
                            </div>
                            <div class="form-group">
                                <label style="padding-right: 5px;" for="exampleInputltc">Transfer Status</label>
                                <select class="form-control" name="transfer_status">
                                    <option>-- select --</option>

                                    <option value="one">Stage one</option>
                                    <option value="two">Stage two</option>
                                    <option value="three">Stage three</option>
                                    <option value="four">Stage four</option>
                                    <option value="five">Stage five</option>
                                    <option value="six">Stage six</option>
                                    <option value="seven">Stage seven</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputltc">Status Note</label>
                                <input type="text" name="note" class="form-control" id="exampleInputltc"
                                    placeholder="Enter note">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputltc">Amount</label>
                                <input type="text" name="amount" class="form-control" id="exampleInputltc"
                                    placeholder="Enter amount">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputltc">Date of Transaction</label>
                                <input type="date" name="created_at" class="form-control" id="exampleInputltc">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputltc">Last Note</label>
                                <input type="text" name="last_note" class="form-control" id="exampleInputltc"
                                    placeholder="Enter note">
                            </div>
                          
                            

                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button name="add" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div><!-- /.box -->



            </div>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<?php
include "includes/footer.php";

?>