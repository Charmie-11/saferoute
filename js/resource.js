document.querySelectorAll('.navigate-btn').forEach(button => {
    button.addEventListener('click', function () {
        const lat = this.dataset.lat;
        const lng = this.dataset.lng;
        const name = encodeURIComponent(this.dataset.name);
        window.location.href = `map.php?lat=${lat}&lng=${lng}&name=${name}`;
    });
});

// ====== Filter Buttons ======
const filterButtons = document.querySelectorAll('.filter');
const cards = document.querySelectorAll('.grid .card');

filterButtons.forEach(button => {
    button.addEventListener('click', () => {

        filterButtons.forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');

        const type = button.dataset.type;

        cards.forEach(card => {
            if (type === 'all') {
                card.style.display = 'block';
            } else {
                card.style.display = card.classList.contains(type) ? 'block' : 'none';
            }
        });
    });
});

// ====== Search Bar ======
const searchInput = document.querySelector('.search-bar');
searchInput.addEventListener('input', () => {
    const query = searchInput.value.toLowerCase();
    cards.forEach(card => {
        const name = card.querySelector('h4').innerText.toLowerCase();
        const address = card.querySelector('p').innerText.toLowerCase();
        card.style.display = (name.includes(query) || address.includes(query)) ? 'block' : 'none';
    });
});