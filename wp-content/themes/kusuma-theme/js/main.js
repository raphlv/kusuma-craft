/**
 * Kusuma Craft - Main JavaScript
 * Handles mobile menu toggle, sticky header, smooth scrolling, and UI enhancements.
 */

document.addEventListener('DOMContentLoaded', function () {
    const toggleBtn = document.getElementById('mobile-menu-toggle');
    const siteNav = document.getElementById('site-navigation');
    const siteHeader = document.getElementById('masthead');

    if (toggleBtn && siteNav) {
        toggleBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            const isOpen = toggleBtn.classList.contains('is-active');
            
            if (isOpen) {
                closeMobileMenu();
            } else {
                openMobileMenu();
            }
        });

        // Close menu when clicking outside
        document.addEventListener('click', function (e) {
            if (siteNav.classList.contains('is-active') && !siteNav.contains(e.target) && !toggleBtn.contains(e.target)) {
                closeMobileMenu();
            }
        });

        // Close menu when clicking any nav link
        const navLinks = siteNav.querySelectorAll('a');
        navLinks.forEach(function (link) {
            link.addEventListener('click', function () {
                closeMobileMenu();
            });
        });
    }

    function openMobileMenu() {
        toggleBtn.classList.add('is-active');
        siteNav.classList.add('is-active');
        toggleBtn.setAttribute('aria-expanded', 'true');
        document.body.classList.add('mobile-menu-open');
    }

    function closeMobileMenu() {
        toggleBtn.classList.remove('is-active');
        siteNav.classList.remove('is-active');
        toggleBtn.setAttribute('aria-expanded', 'false');
        document.body.classList.remove('mobile-menu-open');
    }

    // Header scroll shadow effect
    if (siteHeader) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 30) {
                siteHeader.classList.add('is-scrolled');
            } else {
                siteHeader.classList.remove('is-scrolled');
            }
        });
    }
});
