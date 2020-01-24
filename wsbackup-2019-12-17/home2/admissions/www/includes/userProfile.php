<script language="javascript" src="./js/common.js"> </script>
<script language="javascript" src="./js/javascriptcheck.js"> </script>
<script type="text/javascript">
	function validateform(frm)
	{
		if(!checkforfields(frm.OldPass,"blank,prespace,postspace","Old Password."))
			return false;	
		if(!checkforfields(frm.NewPass,"blank,prespace,postspace","New Password."))
			return false;
		var pass = frm.NewPass.value;
		if(pass.length<6)
		{
			alert("Password should be greater than 6 characters");
			frm.NewPass.focus();
			return false;
		}
		if(!checkforfields(frm.NewPassConfirm,"blank,prespace,postspace","Confirm New Password."))
			return false;
		if(frm.NewPass.value!=frm.NewPassConfirm.value)
		{
			alert("New Password and Confirm password should be same");
			frm.NewPassConfirm.focus();
			return false;
		}
		
		var OldPass = frm.OldPass.value;
		//alert(OldPass);
		var NewPass = frm.NewPass.value;
		var NewPassConfirm = frm.NewPassConfirm.value;
		if (window.XMLHttpRequest) 
		{
			document.getElementById('loader-05').style.display='block';
    		// code for IE7+, Firefox, Chrome, Opera, Safari
    		xmlhttp=new XMLHttpRequest();
  		}
		else 
		{ // code for IE6, IE5
    		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  		}
  		xmlhttp.onreadystatechange=function() 
		{
    		if (xmlhttp.readyState==4 && xmlhttp.status==200) 
			{
				document.getElementById('loader-05').style.display='none';
      			document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    		}
  		} 
		xmlhttp.open("GET","changepassword_action.php?OldPass="+OldPass+"&NewPass="+NewPass+"&NewPassConfirm="+NewPassConfirm,true);
		xmlhttp.send();
		return false;	
	}
	
			
