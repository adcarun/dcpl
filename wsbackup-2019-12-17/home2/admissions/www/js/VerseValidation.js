function VerseValidation(frm)
{ 
	if(!checkforfields(frm.VerWeight,"blank,prespace,postspace,num","Weight."))
		return false;
	if(!checkforfields(frm.VerNo,"blank,prespace,postspace,num","Verse Number."))
		return false;
	var FCKeditor1 = FCKeditorAPI.GetInstance('VerArabic');
	len = FCKeditor1.GetXHTML(true).length;
	if(FCKeditor1.GetXHTML(true) == "" || FCKeditor1.GetXHTML(true) == null)
	{
		alert("Please enter Arabic Verse.");
		FCKeditor1.Focus();
		return false;
	}
	
	var FCKeditor1 = FCKeditorAPI.GetInstance('VerMarathi');
	len = FCKeditor1.GetXHTML(true).length;
	if(FCKeditor1.GetXHTML(true) == "" || FCKeditor1.GetXHTML(true) == null)
	{
		alert("Please enter Marathi Verse.");
		FCKeditor1.Focus();
		return false;
	}
	if(!checkforfields(frm.VerFootNotes,"blank,prespace,postspace,num","Total Footnotes."))
		return false;
	/*if(!checkforfields(frm.VerStatus,"select,blank,prespace,postspace","Display Status."))
		return false;*/
		
	return true;
}