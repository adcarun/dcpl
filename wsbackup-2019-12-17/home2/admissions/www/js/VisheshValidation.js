function VisheshValidation(frm)
{ 
	if(!checkforfields(frm.Weight,"blank,prespace,postspace,num","Weight."))
		return false;
	if(!checkforfields(frm.Title,"blank,prespace,postspace","Title."))
		return false;
		
	if(frm.VisheshImage.value=="" && frm.HdnVisheshImage.value=="")
	{
		alert("Please upload Vishesh Image");
		frm.VisheshImage.focus();
		return false;
	}
	if(frm.VisheshImage.value!="")
	{ 
		var ext = frm.VisheshImage.value.split('.').pop();
		if(ext!= 'png' && ext!= 'PNG' && ext!= 'jpg' && ext!= 'JPG' && ext!= 'jpeg' && ext!= 'JPEG' && ext!= 'gif' && ext!= 'GIF')
		{
			alert("Please upload only png or jpg or jpeg or gif image");
			frm.VisheshImage.focus();
			return false;
		} 
	}
	if(!checkforfields(frm.ShortDescription,"blank,prespace,postspace","Short Description."))
		return false;
		
	var FCKeditor1 = FCKeditorAPI.GetInstance('Description');
	len = FCKeditor1.GetXHTML(true).length;
	if(FCKeditor1.GetXHTML(true) == "" || FCKeditor1.GetXHTML(true) == null)
	{
		alert("Please enter Description.");
		FCKeditor1.Focus();
		return false;
	}
	if(!checkforfields(frm.DisplayStatus,"select,blank,prespace,postspace","Display Status."))
		return false;
		
	return true;
}