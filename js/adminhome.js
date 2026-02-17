const counters = document.querySelectorAll('.count');

counters.forEach(counter => {
    const target = +counter.getAttribute('data-target');
    let count = 0;
    const increment = target / 100;

    const updateCounter = () => {
        count += increment;
        if (count < target) {
            counter.innerText = Math.ceil(count).toLocaleString();
            requestAnimationFrame(updateCounter);
        } else {
            counter.innerText = target.toLocaleString();
        }
    }

    updateCounter();
});