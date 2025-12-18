/**
 * Interactions JavaScript - LearnyClass
 * Manages various user interactions and animations
 */

// Smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
});

// Animation on scroll using Intersection Observer
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -100px 0px'
};

const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate-fade-in');
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

// Observe all elements using the 'observe' class
document.querySelectorAll('.observe').forEach(el => {
    observer.observe(el);
});

// Add animation classes to elements on scroll
window.addEventListener('scroll', () => {
    document.querySelectorAll('.card-hover').forEach(card => {
        const rect = card.getBoundingClientRect();
        if (rect.top < window.innerHeight * 0.75) {
            card.classList.add('animate-scale-in');
        }
    });
});
