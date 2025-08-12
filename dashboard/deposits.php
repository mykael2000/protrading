<?php 
include('header.php');
$message_html = '';
if (isset($_GET['status']) && isset($_GET['message'])) {
    $status = htmlspecialchars($_GET['status']);
    $message = htmlspecialchars($_GET['message']);

    if ($status == 'success') {
        $message_html = '
        <div id="alert-message" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
          <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
          </svg>
          <span class="sr-only">Success</span>
          <div class="ms-3 text-sm font-medium">' . $message . '</div>
          <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-message" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
          </button>
        </div>';
    } elseif ($status == 'error') {
        $message_html = '
        <div id="alert-message" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
          <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
          </svg>
          <span class="sr-only">Error</span>
          <div class="ms-3 text-sm font-medium">' . $message . '</div>
          <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-message" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
          </button>
        </div>';
    }
}
?>
    <!-- Page content -->
    <div class="p-4 md:p-6 pb-20 md:pb-8 overflow-x-hidden flex-grow">
        
<!-- Exchange-style top header with balance cards -->
<div class="mb-4">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-xl font-bold text-dark dark:text-white flex items-center">
            <svg class="w-6 h-6 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.04 13.55C17.62 13.96 17.38 14.55 17.44 15.18C17.53 16.26 18.52 17.05 19.6 17.05H21.5V18.24C21.5 20.31 19.81 22 17.74 22H6.26C4.19 22 2.5 20.31 2.5 18.24V11.51C2.5 9.44 4.19 7.75 6.26 7.75H17.74C19.81 7.75 21.5 9.44 21.5 11.51V12.95H19.48C18.92 12.95 18.41 13.17 18.04 13.55Z" fill="currentColor" fill-opacity="0.2"/>
                <path d="M14.85 4.97V7.75H6.26C4.19 7.75 2.5 9.44 2.5 11.51V6.44C2.5 5.08 3.6 3.97 4.97 3.97H13.88C14.43 3.97 14.85 4.39 14.85 4.97Z" fill="currentColor" fill-opacity="0.2"/>
                <path d="M22.5588 13.9702V16.0302C22.5588 16.5802 22.1188 17.0302 21.5588 17.0502H19.5988C18.5188 17.0502 17.5288 16.2602 17.4388 15.1802C17.3788 14.5502 17.6188 13.9602 18.0388 13.5502C18.4088 13.1702 18.9188 12.9502 19.4788 12.9502H21.5588C22.1188 12.9702 22.5588 13.4202 22.5588 13.9702Z" fill="currentColor"/>
            </svg>
            <span>Deposits</span>
        </h1>
        <div class="hidden md:flex space-x-2">
            <button class="px-4 py-2 text-sm font-medium rounded-lg bg-light-100 dark:bg-dark-100 text-dark dark:text-white hover:bg-light-200 dark:hover:bg-dark-200 transition-colors">
                Deposit History
            </button>
            <button class="px-4 py-2 text-sm font-medium rounded-lg bg-primary text-white hover:bg-primary-600 transition-colors">
                New Deposit
            </button>
        </div>
    </div>

    <!-- Balance Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <div class="bg-white dark:bg-dark-50 rounded-xl shadow-sm border border-light-200 dark:border-dark-200/50 p-4">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs text-dark-300 dark:text-light-300 uppercase font-medium">Available Balance</p>
                    <p class="text-xl font-bold text-dark dark:text-white mt-1">$<?php echo number_format($user['balance'], 2 ,'.',','); ?></p>
                </div>
                <div class="w-10 h-10 rounded-lg bg-primary-50 dark:bg-primary-900/30 flex items-center justify-center">
                    <svg class="w-5 h-5 text-primary-600 dark:text-primary-400" viewBox="0 0 24 24" fill="none">
                        <path d="M18.04 13.55C17.62 13.96 17.38 14.55 17.44 15.18C17.53 16.26 18.52 17.05 19.6 17.05H21.5V18.24C21.5 20.31 19.81 22 17.74 22H6.26C4.19 22 2.5 20.31 2.5 18.24V11.51C2.5 9.44 4.19 7.75 6.26 7.75H17.74C19.81 7.75 21.5 9.44 21.5 11.51V12.95H19.48C18.92 12.95 18.41 13.17 18.04 13.55Z" fill="currentColor" fill-opacity="0.2"/>
                        <path d="M14.85 4.97V7.75H6.26C4.19 7.75 2.5 9.44 2.5 11.51V6.44C2.5 5.08 3.6 3.97 4.97 3.97H13.88C14.43 3.97 14.85 4.39 14.85 4.97Z" fill="currentColor" fill-opacity="0.2"/>
                        <path d="M22.5588 13.9702V16.0302C22.5588 16.5802 22.1188 17.0302 21.5588 17.0502H19.5988C18.5188 17.0502 17.5288 16.2602 17.4388 15.1802C17.3788 14.5502 17.6188 13.9602 18.0388 13.5502C18.4088 13.1702 18.9188 12.9502 19.4788 12.9502H21.5588C22.1188 12.9702 22.5588 13.4202 22.5588 13.9702Z" fill="currentColor"/>
                        <path d="M7 12H14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-dark-50 rounded-xl shadow-sm border border-light-200 dark:border-dark-200/50 p-4">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs text-dark-300 dark:text-light-300 uppercase font-medium">Total Deposited</p>
                    <p class="text-xl font-bold text-dark dark:text-white mt-1">$<?php echo number_format($user['active_deposits'],2,'.',','); ?></p>
                </div>
                <div class="w-10 h-10 rounded-lg bg-secondary-50 dark:bg-secondary-900/30 flex items-center justify-center">
                    <svg class="w-5 h-5 text-secondary-600 dark:text-secondary-400" viewBox="0 0 24 24" fill="none">
                        <path d="M9.5 13.7502C9.5 14.7202 10.25 15.5002 11.17 15.5002H13.05C13.85 15.5002 14.5 14.8202 14.5 13.9702C14.5 13.0602 14.1 12.7302 13.51 12.5202L10.5 11.4702C9.91 11.2602 9.51 10.9402 9.51 10.0202C9.51 9.18023 10.16 8.49023 10.96 8.49023H12.84C13.76 8.49023 14.51 9.27023 14.51 10.2402" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 7.5V16.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17 3V7H21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M22 2L17 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- <div class="bg-white dark:bg-dark-50 rounded-xl shadow-sm border border-light-200 dark:border-dark-200/50 p-4">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs text-dark-300 dark:text-light-300 uppercase font-medium">Pending Deposits</p>
                    <p class="text-xl font-bold text-dark dark:text-white mt-1">$0.00</p>
                </div>
                <div class="w-10 h-10 rounded-lg bg-tertiary-50 dark:bg-tertiary-900/30 flex items-center justify-center">
                    <svg class="w-5 h-5 text-tertiary-600 dark:text-tertiary-400" viewBox="0 0 24 24" fill="none">
                        <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="currentColor" fill-opacity="0.2"/>
                        <path d="M15.71 15.93L12.61 14.13C12.07 13.83 11.63 13.12 11.63 12.49V7.97" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
        </div> -->

        <div class="bg-white dark:bg-dark-50 rounded-xl shadow-sm border border-light-200 dark:border-dark-200/50 p-4">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs text-dark-300 dark:text-light-300 uppercase font-medium">Last Deposit</p>
                    <p class="text-xl font-bold text-dark dark:text-white mt-1">$<?php echo number_format($user['last_deposit'], 2 ,'.',','); ?></p>
                </div>
                <div class="w-10 h-10 rounded-lg bg-accent-50 dark:bg-accent-900/30 flex items-center justify-center">
                    <svg class="w-5 h-5 text-accent-600 dark:text-accent-400" viewBox="0 0 24 24" fill="none">
                        <path d="M16.44 8.8999C20.04 9.2099 21.51 11.0599 21.51 15.1099V15.2399C21.51 19.7099 19.72 21.4999 15.25 21.4999H8.73998C4.26998 21.4999 2.47998 19.7099 2.47998 15.2399V15.1099C2.47998 11.0899 3.92998 9.2399 7.46998 8.9099" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 2V14.88" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15.35 12.6499L12 15.9999L8.65002 12.6499" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Toast Notifications Container -->
