
    $('#sendButton').click(function(){
        validateForm();   
    })


  function validateForm() {
      
  var name =  document.getElementById('contactFormName').value;
  console.log(name);
  if (name == "") {
      document.getElementById('status').textContent = "Name cannot be empty";
      return false;
  }
  var email =  document.getElementById('email').value;
  console.log(email);
  if (email == "") {
      document.getElementById('status').textContent = "Email cannot be empty";
      return false;
  } else {
        var re = new RegExp("[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+(?:[A-Z]{2}|com|org|net|gov|mil|biz|info|mobi|name|aero|jobs|museum)"); 
        if(!re.test(email)){
        document.getElementById('status').textContent = "Email format invalid";
        return false;
      }
  }
  var subject =  document.getElementById('subject').value;
  console.log(subject);
  if (subject == "") {
      document.getElementById('status').textContent = "Subject cannot be empty";
      return false;
  }
  var message =  document.getElementById('message').value;
  console.log(message);
  if (message == "") {
      document.getElementById('status').textContent = "Message cannot be empty";
      return false;
  }
  document.getElementById('status').textContent = "Sending...";
  document.getElementById('contact-form').submit();
  }