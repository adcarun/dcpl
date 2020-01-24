function AddOpeningBalance(frm)
{ 
	if(!checkforfields(frm.OpeningBalance,"blank,prespace,postspace,fraction","Opening Balance."))
		return false;
	if(!checkforfields(frm.BalanceType,"select,blank","Balance Type."))
		return false;
	
	return true;
}