<div id="toast-container" class="fixed top-4 right-4 z-[9999] flex flex-col gap-3"></div>

<!-- Alert Messages -->
<div>
    </div><div>
    </div>
<!-- Exchange-style deposit methods table -->
<div class="bg-white dark:bg-dark-50 rounded-xl shadow-sm border border-light-200 dark:border-dark-200/50 overflow-hidden">
    <!-- Table Header -->
    <div class="p-5 border-b border-light-200 dark:border-dark-200/50">
        <h2 class="text-base font-bold text-dark dark:text-white">Select Deposit Method</h2>
    </div>
    
    <!-- Filter/Search Bar -->
    <div class="p-4 bg-light-50 dark:bg-dark-100 border-b border-light-200 dark:border-dark-200/50 flex flex-wrap gap-3 items-center justify-between">
        <div class="flex items-center space-x-2">
            <button class="px-3 py-1.5 text-xs font-medium rounded-lg bg-primary text-white hover:bg-primary-600 transition-colors">
                All Methods
            </button>
            <button class="px-3 py-1.5 text-xs font-medium rounded-lg bg-light-100 dark:bg-dark-200 text-dark-300 dark:text-light-300 hover:bg-light-200 dark:hover:bg-dark-300 transition-colors">
                Crypto
            </button>
            <button class="px-3 py-1.5 text-xs font-medium rounded-lg bg-light-100 dark:bg-dark-200 text-dark-300 dark:text-light-300 hover:bg-light-200 dark:hover:bg-dark-300 transition-colors">
                Bank Transfer
            </button>
        </div>
        <div class="relative">
            <input type="text" placeholder="Search payment methods..." class="w-full md:w-60 pl-9 pr-4 py-1.5 text-sm rounded-lg bg-white dark:bg-dark-50 border border-light-200 dark:border-dark-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent text-dark dark:text-white">
            <svg class="w-4 h-4 text-dark-300 dark:text-light-300 absolute left-3 top-1/2 transform -translate-y-1/2" viewBox="0 0 24 24" fill="none">
                <path d="M11.5 21C16.7467 21 21 16.7467 21 11.5C21 6.25329 16.7467 2 11.5 2C6.25329 2 2 6.25329 2 11.5C2 16.7467 6.25329 21 11.5 21Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M22 22L20 20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
    </div>

    <!-- Methods Table -->
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="bg-light-50 dark:bg-dark-100 text-dark-300 dark:text-light-300 text-xs uppercase">
                    <th class="px-6 py-3 text-left font-medium">Method</th>
                    <th class="px-6 py-3 text-right font-medium">Limits</th>
                    <!--<th class="px-6 py-3 text-right font-medium">Fee</th>-->
                    <!--<th class="px-6 py-3 text-right font-medium">Processing Time</th>-->
                    <th class="px-6 py-3 text-right font-medium">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-light-200 dark:divide-dark-200/50">
                                <tr class="hover:bg-light-50 dark:hover:bg-dark-100/50 transition-colors text-sm">
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                                                            <div class="w-8 h-8 rounded-lg bg-light-100 dark:bg-dark-200 p-1.5 mr-3 flex items-center justify-center">
                                    <img src="https://www.svgrepo.com/show/367256/usdt.svg" alt="USDT" class="h-full w-full object-contain">
                                </div>
                                                        <div>
                                <p class="font-medium text-dark dark:text-white">USDT</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="text-dark dark:text-white">
                            <div class="text-xs text-dark-300 dark:text-light-300">Min: <span class="font-medium text-dark dark:text-white">$50.00</span></div>
                                                    </div>
                    </td>
                    <!--<td class="px-6 py-4 text-right">-->
                    <!--    <span class="px-2 py-1 text-xs rounded-md bg-secondary-50 dark:bg-secondary-900/30 text-secondary-600 dark:text-secondary-300">-->
                    <!--        -->
                    <!--            -->
                    <!--                0%-->
                    <!--            -->
                    <!--        -->
                    <!--    </span>-->
                    <!--</td>-->
                    <!--<td class="px-6 py-4 text-right">-->
                    <!--    <span class="text-dark dark:text-white">Instant</span>-->
                    <!--</td>-->
                    <td class="px-6 py-4 text-right">
                        <button onclick="checkpamethd('21')" class="px-3 py-1.5 text-xs font-medium rounded-md bg-primary text-white hover:bg-primary-600 transition-colors">
                            Deposit
                        </button>
                    </td>
                </tr>
                                <tr class="hover:bg-light-50 dark:hover:bg-dark-100/50 transition-colors text-sm">
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                                                            <div class="w-8 h-8 rounded-lg bg-light-100 dark:bg-dark-200 p-1.5 mr-3 flex items-center justify-center">
                                    <img src="https://www.citypng.com/public/uploads/preview/ethereum-eth-round-logo-icon-png-701751694969815akblwl2552.png" alt="Ethereum" class="h-full w-full object-contain">
                                </div>
                                                        <div>
                                <p class="font-medium text-dark dark:text-white">Ethereum</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="text-dark dark:text-white">
                            <div class="text-xs text-dark-300 dark:text-light-300">Min: <span class="font-medium text-dark dark:text-white">$50.00</span></div>
                                                    </div>
                    </td>
                    <!--<td class="px-6 py-4 text-right">-->
                    <!--    <span class="px-2 py-1 text-xs rounded-md bg-secondary-50 dark:bg-secondary-900/30 text-secondary-600 dark:text-secondary-300">-->
                    <!--        -->
                    <!--            -->
                    <!--                0%-->
                    <!--            -->
                    <!--        -->
                    <!--    </span>-->
                    <!--</td>-->
                    <!--<td class="px-6 py-4 text-right">-->
                    <!--    <span class="text-dark dark:text-white">Instant</span>-->
                    <!--</td>-->
                    <td class="px-6 py-4 text-right">
                        <button onclick="checkpamethd('2')" class="px-3 py-1.5 text-xs font-medium rounded-md bg-primary text-white hover:bg-primary-600 transition-colors">
                            Deposit
                        </button>
                    </td>
                </tr>
                                <tr class="hover:bg-light-50 dark:hover:bg-dark-100/50 transition-colors text-sm">
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                                                            <div class="w-8 h-8 rounded-lg bg-light-100 dark:bg-dark-200 p-1.5 mr-3 flex items-center justify-center">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Bitcoin.svg/64px-Bitcoin.svg.png" alt="Bitcoin" class="h-full w-full object-contain">
                                </div>
                                                        <div>
                                <p class="font-medium text-dark dark:text-white">Bitcoin</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="text-dark dark:text-white">
                            <div class="text-xs text-dark-300 dark:text-light-300">Min: <span class="font-medium text-dark dark:text-white">$50.00</span></div>
                                                    </div>
                    </td>
                    <!--<td class="px-6 py-4 text-right">-->
                    <!--    <span class="px-2 py-1 text-xs rounded-md bg-secondary-50 dark:bg-secondary-900/30 text-secondary-600 dark:text-secondary-300">-->
                    <!--        -->
                    <!--            -->
                    <!--                0%-->
                    <!--            -->
                    <!--        -->
                    <!--    </span>-->
                    <!--</td>-->
                    <!--<td class="px-6 py-4 text-right">-->
                    <!--    <span class="text-dark dark:text-white">Instant</span>-->
                    <!--</td>-->
                    <td class="px-6 py-4 text-right">
                        <button onclick="checkpamethd('1')" class="px-3 py-1.5 text-xs font-medium rounded-md bg-primary text-white hover:bg-primary-600 transition-colors">
                            Deposit
                        </button>
                    </td>
                </tr>
                            </tbody>
        </table>
    </div>
