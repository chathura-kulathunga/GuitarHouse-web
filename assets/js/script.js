// Scroll Button .js//
window.onscroll = function () {
    toggleScrollTopBtn();
};

function toggleScrollTopBtn() {
    const btn = document.getElementById("scrollTopBtn");
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        btn.style.display = "block";
    } else {
        btn.style.display = "none";
    }
}

function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

// Login Modal Clear Inputs on Close
const loginModal = document.getElementById('loginModal');

loginModal.addEventListener('hidden.bs.modal', function () {
    // Clear all input fields inside the modal
    loginModal.querySelectorAll('input').forEach(input => input.value = '');
});