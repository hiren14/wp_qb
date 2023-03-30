function login(){
let uname,pass
uname= document.getElementById('uname').value;
pass=document.getElementById('pass').value;
console.log(uname)
console.log(pass)
if(uname ==='')
{
    alert('no username enter')
}
else if(pass ==='')
{
    alert('no password enter')
}

var Reguname = /^[a-zA-Z][A-Za-z0-9_]*$/
var Regpass =/^[a-zA-Z0-9\.-_@]{8,16}$/
if(Regpass.test(pass)){
 
    
            document.getElementById("pas").innerHTML = 'vaild pass'
    
    }
    else{
        document.getElementById('pas').innerHTML ='invaild pass'
    }
    

if(Reguname.test(uname))
{
    document.getElementById("fn").innerHTML = 'vaild'

}
else{
    document.getElementById('fn').innerHTML ='invaild'
}
}
