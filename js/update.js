var btnu=document.querySelector("#btnu");
var sidu=document.querySelector('#idu');
var snameu=document.querySelector('#nameu');
var sageu=document.querySelector('#ageu');
var scityu=document.querySelector('#cityu');
var spanu=document.querySelector("#spanu");
btnu.addEventListener('click',(e)=>{
    e.preventDefault();

    var datau={'id':sidu.value, 'name':snameu.value,'age':sageu.value,'city':scityu.value};

    var obju=new XMLHttpRequest();
    obju.open('PUT','http://localhost/week9/update/update.php',true);
    obju.onload=function()
    {  
        var dataExtractionu=obju.responseText;  
        var dataTransformationu=JSON.parse(dataExtractionu);
        console.log(dataTransformationu);
        displayDatau(dataTransformationu);
        
    };
    obju.send(JSON.stringify(datau));
    
});

function displayDatau(dataTransformationu)
{
    spanu.innerHTML="Data updated successfully";
}