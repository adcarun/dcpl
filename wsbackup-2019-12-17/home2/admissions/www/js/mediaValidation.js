function mediaValidation(frm)
{ 
	if(!checkforfields(frm.Weight,"blank,prespace,postspace,num","Weight."))
		return false;
	if(!checkforfields(frm.MediaDate,"select,blank,prespace,postspace","Date."))
		return false;
	if(frm.MediaImage.value!="")
	{ 
		var ext = frm.MediaImage.value.split('.').pop();
		if(ext!= 'png' && ext!= 'PNG' && ext!= 'jpg' && ext!= 'JPG' && ext!= 'jpeg' && ext!= 'JPEG' && ext!= 'gif' && ext!= 'GIF')
		{
			alert("Please upload only png or jpg or jpeg or gif image");
			frm.MediaImage.focus();
			return false;
		} 
	}
	if(!checkforfields(frm.MediaLink,"blank,prespace,postspace","Media Link."))
		return false;
	/*if(frm.MediaPdf.value=="" && frm.HdnMediaPdf.value=="")
	{
		alert("Please upload PDF");
		frm.MediaPdf.focus();
		return false;
	}
	if(frm.MediaPdf.value!="")
	{ 
		var ext = frm.MediaPdf.value.split('.').pop();
		if(ext!= 'pdf' && ext!= 'PDF')
		{
			alert("Please upload only pdf file");
			frm.MediaPdf.focus();
			return false;
		} 
	}*/
	if(!checkforfields(frm.DisplayStatus,"select,blank","Status."))
		return false;
	if(!checkforfields(frm.PhotoDesc,"select,prespace,postspace","Description."))
		return false;
	
		
	return true;
}