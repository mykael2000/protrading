<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="cnu2sqNcMeHm3RGT0DpQrHD8ck50tZ2ulX2ISClQ">
    <title>Protrading Options | Main Plans</title>

    <link rel="icon" href="storage/app/public/photos/sRj0Ls3MPx9g7QM1XhYE6GmNA2oYzXIEHNh5aEcC.png" type="image/png" />

    <!-- Core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    screens: {
                        'xs': '375px',
                    },
                    colors: {
                        primary: {
                             DEFAULT: '#0052FF',
                           '50': '#e5efff',
                           '100': '#cce0ff',
                            '200': '#99c2ff',
                            '300': '#66a3ff',
                            '400': '#3385ff',
                            '500': '#0052FF',
                            '600': '#0048e6',
                            '700': '#003dbf',
                            '800': '#003399',
                            '900': '#002266',
                        },
                        secondary: {
                            DEFAULT: '#4A9D7F',
                            '50': '#E8F5F0',
                            '100': '#D1EBE1',
                            '200': '#A3D7C3',
                            '300': '#76C3A5',
                            '400': '#4A9D7F',
                            '500': '#3C7F65',
                            '600': '#2E614D',
                            '700': '#214435',
                            '800': '#13261E',
                            '900': '#040906',
                        },
                        tertiary: {
                            DEFAULT: '#627EEA', // Ethereum blue
                            '50': '#EDF0FC',
                            '100': '#DBE1F9',
                            '200': '#B7C3F3',
                            '300': '#93A6ED',
                            '400': '#627EEA',
                            '500': '#3053E4',
                            '600': '#173BCE',
                            '700': '#122FA8',
                            '800': '#0D2382',
                            '900': '#08165C',
                        },
                        accent: {
                            DEFAULT: '#F0B90B', // Binance yellow
                            '50': '#FEF9E6',
                            '100': '#FDF3CC',
                            '200': '#FAE699',
                            '300': '#F7DA66',
                            '400': '#F0B90B',
                            '500': '#C39508',
                            '600': '#967106',
                            '700': '#694D04',
                            '800': '#3C2A02',
                            '900': '#0F0A01',
                        },
                        danger: {
                            DEFAULT: '#FF6B6B',
                            '50': '#FFF0F0',
                            '100': '#FFE0E0',
                            '200': '#FFC2C2',
                            '300': '#FFA3A3',
                            '400': '#FF6B6B',
                            '500': '#FF3838',
                            '600': '#FF0505',
                            '700': '#D10000',
                            '800': '#9E0000',
                            '900': '#6B0000',
                        },
                        purple: {
                            DEFAULT: '#9164CC',
                            '50': '#F3EDFA',
                            '100': '#E7DCF5',
                            '200': '#CFB9EB',
                            '300': '#B796E0',
                            '400': '#9164CC',
                            '500': '#7642BE',
                            '600': '#5D33A0',
                            '700': '#44267C',
                            '800': '#2C1958',
                            '900': '#140B34',
                        },
                        dark: {
                            DEFAULT: '#1A1F2C',
                            '50': '#1E2430',
                            '100': '#2A303C',
                            '200': '#343D4F',
                            '300': '#3E4A62',
                        },
                        light: {
                            DEFAULT: '#F8FAFC',
                            '50': '#FFFFFF',
                            '100': '#F1F5F9',
                            '200': '#E2E8F0',
                            '300': '#CBD5E1',
                        },
                    },
                    animation: {
                        'in': 'fadeIn 0.3s ease-in-out',
                        'slide-in-top': 'slideInFromTop 0.3s ease-in-out',
                        'slide-in-bottom': 'slideInFromBottom 0.3s ease-in-out',
                    },
                    keyframes: {
                        fadeIn: {
                            'from': { opacity: '0' },
                            'to': { opacity: '1' }
                        },
                        slideInFromTop: {
                            'from': { transform: 'translateY(-20px)', opacity: '0' },
                            'to': { transform: 'translateY(0)', opacity: '1' }
                        },
                        slideInFromBottom: {
                            'from': { transform: 'translateY(20px)', opacity: '0' },
                            'to': { transform: 'translateY(0)', opacity: '1' }
                        }
                    }
                }
            }
        }
    </script>
 <script src="https://unpkg.com/lucide@latest"></script>
    <!-- Lucide Icons -->
    <script src="https://cdn.jsdelivr.net/npm/lucide@latest/dist/umd/lucide.min.js"></script>

    <!-- Additional libraries that are still needed -->
    <link rel="stylesheet" href="dash2/libs/sweetalert2/dist/sweetalert2.min.css">
    <script src="dash2/libs/sweetalert/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/r-2.2.5/datatables.min.css" />

    <!-- Alpine.js -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>

    <!-- Select2 for dropdowns -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <link rel="stylesheet" href="https://jcsoci.github.io/FontAwesome6Pro/css/all.min.css" >

    <!-- Custom Styles -->
    <style>
        @keyframes  fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes  slideInFromTop {
            from { transform: translateY(-20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        @keyframes  slideInFromBottom {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        .animate-in {
            animation: fadeIn 0.3s ease-in-out;
        }
        .slide-in-from-top {
            animation: slideInFromTop 0.3s ease-in-out;
        }
        .slide-in-from-bottom {
            animation: slideInFromBottom 0.3s ease-in-out;
        }

        /* DataTables responsive fixes */
        .dataTables_wrapper {
            overflow-x: auto;
            width: 100%;
        }

        /* Select2 dropdown fixes */
        .select2-container {
            width: 100% !important;
        }

        /* Light and Dark mode styles */
        .dark {
            color-scheme: dark;
        }

        /* Dark mode styles for DataTables */
        .dark .dataTables_wrapper .dataTable {
            background-color: #1E2430;
            color: #fff;
        }
        .dark .dataTables_wrapper .dataTable th,
        .dark .dataTables_wrapper .dataTable td {
            border-color: #2A303C;
        }
        .dark .dataTables_wrapper .dataTables_info,
        .dark .dataTables_wrapper .dataTables_paginate {
            color: #CBD5E1 !important;
        }

        /* Light mode styles for Select2 */
        .light .select2-container--default .select2-selection--single {
            background-color: #F8FAFC;
            border-color: #CBD5E1;
        }

        /* Dark mode styles for Select2 */
        .dark .select2-container--default .select2-selection--single {
            background-color: #1E2430;
            border-color: #2A303C;
            color: #F8FAFC;
        }
        .dark .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #F8FAFC;
        }
    </style>
    <!-- Livewire Styles -->
<style >
    [wire\:loading], [wire\:loading\.delay], [wire\:loading\.inline-block], [wire\:loading\.inline], [wire\:loading\.block], [wire\:loading\.flex], [wire\:loading\.table], [wire\:loading\.grid], [wire\:loading\.inline-flex] {
        display: none;
    }

    [wire\:loading\.delay\.shortest], [wire\:loading\.delay\.shorter], [wire\:loading\.delay\.short], [wire\:loading\.delay\.long], [wire\:loading\.delay\.longer], [wire\:loading\.delay\.longest] {
        display:none;
    }

    [wire\:offline] {
        display: none;
    }

    [wire\:dirty]:not(textarea):not(input):not(select) {
        display: none;
    }

    input:-webkit-autofill, select:-webkit-autofill, textarea:-webkit-autofill {
        animation-duration: 50000s;
        animation-name: livewireautofill;
    }

    @keyframes livewireautofill { from {} }
</style>
    </head>

<body class="dark:bg-dark bg-light-100 dark:text-white text-dark transition-colors duration-200">
    <script>
        
    </script>

    <!-- Application container -->
    <div class="flex flex-col md:flex-row min-h-screen relative">
        <!-- Sidebar Overlay -->
<div id="sidebar-overlay" class="fixed inset-0 bg-black/60 backdrop-blur-sm z-[10000] hidden transition-opacity duration-300"></div>

<!-- Modern Sidebar -->
<div class="fixed inset-y-0 left-0 z-[10010] w-72 transform dark:bg-gradient-to-b dark:from-dark-50 dark:to-dark bg-gradient-to-b from-light-100 to-light overflow-y-auto transition-all duration-300 ease-in-out md:relative md:translate-x-0 -translate-x-full shadow-2xl" id="sidenav-main">
    <div class="flex flex-col h-full">
        <!-- Sidebar Header with Branding -->
        <div class="flex h-16 items-center mt-4 dark:border-dark-100 border-light-200 border-b px-6">
           <a href="dashboard" class="flex items-center gap-2 font-bold text-xl">
            <img src="storage/app/public/photos/GJ2IpmE166NL2LRyIWRVsBRcdobsCIqfwvtnshJ2.png" alt="logo" class="h-8">
        </a>
            <div class="ml-auto md:hidden">
                <button class="dark:text-white text-dark-100 bg-transparent hover:text-primary transition-colors" id="closeSideNav">
                    <i data-lucide="x" class="h-5 w-5"></i>
                </button>
            </div>
        </div>

        <!-- User Profile Section with Modern Design -->
        <div class="relative mt-6 px-4 mb-6">
            <div class="p-4 rounded-xl dark:bg-dark-100/50 bg-light-200/50 backdrop-blur-sm dark:border-dark-100/40 border-light-200/40 border relative overflow-hidden group">
                <!-- Decorative background elements -->
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-b from-primary/10 to-transparent rounded-full blur-2xl transform translate-x-8 -translate-y-8 group-hover:translate-y-0 transition-transform duration-700"></div>
                <div class="absolute bottom-0 left-0 w-32 h-32 bg-gradient-to-t from-secondary/10 to-transparent rounded-full blur-2xl transform -translate-x-8 translate-y-8 group-hover:translate-y-0 transition-transform duration-700"></div>

                <!-- User info with better layout -->
                <div class="flex flex-col items-center relative">
                    <div class="relative mb-3">
                        <!-- Avatar with gradient ring -->
                        <div class="absolute inset-0 bg-gradient-to-r from-primary to-secondary rounded-full blur-[1px]"></div>
                        <div class="relative bg-primary h-16 w-16 rounded-full flex items-center justify-center text-xl font-bold dark:border-dark/80 border-light-300/80 border-2">
                            Mi
                        </div>

                        <!-- Status indicator -->
                        <div class="absolute bottom-0 right-0 h-4 w-4 bg-secondary rounded-full dark:border-dark border-light-300 border-2 shadow-lg"></div>
                    </div>

                    <h5 class="font-medium dark:text-white text-dark mb-0.5"><?php echo $user['name']; ?></h5>
                    <span class="text-xs dark:text-gray-400 text-gray-600 mb-3 dark:bg-dark-50/50 bg-light-200/50 px-2 py-0.5 rounded-full">online</span>

                    <!-- Balance display with card-like design -->
                    <div class="dark:bg-gradient-to-r dark:from-dark-50 dark:to-dark-100 bg-gradient-to-r from-light-100 to-light-200 p-3 rounded-lg w-full flex items-center gap-2 dark:border-dark-100/60 border-light-200/60 border relative overflow-hidden">
                        <div class="h-8 w-8 rounded-full bg-primary/10 flex items-center justify-center">
                            <i data-lucide="wallet" class="h-4 w-4 text-primary"></i>
                        </div>
                        <div>
                            <span class="text-xs dark:text-gray-400 text-gray-600 block">Balance</span>
                            <span class="text-sm font-medium dark:text-white text-dark">$0.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation Menu with Category Sections -->
        <div class="flex-1 px-3 py-2">
            <div class="space-y-6">
                <!-- Main Navigation Section -->
                <div>
                    <p class="text-xs font-medium text-gray-500 uppercase px-3 mb-2">Main</p>
                    <nav class="space-y-1">
                        <a href="dashboard" class="flex items-center gap-3 rounded-lg dark:text-gray-300 text-gray-700 hover:bg-dark-100/60 dark:hover:bg-dark-100/60 hover:bg-light-200/60 px-3 py-2 transition-colors">
                            <i data-lucide="home" class="h-5 w-5"></i>
                            <span>Dashboard</span>
                        </a>

                        <a href="dashboard/account-settings" class="flex items-center gap-3 rounded-lg dark:text-gray-300 text-gray-700 hover:bg-dark-100/60 dark:hover:bg-dark-100/60 hover:bg-light-200/60 px-3 py-2 transition-colors">
                            <i data-lucide="user" class="h-5 w-5"></i>
                            <span>Profile</span>
                        </a>
                    </nav>
                </div>

                <!-- Finance Section -->
                <div>
                    <p class="text-xs font-medium text-gray-500 uppercase px-3 mb-2">Finance</p>
                    <nav class="space-y-1">
                        <a href="dashboard/deposits" class="flex items-center gap-3 rounded-lg dark:text-gray-300 text-gray-700 hover:bg-dark-100/60 dark:hover:bg-dark-100/60 hover:bg-light-200/60 px-3 py-2 transition-colors">
                            <i data-lucide="download" class="h-5 w-5"></i>
                            <span>Deposit</span>
                        </a>

                                                <a href="dashboard/withdrawals" class="flex items-center gap-3 rounded-lg dark:text-gray-300 text-gray-700 hover:bg-dark-100/60 dark:hover:bg-dark-100/60 hover:bg-light-200/60 px-3 py-2 transition-colors">
                            <i data-lucide="upload" class="h-5 w-5"></i>
                            <span>Withdraw</span>
                        </a>
                        
                        <a href="dashboard/accounthistory" class="flex items-center gap-3 rounded-lg dark:text-gray-300 text-gray-700 hover:bg-dark-100/60 dark:hover:bg-dark-100/60 hover:bg-light-200/60 px-3 py-2 transition-colors">
                            <i data-lucide="history" class="h-5 w-5"></i>
                            <span>Transactions</span>
                        </a>

                                            </nav>
                </div>

                <!-- Investment Section -->
                                <div>
                    <p class="text-xs font-medium text-gray-500 uppercase px-3 mb-2">Investments</p>
                    <nav class="space-y-1">
                        <a href="dashboard/buy-plan" class="flex items-center gap-3 rounded-lg bg-primary/10 text-primary px-3 py-2 transition-colors">
                            <i data-lucide="briefcase" class="h-5 w-5"></i>
                            <span>Trading Plans</span>
                        </a>

                        <a href="dashboard/myplans/All" class="flex items-center gap-3 rounded-lg dark:text-gray-300 text-gray-700 hover:bg-dark-100/60 dark:hover:bg-dark-100/60 hover:bg-light-200/60 px-3 py-2 transition-colors">
                            <i data-lucide="folder" class="h-5 w-5"></i>
                            <span>My Plans</span>
                        </a>

                        <a href="dashboard/tradinghistory" class="flex items-center gap-3 rounded-lg dark:text-gray-300 text-gray-700 hover:bg-dark-100/60 dark:hover:bg-dark-100/60 hover:bg-light-200/60 px-3 py-2 transition-colors">
                            <i data-lucide="trending-up" class="h-5 w-5"></i>
                            <span>Profit History</span>
                        </a>
                    </nav>
                </div>
                
                <!-- Additional Services Section -->
                <div>
                    <p class="text-xs font-medium text-gray-500 uppercase px-3 mb-2">Services</p>
                    <nav class="space-y-1">
                        

                        
                        
                        
                        <a href="dashboard/referuser" class="flex items-center gap-3 rounded-lg dark:text-gray-300 text-gray-700 hover:bg-dark-100/60 dark:hover:bg-dark-100/60 hover:bg-light-200/60 px-3 py-2 transition-colors">
                            <i data-lucide="users" class="h-5 w-5"></i>
                            <span>Referrals</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Help Section with Enhanced Design -->
        <div class="mt-auto px-4 pb-6">
            <div class="rounded-xl overflow-hidden bg-gradient-to-r from-primary/80 to-secondary/80 p-0.5">
                <div class="dark:bg-dark-50 bg-light-100 rounded-lg p-4">
                    <div class="flex items-start gap-3">
                        <div class="bg-primary/20 rounded-full p-2">
                            <i data-lucide="life-buoy" class="h-5 w-5 text-primary"></i>
                        </div>
                        <div>
                            <h5 class="font-medium dark:text-white text-dark text-sm mb-1">Need Help?</h5>
                            <p class="text-xs dark:text-gray-300 text-gray-700 mb-3">
                                Our support team is available 24/7
                            </p>
                            <a href="dashboard/support" class="flex items-center justify-center gap-2 dark:bg-dark-100 bg-light-200 hover:bg-light-200/80 dark:hover:bg-dark-100/80 dark:text-white text-dark rounded-lg py-2 text-xs font-medium transition-colors">
                                <i data-lucide="message-circle" class="h-3.5 w-3.5"></i>
                                <span>Contact Support</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Lucide icons
        lucide.createIcons();

        // Get elements
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const sidebar = document.getElementById('sidenav-main');
        const closeBtn = document.getElementById('closeSideNav');
        const overlay = document.getElementById('sidebar-overlay');

        // Helper function to open sidebar
        function openSidebar() {
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
            setTimeout(() => {
                overlay.classList.add('opacity-100');
            }, 50);
        }

        // Helper function to close sidebar
        function closeSidebar() {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
            overlay.classList.remove('opacity-100');
            document.body.classList.remove('overflow-hidden');
        }

        // Toggle sidebar on mobile menu button click
        if (mobileMenuToggle && sidebar) {
            mobileMenuToggle.addEventListener('click', function(e) {
                e.stopPropagation();
                if (sidebar.classList.contains('-translate-x-full')) {
                    openSidebar();
                } else {
                    closeSidebar();
                }
            });
        }

        // Close sidebar on close button click
        if (closeBtn && sidebar) {
            closeBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                closeSidebar();
            });
        }

        // Close sidebar when clicking on overlay
        if (overlay) {
            overlay.addEventListener('click', function() {
                closeSidebar();
            });
        }

        // Close sidebar when clicking outside
        document.addEventListener('click', function(event) {
            const isClickInsideSidebar = sidebar.contains(event.target);
            const isClickOnToggle = mobileMenuToggle && (event.target === mobileMenuToggle || mobileMenuToggle.contains(event.target));

            if (!isClickInsideSidebar && !isClickOnToggle && !sidebar.classList.contains('-translate-x-full')) {
                closeSidebar();
            }
        });

        // Close sidebar when pressing Escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeSidebar();
            }
        });
    });
