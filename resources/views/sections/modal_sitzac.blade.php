{{--
<div id="modal_sitzac" name="modal_sitzac" onclick="show_info('info_porta_sitzac','parallaxasx_sitzac')"  class="proyecs_sizes  bg-[#172c3d] rounded overflow-hidden  border-[3px] border-[#67788a] cursor-pointer hover:border-[#ec1c24] ">


    <div class="covera parallaxas_sitzac"  id="info_porta_sitzac" name="info_porta_sitzac">
        <p class=" font-roboto">
            SIT-ZAC
        <span  class="text-left font-roboto">
            {{__('index.sitzac_summary')}}

        <br>
        - {{__('index.promocion_juicio_linea')}}
          <br>
        - {{__('index.notificacion_boletin')}}
        <br>
        - {{__('index.presentacion_prom')}}
        <br>
        - {{__('index.agendar_citas')}}
        <br>
        - {{__('index.efirma')}}
    </p>


    </div>



<div class="w-full bg-[#091a28] flex justify-end">
<div class="mt-2 flex gap-4 w-full justify-center">
    <div>
        <img class="img_tecno" title="Laravel" src="{{asset('images/laravel.png')}}">
    </div>

    <div>
        <img class="img_tecno" title="HTML" src="{{asset('images/html.png')}}">
    </div>

    <div>
        <img class="img_tecno" title="CSS" src="{{asset('images/css.png')}}">
    </div>

    <div>
        <img class="img_tecno" title="MySQL" src="{{asset('images/mysql.png')}}">
    </div>

    <div>
        <img class="img_tecno" title="JavaScript" src="{{asset('images/JS.png')}}">
    </div>

    <div>
        <img class="img_tecno" title="Ajax" src="{{asset('images/ajax.png')}}">
    </div>

    <div>
        <img class="img_tecno" title="Github" src="{{asset('images/gitlogo.png')}}">
    </div>
</div>
</div>
</div>



 --}}

 <!-- SIT-ZAC Modal -->
    <div id="sitzac-modal" class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-2xl max-w-4xl mx-4 max-h-[90vh] overflow-y-auto">
            <div class="p-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-3xl font-bold text-gray-900">SIT-ZAC - Sistema Judicial</h2>
                    <button onclick="toggleDetails('sitzac-modal');" class="text-gray-400 hover:text-gray-600 text-2xl">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <div>


                        <div class="bg-gradient-to-br from-green-500 to-teal-600 rounded-xl p-8 text-center mb-6">
                            <div class="relative w-full h-32 mb-4">
                                <!-- Carousel Container -->
                                <div id="sitzac-carousel" class="relative w-full h-full overflow-hidden rounded-lg">
                                    <!-- Icon Slide -->
                                    <div class="carousel-slide-sitzac active flex items-center justify-center h-full">
                                        <i class="fas fa-gavel text-6xl text-white mb-4"></i>
                                    </div>
                                    <!-- Image Slides -->
                                    <div class="carousel-slide-sitzac flex items-center justify-center h-full">
                                        <img src="{{asset('/images/hvacopcost_imgs/portada_hvac.png')}}" alt="Justicia Digital" class="max-h-full max-w-full object-contain rounded-lg shadow-lg">
                                    </div>
                                    <div class="carousel-slide-sitzac flex items-center justify-center h-full">
                                        <img src="{{asset('/images/hvacopcost_imgs/new_p.png')}}" alt="Energy Analysis" class="max-h-full max-w-full object-contain rounded-lg shadow-lg">
                                    </div>
                                    <div class="carousel-slide-sitzac flex items-center justify-center h-full">
                                        <img src="{{asset('/images/hvacopcost_imgs/sols.png')}}" alt="HVAC Solutions" class="max-h-full max-w-full object-contain rounded-lg shadow-lg">
                                    </div>
                                    <div class="carousel-slide-sitzac flex items-center justify-center h-full">
                                        <img src="{{asset('/images/hvacopcost_imgs/resul.png')}}" alt="HVAC Results" class="max-h-full max-w-full object-contain rounded-lg shadow-lg">
                                    </div>
                                </div>

                                <!-- Carousel Indicators -->
                                <div class="absolute bottom-2 left-1/2 transform -translate-x-1/2 flex space-x-2">
                                    <button class="carousel-indicator-sitzac active w-2 h-2 bg-white rounded-full opacity-50 hover:opacity-100" onclick="showSlideSitzac('sitzac-carousel', 0)"></button>
                                    <button class="carousel-indicator-sitzac w-2 h-2 bg-white rounded-full opacity-50 hover:opacity-100" onclick="showSlideSitzac('sitzac-carousel', 1)"></button>
                                    <button class="carousel-indicator-sitzac w-2 h-2 bg-white rounded-full opacity-50 hover:opacity-100" onclick="showSlideSitzac('sitzac-carousel', 2)"></button>
                                    <button class="carousel-indicator-sitzac w-2 h-2 bg-white rounded-full opacity-50 hover:opacity-100" onclick="showSlideSitzac('sitzac-carousel', 3)"></button>
                                </div>
                            </div>
                            <h3 class="text-xl font-semibold text-white">Justicia Digital</h3>
                        </div>

                        <div class="space-y-4">
                            <div class="bg-green-50 p-4 rounded-lg">
                                <h4 class="font-roboto text-green-900 mb-2">
                                    <i class="fas fa-building text-green-600 mr-2"></i>
                                    {{ __('index.cliente') }}
                                </h4>
                                <p class="text-green-800">Tribunal de Justicia Administrativa del Estado de Zacatecas</p>
                            </div>

                            <div class="bg-blue-50 p-4 rounded-lg">
                                <h4 class="font-roboto text-blue-900 mb-2">
                                    <i class="fas fa-calendar text-blue-600 mr-2"></i>
                                    {{ __('index.duracion') }}
                                </h4>
                                <p class="text-blue-800">1 {{ __('index.year') }} 3 {{ __('index.meses_desarrollo') }} (2021-2022)</p>
                            </div>

                            <div class="bg-purple-50 p-4 rounded-lg">
                                <h4 class="font-roboto text-purple-900 mb-2">
                                    <i class="fas fa-code text-purple-600 mr-2"></i>
                                    {{ __('index.mi_rol') }}
                                </h4>
                                <p class="text-purple-800">{{ __('index.full_stack_desarrollador') }} & {{ __('index.arquitecto_de_sistema') }}</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-2xl font-roboto text-gray-900 mb-4">{{ __('index.descripcion_del_proyecto') }}</h3>
                        <p class="text-gray-600 mb-6">
                           {{ __('index.sitzac_description') }}
                        </p>

                        <h4 class="text-xl font-roboto text-gray-900 mb-3">{{ __('index.caracteristicas_principales') }}</h4>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-file-alt text-green-500 mr-3"></i>
                                {{ __('index.promocion_juicio_linea') }}
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-bell text-green-500 mr-3"></i>
                                {{ __('index.notificacion_boletin') }}
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-mailbox text-green-500 mr-3"></i>
                                {{ __('index.buzon_virtual') }}
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-calendar-check text-green-500 mr-3"></i>
                                {{ __('index.sistema_citas') }}
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-signature text-green-500 mr-3"></i>
                                {{ __('index.firma_electronica') }}
                            </li>
                        </ul>

                        <h4 class="text-xl font-roboto text-gray-900 mb-3">{{ __('index.impacto_y_resultados') }}</h4>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-accent/10 rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold text-accent">5000+</div>
                                <div class="text-sm text-gray-600">{{ __('index.usuarios_registrados') }}</div>
                            </div>
                            <div class="bg-accent/10 rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold text-accent">70%</div>
                                <div class="text-sm text-gray-600">{{ __('index.reduccion_en_tiempo') }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <h4 class="text-xl font-roboto text-gray-900 mb-4">Stack Tecnológico</h4>
                    <div class="flex flex-wrap gap-3">
                        <span class="px-4 py-2 bg-red-100 text-red-800 rounded-full font-medium">Laravel 8</span>
                        <span class="px-4 py-2 bg-blue-100 text-blue-800 rounded-full font-medium">MySQL</span>
                        <span class="px-4 py-2 bg-green-100 text-green-800 rounded-full font-medium">Bootstrap</span>
                        <span class="px-4 py-2 bg-yellow-100 text-yellow-800 rounded-full font-medium">JavaScript</span>
                        <span class="px-4 py-2 bg-purple-100 text-purple-800 rounded-full font-medium">Ajax</span>
                        <span class="px-4 py-2 bg-pink-100 text-pink-800 rounded-full font-medium">PDF Generator</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
       // Carousel functionality
        let currentSlidesSitzac = {};
        let carouselIntervalsSitzac = {};

        function showSlideSitzac(carouselId, slideIndex) {
            const sitzaccarousel = document.getElementById(carouselId);
            const sitzacslides = sitzaccarousel.querySelectorAll('.carousel-slide-sitzac');
            const indicators = sitzaccarousel.parentElement.querySelectorAll('.carousel-indicator-sitzac');

            // Hide all slides
            sitzacslides.forEach(slide => slide.classList.remove('active'));
            indicators.forEach(indicator => indicator.classList.remove('active'));

            // Show current slide
            sitzacslides[slideIndex].classList.add('active');
            indicators[slideIndex].classList.add('active');

            currentSlidesSitzac[carouselId] = slideIndex;
        }

        function nextSlideSitzac(carouselId) {
            const sitzaccarousel = document.getElementById(carouselId);
            const sitzacslides = sitzaccarousel.querySelectorAll('.carousel-slide-sitzac');
            const current = currentSlidesSitzac[carouselId] || 0;
            const next = (current + 1) % sitzacslides.length;
            showSlideSitzac(carouselId, next);
        }

        function startCarouselSitzac(carouselId) {
            currentSlidesSitzac[carouselId] = 0;
            carouselIntervalsSitzac[carouselId] = setInterval(() => {
                nextSlideSitzac(carouselId);
            }, 2000); // Change slide every 3 seconds
        }

        function stopCarousel(carouselId) {
            if (carouselIntervalsSitzac[carouselId]) {
                clearInterval(carouselIntervalsSitzac[carouselId]);
            }
        }

        // Initialize carousels when page loads
        document.addEventListener('DOMContentLoaded', function() {
            // Start HVAC carousel when modal is opened
            const sitzacModal = document.getElementById('sitzac-modal');
            if (sitzacModal) {
                const observer = new MutationObserver(function(mutations) {
                    mutations.forEach(function(mutation) {
                        if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                            if (!sitzacModal.classList.contains('hidden')) {
                                startCarouselSitzac('sitzac-carousel');
                            } else {
                                stopCarousel('sitzac-carousel');
                            }
                        }
                    });
                });
                observer.observe(sitzacModal, { attributes: true });
            }
        });
</script>
