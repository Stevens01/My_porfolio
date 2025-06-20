@extends('layouts.app')
@section('content')
    <section id="contact" class="py-20 px-4 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12">Contactez-moi</h2>
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h3 class="text-xl font-semibold mb-4">Discutons de votre projet</h3>
                    <p class="text-gray-600 mb-8">Je suis disponible pour des missions freelance ou des opportunités en CDI. N'hésitez pas à me contacter pour discuter de votre projet.</p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-indigo-100 p-3 rounded-full mr-4">
                                <i class="fas fa-envelope text-indigo-600"></i>
                            </div>
                            <div>
                                <h4 class="font-medium">Email</h4>
                                <p class="text-gray-600">padonouariel01@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-indigo-100 p-3 rounded-full mr-4">
                                <i class="fas fa-phone-alt text-indigo-600"></i>
                            </div>
                            <div>
                                <h4 class="font-medium">Téléphone</h4>
                                <p class="text-gray-600">+229 0160161950 / 0141903565 </p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-indigo-100 p-3 rounded-full mr-4">
                                <i class="fas fa-map-marker-alt text-indigo-600"></i>
                            </div>
                            <div>
                                <h4 class="font-medium">Localisation</h4>
                                <p class="text-gray-600">Porto-Novo, Benin</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8">
                        <h4 class="font-medium mb-4">Suivez-moi</h4>
                        <div class="flex space-x-4">
                            <a href="https://github.com/Stevens01" class="bg-gray-200 p-3 rounded-full text-gray-700 hover:bg-indigo-600 hover:text-white transition duration-300">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/ariel-padonou-891b53251/" class="bg-gray-200 p-3 rounded-full text-gray-700 hover:bg-indigo-600 hover:text-white transition duration-300">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="https://www.instagram.com/arielpadonou/" class="bg-gray-200 p-3 rounded-full text-gray-700 hover:bg-indigo-600 hover:text-white transition duration-300">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://wa.me/+22960161950" class="bg-gray-200 p-3 rounded-full text-gray-700 hover:bg-indigo-600 hover:text-white transition duration-300">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
