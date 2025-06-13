// Ambil semua checkbox dan input harga
const checkboxes = document.querySelectorAll(
    'input[type="checkbox"][data-price]'
);
const priceInput = document.getElementById("price");

function updateTotalPrice() {
    let total = 0;
    checkboxes.forEach((cb) => {
        if (cb.checked) {
            total += parseInt(cb.dataset.price);
        }
    });
    priceInput.value = total;
}

// Tambahkan event listener untuk update harga setiap checkbox diklik
checkboxes.forEach((cb) => {
    cb.addEventListener("change", updateTotalPrice);
});
