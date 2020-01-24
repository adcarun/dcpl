function HadisCategoryValidation(frm)
{ 
	if(!checkforfields(frm.CatWeight,"blank,prespace,postspace,num","Weight."))
		return false;
	if(!checkforfields(frm.CatName,"blank,prespace,postspace","Category Title."))
		return false;
	if(!checkforfields(frm.CatDisStatus,"select,blank","Display status."))
		return false;
   
   return true;
}