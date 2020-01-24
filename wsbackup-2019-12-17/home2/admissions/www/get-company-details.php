<?php
	
	include("./phpincludes/header_inc.php");
	if($_POST['CId']!='')
	{
		$obj=new GenericClass("tbl_company");
		$arrCompany=$obj->getDatalimited("*"," where Id = ".$_POST['CId'],false);
		?>
        <?php /*?><div class="form-group">
                <label class="control-label col-md-3" for="masked_phone">Company Division :</label>
                <div class="col-md-4">
                    <?=$arrCompany[0]['CDivision']?>
                </div>
            </div><?php */?>
        	<div class="form-group">
                <label class="control-label col-md-3" for="masked_phone">Company Address :</label>
                <div class="col-md-4">
                    <?=$arrCompany[0]['CAddress']?>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3" for="masked_phone">Company Phone :</label>
                <div class="col-md-4">
                    <?=$arrCompany[0]['CPhoneNo']?>
                </div>
            </div>
        <?php
	}
?>