</div>

<!-- Deposit Form Card -->
<div class="mt-6 bg-white dark:bg-dark-50 rounded-xl shadow-sm border border-light-200 dark:border-dark-200/50 overflow-hidden">
    <div class="p-5 border-b border-light-200 dark:border-dark-200/50">
        <h2 class="text-base font-bold text-dark dark:text-white flex items-center">
            <svg class="w-5 h-5 mr-2 text-primary" viewBox="0 0 24 24" fill="none">
                <path d="M9.5 13.7502C9.5 14.7202 10.25 15.5002 11.17 15.5002H13.05C13.85 15.5002 14.5 14.8202 14.5 13.9702C14.5 13.0602 14.1 12.7302 13.51 12.5202L10.5 11.4702C9.91 11.2602 9.51 10.9402 9.51 10.0202C9.51 9.18023 10.16 8.49023 10.96 8.49023H12.84C13.76 8.49023 14.51 9.27023 14.51 10.2402" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12 7.5V16.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Deposit Details
        </h2>
        <?php echo $message_html; ?>
    </div>
    
    <div class="p-6">
        <form action="javascript:;" method="post" id="submitpaymentform" class="space-y-6">
            <input type="hidden" name="_token" value="cnu2sqNcMeHm3RGT0DpQrHD8ck50tZ2ulX2ISClQ">            
            <!-- Amount Input -->
            <div class="space-y-2">
                <div class="flex items-center justify-between">
                    <label for="amount" class="text-sm font-medium text-dark dark:text-white">Amount to deposit</label>
                    
                    <div class="flex items-center">
                        <span class="text-xs text-dark-300 dark:text-light-300 mr-2">Min:</span>
                        <span class="text-sm font-medium text-dark dark:text-white">$50.00</span>
                    </div>
                </div>
                
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <span class="text-dark-300 dark:text-light-300">$</span>
                    </div>
                    <input class="block w-full pl-10 pr-12 py-3 text-lg rounded-xl bg-light-100 dark:bg-dark-100 border border-light-200 dark:border-dark-200 focus:ring-2 focus:ring-primary focus:border-transparent text-dark dark:text-white transition-all" 
                           placeholder="0.00" 
                           type="number" 
                           name="amount" 
                           id="amount" 
                           min="50"
                           required>
                </div>
            </div>
            
            <input type="hidden" name="payment_method" id="paymethod" value="">
            
            <!-- Selected Payment Method Display -->
            <div id="selected-method" class="hidden p-4 rounded-xl bg-light-50 dark:bg-dark-100 border border-light-200 dark:border-dark-200 flex items-center justify-between">
                <div class="flex items-center">
                    <div id="method-icon" class="w-10 h-10 rounded-lg bg-primary-50 dark:bg-primary-900/30 p-2 mr-3 flex items-center justify-center"></div>
                    <div>
                        <p class="text-sm text-dark-300 dark:text-light-300">Selected Method</p>
                        <p id="method-name" class="text-base font-medium text-dark dark:text-white">-</p>
                    </div>
                </div>
                
                <button type="button" onclick="resetMethod()" class="text-xs text-primary dark:text-primary-400 hover:underline">
                    Change
                </button>
            </div>
            
            <!-- Submit Button -->
            <div class="pt-4">
                <button name="deposit" type="submit" id="submit-btn" class="w-full py-4 px-4 rounded-xl bg-gradient-to-r from-primary to-secondary hover:from-primary-600 hover:to-secondary-600 text-white font-medium flex items-center justify-center gap-2 transform transition-all duration-300 hover:-translate-y-1 shadow-lg hover:shadow-primary/20 disabled:opacity-50 disabled:cursor-not-allowed" disabled>
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none">
                        <path d="M9.5 13.7502C9.5 14.7202 10.25 15.5002 11.17 15.5002H13.05C13.85 15.5002 14.5 14.8202 14.5 13.9702C14.5 13.0602 14.1 12.7302 13.51 12.5202L10.5 11.4702C9.91 11.2602 9.51 10.9402 9.51 10.0202C9.51 9.18023 10.16 8.49023 10.96 8.49023H12.84C13.76 8.49023 14.51 9.27023 14.51 10.2402" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 7.5V16.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>Complete Deposit</span>
                </button>
                <p class="mt-3 text-center text-xs text-dark-300 dark:text-light-300">
                    By proceeding, you agree to our terms of service
                </p>
            </div>
            
            <input type="hidden" id="lastchosen" value="0">
        </form>
    </div>
