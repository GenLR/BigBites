<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Delivery - Login/Signup</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="styles.css">

    <style>
        /* styles.css */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

body {
    min-height: 100vh;
    background-color: whitesmoke;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
}

/* Main Content Styling */
.main-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 40px 20px;
    gap: 40px;
}

/* Categories Styling */
.categories {
    display: flex;
    gap: 40px;
    justify-content: center;
    width: 100%;
    max-width: 800px;
}

.category {
    text-align: center;
    cursor: pointer;
    transition: transform 0.3s;
}

.category:hover {
    transform: translateY(-5px);
}

.category img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-bottom: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.category h3 {
    color: #333;
    font-size: 18px;
}

/* Featured Image Styling */
.featured-image {
    text-align: center;
    max-width: 800px;
    width: 100%;
}

.featured-image img {
    width: 100%;
    height: auto;
    border-radius: 16px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
}

.featured-image h2 {
    margin-top: 20px;
    color: #333;
    font-size: 24px;
}

/* Order Button Styling */
.order-btn {
    padding: 16px 48px;
    background-color: #ff4d4d;
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 18px;
    font-weight: bold;
    transition: all 0.3s;
    box-shadow: 0 4px 8px rgba(255, 77, 77, 0.2);
}

.order-btn:hover {
    background-color: #ff3333;
    transform: translateY(-2px);
    box-shadow: 0 6px 12px rgba(255, 77, 77, 0.3);
}

/* Previous Modal Styling remains the same */
.modal-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

.modal {
    display: none;
    background-color: white;
    border-radius: 12px;
    width: 90%;
    max-width: 400px;
    animation: modalSlideIn 0.3s ease-out;
}

