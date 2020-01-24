function UploadCarryForwardInvoice(frm)
{ 
	if(!checkforfields(frm.ForwardInvoiceNumber,"blank,prespace,postspace,iscompanyname","Invoice Number."))
		return false;
	if(!checkforfields(frm.ForwardInvoiceDate,"select,blank","Invoice Date."))
		return false;
	if(frm.ForwardInvoiceDate.value > frm.TodaysDate.value)
	{
		alert("Invoice Date should not be greater than today's date");
		frm.ForwardInvoiceDate.focus();
		return false;
	}
	if(!checkforfields(frm.ForwardInvoiceAmount,"blank,prespace,postspace,fraction","Invoice Amount."))
		return false;	
	if(frm.ForwardInvoiceFile.value=="")
	{
		alert("Please upload Invoice");
		frm.ForwardInvoiceFile.focus();
		return false;
	}
	if(frm.ForwardInvoiceFile.value!="")
	{ 
		var ext = frm.ForwardInvoiceFile.value.split('.').pop();
		if(ext!= 'pdf' && ext!= 'PDF')
		{
			alert("Please upload only PDF for Invoice");
			frm.ForwardInvoiceFile.focus();
			return false;
		} 
	}		
	return true;
}