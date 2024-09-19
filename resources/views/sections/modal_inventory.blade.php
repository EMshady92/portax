{{-- <div id="modal_inventory" name="modal_inventory" class="fixed z-10 inset-0 overflow-y-auto mt-10 hidden">
    <style>
datalist {
  position: absolute;
  background-color: white;
  border: 1px solid blue;
  border-radius: 0 0 5px 5px;
  border-top: none;
  font-family: sans-serif;
  width: 350px;
  padding: 5px;
}

datalist.option {
  background-color: white;
  padding: 4px;
  color: blue;
  margin-bottom: 1px;
  font-size: 18px;
  cursor: pointer;
}
    </style>
        <div class="flex  items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
          <!-- Fondo oscuro -->
          <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75" onclick="ocultar_modal('modal_inventory')"></div>
          </div>
          <!-- Contenedor del modal -->
          <div style="width: 60%" class="border-2 border-blue-600 inline-block align-bottom bg-[#011629] rounded-lg text-left overflow-hidden shadow-xl transform transition-all  justify-items-center" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="bg-[#011629] pb-4">
              <div class="grid w-full">
               <div class="w-full">
                @include('body_carts_projects.portada_inventory')
                @include('body_carts_projects.sumary_inventory')
               </div>
              </div>
            </div>
            <div class="bg-[#172c3d] px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
              <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                <button type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-[#011629] text-base leading-6 font-medium text-[#ec1c24] shadow-sm hover:bg-[#67788a] focus:outline-none focus:border-blue-700 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5" onclick="ocultar_modal('modal_inventory')">
                    {{__('index.cerrar')}}
                </button>
              </span>
            </div>
          </div>
        </div>
        <script>

        </script>
      </div>

 --}}


 <div id="modal_inventory" name="modal_inventory" onclick="show_info('info_porta_inventory','parallaxasx_inventory')"   class="bg-[#172c3d] rounded overflow-hidden  border-[3px] border-[#67788a] cursor-pointer hover:border-[#ec1c24] proyecs_sizes">
    <div  class="w-full">
        <section class=""> <!-- inicio efecto parallax  -->
            <div class="covera parallaxas_inventory"  id="info_porta_inventory" name="info_porta_inventory">
                <p class=" font-roboto">
                    Desprosoft Inventory Management
                <span  class="text-left font-roboto">{{__('index.inventory_port_summary')}}</span>
                </p>
            </div>
        </section>
    </div>


    <div class="w-full bg-[#091a28] flex justify-end">
        <div class="px-6 pt-4 pb-2 flex gap-4 w-full justify-center">
            <div>
                <img class="w-10 h-10" title="Laravel" src="{{asset('images/laravel.png')}}">
            </div>


            <div>
                <img class="w-10 h-10" title="Ajax" src="{{asset('images/ajax.png')}}">
            </div>

            <div>
                <img class="w-10 h-10" title="Tailwind" src="{{asset('images/twin.png')}}">
            </div>

            <div>
                <img class="w-10 h-10" title="Livewire" src="{{asset('images/livewire.png')}}">
            </div>

            <div>
                <img class="w-10 h-10" title="CSS" src="{{asset('images/css.png')}}">
            </div>

            <div>
                <img class="w-10 h-10" title="MySQL" src="{{asset('images/mysql.png')}}">
            </div>

            <div>
                <img class="w-10 h-10" title="JavaScript" src="{{asset('images/JS.png')}}">
            </div>

            <div>
                <img class="w-10 h-10" title="Ajax" src="{{asset('images/ajax.png')}}">
            </div>

            <div>
                <img class="w-10 h-10" title="Github" src="{{asset('images/gitlogo.png')}}">
            </div>
        </div>
    </div>
</div>
