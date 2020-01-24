// JavaScript Document

function validateLogin(frm)
{
	if(!checkforfields(frm.username,"blank,email,prespace,postspace","Username."))
		return false;
	if(!checkforfields(frm.password,"blank,prespace,postspace","Password."))
		return false;
	return true;
}