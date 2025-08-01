@extends('layouts.app')

@section('content')

    <!-- Navigation -->
    <nav class="fixed top-0 w-full bg-white/90 backdrop-blur-md shadow-sm z-50 border-b-2 border-gray-400 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <div class="text-2xl font-bold text-gray-900">
                    <span class="text-primary">Carlos</span> Daniel
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#inicio" class="nav-link text-gray-700 hover:text-primary font-medium">Inicio</a>
                    <a href="#sobre-mi" class="nav-link text-gray-700 hover:text-primary font-medium">Sobre Mí</a>
                    <a href="#proyectos" class="nav-link text-gray-700 hover:text-primary font-medium">Proyectos</a>
                    <a href="#habilidades" class="nav-link text-gray-700 hover:text-primary font-medium">Habilidades</a>
                    <a href="#contacto" class="nav-link text-gray-700 hover:text-primary font-medium">Contacto</a>
                    @if (App::getLocale() == 'es')
                    <a href="#" class="nav-link text-gray-700 hover:text-primary font-medium">English</a>
                    @endif

                    @if (App::getLocale() == 'en')
                    <a href="#" class="nav-link text-gray-700 hover:text-primary font-medium">Español</a>
                    @endif
                </div>
                <div class="md:hidden">
                    <button class="text-gray-700 hover:text-primary">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

   <!-- Hero Section -->
    <section id="inicio" class="gradient-bg min-h-screen flex items-center justify-center relative overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="relative z-10 text-center text-white px-4">
             <div class="w-[20rem] h-[20rem] mx-auto bg-white/20 backdrop-blur-md rounded-full p-2 mb-6 animate-float  rounded-ful">
                    <img src="{{asset('images/bird_mora.png')}}" alt="Carlos Daniel - Developer" class="w-full h-full object-cover rounded-full border-4 border-white/30">
                </div>
            <h1 class="text-5xl md:text-7xl font-bold mb-6">
                Hola, soy <span class="text-accent">Carlos Daniel</span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 text-gray-200 max-w-3xl mx-auto">
                Ingeniero en Sistemas Computacionales y Desarrollador Full-Stack con más de 6 años de experiencia creando aplicaciones web escalables
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
                <a href="#proyectos" class="bg-accent hover:bg-accent/90 text-white px-8 py-4 rounded-full font-roboto transition-all duration-300 hover:scale-105">
                    Ver mis proyectos
                </a>
                <a href="#contacto" class="border-2 border-white text-white hover:bg-white hover:text-gray-900 px-8 py-4 rounded-full font-roboto transition-all duration-300">
                    Contactarme
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
                <a href="/cv-carlos-daniel.pdf" title="My CV" target="_blank" class="group bg-white/20 backdrop-blur-md hover:bg-white/30 p-4 rounded-full transition-all duration-300 hover:scale-110">
                    <i class="fas fa-file-pdf text-2xl text-white group-hover:text-red-400 transition-colors duration-300"></i>
                </a>
            </div>
        </div>
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <i class="fas fa-chevron-down text-white text-2xl"></i>
        </div>
    </section>

    <!-- About Section -->
    <section id="sobre-mi" class="py-20 bg-gradient-to-br from-blue-500 to-indigo-600 ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Sobre Mí</h2>
                <div class="w-24 h-1 bg-accent mx-auto"></div>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center ">
                <div>
                    <div class="bg-gradient-to-br from-accent to-orange-300 p-8 rounded-2xl text-white hover:-translate-y-1 transition-all duration-300 ">
                        <h3 class="text-2xl font-roboto mb-4">Mi Filosofía</h3>
                        <p class="text-lg leading-relaxed">
                            Creo en crear soluciones tecnológicas que no solo funcionen, sino que transformen la manera en que las empresas operan. Cada línea de código que escribo está pensada para generar valor real.
                        </p>
                    </div>
                </div>
                <div class="space-y-6">
                    <div class="flex border-2 border-orange-300 items-start space-x-4 shadow-2xl rounded-xl p-1 hover:-translate-y-1 transition-all duration-300">
                        <div class="bg-accent/10 p-3 rounded-lg">
                            <i class="fas fa-rocket text-accent text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-roboto text-gray-900 mb-2">Innovación Constante</h4>
                            <p class="text-white">Siempre busco las últimas tecnologías y mejores prácticas para entregar soluciones de vanguardia.</p>
                        </div>
                    </div>
                    <div class="flex border-2 border-orange-300 items-start space-x-4 shadow-2xl rounded-xl p-1 hover:-translate-y-1 transition-all duration-300">
                        <div class="bg-accent/10 p-3 rounded-lg">
                            <i class="fas fa-users text-accent text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-roboto text-gray-900 mb-2">Trabajo en Equipo</h4>
                            <p class="text-white">Experiencia colaborando con equipos multidisciplinarios en proyectos para clientes de Latinoamérica y EUA.</p>
                        </div>
                    </div>
                    <div class="flex border-2 border-orange-300 items-start space-x-4 shadow-2xl rounded-xl p-1 hover:-translate-y-1 transition-all duration-300">
                        <div class="bg-accent/10 p-3 rounded-lg">
                            <i class="fas fa-chart-line text-accent text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-roboto text-gray-900 mb-2">Orientado a Resultados</h4>
                            <p class="text-white">Enfocado en entregar proyectos que generen impacto real en los objetivos de negocio.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="proyectos" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Mis Proyectos</h2>
                <div class="w-24 h-1 bg-accent mx-auto mb-6"></div>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Soluciones innovadoras que han impactado positivamente a empresas y organizaciones
                </p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="bg-white rounded-xl shadow-lg card-hover overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center">
                        <i class="fas fa-wind text-6xl text-white"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-roboto text-gray-900 mb-3">Desprosoft HVACopcost</h3>
                        <p class="text-gray-600 mb-4">
                            Software online para análisis energético, financiero y de confort de proyectos HVAC. Convierte datos técnicos en conocimiento valioso.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="tech-badge px-3 py-1 bg-red-100 text-red-800 text-sm rounded-full">Laravel</span>
                            <span class="tech-badge px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">MySQL</span>
                            <span class="tech-badge px-3 py-1 bg-yellow-100 text-yellow-800 text-sm rounded-full">JavaScript</span>
                        </div>
                        <button class="w-full bg-primary hover:bg-secondary text-white py-2 rounded-lg transition-colors duration-300">
                            Ver Detalles
                        </button>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="bg-white rounded-xl shadow-lg card-hover overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-green-500 to-teal-600 flex items-center justify-center">
                        <i class="fas fa-gavel text-6xl text-white"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-roboto text-gray-900 mb-3">SIT-ZAC</h3>
                        <p class="text-gray-600 mb-4">
                            Sistema de justicia administrativa con promoción de juicios online, notificaciones electrónicas y firma digital.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="tech-badge px-3 py-1 bg-red-100 text-red-800 text-sm rounded-full">Laravel</span>
                            <span class="tech-badge px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">MySQL</span>
                            <span class="tech-badge px-3 py-1 bg-purple-100 text-purple-800 text-sm rounded-full">Ajax</span>
                        </div>
                        <button class="w-full bg-primary hover:bg-secondary text-white py-2 rounded-lg transition-colors duration-300">
                            Ver Detalles
                        </button>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="bg-white rounded-xl shadow-lg card-hover overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-orange-500 to-red-600 flex items-center justify-center">
                        <i class="fas fa-school text-6xl text-white"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-roboto text-gray-900 mb-3">Sistema PETC</h3>
                        <p class="text-gray-600 mb-4">
                            Gestión integral de nóminas, verificación de pagos y administración para el Programa de Escuelas de Tiempo Completo.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="tech-badge px-3 py-1 bg-red-100 text-red-800 text-sm rounded-full">Laravel</span>
                            <span class="tech-badge px-3 py-1 bg-green-100 text-green-800 text-sm rounded-full">HTML/CSS</span>
                            <span class="tech-badge px-3 py-1 bg-gray-100 text-gray-800 text-sm rounded-full">Git</span>
                        </div>
                        <button class="w-full bg-primary hover:bg-secondary text-white py-2 rounded-lg transition-colors duration-300">
                            Ver Detalles
                        </button>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="bg-white rounded-xl shadow-lg card-hover overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-cyan-500 to-blue-600 flex items-center justify-center">
                        <i class="fas fa-tools text-6xl text-white"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-roboto text-gray-900 mb-3">HMOP HVAC Mantainance</h3>
                        <p class="text-gray-600 mb-4">
                            Sistema especializado para el mantenimiento de equipos HVAC con tecnologías modernas y interfaz intuitiva.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="tech-badge px-3 py-1 bg-red-100 text-red-800 text-sm rounded-full">Laravel</span>
                            <span class="tech-badge px-3 py-1 bg-pink-100 text-pink-800 text-sm rounded-full">Livewire</span>
                            <span class="tech-badge px-3 py-1 bg-cyan-100 text-cyan-800 text-sm rounded-full">Tailwind</span>
                        </div>
                        <button class="w-full bg-primary hover:bg-secondary text-white py-2 rounded-lg transition-colors duration-300">
                            Ver Detalles
                        </button>
                    </div>
                </div>

                <!-- Project 5 -->
                <div class="bg-white rounded-xl shadow-lg card-hover overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-purple-500 to-indigo-600 flex items-center justify-center">
                        <i class="fas fa-boxes text-6xl text-white"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-roboto text-gray-900 mb-3">Sistema de Inventarios</h3>
                        <p class="text-gray-600 mb-4">
                            Gestión completa de inventarios con tecnologías modernas para optimizar procesos empresariales.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="tech-badge px-3 py-1 bg-red-100 text-red-800 text-sm rounded-full">Laravel</span>
                            <span class="tech-badge px-3 py-1 bg-pink-100 text-pink-800 text-sm rounded-full">Livewire</span>
                            <span class="tech-badge px-3 py-1 bg-cyan-100 text-cyan-800 text-sm rounded-full">Tailwind</span>
                        </div>
                        <button class="w-full bg-primary hover:bg-secondary text-white py-2 rounded-lg transition-colors duration-300">
                            Ver Detalles
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="habilidades" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Mis Habilidades</h2>
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
                        <h3 class="text-xl font-roboto text-white mb-4">Herramientas</h3>
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

    <!-- Contact Section -->
    <section id="contacto" class="py-20 gradient-bg relative">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-white mb-4">¿Listo para trabajar juntos?</h2>
                <div class="w-24 h-1 bg-accent mx-auto mb-6"></div>
                <p class="text-xl text-gray-200 max-w-3xl mx-auto">
                    Estoy abierto a nuevas oportunidades que me permitan seguir creciendo profesionalmente
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8 text-center">
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-8">
                    <i class="fas fa-envelope text-4xl text-accent mb-4"></i>
                    <h3 class="text-xl font-roboto text-white mb-2">Email</h3>
                    <p class="text-gray-200">wuish_92@hotmail.com</p>
                </div>
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-8">
                    <i class="fab fa-linkedin text-4xl text-accent mb-4"></i>
                    <h3 class="text-xl font-roboto text-white mb-2">LinkedIn</h3>
                    <p class="text-gray-200">linkedin.com/in/carlosdaniel</p>
                </div>
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-8">
                    <i class="fab fa-github text-4xl text-accent mb-4"></i>
                    <h3 class="text-xl font-roboto text-white mb-2">GitHub</h3>
                    <p class="text-gray-200">github.com/EMshady92</p>
                </div>
            </div>
            <div class="text-center mt-12">
                <a href="mailto:wuish_92@hotmail.com" class="bg-accent hover:bg-accent/90 text-white px-8 py-4 rounded-full font-roboto transition-all duration-300 hover:scale-105 inline-block">
                    Enviar Mensaje
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-gray-400">
                © 2025 Carlos Daniel Pacheco Torres. Todos los derechos reservados.
            </p>
        </div>
    </footer>

     <!-- Project Modals -->
    <!-- HVAC Modal -->
    <div id="hvac-modal" class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-2xl max-w-4xl mx-4 max-h-[90vh] overflow-y-auto">
            <div class="p-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-3xl font-bold text-gray-900">Desprosoft HVACopcost</h2>
                    <button onclick="closeProjectModal()" class="text-gray-400 hover:text-gray-600 text-2xl">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <div class="bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl p-8 text-center mb-6">
                            <i class="fas fa-wind text-6xl text-white mb-4"></i>
                            <h3 class="text-xl font-roboto text-white">HVAC Analysis Platform</h3>
                        </div>

                        <div class="space-y-4">
                            <div class="bg-blue-50 p-4 rounded-lg">
                                <h4 class="font-roboto text-blue-900 mb-2">
                                    <i class="fas fa-users text-blue-600 mr-2"></i>
                                    Cliente
                                </h4>
                                <p class="text-blue-800">Desprosoft - Empresa especializada en software HVAC</p>
                            </div>

                            <div class="bg-green-50 p-4 rounded-lg">
                                <h4 class="font-roboto text-green-900 mb-2">
                                    <i class="fas fa-calendar text-green-600 mr-2"></i>
                                    Duración
                                </h4>
                                <p class="text-green-800">8 meses de desarrollo (2022-2023)</p>
                            </div>

                            <div class="bg-purple-50 p-4 rounded-lg">
                                <h4 class="font-roboto text-purple-900 mb-2">
                                    <i class="fas fa-code text-purple-600 mr-2"></i>
                                    Mi Rol
                                </h4>
                                <p class="text-purple-800">Full-Stack Developer & Arquitecto de Sistema</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-2xl font-roboto text-gray-900 mb-4">Descripción del Proyecto</h3>
                        <p class="text-gray-600 mb-6">
                            Software online completo para análisis energético, financiero y de confort de proyectos HVAC.
                            La plataforma permite a ingenieros y consultores convertir datos técnicos simples en análisis
                            valiosos para guiar a sus clientes en la toma de decisiones financieras y técnicas óptimas.
                        </p>

                        <h4 class="text-xl font-roboto text-gray-900 mb-3">Características Principales</h4>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                Cálculos automáticos de eficiencia energética
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                Análisis financiero ROI y payback
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                Reportes automáticos personalizables
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                Dashboard interactivo con gráficas
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                Comparación de escenarios NEW vs RETROFIT
                            </li>
                        </ul>

                        <h4 class="text-xl font-roboto text-gray-900 mb-3">Impacto y Resultados</h4>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-accent/10 rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold text-accent">300+</div>
                                <div class="text-sm text-gray-600">Proyectos Analizados</div>
                            </div>
                            <div class="bg-accent/10 rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold text-accent">50%</div>
                                <div class="text-sm text-gray-600">Reducción en Tiempo</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <h4 class="text-xl font-roboto text-gray-900 mb-4">Tecnologías Utilizadas</h4>
                    <div class="flex flex-wrap gap-3">
                        <span class="px-4 py-2 bg-red-100 text-red-800 rounded-full font-medium">Laravel 9</span>
                        <span class="px-4 py-2 bg-blue-100 text-blue-800 rounded-full font-medium">MySQL</span>
                        <span class="px-4 py-2 bg-yellow-100 text-yellow-800 rounded-full font-medium">JavaScript</span>
                        <span class="px-4 py-2 bg-green-100 text-green-800 rounded-full font-medium">Chart.js</span>
                        <span class="px-4 py-2 bg-purple-100 text-purple-800 rounded-full font-medium">Ajax</span>
                        <span class="px-4 py-2 bg-gray-100 text-gray-800 rounded-full font-medium">Git</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

