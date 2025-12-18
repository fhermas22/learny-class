@extends('layouts.app')

@section('title', 'Panier | LearnyClass')

@section('content')
<!-- Header -->
<section class="bg-gradient-to-r from-primary to-secondary text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold">Votre Panier</h1>
        <p class="text-xl opacity-90 mt-2">Gérez vos cours sélectionnés</p>
    </div>
</section>

<!-- Main Content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div id="cart-content"></div>
</div>

<script>
    function displayCart() {
        const cart = JSON.parse(localStorage.getItem('learnyclass_cart') || '[]');
        const container = document.getElementById('cart-content');

        if (cart.length === 0) {
            container.innerHTML = `
                <div class="text-center py-20">
                    <div class="flex justify-center mb-6">
                        <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center">
                            <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Votre panier est vide</h2>
                    <p class="text-gray-600 text-lg mb-8 max-w-md mx-auto">
                        Vous n'avez pas encore ajouté de cours à votre panier. Explorez nos cours et commencez votre apprentissage!
                    </p>
                    <a href="/courses" class="btn-primary inline-block">
                        Découvrir les cours
                    </a>
                </div>
            `;
            return;
        }

        let total = 0;
        let cartHTML = `
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-200 bg-gray-50">
                            <h2 class="font-bold text-lg text-gray-900">
                                ${cart.length} cours dans votre panier
                            </h2>
                        </div>
                        <div class="divide-y divide-gray-200">
        `;

        cart.forEach((item, index) => {
            total += item.price;
            cartHTML += `
                <div class="p-6 flex gap-6 hover:bg-gray-50 transition-colors duration-300">
                    <div class="flex-shrink-0 w-24 h-24">
                        <img src="${item.image}" alt="${item.title}" class="w-full h-full object-cover rounded-lg">
                    </div>
                    <div class="flex-grow">
                        <h3 class="font-bold text-lg text-gray-900 mb-2">${item.title}</h3>
                        <p class="text-gray-600 text-sm mb-3">${item.instructor}</p>
                        <p class="text-2xl font-bold text-primary">$${item.price}</p>
                    </div>
                    <div class="flex-shrink-0">
                        <button onclick="removeFromCart('${item.id}')" class="p-3 text-red-500 hover:bg-red-50 rounded-lg transition-colors duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            `;
        });

        cartHTML += `
                        </div>
                    </div>
                    <div class="mt-6 flex gap-4">
                        <a href="/courses" class="flex items-center gap-2 text-primary hover:text-blue-700 font-semibold">
                            ← Continuer vos achats
                        </a>
                        <button onclick="clearCart()" class="text-red-600 hover:text-red-700 font-semibold ml-auto">
                            Vider le panier
                        </button>
                    </div>
                </div>

                <div class="lg:col-span-1">
                    <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-xl p-8 border border-gray-200 sticky top-24">
                        <h2 class="font-bold text-xl text-gray-900 mb-6">Résumé de la commande</h2>
                        <div class="space-y-4 mb-6 pb-6 border-b border-gray-300">
                            <div class="flex justify-between">
                                <span class="text-gray-700">Nombre de cours</span>
                                <span class="font-semibold text-gray-900">${cart.length}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-700">Sous-total</span>
                                <span class="font-semibold text-gray-900">$${total.toFixed(2)}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-700">Frais de traitement</span>
                                <span class="font-semibold text-gray-900">Gratuit</span>
                            </div>
                        </div>

                        <div class="mb-6">
                            <div class="flex justify-between items-center">
                                <span class="text-lg font-bold text-gray-900">Total</span>
                                <span class="text-3xl font-bold text-primary">$${total.toFixed(2)}</span>
                            </div>
                        </div>

                        <button class="w-full bg-gradient-to-r from-primary to-secondary text-white py-4 rounded-lg font-bold text-lg hover:shadow-lg hover:scale-105 transition-all duration-300 mb-4">
                            Procéder au paiement
                        </button>

                        <button class="w-full border-2 border-primary text-primary py-3 rounded-lg font-semibold hover:bg-blue-50 transition-colors duration-300 mb-4">
                            PayPal
                        </button>

                        <p class="text-xs text-gray-600 text-center">
                            ✓ Paiement sécurisé avec SSL
                        </p>
                    </div>
                </div>
            </div>
        `;

        container.innerHTML = cartHTML;
    }

    function removeFromCart(courseId) {
        let cart = JSON.parse(localStorage.getItem('learnyclass_cart') || '[]');
        cart = cart.filter(item => item.id !== courseId);
        localStorage.setItem('learnyclass_cart', JSON.stringify(cart));
        displayCart();
        window.dispatchEvent(new Event('cartUpdated'));
    }

    function clearCart() {
        if (confirm('Êtes-vous sûr de vouloir vider le panier?')) {
            localStorage.removeItem('learnyclass_cart');
            displayCart();
            window.dispatchEvent(new Event('cartUpdated'));
        }
    }

    // Show cart on load
    displayCart();
</script>
@endsection
