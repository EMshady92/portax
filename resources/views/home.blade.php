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
@include('sections.modal_coupon')

@include('sections.modal_hvacopcost')

@include('sections.modal_sitzac')

@include('sections.modal_petc')

@include('sections.modal_hmop')

@include('sections.modal_inventory')

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