</script>

        <!-- Main Content -->
    <div class="w-full flex flex-col">
    <!-- Top Menu -->
    <!-- Enhanced Top Navigation Bar -->
<header class="flex h-16 items-center justify-between dark:border-dark-100 border-light-200 border-b px-4 sm:px-6 sticky top-0 z-[9999] bg-gradient-to-r dark:from-dark dark:to-dark-50 from-light to-light-100 backdrop-blur-sm shadow-md">
    <div class="flex items-center gap-4">
        <!-- Mobile Menu Toggle with Improved Design -->
        <button class="md:hidden dark:text-white text-dark p-1.5 rounded-lg dark:hover:bg-dark-100/60 hover:bg-light-200/60 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/50" id="mobileMenuToggle">
            <i class="fas fa-bars h-5 w-5"></i>
        </button>
        
        <!-- Mobile Logo with Enhanced Appearance -->
        <div class="flex items-center gap-3 md:hidden">
            <div class="flex items-center gap-2 font-bold text-xl md:hidden">
            <img src="storage/app/public/photos/GJ2IpmE166NL2LRyIWRVsBRcdobsCIqfwvtnshJ2.png" alt="logo" class="h-8">
        </div>
        </div>
    </div>
    
    <!-- Right-side items with Better Layout -->
    <div class="flex items-center gap-1.5 sm:gap-3">
        <!-- Theme Toggle Button -->
       <button id="themeToggle" onclick="toggleTheme()" class="p-1.5 dark:text-gray-300 text-gray-700 hover:text-dark dark:hover:text-white dark:bg-dark-100/40 bg-light-200/40 hover:bg-light-200/80 dark:hover:bg-dark-100/80 rounded-lg transition-colors" title="Toggle Theme">
            <!-- Sun icon for light theme (shown in dark mode) -->
            <i data-lucide="sun" class="h-4 w-4"></i>
            <!-- Moon icon for dark theme (shown in light mode) -->
            <i data-lucide="moon" class="h-4 w-4"></i>
        </button>
        
        <!-- KYC Verification with Improved Design -->
                <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="flex items-center dark:text-gray-300 text-gray-700 hover:text-dark dark:hover:text-white dark:bg-dark-100/40 bg-light-200/40 hover:bg-light-200/80 dark:hover:bg-dark-100/80 px-2 py-1 rounded-lg text-xs dark:border-dark-100 border-light-200 border transition-colors">
                <i class="fas fa-shield-alt h-3.5 w-3.5 mr-1"></i>
                <span class="hidden sm:inline-block">KYC</span>
            </button>
            <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-56 dark:bg-dark-50 bg-light-100 dark:border-dark-100 border-light-200 border rounded-lg shadow-lg overflow-hidden z-[10000]">
                <div class="bg-gradient-to-r dark:from-dark-100 dark:to-dark-100/30 from-light-200 to-light-200/30 px-4 py-3 dark:border-dark-100 border-light-200 border-b">
                    <h6 class="text-sm font-medium dark:text-white text-dark">KYC Verification</h6>
                    <p class="text-xs dark:text-gray-400 text-gray-600 mt-0.5">Verify your identity to unlock all features</p>
                </div>
                <div class="p-4 text-center">
                                            <div class="dark:bg-dark-100/40 bg-light-200/40 rounded-lg p-3 mb-3">
                            <i class="fas fa-shield-alt h-8 w-8 text-primary mx-auto mb-2"></i>
                            <span class="text-xs dark:text-gray-300 text-gray-700 block">Your account is not verified</span>
                        </div>
                        <a href="dashboard/verify-account" class="inline-flex items-center justify-center gap-1.5 bg-gradient-to-r from-primary to-primary/80 text-white text-xs font-medium px-4 py-2 rounded-lg hover:from-primary/90 hover:to-primary/70 transition-all">
                            <i class="fas fa-shield-check h-3.5 w-3.5"></i>
                            <span>Verify Account</span>
                        </a>
                                    </div>
            </div>
                    </div>
                
        <!-- Notifications with Enhanced Design -->
        <div class="relative" 
            x-data="{ 
                open: false, 
                notifications: [], 
                unreadCount: 0, 
                loading: true, 
                init() { 
                    this.fetchNotifications(); 
                    this.setupPolling(); 
                }, 
                fetchNotifications() { 
                    this.loading = true; 
                    fetch('dashboard/api/notifications/latest') 
                        .then(response => response.json()) 
                        .then(data => { 
                            this.notifications = data.notifications; 
                            this.unreadCount = data.unread_count; 
                            this.loading = false; 
                        }) 
                        .catch(error => { 
                            console.error('Error fetching notifications:', error); 
                            this.loading = false; 
                        }); 
                }, 
                setupPolling() { 
                    setInterval(() => { 
                        this.fetchNotifications(); 
                    }, 30000); 
                } 
            }"
            x-init="init()"
        >
            <button @click="open = !open; if(open) fetchNotifications();" class="p-1.5 dark:text-gray-300 text-gray-700 hover:text-dark dark:hover:text-white dark:bg-dark-100/40 bg-light-200/40 hover:bg-light-200/80 dark:hover:bg-dark-100/80 rounded-lg transition-colors relative" title="Notifications">
                <i class="fas fa-bell h-4 w-4"></i>
                <span x-show="unreadCount > 0" x-text="unreadCount > 9 ? '9+' : unreadCount" class="absolute -right-1 -top-1 h-4 w-4 flex items-center justify-center bg-primary text-[10px] text-white rounded-full dark:border-dark border-light-100 border"></span>
            </button>
            
            <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-72 dark:bg-dark-50 bg-light-100 dark:border-dark-100 border-light-200 border rounded-lg shadow-lg overflow-hidden z-[10000]">
                <div class="bg-gradient-to-r dark:from-dark-100 dark:to-dark-100/30 from-light-200 to-light-200/30 px-4 py-3 flex items-center justify-between dark:border-dark-100 border-light-200 border-b">
                    <h6 class="text-sm font-medium dark:text-white text-dark">Notifications</h6>
                    <span x-show="unreadCount > 0" x-text="unreadCount" class="text-xs bg-primary text-white px-1.5 py-0.5 rounded-full"></span>
                </div>
                
                <div class="max-h-[280px] overflow-y-auto">
                    <!-- Loading State -->
                    <template x-if="loading">
                        <div class="p-4 text-center">
                            <div class="inline-block h-6 w-6 animate-spin rounded-full border-2 border-solid border-primary border-r-transparent motion-reduce:animate-[spin_1.5s_linear_infinite]" role="status">
                                <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Loading...</span>
                            </div>
                        </div>
                    </template>
                    
                    <!-- Empty State -->
                    <template x-if="!loading && notifications.length === 0">
                        <div class="p-4 text-center">
                            <div class="h-12 w-12 rounded-full bg-light-200/60 dark:bg-dark-100/60 flex items-center justify-center mx-auto mb-2">
                                <i class="fas fa-bell-slash h-6 w-6 dark:text-gray-400 text-gray-600"></i>
                            </div>
                            <p class="text-xs dark:text-gray-400 text-gray-600">No notifications yet</p>
                        </div>
                    </template>
                    
                    <!-- Notifications List -->
                    <template x-if="!loading && notifications.length > 0">
                        <div>
                            <template x-for="notification in notifications" :key="notification.id">
                                <a :href="'dashboard/notifications/mark-as-read/' + notification.id" class="block p-3 dark:border-dark-100/60 border-light-200/60 border-b hover:bg-dark-100/30 dark:hover:bg-dark-100/30 hover:bg-light-200/30 transition-colors" :class="{ 'dark:bg-dark-100/50 bg-light-200/50': !notification.is_read }">
                                    <div class="flex gap-3">
                                        <div :class="notification.icon_bg_color || 'bg-primary/10'" class="h-8 w-8 rounded-full flex items-center justify-center flex-shrink-0">
                                            <i :class="'fas ' + (notification.icon || 'fa-bell')" class="h-4 w-4 text-primary"></i>
                                        </div>
                                        <div>
                                            <p class="text-xs dark:text-white text-dark font-medium" x-text="notification.title || 'Notification'"></p>
                                            <p class="text-xs dark:text-gray-400 text-gray-600 mt-0.5" x-text="notification.message"></p>
                                            <p class="text-xs dark:text-gray-500 text-gray-500 mt-1" x-text="new Date(notification.created_at).toLocaleString()"></p>
                                        </div>
                                    </div>
                                </a>
                            </template>
                        </div>
                    </template>
                </div>
                
                <div class="p-2 dark:border-dark-100 border-light-200 border-t flex justify-between">
                    <a x-show="unreadCount > 0" href="dashboard/notifications/mark-all-as-read" class="block text-xs text-primary hover:text-primary/80 py-1 px-2">
                        Mark all as read
                    </a>
                    <a href="dashboard/notifications" class="block text-xs text-primary hover:text-primary/80 py-1 px-2 ml-auto">
                        View all
                    </a>
                </div>
            </div>
        </div>
        
        <!-- User Profile Dropdown with Enhanced Design -->
        <div class="relative" x-data="{ open: false }">
            <button @click="open = !open" class="flex items-center gap-2 p-1 rounded-lg hover:bg-dark-100/40 dark:hover:bg-dark-100/40 hover:bg-light-200/40 transition-colors">
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary to-secondary rounded-full opacity-80"></div>
                    <div class="relative h-7 w-7 sm:h-8 sm:w-8 bg-primary rounded-full flex items-center justify-center text-sm font-medium dark:border-dark-50 border-light-300 border-2">
                        Mi
                    </div>
                </div>
                <span class="hidden md:block text-sm font-medium dark:text-white text-dark">Mykaeltech</span>
                <i class="fas fa-chevron-down h-4 w-4 dark:text-gray-400 text-gray-600 hidden md:block"></i>
            </button>
            
            <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-56 dark:bg-dark-50 bg-light-100 dark:border-dark-100 border-light-200 border rounded-lg shadow-lg overflow-hidden z-[10000]">
                <div class="bg-gradient-to-r dark:from-dark-100 dark:to-dark-100/30 from-light-200 to-light-200/30 px-4 py-3 dark:border-dark-100 border-light-200 border-b">
                    <h6 class="text-sm font-medium dark:text-white text-dark"><?php echo $user['name']; ?></h6>
                    <p class="text-xs dark:text-gray-400 text-gray-600 mt-0.5"><?php echo $user['email']; ?></p>
                </div>
                
                <div class="py-2">
                    <a href="dashboard/account-settings" class="flex items-center gap-2 px-4 py-2 text-sm dark:text-gray-300 text-gray-700 dark:hover:bg-dark-100/60 hover:bg-light-200/60 transition-colors">
                        <i class="fas fa-user h-4 w-4 dark:text-gray-400 text-gray-600"></i>
                        <span>My Profile</span>
                    </a>
                    <a href="dashboard/accounthistory" class="flex items-center gap-2 px-4 py-2 text-sm dark:text-gray-300 text-gray-700 dark:hover:bg-dark-100/60 hover:bg-light-200/60 transition-colors">
                        <i class="fas fa-history h-4 w-4 dark:text-gray-400 text-gray-600"></i>
                        <span>Transaction History</span>
                    </a>
                    <a href="dashboard/support" class="flex items-center gap-2 px-4 py-2 text-sm dark:text-gray-300 text-gray-700 dark:hover:bg-dark-100/60 hover:bg-light-200/60 transition-colors">
                        <i class="fas fa-life-ring h-4 w-4 dark:text-gray-400 text-gray-600"></i>
                        <span>Support</span>
                    </a>
                </div>
                
                <div class="py-2 dark:border-dark-100 border-light-200 border-t">
                    <a href="logout" 
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                       class="flex items-center gap-2 px-4 py-2 text-sm text-danger dark:hover:bg-dark-100/60 hover:bg-light-200/60 transition-colors">
                        <i class="fas fa-sign-out-alt h-4 w-4"></i>
                        <span>Logout</span>
                    </a>
                    
                    <form id="logout-form" action="logout" method="POST" class="hidden">
                        <input type="hidden" name="_token" value="cnu2sqNcMeHm3RGT0DpQrHD8ck50tZ2ulX2ISClQ">                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
    <!-- Page content -->
    <div class="p-4 md:p-6 pb-20 md:pb-8 overflow-x-hidden flex-grow">
            <!-- Page Header -->
    <div class="relative mb-8">
        <div class="absolute inset-0 bg-gradient-to-r from-primary/20 to-secondary/20 rounded-3xl -z-10 blur-xl opacity-50"></div>
        <div class="px-6 py-8 rounded-3xl bg-gradient-to-r from-primary/5 to-secondary/5 backdrop-blur-sm border border-white/10">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div>
                    <h1 class="text-3xl font-bold dark:text-white text-dark">Investment Hub</h1>
                    <p class="mt-2 text-base dark:text-gray-300 text-gray-600">Grow your wealth with our curated investment plans</p>
                </div>
                <div>
                    <div class="flex items-center gap-3 px-4 py-2 rounded-full bg-white/10 dark:bg-dark-50/50 backdrop-blur-sm border border-white/20 dark:border-dark-200/50">
                        <div class="flex items-center justify-center w-10 h-10 rounded-full bg-primary/20 text-primary">
                            <i class="fas fa-wallet"></i>
                        </div>
                        <div>
                            <p class="text-xs dark:text-gray-400 text-gray-500">Your Balance</p>
                            <p class="text-lg font-semibold dark:text-white text-dark">$0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Main Content Area -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Left Column - Investment Plans Section -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Investment Plans Card -->
            <div class="rounded-2xl overflow-hidden bg-white dark:bg-dark-50 shadow-xl shadow-primary/5 dark:shadow-primary/10 border border-light-200/50 dark:border-dark-200/50">
                <div class="p-6 border-b border-light-200/50 dark:border-dark-200/50">
                    <div class="flex flex-wrap items-center justify-between gap-4">
                        <h2 class="text-xl font-semibold dark:text-white text-dark flex items-center">
                            <i class="fas fa-chart-line mr-2 text-primary"></i>
                            Curated Investment Plans
                        </h2>
                        
                        <!-- Market Pulse Indicator -->
                        <div class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-primary/10 dark:bg-primary/10">
                            <div class="w-2.5 h-2.5 rounded-full bg-green-500 animate-pulse"></div>
                            <span class="text-xs font-medium text-primary">Markets active</span>
                        </div>
                    </div>
                </div>
                
                <!-- Plan Selection Component -->
                <div class="p-6">
                    <div wire:id="fWKkyuweNx2jQP3Xdvw1" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;fWKkyuweNx2jQP3Xdvw1&quot;,&quot;name&quot;:&quot;user.investment-plan&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;dashboard\/buy-plan&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;841e2d57&quot;,&quot;data&quot;:{&quot;planSelected&quot;:[],&quot;amountToInvest&quot;:0,&quot;disabled&quot;:&quot;disabled&quot;,&quot;paymentMethod&quot;:&quot;Account Balance&quot;,&quot;feedback&quot;:&quot;&quot;},&quot;dataMeta&quot;:{&quot;models&quot;:{&quot;planSelected&quot;:{&quot;class&quot;:&quot;App\\Models\\Plans&quot;,&quot;id&quot;:13,&quot;relations&quot;:[],&quot;connection&quot;:&quot;mysql&quot;}}},&quot;checksum&quot;:&quot;2ad7fec7e8627f964212ef0148145f98359b3c063e62178d3e19e9d2e87d2148&quot;}}">
            <div class="space-y-6">
            <!-- Plan Selection Area -->
            <div class="space-y-5">
                <!-- Plan Selection Tabs -->
                <div class="flex overflow-x-auto hide-scrollbar pb-2" x-data="{ activePlan: '13' }">
                    <div class="flex flex-col space-y-2 sm:flex-row sm:space-y-0 sm:space-x-2">
                                                    <button 
                                wire:click="selectPlan(13)"
                                @click="activePlan = '13'"
                                class="flex-shrink-0 group relative px-4 py-3 rounded-xl transition-all duration-200 focus:outline-none"
                                :class="activePlan == '13' ? 'bg-primary text-white' : 'hover:bg-light-100 dark:hover:bg-dark-100 text-gray-700 dark:text-gray-300'"
                            >
                                <div class="flex items-center gap-3">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full" 
                                        :class="activePlan == '13' ? 'bg-white/20' : 'bg-primary/10 text-primary'">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div class="text-left">
                                        <p class="font-medium text-sm">Platinum</p>
                                        <p class="text-xs opacity-80">$100,000+</p>
                                    </div>
                                </div>
                                <!-- Selected indicator dot -->
                                <div class="absolute -bottom-0.5 left-1/2 transform -translate-x-1/2 w-1.5 h-1.5 rounded-full transition-all duration-200"
                                    :class="activePlan == '13' ? 'bg-white' : 'bg-transparent'"></div>
                            </button>
                                                    <button 
                                wire:click="selectPlan(12)"
                                @click="activePlan = '12'"
                                class="flex-shrink-0 group relative px-4 py-3 rounded-xl transition-all duration-200 focus:outline-none"
                                :class="activePlan == '12' ? 'bg-primary text-white' : 'hover:bg-light-100 dark:hover:bg-dark-100 text-gray-700 dark:text-gray-300'"
                            >
                                <div class="flex items-center gap-3">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full" 
                                        :class="activePlan == '12' ? 'bg-white/20' : 'bg-primary/10 text-primary'">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div class="text-left">
                                        <p class="font-medium text-sm">Gold</p>
                                        <p class="text-xs opacity-80">$50,000+</p>
                                    </div>
                                </div>
                                <!-- Selected indicator dot -->
                                <div class="absolute -bottom-0.5 left-1/2 transform -translate-x-1/2 w-1.5 h-1.5 rounded-full transition-all duration-200"
                                    :class="activePlan == '12' ? 'bg-white' : 'bg-transparent'"></div>
                            </button>
                                                    <button 
                                wire:click="selectPlan(11)"
                                @click="activePlan = '11'"
                                class="flex-shrink-0 group relative px-4 py-3 rounded-xl transition-all duration-200 focus:outline-none"
                                :class="activePlan == '11' ? 'bg-primary text-white' : 'hover:bg-light-100 dark:hover:bg-dark-100 text-gray-700 dark:text-gray-300'"
                            >
                                <div class="flex items-center gap-3">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full" 
                                        :class="activePlan == '11' ? 'bg-white/20' : 'bg-primary/10 text-primary'">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div class="text-left">
                                        <p class="font-medium text-sm">Silver</p>
                                        <p class="text-xs opacity-80">$5,000+</p>
                                    </div>
                                </div>
                                <!-- Selected indicator dot -->
                                <div class="absolute -bottom-0.5 left-1/2 transform -translate-x-1/2 w-1.5 h-1.5 rounded-full transition-all duration-200"
                                    :class="activePlan == '11' ? 'bg-white' : 'bg-transparent'"></div>
                            </button>
                                                    <button 
                                wire:click="selectPlan(10)"
                                @click="activePlan = '10'"
                                class="flex-shrink-0 group relative px-4 py-3 rounded-xl transition-all duration-200 focus:outline-none"
                                :class="activePlan == '10' ? 'bg-primary text-white' : 'hover:bg-light-100 dark:hover:bg-dark-100 text-gray-700 dark:text-gray-300'"
                            >
                                <div class="flex items-center gap-3">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full" 
                                        :class="activePlan == '10' ? 'bg-white/20' : 'bg-primary/10 text-primary'">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div class="text-left">
                                        <p class="font-medium text-sm">Starter</p>
                                        <p class="text-xs opacity-80">$500+</p>
                                    </div>
                                </div>
                                <!-- Selected indicator dot -->
                                <div class="absolute -bottom-0.5 left-1/2 transform -translate-x-1/2 w-1.5 h-1.5 rounded-full transition-all duration-200"
                                    :class="activePlan == '10' ? 'bg-white' : 'bg-transparent'"></div>
                            </button>
                                            </div>
                </div>

                <!-- Plan Details Card -->
                                <div class="rounded-xl overflow-hidden border border-light-200/50 dark:border-dark-200/50 bg-gradient-to-br from-white/50 to-white/20 dark:from-dark-50/50 dark:to-dark-50/20 p-5">
                    <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4">
                        <div>
                            <h3 class="font-semibold text-xl dark:text-white text-dark">Platinum</h3>
                            <p class="text-sm dark:text-gray-400 text-gray-600 mt-1">
                                3 Months plan with 
                                                                    80% Daily
                                                                returns
                            </p>
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <div class="rounded-lg px-3 py-1.5 bg-primary/10 text-primary text-xs font-medium">
                                Min: $100,000
                            </div>
                            <div class="rounded-lg px-3 py-1.5 bg-primary/10 text-primary text-xs font-medium">
                                Max: $5,000,000,000,000
                            </div>
                            <div class="rounded-lg px-3 py-1.5 bg-green-500/10 text-green-500 text-xs font-medium">
                                40% - 80% ROI
                            </div>
                        </div>
                    </div>

                    <!-- Plan Benefits -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-5">
                        <div class="flex items-center gap-3">
                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center">
                                <i class="fas fa-calendar text-blue-600 dark:text-blue-400"></i>
                            </div>
                            <div>
                                <p class="text-xs dark:text-gray-400 text-gray-500">Duration</p>
                                <p class="text-sm font-medium dark:text-white text-dark">3 Months</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center">
                                <i class="fas fa-chart-bar text-green-600 dark:text-green-400"></i>
                            </div>
                            <div>
                                <p class="text-xs dark:text-gray-400 text-gray-500">Return Rate</p>
                                <p class="text-sm font-medium dark:text-white text-dark">
                                                                            80% Daily
                                                                    </p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center">
                                <i class="fas fa-gift text-purple-600 dark:text-purple-400"></i>
                            </div>
                            <div>
                                <p class="text-xs dark:text-gray-400 text-gray-500">Bonus</p>
                                <p class="text-sm font-medium dark:text-white text-dark">$500</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- Investment Configuration -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Amount Selection Column -->
                <div class="space-y-6">
                    <!-- Quick Amount Selection -->
                    <div>
                        <p class="text-sm font-medium dark:text-white text-dark mb-3">
                            Quick Amount Selection
                        </p>
                        <div class="grid grid-cols-3 gap-2">
                            <button class="py-3 rounded-xl text-center transition-all duration-200 hover:scale-105 hover:shadow-md dark:text-white text-dark
                                        border border-light-200/50 dark:border-dark-200/50 hover:border-primary dark:hover:border-primary"
                                wire:click="selectAmount('100')">$100</button>
                            <button class="py-3 rounded-xl text-center transition-all duration-200 hover:scale-105 hover:shadow-md dark:text-white text-dark
                                        border border-light-200/50 dark:border-dark-200/50 hover:border-primary dark:hover:border-primary"
                                wire:click="selectAmount('250')">$250</button>
                            <button class="py-3 rounded-xl text-center transition-all duration-200 hover:scale-105 hover:shadow-md dark:text-white text-dark
                                        border border-light-200/50 dark:border-dark-200/50 hover:border-primary dark:hover:border-primary"
                                wire:click="selectAmount('500')">$500</button>
                            <button class="py-3 rounded-xl text-center transition-all duration-200 hover:scale-105 hover:shadow-md dark:text-white text-dark
                                        border border-light-200/50 dark:border-dark-200/50 hover:border-primary dark:hover:border-primary"
                                wire:click="selectAmount('1000')">$1K</button>
                            <button class="py-3 rounded-xl text-center transition-all duration-200 hover:scale-105 hover:shadow-md dark:text-white text-dark
                                        border border-light-200/50 dark:border-dark-200/50 hover:border-primary dark:hover:border-primary"
                                wire:click="selectAmount('2000')">$2K</button>
                            <button class="py-3 rounded-xl text-center transition-all duration-200 hover:scale-105 hover:shadow-md dark:text-white text-dark
                                        border border-light-200/50 dark:border-dark-200/50 hover:border-primary dark:hover:border-primary"
                                wire:click="selectAmount('5000')">$5K</button>
                        </div>
                    </div>

                    <!-- Custom Amount Input -->
                    <div>
                        <p class="text-sm font-medium dark:text-white text-dark mb-3">
                            Or Enter Custom Amount
                        </p>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <span class="text-gray-500 dark:text-gray-400 text-lg font-medium">$</span>
                            </div>
                            <input 
                                type="number" 
                                required 
                                wire:model='amountToInvest'
                                wire:keyup="checkIfAmountIsEmpty" 
                                class="block w-full pl-10 pr-4 py-4 text-lg font-medium rounded-xl bg-light-100/50 dark:bg-dark-100/50 border border-light-200/50 dark:border-dark-200/50 focus:ring-2 focus:ring-primary focus:border-transparent dark:text-white text-dark transition-all duration-200" 
                                placeholder="Enter amount"
                                min="100000"
                                max="5000000000000"
                            >
                        </div>
                        
                        <!-- Min/Max Slider (if plan selected) -->
                                                <div class="mt-3">
                            <div class="flex justify-between text-xs text-gray-500 dark:text-gray-400 mb-1">
                                <span>$100,000</span>
                                <span>$5,000,000,000,000</span>
                            </div>
                            <div class="w-full h-1 bg-gray-200 dark:bg-dark-200 rounded-full overflow-hidden">
                                                                    <div class="h-full bg-primary rounded-full" style="width: 0%"></div>
                                                            </div>
                        </div>
                                            </div>
                    
                    <!-- Expected Returns Preview (if amount and plan selected) -->
                                    </div>
                
                <!-- Payment Method Column -->
                <div class="space-y-6">
                    <!-- Payment Method Selection -->
                    <div>
                        <p class="text-sm font-medium dark:text-white text-dark mb-3">
                            Payment Method
                        </p>
                        
                        <div class="space-y-3">
                            <!-- Account Balance Option -->
                            <div 
                                class="relative rounded-xl overflow-hidden border-2 transition-all duration-200 cursor-pointer border-primary dark:border-primary shadow-lg shadow-primary/10"
                                wire:click="chanegePaymentMethod('Account Balance')"
                            >
                                <div class="flex items-center gap-4 p-4">
                                    <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-primary text-white flex items-center justify-center">
                                        <i class="fas fa-wallet"></i>
                                    </div>
                                    <div>
                                        <p class="font-medium dark:text-white text-dark">Account Balance</p>
                                        <p class="text-sm dark:text-gray-400 text-gray-600">
                                            $0.00 available
                                        </p>
                                    </div>
                                                                            <div class="absolute right-3 top-3">
                                            <div class="w-6 h-6 rounded-full bg-primary flex items-center justify-center text-white">
                                                <i class="fas fa-check"></i>
                                            </div>
                                        </div>
                                                                    </div>
                                
                                <!-- Available Balance Progress Bar -->
                                <div class="px-4 pb-4">
                                                                    </div>
                            </div>
                            
                            
                        </div>
                    </div>
                     <!-- Alerts -->
                <div>
                    <div>
    </div>                    <div>
    </div>                </div>
                    
                    <!-- Investment Summary -->
                    <div class="rounded-xl overflow-hidden border border-light-200/50 dark:border-dark-200/50 bg-light-100/50 dark:bg-dark-100/50">
                        <div class="p-4 border-b border-light-200/50 dark:border-dark-200/50">
                            <p class="font-medium dark:text-white text-dark">Investment Summary</p>
                        </div>
                        <div class="p-4">
                            <div class="space-y-3">
                                <div class="flex justify-between items-center">
                                    <span class="text-sm dark:text-gray-400 text-gray-600">Selected Plan:</span>
                                    <span class="text-sm font-medium dark:text-white text-dark">Platinum</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-sm dark:text-gray-400 text-gray-600">Investment Amount:</span>
                                    <span class="text-sm font-medium dark:text-white text-dark">$0.00</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-sm dark:text-gray-400 text-gray-600">Payment Method:</span>
                                    <span class="text-sm font-medium dark:text-white text-dark">Account Balance</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-sm dark:text-gray-400 text-gray-600">Duration:</span>
                                    <span class="text-sm font-medium dark:text-white text-dark">3 Months</span>
                                </div>
                            </div>
                            
                            
                            <!-- Invest Button -->
                            <div class="mt-4">
                                <form action="" wire:submit.prevent="joinPlan">
                                    <button 
                                        type="submit"
                                        class="w-full py-3 rounded-xl bg-gradient-to-r from-primary to-primary/90 text-white font-medium flex items-center justify-center gap-2 hover:shadow-lg hover:shadow-primary/20 transition-all duration-200 disabled:opacity-70 disabled:cursor-not-allowed"
                                        disabled
                                    >
                                        <i class="fas fa-chart-line"></i>
                                        Confirm & Invest Now
                                    </button>
                                </form>
                                <p class="mt-2 text-sm text-center text-primary" wire:loading wire:target="joinPlan">
                                    
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Livewire Component wire-end:fWKkyuweNx2jQP3Xdvw1 -->                </div>
            </div>
            
            <!-- Investment Insights Card -->
            <div class="rounded-2xl overflow-hidden bg-white dark:bg-dark-50 shadow-xl shadow-primary/5 dark:shadow-primary/10 border border-light-200/50 dark:border-dark-200/50">
                <div class="p-6 border-b border-light-200/50 dark:border-dark-200/50">
                    <h2 class="text-xl font-semibold dark:text-white text-dark flex items-center">
                        <i data-lucide="trending-up" class="h-5 w-5 mr-2 text-primary"></i>
                        Investment Insights
                    </h2>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Performance Card -->
                        <div class="rounded-xl overflow-hidden p-4 border border-light-200/50 dark:border-dark-200/50 bg-gradient-to-br from-white/50 to-white/20 dark:from-dark-50/50 dark:to-dark-50/20">
                            <div class="flex items-center justify-center h-12 w-12 rounded-xl bg-green-100 dark:bg-green-900/30 mb-4">
                                <i class="fas fa-chart-bar text-green-600 dark:text-green-400"></i>
                            </div>
                            <h3 class="text-lg font-semibold dark:text-white text-dark mb-2">Performance</h3>
                            <p class="text-sm dark:text-gray-300 text-gray-600 mb-4">
                                Our investment plans have consistently outperformed market benchmarks.
                            </p>
                            <div class="flex items-center">
                                <span class="text-2xl font-bold text-green-600 dark:text-green-400">+18.7%</span>
                                <span class="ml-2 text-xs text-gray-500 dark:text-gray-400">avg. annual return</span>
                            </div>
                        </div>
                        
                        <!-- Risk Level Card -->
                        <div class="rounded-xl overflow-hidden p-4 border border-light-200/50 dark:border-dark-200/50 bg-gradient-to-br from-white/50 to-white/20 dark:from-dark-50/50 dark:to-dark-50/20">
                            <div class="flex items-center justify-center h-12 w-12 rounded-xl bg-blue-100 dark:bg-blue-900/30 mb-4">
                                <i class="fas fa-shield-alt text-blue-600 dark:text-blue-400"></i>
                            </div>
                            <h3 class="text-lg font-semibold dark:text-white text-dark mb-2">Risk Management</h3>
                            <p class="text-sm dark:text-gray-300 text-gray-600 mb-4">
                                Our diversified approach minimizes risk while maximizing returns.
                            </p>
                            <div class="w-full bg-gray-200 dark:bg-dark-200 rounded-full h-2.5">
                                <div class="bg-blue-600 dark:bg-blue-400 h-2.5 rounded-full" style="width: 35%"></div>
                            </div>
                            <div class="flex justify-between mt-1 text-xs text-gray-500 dark:text-gray-400">
                                <span>Low</span>
                                <span>Moderate</span>
                                <span>High</span>
                            </div>
                        </div>
                        
                        <!-- Liquidity Card -->
                        <div class="rounded-xl overflow-hidden p-4 border border-light-200/50 dark:border-dark-200/50 bg-gradient-to-br from-white/50 to-white/20 dark:from-dark-50/50 dark:to-dark-50/20">
                            <div class="flex items-center justify-center h-12 w-12 rounded-xl bg-purple-100 dark:bg-purple-900/30 mb-4">
                                <i class="fas fa-clock text-purple-600 dark:text-purple-400"></i>
                            </div>
                            <h3 class="text-lg font-semibold dark:text-white text-dark mb-2">Liquidity</h3>
                            <p class="text-sm dark:text-gray-300 text-gray-600 mb-4">
                                Access your funds on your terms with flexible withdrawal options.
                            </p>
                            <div class="flex items-center gap-2">
                                <i class="fas fa-check-circle text-green-500"></i>
                                <span class="text-sm dark:text-white text-dark">Withdraw anytime</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Right Column - Investment Journey + FAQ -->
        <div class="space-y-6">
            <!-- Your Investment Journey Card -->
            <div class="rounded-2xl overflow-hidden bg-white dark:bg-dark-50 shadow-xl shadow-primary/5 dark:shadow-primary/10 border border-light-200/50 dark:border-dark-200/50">
                <div class="p-6 border-b border-light-200/50 dark:border-dark-200/50">
                    <h2 class="text-xl font-semibold dark:text-white text-dark flex items-center">
                        <i class="fas fa-map mr-2 text-primary"></i>
                        Your Investment Journey
                    </h2>
                </div>
                <div class="p-6">
                    <div class="space-y-8">
                        <!-- Step 1 -->
                        <div class="relative pl-8">
                            <div class="absolute left-0 top-0 flex items-center justify-center w-6 h-6 rounded-full bg-primary text-white text-sm font-bold">1</div>
                            <div class="absolute left-3 top-6 w-px h-16 bg-gray-200 dark:bg-dark-200"></div>
                            <h3 class="font-semibold dark:text-white text-dark text-lg mb-2">Choose Your Plan</h3>
                            <p class="dark:text-gray-300 text-gray-600 text-sm">
                                Select from our range of carefully crafted investment plans that align with your financial goals and risk tolerance.
                            </p>
                        </div>
                        
                        <!-- Step 2 -->
                        <div class="relative pl-8">
                            <div class="absolute left-0 top-0 flex items-center justify-center w-6 h-6 rounded-full bg-secondary text-white text-sm font-bold">2</div>
                            <div class="absolute left-3 top-6 w-px h-16 bg-gray-200 dark:bg-dark-200"></div>
                            <h3 class="font-semibold dark:text-white text-dark text-lg mb-2">Fund Your Investment</h3>
                            <p class="dark:text-gray-300 text-gray-600 text-sm">
                                Deposit funds into your selected plan using our secure payment methods. Start with as little as $100.
                            </p>
                        </div>
                        
                        <!-- Step 3 -->
                        <div class="relative pl-8">
                            <div class="absolute left-0 top-0 flex items-center justify-center w-6 h-6 rounded-full bg-tertiary text-white text-sm font-bold">3</div>
                            <h3 class="font-semibold dark:text-white text-dark text-lg mb-2">Track & Grow</h3>
                            <p class="dark:text-gray-300 text-gray-600 text-sm">
                                Monitor your portfolio's performance in real-time and watch your wealth grow with our competitive returns.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- FAQ Card -->
            <div class="rounded-2xl overflow-hidden bg-white dark:bg-dark-50 shadow-xl shadow-primary/5 dark:shadow-primary/10 border border-light-200/50 dark:border-dark-200/50">
                <div class="p-6 border-b border-light-200/50 dark:border-dark-200/50">
                    <h2 class="text-xl font-semibold dark:text-white text-dark flex items-center">
                        <i class="fas fa-question-circle mr-2 text-primary"></i>
                        Common Questions
                    </h2>
                </div>
                <div class="p-6">
                    <div class="space-y-4">
                        <!-- FAQ Item 1 -->
                        <div x-data="{ open: false }" class="rounded-xl overflow-hidden border border-light-200/50 dark:border-dark-200/50">
                            <button 
                                @click="open = !open" 
                                class="flex justify-between items-center w-full px-4 py-3 text-left dark:text-white text-dark font-medium hover:bg-light-100/50 dark:hover:bg-dark-100/50 transition-colors"
                            >
                                <span>How are returns calculated?</span>
                                <i class="fas fa-chevron-down dark:text-gray-400 text-gray-500 transition-transform duration-200" :class="{'transform rotate-180': open}"></i>
                            </button>
                            <div x-show="open" x-collapse>
                                <div class="px-4 pb-4 pt-0 dark:text-gray-300 text-gray-700 text-sm">
                                    Returns are calculated based on the performance of underlying assets and market conditions. Each plan has a specified return rate, which may be fixed or variable depending on the plan you choose.
                                </div>
                            </div>
                        </div>
                        
                        <!-- FAQ Item 2 -->
                        <div x-data="{ open: false }" class="rounded-xl overflow-hidden border border-light-200/50 dark:border-dark-200/50">
                            <button 
                                @click="open = !open" 
                                class="flex justify-between items-center w-full px-4 py-3 text-left dark:text-white text-dark font-medium hover:bg-light-100/50 dark:hover:bg-dark-100/50 transition-colors"
                            >
                                <span>How secure are my investments?</span>
                                <i data-lucide="chevron-down" class="h-5 w-5 dark:text-gray-400 text-gray-500 transition-transform duration-200" :class="{'transform rotate-180': open}"></i>
                            </button>
                            <div x-show="open" x-collapse>
                                <div class="px-4 pb-4 pt-0 dark:text-gray-300 text-gray-700 text-sm">
                                    Your investments are protected by our robust security measures and risk management strategies. We employ diversification, market hedging, and liquidity reserves to ensure your capital is safeguarded.
                                </div>
                            </div>
                        </div>
                        
                        <!-- FAQ Item 3 -->
                        <div x-data="{ open: false }" class="rounded-xl overflow-hidden border border-light-200/50 dark:border-dark-200/50">
                            <button 
                                @click="open = !open" 
                                class="flex justify-between items-center w-full px-4 py-3 text-left dark:text-white text-dark font-medium hover:bg-light-100/50 dark:hover:bg-dark-100/50 transition-colors"
                            >
                                <span>Can I withdraw before the term ends?</span>
                                <i data-lucide="chevron-down" class="h-5 w-5 dark:text-gray-400 text-gray-500 transition-transform duration-200" :class="{'transform rotate-180': open}"></i>
                            </button>
                            <div x-show="open" x-collapse>
                                <div class="px-4 pb-4 pt-0 dark:text-gray-300 text-gray-700 text-sm">
                                    Yes, most of our plans allow early withdrawals. However, early withdrawal may affect your returns. Please check the specific terms of each investment plan for details on withdrawal policies.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Footer -->
    <div class="py-4 border-t dark:border-dark-100 border-light-200 text-center md:text-left hidden md:flex md:justify-between md:items-center px-4 md:px-6">
        <div>
            <p class="text-sm dark:text-gray-400 text-gray-600">All Rights Reserved &copy; Protrading Options 2025</p>
        </div>
    </div>
