users = [{email:"1910282@iub.edu.bd",password:"12345", type:"student"}, {email:"2021397@iub.edu.bd",password:"12345", type:"alumni"}, {email:"2020301@iub.edu.bd",password:"12345", type:"admin"}];

function login(){
    userEmail = document.getElementById("inputEmail").value;
    userPass = document.getElementById("inputPassword").value;
    for(i=0;i<users.length;i++){
        if(userEmail==users[i].email && userPass==users[i].password){
            if(users[i].type=="alumni")document.getElementById('submit').href='alumni/home.html';
            else if(users[i].type=="admin")document.getElementById('submit').href='admin/home.html';
            else if(users[i].type=="student") document.getElementById('submit').href='student/home.html';
            return true;
        }
    }
    return false;
}
