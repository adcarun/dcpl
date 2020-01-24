function ProjectValidation(frm)
{ 
	if(!checkforfields(frm.CompanyId,"select,blank","Company."))
		return false;
	if(!checkforfields(frm.ProjectCode,"blank,prespace,postspace,ProjectCode","Project Code."))
		return false;
	if(!checkforfields(frm.ProjectStatus,"select,blank","Display status."))
		return false;
   
   return true;
}