</div>
    </div>

    <!-- Mobile Navigation -->
    <!-- Modern Mobile Navigation -->
<div class="fixed bottom-0 left-0 right-0 z-[9990] md:hidden">
    <!-- Main Navigation Bar - Refined Design -->
    <div class="bg-gradient-to-b dark:from-dark-50 dark:to-dark from-light-100 to-light dark:border-dark-100/80 border-light-200/80 border-t pt-0.5">
        <!-- Interactive Track Bar -->
        <div class="mx-auto w-1/2 h-1 -mt-0.5 rounded-full bg-gradient-to-r from-primary/20 via-secondary/60 to-tertiary/20"></div>
        
        <!-- Navigation Items -->
        <div class="flex items-center justify-around h-16 relative px-2">
            <!-- Active Navigation Indicator (SVG-based) -->
            <svg class="absolute bottom-0 left-0 w-full h-12 z-0 pointer-events-none" preserveAspectRatio="none">
                <defs>
                    <linearGradient id="activeGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" stop-color="rgb(200, 139, 101)" stop-opacity="0.2" />
                        <stop offset="50%" stop-color="rgb(200, 139, 101)" stop-opacity="0.1" />
                        <stop offset="100%" stop-color="rgb(200, 139, 101)" stop-opacity="0.2" />
                    </linearGradient>
                </defs>
                <rect id="nav-indicator" x="10%" y="0" width="20%" height="100%" rx="16" fill="url(#activeGradient)" style="display:none;" />
            </svg>
            
            <!-- Home -->
            <a href="dashboard" 
               class="flex flex-col items-center justify-center h-full w-full relative z-10 transition-all duration-200 nav-item "
               data-index="0">
                <div class="nav-icon-wrapper dark:text-gray-400 text-gray-600 transition-all duration-300">
                    <i data-lucide="home" class="h-5 w-5"></i>
                </div>
                <span class="text-xs mt-1 dark:text-gray-400 text-gray-600 transition-all duration-300">Home</span>
            </a>
            
            <!-- Deposit -->
            <a href="dashboard/deposits" 
               class="flex flex-col items-center justify-center h-full w-full relative z-10 transition-all duration-200 nav-item "
               data-index="1">
                <div class="nav-icon-wrapper dark:text-gray-400 text-gray-600 transition-all duration-300">
                    <i data-lucide="download" class="h-5 w-5"></i>
                </div>
                <span class="text-xs mt-1 dark:text-gray-400 text-gray-600 transition-all duration-300">Deposit</span>
            </a>
            
            <!-- Quick Actions (FAB) -->
            <div class="flex flex-col items-center h-full relative px-2 -mt-8">
                <button id="fab-button" 
                        class="h-14 w-14 rounded-full shadow-lg flex items-center justify-center relative z-20 bg-primary transform hover:scale-105 transition-all duration-300">
                    <svg class="absolute inset-0 w-full h-full" viewBox="0 0 100 100">
                        <circle cx="50" cy="50" r="48" fill="none" stroke-width="2" stroke="rgba(255,255,255,0.1)" />
                        <circle cx="50" cy="50" r="48" fill="none" stroke-width="2" stroke="rgb(200, 139, 101)" stroke-dasharray="302" stroke-dashoffset="302" class="animate-dash" />
                    </svg>
                    <i data-lucide="zap" class="h-6 w-6 text-white"></i>
                </button>
                <span class="text-xs dark:text-gray-400 text-gray-600 absolute -bottom-2">Actions</span>
            </div>
            
            <!-- History -->
            <a href="dashboard/accounthistory" 
               class="flex flex-col items-center justify-center h-full w-full relative z-10 transition-all duration-200 nav-item "
               data-index="3">
                <div class="nav-icon-wrapper dark:text-gray-400 text-gray-600 transition-all duration-300">
                    <i data-lucide="history" class="h-5 w-5"></i>
                </div>
                <span class="text-xs mt-1 dark:text-gray-400 text-gray-600 transition-all duration-300">History</span>
            </a>
            
            <!-- Profile -->
            <a href="dashboard/account-settings" 
               class="flex flex-col items-center justify-center h-full w-full relative z-10 transition-all duration-200 nav-item "
               data-index="4">
                <div class="nav-icon-wrapper dark:text-gray-400 text-gray-600 transition-all duration-300">
                    <i data-lucide="user" class="h-5 w-5"></i>
                </div>
                <span class="text-xs mt-1 dark:text-gray-400 text-gray-600 transition-all duration-300">Profile</span>
            </a>
        </div>
    </div>

    <!-- Floating Action Menu (hidden by default) -->
    <div id="fab-menu" class="hidden fixed inset-0 dark:bg-dark/70 bg-light/70 backdrop-blur-sm z-[9991] animate-in fade-in duration-300">
        <div class="absolute inset-x-0 bottom-24 flex flex-col items-center">
            <!-- Actions Grid -->
            <div class="flex flex-wrap justify-center gap-4 max-w-md mx-auto p-3">
                <!-- Invest -->
                                <a href="dashboard/buy-plan" class="w-[calc(33%-12px)] aspect-square flex flex-col items-center justify-center rounded-2xl bg-gradient-to-b from-secondary/20 to-secondary/5 border border-secondary/20 hover:from-secondary/30 transition-all duration-300 shadow-lg menu-item">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-secondary to-secondary/70 flex items-center justify-center mb-2">
                        <i data-lucide="trending-up" class="h-6 w-6 text-white"></i>
                    </div>
                    <span class="text-xs font-medium dark:text-white text-dark">Invest</span>
                </a>
                                
                <!-- Withdraw -->
                                <a href="dashboard/withdrawals" class="w-[calc(33%-12px)] aspect-square flex flex-col items-center justify-center rounded-2xl bg-gradient-to-b from-primary/20 to-primary/5 border border-primary/20 hover:from-primary/30 transition-all duration-300 shadow-lg menu-item">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-primary to-primary/70 flex items-center justify-center mb-2">
                        <i data-lucide="upload" class="h-6 w-6 text-white"></i>
                    </div>
                    <span class="text-xs font-medium dark:text-white text-dark">Withdraw</span>
                </a>
                                
                <!-- Swap -->
                                
                <!-- Refer -->
                <a href="dashboard/referuser" class="w-[calc(33%-12px)] aspect-square flex flex-col items-center justify-center rounded-2xl bg-gradient-to-b from-accent/20 to-accent/5 border border-accent/20 hover:from-accent/30 transition-all duration-300 shadow-lg menu-item">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-accent to-accent/70 flex items-center justify-center mb-2">
                        <i data-lucide="users" class="h-6 w-6 text-white"></i>
                    </div>
                    <span class="text-xs font-medium dark:text-white text-dark">Refer</span>
                </a>
                
                <!-- Support -->
                <a href="dashboard/support" class="w-[calc(33%-12px)] aspect-square flex flex-col items-center justify-center rounded-2xl bg-gradient-to-b from-danger/20 to-danger/5 border border-danger/20 hover:from-danger/30 transition-all duration-300 shadow-lg menu-item">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-danger to-danger/70 flex items-center justify-center mb-2">
                        <i data-lucide="headphones" class="h-6 w-6 text-white"></i>
                    </div>
                    <span class="text-xs font-medium dark:text-white text-dark">Support</span>
                </a>
                
                <!-- News -->
                <a href="#" class="w-[calc(33%-12px)] aspect-square flex flex-col items-center justify-center rounded-2xl bg-gradient-to-b from-purple/20 to-purple/5 border border-purple/20 hover:from-purple/30 transition-all duration-300 shadow-lg menu-item">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-purple to-purple/70 flex items-center justify-center mb-2">
                        <i data-lucide="newspaper" class="h-6 w-6 text-white"></i>
                    </div>
                    <span class="text-xs font-medium dark:text-white text-dark">News</span>
                </a>
            </div>
            
            <!-- Close Button -->
            <button id="fab-close" class="mt-8 w-12 h-12 rounded-full dark:bg-dark-100/80 bg-light-200/80 dark:border-dark-100 border-light-200 border flex items-center justify-center">
                <i data-lucide="x" class="h-6 w-6 dark:text-white text-dark"></i>
            </button>
        </div>
    </div>
