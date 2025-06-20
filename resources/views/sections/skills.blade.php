@extends('layouts.app')
@section('content')
    <section id="skills" class="py-20 px-4 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12">Mes compétences</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-xl font-semibold mb-6">Technologies principales</h3>
                    <div class="space-y-6">
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="font-medium">Laravel</span>
                                <span class="text-gray-600">95%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-indigo-600 h-2.5 rounded-full" style="width: 95%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="font-medium">PHP</span>
                                <span class="text-gray-600">90%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-indigo-600 h-2.5 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="font-medium">Vue.js</span>
                                <span class="text-gray-600">65%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-indigo-600 h-2.5 rounded-full" style="width: 65%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="font-medium">MySQL</span>
                                <span class="text-gray-600">88%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-indigo-600 h-2.5 rounded-full" style="width: 88%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-6">Autres technologies</h3>
                    <div class="flex flex-wrap gap-3">
                        <span class="px-4 py-2 bg-white rounded-full shadow-sm text-sm font-medium">Tailwind CSS</span>
                        <span class="px-4 py-2 bg-white rounded-full shadow-sm text-sm font-medium">Git</span>
                        <span class="px-4 py-2 bg-white rounded-full shadow-sm text-sm font-medium">Livewire</span>
                        <span class="px-4 py-2 bg-white rounded-full shadow-sm text-sm font-medium">CI/CD</span>
                    </div>
                    
                    <h3 class="text-xl font-semibold mt-8 mb-4">Attestations</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="bg-indigo-100 p-2 rounded-full mr-4">
                                <i class="fas fa-certificate text-indigo-600"></i>
                            </div>
                            <div>
                                <h4 class="font-medium">Attestation Symphony</h4>
                                <p class="text-gray-600 text-sm">Symphony Developer - 2022</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-indigo-100 p-2 rounded-full mr-4">
                                <i class="fas fa-certificate text-indigo-600"></i>
                            </div>
                            <div>
                                <h4 class="font-medium">Attestation Laravel</h4>
                                <p class="text-gray-600 text-sm">Laravel Developer - 2024</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
