@extends('layouts.app')
 @section('content')
 <section id="about" class="py-20 px-4 bg-white">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12">À propos de moi</h2>
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/3 mb-10 md:mb-0 flex justify-center">
                    <img src="https://images.unsplash.com/photo-1551033406-611cf9a28f67?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="À propos" class="w-64 h-64 object-cover rounded-lg shadow-lg">
                </div>
                <div class="md:w-2/3 md:pl-12">
                    <h3 class="text-2xl font-semibold mb-4">Développeur passionné avec 2 ans d'expérience</h3>
                    <p class="text-gray-600 mb-6">Je suis spécialisé dans le développement d'applications web avec Laravel. Mon expertise couvre tout le cycle de développement, de la conception à la mise en production.</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div class="flex items-start">
                            <div class="bg-indigo-100 p-3 rounded-full mr-4">
                                <i class="fas fa-code text-indigo-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Développement Backend</h4>
                                <p class="text-gray-600 text-sm">Architecture MVC, bases de données relationnelles</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-indigo-100 p-3 rounded-full mr-4">
                                <i class="fas fa-paint-brush text-indigo-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Développement Frontend</h4>
                                <p class="text-gray-600 text-sm">Vue.js, Tailwind CSS, interfaces utilisateur réactives</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-indigo-100 p-3 rounded-full mr-4">
                                <i class="fas fa-server text-indigo-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">DevOps</h4>
                                <p class="text-gray-600 text-sm">CI/CD, gestion de serveurs</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-indigo-100 p-3 rounded-full mr-4">
                                <i class="fas fa-mobile-alt text-indigo-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Responsive Design</h4>
                                <p class="text-gray-600 text-sm">Applications adaptées à tous les appareils</p>
                            </div>
                        </div>
                    </div>
                    <a href="{{ asset('docs/Cv_Ariel PADONOU.pdf') }}" class="inline-flex items-center text-indigo-600 font-medium" download>
                        Télécharger mon CV <i class="fas fa-download ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    @endsection
