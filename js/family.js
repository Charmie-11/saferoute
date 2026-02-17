/* COUNTING NUMBERS */
document.querySelectorAll('.card-value').forEach(el => {
  const target = +el.dataset.count;
  let current = 0;
  const increment = Math.ceil(target / 60);

  const counter = setInterval(() => {
    current += increment;
    if (current >= target) {
      el.textContent = target.toLocaleString();
      clearInterval(counter);
    } else {
      el.textContent = current.toLocaleString();
    }
  }, 20);
});

/* BAR CHART ANIMATION */
window.addEventListener('load', () => {
  document.querySelectorAll('.bar').forEach(bar => {
    const height = bar.dataset.height;
    bar.style.height = height + 'px';
  });
});

/* PAGINATION */
const rows = document.querySelectorAll('#familyTable tr');
const page1Btn = document.getElementById('page1');
const page2Btn = document.getElementById('page2');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');
const pageInfo = document.getElementById('pageInfo');

let currentPage = 1;
const rowsPerPage = 5;

function showPage(page) {
  currentPage = page;

  rows.forEach((row, index) => {
    if (
      index >= (page - 1) * rowsPerPage &&
      index < page * rowsPerPage
    ) {
      row.style.display = '';
    } else {
      row.style.display = 'none';
    }
  });

  page1Btn.classList.toggle('current', page === 1);
  page2Btn.classList.toggle('current', page === 2);

  pageInfo.textContent = `Showing page ${page} of 2`;
}

page1Btn.onclick = () => showPage(1);
page2Btn.onclick = () => showPage(2);

prevBtn.onclick = () => {
  if (currentPage > 1) showPage(currentPage - 1);
};

nextBtn.onclick = () => {
  if (currentPage < 2) showPage(currentPage + 1);
};

showPage(1);
