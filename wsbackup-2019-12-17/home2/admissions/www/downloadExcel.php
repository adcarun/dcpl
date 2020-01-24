<?php
	include("./phpincludes/header_inc.php");
	//$currentRotaryYear = giveCurrentRotaryYear();
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=Enquiry.xls");
	header("Pragma: no-cache");
	header("Expires: 0");
	$con = $_GET['con'];
?>
<html>
<head>
<title>Enquiry-Details</title>
</head>
<body>
<table width="150%" border="1" align="center" cellpadding="0" cellspacing="0" >
  <tr>
    <td width="9%" ><font face="Arial, Helvetica, sans-serif" style="font-size:13px"><strong> School</strong></font></td>
    <td width="8%" ><font face="Arial, Helvetica, sans-serif" style="font-size:13px"><strong> Referred By</strong></font></td>
    <td width="8%" ><font face="Arial, Helvetica, sans-serif" style="font-size:13px"><strong> Name</strong></font></td>
	<td width="8%" ><font face="Arial, Helvetica, sans-serif" style="font-size:13px"><strong> Child Name</strong></font></td>
    <td width="8%" ><font face="Arial, Helvetica, sans-serif" style="font-size:13px"><strong> Location</strong></font></td>
    <td width="8%" ><font face="Arial, Helvetica, sans-serif" style="font-size:13px"><strong> Phone</strong></font></td>
    <td width="8%" ><font face="Arial, Helvetica, sans-serif" style="font-size:13px"><strong> Whatsapp</strong></font></td>
    <td width="7%" ><font face="Arial, Helvetica, sans-serif" style="font-size:13px"><strong> Email</strong></font></td>
    <td width="7%" ><font face="Arial, Helvetica, sans-serif" style="font-size:13px"><strong> Visit Date</strong></font></td>
    <td width="7%" ><font face="Arial, Helvetica, sans-serif" style="font-size:13px"><strong> Counsellors Comments</strong></font></td>
    <td width="7%" ><font face="Arial, Helvetica, sans-serif" style="font-size:13px"><strong> Type</strong></font></td>
    <td width="7%" ><font face="Arial, Helvetica, sans-serif" style="font-size:13px"><strong> Source</strong></font></td>
    <td width="7%" ><font face="Arial, Helvetica, sans-serif" style="font-size:13px"><strong> OtherSource</strong></font></td>
    <td width="7%" ><font face="Arial, Helvetica, sans-serif" style="font-size:13px"><strong> Priority</strong></font></td>
    <td width="7%" ><font face="Arial, Helvetica, sans-serif" style="font-size:13px"><strong> Enquiry Status</strong></font></td>
    <td width="7%" ><font face="Arial, Helvetica, sans-serif" style="font-size:13px"><strong> Assigned To</strong></font></td>
    <td width="7%" ><font face="Arial, Helvetica, sans-serif" style="font-size:13px"><strong> Enquiry Date</strong></font></td>    
  </tr>
  <?php
	$objProduct=new GenericClass("tbl_ongoing_projects");
	//$objCompany=new GenericClass("tbl_company");
	//$objRegion=new GenericClass("tbl_region");
	$objSource=new GenericClass("tbl_source");
	$objStatus=new GenericClass("tbl_site_codes");
	$objAssignedTo=new GenericClass("tbl_manager");
	
	$obj=new GenericClass('tbl_enquiry');
	$arrData=$obj->getDatalimited("Course,ReferredBy,Name,childname,Occupation,City,Phone,Whatsapp,Email,Qualification,PassingYear,Experience,Position,Companyname,Visitdate,Reason,CouselorsComments,Furtheraction,Trainingperiod,PreferredSlot,Type,Source,OtherSource,Priority,Status,AssignedTo,RegTime,EnqTime,Message,FeesDiscount,FeesPaid,FeesBalance"," $con order by RegTime desc",false);
