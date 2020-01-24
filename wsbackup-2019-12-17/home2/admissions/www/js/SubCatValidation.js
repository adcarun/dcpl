function SubCatValidation(frm)
{ 
	if(!checkforfields(frm.SubCatWeight,"blank,prespace,postspace,num","Weight."))
		return false;
	if(!checkforfields(frm.SubCatTitle,"blank,prespace,postspace","Title."))
		return false;
	if(!checkforfields(frm.SubCatDisplayStatus,"select,blank","Display Status."))
		return false;
		
	return true;
}