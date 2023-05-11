//working file
// function registerMe () {

//     let user = {
//         "username": "kachenas",
//         "name": "chester",
//         "gender": "male"
//     }
    
//     fetch("sample2.php", {
//         "method": "POST",
//         "headers": {
//             "Content-Type": "application/json;charset=utf-8"
//         },
//         "body": JSON.stringify(user)
//     }).then(function (response) {
//         return response.json();
//     }).then(function (data) {
//         console.log(data);
//     })
   
// }

const form = document.getElementById('registerForm');

form.addEventListener('submit', function(event) {
  // Prevent the default form submission behavior
  event.preventDefault();

  // Send a POST request to the PHP file with the form data
  fetch('sample2.php', {
    method: 'POST',
    body: new FormData(form)
  })
  .then(response => response.json())
  .then(data => {
    // Do something with the response from the PHP file
    //console.log(data);
    const output = 'Hello ' + data.name + ' with email of ' + data.email + ' your message is ' + data.message;
    document.getElementById('output').innerHTML = output;
  })
  .catch(error => {
    console.error(error);
  });
});