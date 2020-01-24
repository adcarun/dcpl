function updateProValidation(frm)
{ 
	if(!checkforfields(frm.Name,"blank,prespace,postspace","Name."))
		return false;
	if(!checkforfields(frm.Phone,"blank,prespace,postspace,phone","Phone."))
		return false;
	if(!checkforfields(frm.Address,"blank,prespace,postspace","Address."))
		return false;
	if(!checkforfields(frm.City,"select,blank","City."))
		return false;
	if(!checkforfields(frm.Comment,"blank,prespace,postspace","Comment."))
		return false;
	if(!checkforfields(frm.EductionQualification,"blank,prespace,postspace","Eduction Qualification."))
		return false;
	if(frm.Gender[0].checked==false && frm.Gender[1].checked==false)
	{
		alert("Please select Gender");
		frm.Gender[0].focus();
		return false;
	}
	if(frm.Photo.value!="")
	{ 
		var ext = frm.Photo.value.split('.').pop();
		if(ext!= 'jpg' && ext!= 'JPG' && ext!= 'jpeg' && ext!= 'JPEG' && ext!= 'png' && ext!= 'PNG' && ext!= 'gif' && ext!= 'GIF')
		{
			alert("Please upload only jpg or jpeg or png or gif image for Logo");
			frm.Photo.focus();
			return false;
		} 
	}	
	var chks = document.getElementsByName('InterestOfWork[]');
	var hasChecked = false;
	for (var i = 0; i < chks.length; i++)
	{
		if (chks[i].checked)
		{
			hasChecked = true;
			break;
		}
	}
	if (hasChecked == false)
	{
		alert("Please select at least one Interest Of Work.");
		return false;
	}
	if(!checkforfields(frm.AboutMe,"blank,prespace,postspace","About Me."))
		return false;
	return true;
}