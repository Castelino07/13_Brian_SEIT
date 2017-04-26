function myFunction() {

 
 var x = document.forms["myForm"]["fname"];
    if (x.value == "") {
        alert("First Name should not be blank !!");
        return false;
    }

	if (! allLetter(x)) {
		 alert("Name should be all characters!!");
		 return false;
	}
	
var x = document.forms["myForm"]["nname"];
    if (x.value == "") {
        alert(" Nick Name should not be blank !!");
        return false;
    }

	if (! allLetter(x)) {
		 alert("Name should be all characters!!");
		 return false;
	}

var x = document.forms["myForm"]["lname"];
    if (x.value == "") {
        alert("Last Name should not be blank !!");
        return false;
    }

	if (! allLetter(x)) {
		 alert("Name should be all characters!!");
		 return false;
	}

var a = document.forms["myForm"]["bday"].value; 
  
   
	Check = /^([0-9]{2})-([0-9]{2})-([0-9]{4})$/; 
    if(!a.match(Check)) {  
     alert("Error: Date format: ##-##-#### ");  
     return false;  
    }  

var y = document.forms["myForm"]["num"];

  if (y.value == "") {
                alert("Contact No. should not be blank !!");
		            
		return false;
            }

	if (! allnumeric(y)) {
		 alert('Please input numeric characters only');
      return false;
	}

var z = document.forms["myForm"]["em"];

  if (z.value == "") {
                alert("Email should not be blank !!");
		            
		return false;
            }

	if (! ValidateEmail(z)) {
		 alert('Please input valid Email ID!!!');
      return false;
	}


var t = document.forms["myForm"]["number"];


	
	if (deptselect(t)) {
		 alert('Select a proper Semester');
      return false;
	}


 }






            function allLetter(inputtxt)
                {
                 var letters = /^[A-Za-z]+$/;
                 if(inputtxt.value.match(letters))
                   {
              	     return true;
                   }
                 else
                   {
              	     return false;
                   }
                }


            function allnumeric(inputtxt)
               {
                  var numbers = /^[0-9]+$/;
                  if(inputtxt.value.match(numbers))
                  {
                    return true;
                  }
                  else
                  {
                    return false;
                  }
               }

  

            function limit(element,limit)
              {
                var max_chars = limit;

                  if(element.value.length > max_chars) {
                    element.value = element.value.substr(0, max_chars);
                  }
              }

			
			 
			function ValidateEmail(inputText)
			 {
				var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
				if(inputText.value.match(mailformat))
					{
					
					return true;
					}
				else
					{
					return false;
					}
			}

			function deptselect(dept)
				{
					
					if(dept.value == "no")
					{
						 alert('no');
						return false;
					}
					else
					{
						 alert('yes');
						return true;
					}
				}
