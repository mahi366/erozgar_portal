document.getElementById("loginForm").addEventListener("submit", function(e){

  let cnic = document.getElementById("cnic").value;
  let password = document.getElementById("password").value;

  let cnicPattern = /^[0-9]{5}-[0-9]{7}-[0-9]{1}$/;

  if(!cnicPattern.test(cnic)){
    alert("CNIC format must be 12345-1234567-1");
    e.preventDefault();
    return;
  }

  if(password.length < 4){
    alert("Password must be at least 4 characters");
    e.preventDefault();
    return;
  }

});