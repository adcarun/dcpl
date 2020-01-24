function deleteInvoice(Id,TicketId)
{ 
	if(confirm("Are you sure, you really want to delete this record ?"))
	{
		document.frmInvoice.InvoiceId.value=Id;
		document.frmInvoice.TickId.value=TicketId;
		document.frmInvoice.method="POST";
		document.frmInvoice.action="deleteInvoice.php";
		document.frmInvoice.submit();
	}
}