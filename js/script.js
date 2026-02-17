function openModal(role) {
    document.getElementById("pageContent").classList.add("blur");
    document.getElementById("roleModal").classList.add("show");

    document.getElementById("modalTitle").innerText = "Welcome " + role;

    if(role === "Admin"){
        signupBtn.href = "views/adminsignup.php";
        loginBtn.href = "views/adminsignin.php";
    } else {
        signupBtn.href = "views/signup.php";
        loginBtn.href = "views/signin.php";
    }
}

function closeModal() {
    document.getElementById("pageContent").classList.remove("blur");
    document.getElementById("roleModal").classList.remove("show");
}
