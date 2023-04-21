var btni=document.querySelector("#btni");
var snamei=document.querySelector('#namei');
var sagei=document.querySelector('#agei');
var scityi=document.querySelector('#cityi');
var spani=document.querySelector("#spani");
btni.addEventListener('click',(e)=>{
    e.preventDefault();

    var datai={'name':snamei.value,'age':sagei.value,'city':scityi.value};

    var obji=new XMLHttpRequest();
    obji.open('POST','http://localhost/week9/insert/insert.php',true);
    obji.onload=function()
    {  
        var dataExtractioni=obji.responseText; 
        console.log(dataExtractioni); 
        var dataTransformationi=JSON.parse(dataExtractioni);
        console.log(dataTransformationi);
        displayDatai(dataTransformationi);
        
    };
    obji.send(JSON.stringify(datai));
    
});

function displayDatai(dataTransformationi)
{
    spani.innerHTML="Data inserted successfully";
}