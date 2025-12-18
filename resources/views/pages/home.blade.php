@extends('layouts.app')

@section('title', 'Accueil | LearnyClass')

@section('content')
<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-br from-blue-50 via-white to-purple-50 py-20 md:py-32">
    <!-- Decorative elements -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-float"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20" style="animation-delay: 2s;"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Text content -->
            <div class="animate-slide-in-left">
                <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                    Apprenez les <span class="text-gradient">meilleures compétences</span> en ligne
                </h1>
                <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                    Accédez à des cours de qualité supérieure créés par des experts. Développez vos compétences à votre rythme et obtenez des certificats reconnus.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="/courses" class="btn-primary text-center">
                        Découvrir les cours →
                    </a>
                    <button class="px-6 py-3 border-2 border-primary text-primary rounded-lg font-semibold hover:bg-blue-50 transition-all duration-300">
                        En savoir plus
                    </button>
                </div>
            </div>

            <!-- Illustration image -->
            <div class="animate-slide-in-right hidden md:block">
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-400 to-purple-400 rounded-2xl blur-2xl opacity-30"></div>
                    <img src="images/online-courses.jpg" alt="Apprentissage en ligne" class="relative rounded-2xl shadow-2xl w-full h-auto">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Statistics -->
<section class="py-16 bg-white border-y border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="text-center">
                <p class="text-3xl font-bold text-gray-900 mb-2">150+</p>
                <p class="text-gray-600 font-medium">Cours</p>
            </div>
            <div class="text-center">
                <p class="text-3xl font-bold text-gray-900 mb-2">50K+</p>
                <p class="text-gray-600 font-medium">Étudiants</p>
            </div>
            <div class="text-center">
                <p class="text-3xl font-bold text-gray-900 mb-2">4.8/5</p>
                <p class="text-gray-600 font-medium">Avis</p>
            </div>
            <div class="text-center">
                <p class="text-3xl font-bold text-gray-900 mb-2">25K+</p>
                <p class="text-gray-600 font-medium">Certificats</p>
            </div>
        </div>
    </div>
</section>

<!-- Popular Courses -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Cours Populaires</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Découvrez nos cours les plus appréciés par la communauté LearnyClass
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach([
                ['id' => '1', 'title' => 'React Avancé', 'instructor' => 'Jean Dupont', 'price' => 49000, 'rating' => 4.8, 'students' => 1250, 'image' => 'images/react-js.jpg', 'category' => 'Développement'],
                ['id' => '2', 'title' => 'Design UI/UX Moderne', 'instructor' => 'Marie Martin', 'price' => 39000, 'rating' => 4.9, 'students' => 980, 'image' => 'images/ui-ux-design.jpg', 'category' => 'Design'],
                ['id' => '3', 'title' => 'Node.js & Express', 'instructor' => 'Pierre Bernard', 'price' => 44000, 'rating' => 4.7, 'students' => 1520, 'image' => 'images/node-js.jpg', 'category' => 'Backend'],
                ['id' => '4', 'title' => 'Tailwind CSS Complet', 'instructor' => 'Sophie Laurent', 'price' => 34000, 'rating' => 4.6, 'students' => 2100, 'image' => 'images/tailwind-css.jpg', 'category' => 'CSS'],
            ] as $course)
                @include('components.course-card', ['course' => $course])
            @endforeach
        </div>

        <div class="text-center mt-12">
            <a href="/courses" class="btn-primary inline-flex items-center gap-2">
                Voir tous les cours →
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-primary to-secondary text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-bold mb-6">Prêt à commencer votre apprentissage?</h2>
        <p class="text-xl mb-8 opacity-90 max-w-2xl mx-auto">
            Rejoignez des milliers d'apprenants qui transforment leur carrière avec LearnyClass
        </p>
        <a href="/courses" class="inline-block px-8 py-4 bg-white text-primary rounded-lg font-bold hover:shadow-lg hover:scale-105 transition-all duration-300">
            Commencer Maintenant
        </a>
    </div>
</section>
@endsection
