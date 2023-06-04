

document.getElementById("submit-btn").addEventListener("click", function(event) {
    event.preventDefault();
  
    
    var confirmationMessage = document.getElementById("confirmation-message");
    confirmationMessage.textContent = "Your appointment was sent!";
  });
  