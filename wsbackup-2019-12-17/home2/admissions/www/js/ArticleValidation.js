function ArticleValidation(frm)
{ 
	if(!checkforfields(frm.ArticleWeight,"blank,prespace,postspace,num","Weight."))
		return false;
	if(!checkforfields(frm.ArticleAuthor,"select,blank","Article Author."))
		return false;
	if(!checkforfields(frm.ArticleTitle,"blank,prespace,postspace","Title."))
		return false;
		
	if(frm.ArticleImage.value=="" && frm.HdnArticleImage.value=="")
	{
		alert("Please upload Article Image");
		frm.ArticleImage.focus();
		return false;
	}
	if(frm.ArticleImage.value!="")
	{ 
		var ext = frm.ArticleImage.value.split('.').pop();
		if(ext!= 'png' && ext!= 'PNG' && ext!= 'jpg' && ext!= 'JPG' && ext!= 'jpeg' && ext!= 'JPEG' && ext!= 'gif' && ext!= 'GIF')
		{
			alert("Please upload only png or jpg or jpeg or gif image");
			frm.ArticleImage.focus();
			return false;
		} 
	}
	if(!checkforfields(frm.ArticleShortDescription,"blank,prespace,postspace","Short Description."))
		return false;
		
	var FCKeditor1 = FCKeditorAPI.GetInstance('ArticleDescription');
	len = FCKeditor1.GetXHTML(true).length;
	if(FCKeditor1.GetXHTML(true) == "" || FCKeditor1.GetXHTML(true) == null)
	{
		alert("Please enter Description.");
		FCKeditor1.Focus();
		return false;
	}
	var FCKeditor1 = FCKeditorAPI.GetInstance('ArticleDescription');
	len = FCKeditor1.GetXHTML(true).length;
	if(FCKeditor1.GetXHTML(true) == "" || FCKeditor1.GetXHTML(true) == null)
	{
		alert("Please enter Description.");
		FCKeditor1.Focus();
		return false;
	}
	
	if(!checkforfields(frm.ArticleDisplayStatus,"select,blank,prespace,postspace","Display Status."))
		return false;
		
	return true;
}