/* Rest of the previous CSS remains the same */
@keyframes modalSlideIn {
    from {
        transform: translateY(-20px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

/* Responsive Design */
@media (max-width: 600px) {
    .categories {
        flex-direction: column;
        gap: 20px;
    }

    .featured-image h2 {
        font-size: 20px;
    }

    .order-btn {
        padding: 14px 36px;
        font-size: 16px;
    }
}

/* styles.css */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

/* Example trigger button styling */
.order-btn {
    padding: 12px 24px;
    background-color: #ff4d4d;
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
}

.order-btn:hover {
    background-color: #ff3333;
}

/* Modal Overlay */
.modal-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

/* Modal Container */
.modal {
    display: none;
    background-color: white;
    border-radius: 12px;
    width: 90%;
    max-width: 400px;
    animation: modalSlideIn 0.3s ease-out;
}

@keyframes modalSlideIn {
    from {
        transform: translateY(-20px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

/* Login & Signup Form */
.modal-content {
    padding: 24px;
    position: relative;
}

.close {
    position: absolute;
    right: 24px;
    top: 24px;
    font-size: 24px;
    cursor: pointer;
    color: #666;
}

.modal-header {
    text-align: center;
    margin-bottom: 24px;
}

.modal-header h2 {
    color: #333;
    margin-bottom: 8px;
}

.modal-header p {
    color: #666;
    font-size: 14px;
}

/* Form Styling */
.form-group {
    margin-bottom: 16px;
}

.form-group input[type="text"],
.form-group input[type="email"],
.form-group input[type="password"] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: 14px;
}

.form-group input:focus {
    outline: none;
    border-color: #ff4d4d;
}

.remember-forgot {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 14px;
}

.forgot-password {
    color: #ff4d4d;
    text-decoration: none;
}

.submit-btn {
    width: 100%;
    padding: 12px;
    background-color: #ff4d4d;
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.submit-btn:hover {
    background-color: #ff3333;
}

/* Social Login */
.social-login {
    margin-top: 24px;
    text-align: center;
}

.social-login p {
    color: #666;
    font-size: 14px;
    margin-bottom: 16px;
    padding-left: 105px;
}

.social-buttons {
    display: flex;
    gap: 12px;
}

.social-btn {
    flex: 1;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: white;
    cursor: pointer;
    font-size: 14px;
    transition: background-color 0.3s;
}

.social-btn:hover {
    background-color: #f5f5f5;
}

/* Switch Form Link */
.switch-form {
    margin-top: 24px;
    text-align: center;
    font-size: 14px;
}

.switch-form a {
    color: #ff4d4d;
    text-decoration: none;
}

/* Terms Checkbox */
.terms {
    font-size: 14px;
    color: #666;
}

.terms a {
    color: #ff4d4d;
    text-decoration: none;
}

/* Responsive Design */
@media (max-width: 480px) {
    .modal {
        width: 95%;
    }
    
    .social-buttons {
        flex-direction: column;
    }
}


/* Julliane CSS */
h1{
color: rgba(98, 179, 216, 0.733);
font-size: 50px;
font-weight: 800;
text-align: center;
}
.container{
    top: 100px;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px 20px;
   flex-direction: row;
}
h4{
    text-align: left;
    margin-left: 20px;
    font-size: 17px;
}
.card{
    width: 350px;
    height: 255px;
    background:white;
    border-width: 2px; 
     text-align: center;
    border-radius: 10px;
    position: relative;
    border: ridge 1.5px;
}
p{
    text-align: left;
    margin-left: 20px;
    color: gray;
}
  .score .stars {
    color: #EEBD01;
    position: absolute;
    bottom: 30px;
    
}
label{
    color: white;
  position: absolute;
  background-color: #da006d;
  top: 10px;
  left: 10px;
  padding: 5px 5px;
  border-radius: 10px;
}
.bt{
    height: 200px;
    width: 350px;
    object-fit: cover;
    border-radius: 10px;
}
.bl{
    height: 200px;
    width: 350px;
    object-fit: cover;
    border-radius: 10px;
}
.mt{
    height: 200px;
    width: 350px;
    object-fit: cover;
    border-radius: 10px;
}
.bq{
    height: 200px;
    width: 350px;
    object-fit: cover;
    border-radius: 10px;
}
.gw{
    height: 200px;
    width: 350px;
    object-fit: cover;
    border-radius: 10px;
}
.rr{
    height: 200px;
    width: 350px;
    object-fit: cover;
    border-radius: 10px;
}
.pares{
    height: 200px;
    width: 350px;
    object-fit: cover;
    border-radius: 10px;
}
.th{
    height: 200px;
    width: 350px;
    object-fit: cover;
    border-radius: 10px;
}
.cw{
    height: 200px;
    width: 350px;
    object-fit: cover;
    border-radius: 10px;
}
@media(max-width: 690px){
  .container{
    flex-direction: column;
    gap: 50px 50px;
    padding: 0;
  }
}
    </style>
</head>
<body>
    
    <div class="main-content">
        <div class="categories">
            <div class="category" onclick="openModal('login')">
                <img src="images/Dessert.png" alt="Dessert">
                <h3>Dessert</h3>
            </div>
            <div class="category" onclick="openModal('login')">
                <img src="images/Plate.png" alt="Plate">
                <h3>Plate</h3>
            </div>
        </div>

        <!-- Cards (Julliane HTML) -->
        <div class="container" onclick="openModal('login')">
            <div class="container">
                <div class="card">
                <label>₱ 0 off delivery, min. ₱ 349 </label>
                <img src="images/Botejyu.jpeg" class="bt">
                 <h4>Boteyju - SM City Cebu</h4>
                 <p> Ramen </p>  
                 <span class="score">
              <span class="stars" style="width:78%">
                  <i class="fa fa-star">4.4/5(24)</i>
              </span>
             </div> 
            <div class="card">
              <label>₱ 0 off delivery, min. ₱ 349 </label>
            <img src="images/Balamban-Liempo-Cebu-1-1536x976.jpg" class="bl">
             <h4>BALAMBAN LECHON - Dipolog</h4>
             <p> Lechon </p>  
             <span class="score">
          <span class="stars" style="width:78%">
              <i class="fa fa-star">5(60)</i>
          </span>
         </div> 
            <div class="card">
              <label>₱ 0 off delivery, min. ₱ 299 </label>
            <img src="images/BKY-JT-MilkTea-01726.jpg" class="mt">
            <div class="con">
             <h4>Tiger Sugar - AS Fortuna</h4>
             <p> Milk Tea</p>
             <span class="score">
              <span class="stars" style="width:78%">
                  <i class="fa fa-star">5(1000+)</i>
              </span>
             </div> 
             </div> 
            <div class="card">
              <label>₱ 0 off delivery, min. ₱ 349 </label>
            <img src="images/filipino-bbq-pork-skewers.jpg" class="bq">
            <div class="con">
             <h4>AA BBQ - Cebu City</h4>
             <p> Filipino Pork BBQ</p>
             <span class="score">
              <span class="stars" style="width:78%">
                  <i class="fa fa-star">5(1000+)</i>
              </span>
             </div> 
            </div>
        <div class="card">
          <label>₱ 0 off delivery, min. ₱ 499</label>
        <img src="images/Greenwich Ultimate Overload 2015.jpg" class="gw">
        <div class="con">
         <h4>Greenwich - Gaisano Tabunok</h4>
         <p> Pizza</p>
         <span class="score">
          <span class="stars" style="width:78%">
              <i class="fa fa-star">5(2000+)</i>
          </span>
         </div> 
        </div>
        <div class="card">
          <label>₱ 0 off delivery, min. ₱ 899</label>
           <img src="images/Red-Ribbon-Holiday-Cakes.jpeg" class="rr">
           <div class="con">
            <h4>Red Ribbon - Cebu City</h4>
            <p> Cakes</p>
            <span class="score">
              <span class="stars" style="width:78%">
                  <i class="fa fa-star">5(100+)</i>
              </span>
          </div>
           </div>
           <div class="card">
            <label>₱ 0 off delivery, min. ₱ 349</label>
              <img src="images/pares.jpg" class="pares">
              <div class="con">
               <h4>Pares Ta Bai - Banilad</h4>
               <p>Filipino</p>
               <span class="score">
                <span class="stars" style="width:78%">
                    <i class="fa fa-star">5(2000+)</i>
                </span>
            </div>
              </div>
              <div class="card">
                <label>₱ 0 off delivery, min. ₱ 349</label>
                 <img src="images/th.jpg" class="th">
                 <div class="con">
                  <h4>Big Daddy - Lahug</h4>
                  <p>Burgers</p>
                  <span class="score">
                    <span class="stars" style="width:78%">
                        <i class="fa fa-star">5(2000+)</i>
                    </span>
                </div>
                 </div>
                 <div class="card">
                  <label>₱ 0 off delivery, min. ₱ 349</label>
                  <img src="images/traditional-chicken-wings-912937-hero-01-6c1a003373a54538a732abc0005145d8.jpg" class="cw">
                  <div class="con">
                   <h4>Bad Boys Wingz - Consolacion</h4>
                   <p>Chicken Wings</p>
                   <span class="score">
                    <span class="stars" style="width:78%">
                        <i class="fa fa-star">4.9(85)</i>
                    </span>
                </div>
                  </div>

        <button onclick="openModal('login')" class="order-btn">Order Now</button>
    </div>

    <div class="modal-overlay" id="modalOverlay">
        <div class="modal" id="loginModal">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <div class="modal-header">
                    <h2>Welcome Back!</h2>
                    <p>Sign in to continue ordering delicious food</p>
                </div>
                <form class="login-form">
                    <div class="form-group">
                        <input type="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" required>
                    </div>
                    <div class="form-group forgot">
                        <a href="#" class="forgot-password">Forgot Password?</a>
                    </div>
                    <button type="submit" class="submit-btn">Login</button>
                </form>
                <div class="social-login">
                    <p>Or continue with</p>
                    <div class="social-buttons">
                        <button class="social-btn google"><i class="fab fa-google"></i>Google</button>
                        <button class="social-btn facebook"><i class="fab fa-facebook"></i>Facebook</button>
                    </div>
                </div>
                <div class="switch-form">
                    <p>Don't have an account? <a href="#" onclick="switchModal('signup')">Sign Up</a></p>
                </div>
            </div>
        </div>

        <div class="modal" id="signupModal">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <div class="modal-header">
                    <h2>Create Account</h2>
                    <p>Join us for the best food delivery experience</p>
                </div>
                <form class="signup-form">
                    <div class="form-group">
                        <input type="text" placeholder="Full Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Confirm Password" required>
                    </div>
                    <div class="form-group terms">
                        <label>
                            <input type="checkbox" required>
                            I agree to the <a href="#">Terms & Conditions</a>
                        </label>
                    </div>
                    <button type="submit" class="submit-btn">Create Account</button>
                </form>
                <div class="social-login">
                    <p>Or continue with</p>
                    <div class="social-buttons">
                        <button class="social-btn google"><i class="fab fa-google"></i>Google</button>
                        <button class="social-btn facebook"><i class="fab fa-facebook"></i>Facebook</button>
                    </div>
                </div>
                <div class="switch-form">
                    <p>Already have an account? <a href="#" onclick="switchModal('login')">Login</a></p>
                </div>
            </div>
        </div>
    </div>
    <script>
        // para animation
        class ModalAnimator {
            constructor() {
                this.modalOverlay = document.getElementById('modalOverlay');
                this.loginModal = document.getElementById('loginModal');
                this.signupModal = document.getElementById('signupModal');
                this.isAnimating = false;
                
                // Bind methods
                this.openModal = this.openModal.bind(this);
                this.closeModal = this.closeModal.bind(this);
                this.switchModal = this.switchModal.bind(this);
                
                this.modalOverlay.addEventListener('click', (e) => {
                    if (e.target === this.modalOverlay) {
                        this.closeModal();
                    }
                });
            }

            async openModal(type) {
                if (this.isAnimating) return;
                this.isAnimating = true;

                // Show overlay with fade in
                this.modalOverlay.style.display = 'flex';
                this.modalOverlay.style.opacity = '0';
                
                // Trigger reflow
                void this.modalOverlay.offsetWidth;
                
                // Animate overlay
                this.modalOverlay.style.transition = 'opacity 0.3s ease-out';
                this.modalOverlay.style.opacity = '1';

                // Determine which modal to show
                const modalToShow = type === 'login' ? this.loginModal : this.signupModal;
                const modalToHide = type === 'login' ? this.signupModal : this.loginModal;

                // Hide the other modal
                modalToHide.style.display = 'none';

                // Setup initial state for modal
                modalToShow.style.display = 'block';
                modalToShow.style.opacity = '0';
                modalToShow.style.transform = 'scale(0.7) translateY(-30px)';
                
                // Trigger reflow
                void modalToShow.offsetWidth;
                
                // Animate modal
                modalToShow.style.transition = 'all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1)';
                modalToShow.style.opacity = '1';
                modalToShow.style.transform = 'scale(1) translateY(0)';

                // Reset animation flag
                await new Promise(resolve => setTimeout(resolve, 300));
                this.isAnimating = false;
            }

            async closeModal() {
                if (this.isAnimating) return;
                this.isAnimating = true;

                const activeModal = this.loginModal.style.display === 'block' ? 
                    this.loginModal : this.signupModal;

                // Animate modal out
                activeModal.style.transition = 'all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1)';
                activeModal.style.opacity = '0';
                activeModal.style.transform = 'scale(0.7) translateY(-30px)';

                // Animate overlay
                this.modalOverlay.style.transition = 'opacity 0.3s ease-out';
                this.modalOverlay.style.opacity = '0';

                // Wait for animation to complete
                await new Promise(resolve => setTimeout(resolve, 300));

                // Hide elements
                this.modalOverlay.style.display = 'none';
                activeModal.style.display = 'none';

                // Reset transforms
                activeModal.style.transform = 'scale(1) translateY(0)';

                // Reset animation flag
                this.isAnimating = false;
            }

            async switchModal(type) {
                if (this.isAnimating) return;
                this.isAnimating = true;

                const modalToShow = type === 'login' ? this.loginModal : this.signupModal;
                const modalToHide = type === 'login' ? this.signupModal : this.loginModal;

                // Animate current modal out
                modalToHide.style.transition = 'all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1)';
                modalToHide.style.opacity = '0';
                modalToHide.style.transform = 'scale(0.7) translateY(-30px)';

                await new Promise(resolve => setTimeout(resolve, 300));

                // Hide previous modal
                modalToHide.style.display = 'none';

                // Show new modal
                modalToShow.style.display = 'block';
                modalToShow.style.opacity = '0';
                modalToShow.style.transform = 'scale(0.7) translateY(-30px)';

                // Trigger reflow
                void modalToShow.offsetWidth;

                // Animate new modal in
                modalToShow.style.transition = 'all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1)';
                modalToShow.style.opacity = '1';
                modalToShow.style.transform = 'scale(1) translateY(0)';

                // Reset animation flag
                await new Promise(resolve => setTimeout(resolve, 300));
                this.isAnimating = false;
            }
        }

        // Initialize the animator
        const modalAnimator = new ModalAnimator();

        // Update the click handlers to use the new animator
        function openModal(type) {
            modalAnimator.openModal(type);
        }

        function closeModal() {
            modalAnimator.closeModal();
        }

        function switchModal(type) {
            modalAnimator.switchModal(type);
        }

        // Add entrance animations for categories and featured image
        document.addEventListener('DOMContentLoaded', () => {
            const categories = document.querySelectorAll('.category');
            const featuredImage = document.querySelector('.featured-image');
            const orderBtn = document.querySelector('.order-btn');

            // Animate categories
            categories.forEach((category, index) => {
                category.style.opacity = '0';
                category.style.transform = 'translateY(20px)';
                
                setTimeout(() => {
                    category.style.transition = 'all 0.6s cubic-bezier(0.34, 1.56, 0.64, 1)';
                    category.style.opacity = '1';
                    category.style.transform = 'translateY(0)';
                }, 100 * index);
            });

            // Animate featured image
            featuredImage.style.opacity = '0';
            featuredImage.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                featuredImage.style.transition = 'all 0.6s cubic-bezier(0.34, 1.56, 0.64, 1)';
                featuredImage.style.opacity = '1';
                featuredImage.style.transform = 'translateY(0)';
            }, 300);

            // Animate order button
            orderBtn.style.opacity = '0';
            orderBtn.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                orderBtn.style.transition = 'all 0.6s cubic-bezier(0.34, 1.56, 0.64, 1)';
                orderBtn.style.opacity = '1';
                orderBtn.style.transform = 'translateY(0)';
            }, 500);
        });
    </script>
</body>
</html>