{{-- <div  id="modal_hmop" name="modal_hmop" onclick="show_info('info_porta_hmop','parallaxasx_hmop')"  class="proyecs_sizes  bg-[#172c3d] rounded overflow-hidden  border-[3px] border-[#67788a] cursor-pointer hover:border-[#ec1c24] ">


    <div class="covera parallaxas_hmop"  id="info_porta_hmop" name="info_porta_hvacopcost">
        <p class=" font-roboto">
            HMOP
        <span  class="text-left font-roboto">
            Hvac Mantainance
        </span>
        </p>


    </div>



<div class="w-full bg-[#091a28] flex justify-end">
<div class="mt-2 flex gap-4 w-full justify-center">
    <div>
        <img class="img_tecno" title="Laravel" src="{{asset('images/laravel.png')}}">
    </div>

    <div>
        <img class="img_tecno" title="Livewire" src="{{asset('images/livewire.png')}}">
    </div>

    <div>
        <img class="img_tecno" title="Tailwind" src="{{asset('images/twin.png')}}">
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
</div> --}}


<!-- HMOP Modal -->
    <div id="hmop-modal" class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-2xl max-w-4xl mx-4 max-h-[90vh] overflow-y-auto">
            <div class="p-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-3xl font-bold text-gray-900">HMOP HVAC Mantainance</h2>
                    <button onclick="toggleDetails('hmop-modal');" class="text-gray-400 hover:text-gray-600 text-2xl">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <div class="bg-gradient-to-br from-cyan-500 to-blue-600 rounded-xl p-8 text-center mb-6">
                            <i class="fas fa-tools text-6xl text-white mb-4"></i>
                            <h3 class="text-xl font-roboto text-white">HMOP HVAC Mantainance</h3>
                        </div>

                        <div class="space-y-4">
                            <div class="bg-cyan-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-cyan-900 mb-2">
                                    <i class="fas fa-industry text-cyan-600 mr-2"></i>
                                    {{ __('index.sector') }}
                                </h4>
                                <p class="text-cyan-800">{{ __('index.mantenimiento_industrial_hvac') }}</p>
                            </div>

                            <div class="bg-blue-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-blue-900 mb-2">
                                    <i class="fas fa-rocket text-blue-600 mr-2"></i>
                                    {{ __('index.inovacion') }}
                                </h4>
                                <p class="text-blue-800">{{ __('index.inovacion_text_laravel_livewire') }}</p>
                            </div>

                            <div class="bg-green-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-green-900 mb-2">
                                    <i class="fas fa-mobile-alt text-green-600 mr-2"></i>
                                    UX/UI
                                </h4>
                                <p class="text-green-800">{{ __('index.interfaz_moderna') }}</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-2xl font-roboto text-gray-900 mb-4">{{ __('index.descripcion_del_proyecto') }}</h3>
                        <p class="text-gray-600 mb-6">
                           {{ __('index.hmop_description') }}
                        </p>

                        <h4 class="text-xl font-roboto text-gray-900 mb-3">{{ __('index.funcionalidades_clave') }}</h4>
                         <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-bolt text-yellow-500 mr-3"></i>
                                {{ __('index.interfaz_reactiva') }}
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-calendar-alt text-blue-500 mr-3"></i>
                                {{ __('index.programacion_inteligente') }}
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-chart-line text-green-500 mr-3"></i>
                                {{ __('index.dashboard_metrica_tiempo_real') }}
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-mobile-alt text-purple-500 mr-3"></i>
                                {{ __('index.diseño_completamente_responsive') }}
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-history text-orange-500 mr-3"></i>
                                {{ __('index.historial_detallado_intervenciones') }}
                            </li>
                        </ul>

                         <h4 class="text-xl font-semibold text-gray-900 mb-3">{{ __('index.modulos_principales') }}</h4>
                        <div class="space-y-3 mb-6">
                            <div class="bg-blue-50 p-3 rounded-lg">
                                <h5 class="font-semibold text-blue-900 mb-1">
                                    <i class="fas fa-tools text-blue-600 mr-2"></i>
                                    {{ __('index.gestion_equipos') }}
                                </h5>
                                <p class="text-blue-800 text-sm">{{ __('index.gestion_equipos_text') }}</p>
                            </div>
                            <div class="bg-green-50 p-3 rounded-lg">
                                <h5 class="font-semibold text-green-900 mb-1">
                                    <i class="fas fa-calendar-check text-green-600 mr-2"></i>
                                    {{ __('index.programacion_servicios') }}
                                </h5>
                                <p class="text-green-800 text-sm">{{ __('index.programacion_servicios_text') }}</p>
                            </div>
                            <div class="bg-purple-50 p-3 rounded-lg">
                                <h5 class="font-semibold text-purple-900 mb-1">
                                    <i class="fas fa-boxes text-purple-600 mr-2"></i>
                                    {{ __('index.control_inventarios') }}
                                </h5>
                                <p class="text-purple-800 text-sm">{{ __('index.control_inventarios_text') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <h4 class="text-xl font-roboto text-gray-900 mb-4">{{ __('index.tecnologias_utilizadas') }}</h4>
                    <div class="flex flex-wrap gap-3">
                        <span class="px-4 py-2 bg-red-100 text-red-800 rounded-full font-medium">Laravel 7</span>
                        <span class="px-4 py-2 bg-blue-100 text-blue-800 rounded-full font-medium">MySQL</span>
                        <span class="px-4 py-2 bg-green-100 text-green-800 rounded-full font-medium">HTML/CSS</span>
                        <span class="px-4 py-2 bg-yellow-100 text-yellow-800 rounded-full font-medium">JavaScript</span>
                        <span class="px-4 py-2 bg-purple-100 text-purple-800 rounded-full font-medium">Ajax</span>
                        <span class="px-4 py-2 bg-gray-100 text-gray-800 rounded-full font-medium">Git</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
