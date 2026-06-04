document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('contactForm');
    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const messageInput = document.getElementById('message');

    // Safety check to debug in console
    if (!form) {
        console.error("DEBUG ERROR: JavaScript could not find an HTML element with id='contactForm'. Check your index.php file!");
        return;
    }

    form.addEventListener('submit', (event) => {
        event.preventDefault(); // Stop page from refreshing
        
        resetStyles();

        // 1. Validate Name
        if (nameInput.value.trim() === "") {
            alert("Please enter your name.");
            highlightError(nameInput);
            return;
        }

        // 2. Validate Email
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(emailInput.value.trim())) {
            alert("Please enter a valid email address.");
            highlightError(emailInput);
            return;
        }

        // 3. Validate Message
        if (messageInput.value.trim().length < 10) {
            alert("Your message must be at least 10 characters long.");
            highlightError(messageInput);
            return;
        }

        // 4. Send data via AJAX to PHP backend
        console.log("Validation passed! Sending data to submit_contact.php...");
        
        fetch('submit_contact.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: new URLSearchParams(new FormData(form))
        })
        .then(response => response.text())
        .then(data => {
            console.log("Server response raw data:", data); // Check what PHP sends back
            if (data.trim() === "success") {
                alert("Thank you! Your submission has been captured safely directly into the MySQL database.");
                form.reset();
            } else {
                alert("Backend message reported: " + data);
            }
        })
        .catch(error => {
            console.error('Fetch transaction error:', error);
        });
    });

    function highlightError(inputElement) {
        inputElement.style.borderColor = "#ef4444";
        inputElement.focus();
    }

    function resetStyles() {
        nameInput.style.borderColor = "#ddd";
        emailInput.style.borderColor = "#ddd";
        messageInput.style.borderColor = "#ddd";
    }
});