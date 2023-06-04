function addAppointment() {
    // Get the input values
    var name = document.getElementById('name').value;
    var date = document.getElementById('date').value;
    var time = document.getElementById('time').value;
  
    // Create a new row for the appointment
    var table = document.getElementById('appointment-table').getElementsByTagName('tbody')[0];
    var newRow = table.insertRow();
  
    // Insert cells with the appointment details
    var nameCell = newRow.insertCell(0);
    var dateCell = newRow.insertCell(1);
    var timeCell = newRow.insertCell(2);
    var actionCell = newRow.insertCell(3);
  
    nameCell.innerHTML = name;
    dateCell.innerHTML = date;
    timeCell.innerHTML = time;
  
    // Create the delete button
    var deleteButton = document.createElement('button');
    deleteButton.innerHTML = 'Delete';
    deleteButton.onclick = function() {
      deleteAppointment(newRow);
    };
  
    actionCell.appendChild(deleteButton);
  
    // Clear the input fields
    document.getElementById('name').value = '';
    document.getElementById('date').value = '';
    document.getElementById('time').value = '';
  }
  
  // Function to delete an appointment
  function deleteAppointment(row) {
    var table = document.getElementById('appointment-table').getElementsByTagName('tbody')[0];
    table.deleteRow(row.rowIndex);
  }