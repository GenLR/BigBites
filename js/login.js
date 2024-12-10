
    // submit via AJAX
    function handleLoginSubmit(event) {
        event.preventDefault();  
        
        // clear messages
        document.getElementById('loginErrorMessage').innerText = '';
        document.getElementById('loginSuccessMessage').innerText = '';

        // get data
        const email = document.getElementById('lemail').value.trim();
        const pass = document.getElementById('lpass').value.trim();

        console.log("Email:", email);
        console.log("Password:", pass);
    
        // AJAX 
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'login.php', true);  // send to validation
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        
        // send data to server
        xhr.send('email=' + encodeURIComponent(email) + '&pass=' + encodeURIComponent(pass));
      
        // server response
        xhr.onload = function() {
            if (xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);  // parse to JSON response

                if (response.success) {
                    // success message 
                    document.getElementById('loginSuccessMessage').innerText = response.message;
                    document.getElementById('loginErrorMessage').innerText = '';  
                    
                    // close modal if success
                    setTimeout(() => {
                        closeModal(); 
                        location.reload(); // reload the current page
                    }, 2000); // _delay time
                } else {
                    // error message
                    document.getElementById('loginErrorMessage').innerText = response.message; 
                    document.getElementById('loginSuccessMessage').innerText = '';  
                }
            }
        };
        }
