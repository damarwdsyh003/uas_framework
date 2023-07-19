/*
 * Catatan:
 * Gunakan fungsi goToHome() untuk menampilkan halaman home
 * Gunakan fungsi goToLogin() untuk menampilkan halaman login
 * Gunakan fungsi showPopUp() untuk menampilkan pop up error
 */
const buttonLogin = document.getElementById("buttonLogin");
const loginFormElement = document.getElementById('loginForm');
const inputEmailElement = document.getElementById('inputEmail');
const inputPasswordElement = document.getElementById('inputPassword');

const expectedEmail = 'ameliaanindah@unair.ac.id';
const expectedPassword = '@melia23Aa';

buttonLogin.addEventListener('click', function(event) {
    event.preventDefault();

    // TODO 1: Mendapatkan input email dan password pengguna dari form.
    const userEmail = inputEmailElement.value;
    const userPassword = inputPasswordElement.value;

    /* TODO 2: Buat logika perbandingan dengan kondisi:
       Jika variabel email identik dengan expectedEmail dan password identik dengan expectedPassword,
       panggil fungsi goToHome().
       Jika tidak, panggil fungsi showPopUp().
     */
    if (userEmail === expectedEmail && userPassword === expectedPassword) {
        goToHome(); // Call the function to go to the home page
    } else {
        showPopUp(); // Call the function to show the error pop-up
    }
});

function goToHome() {
    // TODO: Implement the logic to navigate to the home page (replace with your project's home page)
    window.location.href = 'index2.html';
}

function showPopUp() {
    // TODO: Implement the logic to show the error pop-up
    const modalElement = document.getElementById('modal');
    modalElement.classList.add('display');
}
 