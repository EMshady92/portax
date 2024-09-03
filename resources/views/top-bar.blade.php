
<div class="w-full grid ">
    <div class=" bg-[#011629] w-[100%] rounded-lg py-1 flex shadow-xl">
        <div class="w-[20%]">
            <img class="img-widt   shadow-lg mx-2" src="{{asset('images/logo_port.png')}}">

        </div>

         @include('sections.modal_aboutme')
        <div class="w-full flex justify-end">
            <div class="grid grid-cols-4 divide-x-0 w-3/4 mx-2 text-white  place-items-center font-roboto 2xl:text-3xl xl:text-2xl lg:text-xl md:text-xl sm:text-xl">
                <div onclick="mostrar_modal('modal_aboutme');" class="w-full cursor-pointer hover:bg-[#5d7081] hover:rounded-b-lg flex justify-center h-full place-items-center">{{ __('index.about_me')}}</div>
                <div class="w-full cursor-pointer hover:bg-[#5d7081] hover:rounded-b-lg flex justify-center h-full place-items-center">Contacto</div>



                <div class="dropdown">
                    <button id="idms" onclick="myFunction()" class="dropbtn font-roboto hover:text-[#]">{{__('index.idioma')}}</button>
                    <div id="myDropdown" class=" grid dropdown-content hidden absolute z-10 bg-[#5d7081] w-[100px] rounded-md ">
                      {{--   {{ App::getLocale() }} --}}
                        <div class="w-full mx-3 grid">

                            @if (App::getLocale() == 'es')
                            <a href="{{ url('locale/en')}}" class="font-roboto">En</a>
                            @endif

                            @if (App::getLocale() == 'en')
                            <a href="{{ url('locale/es')}}" class="font-roboto">Es</a>
                            @endif

                        </div>


                    </div>
                  </div>
                <button>BN</button>
            </div>

        </div>
    </div>
    <hr class="animated-hr">

<script>

function myFunction() {

    $('#myDropdown').toggleClass("hidden");
}

</script>



