  @extends('layouts.app')  
  @section('content')
    <section id="home" class="gradient-bg text-white pt-32 pb-20 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">Bonjour, je suis <span class="text-indigo-200">Alex</span></h1>
                    <h2 class="text-2xl md:text-3xl font-semibold mb-6">Développeur Laravel Full Stack</h2>
                    <p class="text-lg mb-8 text-indigo-100">Je crée des applications web performantes et élégantes avec Laravel, Vue.js et Tailwind CSS.</p>
                    <div class="flex space-x-4">
                        <a href="#contact" class="bg-white text-indigo-600 px-6 py-3 rounded-lg font-medium hover:bg-indigo-50 transition duration-300">Me contacter</a>
                        <a href="#projects" class="border border-white text-white px-6 py-3 rounded-lg font-medium hover:bg-white hover:text-indigo-600 transition duration-300">Voir mes projets</a>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <div class="relative">
                        <div class="w-64 h-64 md:w-80 md:h-80 bg-indigo-400 rounded-full opacity-20 absolute -top-6 -left-6"></div>
                        <div class="w-64 h-64 md:w-80 md:h-80 bg-indigo-300 rounded-full opacity-20 absolute -bottom-6 -right-6"></div>
                        <img src="https://images.unsplash.com/photo-1571171637578-41bc2dd41cd2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Développeur Laravel" class="relative z-10 w-64 h-64 md:w-80 md:h-80 object-cover rounded-full border-4 border-white shadow-xl">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection