function audioValidation(frm)
{ 
	if(!checkforfields(frm.Weight,"blank,prespace,postspace,num","Weight."))
		return false;
	if(!checkforfields(frm.Title,"blank,prespace,postspace","Title."))
		return false;
	
	if(frm.AudioFile.value=="" && frm.HdnAudioFile.value=="")
	{
		alert("Please upload File");
		frm.AudioFile.focus();
		return false;
	}
	if(frm.AudioFile.value!="")
	{ 
		var ext = frm.AudioFile.value.split('.').pop();
		if(ext!= 'mp3' && ext!= 'MP3')
		{
			alert("Please upload only Mp3 file");
			frm.AudioFile.focus();
			return false;
		} 
	}
	if(!checkforfields(frm.DisplayStatus,"select,blank","Status."))
		return false;
	
	return true;
}