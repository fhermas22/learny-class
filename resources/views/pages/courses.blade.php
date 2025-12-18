@extends('layouts.app')

@section('title', 'Cours | LearnyClass')

@section('content')
<!-- Header -->
<section class="bg-gradient-to-r from-primary to-secondary text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold mb-4">Catalogue des Cours</h1>
        <p class="text-xl opacity-90">Explorez notre collection complète de cours en ligne</p>
    </div>
</section>

<!-- Main Content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
        <!-- Filters sidebar -->
        <div class="lg:col-span-1">
            <div class="bg-white rounded-lg shadow-md p-6 sticky top-24">
                <h3 class="font-bold text-lg mb-6">Filtres</h3>

                <!-- Research -->
                <div class="mb-6">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Rechercher</label>
                    <input type="text" id="search-input" placeholder="Chercher un cours..."
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                </div>

                <!-- Categories -->
                <div class="mb-6">
                    <label class="block text-sm font-semibold text-gray-700 mb-3">Catégorie</label>
                    <div class="space-y-2">
                        @foreach(['Tous', 'Développement', 'Design', 'Backend', 'CSS'] as $category)
                            <button onclick="filterByCategory('{{ $category }}')"
                                    class="w-full text-left px-4 py-2 rounded-lg transition-all duration-300 category-filter {{ $category === 'Tous' ? 'bg-primary text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}"
                                    data-category="{{ $category }}">
                                {{ $category }}
                            </button>
                        @endforeach
                    </div>
                </div>

                <!-- Sorting -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-3">Trier par</label>
                    <select id="sort-select" onchange="sortCourses(this.value)"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                        <option value="popular">Plus populaires</option>
                        <option value="rating">Meilleure note</option>
                        <option value="price-low">Prix croissant</option>
                        <option value="price-high">Prix décroissant</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Course schedule -->
        <div class="lg:col-span-3">
            <div id="courses-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($courses as $course)
                    @include('components.course-card', ['course' => $course])
                @endforeach
            </div>
        </div>
    </div>
</div>

<script>
    let selectedCategory = 'Tous';

    function filterByCategory(category) {
        selectedCategory = category;
        document.querySelectorAll('.category-filter').forEach(btn => {
            if (btn.dataset.category === category) {
                btn.classList.add('bg-primary', 'text-white');
                btn.classList.remove('bg-gray-100', 'text-gray-700', 'hover:bg-gray-200');
            } else {
                btn.classList.remove('bg-primary', 'text-white');
                btn.classList.add('bg-gray-100', 'text-gray-700', 'hover:bg-gray-200');
            }
        });
    }

    function sortCourses(sortType) {
        console.log('Tri par:', sortType);
    }
</script>
@endsection
