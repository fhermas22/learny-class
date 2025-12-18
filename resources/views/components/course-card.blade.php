<a href="/course/{{ $course['id'] }}" class="block bg-white rounded-xl shadow-md overflow-hidden card-hover animate-scale-in hover:shadow-lg transition-shadow duration-300">
    <!-- Image -->
    <div class="relative overflow-hidden h-48">
        <img src="{{ asset($course['image']) }}" alt="{{ $course['title'] }}" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
        <div class="absolute top-3 right-3 bg-primary text-white px-3 py-1 rounded-full text-sm font-semibold">
            {{ $course['category'] }}
        </div>
    </div>

    <!-- Content -->
    <div class="p-5">
        <h3 class="font-bold text-lg text-gray-900 mb-2 line-clamp-2">
            {{ $course['title'] }}
        </h3>
        <p class="text-sm text-gray-600 mb-4">{{ $course['instructor'] }}</p>

        <!-- Evaluation -->
        <div class="flex items-center justify-between mb-4 text-sm">
            <div class="flex items-center gap-1">
                <svg class="w-4 h-4 fill-yellow-400 text-yellow-400" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
                <span class="font-semibold text-gray-900">{{ $course['rating'] }}</span>
                <span class="text-gray-600">({{ $course['students'] }})</span>
            </div>
        </div>

        <!-- Price and button -->
        <div class="flex items-center justify-between pt-4 border-t border-gray-100">
            <span class="text-2xl font-bold text-primary">XOF {{ $course['price'] }}</span>
            <button onclick="event.preventDefault(); addToCart('{{ $course['id'] }}', '{{ $course['title'] }}', {{ $course['price'] }}, '{{ $course['image'] }}', '{{ $course['instructor'] }}')"
                    class="px-4 py-2 bg-primary text-white rounded-lg font-semibold hover:bg-blue-700 hover:shadow-lg transition-all duration-300">
                Ajouter
            </button>
        </div>
    </div>
</a>
