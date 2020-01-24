function videoValidation(frm)
{ 
	if(!checkforfields(frm.Weight,"blank,prespace,postspace,num","Weight."))
		return false;
	if(!checkforfields(frm.Title,"blank,prespace,postspace","Title."))
		return false;
	if(!checkforfields(frm.VideoCode,"blank,prespace,postspace","Video Code."))
		return false;
	if(frm.VideoImg.value=="" && frm.HdnVideoImg.value=="")
	{
		alert("Please upload Photo");
		frm.VideoImg.focus();
		return false;
	}
	if(frm.VideoImg.value!="")
	{ 
		var ext = frm.VideoImg.value.split('.').pop();
		if(ext!= 'png' && ext!= 'PNG' && ext!= 'jpg' && ext!= 'JPG' && ext!= 'jpeg' && ext!= 'JPEG' && ext!= 'gif' && ext!= 'GIF')
		{
			alert("Please upload only png or jpg or jpeg or gif image");
			frm.VideoImg.focus();
			return false;
		} 
	}	
	if(!checkforfields(frm.DisplayStatus,"select,blank","Status."))
		return false;
		
	return true;
}