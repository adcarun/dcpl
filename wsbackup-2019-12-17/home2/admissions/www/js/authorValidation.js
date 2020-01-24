function authorValidation(frm)
{ 
	if(!checkforfields(frm.AuthorName,"blank,prespace,postspace","Author Name."))
		return false;
	if(!checkforfields(frm.DisplayStatus,"select,blank","Status."))
		return false;
		
	return true;
}