</div>

<style>
/* SVG Animation */
@keyframes  dash {
  to {
    stroke-dashoffset: 0;
  }
}

.animate-dash {
  animation: dash 2s ease-in-out infinite alternate;
}

/* Navigation item active highlight effect */
.nav-item.active .nav-icon-wrapper::after {
    transform: scale(1);
    opacity: 1;
} 

.nav-icon-wrapper {
    position: relative;
    width: 32px;
    height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.nav-icon-wrapper::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background-color: rgba(200, 139, 101, 0.1);
    transform: scale(0);
    opacity: 0;
    transition: transform 0.3s ease, opacity 0.3s ease;
}

.nav-item.active .nav-icon-wrapper::after {
    transform: scale(1);
    opacity: 1;
}

/* Animation for menu items */
.menu-item {
    animation: menu-appear 0.4s backwards;
}

@keyframes  menu-appear {
    from {
        opacity: 0;
        transform: scale(0.8) translateY(20px);
    }
    to {
        opacity: 1;
        transform: scale(1) translateY(0);
    }
}

/* Active indicator transition */
#nav-indicator {
    transition: x 0.3s ease;
}
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get elements
        const fabButton = document.getElementById('fab-button');
        const fabMenu = document.getElementById('fab-menu');
        const fabClose = document.getElementById('fab-close');
        const navItems = document.querySelectorAll('.nav-item');
        const navIndicator = document.getElementById('nav-indicator');
        
        // Add active class to current navigation item
        navItems.forEach(item => {
            if (window.location.href.includes(item.getAttribute('href'))) {
                item.classList.add('active');
                
                // Set indicator position for active item
                const index = item.dataset.index;
                if (navIndicator && index !== undefined) {
                    navIndicator.style.display = 'block';
                    updateIndicatorPosition(parseInt(index));
                }
            }
            
            // Add click handler to update indicator position
            item.addEventListener('click', function() {
                const index = this.dataset.index;
                if (navIndicator && index !== undefined) {
                    updateIndicatorPosition(parseInt(index));
                }
            });
        });
        
        // Update the indicator position - Fixed calculation
        function updateIndicatorPosition(index) {
            if (!navIndicator) return;
            
            // Calculate the x position based on index
            // Each item takes 20% width (5 items total)
            // We add 10% to center the indicator (20% item width - 10% offset)
            const translateX = (index * 20) + '%';
            navIndicator.setAttribute('x', translateX);
        }
        
        // FAB button functionality
        if (fabButton && fabMenu && fabClose) {
            // Open menu
            fabButton.addEventListener('click', function() {
                fabMenu.classList.remove('hidden');
                
                // Stagger animation for menu items
                const menuItems = document.querySelectorAll('.menu-item');
                menuItems.forEach((item, index) => {
                    item.style.animationDelay = `${index * 0.05}s`;
                });
                
                // Change FAB icon
                const fabIcon = fabButton.querySelector('i');
                if (fabIcon) {
                    fabIcon.setAttribute('data-lucide', 'x');
                    lucide.createIcons();
                }
            });
            
            // Close menu
            fabClose.addEventListener('click', function() {
                fabMenu.classList.add('hidden');
                
                // Change FAB icon back
                const fabIcon = fabButton.querySelector('i');
                if (fabIcon) {
                    fabIcon.setAttribute('data-lucide', 'zap');
                    lucide.createIcons();
                }
            });
            
            // Close menu when clicking outside (on the backdrop)
            fabMenu.addEventListener('click', function(e) {
                if (e.target === fabMenu) {
                    fabMenu.classList.add('hidden');
                    
                    // Change FAB icon back
                    const fabIcon = fabButton.querySelector('i');
                    if (fabIcon) {
                        fabIcon.setAttribute('data-lucide', 'zap');
                        lucide.createIcons();
                    }
                }
            });
        }
    });
