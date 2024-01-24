$(function(){

    $('.ModalUbah').on('click', function(){
        console.log('test');
    });


});

// toggle password
function togglePasswordVisibility() {
    var passwordInput = document.getElementById('password');
    var showPasswordButton = document.querySelector('.show-password');
    
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        showPasswordButton.innerHTML = '<i class="bi bi-eye-fill"></i>' // eye open
    } else {
        passwordInput.type = 'password';
        showPasswordButton.innerHTML = '<i class="bi bi-eye-slash-fill"></i>'; // eye closed icons
    }
}


// eye toggle registrasi
function togglePasswordVisibility1() {
    var passwordInput = document.getElementById('password');
    var showPasswordButton1 = document.querySelector('.show-password-1');
    
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        showPasswordButton1.innerHTML = '<i class="bi bi-eye-fill"></i>' // eye open
    } else {
        passwordInput.type = 'password';
        showPasswordButton1.innerHTML = '<i class="bi bi-eye-slash-fill"></i>'; // eye closed icons
    }
}

function togglePasswordVisibility2() {
    var passwordInput = document.getElementById('confirm-password');
    var showPasswordButton2 = document.querySelector('.show-password-2');
    
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        showPasswordButton2.innerHTML = '<i class="bi bi-eye-fill"></i>' // eye open
    } else {
        passwordInput.type = 'password';
        showPasswordButton2.innerHTML = '<i class="bi bi-eye-slash-fill"></i>'; // eye closed icons
    }
}


// script untuk animasi navbar
const searchBtn = document.querySelector(".search-btn");
const cancelBtn = document.querySelector(".cancel-btn");
// const searchBtn = document.querySelector(".search-btn");
const searchBox = document.querySelector(".search-box");

searchBtn.onclick = () => {
    searchBox.classList.add("active");
}