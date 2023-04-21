var btn=document.querySelector("#btnall");
var para=document.getElementById("para");
btn.addEventListener('click',(e)=>{
    e.preventDefault();
    var obj=new XMLHttpRequest();
    obj.open('GET','http://localhost/week9/fetchall/fetchdata.php');
    obj.onload=function()
    {  
        var dataExtraction=obj.responseText;
        console.log(dataExtraction);
        var dataTransformation=JSON.parse(dataExtraction);
        displayData(dataTransformation);
        
    };
    obj.send();
});

function displayData(dataTransformation)
{
    var htmlstring="<tr><th>Id</th><th>Name</th><th>Age</th><th>City</th></tr>";
    for(i=0;i<dataTransformation.length;i++)
    {
        htmlstring+="<tr>"+"<td>"+dataTransformation[i].id+"</td>"+"<td>"+dataTransformation[i].name+"</td>"+"<td>"+dataTransformation[i].age+"<td>"+dataTransformation[i].city+"</td>"+"</td></tr>";
    }
    para.insertAdjacentHTML("beforeend",htmlstring);
}