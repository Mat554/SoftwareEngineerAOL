const signUpButton=document.getElementById('signUpButton');
const signInButton=document.getElementById('signInButton');
const signInForm=document.getElementById('signIn');
const signUpForm=document.getElementById('signup');

signUpButton.addEventListener('click',function(){
    signInForm.style.display="none";
    signUpForm.style.display="block";
})
signInButton.addEventListener('click', function(){
    signInForm.style.display="block";
    signUpForm.style.display="none";
})
document.getElementById('leaderboardButton').onclick = function() {
    // Tambahkan kode untuk menangani klik tombol leaderboard di sini
    alert('Leaderboard button clicked!');
};

document.getElementById('locationButton').onclick = function() {
    // Tambahkan kode untuk menangani klik tombol location di sini
    alert('Location button clicked!');
};

document.getElementById('pointButton').onclick = function() {
    // Tambahkan kode untuk menangani klik tombol point di sini
    alert('Point button clicked!');
};

document.getElementById('marketButton').onclick = function() {
    
    
    alert('Market button clicked!');
};

function login(event) {
    event.preventDefault();
    const email = document.getElementById('loginEmail').value;
    const password = document.getElementById('loginPassword').value;
    
    // admin account
    if (email === 'admin@gmail.com' && password === 'admin') {
        window.location.href = 'homepage.html';
    } else {
        alert('Invalid email or password');
    }
}

let menu = document.querySelector('#menu-icon');
let navlist = document.querySelector('.navlist');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navlist.classList.toggle('open');
}


