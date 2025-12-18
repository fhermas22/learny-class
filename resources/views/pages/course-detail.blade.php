@extends('layouts.app')

@section('title', $course['title'] . ' | LearnyClass')

@section('content')
<!-- Course header -->
<section class="bg-gradient-to-r from-primary to-secondary text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start">
            <!-- Text content -->
            <div class="md:col-span-2">
                <div class="inline-block bg-white bg-opacity-20 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                    {{ $course['category'] }}
                </div>
                <h1 class="text-4xl font-bold mb-4">{{ $course['title'] }}</h1>
                <p class="text-xl opacity-90 mb-6">{{ $course['description'] }}</p>

                <div class="flex flex-wrap gap-6 text-sm">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <span>{{ $course['rating'] }} ({{ $course['students'] }} avis)</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v3.586L7.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 10.586V7z" clip-rule="evenodd"></path>
                        </svg>
                        <span>{{ $course['duration'] }}</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                        </svg>
                        <span>{{ $course['students'] }} étudiants</span>
                    </div>
                </div>
            </div>

            <!-- Shopping card -->
            <div class="bg-white text-gray-900 rounded-xl p-8 shadow-xl sticky top-24">
                <img src="{{ asset($course['image']) }}" alt="{{ $course['title'] }}" class="w-full h-48 object-cover rounded-lg mb-6">

                <div class="mb-6">
                    <p class="text-gray-600 text-sm mb-2">Prix</p>
                    <p class="text-4xl font-bold text-primary">XOF {{ $course['price'] }}</p>
                </div>

                <button onclick="addToCart('{{ $course['id'] }}', '{{ $course['title'] }}', {{ $course['price'] }}, '{{ $course['image'] }}', '{{ $course['instructor'] }}')"
                        class="w-full bg-gradient-to-r from-primary to-secondary text-white py-4 rounded-lg font-bold text-lg hover:shadow-lg hover:scale-105 transition-all duration-300 mb-4">
                    Ajouter au panier
                </button>

                <button class="w-full border-2 border-primary text-primary py-3 rounded-lg font-semibold hover:bg-blue-50 transition-colors duration-300 mb-6">
                    Ajouter à la liste de souhaits
                </button>

                <div class="space-y-3 text-sm">
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Accès à vie</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Certificat inclus</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Support 24/7</span>
                    </div>
                </div>

                <div class="mt-6 pt-6 border-t border-gray-200">
                    <p class="text-xs text-gray-600 text-center">
                        ✓ Paiement sécurisé avec SSL
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
        <!-- Main column -->
        <div class="lg:col-span-2">
            <!-- Full description -->
            <section class="mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">À propos de ce cours</h2>
                <p class="text-gray-700 text-lg leading-relaxed mb-6">
                    {{ $course['fullDescription'] }}
                </p>
            </section>

            <!-- What you'll learn -->
            <section class="mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Ce que vous apprendrez</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @foreach($course['learnings'] as $learning)
                        <div class="flex items-start gap-4 p-4 bg-blue-50 rounded-lg">
                            <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-900 font-medium">{{ $learning }}</span>
                        </div>
                    @endforeach
                </div>
            </section>

            <!-- Syllabus -->
            <section class="mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Contenu du cours</h2>
                <div class="space-y-4">
                    @foreach($course['syllabus'] as $module)
                        <div class="border border-gray-200 rounded-lg overflow-hidden hover:shadow-md transition-shadow duration-300">
                            <button class="w-full px-6 py-4 bg-gray-50 hover:bg-gray-100 transition-colors duration-300 flex items-center justify-between" onclick="toggleModule(this)">
                                <div class="text-left">
                                    <h3 class="font-bold text-gray-900">
                                        Module {{ $module['module'] }}: {{ $module['title'] }}
                                    </h3>
                                    <p class="text-sm text-gray-600">{{ $module['lessons'] }} leçons • {{ $module['duration'] }}</p>
                                </div>
                                <svg class="w-5 h-5 text-gray-600 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                </svg>
                            </button>
                            <div class="module-content hidden px-6 py-4 bg-white border-t border-gray-200">
                                <p class="text-gray-700 mb-4">Contenu du module {{ $module['module'] }} - {{ $module['title'] }}</p>
                                <ul class="space-y-2">
                                    @for($i = 1; $i <= $module['lessons']; $i++)
                                        <li class="flex items-center gap-3 text-gray-700">
                                            <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 10 10.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                            Leçon {{ $i }}: Titre de la leçon
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

            <!-- Requirements -->
            <section class="mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Prérequis</h2>
                <ul class="space-y-3">
                    @foreach($course['requirements'] as $requirement)
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-primary flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 10 10.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">{{ $requirement }}</span>
                        </li>
                    @endforeach
                </ul>
            </section>
        </div>

        <!-- Sidebar -->
        <div class="lg:col-span-1">
            <!-- Instructor information -->
            <div class="bg-gray-50 rounded-xl p-8 mb-8 sticky top-24">
                <h3 class="font-bold text-lg text-gray-900 mb-6">Instructeur</h3>
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center text-white font-bold text-xl">
                        {{ substr($course['instructor'], 0, 1) }}
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900">{{ $course['instructor'] }}</h4>
                        <p class="text-sm text-gray-600">Expert en {{ $course['category'] }}</p>
                    </div>
                </div>
                <p class="text-gray-700 text-sm leading-relaxed mb-6">
                    Instructeur expérimenté avec plus de 10 ans d'expérience dans le domaine du {{ strtolower($course['category']) }}.
                </p>
                <button class="w-full px-4 py-2 border-2 border-primary text-primary rounded-lg font-semibold hover:bg-blue-50 transition-colors duration-300">
                    Voir le profil
                </button>
            </div>

            <!-- Course statistics -->
            <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-xl p-8">
                <h3 class="font-bold text-lg text-gray-900 mb-6">Statistiques</h3>
                <div class="space-y-4">
                    <div>
                        <p class="text-sm text-gray-600 mb-2">Niveau</p>
                        <p class="font-bold text-gray-900">{{ $course['level'] }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600 mb-2">Durée</p>
                        <p class="font-bold text-gray-900">{{ $course['duration'] }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600 mb-2">Étudiants</p>
                        <p class="font-bold text-gray-900">{{ number_format($course['students'], 0, ',', ' ') }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600 mb-2">Note</p>
                        <div class="flex items-center gap-2">
                            <div class="flex gap-1">
                                @for($i = 0; $i < 5; $i++)
                                    @if($i < floor($course['rating']))
                                        <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                    @else
                                        <svg class="w-4 h-4 fill-gray-300 text-gray-300" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                    @endif
                                @endfor
                            </div>
                            <span class="font-bold text-gray-900">{{ $course['rating'] }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-primary to-secondary text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-bold mb-6">Prêt à commencer?</h2>
        <p class="text-xl opacity-90 mb-8 max-w-2xl mx-auto">
            Rejoignez des milliers d'apprenants qui transforment leur carrière avec ce cours
        </p>
        <button onclick="addToCart('{{ $course['id'] }}', '{{ $course['title'] }}', {{ $course['price'] }}, '{{ $course['image'] }}', '{{ $course['instructor'] }}')"
                class="inline-block px-8 py-4 bg-white text-primary rounded-lg font-bold hover:shadow-lg hover:scale-105 transition-all duration-300">
            S'inscrire maintenant
        </button>
    </div>
</section>

<script>
    function toggleModule(button) {
        const content = button.nextElementSibling;
        const icon = button.querySelector('svg');

        content.classList.toggle('hidden');
        icon.style.transform = content.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(180deg)';
    }
</script>
@endsection
