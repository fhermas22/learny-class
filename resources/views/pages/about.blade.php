@extends('layouts.app')

@section('title', 'À propos | LearnyClass')

@section('content')

@section('content')
<!-- En-tête -->
<section class="bg-gradient-to-r from-primary to-secondary text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl font-bold mb-6">À propos de LearnyClass</h1>
        <p class="text-xl opacity-90 max-w-2xl mx-auto">
            Transformez votre carrière et développez vos compétences avec notre plateforme d'apprentissage en ligne
        </p>
    </div>
</section>

<!-- Notre Histoire -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Notre Histoire</h2>
                <p class="text-gray-700 text-lg leading-relaxed mb-4">
                    LearnyClass a été fondée en 2024 par un groupe de passionnés de l'éducation et de la technologie. Nous avons observé un besoin croissant de formations de qualité accessibles en ligne, et nous avons décidé de créer une plateforme qui répond à ce besoin.
                </p>
                <p class="text-gray-700 text-lg leading-relaxed mb-4">
                    Depuis nos débuts modestes, nous avons grandi pour devenir l'une des plateformes d'apprentissage les plus populaires au Bénin, avec des milliers d'apprenants satisfaits et des centaines de cours de qualité.
                </p>
                <p class="text-gray-700 text-lg leading-relaxed">
                    Notre mission reste simple : rendre l'éducation de qualité accessible à tous, peu importe où vous êtes ou votre situation financière.
                </p>
            </div>

            <div class="hidden md:block">
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-400 to-purple-400 rounded-2xl blur-2xl opacity-30"></div>
                    <img src="{{ asset('images/our-team.jpg') }}" alt="Notre équipe" class="relative rounded-2xl shadow-2xl w-full h-auto">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nos Valeurs -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Nos Valeurs</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Les principes qui guident nos décisions et nos actions au quotidien
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach([
                ['title' => 'Accessibilité', 'description' => 'Nous croyons que l\'éducation de qualité doit être accessible à tous.'],
                ['title' => 'Innovation', 'description' => 'Nous utilisons les dernières technologies pour créer une expérience moderne.'],
                ['title' => 'Communauté', 'description' => 'Nous construisons une communauté d\'apprenants bienveillante.'],
                ['title' => 'Excellence', 'description' => 'Nous nous engageons à fournir des cours de la plus haute qualité.'],
            ] as $value)
                <div class="bg-white rounded-xl p-8 text-center card-hover">
                    <h3 class="font-bold text-xl text-gray-900 mb-4">{{ $value['title'] }}</h3>
                    <p class="text-gray-700 leading-relaxed">{{ $value['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA Final -->
<section class="py-20 bg-gradient-to-r from-primary to-secondary text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-bold mb-6">Prêt à Commencer?</h2>
        <p class="text-xl opacity-90 mb-8 max-w-2xl mx-auto">
            Rejoignez des milliers d'apprenants qui transforment leur carrière avec LearnyClass
        </p>
        <a href="/courses" class="inline-flex items-center gap-2 px-8 py-4 bg-white text-primary rounded-lg font-bold hover:shadow-lg hover:scale-105 transition-all duration-300">
            Découvrir les Cours →
        </a>
    </div>
</section>
@endsection
