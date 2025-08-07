{{--
<div id="modal_petc" name="modal_petc" onclick="show_info('info_porta_petc','parallaxasx_petc')"  class="proyecs_sizes  bg-[#172c3d] rounded overflow-hidden  border-[3px] border-[#67788a] cursor-pointer hover:border-[#ec1c24] ">


    <div class="covera parallaxas_petc"  id="info_porta_petc" name="info_porta_petc">
        <p class=" font-roboto">
            Programa de Escuelas de Tiempo Completo (PETC)
        <span  class="text-left font-roboto">
            {{__('index.pect_port_summary')}}
        </span>
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

 <!-- PETC Modal -->
    <div id="petc-modal" class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-2xl max-w-4xl mx-4 max-h-[90vh] overflow-y-auto">
            <div class="p-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-3xl font-bold text-gray-900">Sistema PETC</h2>
                    <button onclick="toggleDetails('petc-modal');" class="text-gray-400 hover:text-gray-600 text-2xl">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <div class="bg-gradient-to-br from-orange-500 to-red-600 rounded-xl p-8 text-center mb-6">
                            <i class="fas fa-school text-6xl text-white mb-4"></i>
                            <h3 class="text-xl font-roboto text-white">{{ __('index.gestion_educativa') }}</h3>
                        </div>

                        <div class="space-y-4">
                            <div class="bg-orange-50 p-4 rounded-lg">
                                <h4 class="font-roboto text-orange-900 mb-2">
                                    <i class="fas fa-graduation-cap text-orange-600 mr-2"></i>
                                    {{ __('index.cliente') }}
                                </h4>
                                <p class="text-orange-800">{{ __('index.secretaria_educacion') }}</p>
                            </div>

                            <div class="bg-blue-50 p-4 rounded-lg">
                                <h4 class="font-roboto text-blue-900 mb-2">
                                    <i class="fas fa-calendar text-blue-600 mr-2"></i>
                                    {{ __('index.duracion') }}
                                </h4>
                                <p class="text-blue-800">1 {{ __('year') }} 10 {{ __('index.meses_desarrollo') }} (2020-2022)</p>
                            </div>

                            <div class="bg-green-50 p-4 rounded-lg">
                                <h4 class="font-roboto text-green-900 mb-2">
                                    <i class="fas fa-trophy text-green-600 mr-2"></i>
                                    {{ __('index.logro') }}
                                </h4>
                                <p class="text-green-800">{{ __('index.sistema_critico_gestion') }}</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-2xl font-roboto text-gray-900 mb-4">{{ __('index.descripcion_del_proyecto') }}</h3>
                        <p class="text-gray-600 mb-6">
                            {{ __('index.petc_description') }}
                        </p>

                        <h4 class="text-xl font-roboto text-gray-900 mb-3">{{ __('index.funcionalidades_clave') }}</h4>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-money-check-alt text-green-500 mr-3"></i>
                                {{ __('index.gestion_completa_nominas') }}
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-search-dollar text-green-500 mr-3"></i>
                                {{ __('index.verificacion_automatica_pagos') }}
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-clipboard-list text-green-500 mr-3"></i>
                                {{ __('index.generacion_listas_asistencia') }}
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-chalkboard-teacher text-green-500 mr-3"></i>
                                {{ __('index.modulo_especializado_docentes') }}
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-chart-bar text-green-500 mr-3"></i>
                                {{ __('index.reportes_estadisticos_avanzados') }}
                            </li>
                        </ul>

                        <h4 class="text-xl font-roboto text-gray-900 mb-3">{{ __('index.impacto_educativo') }}</h4>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-accent/10 rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold text-accent">200+</div>
                                <div class="text-sm text-gray-600">{{ __('index.escuelas_beneficiadas') }}</div>
                            </div>
                            <div class="bg-accent/10 rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold text-accent">1500+</div>
                                <div class="text-sm text-gray-600">{{ __('index.maestros_gestionados') }}</div>
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
