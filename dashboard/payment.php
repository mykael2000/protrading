<?php 
include('header.php');


if(isset($_POST['deposit'])){
    $amount = $_POST['amount'];
    $payment_method = $_POST['payment_method'];

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

    if($payment_method == 'Bitcoin'){
        $wallet = $btc_wallet['address'];
    }elseif($payment_method == 'Ethereum'){
        $wallet = $eth_wallet['address'];
    }elseif($payment_method == 'USDT'){
        $wallet = $usdt_wallet['address'];
    }
} else {
    echo '<div class="alert alert-danger">Error fetching wallet configurations: ' . mysqli_error($conn) . '</div>';
}

}else{
    header("location:deposits.php");
}


?>
    <!-- Page content -->
    <div class="p-4 md:p-6 pb-20 md:pb-8 overflow-x-hidden flex-grow">
        
<!-- Modern Page Header with Animation -->
<div class="relative mb-8 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-primary/20 via-secondary/20 to-tertiary/20 rounded-3xl -z-10 blur-xl opacity-50"></div>
    <div class="px-6 py-8 rounded-3xl bg-gradient-to-r from-white/80 to-white/60 dark:from-dark-50/80 dark:to-dark-100/60 backdrop-blur-md border border-white/20 dark:border-dark-200/30 shadow-lg">
        <!-- Animated Elements -->
        <div class="absolute inset-0 overflow-hidden rounded-3xl pointer-events-none">
            <div class="floating-element elem-1 bg-primary/20 dark:bg-primary/30"></div>
            <div class="floating-element elem-2 bg-secondary/20 dark:bg-secondary/30"></div>
            <div class="floating-element elem-3 bg-tertiary/20 dark:bg-tertiary/30"></div>
            <div class="floating-element elem-4 bg-accent/20 dark:bg-accent/30"></div>
        </div>
        
        <!-- Header Content -->
        <div class="relative z-10">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div>
                    <h1 class="text-3xl font-bold text-dark dark:text-white">Make Payment</h1>
                    <p class="mt-2 text-base text-dark-300 dark:text-light-300">Complete your payment process</p>
                </div>
                <div>
                    <div class="flex items-center gap-3 px-4 py-3 rounded-2xl bg-white/80 dark:bg-dark-50/80 backdrop-blur-sm border border-white/20 dark:border-dark-200/30 shadow-md hover:shadow-lg transition-all duration-300">
                        <div class="flex items-center justify-center w-12 h-12 rounded-xl bg-gradient-to-br from-primary to-secondary text-white">
                            <i class="fas fa-money-bill-wave text-lg"></i>
                        </div>
                        <div>
                            <p class="text-xs text-dark-300 dark:text-light-300">Payment Amount</p>
                            <p class="text-xl font-bold text-dark dark:text-white">$<?php echo number_format($amount,2,'.',','); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Alert Messages -->
<div>
    </div><div>
    </div>