</script>   

 


   <a href="javascript:void(0)" id="to-top"><i class="icon-chevron-up"></i></a>
    <div id="modal-user-settings" class="modal">
    <!-- Modal Dialog -->
    <div class="modal-dialog">
    <!-- Modal Content -->
    <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4>Chnage Password</h4>
        </div>
        <!-- END Modal Header -->
    
        <!-- Modal Content -->
        <div class="modal-body">
            <!-- Tab links -->
            <ul id="example-user-tabs" class="nav nav-tabs" data-toggle="tabs">
                <li class="active"><a href="#example-user-tabs-account"><i class="icon-cogs"></i> Account</a></li>
            </ul>
            <!-- END Tab links -->
    
            <!-- END Tab Content -->
            <div class="tab-content">
                <!-- First Tab -->
                <div class="tab-pane active" id="example-user-tabs-account">
                    <div id="txtHint"></div>
                    <form class="form-horizontal" name="change_pass" method="post" action="" onsubmit="return validateform(this);">
                    <div class="loader-05" id="loader-05" style="display:none; z-index:12; margin-left:270px;"></div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Username</label>
                            <div class="col-md-9">
                                <p class="form-control-static"><b><?php echo ucwords($_SESSION['objLogin']->Name); ?></b></p>
                                <span class="help-block">You can't change your username!</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="example-user-pass">Old Password</label>
                            <div class="col-md-9">
                                <input type="password" id="example-user-pass" name="OldPass" class="form-control">
                                <span class="help-block">if you want to change your password enter your current for confirmation!</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="example-user-newpass">New Password</label>
                            <div class="col-md-9">
                                <input type="password" id="example-user-newpass" name="NewPass" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group">
								<label class="control-label col-md-3" for="example-user-newpass">Confirm New Password</label>
								<div class="col-md-9">
									<input type="password" id="example-user-newpass" name="NewPassConfirm" class="form-control" >
								</div>
							</div>
                        <div class="modal-footer remove-margin">
            				<button class="btn btn-danger" data-dismiss="modal"><i class="icon-remove"></i> Close</button>
            				<button class="btn btn-success"><i class="icon-save"></i> Save changes</button>
        				</div>
                    </form>
                </div>
                <!-- END First Tab -->
    		</div>
            <!-- END Tab Content -->
        </div>
        <!-- END Modal Content -->
    
        <!-- Modal footer -->
        
        <!-- END Modal footer -->
    </div>
    <!-- END Modal Content -->
    </div>
    <!-- END Modal Dialog -->
    </div>
    
   <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
    <script>!window.jQuery && document.write(unescape('%3Cscript src="js/vendor/jquery-1.9.1.min.js"%3E%3C/script%3E'));</script>
    
    <!-- Bootstrap.js -->
    <script src="js/vendor/bootstrap.min.js"></script>
    
    <!-- Jquery plugins and custom javascript code -->
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    
    <!-- Javascript code only for this page -->
    <script>
        $(function() {
            // Initialize dash Datatables
            $('#dash-example-orders').dataTable({
                "aoColumnDefs": [{"bSortable": false, "aTargets": [0]}],
                "iDisplayLength": 6,
                "aLengthMenu": [[6, 10, 30, -1], [6, 10, 30, "All"]]
            });
				$('#masked_date').mask('99/99/9999');
                $('#masked_date2').mask('99-99-9999');
                $('#masked_phone').mask('(999) 999-99999');
                $('#masked_phone_ext').mask('(999) 999-9999? x99999');
                $('#masked_taxid').mask('99-9999999');
                $('#masked_ssn').mask('999-99-9999');
                $('#masked_pkey').mask('a*-999-a999');
				
				// Add Employee start
					$('#EmpDateOfBirth').mask('9999-99-99');
					$('#EmpMobile1').mask('9999999999');
					$('#EmpMobile2').mask('9999999999');
					$('#PassDateOfIssue').mask('9999-99-99');
					$('#PassDateOfExpiry').mask('9999-99-99');
					$('#PassBlankPage').mask('99');
				// Add Employee End
				
				// Add Ticket Booking Start
					$('#TBDateOfArrival').mask('9999-99-99');
					$('#TBDateOfDeparture').mask('9999-99-99');
				// Add Ticket Booking End
                
				// manage-ticket-booking.php?I=8
					$('#TransactionDateFrom').mask('9999-99-99');
					$('#TransactionDateTo').mask('9999-99-99');
				//
				
				
				
            $('.dataTables_filter input').addClass('form-control').attr('placeholder', 'Search');
    
            // Dash example stats
            var dashChart = $('#dash-example-stats');
    
            var dashChartData1 = [
                [0, 200],
                [1, 250],
                [2, 360],
                [3, 584],
                [4, 1250],
                [5, 1100],
                [6, 1500],
                [7, 1521],
                [8, 1600],
                [9, 1658],
                [10, 1623],
                [11, 1900],
                [12, 2100],
                [13, 1700],
                [14, 1620],
                [15, 1820],
                [16, 1950],
                [17, 2220],
                [18, 1951],
                [19, 2152],
                [20, 2300],
                [21, 2325],
                [22, 2200],
                [23, 2156],
                [24, 2350],
                [25, 2420],
                [26, 2480],
                [27, 2320],
                [28, 2380],
                [29, 2520],
                [30, 2590]
            ];
            var dashChartData2 = [
                [0, 50],
                [1, 180],
                [2, 200],
                [3, 350],
                [4, 700],
                [5, 650],
                [6, 700],
                [7, 780],
                [8, 820],
                [9, 880],
                [10, 1200],
                [11, 1250],
                [12, 1500],
                [13, 1195],
                [14, 1300],
                [15, 1350],
                [16, 1460],
                [17, 1680],
                [18, 1368],
                [19, 1589],
                [20, 1780],
                [21, 2100],
                [22, 1962],
                [23, 1952],
                [24, 2110],
                [25, 2260],
                [26, 2298],
                [27, 1985],
                [28, 2252],
                [29, 2300],
                [30, 2450]
            ];
    
            // Initialize Chart
            $.plot(dashChart, [
                {data: dashChartData1, lines: {show: true, fill: true, fillColor: {colors: [{opacity: 0.05}, {opacity: 0.05}]}}, points: {show: true}, label: 'All Visits'},
                {data: dashChartData2, lines: {show: true, fill: true, fillColor: {colors: [{opacity: 0.05}, {opacity: 0.05}]}}, points: {show: true}, label: 'Unique Visits'}],
            {
                legend: {
                    position: 'nw',
                    backgroundColor: '#f6f6f6',
                    backgroundOpacity: 0.8
                },
                colors: ['#555555', '#db4a39'],
                grid: {
                    borderColor: '#cccccc',
                    color: '#999999',
                    labelMargin: 5,
                    hoverable: true,
                    clickable: true
                },
                yaxis: {
                    ticks: 5
                },
                xaxis: {
                    tickSize: 2
                }
            }
            );
    
            // Create and bind tooltip
            var previousPoint = null;
            dashChart.bind("plothover", function(event, pos, item) {
    
                if (item) {
                    if (previousPoint !== item.dataIndex) {
                        previousPoint = item.dataIndex;
    
                        $("#tooltip").remove();
                        var x = item.datapoint[0],
                            y = item.datapoint[1];
    
                        $('<div id="tooltip" class="chart-tooltip"><strong>' + y + '</strong> visits</div>')
                            .css({top: item.pageY - 30, left: item.pageX + 5})
                            .appendTo("body")
                            .show();
                    }
                }
                else {
                    $("#tooltip").remove();
                    previousPoint = null;
                }
            });
        });
    </script>
    