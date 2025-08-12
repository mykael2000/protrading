<?php
include "includes/header.php"; // This should establish your $conn connection

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

//Load Composer's autoloader
// Ensure these paths are correct relative to this file
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

// SQL query to get the total number of users
$sqlt = "SELECT COUNT(*) as total_users FROM users";
$result = mysqli_query($conn, $sqlt);
$totalUsers = 0;
if ($result) {
    $row = mysqli_fetch_assoc($result);
    $totalUsers = $row['total_users'];
} else {
    echo "Error fetching total users: " . mysqli_error($conn);
}

// SQL query to get the total amount where active_deposits
$sqltaL = "SELECT SUM(active_deposits) AS total_amountL FROM users";
$resultL = mysqli_query($conn, $sqltaL);
$totalLTCAmount = 0;
if ($resultL) {
    $rowL = mysqli_fetch_assoc($resultL);
    $totalLTCAmount = $rowL['total_amountL'] ?? 0; // Use null coalescing for safety
} else {
    echo "Error fetching total active deposits: " . mysqli_error($conn);
}

// --- NEW PHP LOGIC FOR WALLET CONFIGURATION ---
$upload_dir = '../uploads/wallet_qrcodes/'; // Relative path from admin/dashboard.php
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0755, true); // Create directory if it doesn't exist
}

$message = ''; // For success/error messages

if (isset($_POST['upload_wallet'])) {
    $currency = $_POST['currency']; // 'BTC' or 'ETH'
    $wallet_address = trim($_POST['wallet_address']);
    $qr_code_file = $_FILES['qr_code_image'];

    if (empty($wallet_address)) {
        $message = '<div class="alert alert-danger">Wallet address cannot be empty.</div>';
    } elseif ($qr_code_file['error'] !== UPLOAD_ERR_OK) {
        $message = '<div class="alert alert-danger">Error uploading QR code image: ' . $qr_code_file['error'] . '</div>';
    } else {
        $file_extension = pathinfo($qr_code_file['name'], PATHINFO_EXTENSION);
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array(strtolower($file_extension), $allowed_extensions)) {
            $message = '<div class="alert alert-danger">Invalid file type. Only JPG, PNG, GIF are allowed.</div>';
        } elseif ($qr_code_file['size'] > 2 * 1024 * 1024) { // Max 2MB
            $message = '<div class="alert alert-danger">File size too large. Max 2MB allowed.</div>';
        } else {
            // Generate a unique filename to prevent overwrites and security issues
            $new_file_name = $currency . '_qrcode_' . uniqid() . '.' . $file_extension;
            $destination_path = $upload_dir . $new_file_name;

            if (move_uploaded_file($qr_code_file['tmp_name'], $destination_path)) {
                // Save to database (INSERT or UPDATE if currency already exists)
                $sql_insert_update = "INSERT INTO wallet_configs (currency, wallet_address, qr_code_path)
                                      VALUES (?, ?, ?)
                                      ON DUPLICATE KEY UPDATE wallet_address = VALUES(wallet_address), qr_code_path = VALUES(qr_code_path), updated_at = CURRENT_TIMESTAMP";

                $stmt_insert_update = $conn->prepare($sql_insert_update);
                if ($stmt_insert_update === false) {
                    $message = '<div class="alert alert-danger">Database error: ' . $conn->error . '</div>';
                } else {
                    $stmt_insert_update->bind_param("sss", $currency, $wallet_address, $destination_path);
                    if ($stmt_insert_update->execute()) {
                        $message = '<div class="alert alert-success">' . htmlspecialchars($currency) . ' wallet configuration updated successfully!</div>';
                    } else {
                        $message = '<div class="alert alert-danger">Failed to save ' . htmlspecialchars($currency) . ' wallet to database: ' . $stmt_insert_update->error . '</div>';
                    }
                    $stmt_insert_update->close();
                }
            } else {
                $message = '<div class="alert alert-danger">Failed to move uploaded file. Check directory permissions.</div>';
            }
        }
    }
}

// Fetch existing wallet configurations for display
$btc_wallet = ['address' => 'N/A', 'qr_path' => ''];
$eth_wallet = ['address' => 'N/A', 'qr_path' => ''];
$usdt_wallet = ['address' => 'N/A', 'qr_path' => ''];

$sql_fetch_wallets = "SELECT currency, wallet_address, qr_code_path FROM wallet_configs";
$result_wallets = mysqli_query($conn, $sql_fetch_wallets);

if ($result_wallets) {
    while ($row = mysqli_fetch_assoc($result_wallets)) {
        if ($row['currency'] == 'BTC') {
            $btc_wallet['address'] = htmlspecialchars($row['wallet_address']);
            $btc_wallet['qr_path'] = htmlspecialchars($row['qr_code_path']);
        } elseif ($row['currency'] == 'ETH') {
            $eth_wallet['address'] = htmlspecialchars($row['wallet_address']);
            $eth_wallet['qr_path'] = htmlspecialchars($row['qr_code_path']);
        } elseif ($row['currency'] == 'USDT') {
            $usdt_wallet['address'] = htmlspecialchars($row['wallet_address']);
            $usdt_wallet['qr_path'] = htmlspecialchars($row['qr_code_path']);
        }
    }
} else {
    echo '<div class="alert alert-danger">Error fetching wallet configurations: ' . mysqli_error($conn) . '</div>';
}

