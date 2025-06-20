@extends('layouts.app')
@section('content')
    <section id="projects" class="py-20 px-4 bg-white">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12">Mes projets récents</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="project-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
                    <div class="relative overflow-hidden h-48">
                        <img src="{{ asset('docs/rcc1.PNG') }}" alt="Projet Laravel" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-indigo-600 opacity-0 hover:opacity-90 flex items-center justify-center transition duration-300">
                            <a href="#" class="text-white font-medium px-4 py-2 border border-white rounded hover:bg-white hover:text-indigo-600 transition duration-300">Voir le projet</a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Plateforme de Gestion de Sinistrés</h3>
                        <p class="text-gray-600 mb-4">Une plateforme complète d'enregistrer des sinistres et des Sinistrés afin de leur porter assistance.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-indigo-100 text-indigo-800 text-xs font-medium rounded-full">Laravel</span>
                            <span class="px-3 py-1 bg-indigo-100 text-indigo-800 text-xs font-medium rounded-full">Javascript</span>
                            <span class="px-3 py-1 bg-indigo-100 text-indigo-800 text-xs font-medium rounded-full">Livewire</span>
                        </div>
                    </div>
                </div>
                
                <!-- Project 2 -->
                <div class="project-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
                    <div class="relative overflow-hidden h-48">
                        <img src=" {{ asset('docs/rcc2.PNG') }} " alt="Projet Laravel" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-indigo-600 opacity-0 hover:opacity-90 flex items-center justify-center transition duration-300">
                            <a href="#" class="text-white font-medium px-4 py-2 border border-white rounded hover:bg-white hover:text-indigo-600 transition duration-300">Voir le projet</a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Plateforme de paiement de ticket de bus</h3>
                        <p class="text-gray-600 mb-4">Elle permet de réservé son ticket de voyage à l'avance.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-indigo-100 text-indigo-800 text-xs font-medium rounded-full">Laravel</span>
                            <span class="px-3 py-1 bg-indigo-100 text-indigo-800 text-xs font-medium rounded-full">Livewire</span>
                            <span class="px-3 py-1 bg-indigo-100 text-indigo-800 text-xs font-medium rounded-full">Javascript</span>
                            <span class="px-3 py-1 bg-indigo-100 text-indigo-800 text-xs font-medium rounded-full">Kkiapay</span>
                        </div>
                    </div>
                </div>
                
                <!-- Project 3 -->
                <div class="project-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
                    <div class="relative overflow-hidden h-48">
                        <img src=" {{ asset('docs/rcc3.PNG') }} " alt="Projet Laravel" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-indigo-600 opacity-0 hover:opacity-90 flex items-center justify-center transition duration-300">
                            <a href="#" class="text-white font-medium px-4 py-2 border border-white rounded hover:bg-white hover:text-indigo-600 transition duration-300">Voir le projet</a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Système de Gestion de Commande</h3>
                        <p class="text-gray-600 mb-4"> Une plateforme sur laquelle tu peux commander des repas et te faire livrer. </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-indigo-100 text-indigo-800 text-xs font-medium rounded-full">Laravel</span>
                            <span class="px-3 py-1 bg-indigo-100 text-indigo-800 text-xs font-medium rounded-full">Kkiapay</span>
                            <span class="px-3 py-1 bg-indigo-100 text-indigo-800 text-xs font-medium rounded-full">Tailwind CSS</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="#" class="inline-flex items-center px-6 py-3 border border-indigo-600 text-indigo-600 font-medium rounded-lg hover:bg-indigo-600 hover:text-white transition duration-300">
                    Voir tous mes projets <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>
@endsection