foreach($arrData as $Details)
{
	$ArrProducts=$objProduct->getDatalimited("Name"," where Id = ".$Details['Course'],false);	
?>
  <tr bgcolor="#FFFFFF">
    <td width="8%"><font face="Arial,Helvetica,sans-serif" style="font-size:13px"><strong>
      <?= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($ArrProducts[0]['Name']))) ?>
      </strong></font>
    </td>
    <td width="8%"><font face="Arial,Helvetica,sans-serif" style="font-size:13px"><strong>
      <?= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($Details['ReferredBy']))) ?>
      </strong></font>
    </td>
    <td width="8%"><font face="Arial,Helvetica,sans-serif" style="font-size:13px"><strong>
      <?= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($Details['Name']))) ?>
      </strong></font>
    </td>
	<td width="8%"><font face="Arial,Helvetica,sans-serif" style="font-size:13px"><strong>
      <?= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($Details['childname']))) ?>
      </strong></font>
    </td>
    <td width="8%"><font face="Arial,Helvetica,sans-serif" style="font-size:13px"><strong>
      <?= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($Details['City']))) ?>
      </strong></font>
    </td>
    <td width="8%"><font face="Arial,Helvetica,sans-serif" style="font-size:13px"><strong>
      <?= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($Details['Phone']))) ?>
      </strong></font>
    </td>
    <td width="8%"><font face="Arial,Helvetica,sans-serif" style="font-size:13px"><strong>
      <?= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($Details['Whatsapp']))) ?>
      </strong></font>
    </td>
    <td width="8%"><font face="Arial,Helvetica,sans-serif" style="font-size:13px"><strong>
      <?= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($Details['Email']))) ?>
      </strong></font>
    </td>
    <td width="8%"><font face="Arial,Helvetica,sans-serif" style="font-size:13px"><strong>
      <?= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($Details['Visitdate']))) ?>
      </strong></font>
    </td>
    <td width="8%"><font face="Arial,Helvetica,sans-serif" style="font-size:13px"><strong>
      <?= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes(str_replace(","," ",(str_replace("\n"," ",(str_replace("<br>"," ",$Details['CouselorsComments'])))))))) ?>
      </strong></font>
    </td>	
	<?php 
		if($Details['Type']!='' || $Details['Type'] != NULL){
		$arrType=$objStatus->getDatalimited("Value"," where Id = ".$Details['Type'],false);
	?>	
	<td width="8%"><font face="Arial,Helvetica,sans-serif" style="font-size:13px"><strong>
      <?= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrType[0]['Value']))) ?>
      </strong></font>
    </td>
	<?php }else{ ?>
	<td width="8%"><font face="Arial,Helvetica,sans-serif" style="font-size:13px"><strong>
      NA
      </strong></font>
    </td>
	<?php }
	$arrSource=$objSource->getDatalimited("Title"," where Id = ".$Details['Source'],false);
	?>
	<td width="8%"><font face="Arial,Helvetica,sans-serif" style="font-size:13px"><strong>
      <?= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrSource[0]['Title']))) ?>
      </strong></font>
    </td>
	<td width="8%"><font face="Arial,Helvetica,sans-serif" style="font-size:13px"><strong>
      <?= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($Details['OtherSource']))) ?>
      </strong></font>
    </td>
    <td width="8%"><font face="Arial,Helvetica,sans-serif" style="font-size:13px"><strong>
      <?= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($Details['Priority']))) ?>
      </strong></font>
    </td>
	<?php $arrStatus=$objStatus->getDatalimited("Value"," where Id = ".$Details['Status'],false); ?>
    <td width="8%"><font face="Arial,Helvetica,sans-serif" style="font-size:13px"><strong>
      <?= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrStatus[0]['Value']))) ?>
      </strong></font>
    </td>
	<?php $arrAssignedTo=$objAssignedTo->getDatalimited("Name"," where Id = ".$Details['AssignedTo'],false); ?>
	<td width="8%"><font face="Arial,Helvetica,sans-serif" style="font-size:13px"><strong>
      <?= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($arrAssignedTo[0]['Name']))) ?>
      </strong></font>
    </td>
	<td width="8%"><font face="Arial,Helvetica,sans-serif" style="font-size:13px"><strong>
      <?= htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($Details['RegTime']))) ?>
      </strong></font>
    </td>	
  </tr>
  
<? } ?>
</table>
</html>
</body>