<footer class="site-footer" id="contact" style="background-image: url('Frontend/images/footer-back.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-8 col-md-12">
					<div class="footer-contact">
						<h2 class="h2-title">Book Your Table</h2>
						<div class="contact-form">
					    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert" style="background-color:#F2C94C">
                            <strong>Success!</strong> {{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
						<form method="post" action="{{ url('/tablebook') }}">
							@csrf
							<div class="row">
								<div class="col-md-4">
									<div class="form-box">
										<input type="text" name="reservation_date" placeholder="Date" class="form-input" id="datepicker">
										<span class="input-icon"><img src="Frontend/images/icon-calendar.png" alt="Input Icon"></span>
										@if ($errors->has('reservation_date'))
											<span class="text-danger">{{ $errors->first('reservation_date') }}</span>
										@endif
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-box">
										<input type="text" name="reservation_time" placeholder="Time" class="form-input" id="timepicker">
										<span class="input-icon"><img src="Frontend/images/icon-time.png" alt="Input Icon"></span>
										@if ($errors->has('reservation_time'))
											<span class="text-danger">{{ $errors->first('reservation_time') }}</span>
										@endif
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-box">
										<input type="text" name="guest" placeholder="No. of Guests" class="form-input">
										<span class="input-icon"><img src="Frontend/images/icon-guest.png" alt="Input Icon"></span>
										@if ($errors->has('guest'))
											<span class="text-danger">{{ $errors->first('guest') }}</span>
										@endif
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-box">
										<input type="text" name="name" placeholder="Your Name" class="form-input">
										<span class="input-icon"><img src="Frontend/images/icon-user.png" alt="Input Icon"></span>
										@if ($errors->has('name'))
											<span class="text-danger">{{ $errors->first('name') }}</span>
										@endif
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-box">
										<input type="email" name="email" placeholder="Your Email" class="form-input">
										<span class="input-icon"><img src="Frontend/images/icon-mail.png" alt="Input Icon"></span>
										@if ($errors->has('email'))
											<span class="text-danger">{{ $errors->first('email') }}</span>
										@endif
									</div>
								</div>
								<div class="col-md-12">
									<div class="submit-btn">
										<button type="submit" name="submit" class="btn btn-warning">Submit Now</button>
									</div>
								</div>
							</div>
						</form>
						
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-info">
			<div class="footer-info-img" style="background-image: url('Frontend/images/footer-back.jpg');"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-12 pr-lg-0">
						<div class="footer-logo">
							<a href="index.html" title="FoodeCart"><img src="Frontend/images/logo.png" alt="Logo" /></a>
						</div>
						<div class="site-social-icon">
							<a href="javascript:void(0)" title="Follow on Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="javascript:void(0)" title="Follow on Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							<a href="javascript:void(0)" title="Follow on Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						</div>
					</div>
					<div class="col-lg-7 col-12">
						<div class="footer-content">
							<div class="footer-menu">
								<ul>
									<li><a href="{{url('/about')}}">About Us</a></li>
									<li><a href="{{url('/offer')}}">Offer</a></li>
									<li><a href="{{url('/menu')}}">Menu</a></li>
									<li><a href="{{url('/gallary')}}">Gallery</a></li>
									<li><a href="{{url('/team')}}">Team</a></li>
									<li><a href="{{url('/contact')}}">Contact Us</a></li>
								</ul>
							</div>
							<p>"Welcome to FoodeCart, your one-stop destination for culinary delights! Explore our diverse menu featuring a fusion of flavors from around the globe. From hearty classics to innovative creations, we cater to every taste bud. Join us on a gastronomic adventure and elevate your dining experience with FoodeCart."</p>
						</div>
					</div>
					<div class="col-lg-3 col-12">
						
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="copy-right">
								<p>All Rights Reserved © 2024. Developed by: <a href="mailto:hassanjalvi626@gmail.com" target="_blank">Muhammad Hassan Abbas Jalvi</a> under supervision of: <a href="mailto:jamil.57@hotmail.com" target="_blank">Muhammad Jamil</a></p>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer End -->

	<!-- Scroll To Top Start -->
	<a href="#main-banner" class="scroll-top" id="scroll-top"><span><i class="fa fa-angle-double-up" aria-hidden="true"></i></span></a>
	<!-- Scroll To Top End -->


	<!-- Jquery JS Link -->
	<script src="Frontend/js/jquery.min.js"></script>

	<!-- Bootstrap JS Link -->
	<script src="Frontend/js/bootstrap.min.js"></script>

	<!-- Date Picker JS Link -->
	<script src="Frontend/js/moment.min.js"></script>
	<script src="Frontend/js/bootstrap-datetimepicker.min.js"></script>

	<!-- Slick Slider JS Link -->
	<script src="Frontend/js/slick.min.js"></script>

	<!-- Wow Animation JS Link -->
	<script src="Frontend/js/wow.min.js"></script>	

	<!-- Custom JS Link -->
	<script src="Frontend/js/custom.js"></script>

</body>


</html>