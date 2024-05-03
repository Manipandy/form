// Client-side validation for the contact form
document.getElementById('contactForm').addEventListener('submit', function(event) {
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const message = document.getElementById('message').value.trim();

    if (!name || !email || !message) {
        alert("All fields are required.");
        event.preventDefault(); // Prevent form submission if validation fails
    }
});
