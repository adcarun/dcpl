function mContentValidation(frm)
{ 
	if(!checkforfields(frm.Title,"blank","Title."))
		return false;
	if(!checkforfields(frm.MDescription,"blank","Description."))
		return false;
	if(frm.MPhoto.value=="" && frm.HdnMPhoto.value=="")
	{
		alert("Please upload Image");
		frm.MPhoto.focus();
		return false;
	}
	if(frm.MPhoto.value!="")
	{ 
		var ext = frm.MPhoto.value.split('.').pop();
		if(ext!= 'png' && ext!= 'PNG' && ext!= 'jpg' && ext!= 'JPG' && ext!= 'jpeg' && ext!= 'JPEG' && ext!= 'gif' && ext!= 'GIF')
		{
			alert("Please upload only png or jpg or jpeg or gif image");
			frm.MPhoto.focus();
			return false;
		} 
	}
	if(!checkforfields(frm.DisplayStatus,"select,blank","Status."))
		return false;
	
	return true;
}