</script>
    <!-- Core Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="dash2/libs/sweetalert/sweetalert.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/r-2.2.5/datatables.min.js"></script>
<script>
        lucide.createIcons();
    </script>
    <!-- Theme Management Script -->
    <script>
        // Theme initialization
        document.addEventListener('DOMContentLoaded', function() {
            // Check for saved theme preference or use system preference
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            const savedTheme = localStorage.getItem('darkMode');

            if (savedTheme === 'true' || (savedTheme === null && prefersDark)) {
                document.documentElement.classList.add('dark');
            } else if (savedTheme === 'false') {
                document.documentElement.classList.remove('dark');
            }

            // Update theme switcher icon
            updateThemeIcon();
        });

        // Function to toggle theme
        function toggleTheme() {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('darkMode', 'false');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('darkMode', 'true');
            }

            // Update the icon
            updateThemeIcon();
        }

        // Update theme icon based on current theme
        function updateThemeIcon() {
            const isDark = document.documentElement.classList.contains('dark');
            const sunIcon = document.querySelector('[data-lucide="sun"]');
            const moonIcon = document.querySelector('[data-lucide="moon"]');

            if (sunIcon && moonIcon) {
                if (isDark) {
                    sunIcon.style.display = 'block';
                    moonIcon.style.display = 'none';
                } else {
                    sunIcon.style.display = 'none';
                    moonIcon.style.display = 'block';
                }
            }
        }
    </script>

    <!-- Initialize Lucide Icons -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            lucide.createIcons();

            // Mobile menu toggle functionality
            const menuToggles = document.querySelectorAll('[data-action="sidenav-pin"]');
            const sidebar = document.getElementById('sidenav-main');

            if (menuToggles.length > 0 && sidebar) {
                menuToggles.forEach(toggle => {
                    toggle.addEventListener('click', function(e) {
                        e.preventDefault();
                        sidebar.classList.toggle('active');
                        sidebar.classList.toggle('hidden');
                        sidebar.classList.toggle('md:block');
                    });
                });

                // Close sidebar when clicking outside on mobile
                document.addEventListener('click', function(e) {
                    const isMobile = window.innerWidth < 768;
                    const clickedInside = sidebar.contains(e.target);
                    const clickedToggle = Array.from(menuToggles).some(toggle => toggle.contains(e.target));

                    if (isMobile && !clickedInside && !clickedToggle && sidebar.classList.contains('active')) {
                        sidebar.classList.remove('active');
                        sidebar.classList.add('hidden');
                        sidebar.classList.add('md:block');
                    }
                });
            }

            // Initialize Select2
            if ($.fn.select2) {
                $('.select2').select2();
            }

            // Initialize DataTables responsively
            if ($.fn.DataTable) {
                $('.datatable').DataTable({
                    responsive: true,
                    dom: '<"top"fl>rt<"bottom"ip>',
                    language: {
                        search: "",
                        searchPlaceholder: "Search..."
                    }
                });
            }
        });
    </script>

   
   

    <!-- Livewire Scripts -->

