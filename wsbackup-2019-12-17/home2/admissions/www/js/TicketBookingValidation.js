function TicketBookingValidation(frm)
{ 
	if(!checkforfields(frm.TBBookingTypeId,"select,blank","Booking Type."))
		return false;
	if(!checkforfields(frm.TBCompanyId,"select,blank","Company."))
		return false;
	if(!checkforfields(frm.TBEmployeeId,"select,blank","Employee."))
		return false;	
	if(!checkforfields(frm.TBProjectCode,"select,blank","Project Code."))
		return false;
	if(!checkforfields(frm.TBAuthPerson,"select,blank","Authorised Person."))
		return false;	
	if(!checkforfields(frm.TBAmount,"blank,prespace,postspace,fraction","Amount."))
		return false;	
	if(trim(frm.TBDescription.value)=="")
	{
		alert("Please enter Booking Description");
		frm.TBDescription.focus();
		return false;
	}
	if(!checkforfields(frm.TBDescription,"blank,prespace,postspace","Booking Description."))
		return false;	
	if(!checkforfields(frm.TBDateOfDeparture,"select,blank,prespace,postspace","Date of Departure."))
		return false;
	if(frm.TBDateOfDeparture.value < frm.TodaysDate.value)
	{
		alert("Date of Departure should be greater than or equal to today's date");
		frm.TBDateOfDeparture.focus();
		return false;
	}	
	if(!checkforfields(frm.TBDateOfArrival,"select,blank,prespace,postspace","Date of Arrival."))
		return false;
	
	if(frm.TBDateOfDeparture.value > frm.TBDateOfArrival.value)
	{
		alert("Date of Arrival should be greater than Date of Departure");
		frm.TBDateOfArrival.focus();
		return false;
	}	
	
	if(!checkforfields(frm.TBCity,"select,blank","City of Travel."))
		return false;
	
	if(!checkforfields(frm.TBStatus,"select,blank","Status."))
		return false;
	
	if(frm.TBStatus.value=='AT')
	{
		if(!checkforfields(frm.TBTravelAgentDescription,"blank,prespace,postspace","Travel Agent Ticket Booking Description."))
			return false;
		if(!checkforfields(frm.TBTicketStatus,"select,blank","Ticket Booking Status."))
			return false;
	}
	
	return true;
}