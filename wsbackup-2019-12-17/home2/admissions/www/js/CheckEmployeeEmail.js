function CheckEmployeeEmail(EmpEmail)
{
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			if(xmlhttp.responseText=='Email id already exists')
			{
				alert("Email Id already exists, Please enter another one");
				document.frm.EmpEmail.select();
				document.frm.EmpEmail.focus();
				return false;
			}
		}
	  }
	xmlhttp.open("GET","./checkEmpEmail.php?EmpEmail="+EmpEmail,true);
	xmlhttp.send();	
}