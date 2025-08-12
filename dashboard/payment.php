<?php 
// Assumes 'header.php' handles session_start() and database connection ($conn)
include('header.php');

// PHP block to handle and display messages at the top
$message_html = '';
if (isset($_GET['status']) && isset($_GET['message'])) {
    $status = htmlspecialchars($_GET['status']);
    $message = htmlspecialchars($_GET['message']);

    $alert_class = ($status == 'success') ? 'bg-green-50 text-green-800' : 'bg-red-50 text-red-800';
    $icon_path = ($status == 'success') ? 
        'M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z' :
        'M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z';
    $icon_color = ($status == 'success') ? 'text-green-500' : 'text-red-500';

    $message_html = '
    <div id="alert-message" class="flex items-center p-4 mb-4 rounded-lg ' . $alert_class . ' dark:bg-gray-800 dark:' . $icon_color . '" role="alert">
      <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="' . $icon_path . '"/>
      </svg>
      <span class="sr-only">' . $status . '</span>
      <div class="ms-3 text-sm font-medium">' . $message . '</div>
      <button type="button" class="ms-auto -mx-1.5 -my-1.5 ' . $alert_class . ' rounded-lg focus:ring-2 focus:ring-' . str_replace('text-', '', $icon_color) . '-400 p-1.5 hover:bg-' . str_replace('text-', '', $icon_color) . '-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#alert-message" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
      </button>
    </div>';
}

if(isset($_POST['deposit'])){
    $amount = $_POST['amount'];
    $payment_method = $_POST['payment_method'];

    // Fetch existing wallet configurations
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

    $wallet = 'N/A';
    $qr_path = '';
    if($payment_method == 'Bitcoin'){
        $wallet = $btc_wallet['address'];
        $qr_path = $btc_wallet['qr_path'];
    }elseif($payment_method == 'Ethereum'){
        $wallet = $eth_wallet['address'];
        $qr_path = $eth_wallet['qr_path'];
    }elseif($payment_method == 'USDT'){
        $wallet = $usdt_wallet['address'];
        $qr_path = $usdt_wallet['qr_path'];
    }
} else {
    header("location:deposits.php");
    exit();
}
?>

<div class="p-4 md:p-6 pb-20 md:pb-8 overflow-x-hidden flex-grow">
    <div class="relative mb-8 overflow-hidden">
        </div>

    <div class="max-w-4xl mx-auto">
        <?php echo $message_html; ?>
    </div>

    <div class="max-w-4xl mx-auto">
        <div class="rounded-2xl overflow-hidden bg-white dark:bg-dark-50 shadow-xl ...">
            <div class="p-6">
                <div class="mt-8 border-t border-light-200 dark:border-dark-200 pt-6">
                    <form method="post" action="savedeposit.php" enctype="multipart/form-data" class="space-y-6">
                        <div class="space-y-2">
                            <label class="block text-sm font-medium text-dark dark:text-white">Upload Payment proof after payment</label>
                            <div class="relative">
                                <input type="file" name="proof" class="... " required>
                            </div>
                            <p class="text-xs text-dark-300 dark:text-light-300">Accepted formats: JPG, PNG, PDF (Max. 5MB)</p>
                        </div>
                        <input type="hidden" name="amount" value="<?php echo htmlspecialchars($amount); ?>">
                        <input type="hidden" name="payment_method" value="<?php echo htmlspecialchars($payment_method); ?>">

                        <div>
                            <button type="submit" class="px-6 py-3 rounded-xl bg-gradient-to-r ...">
                                <i class="fas fa-check-circle"></i>
                                <span>Submit Payment</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('footer.php');
?>