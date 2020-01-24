function ChapterValidation(frm)
{ 
	if(!checkforfields(frm.ChWeight,"blank,prespace,postspace,num","Weight."))
		return false;
	if(!checkforfields(frm.ChNo,"blank,prespace,postspace,num","Chapter No."))
		return false;
	if(!checkforfields(frm.ChMTitle,"blank,prespace,postspace","Marathi Title."))
		return false;
	if(!checkforfields(frm.ChATitle,"blank,prespace,postspace","Arabic Title."))
		return false;
	if(!checkforfields(frm.ChVerse,"blank,num,prespace,postspace","Total Verse."))
		return false;
	if(!checkforfields(frm.VerSection,"select,blank","Section."))
		return false;
	if(!checkforfields(frm.ChStatus,"select,blank","Display Status."))
		return false;
		
	return true;
}

