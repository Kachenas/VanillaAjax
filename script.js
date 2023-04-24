


function registerMe () {

    let user = {
        "username": "kachenas",
        "name": "chester",
        "gender": "male"
    }
    
    fetch("sample2.php", {
        "method": "POST",
        "headers": {
            "Content-Type": "application/json;charset=utf-8"
        },
        "body": JSON.stringify(user)
    }).then(function (response) {
        return response.json();
    }).then(function (data) {
        console.log(data);
    })
   
}