
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
        const orderBtn = document.querySelector('.order-btn');

        // Animate order button
        orderBtn.style.opacity = '0';
        orderBtn.style.transform = 'translateY(20px)';
        
        setTimeout(() => {
            orderBtn.style.transition = 'all 0.6s cubic-bezier(0.34, 1.56, 0.64, 1)';
            orderBtn.style.opacity = '1';
            orderBtn.style.transform = 'translateY(0)';
        }, 500);
    });
