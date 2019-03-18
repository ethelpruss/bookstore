
   
 $(document).ready(function() {
    if($.trim($('#status').text()) == "") {
        $("#status").hide();
        }       
});
 
 

   $('#sendButton').click(function(){
        validateForm();   
    })


  function validateForm() {
      
  var name =  document.getElementById('contactFormName').value;

  if (name == "") {
      document.getElementById('status').textContent = "Name cannot be empty";
      $("#status").show();
      return false;
  }
  var email =  document.getElementById('email').value;
  if (email == "") {
      document.getElementById('status').textContent = "Email cannot be empty";
      $("#status").show();
      return false;
  } 
  
  else {
        var re = new RegExp("[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+(?:[A-Z]{2}|com|org|net|gov|mil|biz|info|mobi|name|aero|jobs|museum)"); 
        if(!re.test(email)){
        document.getElementById('status').textContent = "Email format invalid";
        $("#status").show();
        return false;
      }
  }
  var subject =  document.getElementById('subject').value;
  if (subject == "") {
      document.getElementById('status').textContent = "Subject cannot be empty";
      $("#status").show();
      return false;
  }
  var message =  document.getElementById('message').value;
  if (message == "") {
      document.getElementById('status').textContent = "Message cannot be empty";
      $("#status").show();
      return false;
  }
  document.getElementById('status').className = "alert alert-success";
  document.getElementById('status').textContent = "Sending...";
  document.getElementById('contact-form').submit();
  }