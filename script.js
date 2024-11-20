document.addEventListener('DOMContentLoaded', function() {
    const testimonials = document.querySelectorAll('.testimonial-card');
    let currentIndex = 0;

    // Function to show the current testimonial
    function showTestimonial(index) {
        testimonials.forEach((testimonial, i) => {
            testimonial.style.display = (i === index) ? 'block' : 'none';
        });
    }

    // Show the first testimonial initially
    showTestimonial(currentIndex);

    // Auto-slide testimonials every 5 seconds
    setInterval(() => {
        currentIndex = (currentIndex + 1) % testimonials.length;
        showTestimonial(currentIndex);
    }, 5000);

    // Optional: Add navigation buttons for manual control
    const nextButton = document.createElement('button');
    nextButton.textContent = 'Next';
    nextButton.classList.add('nav-button');
    document.querySelector('.testimonials').appendChild(nextButton);

    const prevButton = document.createElement('button');
    prevButton.textContent = 'Previous';
    prevButton.classList.add('nav-button');
    document.querySelector('.testimonials').appendChild(prevButton);

    // Event listeners for navigation buttons
    nextButton.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % testimonials.length;
        showTestimonial(currentIndex);
    });

    prevButton.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
        showTestimonial(currentIndex);
    });
});

