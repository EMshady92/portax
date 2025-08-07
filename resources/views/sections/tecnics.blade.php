{{--
<div class="grid w-full h-[100%]  bg-[#172c3d]">
    <div class="grid w-full justify-items-center place-content-center py-[4rem]">
        <h1 class="my_projectys_size text-white font-roboto font-bold">{{__('index.skills')}}</h1>
    </div>
    <div class="grid  gap-x-3 w-full mx-3 h-[80%] gap-y-3">

        <div class="flex w-full justify-center">

            <div class="w-full flex justify-center  gap-x-3">
                <p class="title_tecnic text-white font-roboto font-bold">
                     {{__('index.lenguaje')}}
                </p>
                <div class="flex gap-x-3">
                    <div>
                        <img class="img_tecno" title="PHP" src="{{asset('images/php.png')}}">
                    </div>
                    <div>
                        <img class="img_tecno" title="JavaScript" src="{{asset('images/JS.png')}}">
                    </div>
                </div>

            </div>
        </div>
        <div class="flex w-full justify-center">

            <div class="w-full flex justify-center  gap-x-3">
                <p class="title_tecnic text-white font-roboto font-bold">
                    BackEnd
                </p>
                <div class="flex gap-x-3">
                    <div>
                        <img class="img_tecno" title="Laravel" src="{{asset('images/laravel.png')}}">
                    </div>

                    <div>
                        <img class="img_tecno" title="Codeigniter" src="{{asset('images/codenaiter.png')}}">
                    </div>
                </div>

            </div>


        </div>


        <div class="flex w-full justify-center">
            <div class="w-full flex justify-center  gap-x-3">
                <p class="title_tecnic text-white font-roboto font-bold">
                    FrontEnd
                </p>
                <div class="flex gap-x-3">
                    <div>
                        <img class="img_tecno" title="HTLM" src="{{asset('images/html.png')}}">
                    </div>

                    <div>
                        <img class="img_tecno" title="CSS" src="{{asset('images/css.png')}}">
                    </div>

                    <div>
                        <img class="img_tecno" title="Vue.js" src="{{asset('images/vue.png')}}">
                    </div>

                    <div>
                        <img class="img_tecno" title="Tailwind" src="{{asset('images/twin.png')}}">
                    </div>

                    <div>
                        <img class="img_tecno" title="Ajax" src="{{asset('images/ajax.png')}}">
                    </div>

                    <div>
                        <img class="img_tecno" title="Livewire" src="{{asset('images/livewire.png')}}">
                    </div>
                </div>

            </div>


        </div>

        <div class="flex w-full justify-center">
            <div class="w-full flex justify-center  gap-x-3">
                <p class="title_tecnic text-white font-roboto font-bold">
                    {{__('index.db')}}
                </p>
                <div class="flex gap-x-3">
                    <div>
                        <img class="img_tecno" title="MySQL" src="{{asset('images/mysql.png')}}">
                    </div>
                </div>

            </div>
        </div>

        <div class="flex w-full justify-center">
            <div class="w-full flex justify-center  gap-x-3">
                <p class="title_tecnic text-white font-roboto font-bold">
                    Extras
                </p>
                <div class="flex gap-x-3">
                    <div>
                        <img class="img_tecno" title="MySQL" src="{{asset('images/gitlogo.png')}}">
                    </div>
                </div>

            </div>
        </div>
        <br>
        <br>
</div>

 --}}
<!-- Skills Section -->
    <section id="habilidades" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">{{ __('index.skills') }}</h2>
                <div class="w-24 h-1 bg-accent mx-auto"></div>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="bg-gradient-to-br from-red-500 to-pink-600 p-6 rounded-xl mb-4">
                        <h3 class="text-xl font-roboto text-white mb-4">Lenguajes</h3>
                        <div class="space-y-3">
                            <div class="bg-white/20 rounded-lg p-3">
                                <i class="fab fa-php text-3xl text-white mb-2"></i>
                                <p class="text-white font-medium">PHP</p>
                            </div>
                            <div class="bg-white/20 rounded-lg p-3">
                                <i class="fab fa-js-square text-3xl text-white mb-2"></i>
                                <p class="text-white font-medium">JavaScript</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <div class="bg-gradient-to-br from-blue-500 to-indigo-600 p-6 rounded-xl mb-4">
                        <h3 class="text-xl font-roboto text-white mb-4">Backend</h3>
                        <div class="space-y-3">
                            <div class="bg-white/20 rounded-lg p-3">
                                <i class="fab fa-laravel text-3xl text-white mb-2"></i>
                                <p class="text-white font-medium">Laravel</p>
                            </div>
                            <div class="bg-white/20 rounded-lg p-3">
                                <i class="fas fa-fire text-3xl text-white mb-2"></i>
                                <p class="text-white font-medium">CodeIgniter</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <div class="bg-gradient-to-br from-green-500 to-teal-600 p-6 rounded-xl mb-4">
                        <h3 class="text-xl font-roboto text-white mb-4">Frontend</h3>
                        <div class="space-y-3">
                            <div class="bg-white/20 rounded-lg p-3">
                                <i class="fab fa-vuejs text-3xl text-white mb-2"></i>
                                <p class="text-white font-medium">Vue.js</p>
                            </div>
                            <div class="bg-white/20 rounded-lg p-3">
                                <i class="fab fa-html5 text-3xl text-white mb-2"></i>
                                <p class="text-white font-medium">HTML/CSS</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <div class="bg-gradient-to-br from-purple-500 to-violet-600 p-6 rounded-xl mb-4">
                        <h3 class="text-xl font-roboto text-white mb-4">{{ __('index.tools') }}</h3>
                        <div class="space-y-3">
                            <div class="bg-white/20 rounded-lg p-3">
                                <i class="fas fa-database text-3xl text-white mb-2"></i>
                                <p class="text-white font-medium">MySQL</p>
                            </div>
                            <div class="bg-white/20 rounded-lg p-3">
                                <i class="fab fa-git-alt text-3xl text-white mb-2"></i>
                                <p class="text-white font-medium">Git</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
