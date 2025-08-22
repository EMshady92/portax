<!-- Projects Section -->
    <section id="proyectos" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">{{ __('index.my_proyects') }}</h2>
                <div class="w-24 h-1 bg-accent mx-auto mb-6"></div>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    {{ __('index.my_proyects_text') }}
                </p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Cupones -->
                <div class="bg-white rounded-xl shadow-lg card-hover overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-[#fcd34d] to-[#a0522de6] flex items-center justify-center">
                        <i class="fa-solid fa-qrcode text-6xl text-white"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-roboto text-gray-900 mb-3">Cafe Coupons</h3>
                        <p class="text-gray-600 mb-4">
                            {{ __('index.cafe_coupons_port_summary') }}
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="tech-badge px-3 py-1 bg-red-100 text-red-800 text-sm rounded-full">Laravel</span>
                             <span class="tech-badge px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">Filament</span>
                            <span class="tech-badge px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">MySQL</span>
                            <span class="tech-badge px-3 py-1 bg-yellow-100 text-yellow-800 text-sm rounded-full">JavaScript</span>
                        </div>
                        <button onclick="toggleDetails('coupon-modal');" class="w-full bg-primary hover:bg-secondary text-white py-2 rounded-lg transition-colors duration-300">
                            {{ __('index.ver_detalles') }}
                        </button>
                    </div>
                </div>

                <!-- Project 1 -->
                <div class="bg-white rounded-xl shadow-lg card-hover overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center">
                        <i class="fas fa-wind text-6xl text-white"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-roboto text-gray-900 mb-3">Desprosoft HVACopcost</h3>
                        <p class="text-gray-600 mb-4">
                            {{ __('index.hvacopcost_port_summary') }}
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="tech-badge px-3 py-1 bg-red-100 text-red-800 text-sm rounded-full">Laravel</span>
                            <span class="tech-badge px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">MySQL</span>
                            <span class="tech-badge px-3 py-1 bg-yellow-100 text-yellow-800 text-sm rounded-full">JavaScript</span>
                        </div>
                        <button onclick="toggleDetails('hvac-modal');" class="w-full bg-primary hover:bg-secondary text-white py-2 rounded-lg transition-colors duration-300">
                            {{ __('index.ver_detalles') }}
                        </button>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="bg-white rounded-xl shadow-lg card-hover overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-green-500 to-teal-600 flex items-center justify-center">
                        <i class="fas fa-gavel text-6xl text-white"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-roboto text-gray-900 mb-3">SIT-ZAC</h3>
                        <p class="text-gray-600 mb-4">
                             {{ __('index.sitzac_summary') }}
                              @if (App::getLocale() == 'en')
                                <br><br>
                               @endif
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="tech-badge px-3 py-1 bg-red-100 text-red-800 text-sm rounded-full">Laravel</span>
                            <span class="tech-badge px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">MySQL</span>
                            <span class="tech-badge px-3 py-1 bg-purple-100 text-purple-800 text-sm rounded-full">Ajax</span>
                        </div>
                        <button onclick="toggleDetails('sitzac-modal');" class="w-full bg-primary hover:bg-secondary text-white py-2 rounded-lg transition-colors duration-300">
                           {{ __('index.ver_detalles') }}
                        </button>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="bg-white rounded-xl shadow-lg card-hover overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-orange-500 to-red-600 flex items-center justify-center">
                        <i class="fas fa-school text-6xl text-white"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-roboto text-gray-900 mb-3">{{ __('index.pect') }}</h3>
                        <p class="text-gray-600 mb-4">
                            {{ __('index.pect_summary') }}
                             @if (App::getLocale() == 'en')
                                <br><br><br>
                               @endif
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="tech-badge px-3 py-1 bg-red-100 text-red-800 text-sm rounded-full">Laravel</span>
                            <span class="tech-badge px-3 py-1 bg-green-100 text-green-800 text-sm rounded-full">HTML/CSS</span>
                            <span class="tech-badge px-3 py-1 bg-gray-100 text-gray-800 text-sm rounded-full">Git</span>
                        </div>
                        <button onclick="toggleDetails('petc-modal');" class="w-full bg-primary hover:bg-secondary text-white py-2 rounded-lg transition-colors duration-300">
                            {{ __('index.ver_detalles') }}
                        </button>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="bg-white rounded-xl shadow-lg card-hover overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-cyan-500 to-blue-600 flex items-center justify-center">
                        <i class="fas fa-tools text-6xl text-white"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-roboto text-gray-900 mb-3">HMOP HVAC Mantainance</h3>
                        <p class="text-gray-600 mb-4">
                            {{ __('index.hmop_summary') }}
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="tech-badge px-3 py-1 bg-red-100 text-red-800 text-sm rounded-full">Laravel</span>
                            <span class="tech-badge px-3 py-1 bg-pink-100 text-pink-800 text-sm rounded-full">Livewire</span>
                            <span class="tech-badge px-3 py-1 bg-cyan-100 text-cyan-800 text-sm rounded-full">Tailwind</span>
                        </div>
                        <button onclick="toggleDetails('hmop-modal');" class="w-full bg-primary hover:bg-secondary text-white py-2 rounded-lg transition-colors duration-300">
                           {{ __('index.ver_detalles') }}
                        </button>
                    </div>
                </div>

                <!-- Project 5 -->
                <div class="bg-white rounded-xl shadow-lg card-hover overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-purple-500 to-indigo-600 flex items-center justify-center">
                        <i class="fas fa-boxes text-6xl text-white"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-roboto text-gray-900 mb-3">{{ __('index.inventory_management') }}</h3>
                        <p class="text-gray-600 mb-4">
                            {{ __('index.inventory_summary') }}
                             @if (App::getLocale() == 'en')
                                <br><br>
                               @endif
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="tech-badge px-3 py-1 bg-red-100 text-red-800 text-sm rounded-full">Laravel</span>
                            <span class="tech-badge px-3 py-1 bg-pink-100 text-pink-800 text-sm rounded-full">Livewire</span>
                            <span class="tech-badge px-3 py-1 bg-cyan-100 text-cyan-800 text-sm rounded-full">Tailwind</span>
                        </div>
                        <button onclick="toggleDetails('inventory-modal');" class="w-full bg-primary hover:bg-secondary text-white py-2 rounded-lg transition-colors duration-300">
                            {{ __('index.ver_detalles') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script>

function toggleDetails(projectId) {
    const details = document.getElementById(`${projectId}`);
    details.classList.toggle('hidden');
}

$('#open').click(function() {
  $('#modal_petc').show().addClass('modal-open');
});

$('#close').click(function() {
  var elem = $('#modal_petc');
  elem.removeClass('modal-open');
  setTimeout(function() {
    elem.hide();
  },200);
});

function show_info(id_hide,css_class){
    $('#'+id_hide).toggleClass("coverax");
    $('#'+id_hide).toggleClass(css_class);
}

function hide_info(id_show,id_hide){
    $('#'+id_show).removeClass('hidden');
}

$(document).ready(function(){
  // Using data-slide attribute
  $('a[data-slide="next"]').click(function() {
    $('#myCarousel').carousel('next');
  });

  $('a[data-slide="prev"]').click(function() {
    $('#myCarousel').carousel('prev');
  });

  // Alternatively, you can bind click events directly
  $('.carousel-control-next').click(function() {
    $('#myCarousel').carousel('next');
  });

  $('.carousel-control-prev').click(function() {
    $('#myCarousel').carousel('prev');
  });
});
</script>
