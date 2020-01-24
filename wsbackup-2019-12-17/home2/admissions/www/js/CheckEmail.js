function CheckMDEmail(MDEmail)
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
				alert("MD Email Id already exists, Please enter another one");
				document.frm.CompanyMDEmail.select();
				document.frm.CompanyMDEmail.focus();
				return false;
			}
		}
	  }
	xmlhttp.open("GET","./checkMDEmail.php?MDEmail="+MDEmail,true);
	xmlhttp.send();	
}

function CheckACEmail(ACEmail)
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
				alert("A/C Person Email Id already exists, Please enter another one");
				document.frm.CompanyACPerEmail.select();
				document.frm.CompanyACPerEmail.focus();
				return false;
			}
		}
	  }
	xmlhttp.open("GET","./checkACEmail.php?ACEmail="+ACEmail,true);
	xmlhttp.send();	
}

function CheckCompanyName(CompanyName)
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
			if(xmlhttp.responseText=='Name id already exists')
			{
				alert("Company name Id already exists, Please enter another one");
				document.frm.CompanyName.select();
				document.frm.CompanyName.focus();
				return false;
			}
		}
	  }
	xmlhttp.open("GET","./CheckCompanyName.php?CompanyName="+CompanyName,true);
	xmlhttp.send();	
}
