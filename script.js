var numberError = document.getElementById('number-error');
var emailError = document.getElementById('email-error');

var boxError = document.getElementById('box-error');
var totalError = document.getElementById('total-error');

function validMobile(){
    var phone=document.getElementById('exampleInputmobile').value;
    if(phone.length==0)
   {
    numberError.innerHTML='Please complete this required field.';
    return false;
   }
   
   if(phone.match(/^[A-Za-z]+$/)){
    numberError.innerHTML='Must contain only numbers, +()-. and x.';
    return false;
   }
   numberError.innerHTML=' ';
  return true;
}

    function validEmail(){
        var email=document.getElementById('exampleInputEmail1').value;
        if(email.length==0){
            emailError.innerHTML='Please complete this required field.';
            return false;
           }
           if(!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
            emailError.innerHTML='Email must be formatted correctly.';
            return false;
    }
    emailError.innerHTML=' ';
  return true;
}

function validBox(){
  var box=document.getElementById('text-some').value;
  if(box.length==0){
      boxError.innerHTML='Please complete this required field.';
      return false;
     }
     if(box.match(/^[A-Za-z]+$/)){
      boxError.innerHTML='';
      return true;
     }
     return true;
}
function validTotal(){
  var total=document.getElementById('totalguest').value;
  if(total.length==0)
 {
  totalError.innerHTML='Please complete this required field.';
  return false;
 }
 
 if(total.match(/^[A-Za-z]+$/)){
  totalError.innerHTML='Please enter a valid number.';
  return false;
 }
 if(total>5000){
  totalError.innerHTML='Please enter a number thats less than or equal to 5000.';
  return false;
 }
return true;
}
