
function even()
{

var i,j,k;
i= document.getElementById('st').value;
j= document.getElementById('end').value;
console.log(i)
console.log(j)
for(i=i;i<=j;i++)
{
    if(i%2==1)
    {
 console.log(i + " ")
        document.write( i +" ");
        console.log(i)
    }
}
}