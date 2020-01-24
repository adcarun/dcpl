function CrNoteValidation(frm)
{ 
	if(!checkforfields(frm.CrNoteNo,"blank,prespace,postspace,alphanum","Credit Note No."))
		return false;
	if(!checkforfields(frm.CrNoteAmount,"blank,prespace,postspace,fraction","Credit Note Amount."))
		return false;
	if(!checkforfields(frm.CrNoteDesc,"blank,prespace,postspace","Credit Note Description."))
		return false;
	if(frm.CrNotePDF.value=="" && frm.HdnCrNotePDF.value=="")
	{
		alert("Please upload PDF");
		frm.CrNotePDF.focus();
		return false;
	}
	if(frm.CrNotePDF.value!="")
	{ 
		var ext = frm.CrNotePDF.value.split('.').pop();
		if(ext!= 'pdf' && ext!= 'PDF')
		{
			alert("Please upload only PDF File");
			frm.CrNotePDF.focus();
			return false;
		} 
	}
	
	return true;
}