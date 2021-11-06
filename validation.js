function validateform(){  
    var name=document.form.username.value;  
    var password=document.form.password.value;
    var email=document.form.email.value;       
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
    if (name==null || name==""){  
      alert("Name can't be blank");  
      return false;  
      }else if(!(email.match(mailformat))){  
      alert("invalid email.");  
      return false;  
    }else if(password.length<6){  
      alert("Password should atleast be 6 charcaters long");  
      return false;   
    }}  