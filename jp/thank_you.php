<?php

$msgemail='<table width="100%" border="0" cellpadding="3" cellspacing="2">'.
			'<tr>'.
				'<td width="150" style="text-align:right;"><strong>Date/Time:</strong></td>'.
				'<td>'.date("d M Y h:i:s").'</td>'.
			'</tr><tr>'.
			'<td colspan="2"><hr /></td></tr>'.
			'<tr>'.
				'<td style="text-align:right;"><strong>Name:</strong></td>'.
				'<td>'.$_POST['Field4'].' '.$_POST['Field5'].'</td>'.
			'</tr><tr>'.
			    '<td style="text-align:right;"><strong>Email:</strong></td>'.
				'<td>'.$_POST['Field2'].'</td>'.
			'</tr><tr>'.
				'<td style="text-align:right;"><strong>Phone Number:</strong></td>'.
				'<td>'.$_POST['Field13'].'-'.$_POST['Field13-1'].'-'.$_POST['Field13-2'].'</td>'.
			'</tr><tr>'.
				'<td style="text-align:right;"><strong>Cell Phone Number:</strong></td>'.
				'<td>'.$_POST['Field6'].'-'.$_POST['Field6-1'].'-'.$_POST['Field6-2'].'</td>'.
			'</tr><tr>'.
				'<td style="text-align:right;"><strong>Organization:</strong></td>'.
				'<td>'.$_POST['Field7'].'</td>'.
			'</tr><tr>'.
			'<td style="text-align:right;"><strong>Event Date:</strong></td>'.
				'<td>'.$_POST['Field8-1'].'/'.$_POST['Field8-2'].'/'.$_POST['Field8'].'</td>'.
			
			'</tr><tr>'.
			'<td colspan="2"><hr /></td></tr>'.
			'<tr>'.
				'<td style="text-align:right;"><strong>Event Location: </strong></td>'.
				'<td>'.$_POST['Field9'].'</td>'.
			'</tr><tr>'.
				'<td style="text-align:right;"><strong>Event Time: </strong></td>'.
				'<td>'.$_POST['Field10a'].'</td>'.
			'</tr><tr>'.
				'<td style="text-align:right;"><strong>Time Zone: </strong></td>'.
				'<td>'.$_POST['title11a'].'</td>'.
			'</tr><tr>'.
				'<td style="text-align:right;"><strong>City: </strong></td>'.
				'<td>'.$_POST['Field12'].'</td>'.
			'</tr><tr>'.
				'<td style="text-align:right;"><strong>State: </strong></td>'.
				'<td>'.$_POST['title11'].'</td>'.
			'</tr><tr>'.
				'<td style="text-align:right;"><strong>Message and Additional Information :</strong></td>'.
				'<td><pre>'.$_POST['Field1'].'</pre></td>'.
			'</tr></table>';



$useremail=$_POST['Field2'];
$headers = "From: $useremail\r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//send mail to admin
//mail('Contact Us <info@forestlakes-efca.org>', 'Thank you for Position form data',$msgemail,$headers);

mail('efst034@gmail.com', 'Thank you for Position form data',$msgemail,$headers);
?>



<div class="thanking" style=" width:835px;">
<div style="margin:10px 0px;" align="center"></div>
<div class="a" align="center" style="font-size:20px; color:#D66001;">Thank You<br> For booking Judge Penny for a future speaking engagement</div>

</div>


