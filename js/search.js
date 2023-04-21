var btns=document.querySelector("#btns");
var search=document.querySelector("#search");
var spans=document.getElementById("spans");
btns.addEventListener('click',(e)=>{
    e.preventDefault();

    var datas={'search':search.value};

    var objs=new XMLHttpRequest();
    objs.open('POST','http://localhost/week9/search/search.php');
    objs.onload=function()
    {  
        var dataExtractions=objs.responseText;
        console.log(dataExtractions);
        var dataTransformations=JSON.parse(dataExtractions);
        console.log(dataTransformations);
        displayDatas(dataTransformations);
        
    };
    objs.send(JSON.stringify(datas));
});

function displayDatas(dataTransformations)
{
    var htmlstring="<tr><th>Name</th><th>Age</th></tr>";
    for(i=0;i<dataTransformations.length;i++)
    {
        htmlstring+="<tr>"+"<td>"+dataTransformations[i].name+"</td>"+"<td>"+dataTransformations[i].age+" "+"</td></tr>";
    }
    spans.insertAdjacentHTML("beforeend",htmlstring);

    
}