<?php 
include('header.php');
?>
    <!-- Page content -->
    <div class="p-4 md:p-6 pb-20 md:pb-8 overflow-x-hidden flex-grow">
            <!-- Page Header -->
    <div class="mb-6">
        <h1 class="text-2xl font-bold dark:text-white text-dark">Refer Friends & Earn</h1>
        <p class="mt-1 text-sm dark:text-gray-400 text-gray-600">Invite others to join the Protrading Options community</p>
    </div>
    
    <div>
    </div>    <div>
    </div>    
    <!-- Referral Section -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Left Column - Referral Info & Copy Link -->
        <div class="lg:col-span-2">
            <div class="dark:bg-dark-50 bg-white rounded-xl shadow-lg overflow-hidden">
                <!-- Card Header -->
                <div class="dark:bg-dark-100/50 bg-light-100/50 px-6 py-4 border-b dark:border-dark-200/50 border-light-200/50">
                    <h2 class="text-lg font-semibold dark:text-white text-dark flex items-center">
                        <i data-lucide="share-2" class="h-5 w-5 mr-2 text-primary"></i>
                        Share Your Referral Link
                    </h2>
                </div>
                
                <!-- Card Body -->
                <div class="p-6">
                    <!-- Referral Link Section -->
                    <div class="mb-8">
                        <p class="mb-3 dark:text-gray-300 text-gray-700">Share your unique referral link with friends and earn rewards when they join:</p>
                        <div class="flex items-center">
                            <div class="relative flex-grow">
                                <input type="text" id="reflink" value="ref/Mykaeltech" readonly
                                       class="block w-full px-4 py-3 dark:bg-dark-100 bg-light-50 border dark:border-dark-200 border-light-300 rounded-l-lg shadow-sm dark:text-white text-dark focus:outline-none focus:ring-1 focus:ring-primary">
                            </div>
                            <button onclick="copyRefLink()" class="px-4 py-3 bg-primary hover:bg-primary-600 text-white rounded-r-lg transition-colors flex items-center">
                                <i data-lucide="copy" class="h-5 w-5"></i>
                                <span class="ml-2 hidden sm:inline">Copy</span>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Referral ID & Stats -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Referral ID -->
                        <div class="dark:bg-dark-100/50 bg-light-100/50 rounded-lg p-5">
                            <p class="text-sm dark:text-gray-400 text-gray-600 mb-2">Your Referral ID</p>
                            <div class="flex items-center">
                                <span class="text-xl font-bold dark:text-primary text-primary">Mykaeltech</span>
                                <button onclick="copyUsername()" class="ml-2 p-1 dark:text-gray-400 text-gray-500 hover:text-primary transition-colors">
                                    <i data-lucide="copy" class="h-4 w-4"></i>
                                </button>
                            </div>
                        </div>
                        
                        <!-- Referral Stats -->
                        <div class="dark:bg-dark-100/50 bg-light-100/50 rounded-lg p-5">
                            <p class="text-sm dark:text-gray-400 text-gray-600 mb-2">Your Sponsor</p>
                            <div class="flex items-center">
                                <i data-lucide="user" class="h-5 w-5 mr-2 dark:text-gray-300 text-gray-600"></i>
                                <span class="font-medium dark:text-white text-dark">null</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- How it Works Section -->
                    <div class="mt-8">
                        <h3 class="text-lg font-semibold dark:text-white text-dark mb-4">How Referrals Work</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="flex flex-col items-center text-center p-4">
                                <div class="h-12 w-12 rounded-full bg-primary/10 flex items-center justify-center mb-3">
                                    <i data-lucide="link" class="h-6 w-6 text-primary"></i>
                                </div>
                                <h4 class="text-sm font-medium dark:text-white text-dark mb-1">Share Your Link</h4>
                                <p class="text-xs dark:text-gray-400 text-gray-600">Send your unique referral link to friends</p>
                            </div>
                            <div class="flex flex-col items-center text-center p-4">
                                <div class="h-12 w-12 rounded-full bg-secondary/10 flex items-center justify-center mb-3">
                                    <i data-lucide="user-plus" class="h-6 w-6 text-secondary"></i>
                                </div>
                                <h4 class="text-sm font-medium dark:text-white text-dark mb-1">Friends Sign Up</h4>
                                <p class="text-xs dark:text-gray-400 text-gray-600">They register and become your referral</p>
                            </div>
                            <div class="flex flex-col items-center text-center p-4">
                                <div class="h-12 w-12 rounded-full bg-tertiary/10 flex items-center justify-center mb-3">
                                    <i data-lucide="gift" class="h-6 w-6 text-tertiary"></i>
                                </div>
                                <h4 class="text-sm font-medium dark:text-white text-dark mb-1">Earn Rewards</h4>
                                <p class="text-xs dark:text-gray-400 text-gray-600">Receive benefits when they invest</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Right Column - Referral Stats -->
        <div>
            <div class="dark:bg-dark-50 bg-white rounded-xl shadow-lg overflow-hidden">
                <!-- Card Header -->
                <div class="dark:bg-dark-100/50 bg-light-100/50 px-6 py-4 border-b dark:border-dark-200/50 border-light-200/50">
                    <h2 class="text-lg font-semibold dark:text-white text-dark flex items-center">
                        <i data-lucide="bar-chart-2" class="h-5 w-5 mr-2 text-primary"></i>
                        Referral Statistics
                    </h2>
                </div>
                
                <!-- Card Body -->
                <div class="p-6">
                    <!-- Referral Count -->
                    <div class="dark:bg-dark-100/50 bg-light-100/50 rounded-lg p-5 mb-6">
                        <p class="text-sm dark:text-gray-400 text-gray-600 mb-1">Total Referrals</p>
                        <div class="flex items-center">
                            <span class="text-3xl font-bold dark:text-white text-dark">0</span>
                            <span class="ml-2 text-xs px-2 py-1 rounded-full dark:bg-dark-100 bg-light-200 dark:text-gray-300 text-gray-700">Users</span>
                        </div>
                    </div>
                    
                    <!-- Bonus Amount -->
                    <div class="dark:bg-dark-100/50 bg-light-100/50 rounded-lg p-5">
                        <p class="text-sm dark:text-gray-400 text-gray-600 mb-1">Referral Earnings</p>
                        <div class="flex items-center">
                            <span class="text-3xl font-bold dark:text-white text-dark">$0.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Referrals Table -->
    <div class="mt-6">
        <div class="dark:bg-dark-50 bg-white rounded-xl shadow-lg overflow-hidden">
            <!-- Card Header -->
            <div class="dark:bg-dark-100/50 bg-light-100/50 px-6 py-4 border-b dark:border-dark-200/50 border-light-200/50">
                <h2 class="text-lg font-semibold dark:text-white text-dark flex items-center">
                    <i data-lucide="users" class="h-5 w-5 mr-2 text-primary"></i>
                    Your Referrals
                </h2>
            </div>
            
            <!-- Card Body -->
            <div class="p-6">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y dark:divide-dark-100 divide-light-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium dark:text-gray-400 text-gray-500 uppercase tracking-wider">Client Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium dark:text-gray-400 text-gray-500 uppercase tracking-wider">Ref. Level</th>
                                <th class="px-6 py-3 text-left text-xs font-medium dark:text-gray-400 text-gray-500 uppercase tracking-wider">Parent</th>
                                <th class="px-6 py-3 text-left text-xs font-medium dark:text-gray-400 text-gray-500 uppercase tracking-wider">Client Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium dark:text-gray-400 text-gray-500 uppercase tracking-wider">Date Registered</th>
                            </tr>
                        </thead>
                        <tbody class="dark:bg-dark-50 bg-white divide-y dark:divide-dark-100 divide-light-200">
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php
include('footer.php');

?>