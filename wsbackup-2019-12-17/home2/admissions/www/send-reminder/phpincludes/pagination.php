  	<table width="100%" align="center" border="0" >
	  <tr > 
		<td width="16%" height="21"  align="center"> 
		  <? 
	   if ($page_no>1) {
		echo '<a class="readmoreblue btn btn-default" href="javascript:navigationrec(' . ($page_no-1) . ', document.forms[0]);" >Prev</a>' ;
		echo '&nbsp;&nbsp';
		echo '<a class="readmoreblue btn btn-default" href="javascript:navigationrec(1, document.forms[0]);" ><<</a>' ; 	
		echo '&nbsp;&nbsp';
		}
	 ?>
		  <font class="readmoreblue btn btn-default">Page:</font> 
		  <?
		$neg_offset = $page_no % 10 ; 				
		$start_offset = $page_no - $neg_offset ;    
		if($neg_offset != 0 ){
			$start_offset = $start_offset + 1 ;     
		}
		if($neg_offset == 0 ){
			$start_offset = $start_offset - 9 ;
		}
	
		
		for( $i = $start_offset ; $i < $start_offset + $pagination ; $i++ ){ 
		if($i <= $pages ){
				if($i == $page_no ) {
				echo '<a style="text-decoration:none"><font size=1px color=black><b class="btn btn-danger">'.$i.'&nbsp;</b></font></a>';		
				echo '&nbsp;&nbsp;';
				}else{ 
				echo '<a  style="text-decoration:none" class="btn btn-danger" href="javascript:navigationrec(' . ($i) . ', document.forms[0]);" >'.$i.'&nbsp;</a>';		
				echo '&nbsp;&nbsp;';
				}
			}
		} 
	?>
		  <?  
	
		 if($page_no<$pages) {
			echo '&nbsp;&nbsp';
			echo '<a class="readmoreblue btn btn-default"  href="javascript:navigationrec(' . ($pages) .', document.forms[0]);" > >></a>' ; 	
			echo '&nbsp;&nbsp';
			echo '<a class="readmoreblue btn btn-default"  href="javascript:navigationrec(' . ($page_no+1) .', document.forms[0]);" >Next</a>' ;
		}
	  ?>
		  &nbsp; </td>
	  </tr>
	</table>
