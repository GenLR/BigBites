
    // LOGIN form submission via AJAX
    function handleLoginSubmit(event) {
        event.preventDefault();  // Prevent form from submitting normally
        
        // Clear previous messages
        document.getElementById('loginErrorMessage').innerText = '';
        document.getElementById('loginSuccessMessage').innerText = '';

        // Get form data
        const email = document.getElementById('email').value;
        const pass = document.getElementById('pass').value;
    
        // AJAX request to validate registration
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'login.php', true);  // The PHP script for validation
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        
        // Send form data to the server
        xhr.send('email=' + encodeURIComponent(email) + 'pass=' + encodeURIComponent(pass));
        
        // Handle the server response
        xhr.onload = function() {
            if (xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);  // Parse JSON response
                
                if (response.success) {
                    // Show success message and then close modal
                    document.getElementById('loginSuccessMessage').innerText = response.message;
                    document.getElementById('loginErrorMessage').innerText = '';  // Clear any previous errors
                    
                    // Close the modal after a successful registration
                    setTimeout(() => {
                        closeModal();  // Close the modal after a delay to show the success message
                    }, 2000); // Adjust delay to suit your preference
                } else {
                    // Show error message
                    document.getElementById('loginErrorMessage').innerText = response.message;
                    document.getElementById('loginSuccessMessage').innerText = '';  // Clear any previous successes
                }
            }
        };
        }