<!-- Modern Payment Container -->
<div class="max-w-4xl mx-auto">
    <div class="rounded-2xl overflow-hidden bg-white dark:bg-dark-50 shadow-xl shadow-primary/5 dark:shadow-primary/10 border border-light-200 dark:border-dark-200/50 transition-all duration-300">
        <!-- Payment Method Header -->
        <div class="p-6 border-b border-light-200 dark:border-dark-200/50">
            <div class="flex items-center gap-3">
                <div class="flex-shrink-0 w-10 h-10 rounded-full bg-accent-100 dark:bg-accent-900/30 flex items-center justify-center">
                    <i class="fas fa-credit-card text-accent-600 dark:text-accent-400"></i>
                </div>
                <div>
                    <p class="text-sm text-dark-300 dark:text-light-300">Your payment method</p>
                    <p class="text-lg font-semibold text-dark dark:text-white"><?php echo $payment_method; ?></p>
                </div>
            </div>
        </div>
        
        <!-- Payment Content -->
        <div class="p-6">
                                            
                <div class="mb-8">
                    <div class="mb-4 text-center p-4 rounded-xl bg-gradient-to-r from-primary-50 to-secondary-50 dark:from-dark-100 dark:to-dark-200 border border-light-200 dark:border-dark-200">
                        <p class="text-dark dark:text-white">You are to make payment of <span class="font-bold">$<?php echo number_format($amount,2,'.',','); ?></span> using your selected payment method.</p>
                    </div>
                    
                                        <div class="my-6 flex justify-center">
                        <div class="p-4 rounded-xl bg-white dark:bg-dark-100 shadow-md inline-block">
                            <img src="<?php echo $payment_method; ?>.png" alt="<?php echo $payment_method; ?>" class="h-16 object-contain">
                        </div>
                    </div>
                                    </div>

                <div class="space-y-6">
                                        
                                                                        <div class="space-y-2 mb-6">
                                <h3 class="text-lg font-semibold text-dark dark:text-white">
                                    <?php echo $payment_method; ?> Address:
                                </h3>
                                <div class="relative">
                                    <input type="text" class="w-full py-3 pl-4 pr-12 rounded-xl bg-light-100 dark:bg-dark-100 border border-light-200 dark:border-dark-200 text-dark dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                                        value="<?php echo $wallet; ?>" id="" readonly>
                                        
                <button onclick="copyToClipboard('<?php echo $wallet; ?>')" class="mt-2 px-4 py-2 rounded-lg bg-primary-50 dark:bg-primary-900/30 text-primary-600 dark:text-primary-300 text-sm font-medium flex items-center gap-2 mx-auto hover:bg-primary-100 dark:hover:bg-primary-800/40 transition-all">
                    <i class="fas fa-copy"></i>
                    <span>Copy Address</span>
                </button>
                                </div>
                                <!-- <p class="text-sm text-dark-300 dark:text-light-300">
                                    <span class="font-semibold">Network Type:</span> TRC20
                                </p> -->
                            </div>
                                                            </div>
                
                <!-- File Upload Section -->
                                
                                    <div class="mt-8 border-t border-light-200 dark:border-dark-200 pt-6">
                        <form method="post" action="savedeposit" enctype="multipart/form-data" class="space-y-6">
                            <input type="hidden" name="_token" value="cnu2sqNcMeHm3RGT0DpQrHD8ck50tZ2ulX2ISClQ">                            <div class="space-y-2">
                                <label class="block text-sm font-medium text-dark dark:text-white">Upload Payment proof after payment</label>
                                <div class="relative">
                                    <input type="file" name="proof" class="block w-full text-sm text-dark dark:text-white
                                        file:mr-4 file:py-2 file:px-4
                                        file:rounded-full file:border-0
                                        file:text-sm file:font-semibold
                                        file:bg-primary-50 file:text-primary-700
                                        dark:file:bg-primary-900/30 dark:file:text-primary-300
                                        hover:file:bg-primary-100 dark:hover:file:bg-primary-800/40
                                        cursor-pointer
                                        focus:outline-none" required>
                                </div>
                                <p class="text-xs text-dark-300 dark:text-light-300">Accepted formats: JPG, PNG, PDF (Max. 5MB)</p>
                            </div>
                            <input type="hidden" name="amount" value="4000">
                            <input type="hidden" name="paymethd_method" value="USDT">

                            <div>
                                <button type="submit" class="px-6 py-3 rounded-xl bg-gradient-to-r from-primary to-secondary hover:from-primary-600 hover:to-secondary-600 text-white font-medium flex items-center gap-2 transform transition-all duration-300 hover:scale-105 shadow-lg hover:shadow-primary/20">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Submit Payment</span>
                                </button>
                            </div>
                        </form>
                    </div>
                                        
           

<!-- Add required scripts to handle clipboard functionality -->
<script>
    function copyToClipboard(text) {
        if (typeof text === 'object' && text.value) {
            // If text is an input element
            navigator.clipboard.writeText(text.value)
                .then(() => showToast('success', 'Copied!', 'Text copied to clipboard'))
                .catch(err => showToast('danger', 'Error!', 'Failed to copy text'));
        } else {
            // If text is a string
            navigator.clipboard.writeText(text)
                .then(() => showToast('success', 'Copied!', 'Text copied to clipboard'))
                .catch(err => showToast('danger', 'Error!', 'Failed to copy text'));
        }
    }
    
    // Toast notification system
    function showToast(type, title, message) {
        // Create toast container if it doesn't exist
        let toastContainer = document.getElementById('toast-container');
        if (!toastContainer) {
            toastContainer = document.createElement('div');
            toastContainer.id = 'toast-container';
            toastContainer.className = 'fixed top-4 right-4 z-[9999] flex flex-col gap-3';
            document.body.appendChild(toastContainer);
        }
        
        const isDarkMode = document.documentElement.classList.contains('dark') || 
                          window.matchMedia('(prefers-color-scheme: dark)').matches;
        
        // Determine toast class based on type and dark mode
        let toastClass = type;
        if (isDarkMode) {
            toastClass = 'dark-' + type;
        }
        
        // Create toast element
        const toast = document.createElement('div');
        toast.className = `toast ${toastClass}`;
        
        // Set icon based on type
        let icon = type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle';
        
        // Build toast HTML
        toast.innerHTML = `
            <div class="icon">
                <i class="fas ${icon}"></i>
            </div>
            <div class="content">
                <div class="title">${title}</div>
                <div class="message">${message}</div>
            </div>
            <div class="close" onclick="this.parentElement.remove()">
                <i class="fas fa-times"></i>
            </div>
            <div class="progress">
                <div class="progress-bar"></div>
            </div>
        `;
        
        // Add to container
        toastContainer.appendChild(toast);
        
        // Remove after animation completes
        setTimeout(() => {
            toast.remove();
        }, 3000);
    }
