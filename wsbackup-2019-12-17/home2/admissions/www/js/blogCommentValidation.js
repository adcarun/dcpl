function blogCommentValidation(frm)
{ 
	if(!checkforfields(frm.DisplayStatus,"select,blank","Status."))
		return false;
	
	return true;
}