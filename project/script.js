var errorUser=document.getElementsByClassName('error-user');
var errorpassword=document.getElementsByClassName('error-password');

function validateUser(){
    var user=document.getElementById('username').value;
    console.log(user);
    if(user.length==0){
        errorUser.innerHTML='name is requite';
        return false;
    }
    // if(!name.match(/^[A-Za-z][0-9]{10}$/)){
    //     nameError.innerHTML='name is ';
    //     return false;
    // }
    else{
        errorUser.innerHTML='valid';
        return true;
    }
}
