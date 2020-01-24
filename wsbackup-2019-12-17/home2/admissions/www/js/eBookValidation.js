function eBookValidation(frm)
{ 
	if(!checkforfields(frm.Weight,"blank,prespace,postspace,num","Weight."))
		return false;
	if(!checkforfields(frm.CatId,"select,blank","Category."))
		return false;	
	if(!checkforfields(frm.BookName,"blank,prespace,postspace","Name."))
		return false;
	if(!checkforfields(frm.BookWriter,"blank,prespace,postspace","Writer."))
		return false;
	if(!checkforfields(frm.BookPublisher,"blank,prespace,postspace","Publisher."))
		return false;
	if(!checkforfields(frm.BookShortDesc,"select,prespace,postspace","Short Description."))
		return false;
	if(frm.BookImage.value=="" && frm.HdnBookImage.value=="")
	{
		alert("Please upload Image");
		frm.BookImage.focus();
		return false;
	}
	if(frm.BookImage.value!="")
	{ 
		var ext = frm.BookImage.value.split('.').pop();
		if(ext!= 'png' && ext!= 'PNG' && ext!= 'jpg' && ext!= 'JPG' && ext!= 'jpeg' && ext!= 'JPEG' && ext!= 'gif' && ext!= 'GIF')
		{
			alert("Please upload only png or jpg or jpeg or gif image");
			frm.BookImage.focus();
			return false;
		} 
	}
	if(!checkforfields(frm.BookLink,"blank,prespace,postspace","Book Link."))
		return false;
	if(!checkforfields(frm.DisplayStatus,"select,blank","Status."))
		return false;
	
	return true;
}