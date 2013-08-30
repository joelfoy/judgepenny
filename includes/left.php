<ul>
<li class="home"><a href="index.php">>>Home</a></li>
<ul>
<li><a href="index.php">>>The Judge </a>
<ul>
<li><a href="biography.php">Biography</a></li>
<li><a href="judge-penny-story.php">Judge Penny's Story</a></li>
<li><a href="beyond-the-robe.php">Beyond The Robe</a></li>
<li><a href="events.php">Events</a></li>
</ul>
</li>
<li><a href="speaking-requests.php">>> Speaking Request</a></li>
<li><a href="shopping.php">>> Shopping</a></li>
<li><a href="penny-for-your-thoughts.php">>> Penny For Your Thoughts</a></li>
<li><a href="judge-penny-foundation.php">>> Judge Penny's Foundation</a></li>
<li><a href="media.php">>> Media</a></li>
<li><a href="contact.php">>> Contact</a></li>
	
</ul>
<div class="mail-mod1">
<form class="form1" name="emailsubs" action="emailsub.php" method="post" onsubmit="return validateForm();">
  Email address: <input type="text" name="email" size="40"/>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="89%" align="right"><input type="submit" value="Submit" class="btn" /></td>
    <td width="11%">&nbsp;</td>   
  </tr>
</table>
</form>

</div>
<script language="javascript" type="text/javascript">
if(document.location.href == 'http://judgepenny.com/biography.php?thank-you'){
alert('E-Mail has been sent !');
}
function validateForm()
{
var x = document.forms["emailsubs"]["email"].value;
 
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if ( atpos < 1 || dotpos<atpos+2 || dotpos+2 >=x.length)
  {
  alert("Not a valid E-Mail address");
  return false;
  }
}
</script>