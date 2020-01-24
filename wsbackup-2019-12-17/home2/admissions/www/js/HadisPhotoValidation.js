function HadisPhotoValidation(frm)
{ 
	if(!checkforfields(frm.PhotoWeight,"blank,prespace,postspace,num","Weight."))
		return false;
	if(!checkforfields(frm.PhotoTitle,"blank,prespace,postspace","Photo Title."))
		return false;
	if(frm.PhotoImg.value=="" && frm.HdnPhotoImg.value=="")
	{
		alert("Please upload Photo");
		frm.PhotoImg.focus();
		return false;
	}
	if(frm.PhotoImg.value!="")
	{ 
		var ext = frm.PhotoImg.value.split('.').pop();
		if(ext!= 'png' && ext!= 'PNG' && ext!= 'jpg' && ext!= 'JPG' && ext!= 'jpeg' && ext!= 'JPEG' && ext!= 'gif' && ext!= 'GIF')
		{
			alert("Please upload only png or jpg or jpeg or gif image");
			frm.PhotoImg.focus();
			return false;
		} 
	}	
	if(!checkforfields(frm.PhotoDesc,"select,prespace,postspace","Description."))
		return false;
	if(!checkforfields(frm.PhotoStatus,"select,blank","Status."))
		return false;
		
	return true;
}