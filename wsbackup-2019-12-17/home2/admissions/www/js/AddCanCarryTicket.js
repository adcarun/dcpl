function AddCanCarryTicket(frm)
{ 
	if(frm.TBTicketType[0].checked==false && frm.TBTicketType[1].checked==false)
	{
		alert("Please select Ticket Type");
		return false;
	}
	if(!checkforfields(frm.TBAuthPerson,"select,blank","Authorised Person."))
		return false;
	if(!checkforfields(frm.TBAmount,"blank,prespace,postspace,fraction","Amount."))
		return false;
	if(!checkforfields(frm.TBDescription,"blank,prespace,postspace","Description."))
		return false;	
	if(frm.TBTicketType[1].checked==true)
	{
		if(!checkforfields(frm.TBDateOfDeparture,"select,blank,prespace,postspace","Date of Departure."))
			return false;
		/*if(frm.TBDateOfDeparture.value > frm.TodaysDate.value)
		{
			alert("Date of Departure should be greater than or equal to today's date");
			frm.TBDateOfDeparture.focus();
			return false;
		}	*/
		if(!checkforfields(frm.TBDateOfArrival,"select,blank,prespace,postspace","Date of Arrival."))
			return false;	
		if(frm.TBDateOfDeparture.value > frm.TBDateOfArrival.value)
		{
			alert("Date of Arrival should be greater than Date of Departure");
			frm.TBDateOfArrival.focus();
			return false;
		}	
	}
	if(!checkforfields(frm.TBStatus,"select,blank","Status."))
		return false;	
	if(frm.TBStatus.value=='AT')
	{
		if(!checkforfields(frm.TBTravelAgentDescription,"blank,prespace,postspace","Travel Agent Ticket Booking Description."))
			return false;
		if(document.getElementById('Carry-forward').checked==true)
		{
			if(!checkforfields(frm.TBTicketStatus,"select,blank","Ticket Booking Status."))
				return false;	
		}
	}
	return true;
}