function EmployeeValidation(frm)
{ 
	if(!checkforfields(frm.CompanyId,"select,blank","Company."))
		return false;
	if(frm.Salutation[0].checked==false && frm.Salutation[1].checked==false && frm.Salutation[2].checked==false)
	{
		alert("Please select Salutation");
		frm.Salutation[0].focus();
		return false;
	}
	if(!checkforfields(frm.GivenName,"blank,prespace,postspace,name","Given Name."))
		return false;
	if(!checkforfields(frm.SurName,"blank,prespace,postspace,name","Surname."))
		return false;
	if(!checkforfields(frm.DateOfBirth,"select,blank,prespace,postspace","Date Of Birth."))
		return false;
	var BirthDate = trim(frm.DateOfBirth.value);
	var TodaysDate = trim(frm.TodaysDate.value);
	if(BirthDate > TodaysDate)
	{
		alert("Date Of Birth should be less than or equal to today's date");
		frm.DateOfBirth.focus();
		return false;
	}	
	if(!checkforfields(frm.EmpEmail,"blank,prespace,postspace,email","Email."))
		return false;
	if(!checkforfields(frm.PhoneNo,"blank,prespace,postspace,num","Mobile Number."))
		return false;	
	if(!checkforfields(frm.AltPhoneNo,"prespace,postspace,num","Alternate Mobile Number."))
		return false;	
	if(!checkforfields(frm.PassportNo,"blank,prespace,postspace,alphanum","Passport No."))
		return false;
	if(!checkforfields(frm.PassDateOfIssue,"select,blank,prespace,postspace","Passport Date of Issue."))
		return false;
	if(frm.PassDateOfIssue.value > frm.TodaysDate.value)
	{
		alert("Passport Date of Issue should be less than or equal to today's date");
		frm.PassDateOfIssue.focus();
		return false;
	}
	if(!checkforfields(frm.PassDateOfExpiry,"select,blank,prespace,postspace","Passport Date of Expiry."))
		return false;	
	if(frm.PassDateOfIssue.value >= frm.PassDateOfExpiry.value)
	{
		alert("Passport Date of Expiry should be greater than Passport Date of Issue");
		frm.PassDateOfExpiry.focus();
		return false;
	}
	if(!checkforfields(frm.PassBlankPage,"prespace,postspace","Blank Pages."))
		return false;
	if(!checkforfields(frm.SeatPreference,"prespace,postspace,alphanum","Seat Preference."))
		return false;
	if(!checkforfields(frm.Airline1,"prespace,postspace,alphanum","Airline 1."))
		return false;
	if(!checkforfields(frm.FFNNo1,"prespace,postspace,alphanum","FFN Number 1."))
		return false;
	if(!checkforfields(frm.Airline2,"prespace,postspace,alphanum","Airline 2."))
		return false;
	if(!checkforfields(frm.FFNNo2,"prespace,postspace,alphanum","FFN Number 2."))
		return false;
	if(!checkforfields(frm.Airline3,"prespace,postspace,alphanum","Airline 3."))
		return false;
	if(!checkforfields(frm.FFNNo3,"prespace,postspace,alphanum","FFN Number 3."))
		return false;
		
	if(frm.Airline1.value!="" && frm.FFNNo1.value=="")
	{
		alert("Please enter FFN Number 1");
		frm.FFNNo1.focus();
		return false;
	}
	if(frm.Airline1.value=="" && frm.FFNNo1.value!="")
	{
		alert("Please enter Airline Name 1");
		frm.Airline1.focus();
		return false;
	}
	if(frm.Airline2.value!="" && frm.FFNNo2.value=="")
	{
		alert("Please enter FFN Number 2");
		frm.FFNNo2.focus();
		return false;
	}
	if(frm.Airline2.value=="" && frm.FFNNo2.value!="")
	{
		alert("Please enter Airline Name 2");
		frm.Airline2.focus();
		return false;
	}
	if(frm.Airline3.value!="" && frm.FFNNo3.value=="")
	{
		alert("Please enter FFN Number 3");
		frm.FFNNo3.focus();
		return false;
	}
	if(frm.Airline3.value=="" && frm.FFNNo3.value!="")
	{
		alert("Please enter Airline Name 3");
		frm.Airline3.focus();
		return false;
	}
	if(!checkforfields(frm.EmpStatus,"select,blank","Display status."))
		return false;
   
   return true;
}