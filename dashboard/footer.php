
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
               class="flex flex-col items-center justify-center h-full w-full relative z-10 transition-all duration-200 nav-item active"
               data-index="0">
                <div class="nav-icon-wrapper text-primary transition-all duration-300">
                    <i data-lucide="home" class="h-5 w-5"></i>
                </div>
                <span class="text-xs mt-1 text-primary font-medium transition-all duration-300">Home</span>
            </a>
            
            <!-- Deposit -->
            <a href="deposits.php" 
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
            <a href="accounthistory.php" 
               class="flex flex-col items-center justify-center h-full w-full relative z-10 transition-all duration-200 nav-item "
               data-index="3">
                <div class="nav-icon-wrapper dark:text-gray-400 text-gray-600 transition-all duration-300">
                    <i data-lucide="history" class="h-5 w-5"></i>
                </div>
                <span class="text-xs mt-1 dark:text-gray-400 text-gray-600 transition-all duration-300">History</span>
            </a>
            
            <!-- Profile -->
            <a href="account-settings.php" 
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
                                <a href="buy-plan.php" class="w-[calc(33%-12px)] aspect-square flex flex-col items-center justify-center rounded-2xl bg-gradient-to-b from-secondary/20 to-secondary/5 border border-secondary/20 hover:from-secondary/30 transition-all duration-300 shadow-lg menu-item">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-secondary to-secondary/70 flex items-center justify-center mb-2">
                        <i data-lucide="trending-up" class="h-6 w-6 text-white"></i>
                    </div>
                    <span class="text-xs font-medium dark:text-white text-dark">Invest</span>
                </a>
                                
                <!-- Withdraw -->
                                <a href="withdrawals.php" class="w-[calc(33%-12px)] aspect-square flex flex-col items-center justify-center rounded-2xl bg-gradient-to-b from-primary/20 to-primary/5 border border-primary/20 hover:from-primary/30 transition-all duration-300 shadow-lg menu-item">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-primary to-primary/70 flex items-center justify-center mb-2">
                        <i data-lucide="upload" class="h-6 w-6 text-white"></i>
                    </div>
                    <span class="text-xs font-medium dark:text-white text-dark">Withdraw</span>
                </a>
                                
                <!-- Swap -->
                                
                <!-- Refer -->
                <a href="referuser.php" class="w-[calc(33%-12px)] aspect-square flex flex-col items-center justify-center rounded-2xl bg-gradient-to-b from-accent/20 to-accent/5 border border-accent/20 hover:from-accent/30 transition-all duration-300 shadow-lg menu-item">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-accent to-accent/70 flex items-center justify-center mb-2">
                        <i data-lucide="users" class="h-6 w-6 text-white"></i>
                    </div>
                    <span class="text-xs font-medium dark:text-white text-dark">Refer</span>
                </a>
                
                <!-- Support -->
                <a href="support.php" class="w-[calc(33%-12px)] aspect-square flex flex-col items-center justify-center rounded-2xl bg-gradient-to-b from-danger/20 to-danger/5 border border-danger/20 hover:from-danger/30 transition-all duration-300 shadow-lg menu-item">
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
    </body>
</html>
