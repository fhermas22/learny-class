<footer class="bg-gradient-to-b from-gray-900 to-black text-white mt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
            <!-- Brand Section -->
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 bg-gradient-to-br from-blue-400 to-blue-600 rounded-lg flex items-center justify-center">
                        <img src="{{ asset('logo.svg') }}" alt="LearnyClass" class="w-8 h-8">
                    </div>
                    <h3 class="text-xl font-bold">LearnyClass</h3>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Plateforme d'apprentissage en ligne moderne offrant des cours de qualité supérieure pour développer vos compétences.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="font-bold text-lg mb-6">Liens Rapides</h4>
                <ul class="space-y-3">
                    <li><a href="/" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">Accueil</a></li>
                    <li><a href="/courses" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">Cours</a></li>
                    <li><a href="/about" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">À propos</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">Contact</a></li>
                </ul>
            </div>

            <!-- Resources -->
            <div>
                <h4 class="font-bold text-lg mb-6">Ressources</h4>
                <ul class="space-y-3">
                    <li><a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">Blog</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">Tutoriels</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">FAQ</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">Support</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="font-bold text-lg mb-6">Nous Contacter</h4>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-blue-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                        <a href="mailto:contact@learnyclass.com" class="text-gray-400 hover:text-blue-400 transition-colors duration-300 text-sm">
                            contact@learnyclass.com
                        </a>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-blue-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773c.55 1.402 2.846 4.8 5.119 6.083l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                        </svg>
                        <a href="tel:+229012345678" class="text-gray-400 hover:text-blue-400 transition-colors duration-300 text-sm">
                            +229 01 12 34 56 78
                        </a>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-blue-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-400 text-sm">Cotonou, Bénin</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Divider -->
        <div class="h-1 bg-gradient-to-r from-transparent via-primary to-transparent mb-8"></div>

        <!-- Lower section -->
        <div class="flex flex-col md:flex-row items-center justify-between">
            <div class="text-gray-400 text-sm mb-6 md:mb-0">
                <p>&copy; {{ date('Y') }} LearnyClass. Tous droits réservés.</p>
                <div class="flex gap-6 mt-2">
                    <a href="#" class="hover:text-blue-400 transition-colors duration-300">Politique de confidentialité</a>
                    <a href="#" class="hover:text-blue-400 transition-colors duration-300">Conditions d'utilisation</a>
                </div>
            </div>

            <!-- Social networks -->
            <div class="flex gap-6">
                <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-blue-600 transition-colors duration-300">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path></svg>
                </a>
                <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-blue-600 transition-colors duration-300">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.475-2.236-1.986-2.236-1.081 0-1.722.722-2.004 1.418-.103.249-.129.597-.129.946v5.441h-3.554s.05-8.836 0-9.754h3.554v1.391c.43-.664 1.199-1.608 2.925-1.608 2.135 0 3.735 1.39 3.735 4.38v5.591zM5.337 8.855c-1.144 0-1.915-.762-1.915-1.715 0-.955.77-1.715 1.958-1.715 1.187 0 1.927.76 1.927 1.715 0 .953-.74 1.715-1.97 1.715zm1.946 11.597H3.392V9.298h3.891v11.154zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.225 0z"></path></svg>
                </a>
            </div>
        </div>
    </div>
</footer>
