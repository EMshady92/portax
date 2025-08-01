<!-- About Section -->
    <section id="sobre-mi" class="py-20 bg-gradient-to-br from-blue-500 to-indigo-600 ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">{{ __('index.about_me') }}</h2>
                <div class="w-24 h-1 bg-accent mx-auto"></div>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center ">
                <div>
                    <div class="bg-gradient-to-br from-accent to-orange-300 p-8 rounded-2xl text-white hover:-translate-y-1 transition-all duration-300 ">
                        <h3 class="text-2xl font-roboto mb-4">{{__('index.filosofia')}}</h3>
                        <p class="text-lg leading-relaxed">
                            {{__('index.filosofia_text')}}
                        </p>
                    </div>
                </div>
                <div class="space-y-6">
                    <div class="flex border-2 border-orange-300 items-start space-x-4 shadow-2xl rounded-xl p-1 hover:-translate-y-1 transition-all duration-300">
                        <div class="bg-accent/10 p-3 rounded-lg">
                            <i class="fas fa-rocket text-accent text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-roboto text-gray-900 mb-2">{{__('index.inovacion')}}</h4>
                            <p class="text-white">{{__('index.inovacion_text')}}</p>
                        </div>
                    </div>
                    <div class="flex border-2 border-orange-300 items-start space-x-4 shadow-2xl rounded-xl p-1 hover:-translate-y-1 transition-all duration-300">
                        <div class="bg-accent/10 p-3 rounded-lg">
                            <i class="fas fa-users text-accent text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-roboto text-gray-900 mb-2">{{__('index.trabajo_en_equipo')}}</h4>
                            <p class="text-white">{{__('index.trabajo_en_equipo_text')}}</p>
                        </div>
                    </div>
                    <div class="flex border-2 border-orange-300 items-start space-x-4 shadow-2xl rounded-xl p-1 hover:-translate-y-1 transition-all duration-300">
                        <div class="bg-accent/10 p-3 rounded-lg">
                            <i class="fas fa-chart-line text-accent text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-roboto text-gray-900 mb-2">{{__('index.trabajo_en_equipo_resultados')}}</h4>
                            <p class="text-white">{{__('index.trabajo_en_equipo_resultados_text')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
