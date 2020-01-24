function pollValidation(frm)
{ 
	if(!checkforfields(frm.PollTitle,"blank,prespace,postspace","Question."))
		return false;
	if(!checkforfields(frm.DisplayStatus,"select,blank","Status."))
		return false;
		
	return true;
}