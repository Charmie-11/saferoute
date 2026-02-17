function toggleMenu() {
    document.body.classList.toggle('sidebar-collapsed');
}

// --- DARK MODE LOGIC ---
const darkModeToggle = document.getElementById("darkModeToggle");
const themeIcon = document.getElementById("theme-icon");
const themeText = document.getElementById("theme-text");

function updateThemeUI() {
    if (document.body.classList.contains("dark-mode")) {
        if(themeIcon) themeIcon.classList.replace("fa-moon", "fa-sun");
        if(themeText) themeText.innerText = "Light Mode";
    } else {
        if(themeIcon) themeIcon.classList.replace("fa-sun", "fa-moon");
        if(themeText) themeText.innerText = "Dark Mode";
    }
}

// Check localStorage on load
if (localStorage.getItem("theme") === "enabled") {
    document.body.classList.add("dark-mode");
    updateThemeUI();
}

if (darkModeToggle) {
    darkModeToggle.addEventListener("click", () => {
        document.body.classList.toggle("dark-mode");
        const isDark = document.body.classList.contains("dark-mode");
        localStorage.setItem("theme", isDark ? "enabled" : "disabled");
        updateThemeUI();
    });
}

// --- MODAL LOGIC (Safe Check) ---
const modal = document.getElementById("loginModal");
const closeBtn = document.querySelector(".close-btn");

if (modal && closeBtn) {
    closeBtn.addEventListener("click", () => modal.style.display = "none");
    window.addEventListener("click", (e) => {
        if (e.target == modal) modal.style.display = "none";
    });
}

    // --- PROTECTED LINKS MODAL ---
    //const modal = document.getElementById("loginModal");
    //const closeBtn = document.querySelector(".close-btn");
    //const protectedLinks = document.querySelectorAll(".protected");

    // PHP Session Check
    //const isLoggedIn = <?= isset($_SESSION['user_id']) ? 'true' : 'false' ?>;

    //protectedLinks.forEach(link => {
      //link.addEventListener("click", function(e) {
        //if (!isLoggedIn) {
          //e.preventDefault();
          //modal.style.display = "block";
        //}
      //});
    //});