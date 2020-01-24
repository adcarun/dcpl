function UploadInvoice(frm)
{ 
	if(!checkforfields(frm.InvoiceNumber,"blank,prespace,postspace,iscompanyname","Invoice Number."))
		return false;
	if(!checkforfields(frm.InvoiceDate,"select,blank","Invoice Date."))
		return false;
	if(frm.InvoiceDate.value > frm.TodaysDate.value)
	{
		alert("Invoice Date should not be greater than today's date");
		frm.InvoiceDate.focus();
		return false;
	}
	if(!checkforfields(frm.InvoiceAmount,"blank,prespace,postspace,fraction","Invoice Amount."))
		return false;	
	/*if(!checkforfields(frm.InvoiceType,"select,blank","Invoice Type."))
		return false;*/
	if(frm.InvoiceFile.value=="")
	{
		alert("Please upload Invoice");
		frm.InvoiceFile.focus();
		return false;
	}
	if(frm.InvoiceFile.value!="")
	{ 
		var ext = frm.InvoiceFile.value.split('.').pop();
		if(ext!= 'pdf' && ext!= 'PDF')
		{
			alert("Please upload only PDF for Invoice");
			frm.InvoiceFile.focus();
			return false;
		} 
	}		
	return true;
}