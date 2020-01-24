function EditTicketBookingValidation(frm)
{
	if(!checkforfields(frm.TBStatus,"select,blank","Status."))
		return false;
	
	return true;
}