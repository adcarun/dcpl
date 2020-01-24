function advertisementValidation(frm)
{ 
	if(!checkforfields(frm.AdvLink,"blank,prespace,postspace","Link."))
		return false;
		
	if(frm.AdvImage.value=="" && frm.HdnAdvImage.value=="")
	{
		alert("Please upload Image");
		frm.AdvImage.focus();
		return false;
	}
	if(frm.AdvImage.value!="")
	{ 
		var ext = frm.AdvImage.value.split('.').pop();
		if(ext!= 'png' && ext!= 'PNG' && ext!= 'jpg' && ext!= 'JPG' && ext!= 'jpeg' && ext!= 'JPEG' && ext!= 'gif' && ext!= 'GIF')
		{
			alert("Please upload only png or jpg or jpeg or gif image");
			frm.AdvImage.focus();
			return false;
		} 
	}
	if(!checkforfields(frm.DisplayStatus,"select,blank,prespace,postspace","Display Status."))
		return false;
		
	return true;
}