document.getElementById('submit').addEventListener('click',function(event){
    event.preventDefault();
    console.log('test');
    
})

var elementsList = document.getElementsByClassName('input-field');

for(var i=0;i<elementsList.length;i++){
    elementsList[i].addEventListener('keyup',function(event){
        event.preventDefault();
        if(event.target.name == 'username'){
            usernameValue = event.target.value;
        }
        else if(event.target.name == 'password'){
            passwordValue = event.target.value;
        }
        console.log('username is ' + usernameValue + 'and pass is ' + passwordValue)
    })
}

var usernameValue = "";
var passwordValue = "";
var LoginObj = {
    username: "",
    password: ""
}