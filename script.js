const signUpButton=document.getElementById('signUpButton');
const sigInButton=document.getElementById('signInButton');
const signInForm=document.getElementById('signIN');
const signUpForm=document.getElementById('signup');

signUpButton.addEventListener('click', function(){
    signInForm.style.display = "none";
    signUpForm.style.display = "block";
})
signInButton.addEventListerner('click', function(){
    signInForm.style.display = "block";
    signUpForm.style.display = "none";
})