<script src="/livewire/livewire.js?id=90730a3b0e7144480175" data-turbo-eval="false" data-turbolinks-eval="false" ></script>
<script data-turbo-eval="false" data-turbolinks-eval="false" >
    if (window.livewire) {
	    console.warn('Livewire: It looks like Livewire\'s @livewireScripts JavaScript assets have already been loaded. Make sure you aren\'t loading them twice.')
	}

    window.livewire = new Livewire();
    window.livewire.devTools(true);
    window.Livewire = window.livewire;
    window.livewire_app_url = '';
    window.livewire_token = 'cnu2sqNcMeHm3RGT0DpQrHD8ck50tZ2ulX2ISClQ';

	/* Make sure Livewire loads first. */
	if (window.Alpine) {
	    /* Defer showing the warning so it doesn't get buried under downstream errors. */
	    document.addEventListener("DOMContentLoaded", function () {
	        setTimeout(function() {
	            console.warn("Livewire: It looks like AlpineJS has already been loaded. Make sure Livewire\'s scripts are loaded before Alpine.\\n\\n Reference docs for more info: http://laravel-livewire.com/docs/alpine-js")
	        })
	    });
	}

	/* Make Alpine wait until Livewire is finished rendering to do its thing. */
    window.deferLoadingAlpine = function (callback) {
        window.addEventListener('livewire:load', function () {
            callback();
        });
    };

    let started = false;

    window.addEventListener('alpine:initializing', function () {
        if (! started) {
            window.livewire.start();

            started = true;
        }
    });

    document.addEventListener("DOMContentLoaded", function () {
        if (! started) {
            window.livewire.start();

            started = true;
        }
    });
</script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>
</html>
