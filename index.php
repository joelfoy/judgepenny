<?php
include("includes/header.php");
?>
<div id="wrapper">
<!-- .slideshow starts here-->

 <div class="slider-wrapper theme-default">
            
            <div id="slider" class="nivoSlider">
            	<a href="sister-talk.php"><img src="slideshow/images/SisterTalk_WebBanner.jpg"/></a>
                <a href="shopping.php"><img src="slideshow/images/book.jpg"  /></a>
                <a href="judge-penny-foundation.php"><img src="slideshow/images/judge_penny_foundation.jpg" alt="Judge PEnny Foundation" /></a>
                <a href="penny-for-your-thoughts.php"><img src="slideshow/images/judge_penny_opportunity.jpg" alt="" /></a>
                <a href="penny-for-your-thoughts.php"><img src="slideshow/images/judge_penny_self_worth.jpg" alt="" /></a>
				<a href="speaking-requests.php"><img src="slideshow/images/judge_penny_speaking_request.png" alt=""/></a>
				<img src="slideshow/images/judge_penny_the_judge.jpg" alt=""/>
            </div>            
        </div>

    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    
	<script type="text/javascript" src="videos/jwplayer.js"></script>
	<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
	


    $(document).ready(function()
	 {
	 	//alert('sdf');
        $('#slider').nivoSlider();
		
    });
    </script>

	
<!-- .slider-text ends here-->


<!-- .content starts here-->
<div class="content">
<div class="block">
<div class="h">
<div class="heading">
<h1 class="head-title"><span>Email</span> List</h1></div>
<div class="heading" style="float:right; *width:497px;">
<h1 class="head-title"><span>Recent</span> Events</h1>
</div></div>
<img src="images/m-top.png"/ class="m-top">
<div class="block1">
<div class="mail">
<div class="mail-mod">
<form class="form1" name="emailsubs" action="emailsubs.php" method="post">
  Email address: <input type="text" name="email" size="40"/>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="21%"><script language="javascript" type="text/javascript">
if(document.location.href == 'http://www.judgepenny.com/index.php?thank-you'){
document.write ('<div class="a" align="center" style="font-size:15px; color:red;">Thank You, For sending email address.</div>');}
else if(document.location.href == 'http://www.judgepenny.com/index.php?blank_email'){
document.write ('<div class="a" align="center" style="font-size:15px; color:red;">Please fill email address.</div>');}
</script> </td>
    <td width="13%"><input type="submit" value="Submit" class="btn" /></td>   
  </tr>
</table>

</form>
</div>
</div>
<div class="events"><a href="events.php">"Let Us Make Man" Conference at University of West Georgia<br />
</a>Carrollton, Georgia<br />
<br />
<a href="events.php">AKA 65th Biennial International Convention, Inc.<br />
</a>San Francisco, California</div>
</div>
<img src="images/m-btm.png"/ class="m-btm">
</div>
<!-- .entry starts here-->
<div class="entry">
<!-- .left starts here-->
<div class="left">
<div class="video">
<h1>Online  Multimedia: </h1>
<div id="home-video1" style="margin-right:60px;float:left;">
	<iframe width="272" height="191" src="http://www.youtube.com/embed/us5kJqbK9rI" frameborder="0" allowfullscreen></iframe>
</div>

<div id="home-video2" style="padding-left:332px">
	<iframe width="272" height="191" src="http://www.youtube.com/embed/yeEOiOCieB4" frameborder="0" allowfullscreen></iframe>
</div>

</div>
</div>
<!-- .left ends here-->
<div class="right">
<div class="sidebar">
<h1><span>Penny</span> For Your Thoughts:</h1>
<div class="s-top"></div>
<div class="text-widget"><p>Judge Penny Gives "Real" Advice </p>
<a href="penny-for-your-thoughts_whattodowhenyouloseyourjob.php">What to do when you lost your job?</a><br />
<a href="penny-for-your-thoughts_howtowalkawayfromabadrelationship.php">How to walk away from a bad relationship</a><br />
<a href="penny-for-your-thoughts_howdoIdealwithanoutofcontrol.php">How do I deal with an out of control teenager?</a><br />
<a href="penny-for-your-thoughts_itsnotwhatyousaybuthowyousayitl.php">It's not what you say, but how you say it</a></br>
</div>
<div class="s-btm"></div>
</div>
</div>

</div>
<!-- .entry ends here-->

</div>
<!-- .content ends here-->
<div class="recent">
<img src="images/m-top.png"/ class="m-top">
<div class="block2"><h1><span>Recent</span> Twitter Post:</h1>
<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 4,
  interval: 6000,
  width: 1024,
  height: 300,
  theme: {
    shell: {
      background: 'none',
      color: '#3F23D8'
    },
    tweets: {
      background: 'none',
      color: '#000000',
      links: '#3F23D8'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: false,
    hashtags: true,
    timestamp: true,
    avatars: false,
    behavior: 'all'
  }
}).render().setUser('judgepenny').start();
</script>
</div>
<img src="images/m-btm.png"/ class="m-btm">

</div>

</div>
<!-- #wrapper ends here-->
<?php
include("includes/footer.php");
?>