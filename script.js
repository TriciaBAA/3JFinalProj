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

function nextStep(currentStep) {
    const steps = document.querySelectorAll('.step');
    steps[currentStep - 1].style.display = 'none';
    steps[currentStep].style.display = 'block';

    if (currentStep === 1) {
        const service = document.getElementById('service').value;
        const price = service === 'massage' ? 100 : service === 'facial' ? 80 : 50;
        document.getElementById('serviceSummary').innerText = `Selected Service: ${service} - $${price}`;
    } else if (currentStep === 2) {
        updateAppointmentSummary();
    }
}

function prevStep(currentStep) {
    const steps = document.querySelectorAll('.step');
    steps[currentStep].style.display = 'none';
    steps[currentStep - 1].style.display = 'block';
}

function updateTimeSlots() {
    const timeSelect = document.getElementById('time');
    timeSelect.innerHTML = ''; // Clear existing options
    const date = document.getElementById('date').value;

    // Example: Populate time slots based on selected date
    if (date) {
        const availableTimes = ['10:00 AM', '11:00 AM', '1:00 PM', '2:00 PM']; // Example times
        availableTimes.forEach(time => {
            const option = document.createElement('option');
            option.value = time;
            option.textContent = time;
            timeSelect.appendChild(option);
        });
    }
}

function updateAppointmentSummary() {
    const service = document.getElementById('service').value;
    const date = document.getElementById('date').value;
    const time = document.getElementById('time').value;
    const therapist = document.getElementById}