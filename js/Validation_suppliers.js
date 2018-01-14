// JavaScript Document
function validateForm() {
    var first_name = document.forms["myForm"]["fName"].value;
    if (first_name == "") {
        alert("Please input a first name!!");
        return false;
    }
	
	 var last_name = document.forms["myForm"]["sName"].value;
    if (last_name == "") {
        alert("Please input a last name!!");
        return false;
    }
	
	 var organization = document.forms["myForm"]["organization"].value;
    if (organization == "") {
        alert("Please input a organization name!!");
        return false;
    }
	
	 var email = document.forms["myForm"]["email"].value;
    if (email == "") {
        alert("Please input a valid email address!!");
        return false;
    }
	
	 var phone_number = document.forms["myForm"]["cell_number"].value;
    if (phone_number == "") {
        alert("Please input a cellphone number!!");
        return false;
    }
	
	 var reg_number = document.forms["myForm"]["reg_number"].value;
    if (reg_number == "") {
        alert("Please input the company registration number!!");
        return false;
    }
	
	 var location = document.forms["myForm"]["location"].value;
    if (location == "") {
        alert("Please input the company location!!");
        return false;
    }
	
	var product = document.getElementsByName('product[]');
		for (i=0; i<product.length; i++)
			{
			 if (product[i].value == "")
				{
			 	 alert('Please input product name');		 
			 	 return false;
				}
			}
	
	var description = document.getElementsByName('desc[]');
		for (i=0; i<description.length; i++)
			{
			 if (description[i].value == "")
				{
			 	 alert('Please input product description');		 
			 	 return false;
				}
			}
			
		var quantity = document.getElementsByName('qty[]');
		for (i=0; i<quantity.length; i++)
			{
			 if (quantity[i].value == "")
				{
			 	 alert('Please input product quantity');		 
			 	 return false;
				}
			}
	
		var cost = document.getElementsByName('cost[]');
		for (i=0; i<cost.length; i++)
			{
			 if (cost[i].value == "")
				{
			 	 alert('Please input product cost');		 
			 	 return false;
				}
			}
	
}