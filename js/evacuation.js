document.addEventListener("DOMContentLoaded", () => {
    // Animate counters
    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => {
        const target = +counter.getAttribute('data-target');
        let count = 0;
        const step = target / 100;
        const update = () => {
            count += step;
            if(count < target){
                counter.innerText = Math.ceil(count);
                requestAnimationFrame(update);
            } else {
                counter.innerText = target;
            }
        };
        update();
    });

    // Animate progress bars
    document.querySelectorAll('.bar').forEach(bar => {
        bar.style.width = bar.getAttribute('data-width');
    });

    // Navigate buttons
    document.querySelectorAll('.navigate-btn').forEach(button => {
        button.addEventListener('click', function () {
            const lat = this.dataset.lat;
            const lng = this.dataset.lng;
            const name = encodeURIComponent(this.dataset.name);

            if(!lat || !lng){
                alert("Coordinates not set for this center.");
                return;
            }

            window.location.href = `map.php?lat=${lat}&lng=${lng}&name=${name}`;
        });
    });
});