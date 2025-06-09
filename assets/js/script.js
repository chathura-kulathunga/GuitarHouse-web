// Scroll Button .js//
window.onscroll = function() {
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

// Image Switcher .js//
function switchImage(mainId, newSrc) {
 document.getElementById(mainId).src = newSrc;
}

// Quantity Validation .js//
const maxQty = 8;

function changeQty(amount, id) {
    const input = document.getElementById(`quantityInput${id}`);
    const error = document.getElementById(`quantityError${id}`);
    let value = input.value.trim();

    if (!/^\d+$/.test(value)) value = 1; // fallback if invalid

    let newQty = parseInt(value) + amount;

    if (newQty < 1) newQty = 1;
    if (newQty > maxQty) newQty = maxQty;

    input.value = newQty;
    error.style.display = "none";
}

function validateQuantity(id) {
    const input = document.getElementById(`quantityInput${id}`);
    const error = document.getElementById(`quantityError${id}`);
    const value = input.value.trim();

    if (!/^[1-9]\d*$/.test(value) || parseInt(value) > maxQty) {
        error.style.display = "block";
    } else {
        error.style.display = "none";
        alert(`Added ${value} item(s) to cart!`);
        // Implement actual cart logic here
    }
}