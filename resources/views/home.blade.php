@extends('layouts.app')

@section('content')

@include('top-bar')

@include('sections.portada')

@include('sections.about_me')

@include('sections.my_projects')

@include('sections.tecnics')

@include('sections.contactme')

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-gray-400">
                © 2025 Carlos Daniel Pacheco Torres. {{ __('index.todos_los_derechos_reservados') }}.
            </p>
        </div>
    </footer>

     <!-- Project Modals -->
@include('sections.modal_hvacopcost')

    <!-- SIT-ZAC Modal -->
    <div id="sitzac-modal" class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-2xl max-w-4xl mx-4 max-h-[90vh] overflow-y-auto">
            <div class="p-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-3xl font-bold text-gray-900">SIT-ZAC - Sistema Judicial</h2>
                    <button onclick="closeProjectModal()" class="text-gray-400 hover:text-gray-600 text-2xl">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <div class="bg-gradient-to-br from-green-500 to-teal-600 rounded-xl p-8 text-center mb-6">
                            <i class="fas fa-gavel text-6xl text-white mb-4"></i>
                            <h3 class="text-xl font-roboto text-white">Justicia Digital</h3>
                        </div>

                        <div class="space-y-4">
                            <div class="bg-green-50 p-4 rounded-lg">
                                <h4 class="font-roboto text-green-900 mb-2">
                                    <i class="fas fa-building text-green-600 mr-2"></i>
                                    Cliente
                                </h4>
                                <p class="text-green-800">Tribunal de Justicia Administrativa del Estado de Zacatecas</p>
                            </div>

                            <div class="bg-blue-50 p-4 rounded-lg">
                                <h4 class="font-roboto text-blue-900 mb-2">
                                    <i class="fas fa-calendar text-blue-600 mr-2"></i>
                                    Duración
                                </h4>
                                <p class="text-blue-800">12 meses de desarrollo (2021-2022)</p>
                            </div>

                            <div class="bg-purple-50 p-4 rounded-lg">
                                <h4 class="font-roboto text-purple-900 mb-2">
                                    <i class="fas fa-users text-purple-600 mr-2"></i>
                                    Equipo
                                </h4>
                                <p class="text-purple-800">Lead Developer en equipo de 4 personas</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-2xl font-roboto text-gray-900 mb-4">Descripción del Proyecto</h3>
                        <p class="text-gray-600 mb-6">
                            Plataforma digital integral que moderniza el acceso a la justicia administrativa,
                            permitiendo a ciudadanos y abogados realizar trámites judiciales de forma remota
                            y eficiente, reduciendo tiempos y costos.
                        </p>

                        <h4 class="text-xl font-roboto text-gray-900 mb-3">Módulos Desarrollados</h4>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-file-alt text-green-500 mr-3"></i>
                                Promoción de juicios en línea
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-bell text-green-500 mr-3"></i>
                                Notificaciones vía Boletín Electrónico
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-mailbox text-green-500 mr-3"></i>
                                Buzón Virtual para promociones
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-calendar-check text-green-500 mr-3"></i>
                                Sistema de citas para atención directa
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-signature text-green-500 mr-3"></i>
                                Firma Electrónica (e.Fija) integrada
                            </li>
                        </ul>

                        <h4 class="text-xl font-roboto text-gray-900 mb-3">Impacto Social</h4>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-accent/10 rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold text-accent">5000+</div>
                                <div class="text-sm text-gray-600">Usuarios Registrados</div>
                            </div>
                            <div class="bg-accent/10 rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold text-accent">70%</div>
                                <div class="text-sm text-gray-600">Reducción Tiempos</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <h4 class="text-xl font-roboto text-gray-900 mb-4">Stack Tecnológico</h4>
                    <div class="flex flex-wrap gap-3">
                        <span class="px-4 py-2 bg-red-100 text-red-800 rounded-full font-medium">Laravel 8</span>
                        <span class="px-4 py-2 bg-blue-100 text-blue-800 rounded-full font-medium">MySQL</span>
                        <span class="px-4 py-2 bg-green-100 text-green-800 rounded-full font-medium">Bootstrap</span>
                        <span class="px-4 py-2 bg-yellow-100 text-yellow-800 rounded-full font-medium">JavaScript</span>
                        <span class="px-4 py-2 bg-purple-100 text-purple-800 rounded-full font-medium">Ajax</span>
                        <span class="px-4 py-2 bg-pink-100 text-pink-800 rounded-full font-medium">PDF Generator</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PETC Modal -->
    <div id="petc-modal" class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-2xl max-w-4xl mx-4 max-h-[90vh] overflow-y-auto">
            <div class="p-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-3xl font-bold text-gray-900">Sistema PETC</h2>
                    <button onclick="closeProjectModal()" class="text-gray-400 hover:text-gray-600 text-2xl">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <div class="bg-gradient-to-br from-orange-500 to-red-600 rounded-xl p-8 text-center mb-6">
                            <i class="fas fa-school text-6xl text-white mb-4"></i>
                            <h3 class="text-xl font-roboto text-white">Gestión Educativa</h3>
                        </div>

                        <div class="space-y-4">
                            <div class="bg-orange-50 p-4 rounded-lg">
                                <h4 class="font-roboto text-orange-900 mb-2">
                                    <i class="fas fa-graduation-cap text-orange-600 mr-2"></i>
                                    Cliente
                                </h4>
                                <p class="text-orange-800">Secretaría de Educación - Programa Escuelas Tiempo Completo</p>
                            </div>

                            <div class="bg-blue-50 p-4 rounded-lg">
                                <h4 class="font-roboto text-blue-900 mb-2">
                                    <i class="fas fa-calendar text-blue-600 mr-2"></i>
                                    Período
                                </h4>
                                <p class="text-blue-800">10 meses de desarrollo (2020-2021)</p>
                            </div>

                            <div class="bg-green-50 p-4 rounded-lg">
                                <h4 class="font-roboto text-green-900 mb-2">
                                    <i class="fas fa-trophy text-green-600 mr-2"></i>
                                    Logro
                                </h4>
                                <p class="text-green-800">Sistema crítico para gestión de 200+ escuelas</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-2xl font-roboto text-gray-900 mb-4">Sobre el Proyecto</h3>
                        <p class="text-gray-600 mb-6">
                            Sistema integral para la gestión del Programa de Escuelas de Tiempo Completo,
                            automatizando procesos administrativos críticos como nóminas, pagos y asistencias
                            de personal docente y administrativo.
                        </p>

                        <h4 class="text-xl font-roboto text-gray-900 mb-3">Funcionalidades Clave</h4>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-money-check-alt text-green-500 mr-3"></i>
                                Gestión completa de nóminas
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-search-dollar text-green-500 mr-3"></i>
                                Verificación automática de pagos
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-clipboard-list text-green-500 mr-3"></i>
                                Generación de listas de asistencia
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-chalkboard-teacher text-green-500 mr-3"></i>
                                Módulo especializado para docentes
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-chart-bar text-green-500 mr-3"></i>
                                Reportes estadísticos avanzados
                            </li>
                        </ul>

                        <h4 class="text-xl font-roboto text-gray-900 mb-3">Impacto Educativo</h4>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-accent/10 rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold text-accent">200+</div>
                                <div class="text-sm text-gray-600">Escuelas Beneficiadas</div>
                            </div>
                            <div class="bg-accent/10 rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold text-accent">1500+</div>
                                <div class="text-sm text-gray-600">Maestros Gestionados</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <h4 class="text-xl font-roboto text-gray-900 mb-4">Tecnologías Implementadas</h4>
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

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Navbar background on scroll
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('nav');
            if (window.scrollY > 100) {
                nav.classList.add('bg-white/95');
                nav.classList.remove('bg-white/90');
            } else {
                nav.classList.add('bg-white/90');
                nav.classList.remove('bg-white/95');
            }
        });

        // Add subtle parallax effect to hero section
        window.addEventListener('scroll', function() {
            const hero = document.querySelector('#inicio');
            const scrolled = window.pageYOffset;
            const rate = scrolled * -0.5;

            if (hero) {
                hero.style.transform = `translateY(${rate}px)`;
            }
        });
    </script>