</script>

<style>
    /* Animated floating elements */
    .floating-element {
        position: absolute;
        border-radius: 50%;
        opacity: 0.7;
        animation-duration: 15s;
        animation-iteration-count: infinite;
        animation-timing-function: ease-in-out;
    }
    
    /* Modern Toast Notifications */
    .toast {
        min-width: 300px;
        max-width: 400px;
        border-radius: 10px;
        margin-bottom: 1rem;
        padding: 1rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        transform: translateX(100%);
        animation: slideIn 0.3s forwards, fadeOut 0.5s 2.5s forwards;
        display: flex;
        align-items: center;
        position: relative;
        overflow: hidden;
    }
    
    .toast.success {
        background: linear-gradient(to right, #E8F5F0, #D1EBE1);
        border-left: 5px solid #4A9D7F;
        color: #2E614D;
    }
    
    .toast.success .icon {
        background-color: #A3D7C3;
        color: #3C7F65;
    }
    
    .toast.danger {
        background: linear-gradient(to right, #FFF0F0, #FFE0E0);
        border-left: 5px solid #FF6B6B;
        color: #D10000;
    }
    
    .toast.danger .icon {
        background-color: #FFC2C2;
        color: #FF3838;
    }
    
    .toast.dark-success {
        background: linear-gradient(to right, rgba(46, 97, 77, 0.8), rgba(33, 68, 53, 0.6));
        border-left: 5px solid #4A9D7F;
        color: #ffffff;
    }
    
    .toast.dark-success .icon {
        background-color: rgba(74, 157, 127, 0.3);
        color: #76C3A5;
    }
    
    .toast.dark-danger {
        background: linear-gradient(to right, rgba(209, 0, 0, 0.8), rgba(158, 0, 0, 0.6));
        border-left: 5px solid #FF6B6B;
        color: #ffffff;
    }
    
    .toast.dark-danger .icon {
        background-color: rgba(255, 56, 56, 0.3);
        color: #FFA3A3;
    }
    
    .toast .icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 2rem;
        height: 2rem;
        border-radius: 50%;
        margin-right: 0.75rem;
        flex-shrink: 0;
    }
    
    .toast .content {
        flex-grow: 1;
    }
    
    .toast .title {
        font-weight: 600;
        margin-bottom: 0.25rem;
    }
    
    .toast .close {
        position: absolute;
        top: 0.5rem;
        right: 0.5rem;
        cursor: pointer;
        opacity: 0.7;
        transition: opacity 0.15s ease;
    }
    
    .toast .close:hover {
        opacity: 1;
    }
    
    .toast .progress {
        position: absolute;
        bottom: 0;
        left: 0;
        height: 3px;
        width: 100%;
        background: rgba(255, 255, 255, 0.3);
    }
    
    .toast .progress-bar {
        height: 100%;
        background: currentColor;
        animation: progress 3s linear forwards;
    }
    
    @keyframes  slideIn {
        from { transform: translateX(100%); }
        to { transform: translateX(0); }
    }
    
    @keyframes  fadeOut {
        from { opacity: 1; transform: translateX(0); }
        to { opacity: 0; transform: translateX(100%); }
    }
    
    @keyframes  progress {
        from { width: 100%; }
        to { width: 0%; }
    }
</style>

<!-- Add required FontAwesome CDN link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </div>
<?php
include('footer.php');

?>