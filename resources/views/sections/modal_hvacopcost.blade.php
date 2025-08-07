<!-- HVAC Modal -->
    <div id="hvac-modal" class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center z-50 hidden">
        <div  class="bg-white rounded-2xl max-w-4xl mx-4 max-h-[90vh] overflow-y-auto">
            <div class="p-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-3xl font-bold text-gray-900">Desprosoft HVACopcost</h2>
                    <button onclick="toggleDetails('hvac-modal');" class="text-gray-400 hover:text-gray-600 text-2xl">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <div class="bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl p-8 text-center mb-6">
                            <div class="relative w-full h-32 mb-4">
                                <!-- Carousel Container -->
                                <div id="hvac-carousel" class="relative w-full h-full overflow-hidden rounded-lg">
                                    <!-- Icon Slide -->
                                    <div class="carousel-slide active flex items-center justify-center h-full">
                                        <i class="fas fa-wind text-6xl text-white"></i>
                                    </div>
                                    <!-- Image Slides -->
                                    <div class="carousel-slide flex items-center justify-center h-full">
                                        <img src="{{asset('/images/hvacopcost_imgs/portada_hvac.png')}}" alt="HVAC Dashboard" class="max-h-full max-w-full object-contain rounded-lg shadow-lg">
                                    </div>
                                    <div class="carousel-slide flex items-center justify-center h-full">
                                        <img src="{{asset('/images/hvacopcost_imgs/new_p.png')}}" alt="Energy Analysis" class="max-h-full max-w-full object-contain rounded-lg shadow-lg">
                                    </div>
                                    <div class="carousel-slide flex items-center justify-center h-full">
                                        <img src="{{asset('/images/hvacopcost_imgs/sols.png')}}" alt="HVAC Solutions" class="max-h-full max-w-full object-contain rounded-lg shadow-lg">
                                    </div>
                                    <div class="carousel-slide flex items-center justify-center h-full">
                                        <img src="{{asset('/images/hvacopcost_imgs/resul.png')}}" alt="HVAC Results" class="max-h-full max-w-full object-contain rounded-lg shadow-lg">
                                    </div>
                                </div>

                                <!-- Carousel Indicators -->
                                <div class="absolute bottom-2 left-1/2 transform -translate-x-1/2 flex space-x-2">
                                    <button class="carousel-indicator active w-2 h-2 bg-white rounded-full opacity-50 hover:opacity-100" onclick="showSlide('hvac-carousel', 0)"></button>
                                    <button class="carousel-indicator w-2 h-2 bg-white rounded-full opacity-50 hover:opacity-100" onclick="showSlide('hvac-carousel', 1)"></button>
                                    <button class="carousel-indicator w-2 h-2 bg-white rounded-full opacity-50 hover:opacity-100" onclick="showSlide('hvac-carousel', 2)"></button>
                                    <button class="carousel-indicator w-2 h-2 bg-white rounded-full opacity-50 hover:opacity-100" onclick="showSlide('hvac-carousel', 3)"></button>
                                </div>
                            </div>
                            <h3 class="text-xl font-semibold text-white">HVAC Analysis Platform</h3>
                        </div>

                        <div class="space-y-4">
                            <div class="bg-blue-50 p-4 rounded-lg">
                                <h4 class="font-roboto text-blue-900 mb-2">
                                    <i class="fas fa-users text-blue-600 mr-2"></i>
                                       {{ __('index.cliente') }}
                                </h4>
                                <p class="text-blue-800">{{ __('index.ndl_empresa') }}</p>
                            </div>

                            <div class="bg-green-50 p-4 rounded-lg">
                                <h4 class="font-roboto text-green-900 mb-2">
                                    <i class="fas fa-calendar text-green-600 mr-2"></i>
                                    {{ __('index.duracion') }}
                                </h4>
                                <p class="text-green-800">2 {{ __('index.years') }} 3 {{ __('index.meses_desarrollo') }} (2023-2025)</p>
                            </div>

                            <div class="bg-purple-50 p-4 rounded-lg">
                                <h4 class="font-roboto text-purple-900 mb-2">
                                    <i class="fas fa-code text-purple-600 mr-2"></i>
                                    {{ __('index.mi_rol') }}
                                </h4>
                                <p class="text-purple-800">{{ __('index.develop_team_lead') }}</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-2xl font-roboto text-gray-900 mb-4">{{ __('index.descripcion_del_proyecto') }}</h3>
                        <p class="text-gray-600 mb-6">
                            {{ __('index.descripcion_proyecto_text_hvac') }}
                        </p>

                        <h4 class="text-xl font-roboto text-gray-900 mb-3">{{ __('index.caracteristicas_principales') }}</h4>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                {{ __('index.calculos_automaticos_eficiencia_energetica') }}
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                {{ __('index.analisis_financiero_roi_y_payback') }}
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                {{ __('index.reportes_automaticos_personalizables') }}
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                {{ __('index.dashboard_interactivo_con_graficas') }}
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                {{ __('index.comparacion_escenarios_new_vs_retrofit') }}
                            </li>
                        </ul>

                        <h4 class="text-xl font-roboto text-gray-900 mb-3">{{ __('index.impacto_y_resultados') }}</h4>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-accent/10 rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold text-accent">300+</div>
                                <div class="text-sm text-gray-600">{{ __('index.proyectos_analizados') }}</div>
                            </div>
                            <div class="bg-accent/10 rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold text-accent">50%</div>
                                <div class="text-sm text-gray-600">{{ __('index.reduccion_en_tiempo') }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <h4 class="text-xl font-roboto text-gray-900 mb-4">{{ __('index.tecnologias_utilizadas') }}</h4>
                    <div class="flex flex-wrap gap-3">
                        <span class="px-4 py-2 bg-red-100 text-red-800 rounded-full font-medium">Laravel 9</span>
                        <span class="px-4 py-2 bg-blue-100 text-blue-800 rounded-full font-medium">MySQL</span>
                        <span class="px-4 py-2 bg-yellow-100 text-yellow-800 rounded-full font-medium">JavaScript</span>
                        <span class="px-4 py-2 bg-green-100 text-green-800 rounded-full font-medium">Chart.js</span>
                        <span class="px-4 py-2 bg-purple-100 text-purple-800 rounded-full font-medium">Ajax</span>
                        <span class="px-4 py-2 bg-gray-100 text-gray-800 rounded-full font-medium">Git</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
       // Carousel functionality
        let currentSlides = {};
        let carouselIntervals = {};

        function showSlide(carouselId, slideIndex) {
            const carousel = document.getElementById(carouselId);
            const slides = carousel.querySelectorAll('.carousel-slide');
            const indicators = carousel.parentElement.querySelectorAll('.carousel-indicator');

            // Hide all slides
            slides.forEach(slide => slide.classList.remove('active'));
            indicators.forEach(indicator => indicator.classList.remove('active'));

            // Show current slide
            slides[slideIndex].classList.add('active');
            indicators[slideIndex].classList.add('active');

            currentSlides[carouselId] = slideIndex;
        }

        function nextSlide(carouselId) {
            const carousel = document.getElementById(carouselId);
            const slides = carousel.querySelectorAll('.carousel-slide');
            const current = currentSlides[carouselId] || 0;
            const next = (current + 1) % slides.length;
            showSlide(carouselId, next);
        }

        function startCarousel(carouselId) {
            currentSlides[carouselId] = 0;
            carouselIntervals[carouselId] = setInterval(() => {
                nextSlide(carouselId);
            }, 2000); // Change slide every 3 seconds
        }

        function stopCarousel(carouselId) {
            if (carouselIntervals[carouselId]) {
                clearInterval(carouselIntervals[carouselId]);
            }
        }

        // Initialize carousels when page loads
        document.addEventListener('DOMContentLoaded', function() {
            // Start HVAC carousel when modal is opened
            const hvacModal = document.getElementById('hvac-modal');
            if (hvacModal) {
                const observer = new MutationObserver(function(mutations) {
                    mutations.forEach(function(mutation) {
                        if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                            if (!hvacModal.classList.contains('hidden')) {
                                startCarousel('hvac-carousel');
                            } else {
                                stopCarousel('hvac-carousel');
                            }
                        }
                    });
                });
                observer.observe(hvacModal, { attributes: true });
            }
        });
</script>
