function thoughtsValidation(frm)
{ 
	if(!checkforfields(frm.Thought,"blank,prespace,postspace","Thought."))
		return false;
	if(!checkforfields(frm.DisplayStatus,"select,blank","Status."))
		return false;
		
	return true;
}