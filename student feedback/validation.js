function validation()
{
     var pw=document.getElementById("Password").value;
     var pn=document.getElementById("Phone").value;
    //  var fn=document.getElementById("Firstname").value;
    //  var ln=document.getElementById("Lastname").value;
        if(pw.length < 8) {  
        document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";  
        return false;  
     }  

     if(pw.length > 15) {  
        document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";  
        return false;  
     } 
   
      if(pn.length<10)
      {
        document.getElementById("message1").innerHTML = "**Please Enter 10 Digit Phone Number";  
        return false;  
      }
      
      if(pn.length>10)
      {
        document.getElementById("message1").innerHTML = "**Please Enter 10 Digit Phone Number";  
        return false;  
      }
    

}