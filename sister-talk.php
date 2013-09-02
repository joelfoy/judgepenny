<?php
include("includes/header.php");
?>
<div id="wrapper">
<h1>Sister Talk</h1>
<div class="block sister-talk">
	<img alt="Sister Talk - A Women's Empowerment Conference" src="images/SisterTalk5x7Front.jpg"/>
	
	<div class="conference-registration">
		<h3>Register Now</h3>
		<form action="registerSistertalk.php" method="post" id="SisterTalk-registration">
			<div class="input-container">
				<label for="firstName" class="form-input-label">First Name<span class="required">*</span></label>
				<label for="firstName" class="form-input-error"></label>
				<input type="text" class="form-input" id="firstName" name="firstName"/>
			</div>
			
			<div class="input-container">
				<label for="lastName" class="form-input-label">Last Name<span class="required">*</span></label>
				<label for="lastName" class="form-input-error"></label>
				<input type="text" class="form-input" id="lastName" name="lastName"/>
			</div>
			
			<div class="input-container">
				<label for="email" class="form-input-label">Email<span class="required">*</span></label>
				<label for="email" class="form-input-error"></label>
				<input type="email" class="form-input" id="email" name="email"/>
			</div>
			
			<div class="input-container">
				<label for="dayPhone" class="form-input-label">Daytime Phone<span class="required">*</span></label>
				<label for="dayPhone" class="form-input-error"></label>
				<input type="tel" class="form-input" id="dayPhone" name="dayPhone"/>
			</div>
			
			<div class="input-container">
				<label for="workPhone" class="form-input-label">Work Phone</label>
				<input type="tel" class="form-input" id="workPhone" name="workPhone"/>
			</div>
			
			<div class="input-container">
				<label for="cellPhone" class="form-input-label">Cell Phone</label>
				<input type="tel" class="form-input" id="cellPhone" name="cellPhone"/>
			</div>
			
			<div class="input-container">
				<label for="address" class="form-input-label">Address<span class="required">*</span></label>
				<label for="address" class="form-input-error"></label>
				<input type="text" class="form-input" id="address" name="address"/>
			</div>
			
			<div class="input-container">
				<label for="city" class="form-input-label">City<span class="required">*</span></label>
				<label for="city" class="form-input-error"></label>
				<input type="text" class="form-input" id="city" name="city"/>
			</div>
			
			<div class="input-container">
				<label for="state" class="form-input-label">State<span class="required">*</span></label>
				<label for="state" class="form-input-error"></label>
				<input type="text" class="form-input" id="state" name="state"/>
			</div>
			
			<div class="input-container">
				<label for="" class="form-input-label">Age <em>(Select a group)</em><span class="required">*</span></label>
				<label for="" class="form-input-error"></label>
				<input class="radio" type="radio" name="age" value="12-17" /> <span>12-17</span>
				<input class="radio" type="radio" name="age" value="18-25" /> <span>18-25</span>
				<input class="radio" type="radio" name="age" value="26-30" /> <span>26-30</span>
				<input class="radio" type="radio" name="age" value="31-45" /> <span>31-45</span>
				<input class="radio" type="radio" name="age" value="46-59" /> <span>46-59</span>
				<input class="radio" type="radio" name="age" value="60+" /> <span>60+</span>
			</div>
			
			<div class="input-container">
				<label for="preferences" class="form-input-label">Workshop Preferences <em>(Select your two(2) preferences)</em></label>
				
				<div class="checkbox-container">
					<input type="checkbox" class="form-checkbox" value="Workshop I" name="preferences[]" class="checkbox">
						<span class="pref-description">
						<strong>Spiritual Growth: Strengthening Your Prayer Life</strong>
						Presenters: Pastor Trina Evans & Rev. Roberta Heater
						</span>
					</input>
				</div>
				
				<div class="checkbox-container">
					<input type="checkbox" class="form-checkbox" value="Workshop II" name="preferences[]" class="checkbox">
						<span class="pref-description">
						<strong>Get Your Money & Mind Right</strong>
						Presenter: Evangelist Eliza Eugene
						</span>
					</input>
				</div>
				
				<div class="checkbox-container">
					<input type="checkbox" class="form-checkbox" value="Workshop III" name="preferences[]" class="checkbox">
						<span class="pref-description">
						<strong>Crossing the Other Side: Overcoming Grief & Fear
	</strong>
						Presenter: Monica Mealey
						</span>
					</input>
				</div>
				
				<div class="checkbox-container">
					<input type="checkbox" class="form-checkbox" value="Workshop IV" name="preferences[]" class="checkbox">
						<span class="pref-description">
						<strong>Reinvent Your Life: Unleash the Power Within</strong>
						Presenter: Rev. Natosha Reid Rice
						</span>
					</input>
				</div>
			</div>
			
			<h4>$25.00 Adult Luncheon Ticket Required with Free Registration</h4>
			<p>All registrants 18 and over will be required to purchase an adult luncheon ticket.</p>
			
			<input type="submit" class="form-submit" name="submit" value="Continue"/>
			
		</form>	
	</div>
	
	<p>The Judge Penny Brown Reynolds Foundation, Inc. <br>Invites you to join us for</p>
	<h3>Sister Talk</h3>
	<h5>"A Women’s Empowerment Conference"</h5>
	<div class="conference-details">
		<p>Georgia International Convention Center</p>
		<p>2000 Convention Center Concourse   College Park, GA  30337</p>
		<p>Saturday, November 2, 2013 <span class="time">8:00 a.m. – 5:00 p.m.</span></p>
		<p>Judge Penny Brown Reynolds, Conference Convenor & Keynote Speaker</p>
	</div>


	<div class="conference-faq">
		<h3>Conference Frequently Asked Questions
		<h5>When is the Conference?</h5>
		<p>Saturday, November 2, 2013</p>
		
		<h5>How long is the conference?</h5>
		<p>One Exciting Day (exact times subject to change)</p>
		
		<h5>Where is the conferernece?</h5>
		<p>The Georgia International Convention Center</p>
		<p>2000 Convention Center Concourse, College Park, GA  30337</p>
		
		<h5>What is the purpose of the conference?</h5>
		<p>SisterTalk Empowerment conference is an invitation for all women to come together in the spirit of sisterhood to celebrate our unity, examine the many roles and issues we face as women and to rejoice in the Word.</p>
		
		<h5>Who should attend the conference?</h5>
		<p>It is opened to women of all ages and stages who walk in the spirit, hoping to enrich their lives through deepening their relationship with God, as well as with other women.</p>
		<p>It is open to all denominations and religions. This is an excellent event for mentoring groups, women’s ministries, sororities, and schools.</p>
		
		<h5>Is there a cost to attend?</h5>
		<p>The conference is free.  </p>
		<p>You must purchase a $25.00 luncheon ticket.</p>
		<p>Girls 12-17 eat for free.</p>
		
		<h5>Can my daughter attend?</h5>
		<p>Girls ages 12 and older are welcomed.</p>  
		
		<h5>Is childcare available on site?</h5>
		<p>Unfortunately, there is no childcare services.</p>
		
		
		<h5>Will I need to bring spending money?</h5>
		<p>The conference is free. The meal ticket for the luncheon is required at a cost of $25.00  Conference keepsakes will be available for sale. Keepsakes include, SisterTalk Tee shirts, journals, calendars, bags and a devotional.</p>
		
		<h5>Who is Speaking?</h5>
		<p>Judge Penny Brown Reynolds will be the keynote speaker. Town Hall Panelists, Workshops Presenters and Participants include: Rev. Dr. Sherry Austin, Evangelist Lorraine Jacques White, Rev. Melva Sampson, Pamela Cooper, Rev. Trina Evans, Rev. Roberta Heater, Rev. Natosha Reid Rice, Monica Mealey, Evangelist Eliza Eugene, Attorney Nikisha McDonald, Darrlynnn Brister, Dr. Jeanne Oliga, Nia Brown, Dionne Christopher</p>
		
		<h5>What Should we Wear?</h5>
		<p>Attendees should wear dressy casual or business attire. During the day, you will be moving throughout the hotel, so wear comfortable and  appropriate clothing and shoes.</p>
		
		<h5>How do I Register?</h5>
		<p>Register here.</p>
		
		<h5>When will I be notified of my workshops?</h5>
		<p>On the day morning of the conference.</p>
		
		<h5>Is lodging available if I want an overnight stay?</h5>
		<p>Yes</p>
		
		<h5>Is there a Parking charge? </h5>
		<p>Yes</p>
		
		<h5>Special Needs or accommodations</h5>
		<p>Any requests that need to made must be put in writing and received by email by October 15, 2013</p>
		
	
	</div>
</div>
</div>

<!-- .content2 starts here-->
<div class="content2">



</div>
<!-- .content2 ends here-->


</div>
<!-- #wrapper ends here-->
<?php
include("includes/footer.php");
?>