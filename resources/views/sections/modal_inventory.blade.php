{{-- <div id="modal_inventory" name="modal_inventory" onclick="show_info('info_porta_inventory','parallaxasx_inventory')"  class="proyecs_sizes  bg-[#172c3d] rounded overflow-hidden  border-[3px] border-[#67788a] cursor-pointer hover:border-[#ec1c24] ">
    <div class="covera parallaxas_inventory"  id="info_porta_inventory" name="info_porta_inventory">
        <p class=" font-roboto">
            Desprosoft Inventory Management
        <span  class="text-left font-roboto">
            {{__('index.inventory_port_summary')}}
        </span>
        </p>


    </div>



    <div class="w-full bg-[#091a28] flex justify-end">
        <div class="mt-2 flex gap-4 w-full justify-center">
            <div>
                <img class="img_tecno" title="Laravel" src="{{asset('images/laravel.png')}}">
            </div>


            <div>
                <img class="img_tecno" title="Ajax" src="{{asset('images/ajax.png')}}">
            </div>

            <div>
                <img class="img_tecno" title="Tailwind" src="{{asset('images/twin.png')}}">
            </div>

            <div>
                <img class="img_tecno" title="Livewire" src="{{asset('images/livewire.png')}}">
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

 <!-- Inventory Modal -->
    <div id="inventory-modal" class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-2xl max-w-4xl mx-4 max-h-[90vh] overflow-y-auto">
            <div class="p-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-3xl font-bold text-gray-900">Desprosoft Inventory Management</h2>
                    <button onclick="toggleDetails('inventory-modal');" class="text-gray-400 hover:text-gray-600 text-2xl">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <div class="bg-gradient-to-br from-purple-500 to-indigo-600 rounded-xl p-8 text-center mb-6">
                            <i class="fas fa-boxes text-6xl text-white mb-4"></i>
                            <h3 class="text-xl font-roboto text-white">Desprosoft Inventory Management</h3>
                        </div>

                        <div class="space-y-4">
                            <div class="bg-purple-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-purple-900 mb-2">
                                    <i class="fas fa-warehouse text-purple-600 mr-2"></i>
                                    Sector
                                </h4>
                                <p class="text-purple-800">Gestión y Control de Inventarios</p>
                            </div>

                            <div class="bg-indigo-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-indigo-900 mb-2">
                                    <i class="fas fa-rocket text-indigo-600 mr-2"></i>
                                    Innovación
                                </h4>
                                <p class="text-indigo-800">Tecnologías modernas: Laravel + Livewire</p>
                            </div>

                            <div class="bg-cyan-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-cyan-900 mb-2">
                                    <i class="fas fa-mobile-alt text-cyan-600 mr-2"></i>
                                    UX/UI
                                </h4>
                                <p class="text-cyan-800">Interfaz moderna con Tailwind CSS</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-2xl font-roboto text-gray-900 mb-4">Sobre el Proyecto</h3>
                        <p class="text-gray-600 mb-6">
                            Sistema integral de gestión de inventarios desarrollado con tecnologías modernas para optimizar el control de stock, automatizar procesos de reabastecimiento y proporcionar análisis detallados de movimientos de inventario en tiempo real.

                        </p>

                        <h4 class="text-xl font-roboto text-gray-900 mb-3">Funcionalidades Clave</h4>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-bolt text-yellow-500 mr-3"></i>
                                Interfaz reactiva con Livewire
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-bell text-red-500 mr-3"></i>
                                Alertas automáticas de stock bajo
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-chart-bar text-green-500 mr-3"></i>
                                Reportes y análisis en tiempo real
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-mobile-alt text-purple-500 mr-3"></i>
                                Diseño completamente responsive
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-barcode text-blue-500 mr-3"></i>
                                Escáner de códigos de barras integrado
                            </li>
                        </ul>

                         <h4 class="text-xl font-semibold text-gray-900 mb-3">Módulos Principales</h4>
                        <div class="space-y-3 mb-6">
                            <div class="bg-purple-50 p-3 rounded-lg">
                                <h5 class="font-semibold text-purple-900 mb-1">
                                    <i class="fas fa-cube text-purple-600 mr-2"></i>
                                    Gestión de Productos
                                </h5>
                                <p class="text-purple-800 text-sm">Catálogo completo con categorías, precios y especificaciones detalladas</p>
                            </div>
                            <div class="bg-indigo-50 p-3 rounded-lg">
                                <h5 class="font-semibold text-indigo-900 mb-1">
                                    <i class="fas fa-truck text-indigo-600 mr-2"></i>
                                    Control de Proveedores
                                </h5>
                                <p class="text-indigo-800 text-sm">Gestión integral de proveedores con historial de órdenes y evaluaciones</p>
                            </div>
                            <div class="bg-cyan-50 p-3 rounded-lg">
                                <h5 class="font-semibold text-cyan-900 mb-1">
                                    <i class="fas fa-exchange-alt text-cyan-600 mr-2"></i>
                                    Movimientos de Stock
                                </h5>
                                <p class="text-cyan-800 text-sm">Registro detallado de entradas, salidas y transferencias de inventario</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <h4 class="text-xl font-roboto text-gray-900 mb-4">Tecnologías Implementadas</h4>
                    <div class="flex flex-wrap gap-3">
                        <span class="px-4 py-2 bg-red-100 text-red-800 rounded-full font-medium">Laravel</span>
                        <span class="px-4 py-2 bg-pink-100 text-pink-800 rounded-full font-medium">Livewire</span>
                        <span class="px-4 py-2 bg-cyan-100 text-cyan-800 rounded-full font-medium">Tailwind CSS</span>
                        <span class="px-4 py-2 bg-blue-100 text-blue-800 rounded-full font-medium">MySQL</span>
                        <span class="px-4 py-2 bg-green-100 text-green-800 rounded-full font-medium">JavaScript</span>
                        <span class="px-4 py-2 bg-yellow-100 text-yellow-800 rounded-full font-medium">Ajax</span>
                        <span class="px-4 py-2 bg-purple-100 text-purple-800 rounded-full font-medium">Chart.js</span>
                        <span class="px-4 py-2 bg-gray-100 text-gray-800 rounded-full font-medium">Git</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
