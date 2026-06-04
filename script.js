document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('contactForm');
    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const messageInput = document.getElementById('message');

    form.addEventListener('submit', (event) => {
        // Prevent default form submission reload
        event.preventDefault(); 

        // Clear any old error highlighting
        resetStyles();

        // 1. Validate Name
        if (nameInput.value.trim() === "") {
            alert("Please enter your name.");
            highlightError(nameInput);
            return;
        }

        // 2. Validate Email using Regex pattern
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(emailInput.value.trim())) {
            alert("Please enter a valid email address.");
            highlightError(emailInput);
            return;
        }

        // 3. Validate Message length (must be at least 10 characters)
        if (messageInput.value.trim().length < 10) {
            alert("Your message must be at least 10 characters long.");
            highlightError(messageInput);
            return;
        }

        // If everything passes local verification
        alert("Success! Form validation passed locally. Ready for backend handling.");
        form.reset(); // Clear form fields
    });

    function highlightError(inputElement) {
        inputElement.style.borderColor = "#ef4444"; // Red outline border
        inputElement.focus();
    }

    function resetStyles() {
        nameInput.style.borderColor = "#ddd";
        emailInput.style.borderColor = "#ddd";
        messageInput.style.borderColor = "#ddd";
    }
});