</div>

<!-- Exchange-style Information Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
    <!-- Deposit Process -->
    <div class="bg-white dark:bg-dark-50 rounded-xl shadow-sm border border-light-200 dark:border-dark-200/50 overflow-hidden">
        <div class="p-4 border-b border-light-200 dark:border-dark-200/50 flex items-center">
            <svg class="w-5 h-5 text-primary mr-2" viewBox="0 0 24 24" fill="none">
                <path d="M10.75 2.44995C11.44 1.85995 12.57 1.85995 13.27 2.44995L14.85 3.81001C15.15 4.07001 15.71 4.28002 16.11 4.28002H17.81C18.87 4.28002 19.74 5.14996 19.74 6.20996V7.91003C19.74 8.30003 19.95 8.87001 20.21 9.17001L21.57 10.75C22.16 11.44 22.16 12.57 21.57 13.27L20.21 14.85C19.95 15.15 19.74 15.71 19.74 16.11V17.8101C19.74 18.8701 18.87 19.74 17.81 19.74H16.11C15.72 19.74 15.15 19.95 14.85 20.21L13.27 21.5699C12.58 22.1599 11.45 22.1599 10.75 21.5699L9.17004 20.21C8.87004 19.95 8.31004 19.74 7.91004 19.74H6.18C5.12 19.74 4.25 18.8701 4.25 17.8101V16.1C4.25 15.71 4.04 15.15 3.79 14.85L2.44 13.26C1.86 12.57 1.86 11.45 2.44 10.76L3.79 9.17001C4.04 8.87001 4.25 8.31003 4.25 7.91003V6.20996C4.25 5.14996 5.12 4.28002 6.18 4.28002H7.91004C8.30004 4.28002 8.87004 4.07001 9.17004 3.81001L10.75 2.44995Z" fill="currentColor" fill-opacity="0.2"/>
                <path d="M10.58 16.46L7.34998 13.23C6.94998 12.83 6.94998 12.16 7.34998 11.76C7.74998 11.36 8.41998 11.36 8.81998 11.76L10.58 13.52L15.18 8.91998C15.58 8.51998 16.25 8.51998 16.65 8.91998C17.05 9.31998 17.05 9.98998 16.65 10.39L10.58 16.46Z" fill="currentColor"/>
            </svg>
            <h3 class="text-base font-medium text-dark dark:text-white">Deposit Process</h3>
        </div>
        <div class="p-5">
            <ol class="relative border-l border-light-200 dark:border-dark-200 ml-3 space-y-6">
                <li class="ml-6">
                    <span class="absolute flex items-center justify-center w-6 h-6 bg-primary-50 dark:bg-primary-900/30 rounded-full -left-3 ring-4 ring-white dark:ring-dark-50">
                        <span class="text-xs font-bold text-primary-600 dark:text-primary-400">1</span>
                    </span>
                    <h3 class="font-medium text-dark dark:text-white">Select Method</h3>
                    <p class="text-xs text-dark-300 dark:text-light-300 mt-1">Choose your preferred deposit method from the available options.</p>
                </li>
                <li class="ml-6">
                    <span class="absolute flex items-center justify-center w-6 h-6 bg-primary-50 dark:bg-primary-900/30 rounded-full -left-3 ring-4 ring-white dark:ring-dark-50">
                        <span class="text-xs font-bold text-primary-600 dark:text-primary-400">2</span>
                    </span>
                    <h3 class="font-medium text-dark dark:text-white">Enter Amount</h3>
                    <p class="text-xs text-dark-300 dark:text-light-300 mt-1">Specify the amount you wish to deposit to your account.</p>
                </li>
                <li class="ml-6">
                    <span class="absolute flex items-center justify-center w-6 h-6 bg-primary-50 dark:bg-primary-900/30 rounded-full -left-3 ring-4 ring-white dark:ring-dark-50">
                        <span class="text-xs font-bold text-primary-600 dark:text-primary-400">3</span>
                    </span>
                    <h3 class="font-medium text-dark dark:text-white">Complete Payment</h3>
                    <p class="text-xs text-dark-300 dark:text-light-300 mt-1">Follow the instructions to complete your deposit through the selected method.</p>
                </li>
                <li class="ml-6">
                    <span class="absolute flex items-center justify-center w-6 h-6 bg-primary-50 dark:bg-primary-900/30 rounded-full -left-3 ring-4 ring-white dark:ring-dark-50">
                        <span class="text-xs font-bold text-primary-600 dark:text-primary-400">4</span>
                    </span>
                    <h3 class="font-medium text-dark dark:text-white">Confirmation</h3>
                    <p class="text-xs text-dark-300 dark:text-light-300 mt-1">Your deposit will be confirmed and credited to your account.</p>
                </li>
            </ol>
        </div>
    </div>
    
    <!-- Security Tips -->
    <div class="bg-white dark:bg-dark-50 rounded-xl shadow-sm border border-light-200 dark:border-dark-200/50 overflow-hidden">
        <div class="p-4 border-b border-light-200 dark:border-dark-200/50 flex items-center">
            <svg class="w-5 h-5 text-accent mr-2" viewBox="0 0 24 24" fill="none">
                <path d="M10.49 2.23006L5.50003 4.10004C4.35003 4.53004 3.41003 5.89004 3.41003 7.12004V14.55C3.41003 15.73 4.19005 17.28 5.14005 17.99L9.44003 21.2C10.85 22.26 13.17 22.26 14.58 21.2L18.88 17.99C19.83 17.28 20.61 15.73 20.61 14.55V7.12004C20.61 5.89004 19.67 4.53004 18.52 4.10004L13.53 2.23006C12.68 1.92006 11.32 1.92006 10.49 2.23006Z" fill="currentColor" fill-opacity="0.2"/>
                <path d="M12 12.5C11.59 12.5 11.25 12.16 11.25 11.75V8.75C11.25 8.34 11.59 8 12 8C12.41 8 12.75 8.34 12.75 8.75V11.75C12.75 12.16 12.41 12.5 12 12.5Z" fill="currentColor"/>
                <path d="M12 16C11.44 16 11 15.55 11 15C11 14.45 11.45 14 12 14C12.55 14 13 14.45 13 15C13 15.55 12.56 16 12 16Z" fill="currentColor"/>
            </svg>
            <h3 class="text-base font-medium text-dark dark:text-white">Security Tips</h3>
        </div>
        <div class="p-5">
            <ul class="space-y-3">
                <li class="flex">
                    <div class="flex-shrink-0 w-5 h-5 rounded-full bg-accent-50 dark:bg-accent-900/30 flex items-center justify-center mr-3 mt-0.5">
                        <svg class="w-3 h-3 text-accent-600 dark:text-accent-400" viewBox="0 0 24 24" fill="none">
                            <path d="M6 10L10.2 14.2L18 6" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <p class="text-xs text-dark-300 dark:text-light-300">Always verify payment details before confirming transactions.</p>
                </li>
                <li class="flex">
                    <div class="flex-shrink-0 w-5 h-5 rounded-full bg-accent-50 dark:bg-accent-900/30 flex items-center justify-center mr-3 mt-0.5">
                        <svg class="w-3 h-3 text-accent-600 dark:text-accent-400" viewBox="0 0 24 24" fill="none">
                            <path d="M6 10L10.2 14.2L18 6" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <p class="text-xs text-dark-300 dark:text-light-300">Use secure and private internet connections when making Deposits.</p>
                </li>
                <li class="flex">
                    <div class="flex-shrink-0 w-5 h-5 rounded-full bg-accent-50 dark:bg-accent-900/30 flex items-center justify-center mr-3 mt-0.5">
                        <svg class="w-3 h-3 text-accent-600 dark:text-accent-400" viewBox="0 0 24 24" fill="none">
                            <path d="M6 10L10.2 14.2L18 6" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <p class="text-xs text-dark-300 dark:text-light-300">For crypto Deposits, double-check the network type to avoid loss of funds.</p>
                </li>
                <li class="flex">
                    <div class="flex-shrink-0 w-5 h-5 rounded-full bg-accent-50 dark:bg-accent-900/30 flex items-center justify-center mr-3 mt-0.5">
                        <svg class="w-3 h-3 text-accent-600 dark:text-accent-400" viewBox="0 0 24 24" fill="none">
                            <path d="M6 10L10.2 14.2L18 6" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <p class="text-xs text-dark-300 dark:text-light-300">Never share your payment credentials with anyone.</p>
                </li>
            </ul>
            
            <div class="mt-5 pt-4 border-t border-light-200 dark:border-dark-200/50">
                <div class="flex items-center p-3 rounded-lg bg-tertiary-50 dark:bg-tertiary-900/20 border border-tertiary-100 dark:border-tertiary-800/30">
                    <svg class="w-5 h-5 text-tertiary-600 dark:text-tertiary-400 mr-3 flex-shrink-0" viewBox="0 0 24 24" fill="none">
                        <path d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z" fill="currentColor" fill-opacity="0.2"/>
                        <path d="M12 6V12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 16H12.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <p class="text-xs text-tertiary-700 dark:text-tertiary-300">
                        Need help with your deposit? Contact our support team via the help center.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Deposit Policy -->
    <div class="bg-white dark:bg-dark-50 rounded-xl shadow-sm border border-light-200 dark:border-dark-200/50 overflow-hidden">
        <div class="p-4 border-b border-light-200 dark:border-dark-200/50 flex items-center">
            <svg class="w-5 h-5 text-secondary mr-2" viewBox="0 0 24 24" fill="none">
                <path d="M21 7V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V7C3 4 4.5 2 8 2H16C19.5 2 21 4 21 7Z" fill="currentColor" fill-opacity="0.2"/>
                <path d="M14.5 4.5V6.5C14.5 7.6 15.4 8.5 16.5 8.5H18.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8 13H12" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8 17H16" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <h3 class="text-base font-medium text-dark dark:text-white">Deposit Policy</h3>
        </div>
        <div class="p-5">
            <div class="space-y-4">
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <div class="w-8 h-8 rounded-full bg-secondary-50 dark:bg-secondary-900/30 flex items-center justify-center mr-3">
                            <svg class="w-4 h-4 text-secondary-600 dark:text-secondary-400" viewBox="0 0 24 24" fill="none">
                                <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="currentColor" fill-opacity="0.2"/>
                                <path d="M15.71 15.93L12.61 14.13C12.07 13.83 11.63 13.12 11.63 12.49V7.97" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-sm font-medium text-dark dark:text-white">Processing Time</h4>
                            <p class="text-xs text-dark-300 dark:text-light-300 mt-1">All payment methods</p>
                        </div>
                    </div>
                    <div>
                        <span class="text-xs text-dark dark:text-white font-medium">Instant</span>
                    </div>
                </div>
                
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <div class="w-8 h-8 rounded-full bg-secondary-50 dark:bg-secondary-900/30 flex items-center justify-center mr-3">
                            <svg class="w-4 h-4 text-secondary-600 dark:text-secondary-400" viewBox="0 0 24 24" fill="none">
                                <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="currentColor" fill-opacity="0.2"/>
                                <path d="M8 13H16" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8 17H16" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8 9H12" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-sm font-medium text-dark dark:text-white">Minimum Deposit</h4>
                            <p class="text-xs text-dark-300 dark:text-light-300 mt-1">Platform requirement</p>
                        </div>
                    </div>
                    <div>
                        <span class="text-xs text-dark dark:text-white font-medium">$50.00</span>
                    </div>
                </div>
                
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <div class="w-8 h-8 rounded-full bg-secondary-50 dark:bg-secondary-900/30 flex items-center justify-center mr-3">
                            <svg class="w-4 h-4 text-secondary-600 dark:text-secondary-400" viewBox="0 0 24 24" fill="none">
                                <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="currentColor" fill-opacity="0.2"/>
                                <path d="M15.5 12H15.51" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M11.5 12H11.51" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7.5 12H7.51" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-sm font-medium text-dark dark:text-white">Deposit Methods</h4>
                            <p class="text-xs text-dark-300 dark:text-light-300 mt-1">Available options</p>
                        </div>
                    </div>
                    <div>
                        <span class="text-xs text-dark dark:text-white font-medium">Multiple</span>
                    </div>
                </div>
            </div>
            
            <div class="mt-5">
                <a href="accounthistory.php" class="text-xs text-primary dark:text-primary-400 font-medium flex items-center hover:underline">
                    <span>View deposit history</span>
                    <svg class="w-3 h-3 ml-1" viewBox="0 0 24 24" fill="none">
                        <path d="M8.91003 19.9201L15.43 13.4001C16.2 12.6301 16.2 11.3701 15.43 10.6001L8.91003 4.08008" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Modern styles with animations -->
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
    
    .elem-1 {
        width: 100px;
        height: 100px;
        top: 10%;
        left: 5%;
        animation-name: float1;
    }
    
    .elem-2 {
        width: 70px;
        height: 70px;
        top: 20%;
        right: 10%;
        animation-name: float2;
    }
    
    .elem-3 {
        width: 50px;
        height: 50px;
        bottom: 20%;
        left: 15%;
        animation-name: float3;
    }
    
    .elem-4 {
        width: 80px;
        height: 80px;
        bottom: 10%;
        right: 5%;
        animation-name: float4;
    }
    
    @keyframes  float1 {
        0% { transform: translate(0, 0) rotate(0deg); }
        25% { transform: translate(15px, 15px) rotate(90deg); }
        50% { transform: translate(0, 30px) rotate(180deg); }
        75% { transform: translate(-15px, 15px) rotate(270deg); }
        100% { transform: translate(0, 0) rotate(360deg); }
    }
    
    @keyframes  float2 {
        0% { transform: translate(0, 0) rotate(0deg); }
        25% { transform: translate(-20px, 10px) rotate(-90deg); }
        50% { transform: translate(0, 20px) rotate(-180deg); }
        75% { transform: translate(20px, 10px) rotate(-270deg); }
        100% { transform: translate(0, 0) rotate(-360deg); }
    }
    
    @keyframes  float3 {
        0% { transform: translate(0, 0) rotate(0deg); }
        33% { transform: translate(15px, -15px) rotate(120deg); }
        66% { transform: translate(-15px, -15px) rotate(240deg); }
        100% { transform: translate(0, 0) rotate(360deg); }
    }
    
    @keyframes  float4 {
        0% { transform: translate(0, 0) rotate(0deg); }
        33% { transform: translate(-20px, -10px) rotate(-120deg); }
        66% { transform: translate(20px, -20px) rotate(-240deg); }
        100% { transform: translate(0, 0) rotate(-360deg); }
    }
    
    /* Payment methods card styles */
    .payment-method-card.active .payment-radio-inner {
        display: block;
    }
    
    .payment-method-card.active > div {
        border-color: theme('colors.primary.500');
        box-shadow: 0 0 0 1px theme('colors.primary.500');
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
        animation: slideIn 0.3s forwards, fadeOut 0.5s 4.5s forwards;
        display: flex;
        align-items: center;
        position: relative;
        overflow: hidden;
        z-index: 10000;
    }
    
    .toast.success {
        background-color: #10b981;
        color: white;
    }
    
    .toast.danger {
        background-color: #ef4444;
        color: white;
    }
    
    .toast.dark-success {
        background-color: #065f46;
        color: white;
    }
    
    .toast.dark-danger {
        background-color: #b91c1c;
        color: white;
    }
    
    .toast .icon {
        margin-right: 12px;
        font-size: 1.5rem;
    }
    
    .toast .content {
        flex: 1;
    }
    
    .toast .title {
        font-weight: 600;
        font-size: 0.875rem;
    }
    
    .toast .message {
        font-size: 0.75rem;
        opacity: 0.9;
    }
    
    .toast .close {
        cursor: pointer;
        font-size: 0.75rem;
        padding: 4px;
    }
    
    .toast .progress {
        position: absolute;
        bottom: 0;
        left: 0;
        height: 3px;
        width: 100%;
    }
    
    .toast .progress-bar {
        height: 100%;
        background-color: rgba(255, 255, 255, 0.3);
        width: 100%;
        animation: progress 5s linear forwards;
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

<!-- Modern toast notifications and payment method handling -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    // Modern Toast Notification System
    function showToast(type, title, message) {
        const toastContainer = document.getElementById('toast-container');
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
        
        // Allow click to dismiss
        toast.addEventListener('click', function() {
            this.style.animation = 'fadeOut 0.3s forwards';
            setTimeout(() => {
                this.remove();
            }, 300);
        });
    }
    
    // Function to handle payment method selection
    function checkpamethd(id) {
        // Enable the submit button
        document.getElementById('submit-btn').disabled = false;
        
        // Show the selected method panel
        document.getElementById('selected-method').classList.remove('hidden');
        
        // Make the API call to get method details
        let url = "get-method" + '/' + id;
        fetch(url)
        .then(function(res){
            return res.json();
        })
        .then(function (response){
            // Update payment method value
            $('#paymethod').val(response);
            
            // Update method name in the selected panel
            document.getElementById('method-name').textContent = response;
            
            // Find and update the method icon in the selected panel
            updateMethodIcon(id);
            
            // Store the last chosen method
            $('#lastchosen').val(id);
            
            // Show notification
            showToast('success', 'Success', 'You have chosen to pay with ' + response);
        })
        .catch(function(err){
            showToast('danger', 'Error', 'Failed to fetch payment method details');
        });
    }
    
    // Function to update the method icon based on the selected method
    function updateMethodIcon(id) {
        // Find the selected method's row
        const methodRows = document.querySelectorAll('tr');
        let methodIcon = null;
        
        methodRows.forEach(row => {
            // Check if this row contains the button with the given ID
            const button = row.querySelector(`button[onclick="checkpamethd('${id}')"]`);
            if (button) {
                // Try to find an image first
                const img = row.querySelector('.flex.items-center img');
                if (img) {
                    methodIcon = img.cloneNode(true);
                } else {
                    // Otherwise try to find the SVG
                    const svg = row.querySelector('.flex.items-center svg');
                    if (svg) {
                        methodIcon = svg.cloneNode(true);
                    }
                }
            }
        });
        
        // Update the method icon in the selected panel
        const methodIconContainer = document.getElementById('method-icon');
        methodIconContainer.innerHTML = '';
        
        if (methodIcon) {
            methodIconContainer.appendChild(methodIcon);
        } else {
            // Default icon if no image/svg found
            methodIconContainer.innerHTML = `
                <svg class="w-5 h-5 text-primary-600 dark:text-primary-400" viewBox="0 0 24 24" fill="none">
                    <path d="M9.5 13.7502C9.5 14.7202 10.25 15.5002 11.17 15.5002H13.05C13.85 15.5002 14.5 14.8202 14.5 13.9702C14.5 13.0602 14.1 12.7302 13.51 12.5202L10.5 11.4702C9.91 11.2602 9.51 10.9402 9.51 10.0202C9.51 9.18023 10.16 8.49023 10.96 8.49023H12.84C13.76 8.49023 14.51 9.27023 14.51 10.2402" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 7.5V16.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            `;
        }
    }
    
    // Function to reset payment method
    function resetMethod() {
        $('#paymethod').val("");
        document.getElementById('selected-method').classList.add('hidden');
        document.getElementById('submit-btn').disabled = true;
        $('#lastchosen').val(0);
    }
    
    // Document Ready Function
    $(document).ready(function() {
        // Form submission handling - DIRECT APPROACH FROM WORKING CODE
        $('#submitpaymentform').submit(function(e) {
            const paymethod = $('#paymethod');
            
            if (paymethod.val() == "") {
                e.preventDefault();
                showToast('danger', 'Error', 'Please choose a payment method by clicking on it');
                return false;
            } else {
                // Exactly matching the working version
                let makepayurl = "payment.php";
                $("#submitpaymentform").attr("action", makepayurl);
                return true;
            }
        });
        
        // Directly set form action on page load
        $('#submitpaymentform').attr('action', "payment.php");
    });
</script>

    </div>
<?php
include('footer.php');

?>