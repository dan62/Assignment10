// JavaScript Document
function validateForm() {
    var shipping = document.forms["myForm"]["shipping"].value;
    if (shipping == "") {
        alert("Please input a shipping address!!");
        return false;
    }
	
	 var purchaseDate = document.forms["myForm"]["purchaseDate"].value;
    if (purchaseDate == "") {
        alert("Please select a purchase date!!");
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