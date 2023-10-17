@include ('layouts.head')
    <body>
        
        <!--================Header Menu Area =================-->
        @include('layouts.menu')
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="box_1620">
				<div class="banner_inner d-flex align-items-center">
					<div class="container">
						<div class="banner_content text-center">
							<h2>Gallery</h2>
							<div class="page_link">
								<a href="{{url('/')}}">Home</a>
								<a href="{{url('/elements')}}">Gallery</a>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        
        <!-- Start Sample Area 

			<section class="sample-text-area">
				<div class="container">
					<h3 class="text-heading title_color">Text Sample</h3>
					<p class="sample-text">
						Every avid independent filmmaker has <b>Bold</b> about making that <i>Italic</i> interest documentary, or short film to show off their creative prowess. Many have great ideas and want to “wow” the<sup>Superscript</sup> scene, or video renters with their big project.  But once you have the<sub>Subscript</sub> “in the can” (no easy feat), how do you move from a <del>Strike</del> through of master DVDs with the <u>“Underline”</u> marked hand-written title inside a secondhand CD case, to a pile of cardboard boxes full of shiny new, retail-ready DVDs, with UPC barcodes and polywrap sitting on your doorstep?  You need to create eye-popping artwork and have your project replicated. Using a reputable full service DVD Replication company like PacificDisc, Inc. to partner with is certainly a helpful option to ensure a professional end result, but to help with your DVD replication project, here are 4 easy steps to follow for good DVD replication results: 

					</p>
				</div>
			</section>
			End Sample Area -->

			<!-- Start Button 
			<section class="button-area">
				<div class="container border-top-generic">
					<h3 class="text-heading title_color">Sample Buttons</h3>
					<div class="button-group-area">
						<a href="#" class="genric-btn default">Default</a>
						<a href="#" class="genric-btn primary">Primary</a>
						<a href="#" class="genric-btn success">Success</a>
						<a href="#" class="genric-btn info">Info</a>
						<a href="#" class="genric-btn warning">Warning</a>
						<a href="#" class="genric-btn danger">Danger</a>
						<a href="#" class="genric-btn link">Link</a>
						<a href="#" class="genric-btn disable">Disable</a>
					</div>
					<div class="button-group-area mt-10">
						<a href="#" class="genric-btn default-border">Default</a>
						<a href="#" class="genric-btn primary-border">Primary</a>
						<a href="#" class="genric-btn success-border">Success</a>
						<a href="#" class="genric-btn info-border">Info</a>
						<a href="#" class="genric-btn warning-border">Warning</a>
						<a href="#" class="genric-btn danger-border">Danger</a>
						<a href="#" class="genric-btn link-border">Link</a>
						<a href="#" class="genric-btn disable">Disable</a>
					</div>
					<div class="button-group-area mt-40">
						<a href="#" class="genric-btn default radius">Default</a>
						<a href="#" class="genric-btn primary radius">Primary</a>
						<a href="#" class="genric-btn success radius">Success</a>
						<a href="#" class="genric-btn info radius">Info</a>
						<a href="#" class="genric-btn warning radius">Warning</a>
						<a href="#" class="genric-btn danger radius">Danger</a>
						<a href="#" class="genric-btn link radius">Link</a>
						<a href="#" class="genric-btn disable radius">Disable</a>
					</div>
					<div class="button-group-area mt-10">
						<a href="#" class="genric-btn default-border radius">Default</a>
						<a href="#" class="genric-btn primary-border radius">Primary</a>
						<a href="#" class="genric-btn success-border radius">Success</a>
						<a href="#" class="genric-btn info-border radius">Info</a>
						<a href="#" class="genric-btn warning-border radius">Warning</a>
						<a href="#" class="genric-btn danger-border radius">Danger</a>
						<a href="#" class="genric-btn link-border radius">Link</a>
						<a href="#" class="genric-btn disable radius">Disable</a>
					</div>
					<div class="button-group-area mt-40">
						<a href="#" class="genric-btn default circle">Default</a>
						<a href="#" class="genric-btn primary circle">Primary</a>
						<a href="#" class="genric-btn success circle">Success</a>
						<a href="#" class="genric-btn info circle">Info</a>
						<a href="#" class="genric-btn warning circle">Warning</a>
						<a href="#" class="genric-btn danger circle">Danger</a>
						<a href="#" class="genric-btn link circle">Link</a>
						<a href="#" class="genric-btn disable circle">Disable</a>
					</div>
					<div class="button-group-area mt-10">
						<a href="#" class="genric-btn default-border circle">Default</a>
						<a href="#" class="genric-btn primary-border circle">Primary</a>
						<a href="#" class="genric-btn success-border circle">Success</a>
						<a href="#" class="genric-btn info-border circle">Info</a>
						<a href="#" class="genric-btn warning-border circle">Warning</a>
						<a href="#" class="genric-btn danger-border circle">Danger</a>
						<a href="#" class="genric-btn link-border circle">Link</a>
						<a href="#" class="genric-btn disable circle">Disable</a>
					</div>
					<div class="button-group-area mt-40">
						<a href="#" class="genric-btn default circle arrow">Default<span class="lnr lnr-arrow-right"></span></a>
						<a href="#" class="genric-btn primary circle arrow">Primary<span class="lnr lnr-arrow-right"></span></a>
						<a href="#" class="genric-btn success circle arrow">Success<span class="lnr lnr-arrow-right"></span></a>
						<a href="#" class="genric-btn info circle arrow">Info<span class="lnr lnr-arrow-right"></span></a>
						<a href="#" class="genric-btn warning circle arrow">Warning<span class="lnr lnr-arrow-right"></span></a>
						<a href="#" class="genric-btn danger circle arrow">Danger<span class="lnr lnr-arrow-right"></span></a>
					</div>
					<div class="button-group-area mt-10">
						<a href="#" class="genric-btn default-border circle arrow">Default<span class="lnr lnr-arrow-right"></span></a>
						<a href="#" class="genric-btn primary-border circle arrow">Primary<span class="lnr lnr-arrow-right"></span></a>
						<a href="#" class="genric-btn success-border circle arrow">Success<span class="lnr lnr-arrow-right"></span></a>
						<a href="#" class="genric-btn info-border circle arrow">Info<span class="lnr lnr-arrow-right"></span></a>
						<a href="#" class="genric-btn warning-border circle arrow">Warning<span class="lnr lnr-arrow-right"></span></a>
						<a href="#" class="genric-btn danger-border circle arrow">Danger<span class="lnr lnr-arrow-right"></span></a>
					</div>
					<div class="button-group-area mt-40">
						<a href="#" class="genric-btn primary e-large">Extra Large</a>
						<a href="#" class="genric-btn success large">Large</a>
						<a href="#" class="genric-btn primary">Default</a>
						<a href="#" class="genric-btn success medium">Medium</a>
						<a href="#" class="genric-btn primary small">Small</a>
					</div>
					<div class="button-group-area mt-10">
						<a href="#" class="genric-btn primary-border e-large">Extra Large</a>
						<a href="#" class="genric-btn success-border large">Large</a>
						<a href="#" class="genric-btn primary-border">Default</a>
						<a href="#" class="genric-btn success-border medium">Medium</a>
						<a href="#" class="genric-btn primary-border small">Small</a>
					</div>
				</div>
			</section>
			End Button -->


			<!-- Start Align Area -->
			<div class="whole-wrap">
				<div class="container">
					<div class="section-top-border">
						<h3 class="mb-30 title_color">Inter IIT Tech Meet 8.0, Roorkee </h3>
						<div class="row">
							<div class="col-md-3">
								<img src="img/elements/d.jpg" alt="" class="img-fluid">
							</div>
							<div class="col-md-9 mt-sm-20 left-align-p">
								<p>Recently, I went to IIT Roorkee for the 8th edition of Inter IIT Tech Meet with the contingent team of IIT Patna. It was an amazing , life-time memorable journey with such cool, supportive and caring seniors and batchmates. The journey started on 19th of December, 2019 at Patliputra Station. During the journey, we had a blast of fun inside the train. We reached Roorkee next day in afternoon. Our Team performed very well in all the events and and won titles in many events. Mainly, we got a GOLD medal in Ashoka Tech for Change event. Overall ,we got 8th rank among all the IITs. After the completion of the event , everyone started to leaving off to their homes. Fun and enjoyment aside , I also learned many valuable skills like teamwork, etc. from this Journey. </p>
							</div>
						</div>
					</div>
					<div class="section-top-border text-right">
						<h3 class="mb-30 title_color">Mood Indigo 2019, IIT Bombay</h3>
						<div class="row">
							<div class="col-md-9">
								<p class="text-right">Asia's Largest College Cultural Fest - MOOD INDIGO!!!! <br>Me with my friends went to IIT Bombay to attend this fest from 27th December, 2019 to 30th December, 2019. Those four days of fest was just full of fun, joy, happiness and friendship.We enjoyed a lot, attended so many events and participated in so many gaming events. There was two main centre of attraction. First was the International Band "MAGIC" that came to perform here. Second was the soulful concert of the bollywood sensation "KK" that just melted our hearts with his voice. Also, MUMBAI - the city of dreams is amazing. Some of the  best days of life till now. </p>
							</div>
							<div class="col-md-3">
								<img src="img/elements/d1.jpg" alt="" class="img-fluid">
							</div>
						</div>
					</div>
					
		<!--			<div class="section-top-border">
						<h3 class="mb-30 title_color">Definition</h3>
						<div class="row">
							<div class="col-md-4">
								<div class="single-defination">
									<h4 class="mb-20">Definition 01</h4>
									<p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="single-defination">
									<h4 class="mb-20">Definition 02</h4>
									<p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="single-defination">
									<h4 class="mb-20">Definition 03</h4>
									<p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks</p>
								</div>
							</div>
						</div>
					</div>   -->


	<!--			<div class="section-top-border">
						<h3 class="mb-30 title_color">Block Quotes</h3>
						<div class="row">
							<div class="col-lg-12">
								<blockquote class="generic-blockquote">
									“Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks such as Party Gaming and PlayTech left the United States. Overnight, online casino players found themselves being chased by the Federal government. But, after a fortnight, the online casino industry came up with a solution and new online casinos started taking root. These began to operate under a different business umbrella, and by doing that, rendered the transfer of money to and from them legal. A major part of this was enlisting electronic banking systems that would accept this new clarification and start doing business with me. Listed in this article are the electronic banking” 
								</blockquote>
							</div>
						</div> 
					</div>      -->   

		<!--			<div class="section-top-border">
						<h3 class="mb-30 title_color">Table</h3>
						<div class="progress-table-wrap">
							<div class="progress-table">
								<div class="table-head">
									<div class="serial">#</div>
									<div class="country">Countries</div>
									<div class="visit">Visits</div>
									<div class="percentage">Percentages</div>
								</div>
								<div class="table-row">
									<div class="serial">01</div>
									<div class="country"> <img src="img/elements/f1.jpg" alt="flag">Canada</div>
									<div class="visit">645032</div>
									<div class="percentage">
										<div class="progress">
											<div class="progress-bar color-1" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
								<div class="table-row">
									<div class="serial">02</div>
									<div class="country"> <img src="img/elements/f2.jpg" alt="flag">Canada</div>
									<div class="visit">645032</div>
									<div class="percentage">
										<div class="progress">
											<div class="progress-bar color-2" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
								<div class="table-row">
									<div class="serial">03</div>
									<div class="country"> <img src="img/elements/f3.jpg" alt="flag">Canada</div>
									<div class="visit">645032</div>
									<div class="percentage">
										<div class="progress">
											<div class="progress-bar color-3" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
								<div class="table-row">
									<div class="serial">04</div>
									<div class="country"> <img src="img/elements/f4.jpg" alt="flag">Canada</div>
									<div class="visit">645032</div>
									<div class="percentage">
										<div class="progress">
											<div class="progress-bar color-4" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
								<div class="table-row">
									<div class="serial">05</div>
									<div class="country"> <img src="img/elements/f5.jpg" alt="flag">Canada</div>
									<div class="visit">645032</div>
									<div class="percentage">
										<div class="progress">
											<div class="progress-bar color-5" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
								<div class="table-row">
									<div class="serial">06</div>
									<div class="country"> <img src="img/elements/f6.jpg" alt="flag">Canada</div>
									<div class="visit">645032</div>
									<div class="percentage">
										<div class="progress">
											<div class="progress-bar color-6" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
								<div class="table-row">
									<div class="serial">07</div>
									<div class="country"> <img src="img/elements/f7.jpg" alt="flag">Canada</div>
									<div class="visit">645032</div>
									<div class="percentage">
										<div class="progress">
											<div class="progress-bar color-7" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
								<div class="table-row">
									<div class="serial">08</div>
									<div class="country"> <img src="img/elements/f8.jpg" alt="flag">Canada</div>
									<div class="visit">645032</div>
									<div class="percentage">
										<div class="progress">
											<div class="progress-bar color-8" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>   -->
					<div class="section-top-border">
						<h3 class="title_color">Image Gallery</h3>
						<div class="row gallery-item">
							<div class="col-md-4">
								<a href="img/elements/g1.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(img/elements/g1.jpg);"></div></a>
							</div>
							<div class="col-md-4">
								<a href="img/elements/g2.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(img/elements/g2.jpg);"></div></a>
							</div>
							<div class="col-md-4">
								<a href="img/elements/g3.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(img/elements/g3.jpg);"></div></a>
							</div>
							<div class="col-md-6">
								<a href="img/elements/g4.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(img/elements/g4.jpg);"></div></a>
							</div>
							<div class="col-md-6">
								<a href="img/elements/g5.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(img/elements/g5.jpg);"></div></a>
							</div>
							<div class="col-md-4">
								<a href="img/elements/g6.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(img/elements/g6.jpg);"></div></a>
							</div>
							<div class="col-md-4">
								<a href="img/elements/g7.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(img/elements/g7.jpg);"></div></a>
							</div>
							<div class="col-md-4">
								<a href="img/elements/g8.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(img/elements/g8.jpg);"></div></a>
							</div>
							<div class="col-md-6">
								<a href="img/elements/g8.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(img/elements/g9.jpg);"></div></a>
							</div>
							<div class="col-md-6">
								<a href="img/elements/g9.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(img/elements/g10.jpg);"></div></a>
							</div>
							<div class="col-md-12">
								<a href="img/elements/g11.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(img/elements/g11.jpg);"></div></a>
							
							
									
						</div>   


					</div>
                     <div style="padding: 50px"><h2 ><center>See more on Social Media</center></h2>
					 <center><a href="https://www.facebook.com/shivam.sahu.33" class="genric-btn info circle">Facebook</a>
					 <a href="https://twitter.com/ShivamS87093943" class="genric-btn success circle">Twitter</a>
					 <a href="https://www.instagram.com/superb_shivam13/" class="genric-btn danger circle">Instagram</a></center></div>


		<!--			<div class="section-top-border">
						<div class="row">
							<div class="col-lg-4 col-sm-6 typo-sec">
								<h3 class="mb-20 title_color">Typography</h3>
								<div class="typography">
									<h1 class="typo-list">This is header 01</h1>
									<h2 class="typo-list">This is header 02</h2>
									<h3 class="typo-list">This is header 03</h3>
									<h4 class="typo-list">This is header 04</h4>
									<h5 class="typo-list">This is header 01</h5>
									<h6 class="typo-list">This is header 01</h6>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt-sm-30 typo-sec">
								<h3 class="mb-20 title_color">Unordered List</h3>
								<div class="">
									<ul class="unordered-list">
										<li>Fta Keys</li>
										<li>For Women Only Your Computer Usage</li>
										<li>Facts Why Inkjet Printing Is Very Appealing
											<ul>
												<li>Addiction When Gambling Becomes
													<ul>
														<li>Protective Preventative Maintenance</li>
													</ul>
												</li>
											</ul>
										</li>
										<li>Dealing With Technical Support 10 Useful Tips</li>
										<li>Make Myspace Your Best Designed Space</li>
										<li>Cleaning And Organizing Your Computer</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt-sm-30 typo-sec">
								<h3 class="mb-20 title_color">Ordered List</h3>
								<div class="">
									<ol class="ordered-list">
										<li><span>Fta Keys</span></li>
										<li><span>For Women Only Your Computer Usage</span></li>
										<li><span>Facts Why Inkjet Printing Is Very Appealing</span>
											<ol class="ordered-list-alpha">
												<li><span>Addiction When Gambling Becomes</span>
													<ol class="ordered-list-roman">
														<li><span>Protective Preventative Maintenance</span></li>
													</ol>
												</li>
											</ol>
										</li>
										<li><span>Dealing With Technical Support 10 Useful Tips</span></li>
										<li><span>Make Myspace Your Best Designed Space</span></li>
										<li><span>Cleaning And Organizing Your Computer</span></li>
									</ol>
								</div>
							</div>
						</div>
					</div>        -->


		<!--		    <div class="section-top-border">
						<div class="row">
							<div class="col-lg-8 col-md-8">
								<h3 class="mb-30 title_color">Form Element</h3>
								<form action="#">
									<div class="mt-10">
										<input type="text" name="first_name" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="text" name="last_name" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="text" name="last_name" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="email" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="single-input">
									</div>
									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
										<input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required class="single-input">
									</div>
									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
										<div class="form-select" id="default-select">
											<select>
												<option value="1">City</option>
												<option value="1">Dhaka</option>
												<option value="1">Dilli</option>
												<option value="1">Newyork</option>
												<option value="1">Islamabad</option>
											</select>
										</div>
									</div>
									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
										<div class="form-select" id="default-select2">
											<select>
												<option value="1">Country</option>
												<option value="1">Bangladesh</option>
												<option value="1">India</option>
												<option value="1">England</option>
												<option value="1">Srilanka</option>
											</select>
										</div>
									</div>
									
									<div class="mt-10">
										<textarea class="single-textarea" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required></textarea>
									</div>
									<div class="mt-10">
										<input type="text" name="first_name" placeholder="Primary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'" required class="single-input-primary">
									</div>
									<div class="mt-10">
										<input type="text" name="first_name" placeholder="Accent color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Accent color'" required class="single-input-accent">
									</div>
									<div class="mt-10">
										<input type="text" name="first_name" placeholder="Secondary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Secondary color'" required class="single-input-secondary">
									</div>
								</form>
							</div>
							<div class="col-lg-3 col-md-4 mt-sm-30 element-wrap">
								<div class="single-element-widget">
									<h3 class="mb-30 title_color">Switches</h3>
									<div class="switch-wrap d-flex justify-content-between">
										<p>01. Sample Switch</p>
										<div class="primary-switch">
											<input type="checkbox" id="default-switch">
											<label for="default-switch"></label>
										</div>
									</div>
									<div class="switch-wrap d-flex justify-content-between">
										<p>02. Primary Color Switch</p>
										<div class="primary-switch">
											<input type="checkbox" id="primary-switch" checked>
											<label for="primary-switch"></label>
										</div>
									</div>
									<div class="switch-wrap d-flex justify-content-between">
										<p>03. Confirm Color Switch</p>
										<div class="confirm-switch">
											<input type="checkbox" id="confirm-switch" checked>
											<label for="confirm-switch"></label>
										</div>
									</div>
								</div>
								<div class="single-element-widget">
									<h3 class="mb-30 title_color">Selectboxes</h3>
									<div class="default-select" id="default-select">
										<select>
											<option value="1">English</option>
											<option value="1">Spanish</option>
											<option value="1">Arabic</option>
											<option value="1">Portuguise</option>
											<option value="1">Bengali</option>
										</select>
									</div>
								</div>
								<div class="single-element-widget">
									<h3 class="mb-30 title_color">Checkboxes</h3>
									<div class="switch-wrap d-flex justify-content-between">
										<p>01. Sample Checkbox</p>
										<div class="primary-checkbox">
											<input type="checkbox" id="default-checkbox">
											<label for="default-checkbox"></label>
										</div>
									</div>
									<div class="switch-wrap d-flex justify-content-between">
										<p>02. Primary Color Checkbox</p>
										<div class="primary-checkbox">
											<input type="checkbox" id="primary-checkbox" checked>
											<label for="primary-checkbox"></label>
										</div>
									</div>
									<div class="switch-wrap d-flex justify-content-between">
										<p>03. Confirm Color Checkbox</p>
										<div class="confirm-checkbox">
											<input type="checkbox" id="confirm-checkbox">
											<label for="confirm-checkbox"></label>
										</div>
									</div>
									<div class="switch-wrap d-flex justify-content-between">
										<p>04. Disabled Checkbox</p>
										<div class="disabled-checkbox">
											<input type="checkbox" id="disabled-checkbox" disabled>
											<label for="disabled-checkbox"></label>
										</div>
									</div>
									<div class="switch-wrap d-flex justify-content-between">
										<p>05. Disabled Checkbox active</p>
										<div class="disabled-checkbox">
											<input type="checkbox" id="disabled-checkbox-active" checked disabled>
											<label for="disabled-checkbox-active"></label>
										</div>
									</div>
								</div>
								<div class="single-element-widget">
									<h3 class="mb-30 title_color">Radios</h3>
									<div class="switch-wrap d-flex justify-content-between">
										<p>01. Sample radio</p>
										<div class="primary-radio">
											<input type="checkbox" id="default-radio">
											<label for="default-radio"></label>
										</div>
									</div>
									<div class="switch-wrap d-flex justify-content-between">
										<p>02. Primary Color radio</p>
										<div class="primary-radio">
											<input type="checkbox" id="primary-radio" checked>
											<label for="primary-radio"></label>
										</div>
									</div>
									<div class="switch-wrap d-flex justify-content-between">
										<p>03. Confirm Color radio</p>
										<div class="confirm-radio">
											<input type="checkbox" id="confirm-radio" checked>
											<label for="confirm-radio"></label>
										</div>
									</div>
									<div class="switch-wrap d-flex justify-content-between">
										<p>04. Disabled radio</p>
										<div class="disabled-radio">
											<input type="checkbox" id="disabled-radio" disabled>
											<label for="disabled-radio"></label>
										</div>
									</div>
									<div class="switch-wrap d-flex justify-content-between">
										<p>05. Disabled radio active</p>
										<div class="disabled-radio">
											<input type="checkbox" id="disabled-radio-active" checked disabled>
											<label for="disabled-radio-active"></label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>  -->
				</div>
			</div>

			<!-- End Align Area -->
        
        
        <!--================Footer Area =================-->
       @include('layouts.footer')
        <!--================End Footer Area =================-->
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>