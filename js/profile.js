function performLogout() {
    window.location.replace("profile.php?action=logout");
}

function openFamilyModal() {
    document.getElementById("familyModal").style.display = "flex";
}

function closeFamilyModal() {
    document.getElementById("familyModal").style.display = "none";
}


window.onclick = function(event) {
    const modal = document.getElementById("familyModal");
    if (event.target === modal) {
        modal.style.display = "none";
    }
}