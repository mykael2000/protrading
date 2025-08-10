<?php 
include('header.php');
?>
    <!-- Page content -->
    <div class="p-4 md:p-6 pb-20 md:pb-8 overflow-x-hidden flex-grow">
            <!-- Page Header -->
    <div class="mb-6">
        <h1 class="text-2xl font-bold dark:text-white text-dark">Transaction Records</h1>
        <p class="mt-1 text-sm dark:text-gray-400 text-gray-600">View all your financial activities</p>
    </div>
    
    <div>
    </div>    <div>
    </div>    
    <!-- Transaction Records Card -->
    <div class="dark:bg-dark-50 bg-white rounded-xl shadow-lg overflow-hidden">
        <!-- Transaction Tabs - Scrollable container for mobile -->
        <div class="px-2 sm:px-6 border-b dark:border-dark-100 border-light-200">
            <div class="flex overflow-x-auto py-3 sm:py-4 no-scrollbar" role="tablist">
                <!-- Deposit Tab -->
                <button type="button" 
                        class="mr-3 pb-3 px-1 inline-flex flex-col items-center text-sm font-medium border-b-2 border-primary text-primary focus:outline-none whitespace-nowrap tab-button active" 
                        data-tab="deposit-tab" 
                        role="tab">
                    <div class="flex items-center justify-center h-8 w-8 rounded-full bg-primary/10 mb-1 sm:mb-2">
                        <i data-lucide="download" class="h-4 w-4 text-primary"></i>
                    </div>
                    <span class="text-xs sm:text-sm">Deposits</span>
                </button>
                
                <!-- Withdrawal Tab -->
                <button type="button" 
                        class="mr-3 pb-3 px-1 inline-flex flex-col items-center text-sm font-medium border-b-2 border-transparent dark:text-gray-400 text-gray-500 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none whitespace-nowrap tab-button" 
                        data-tab="withdrawal-tab" 
                        role="tab">
                    <div class="flex items-center justify-center h-8 w-8 rounded-full dark:bg-dark-100/80 bg-light-100/80 mb-1 sm:mb-2">
                        <i data-lucide="upload" class="h-4 w-4 dark:text-gray-400 text-gray-500"></i>
                    </div>
                    <span class="text-xs sm:text-sm">Withdrawals</span>
                </button>
                
                <!-- Other Transactions Tab -->
                <button type="button" 
                        class="mr-3 pb-3 px-1 inline-flex flex-col items-center text-sm font-medium border-b-2 border-transparent dark:text-gray-400 text-gray-500 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none whitespace-nowrap tab-button" 
                        data-tab="other-tab" 
                        role="tab">
                    <div class="flex items-center justify-center h-8 w-8 rounded-full dark:bg-dark-100/80 bg-light-100/80 mb-1 sm:mb-2">
                        <i data-lucide="repeat" class="h-4 w-4 dark:text-gray-400 text-gray-500"></i>
                    </div>
                    <span class="text-xs sm:text-sm">Others</span>
                </button>
            </div>
        </div>
        
        <!-- Tab Content -->
        <div class="p-0 sm:p-6">
            <!-- Deposit Tab Content -->
            <div id="deposit-tab" class="tab-content block">
                <!-- Mobile cards layout for small screens -->
                <div class="sm:hidden">
                    <ul class="divide-y dark:divide-dark-100 divide-light-200">
                                                    <li class="p-6 text-center">
                                <div class="flex flex-col items-center justify-center">
                                    <div class="h-12 w-12 rounded-full bg-primary/10 flex items-center justify-center mb-3">
                                        <i data-lucide="inbox" class="h-6 w-6 text-primary"></i>
                                    </div>
                                    <p class="text-sm font-medium dark:text-white text-dark mb-1">No Deposits found</p>
                                    <p class="text-xs dark:text-gray-400 text-gray-500">Your deposit history will appear here</p>
                                </div>
                            </li>
                                            </ul>
                </div>
                
                <!-- Table layout for larger screens -->
                <div class="hidden sm:block overflow-hidden">
                    <div class="overflow-x-auto sm:mx-0">
                        <table class="min-w-full divide-y dark:divide-dark-100 divide-light-200">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium dark:text-gray-400 text-gray-500 uppercase tracking-wider">Amount</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium dark:text-gray-400 text-gray-500 uppercase tracking-wider">Payment Mode</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium dark:text-gray-400 text-gray-500 uppercase tracking-wider">Status</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium dark:text-gray-400 text-gray-500 uppercase tracking-wider">Date</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y dark:divide-dark-100 divide-light-200">
                                                                    <tr>
                                        <td colspan="4" class="px-6 py-8 text-sm text-center dark:text-gray-400 text-gray-500">
                                            <div class="flex flex-col items-center justify-center">
                                                <div class="h-12 w-12 rounded-full bg-primary/10 flex items-center justify-center mb-3">
                                                    <i data-lucide="inbox" class="h-6 w-6 text-primary"></i>
                                                </div>
                                                <p class="text-sm font-medium dark:text-white text-dark mb-1">No Deposits found</p>
                                                <p class="text-xs dark:text-gray-400 text-gray-500">Your deposit history will appear here</p>
                                            </div>
                                        </td>
                                    </tr>
                                                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <!-- Withdrawal Tab Content -->
            <div id="withdrawal-tab" class="tab-content hidden">
                <!-- Mobile cards layout for small screens -->
                <div class="sm:hidden">
                    <ul class="divide-y dark:divide-dark-100 divide-light-200">
                                                    <li class="p-6 text-center">
                                <div class="flex flex-col items-center justify-center">
                                    <div class="h-12 w-12 rounded-full bg-primary/10 flex items-center justify-center mb-3">
                                        <i data-lucide="inbox" class="h-6 w-6 text-primary"></i>
                                    </div>
                                    <p class="text-sm font-medium dark:text-white text-dark mb-1">No withdrawals found</p>
                                    <p class="text-xs dark:text-gray-400 text-gray-500">Your withdrawal history will appear here</p>
                                </div>
                            </li>
                                            </ul>
                </div>
                
                <!-- Table layout for larger screens -->
                <div class="hidden sm:block overflow-hidden">
                    <div class="overflow-x-auto sm:mx-0">
                        <table class="min-w-full divide-y dark:divide-dark-100 divide-light-200">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium dark:text-gray-400 text-gray-500 uppercase tracking-wider">Amount</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium dark:text-gray-400 text-gray-500 uppercase tracking-wider">Amount + Charges</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium dark:text-gray-400 text-gray-500 uppercase tracking-wider">Payment Mode</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium dark:text-gray-400 text-gray-500 uppercase tracking-wider">Status</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium dark:text-gray-400 text-gray-500 uppercase tracking-wider">Date</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y dark:divide-dark-100 divide-light-200">
                                                                    <tr>
                                        <td colspan="5" class="px-6 py-8 text-sm text-center dark:text-gray-400 text-gray-500">
                                            <div class="flex flex-col items-center justify-center">
                                                <div class="h-12 w-12 rounded-full bg-primary/10 flex items-center justify-center mb-3">
                                                    <i data-lucide="inbox" class="h-6 w-6 text-primary"></i>
                                                </div>
                                                <p class="text-sm font-medium dark:text-white text-dark mb-1">No withdrawals found</p>
                                                <p class="text-xs dark:text-gray-400 text-gray-500">Your withdrawal history will appear here</p>
                                            </div>
                                        </td>
                                    </tr>
                                                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <!-- Other Transactions Tab Content -->
            <div id="other-tab" class="tab-content hidden">
                <!-- Mobile cards layout for small screens -->
                <div class="sm:hidden">
                    <ul class="divide-y dark:divide-dark-100 divide-light-200">
                                                    <li class="p-6 text-center">
                                <div class="flex flex-col items-center justify-center">
                                    <div class="h-12 w-12 rounded-full bg-primary/10 flex items-center justify-center mb-3">
                                        <i data-lucide="inbox" class="h-6 w-6 text-primary"></i>
                                    </div>
                                    <p class="text-sm font-medium dark:text-white text-dark mb-1">No transactions found</p>
                                    <p class="text-xs dark:text-gray-400 text-gray-500">Other transactions will appear here</p>
                                </div>
                            </li>
                                            </ul>
                </div>
                
                <!-- Table layout for larger screens -->
                <div class="hidden sm:block overflow-hidden">
                    <div class="overflow-x-auto sm:mx-0">
                        <table class="min-w-full divide-y dark:divide-dark-100 divide-light-200">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium dark:text-gray-400 text-gray-500 uppercase tracking-wider">Amount</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium dark:text-gray-400 text-gray-500 uppercase tracking-wider">Type</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium dark:text-gray-400 text-gray-500 uppercase tracking-wider">Plan/Narration</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium dark:text-gray-400 text-gray-500 uppercase tracking-wider">Date</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y dark:divide-dark-100 divide-light-200">
                                                                    <tr>
                                        <td colspan="4" class="px-6 py-8 text-sm text-center dark:text-gray-400 text-gray-500">
                                            <div class="flex flex-col items-center justify-center">
                                                <div class="h-12 w-12 rounded-full bg-primary/10 flex items-center justify-center mb-3">
                                                    <i data-lucide="inbox" class="h-6 w-6 text-primary"></i>
                                                </div>
                                                <p class="text-sm font-medium dark:text-white text-dark mb-1">No transactions found</p>
                                                <p class="text-xs dark:text-gray-400 text-gray-500">Other transactions will appear here</p>
                                            </div>
                                        </td>
                                    </tr>
                                                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php
include('footer.php');

?>