var emailError= document.getElementById('email-error');

function validateEmail(){
  var email = document.getElementById('contact-email').value;

  if(!email.match(/^[A-Za-z]\._\-[0-9][@][A-Za-z][\.][a-z]{2,4}$/)){
    emailError.innerHTML = 'Email Invalid'
    return false;
  }
  emailError.innerHTML = '<i class="fas fa-check-circle"></i>';
  return true;
}