// Note: mysqli_close($conn); is NOT here. It should be in includes/footer.php or at the very end of the script.
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
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo $totalUsers; ?></h3>
                        <p>Total Users</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="users.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>$<?php echo number_format($totalLTCAmount, 2); ?></h3>
                        <p>Total Active Deposits</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
        </div><!-- /.row -->

        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
                <!-- Quick email widget (existing) -->
                <div class="box box-info">
                    <div class="box-header">
                        <i class="fa fa-envelope"></i>
                        <h3 class="box-title">Quick Email</h3>
                        <div class="pull-right box-tools">
                            <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control" name="emailto" placeholder="Email to:" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" />
                            </div>
                            <div>
                                <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="box-footer clearfix">
                        <button class="pull-right btn btn-default" id="sendEmail">Send <i class="fa fa-arrow-circle-right"></i></button>
                    </div>
                </div>
            </section><!-- /.Left col -->

            <!-- Right col (for the new wallet section) -->
            <section class="col-lg-5 connectedSortable">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Manage Wallet Addresses & QR Codes</h3>
                    </div>
                    <div class="box-body">
                        <?php echo $message; // Display success/error messages ?>

                        <p class="text-muted">Upload or update your Bitcoin (BTC) and Ethereum (ETH) wallet addresses and their corresponding QR code images. **Uploading a new image for a currency will overwrite the previous one.**</p>

                        <!-- BTC Wallet Section -->
                        <div class="wallet-section mb-4 p-3 border rounded">
                            <h4>Bitcoin (BTC) Wallet</h4>
                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="currency" value="BTC">
                                <div class="form-group">
                                    <label for="btc_address">BTC Wallet Address</label>
                                    <input type="text" class="form-control" id="btc_address" name="wallet_address" value="<?php echo $btc_wallet['address']; ?>" placeholder="Enter BTC Wallet Address" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="btc_qr_code">Upload BTC QR Code Image (Max 2MB, JPG/PNG/GIF)</label>
                                    <input type="file" class="form-control-file" id="btc_qr_code" name="qr_code_image" accept="image/jpeg,image/png,image/gif">
                                </div>
                                <?php if (!empty($btc_wallet['qr_path'])): ?>
                                    <div class="mb-3 text-center">
                                        <p>Current BTC QR Code:</p>
                                        <img src="<?php echo htmlspecialchars($btc_wallet['qr_path']); ?>" alt="BTC QR Code" style="max-width: 150px; height: auto; border: 1px solid #ddd; padding: 5px; background-color: #fff;">
                                    </div>
                                <?php endif; ?>
                                <button type="submit" name="upload_wallet" class="btn btn-primary btn-sm">Update BTC Wallet</button>
                            </form>
                        </div>

                        <!-- ETH Wallet Section -->
                        <div class="wallet-section p-3 border rounded">
                            <h4>Ethereum (ETH) Wallet</h4>
                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="currency" value="ETH">
                                <div class="form-group">
                                    <label for="eth_address">ETH Wallet Address</label>
                                    <input type="text" class="form-control" id="eth_address" name="wallet_address" value="<?php echo $eth_wallet['address']; ?>" placeholder="Enter ETH Wallet Address" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="eth_qr_code">Upload ETH QR Code Image (Max 2MB, JPG/PNG/GIF)</label>
                                    <input type="file" class="form-control-file" id="eth_qr_code" name="qr_code_image" accept="image/jpeg,image/png,image/gif">
                                </div>
                                <?php if (!empty($eth_wallet['qr_path'])): ?>
                                    <div class="mb-3 text-center">
                                        <p>Current ETH QR Code:</p>
                                        <img src="<?php echo htmlspecialchars($eth_wallet['qr_path']); ?>" alt="ETH QR Code" style="max-width: 150px; height: auto; border: 1px solid #ddd; padding: 5px; background-color: #fff;">
                                    </div>
                                <?php endif; ?>
                                <button type="submit" name="upload_wallet" class="btn btn-primary btn-sm">Update ETH Wallet</button>
                            </form>
                        </div>

                        <!-- ETH Wallet Section -->
                        <div class="wallet-section p-3 border rounded">
                            <h4>USDT (USDT) Wallet</h4>
                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="currency" value="USDT">
                                <div class="form-group">
                                    <label for="usdt_address">USDT Wallet Address</label>
                                    <input type="text" class="form-control" id="usdt_address" name="wallet_address" value="<?php echo $usdt_wallet['address']; ?>" placeholder="Enter USDT Wallet Address" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="usdt_qr_code">Upload USDT QR Code Image (Max 2MB, JPG/PNG/GIF)</label>
                                    <input type="file" class="form-control-file" id="usdt_qr_code" name="qr_code_image" accept="image/jpeg,image/png,image/gif">
                                </div>
                                <?php if (!empty($usdt_wallet['qr_path'])): ?>
                                    <div class="mb-3 text-center">
                                        <p>Current ETH QR Code:</p>
                                        <img src="<?php echo htmlspecialchars($usdt_wallet['qr_path']); ?>" alt="USDT QR Code" style="max-width: 150px; height: auto; border: 1px solid #ddd; padding: 5px; background-color: #fff;">
                                    </div>
                                <?php endif; ?>
                                <button type="submit" name="upload_wallet" class="btn btn-primary btn-sm">Update ETH Wallet</button>
                            </form>
                        </div>

                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </section><!-- /.Right col -->
        </div><!-- /.row (main row) -->

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<?php
include "includes/footer.php"; // This should contain mysqli_close($conn);
?>