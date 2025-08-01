{{--
<div class="w-3/4 h-3/4 bg-[#172c3d] rounded-lg shadow-[0_4px_30px_rgba(0,0,0,0.5)] shadow-white flex">
    <div class="w-full flex mx-2">
            <div class="w-1/3 grid justify-items-center items-center">|
                <div class="floating aos-init aos-animate rounded_img bg-[#fff] div_img block shadow-xl  border-dashed border-[5px] border-[#011629]">
                    <img class="image_w_h rounded_img aos-init aos-animate" src="{{asset('images/bird.png')}}">
                </div>
                <div class="outer">
                    <h1 style="text-shadow: 2px 2px 5px #011629;" class=" font-roboto title_1 text-white">
                        {{__('index.web_developer')}}
                    </h1>
                </div>

                <div class="outer">
                    <h3 style="text-shadow: 2px 2px 5px #011629;" class=" font-roboto title_2 text-white">
                        I.S.C. Carlos Daniel Pacheco
                    </h3>
                </div>
                <div class="outer">

                    <i onclick="funciton_copy();" id="copyButton" name="copyButton" title="wuish_92@hotmail.com" class="fas fa-envelope size_i_portada cursor-pointer redes"></i>

                    <a target="_blank" href="https://www.linkedin.com/in/carlospachecot">
                    <i title="https://www.linkedin.com/in/carlospachecot" class="fab fa-linkedin size_i_portada cursor-pointer redes"></i>
                    </a>

                    <a target="_blank" href="https://github.com/EMshady92">
                    <i title="https://github.com/EMshady92" class="fa-brands fa-github size_i_portada cursor-pointer redes"></i>
                    </a>

                    @if (App::getLocale() == 'es')
                    <a target="_blank" href="{{asset('documents/CV CDPT ES.pdf')}}">
                        <i  id="downloadBtn" name="downloadBtn" class="fa-solid fa-file-contract size_i_portada cursor-pointer redes"></i>
                    </a>
                    @endif

                    @if (App::getLocale() == 'en')
                    <a target="_blank" href="{{asset('documents/Fullstackdeveloperen.pdf')}}">
                        <i  id="downloadBtn" name="downloadBtn" class="fa-solid fa-file-contract size_i_portada cursor-pointer redes"></i>
                    </a>
                    @endif
                </div>
        </div>
        <div class="w-2/3 h-full grid justify-items-center items-center place-content-center">

           <div class="flex justify-center mx-3">
              <p style="text-shadow: 2px 2px 5px #6b7280;" class="text-white presentacion font-roboto"><b class="hi">!{{__('index.hola')}}</b>{{__('index.presentacion')}}</p>

           </div>
        </div>
    </div>
</div>
<style>

</style>
<script src="javascript">

</script> --}}
 <!-- Hero Section -->
    <section id="inicio" class="gradient-bg min-h-screen flex items-center justify-center relative overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="relative z-10 text-center text-white px-4">
             <div class="w-[14rem] h-[14rem] mx-auto bg-white/20 backdrop-blur-md rounded-full p-2 mb-6 animate-float">
                    <img src="{{asset('images/bird_mora.png')}}" alt="Carlos Daniel - Developer" class="w-full h-full object-cover rounded-full border-4 border-white/30">
                </div>

            <h1 class="text-2xl 2xl:text-5xl xl:text-5xl lg:text-5xl md:text-7xl font-bold mb-6">
                {{ __('index.hola') }}, {{ __('index.soy') }} <span class="text-accent">Carlos Daniel</span>
            </h1>
            <p class="text-md 2xl:text-xl xl:text-xl md:text-2xl sm:text-lg xs:text-md mb-8 text-gray-200 max-w-3xl mx-auto">
                {{ __('index.presentacion') }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
                <a href="#proyectos" class="bg-accent hover:bg-accent/90 text-white px-8 py-4 rounded-full font-roboto transition-all duration-300 hover:scale-105">
                    {{ __('index.my_proyects') }}
                </a>
                <a href="#contacto" class="border-2 border-white text-white hover:bg-white hover:text-gray-900 px-8 py-4 rounded-full font-roboto transition-all duration-300">
                    {{ __('index.contact') }}
                </a>
            </div>

            <!-- Social Icons -->
            <div class="flex justify-center space-x-6">
                <a href="mailto:wuish_92@hotmail.com" class="group bg-white/20 backdrop-blur-md hover:bg-white/30 p-4 rounded-full transition-all duration-300 hover:scale-110">
                    <i class="fas fa-envelope text-2xl text-white group-hover:text-accent transition-colors duration-300"></i>
                </a>
                <a href="https://linkedin.com/in/carlosdaniel" target="_blank" class="group bg-white/20 backdrop-blur-md hover:bg-white/30 p-4 rounded-full transition-all duration-300 hover:scale-110">
                    <i class="fab fa-linkedin text-2xl text-white group-hover:text-blue-400 transition-colors duration-300"></i>
                </a>
                <a href="https://github.com/EMshady92" target="_blank" class="group bg-white/20 backdrop-blur-md hover:bg-white/30 p-4 rounded-full transition-all duration-300 hover:scale-110">
                    <i class="fab fa-github text-2xl text-white group-hover:text-gray-300 transition-colors duration-300"></i>
                </a>


                    @if (App::getLocale() == 'es')
                    <a href="{{asset('documents/CV CDPT ES.pdf')}}" title="My CV" target="_blank" class="group bg-white/20 backdrop-blur-md hover:bg-white/30 p-4 rounded-full transition-all duration-300 hover:scale-110">
                        <i class="fas fa-file-pdf text-2xl text-white group-hover:text-red-400 transition-colors duration-300"></i>
                    </a>
                    @endif

                    @if (App::getLocale() == 'en')
                    <a href="{{asset('documents/Fullstackdeveloperen.pdf')}}" title="My CV" target="_blank" class="group bg-white/20 backdrop-blur-md hover:bg-white/30 p-4 rounded-full transition-all duration-300 hover:scale-110">
                        <i class="fas fa-file-pdf text-2xl text-white group-hover:text-red-400 transition-colors duration-300"></i>
                    </a>
                    @endif
            </div>
        </div>
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <i class="fas fa-chevron-down text-white text-2xl"></i>
        </div>
    </section>
