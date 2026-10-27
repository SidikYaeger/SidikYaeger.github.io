/**
 * Personal Page JavaScript — Zhafir Muhammad Tectona Grandito
 * Interactions:
 * 1. Mobile navigation toggle & backdrop
 * 2. Header scrolled blur state
 * 3. Scrollspy active link indicator
 * 4. Portfolio category filter
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Header scroll effect
    const header = document.querySelector('.nav-header');
    const updateHeader = () => {
        header?.classList.toggle('scrolled', window.scrollY > 40);
    };
    window.addEventListener('scroll', updateHeader, { passive: true });
    updateHeader();

    // 2. Mobile Navigation Toggle & Auto-close on link click
    const navToggle = document.querySelector('.nav-toggle');
    const navMenu = document.querySelector('.nav-menu');
    const navOverlay = document.querySelector('.nav-overlay');

    const toggleMenu = (forceClose = false) => {
        const isOpen = forceClose ? false : !navMenu.classList.contains('open');
        navMenu.classList.toggle('open', isOpen);
        if (navToggle) navToggle.classList.toggle('open', isOpen);
        if (navOverlay) navOverlay.classList.toggle('open', isOpen);
        document.body.style.overflow = isOpen ? 'hidden' : '';
    };

    if (navToggle) {
        navToggle.addEventListener('click', () => toggleMenu());
    }
    if (navOverlay) {
        navOverlay.addEventListener('click', () => toggleMenu(true));
    }
    navMenu?.addEventListener('click', (e) => {
        if (e.target.matches('a')) toggleMenu(true);
    });

    // 3. Scrollspy (Active nav link on scroll)
    const sections = document.querySelectorAll('section[id], header[id]');
    const menuLinks = document.querySelectorAll('.nav-menu .nav-link');

    const sectionObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const id = entry.target.getAttribute('id');
                menuLinks.forEach(link => {
                    link.classList.toggle('active', link.getAttribute('href') === `#${id}`);
                });
            }
        });
    }, { rootMargin: '-20% 0px -70% 0px' });

    sections.forEach(section => sectionObserver.observe(section));

    // 4. Portfolio Filter
    const filterBtns = document.querySelectorAll('.filter-btn');
    const portfolioCards = document.querySelectorAll('.portfolio-item');

    if (filterBtns.length > 0 && portfolioCards.length > 0) {
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const filter = btn.getAttribute('data-filter');

                portfolioCards.forEach(card => {
                    const category = card.getAttribute('data-category');
                    const match = filter === 'all' || category === filter;
                    card.style.display = match ? '' : 'none';
                });
            });
        });
    }
});
