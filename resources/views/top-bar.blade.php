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
                    <button class="text-gray-700 hover:text-primary">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>"


<script>

function myFunction() {

    $('#myDropdown').toggleClass("hidden");
}

</script>



