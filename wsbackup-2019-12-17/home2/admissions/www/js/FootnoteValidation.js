function FootnoteValidation(frm)
{ 
	if(!checkforfields(frm.FootnoteNo,"select,blank","Footnote No."))
		return false;
	if(!checkforfields(frm.FootnoteDescription,"blank,prespace,postspace","Footnote Description."))
		return false;
	
	return true;
}