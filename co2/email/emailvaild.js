function email()
{
   var i = document.getElementById('em').value;
   console.log(i)
  var vaildReg = /^([a-z 0-9\.-]+)@([a-z0-9-]+).([a-z]{2,8})(.[a-z]{2,8})?$/;
  if(vaildReg.test(i))
  {
    document.getElementById('res').innerHTML ="vaild";
  }
  else
  {
    document.getElementById('res').innerHTML ="notvaild";

  }
}