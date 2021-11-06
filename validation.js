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
    
    function validateBooking(){  
        var name=document.book.fname.value;
        var age=document.book.age.value;
        var address=document.book.address.value;
        var date=document.book.date.value;         
        if (name==null || name==""){  
          alert("Name can't be blank");  
          return false;  
          }else  if (age==null || age==0){  
            alert("Age can't be blank");  
            return false; 
        }else if (address==null || address==""){  
            alert("Address can't be blank");  
            return false;
        }else if (date==null || date=="0000-00-00" || date==0000-00-00){  
            alert("Enter a Valid Date");  
            return false;
        }}  