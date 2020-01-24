function CheckProjectCode(ProjectCode)
{
	var CompanyId = document.getElementById("CompanyId").value;
	
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
			if(xmlhttp.responseText=='Code already exists')
			{
				alert("Project Code already exists, Please enter another one");
				document.frm.ProjectCode.select();
				document.frm.ProjectCode.focus();
				return false;
			}
		}
	  }
	xmlhttp.open("GET","./CheckProjectCode.php?ProjectCode="+ProjectCode+"&CompanyId="+CompanyId,true);
	xmlhttp.send();	
}