<?php
include "includes/header.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//Load Composer's autoloader

require '../user/PHPMailer-master/src/PHPMailer.php';
require '../user/PHPMailer-master/src/Exception.php';
require '../user/PHPMailer-master/src/SMTP.php';
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$userid = $_GET['id'];
$sqleu = "SELECT * FROM users WHERE id='$userid'";
$queryeu = mysqli_query($conn, $sqleu);
$usereu = mysqli_fetch_assoc($queryeu);
$message = "";
if (isset($_POST['submit'])) {
    $total_balance = $_POST['total_balance'];
    $active_deposits = $_POST['active_deposits'];
    $earned_total = $_POST['total_earnings'];
    $total_referrals = $_POST['total_referrals'];
    $total_bonus = $_POST['bonus'];
    $withdrawal = $_POST['total_withdrawals'];
    $pin = $_POST['pin'];
    $account_upgrade = $_POST['account_upgrade'];
    $withdrawal_charges = $_POST['withdrawal_charges'];
    $transaction = $_POST['transaction'];
    $withdrawal_unlock_fee = $_POST['withdrawal_unlock_fee'];
    $commission_fee = $_POST['commission_fee'];
    $maintenance_fee = $_POST['maintenance_fee'];
  $stats_with = $_POST['stats_with'];
    $sqlup = "UPDATE users set balance='$total_balance', active_deposits='$active_deposits', referrals='$total_referrals', bonus='$total_bonus', withdrawal='$withdrawal', pin = '$pin', account_upgrade='$account_upgrade', withdrawal_charges='$withdrawal_charges', transaction='$transaction', withdrawal_unlock_fee='$withdrawal_unlock_fee', commission_fee='$commission_fee', maintenance_fee='$maintenance_fee', stats_with = '$stats_with'  WHERE id='$userid'";
    $queryup = mysqli_query($conn, $sqlup);
    header("location: edit.php?id=$userid&message=success");
}
if (@$_GET['message'] == "success") {
    $message = '<div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <div>Details Updated Successfully</div>
        </div>';
}

?>
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Protradingoption Users List

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
                        <h3 class="box-title">Edit User</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form action="" method="post" role="form">
                        <?php echo $message; ?>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    value="<?php echo $usereu['email']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputbtc">Total Balance</label>
                                <input type="text" name="total_balance" class="form-control" id="exampleInputbtc"
                                    placeholder="Enter amount" value="<?php echo $usereu['balance']; ?>">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputbtc">Active Deposits</label>
                                <input type="text" name="active_deposits" class="form-control" id="exampleInputbtc"
                                    placeholder="Enter amount" value="<?php echo $usereu['active_deposits']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputbtc">Total Profit</label>
                                <input type="text" name="bonus" class="form-control" id="exampleInputbtc"
                                    placeholder="Enter amount" value="<?php echo $usereu['bonus']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputbtc">Total Referrals</label>
                                <input type="text" name="total_referrals" class="form-control" id="exampleInputbtc"
                                    placeholder="Enter amount" value="<?php echo $usereu['referrals']; ?>">
                            </div>
                          
                          <div class="form-group">
                                <label for="exampleInputbtc">Withdrawal Status</label>
                                <input type="text" name="stats_with" class="form-control" id="exampleInputbtc"
                                    placeholder="Enter text" value="<?php echo $usereu['stats_with']; ?>">
                            </div>
                           
                            <div class="form-group">
                                <label for="exampleInputbtc">Total Withdrawals</label>
                                <input type="text" name="total_withdrawals" class="form-control" id="exampleInputbtc"
                                    placeholder="Enter amount" value="<?php echo $usereu['withdrawal']; ?>">
                            </div>
                          
                            
                            <div class="form-group">
                                <label for="exampleInputbtc">Withdrawal Pin</label>
                                <input type="text" name="pin" class="form-control" id="exampleInputbtc"
                                    placeholder="Enter pin" value="<?php echo $usereu['pin']; ?>">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputeth">Account upgrade billing status</label>
                                <input type="text" value="<?php echo $usereu['account_upgrade']; ?>" disabled>
                                <select name="account_upgrade" class="form-control">
                                    <option value="<?php echo $usereu['account_upgrade']; ?>">--select--</option>
                                    <option value="Active">Activate</option>
                                    <option value="Deactive">Deactivate</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputeth">Withdrawal charges billing status</label>
                                <input type="text" value="<?php echo $usereu['withdrawal_charges']; ?>" disabled>
                                <select name="withdrawal_charges" class="form-control">
                                    <option value="<?php echo $usereu['withdrawal_charges']; ?>">--select--</option>
                                    <option value="Active">Activate</option>
                                    <option value="Deactive">Deactivate</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputeth">Transaction billing status</label>
                                <input type="text" value="<?php echo $usereu['transaction']; ?>" disabled>
                                <select name="transaction" class="form-control">
                                    <option value="<?php echo $usereu['transaction']; ?>">--select--</option>
                                    <option value="Active">Activate</option>
                                    <option value="Deactive">Deactivate</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputeth">Withdrawal unlock fee billing status</label>
                                <input type="text" value="<?php echo $usereu['withdrawal_unlock_fee']; ?>" disabled>
                                <select name="withdrawal_unlock_fee" class="form-control">
                                    <option value="<?php echo $usereu['withdrawal_unlock_fee']; ?>">--select--</option>
                                    <option value="Active">Activate</option>
                                    <option value="Deactive">Deactivate</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputeth">Maintenance fee billing status</label>
                                <input type="text" value="<?php echo $usereu['maintenance_fee']; ?>" disabled>
                                <select name="maintenance_fee" class="form-control">
                                    <option value="<?php echo $usereu['maintenance_fee']; ?>">--select--</option>
                                    <option value="Active">Activate</option>
                                    <option value="Deactive">Deactivate</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputeth">Commission fee billing status</label>
                                <input type="text" value="<?php echo $usereu['commission_fee']; ?>" disabled>
                                <select name="commission_fee" class="form-control">
                                    <option value="<?php echo $usereu['commission_fee']; ?>">--select--</option>
                                    <option value="Active">Activate</option>
                                    <option value="Deactive">Deactivate</option>
                                </select>
                            </div>
                           
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
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