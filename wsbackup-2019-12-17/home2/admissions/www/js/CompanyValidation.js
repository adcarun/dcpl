function CompanyValidateForm(frm)
{ 
	if(!checkforfields(frm.CompanyName,"blank,prespace,postspace,companyname","Company Name."))
		return false;
	if(!checkforfields(frm.CompanyAddress,"blank,prespace,postspace","Address."))
		return false;
	if(!checkforfields(frm.CompanyPhone,"blank,prespace,postspace,phone","Phone."))
		return false;
	if(frm.CompanyPhone.value!="")
	{
		var Phone = frm.CompanyPhone.value;
		if(Phone.length<10)
		{
			alert("Please enter min 10 digit for phone number");
			frm.CompanyPhone.focus();
			return false;
		}
	}
	if(frm.CompanyLogo.value=="" && frm.HdnCompanyLogo.value=="")
	{
		alert("Please upload Logo");
		frm.CompanyLogo.focus();
		return false;
	}
	if(frm.CompanyLogo.value!="")
	{ 
		var ext = frm.CompanyLogo.value.split('.').pop();
		if(ext!= 'jpg' && ext!= 'JPG' && ext!= 'jpeg' && ext!= 'JPEG' && ext!= 'png' && ext!= 'PNG' && ext!= 'gif' && ext!= 'GIF')
		{
			alert("Please upload only jpg or jpeg or png or gif image for Logo");
			frm.CompanyLogo.focus();
			return false;
		} 
	}	
	if(!checkforfields(frm.CompanyMDName,"blank,prespace,postspace,name","MD Name."))
		return false;
	if(!checkforfields(frm.CompanyMDEmail,"blank,prespace,postspace,email","Email Id."))
		return false;
	if(!checkforfields(frm.CompanyACPerName,"blank,prespace,postspace,name","A/C Person Name."))
		return false;
	if(!checkforfields(frm.CompanyACPerEmail,"blank,prespace,postspace,email","Email Id."))
		return false;
	if(!checkforfields(frm.CompanyStatus,"select,blank","Display status."))
		return false;
   
   return true;
}