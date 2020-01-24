function vRegValidation(frm)
{ 
	if(!checkforfields(frm.Name,"blank,prespace,postspace","Name."))
		return false;
	if(!checkforfields(frm.Email,"blank,prespace,postspace,email","Email."))
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
	if(!checkforfields(frm.DateOfBirth,"select,blank","Date Of Birth."))
		return false;
		
	if(frm.DateOfBirth.value!='')
	{ 
		var startyear = "1910";
		var endyear = "2020";
		var dat = new Date();
		var curday = dat.getDate();
		var curmon = dat.getMonth()+1;
		var curyear = dat.getFullYear();
		function datediff(date1, date2) 
		{
			var y1 = date1.getFullYear(), m1 = date1.getMonth(), d1 = date1.getDate(),
			y2 = date2.getFullYear(), m2 = date2.getMonth(), d2 = date2.getDate();
			if (d1 < d2) 
			{
				m1--;
				d1 += DaysInMonth(y2, m2);
			}
			if (m1 < m2)
			{
				y1--;
				m1 += 12;
			}
			return [y1 - y2, m1 - m2, d1 - d2]; 
		} 
		var str = frm.DateOfBirth.value;
		var date = str.split("-");
		var calday = date[2];
		var calmon = date[1];
		var calyear = date[0];
		var curd = new Date(curyear,curmon-1,curday);
		var cald = new Date(calyear,calmon-1,calday);
		var diff =
		Date.UTC(curyear,curmon,curday,0,0,0) - Date.UTC(calyear,calmon,calday,0,0,0);
		var dife = datediff(curd,cald);
		if(dife[0]<18)
		{
			alert("You are not eligible for registration");
			frm.DateOfBirth.focus();
			return false;
		}
	}
	
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
	if(!checkforfields(frm.ApprovStatus,"select,blank","Status."))
		return false;
	
	return true;
}