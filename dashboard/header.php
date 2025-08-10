<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="cnu2sqNcMeHm3RGT0DpQrHD8ck50tZ2ulX2ISClQ">
    <title>Protrading Options | Account Dashboard</title>

    <link rel="icon" href="https://clientarea.protradingoptions.com/storage/app/public/photos/sRj0Ls3MPx9g7QM1XhYE6GmNA2oYzXIEHNh5aEcC.png" type="image/png" />

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
    <link rel="stylesheet" href="https://clientarea.protradingoptions.com/dash2/libs/sweetalert2/dist/sweetalert2.min.css">
    <script src="https://clientarea.protradingoptions.com/dash2/libs/sweetalert/sweetalert.min.js"></script>
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
           <a href="https://clientarea.protradingoptions.com/dashboard" class="flex items-center gap-2 font-bold text-xl">
            <img src="https://clientarea.protradingoptions.com/storage/app/public/photos/GJ2IpmE166NL2LRyIWRVsBRcdobsCIqfwvtnshJ2.png" alt="logo" class="h-8">
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

                    <h5 class="font-medium dark:text-white text-dark mb-0.5">Michael Oshiomokhai Erameh</h5>
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
                        <a href="index.php" class="flex items-center gap-3 rounded-lg bg-primary/10 text-primary px-3 py-2 transition-colors">
                            <i data-lucide="home" class="h-5 w-5"></i>
                            <span>Dashboard</span>
                        </a>

                        <a href="account-settings.php" class="flex items-center gap-3 rounded-lg dark:text-gray-300 text-gray-700 hover:bg-dark-100/60 dark:hover:bg-dark-100/60 hover:bg-light-200/60 px-3 py-2 transition-colors">
                            <i data-lucide="user" class="h-5 w-5"></i>
                            <span>Profile</span>
                        </a>
                    </nav>
                </div>

                <!-- Finance Section -->
                <div>
                    <p class="text-xs font-medium text-gray-500 uppercase px-3 mb-2">Finance</p>
                    <nav class="space-y-1">
                        <a href="deposits.php" class="flex items-center gap-3 rounded-lg dark:text-gray-300 text-gray-700 hover:bg-dark-100/60 dark:hover:bg-dark-100/60 hover:bg-light-200/60 px-3 py-2 transition-colors">
                            <i data-lucide="download" class="h-5 w-5"></i>
                            <span>Deposit</span>
                        </a>

                                                <a href="withdrawals.php" class="flex items-center gap-3 rounded-lg dark:text-gray-300 text-gray-700 hover:bg-dark-100/60 dark:hover:bg-dark-100/60 hover:bg-light-200/60 px-3 py-2 transition-colors">
                            <i data-lucide="upload" class="h-5 w-5"></i>
                            <span>Withdraw</span>
                        </a>
                        
                        <a href="accounthistory.php" class="flex items-center gap-3 rounded-lg dark:text-gray-300 text-gray-700 hover:bg-dark-100/60 dark:hover:bg-dark-100/60 hover:bg-light-200/60 px-3 py-2 transition-colors">
                            <i data-lucide="history" class="h-5 w-5"></i>
                            <span>Transactions</span>
                        </a>

                                            </nav>
                </div>

                <!-- Investment Section -->
                                <div>
                    <p class="text-xs font-medium text-gray-500 uppercase px-3 mb-2">Investments</p>
                    <nav class="space-y-1">
                        <a href="buy-plan.php" class="flex items-center gap-3 rounded-lg dark:text-gray-300 text-gray-700 hover:bg-dark-100/60 dark:hover:bg-dark-100/60 hover:bg-light-200/60 px-3 py-2 transition-colors">
                            <i data-lucide="briefcase" class="h-5 w-5"></i>
                            <span>Trading Plans</span>
                        </a>

                        <a href="all.php" class="flex items-center gap-3 rounded-lg dark:text-gray-300 text-gray-700 hover:bg-dark-100/60 dark:hover:bg-dark-100/60 hover:bg-light-200/60 px-3 py-2 transition-colors">
                            <i data-lucide="folder" class="h-5 w-5"></i>
                            <span>My Plans</span>
                        </a>

                        <a href="tradinghistory.php" class="flex items-center gap-3 rounded-lg dark:text-gray-300 text-gray-700 hover:bg-dark-100/60 dark:hover:bg-dark-100/60 hover:bg-light-200/60 px-3 py-2 transition-colors">
                            <i data-lucide="trending-up" class="h-5 w-5"></i>
                            <span>Profit History</span>
                        </a>
                    </nav>
                </div>
                
                <!-- Additional Services Section -->
                <div>
                    <p class="text-xs font-medium text-gray-500 uppercase px-3 mb-2">Services</p>
                    <nav class="space-y-1">
                        

                        
                        
                        
                        <a href="referuser.php" class="flex items-center gap-3 rounded-lg dark:text-gray-300 text-gray-700 hover:bg-dark-100/60 dark:hover:bg-dark-100/60 hover:bg-light-200/60 px-3 py-2 transition-colors">
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
                            <a href="support.php" class="flex items-center justify-center gap-2 dark:bg-dark-100 bg-light-200 hover:bg-light-200/80 dark:hover:bg-dark-100/80 dark:text-white text-dark rounded-lg py-2 text-xs font-medium transition-colors">
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
            <img src="https://clientarea.protradingoptions.com/storage/app/public/photos/GJ2IpmE166NL2LRyIWRVsBRcdobsCIqfwvtnshJ2.png" alt="logo" class="h-8">
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
                        <a href="verify-account" class="inline-flex items-center justify-center gap-1.5 bg-gradient-to-r from-primary to-primary/80 text-white text-xs font-medium px-4 py-2 rounded-lg hover:from-primary/90 hover:to-primary/70 transition-all">
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
                    fetch('api/notifications/latest') 
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
                                <a :href="'notifications/mark-as-read/' + notification.id" class="block p-3 dark:border-dark-100/60 border-light-200/60 border-b hover:bg-dark-100/30 dark:hover:bg-dark-100/30 hover:bg-light-200/30 transition-colors" :class="{ 'dark:bg-dark-100/50 bg-light-200/50': !notification.is_read }">
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
                    <a x-show="unreadCount > 0" href="notifications/mark-all-as-read" class="block text-xs text-primary hover:text-primary/80 py-1 px-2">
                        Mark all as read
                    </a>
                    <a href="notifications" class="block text-xs text-primary hover:text-primary/80 py-1 px-2 ml-auto">
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
                    <h6 class="text-sm font-medium dark:text-white text-dark">Michael Oshiomokhai Erameh</h6>
                    <p class="text-xs dark:text-gray-400 text-gray-600 mt-0.5">eramehmichael2000@gmail.com</p>
                </div>
                
                <div class="py-2">
                    <a href="account-settings.php" class="flex items-center gap-2 px-4 py-2 text-sm dark:text-gray-300 text-gray-700 dark:hover:bg-dark-100/60 hover:bg-light-200/60 transition-colors">
                        <i class="fas fa-user h-4 w-4 dark:text-gray-400 text-gray-600"></i>
                        <span>My Profile</span>
                    </a>
                    <a href="accounthistory.php" class="flex items-center gap-2 px-4 py-2 text-sm dark:text-gray-300 text-gray-700 dark:hover:bg-dark-100/60 hover:bg-light-200/60 transition-colors">
                        <i class="fas fa-history h-4 w-4 dark:text-gray-400 text-gray-600"></i>
                        <span>Transaction History</span>
                    </a>
                    <a href="support.php" class="flex items-center gap-2 px-4 py-2 text-sm dark:text-gray-300 text-gray-700 dark:hover:bg-dark-100/60 hover:bg-light-200/60 transition-colors">
                        <i class="fas fa-life-ring h-4 w-4 dark:text-gray-400 text-gray-600"></i>
                        <span>Support</span>
                    </a>
                </div>
                
                <div class="py-2 dark:border-dark-100 border-light-200 border-t">
                    <a href="https://clientarea.protradingoptions.com/logout" 
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                       class="flex items-center gap-2 px-4 py-2 text-sm text-danger dark:hover:bg-dark-100/60 hover:bg-light-200/60 transition-colors">
                        <i class="fas fa-sign-out-alt h-4 w-4"></i>
                        <span>Logout</span>
                    </a>
                    
                    <form id="logout-form" action="https://clientarea.protradingoptions.com/logout" method="POST" class="hidden">
                        <input type="hidden" name="_token" value="cnu2sqNcMeHm3RGT0DpQrHD8ck50tZ2ulX2ISClQ">                    </form>
                </div>
            </div>
        </div>
    </div>
</header>