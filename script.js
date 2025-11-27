document.addEventListener('DOMContentLoaded', () => {
    const navToggle = document.querySelector('.nav-toggle');
    const navLinks = document.querySelector('.nav-links');
    const filterButtons = document.querySelectorAll('.filter');
    const portfolioCards = document.querySelectorAll('.portfolio-grid .card');
    const newsletterForm = document.getElementById('newsletter-form');
    const contactForm = document.getElementById('contact-form');
    const yearEl = document.getElementById('year');
    const pollForm = document.getElementById('poll-form');

    yearEl.textContent = new Date().getFullYear();

    navToggle.addEventListener('click', () => {
        navLinks.classList.toggle('open');
    });

    filterButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const category = button.dataset.filter;
            filterButtons.forEach((btn) => btn.classList.remove('active'));
            button.classList.add('active');

            portfolioCards.forEach((card) => {
                const cardCategory = card.dataset.category;
                const isVisible = category === 'all' || cardCategory === category;
                card.classList.toggle('hidden', !isVisible);
            });
        });
    });

    const handleForm = (form, successMessage) => {
        form.addEventListener('submit', (event) => {
            event.preventDefault();
            form.reset();
            alert(successMessage);
        });
    };

    handleForm(newsletterForm, 'Terima kasih! Undangan komunitas akan kami kirim.');
    handleForm(contactForm, 'Pesan terkirim. Saya akan membalas dalam 1-2 hari kerja.');

    pollForm.addEventListener('submit', (event) => {
        event.preventDefault();
        const choice = pollForm.poll.value;
        pollForm.reset();
        alert(`Terima kasih! Pilihanmu (${choice}) membantu menentukan konten berikutnya.`);
    });
});


