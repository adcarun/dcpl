function ReportValidation(frm)
{ 
	
	if(!checkforfields(frm.ReportCompanyId,"select,blank","Comapny."))
		return false;
	if(!checkforfields(frm.ReportTitle,"blank,prespace,postspace,iscompanyname","Report Title."))
		return false;
	if(frm.Report.value=="" && frm.HdnReport.value=="")
	{
		alert("Please upload Report");
		frm.Report.focus();
		return false;
	}
	if(frm.Report.value!="")
	{ 
		var ext = frm.Report.value.split('.').pop();
		if(ext!= 'pdf' && ext!= 'PDF')
		{
			alert("Please upload only PDF for Report");
			frm.Report.focus();
			return false;
		} 
	}	
	if(!checkforfields(frm.ReportStatus,"select,blank","Status."))
		return false;
		
	return true;
}