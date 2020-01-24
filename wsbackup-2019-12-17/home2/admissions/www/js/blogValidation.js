function blogValidation(frm)
{ 
	if(!checkforfields(frm.BTitle,"blank,prespace,postspace","Title."))
		return false;
	if(!checkforfields(frm.BCatId,"select,blank","Category."))
		return false;	
	if(!checkforfields(frm.BShortDesc,"blank,prespace,postspace","Short Description."))
		return false;
	var FCKeditor1 = FCKeditorAPI.GetInstance('BDescription');
	len = FCKeditor1.GetXHTML(true).length;
	if(FCKeditor1.GetXHTML(true) == "" || FCKeditor1.GetXHTML(true) == null)
	{
		alert("Please enter Brief Description.");
		FCKeditor1.Focus();
		return false;
	}	
	if(!checkforfields(frm.BAuthorId,"select,blank","Author."))
		return false;
	if(!checkforfields(frm.DisplayStatus,"select,blank","Status."))
		return false;
	
	return true;
}