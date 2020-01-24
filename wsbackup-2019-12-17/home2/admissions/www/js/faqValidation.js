function faqValidation(frm)
{ 
	if(!checkforfields(frm.Weight,"blank,prespace,postspace,num","Weight."))
		return false;
	if(!checkforfields(frm.Question,"blank,prespace,postspace","Question."))
		return false;
	if(!checkforfields(frm.Answer,"blank,prespace,postspace","Answer."))
		return false;
	if(!checkforfields(frm.DisplayStatus,"select,blank","Status."))
		return false;
		
	return true;
}