function showHideDiv(displayFlag)
{
	if(document.getElementById(displayFlag).style.display=='none')
		document.getElementById(displayFlag).style.display='block';
	else
		document.getElementById(displayFlag).style.display='none';
}
function clearSearch(frm, arr)
{	
	for(var i=0; i < arr.length; i++)
		document.getElementById(arr[i]).value="";
	frm.submit();
}
function AddRecord(pageName)
{
	document.frm.action=pageName;
	document.frm.submit();
}

function DeleteRecordNew(id, table_name,ret_page, message, pageName)
{ 
	var answer=confirm(message);
	if(answer)
	{
		document.frm.id.value=id;
		document.frm.table_name.value=table_name;
		document.frm.ret_page.value=ret_page;
		document.frm.action=pageName;
		document.frm.submit();
	}
}
function DeleteRecordNewImage(id, table_name,ret_page, message, pageName, imgname)
{ 
	var answer=confirm(message);
	if(answer)
	{ 
		document.frm.id.value=id;
		document.frm.table_name.value=table_name;
		document.frm.ret_page.value=ret_page;
		document.frm.action=pageName;
		document.frm.delimgname.value=imgname;
		document.frm.submit();
	}
}
function DeleteRecordNewImagenvdeo(id, table_name,ret_page, message, pageName, imgname, vdoname)
{ 
	var answer=confirm(message);
	if(answer)
	{ 
		document.frm.id.value=id;
		document.frm.table_name.value=table_name;
		document.frm.ret_page.value=ret_page;
		document.frm.action=pageName;
		document.frm.delimgname.value=imgname;
		document.frm.delvdoname.value=vdoname;
		document.frm.submit();
	}
}

function DeleteRecord(id, message, pageName)
{
	var answer=confirm(message);
	if(answer)
	{
		document.frm.id.value=id;
		document.frm.action=pageName;
		document.frm.submit();
	}
}

function ViewRecord(id, pageName)
{
	document.frm.id.value=id;
	document.frm.action=pageName;
	document.frm.submit();
}
function EditRecord(id, pageName)
{
	document.frm.id.value=id;
	document.frm.action=pageName;
	document.frm.submit();
}

function EnquiryDetails(id, pageName)
{
	document.frm.srch_Product.value=id;
	document.frm.action=pageName;
	document.frm.submit();
}

function EnquiryDetails1(id, pageName)
{
	document.frm.srch_Product1.value=id;
	document.frm.action=pageName;
	document.frm.submit();
}

function ExecutiveEnquiryDetails(id, pageName)
{
	document.frm.srch_AssignedTo.value=id;
	document.frm.action=pageName;
	document.frm.submit();
}

function ViewEnquiryDetails(id,status,pageName)
{
	document.frm.srch_Product.value=id;
	document.frm.srch_Status.value=status;
	document.frm.action=pageName;
	document.frm.submit();
}
function ViewEnquiryDetailsSource(id,status,pageName)
{
	document.frm.srch_Source.value=id;
	document.frm.srch_Status.value=status;
	document.frm.action=pageName;
	document.frm.submit();
}

function ViewExecutiveEnquiryDetails(id,status,pageName)
{
	document.frm.srch_AssignedTo.value=id;
	document.frm.srch_Status.value=status;
	document.frm.action=pageName;
	document.frm.submit();
}


function changeStatus(id, status, message, pageName)
{
	var answer=confirm(message);
	if(answer)
	{
		document.frm.id.value=id;
		document.frm.status.value=status;
		document.frm.action=pageName;
		document.frm.submit();
	}
}
function AddField(id, pageName)
{
	document.frm.send_FormId.value=id;
	document.frm.action=pageName;
	document.frm.submit();
}

function goToPage(formName, pageName)
{
	document.frm.srch_FormName.value=formName;
	document.frm.action=pageName;
	document.frm.submit();
}
function goBack(frm, pageName)
{
	document.frm.action=pageName;
	document.frm.submit();
}
function goBacknew(frm, pageName)
{
	document.frm.action=pageName;
	document.getElementById('EId').value="";
	document.frm.submit();
}
function DeleteMultipleRecord(id, table_name,ret_page, message, message1, corr_tablename, col_name, pageName, imgname)
{
	var answer=confirm(message);
	if(answer)
	{ 
		var answer1=confirm(message1);
		if(answer1)
		{
			document.frm.id.value=id;
			document.frm.table_name.value=table_name;
			document.frm.ret_page.value=ret_page;
			document.frm.corr_tablename.value=corr_tablename;
			document.frm.col_name.value=col_name
			document.frm.action=pageName;
			document.frm.delimgname.value=imgname;
			document.frm.submit();
		}
	}	
}

function DeleteRecordWithTwoImage(id, table_name,ret_page, message, pageName, imgname1, imgname2)
{ 
	var answer=confirm(message);
	if(answer)
	{ 
		document.frm.id.value=id;
		document.frm.table_name.value=table_name;
		document.frm.ret_page.value=ret_page;
		document.frm.action=pageName;
		document.frm.delimgname1.value=imgname1;
		document.frm.delimgname2.value=imgname2;
		document.frm.submit();
	}
}
function DeleteRecordWithThreeImage(id, table_name,ret_page, message, pageName, imgname1, imgname2, imgname3)
{ 
	var answer=confirm(message);
	if(answer)
	{ 
		document.frm.id.value=id;
		document.frm.table_name.value=table_name;
		document.frm.ret_page.value=ret_page;
		document.frm.action=pageName;
		document.frm.delimgname1.value=imgname1;
		document.frm.delimgname2.value=imgname2;
		document.frm.delimgname3.value=imgname3;
		document.frm.submit();
	}
}
function ConfirmPrasadPrint(id, table_name,ret_page, message, pageName, imgname)
{ 
	var answer=confirm(message);
	if(answer)
	{ 
		document.frm.id.value=id;
		document.frm.table_name.value=table_name;
		document.frm.ret_page.value=ret_page;
		document.frm.action=pageName;
		document.frm.delimgname.value=imgname;
		document.frm.submit();
	}
}

function ViewEnquiryDetailsAllFaculty(status,pageName)
{
    document.frm.srch_Status.value=status;
    document.frm.action=pageName;
    document.frm.submit();   
}

function ViewExecutiveEnquiryDetailsSource(id,status,pageName)
{
	document.frm.srch_Source.value=id;
	document.frm.srch_Status.value=status;
	document.frm.action=pageName;
	document.frm.submit();
}

function ExecutiveEnquiryDetailsSource(id, pageName)
{
	document.frm.srch_Source.value=id;
	document.frm.action=pageName;
	document.frm.submit();
}
