<!-- Navigation -->
    <nav class="fixed top-0 w-full bg-white/90 backdrop-blur-md shadow-sm z-50 border-b-2 border-gray-400 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <div class="text-2xl font-bold text-gray-900">
                    <span class="text-primary">Carlos</span> Daniel
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#inicio" class="nav-link text-gray-700 hover:text-primary font-medium">{{ __('index.inicio') }}</a>
                    <a href="#sobre-mi" class="nav-link text-gray-700 hover:text-primary font-medium">{{ __('index.about_me') }}</a>
                    <a href="#proyectos" class="nav-link text-gray-700 hover:text-primary font-medium">{{ __('index.my_proyects') }}</a>
                    <a href="#habilidades" class="nav-link text-gray-700 hover:text-primary font-medium">{{ __('index.skills') }}</a>
                    <a href="#contacto" class="nav-link text-gray-700 hover:text-primary font-medium">{{ __('index.contact') }}</a>
                    @if (App::getLocale() == 'es')
                    <a href="{{ url('locale/en')}}" class="nav-link text-gray-700 hover:text-primary font-medium">English</a>
                    @endif

                    @if (App::getLocale() == 'en')
                    <a href="{{ url('locale/es')}}" class="nav-link text-gray-700 hover:text-primary font-medium">Español</a>
                    @endif
                </div>
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-700 hover:text-primary transition-colors duration-300">
                        <i id="hamburger-icon" class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="md:hidden hidden bg-white/95 backdrop-blur-md border-t border-gray-200">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="#inicio" class="mobile-nav-link block px-3 py-2 text-gray-700 hover:text-primary hover:bg-gray-50 rounded-md font-medium transition-all duration-300">
                        <i class="fas fa-home mr-3 text-primary"></i>{{ __('index.inicio') }}
                    </a>
                    <a href="#sobre-mi" class="mobile-nav-link block px-3 py-2 text-gray-700 hover:text-primary hover:bg-gray-50 rounded-md font-medium transition-all duration-300">
                        <i class="fas fa-user mr-3 text-primary"></i>{{ __('index.about_me') }}
                    </a>
                    <a href="#proyectos" class="mobile-nav-link block px-3 py-2 text-gray-700 hover:text-primary hover:bg-gray-50 rounded-md font-medium transition-all duration-300">
                        <i class="fas fa-briefcase mr-3 text-primary"></i>{{ __('index.my_proyects') }}
                    </a>
                    <a href="#habilidades" class="mobile-nav-link block px-3 py-2 text-gray-700 hover:text-primary hover:bg-gray-50 rounded-md font-medium transition-all duration-300">
                        <i class="fas fa-code mr-3 text-primary"></i>{{ __('index.skills') }}
                    </a>
                    <a href="#contacto" class="mobile-nav-link block px-3 py-2 text-gray-700 hover:text-primary hover:bg-gray-50 rounded-md font-medium transition-all duration-300">
                        <i class="fas fa-envelope mr-3 text-primary"></i>{{ __('index.contact') }}
                    </a>
                    <div class="border-t border-gray-200 mt-2 pt-2">
                        @if (App::getLocale() == 'es')
                        <a ref="{{ url('locale/es')}}" class="mobile-nav-link block px-3 py-2 text-gray-700 hover:text-primary hover:bg-gray-50 rounded-md font-medium transition-all duration-300">
                            <i class="fas fa-globe mr-3 text-primary"></i>English
                        </a>
                         @endif
                        @if (App::getLocale() == 'en')
                         <a href="{{ url('locale/es')}}" class="mobile-nav-link block px-3 py-2 text-gray-700 hover:text-primary hover:bg-gray-50 rounded-md font-medium transition-all duration-300">
                            <i class="fas fa-globe mr-3 text-primary"></i>Español
                        </a>
                        @endif
                    </div>
                </div>
            </div>


        </div>
    </nav>


<script>

// Mobile Menu Functionality
            document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const hamburgerIcon = document.getElementById('hamburger-icon');
            let isMenuOpen = false;

            // Toggle mobile menu
            mobileMenuButton.addEventListener('click', function() {
                isMenuOpen = !isMenuOpen;

                if (isMenuOpen) {
                    mobileMenu.classList.remove('hidden');
                    setTimeout(() => {
                        mobileMenu.classList.add('show');
                    }, 10);
                    hamburgerIcon.classList.remove('fa-bars');
                    hamburgerIcon.classList.add('fa-times', 'rotate');
                } else {
                    mobileMenu.classList.remove('show');
                    hamburgerIcon.classList.remove('fa-times', 'rotate');
                    hamburgerIcon.classList.add('fa-bars');
                    setTimeout(() => {
                        mobileMenu.classList.add('hidden');
                    }, 300);
                }
            });

            // Close mobile menu when clicking on a link
            document.querySelectorAll('.mobile-nav-link').forEach(link => {
                link.addEventListener('click', function() {
                    isMenuOpen = false;
                    mobileMenu.classList.remove('show');
                    hamburgerIcon.classList.remove('fa-times', 'rotate');
                    hamburgerIcon.classList.add('fa-bars');
                    setTimeout(() => {
                        mobileMenu.classList.add('hidden');
                    }, 300);
                });
            });

            // Close mobile menu when clicking outside
            document.addEventListener('click', function(e) {
                if (isMenuOpen && !mobileMenuButton.contains(e.target) && !mobileMenu.contains(e.target)) {
                    isMenuOpen = false;
                    mobileMenu.classList.remove('show');
                    hamburgerIcon.classList.remove('fa-times', 'rotate');
                    hamburgerIcon.classList.add('fa-bars');
                    setTimeout(() => {
                        mobileMenu.classList.add('hidden');
                    }, 300);
                }
            });

            // Close mobile menu on window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 768 && isMenuOpen) {
                    isMenuOpen = false;
                    mobileMenu.classList.remove('show');
                    hamburgerIcon.classList.remove('fa-times', 'rotate');
                    hamburgerIcon.classList.add('fa-bars');
                    mobileMenu.classList.add('hidden');
                }
            });
        });

</script>



