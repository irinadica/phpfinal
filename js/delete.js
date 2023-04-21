var btnd=document.querySelector("#btnd");
var snamed=document.querySelector('#named');
var spand=document.querySelector("#spand");
btnd.addEventListener('click',(e)=>{
    e.preventDefault();

    var datad={'name':snamed.value};

    var objd=new XMLHttpRequest();
    objd.open('DELETE','http://localhost/week9/delete/delete.php',true);
    objd.onload=function()
    {  
        var dataExtractiond=objd.responseText;  
        var dataTransformationd=JSON.parse(dataExtractiond);
        console.log(dataTransformationd);
        displayDatad(dataTransformationd);
        
    };
    objd.send(JSON.stringify(datad));
    
});

function displayDatad(dataTransformationd)
{
    spand.innerHTML="Data deleted successfully";
}