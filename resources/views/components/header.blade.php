<header class="sticky top-0 z-50 bg-white shadow-md border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="flex items-center justify-between h-20">
            <!-- Logo -->
            <a href="/" class="flex items-center gap-3 group">
                <div class="w-10 h-10 bg-gradient-to-br from-blue-600 to-blue-800 rounded-lg flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300">
                    <img src="{{ asset('logo.svg') }}" alt="LearnyClass" class="w-8 h-8">
                </div>
                <span class="text-xl font-bold text-gradient hidden sm:inline">LearnyClass</span>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-8">
                <a href="/" class="text-gray-700 hover:text-primary font-medium transition-colors duration-300">
                    Accueil
                </a>
                <a href="/courses" class="text-gray-700 hover:text-primary font-medium transition-colors duration-300">
                    Cours
                </a>
                <a href="/about" class="text-gray-700 hover:text-primary font-medium transition-colors duration-300">
                    À propos
                </a>
            </div>

            <!-- Shopping cart and Burger Menu -->
            <div class="flex items-center gap-4">
                <a href="/cart" class="relative group">
                    <div class="p-2 rounded-lg hover:bg-gray-100 transition-colors duration-300">
                        <svg class="w-6 h-6 text-gray-700 group-hover:text-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        <span id="cart-count" class="absolute -top-2 -right-2 bg-red-500 text-white text-xs font-bold rounded-full w-6 h-6 flex items-center justify-center hidden">0</span>
                    </div>
                </a>

                <!-- Mobile Menu Button -->
                <button id="menu-toggle" class="md:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors duration-300">
                    <svg id="menu-icon" class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </nav>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden border-t border-gray-100 py-4">
            <div class="flex flex-col gap-4">
                <a href="/" class="text-gray-700 hover:text-primary font-medium transition-colors duration-300 py-2">
                    Accueil
                </a>
                <a href="/courses" class="text-gray-700 hover:text-primary font-medium transition-colors duration-300 py-2">
                    Cours
                </a>
                <a href="/about" class="text-gray-700 hover:text-primary font-medium transition-colors duration-300 py-2">
                    À propos
                </a>
            </div>
        </div>
    </div>
</header>

<script>
    // Menu Mobile Toggle
    document.getElementById('menu-toggle').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });

    // Update cart count
    function updateCartCount() {
        const cart = JSON.parse(localStorage.getItem('learnyclass_cart') || '[]');
        const count = cart.length;
        const countElement = document.getElementById('cart-count');

        if (count > 0) {
            countElement.textContent = count;
            countElement.classList.remove('hidden');
        } else {
            countElement.classList.add('hidden');
        }
    }

    // Update on page load
    updateCartCount();

    // Listen for cart changes
    window.addEventListener('cartUpdated', updateCartCount);
</script>
