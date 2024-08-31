<aside class="w-full flex">
    <div class="w-full flex">
        <div class="w-1/6">
            <img class="header" style="height: 90px; width:190px;" name="logoEmpresa" id="logoEmpresa" src="{{asset('images/Logo-NDL_blanco_marca-r.png')}}" alt="Nano Degree">
        </div>
        <ul class="flex w-full justify-end mx-2 gap-x-2 ">
            <li class="grid relative w-1/6 place-items-center {{request()->routeIs('clients')  ? 'border-t-2 border-[#EEF508]' : 'border-t-0 hover:border-b-2 hover:border-[#EEF508]'}} cursor-pointer ">
                <a class="">
                    <div class="w-full grid justify-items-cente">
                        <div class="w-full flex justify-center ">
                            <i class="fas fa-address-book fa-2x text-[#EEF508]"></i>
                        </div>
                        <div class="w-full flex justify-center ">
                            <span class="font-roboto text-[#EEF508]">Clientes</span>
                        </div>
                    </div>
                </a>
            </li>

            {{-- <li class="grid relative w-1/6  {{request()->routeIs('proveedores')  ? 'border-t-2 border-[#EEF508]' : 'border-t-0 hover:border-b-2 hover:border-[#EEF508]'}} cursor-pointer py-1">
                <a   class="">
                    <div class="w-full grid justify-items-cente">
                        <div class="w-full flex justify-center py-1">
                            <i class="fas fa-person-dolly fa-2x  {{request()->routeIs('proveedores')}}"></i>
                        </div>
                        <div class="w-full flex justify-center py-1">
                            <span class="font-montserrat {{request()->routeIs('proveedores')}}">Proveedores</span>
                        </div>
                    </div>
                </a>
            </li>

            <li class="grid relative w-1/6  {{request()->routeIs('mi_empresa')  ? 'border-t-2 border-[#EEF508]' : 'border-t-0 hover:border-b-2 hover:border-[#EEF508]'}} cursor-pointer py-1">
                <a>
                    <div class="w-full grid justify-items-center text-[#EEF508]">
                        <div class="w-full flex justify-center py-1">
                            <i class="fas fa-tools fa-2x  {{request()->routeIs('mi_empresa')}}"></i>
                        </div>
                        <div class="w-full flex justify-center py-1">
                            <span class="font-montserrat {{request()->routeIs('mi_empresa')}}">Configuración</span>
                        </div>
                    </div>
                </a>
            </li>

            <li class="grid relative w-1/6  {{request()->routeIs('entregas')  ? 'border-t-2 border-[#EEF508]' : 'border-t-0 hover:border-b-2 hover:border-[#EEF508]'}} cursor-pointer py-1">
                <a  class="">
                    <div class="w-full grid justify-items-center ">
                        <div class="w-full flex justify-center py-1">
                            <i class="fas fa-scanner-keyboard fa-2x  {{request()->routeIs('entregas')}}"></i>
                        </div>
                        <div class="w-full flex justify-center py-1">
                            <span class="font-montserrat {{request()->routeIs('entregas')}}">Panel Asingaciónes</span>
                        </div>
                    </div>
                </a>
            </li>

            <li class="grid relative w-1/6  {{request()->routeIs('devoluciones')  ? 'border-t-2 border-[#EEF508]' : 'border-t-0 hover:border-b-2 hover:border-[#EEF508]'}} cursor-pointer py-1">
                <a  class="">
                    <div class="w-full grid justify-items-center">
                        <div class="w-full flex justify-center py-1">
                            <i class="fal fa-undo-alt fa-2x  {{request()->routeIs('devoluciones')}}"></i>
                        </div>
                        <div class="w-full flex justify-center py-1">
                            <span class="font-montserrat {{request()->routeIs('devoluciones')}}">Devoluciones</span>
                        </div>
                    </div>
                </a>
            </li> --}}

        </ul>
    </div>
</aside>

