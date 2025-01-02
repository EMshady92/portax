{{-- <div class="w-1/2 sm:w-full  h-full margin-all">
    <div class="flex w-full">

        <div class="w-full margin_title">
            <div class="outer">
                <h1 style="text-shadow: 2px 2px 5px #011629;" class=" font-roboto title_1 text-white">
                    {{__('index.web_developer')}}
                 </h1>
            </div>

             <div class="outer">
                <h3 style="text-shadow: 2px 2px 5px #011629;" class="typewriter font-roboto title_2 text-white">
                    I.S.C. Carlos Daniel Pacheco
                </h3>
            </div>
            <div class="outer">
            <i href="https://www.linkedin.com/in/carlos-daniel-torres-bb0259159" title="https://www.linkedin.com/in/carlos-daniel-torres-bb0259159/" class="fab fa-linkedin text-5xl cursor-pointer redes"></i>
            <i href="https://github.com/EMshady92" title="https://github.com/EMshady92" class="fa-brands fa-github text-5xl cursor-pointer redes"></i>
            </div>

        </div>

    </div>
</div>
<div class="w-1/2 sm:w-full  h-full justify-items-start margin-t-image flex_grid">
    <div class="floating aos-init aos-animate rounded_img bg-[#172c3d] div_img block shadow-xl  border-dashed border-[5px] border-[#011629]">
        <img class="image_w_h rounded_img aos-init aos-animate" src="{{asset('images/me.png')}}">
    </div>

</div> --}}
<div class="ancho_tarjeta grid justify-items-center tarjet_style ">
    <div class="floating aos-init aos-animate rounded_img bg-[#172c3d] div_img block shadow-xl  border-dashed border-[5px] border-[#011629]">
        <img class="image_w_h rounded_img aos-init aos-animate" src="{{asset('images/back_new2.jpg')}}">
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
        <i href="https://www.linkedin.com/in/carlos-daniel-torres-bb0259159" title="https://www.linkedin.com/in/carlos-daniel-torres-bb0259159/" class="fab fa-linkedin size_i_portada cursor-pointer redes"></i>
        <i href="https://github.com/EMshady92" title="https://github.com/EMshady92" class="fa-brands fa-github size_i_portada cursor-pointer redes"></i>


        @if (App::getLocale() == 'es')
        <a target="_blank" href="{{asset('documents/CV CDPT ES.pdf')}}">
            <i  id="downloadBtn" name="downloadBtn" class="fa-solid fa-file-contract size_i_portada cursor-pointer redes"></i>
        </a>
        @endif

        @if (App::getLocale() == 'en')
        <a target="_blank" href="{{asset('documents/CV CDPT EN.pdf')}}">
            <i  id="downloadBtn" name="downloadBtn" class="fa-solid fa-file-contract size_i_portada cursor-pointer redes"></i>
        </a>
        @endif
    </div>
</div>
<style>

</style>
<script src="javascript">

</script>
