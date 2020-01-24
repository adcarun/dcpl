function CatValidation(frm)
{ 
	if(!checkforfields(frm.CatWeight,"blank,prespace,postspace,num","Weight."))
		return false;
	if(!checkforfields(frm.CatTitle,"blank,prespace,postspace","Title."))
		return false;
	if(!checkforfields(frm.CatDisplayStatus,"select,blank","Display Status."))
		return false;
		
	return true;
}