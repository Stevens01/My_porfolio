 <nav class="fixed w-full bg-white shadow-sm z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <span class="text-xl font-bold text-indigo-600">My Portfolio</span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="nav-link text-gray-700 hover:text-indigo-600 px-3 py-2 text-sm font-medium active">Accueil</a>
                    <a href="/about" class="nav-link text-gray-700 hover:text-indigo-600 px-3 py-2 text-sm font-medium">À propos</a>
                    <a href="/skills" class="nav-link text-gray-700 hover:text-indigo-600 px-3 py-2 text-sm font-medium">Compétences</a>
                    <a href="/projects" class="nav-link text-gray-700 hover:text-indigo-600 px-3 py-2 text-sm font-medium">Projets</a>
                    <a href="/contact" class="nav-link text-gray-700 hover:text-indigo-600 px-3 py-2 text-sm font-medium">Contact</a>
                </div>
                <div class="md:hidden flex items-center">
                    <button id="menu-toggle" class="text-gray-500 hover:text-indigo-600 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#home" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-indigo-600 hover:bg-gray-50">Accueil</a>
                <a href="#about" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-indigo-600 hover:bg-gray-50">À propos</a>
                <a href="#skills" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-indigo-600 hover:bg-gray-50">Compétences</a>
                <a href="#projects" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-indigo-600 hover:bg-gray-50">Projets</a>
                <a href="#contact" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-indigo-600 hover:bg-gray-50">Contact</a>
            </div>
        </div>
    </nav>