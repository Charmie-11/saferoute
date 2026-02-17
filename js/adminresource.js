const modal = document.getElementById("resourceModal");
const stepsOrder = ["requested","packed","shipped","otw","delivered"];

document.querySelectorAll(".resource-row").forEach(row => {
  row.onclick = () => {

    m_title.textContent = row.dataset.title;
    m_org.textContent = row.dataset.org;
    m_contact.textContent = row.dataset.contact;
    m_email.textContent = row.dataset.email;
    m_city.textContent = row.dataset.city;
    m_barangay.textContent = row.dataset.barangay;
    m_location.textContent = row.dataset.location;

    m_type.textContent = row.dataset.type;
    m_weight.textContent = row.dataset.weight;
    m_exp.textContent = row.dataset.exp;
    m_serving.textContent = row.dataset.serving;

    updateTracker(row.dataset.shipstatus);

    modal.classList.add("show");
  };
});

function updateTracker(status) {
  const steps = document.querySelectorAll("#m_status .step");
  const index = stepsOrder.indexOf(status);

  steps.forEach((s,i) => {
    s.classList.remove("done","active");
    if (i < index) s.classList.add("done");
    if (i === index) s.classList.add("active");
  });
}

modalClose.onclick = () => modal.classList.remove("show");
modal.onclick = e => { if (e.target === modal) modal.classList.remove("show"); };