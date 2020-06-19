
input_box=document.getElementById("newsearch")
   output=document.getElementById("outputt")
   navinput_box=document.getElementById("navsearch")
   navoutput=document.getElementById("navoutput")
   close_btn=document.getElementById("close")
   
   form=document.getElementById("form")
   if(form){
   form.addEventListener("submit",notsubmit,false)}
   formb=document.getElementById("formbihar")
   if(formb){
   formb.addEventListener("submit",notsubmit,false)}
  function notsubmit(e)
{
e.preventDefault();
}
   close_btn.onclick=function()
   {
    input_box.value=''
    output.innerHTML=""
    output.style.display="none"
   }
   input_box.addEventListener("keydown",(e)=>
   {
    output.style.display="block"
output.innerHTML=`<div class='progress'><div class='indeterminate'></div></div>`
q=e.target.value
const xhr=new XMLHttpRequest();
xhr.open("GET","js/search.php?q="+q,true)
xhr.onload=function()
{
    if(xhr.status==200)
    {
output.innerHTML=''
output.innerHTML=xhr.responseText
    }
    else{
        alert("Something went wrong.")
    }
}
if(q.length>=2)
{
    xhr.send();
}
if(q.length==0)
{
   debugger;
    output.innerHTML=""
    output.style.display="none"
}
   })

   close_btn.onclick=function()
   {
    
    navoutput.style.display="none"
    navinput_box.value=''
    navoutput.innerHTML=""
   
   }
   navinput_box.addEventListener("keydown",(e)=>
   {
   
    navoutput.style.display="block"
navoutput.innerHTML=`<div class='progress'><div class='indeterminate'></div></div>`
q=e.target.value
const xhr=new XMLHttpRequest();
xhr.open("GET","js/search.php?q="+q,true)
xhr.onload=function()
{
    if(xhr.status==200)
    {
navoutput.innerHTML=''
navoutput.innerHTML=xhr.responseText
    }
    else{
        alert("Something went wrong.")
    }
}
if(q.length>=2)
{
    xhr.send();
}
if(q.length==0)
{
   
    navoutput.innerHTML=""
    navoutput.style.display="none"
}
   })
   navinput_box.addEventListener("keydown",(e)=>
   {
   
    if (e.keyCode == 8) {
    
        navoutput.innerHTML=""
        navoutput.style.display="none"
    }


})

 