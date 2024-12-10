// REGISTRATION form submission via AJAX
function handleRegisterSubmit(event) {
    event.preventDefault();  // Prevent form from submitting normally
    
    // Clear previous messages
    document.getElementById('signupErrorMessage').innerText = '';
    document.getElementById('signupSuccessMessage').innerText = '';

    // Get form data
    const name = document.getElementById('rname').value;
    const email = document.getElementById('remail').value;
    const pass = document.getElementById('rpass').value;
    const cpass = document.getElementById('rcpass').value;

console.log(name, email, pass, cpass);

    // AJAX request to validate registration
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'register.php', true);  // The PHP script for validation
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
    // Send form data to the server
    xhr.send('name=' + encodeURIComponent(name) + '&email=' + encodeURIComponent(email) +
             '&pass=' + encodeURIComponent(pass) + '&cpass=' + encodeURIComponent(cpass));
    
    // Handle the server response
    xhr.onload = function() {
        if (xhr.status === 200) {
            const response = JSON.parse(xhr.responseText);  // Parse JSON response
            
            if (response.success) {
                // Show success message and then close modal
                document.getElementById('signupSuccessMessage').innerText = response.message;
                document.getElementById('signupErrorMessage').innerText = '';  // Clear any previous errors
                
                // Close the modal after a successful registration
                setTimeout(() => {
                    closeModal();  // Close the modal after a delay to show the success message
                    location.reload();
                }, 2000); // Adjust delay to suit your preference
            } else {
                // Show error message
                document.getElementById('signupErrorMessage').innerText = response.message;
                document.getElementById('signupSuccessMessage').innerText = '';  // Clear any previous successes
            }
        }
    };

    console.log(document);
    }
