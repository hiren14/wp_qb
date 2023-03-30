
function even()
{

var i,n;
// i= document.getElementById('st').value;
n= document.getElementById('end').value;
console.log(n)
for(i=1;i<=n;i++)
{
    if(i%2==1)
    {
 console.log(i + " ")
        document.write( i +" ");
        console.log(i)
    }
}
}