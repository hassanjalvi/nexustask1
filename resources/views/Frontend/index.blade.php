@section('title', 'Home')
@extends('Frontend.layots.main')
@section('main-container')
<script>
	 @if(Auth::check())
	 alert('Welcome, {{ Auth::user()->name }}!');
	 @endif
</script>
<section class="main-banner" id="main-banner">
	<div class="banner-slider">
		<div class="banner-slide-box" style="background-image: url('Frontend/images/banner-img.jpg');"></div>
		<div class="banner-slide-box" style="background-image: url('Frontend/images/banner-img2.jpg');"></div>
		<div class="banner-slide-box" style="background-image: url('Frontend/images/banner-img3.jpg');"></div>
		<div class="banner-slide-box" style="background-image: url('Frontend/images/banner-img4.jpg');"></div>
	</div>
	<span class="banner-shape" style="background-image: url('Frontend/images/banner-shape.png');"></span>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12 col-lg-11 col-xl-9">
				<div class="banner-content">
					<h1 class="h1-title wow flipInX">We Serve Delicious Food</h1>
					<p>"Indulge in our exquisite culinary delights at 'We Serve Delicious Food.' Savor every bite of our mouthwatering dishes crafted with passion and expertise. Join us for an unforgettable dining experience filled with flavor and satisfaction."</p>
					<a href="offer.php" title="See Full Menu" class="sec-btn-transparent wow fadeInUp"><span>Order Now</span></a>
				</div>
			</div>
		</div>
		<div class="site-social-media">
			<span>Follow Us</span>
			<a href="javascript:void(0)" title="Follow on Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="javascript:void(0)" title="Follow on Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			<a href="javascript:void(0)" title="Follow on Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
		</div>
	</div>
	<div class="scroll-down">
		<a href="#about-us" title="Scroll To Down"><span></span><span></span></a>
	</div>
</section>
<!-- Banner End -->

<!-- Welcome To FoodeCart Start -->
<section class="common-sec main-welcome" id="about-us">
	<div class="element-top">
		<img src="Frontend/images/element1.png" alt="Element Image" />
	</div>
	<div class="element-bottom">
		<img src="Frontend/images/element2.png" alt="Element Image" />
	</div>
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-6 col-md-8">
				<div class="welcome-img wow fadeIn">
					<img src="Frontend/images/welcome-img.png" alt="Welcome Image" />
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="welcome-content">
					<h2 class="h2-title">Welcome To Foodecart</h2>
					<p>"Welcome to Foodecart, where every craving meets its match. Dive into a world of culinary delights with our diverse menu. From savory classics to innovative creations, we cater to every palate. Join us and embark on a gastronomic journey like no other. Satisfaction guaranteed, one bite at a time."</p>
				</div>
			</div>
		</div>
</section>
<!-- Welcome To FoodeCart End -->

<!-- Top Item’s We Have In Start -->
<section class="main-top-items common-sec" id="offer">
	<div class="element-top">
		<img src="Frontend/images/element3.png" alt="Element Image" />
	</div>
	<div class="element-bottom">
		<img src="Frontend/images/element4.png" alt="Element Image" />
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="top-items-title">
					<h2 class="h2-title gray-after-effect">Top Item’s We Have In</h2>
				</div>
				<div class="top-items-tabbing">
					<div class="top-items-tab-list">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="breakfast-tab" data-toggle="tab" href="#breakfast" role="tab" aria-controls="breakfast" aria-selected="true">
									<span>
										<span class="tab-icon">
											<img src="Frontend/images/breakfast.png" class="tab-icon-active" alt="Breakfast Icon" />
											<img src="Frontend/images/breakfast-white.png" class="tab-icon-hover" alt="Breakfast Icon" />
										</span>
										Breakfast
									</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="lunch-tab" data-toggle="tab" href="#lunch" role="tab" aria-controls="lunch" aria-selected="false">
									<span>
										<span class="tab-icon">
											<img src="Frontend/images/lunch.png" class="tab-icon-active" alt="Lunch Icon" />
											<img src="Frontend/images/lunch-white.png" class="tab-icon-hover" alt="Lunch Icon" />
										</span>
										Lunch
									</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="dinner-tab" data-toggle="tab" href="#dinner" role="tab" aria-controls="dinner" aria-selected="false">
									<span>
										<span class="tab-icon">
											<img src="Frontend/images/dinner.png" class="tab-icon-active" alt="Dinner Icon" />
											<img src="Frontend/images/dinner-white.png" class="tab-icon-hover" alt="Dinner Icon" />
										</span>
										Dinner
									</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="dessert-tab" data-toggle="tab" href="#dessert" role="tab" aria-controls="dessert" aria-selected="false">
									<span>
										<span class="tab-icon">
											<img src="Frontend/images/dessert.png" alt="Dessert Icon" />
											<img src="Frontend/images/dessert-white.png" class="tab-icon-hover" alt="Dessert Icon" />
										</span>
										Dessert
									</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="tab-content top-items-tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="breakfast" role="tabpanel" aria-labelledby="breakfast-tab">
							<div class="row align-items-center">
								<div class="col-lg-6 col-md-12 order-lg-1 order-2">
									<div class="tab-content-text">
										<h3 class="h3-title">Fried Egg & Pancake Topped With Bacon And Orange Juice</h3>
										<p>Start your day right with our mouthwatering Fried Egg & Pancake topped with crispy bacon. Pair it perfectly with a refreshing glass of freshly squeezed orange juice. Indulge in the perfect balance of savory and sweet flavors, making breakfast an experience to savor every morning.</p>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 order-lg-2 order-1">
									<div class="tab-content-img-box wow fadeIn">
										<div class="tab-content-img" style="background-image: url('Frontend/images/items-img.jpg');">
										</div>
										<div class="tab-content-img-off">
											<p>50% Off</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="lunch" role="tabpanel" aria-labelledby="lunch-tab">
							<div class="row align-items-center">
								<div class="col-lg-6 col-md-12 order-lg-1 order-2">
									<div class="tab-content-text">
										<h3 class="h3-title">Traditional Shrimp Thai Dish</h3>
										<p>Transport your taste buds to Thailand with our authentic Traditional Shrimp Thai Dish. Succulent shrimp simmered in a fragrant blend of traditional Thai spices and herbs, creating a symphony of flavors that will tantalize your senses. Experience the true essence of Thai cuisine with every delicious bite.</p>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 order-lg-2 order-1">
									<div class="tab-content-img-box">
										<div class="tab-content-img" style="background-image: url('Frontend/images/items-img2.jpg');">
										</div>
										<div class="tab-content-img-off">
											<p>38% Off</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="dinner" role="tabpanel" aria-labelledby="dinner-tab">
							<div class="row align-items-center">
								<div class="col-lg-6 col-md-12 order-lg-1 order-2">
									<div class="tab-content-text">
										<h3 class="h3-title">Traditional Indonesian Dish</h3>
										<p>Embark on a culinary journey to Indonesia with our Traditional Indonesian Dish. Bursting with aromatic spices and rich flavors, this dish captures the essence of Indonesian cuisine. Indulge in tender meats or vibrant vegetables, perfectly complemented by fragrant rice and savory sauces. Experience the exotic taste of Indonesia today.</p>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 order-lg-2 order-1">
									<div class="tab-content-img-box">
										<div class="tab-content-img" style="background-image: url('Frontend/images/items-img3.jpg');">
										</div>
										<div class="tab-content-img-off">
											<p>55% Off</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="dessert" role="tabpanel" aria-labelledby="dessert-tab">
							<div class="row align-items-center">
								<div class="col-lg-6 col-md-12 order-lg-1 order-2">
									<div class="tab-content-text">
										<h3 class="h3-title">Cupcake, Cheesecake & Sweet Bread</h3>
										<p>Treat yourself to a delightful array of sweet delights with our Cupcake, Cheesecake & Sweet Bread selection. Indulge in the moist and fluffy cupcakes, decadent cheesecakes, and irresistible sweet bread. Perfect for any occasion or as a sweet pick-me-up, each bite is a heavenly delight you won't soon forget.</p>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 order-lg-2 order-1">
									<div class="tab-content-img-box">
										<div class="tab-content-img" style="background-image: url('Frontend/images/items-img4.jpg');">
										</div>
										<div class="tab-content-img-off">
											<p>30% Off</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Top Item’s We Have In End -->

<!-- Our Food Menu Start -->
<section class="main-food common-sec" id="menu-food">
	<div class="element-top">
		<img src="assets/images/element5.png" alt="Element Image" />
	</div>
	<div class="element-bottom">
		<img src="assets/images/element6.png" alt="Element Image" />
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="food-title">
					<h2 class="h2-title">Our Food Menu</h2>
				</div>
			</div>
		</div>
		<div class="main-menu-list">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="food-menu-box">
						<h3 class="h3-title">Main Course</h3>
						<div class="food-list-box">
							<div class="food-list">
								<h5 class="food-name">Super-Delicious Zuppa Toscana</h5>
								<p class="food-price">$40</p>
							</div>
							<div class="food-types">
								<ul>
									<li>Chicken</li>
									<li>Italian</li>
									<li>Sausage</li>
									<li>Spinach</li>
								</ul>
							</div>
						</div>
						<div class="food-list-box">
							<div class="food-list">
								<h5 class="food-name">Bacon Coil Baked Australian Beef</h5>
								<p class="food-price">$40</p>
							</div>
							<div class="food-types">
								<ul>
									<li>Chicken</li>
									<li>Italian</li>
									<li>Sausage</li>
									<li>Spinach</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="food-menu-box">
						<h3 class="h3-title">Soups & Salads</h3>
						<div class="food-list-box">
							<div class="food-list">
								<h5 class="food-name">Salat Banana Flower</h5>
								<p class="food-price">$40</p>
							</div>
							<div class="food-types">
								<ul>
									<li>Chicken</li>
									<li>Italian</li>
									<li>Sausage</li>
									<li>Spinach</li>
								</ul>
							</div>
						</div>
						<div class="food-list-box">
							<div class="food-list">
								<h5 class="food-name">Gourmet Mushroom Risotto</h5>
								<p class="food-price">$40</p>
							</div>
							<div class="food-types">
								<ul>
									<li>Chicken</li>
									<li>Italian</li>
									<li>Sausage</li>
									<li>Spinach</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="food-menu-box">
						<h3 class="h3-title">Desserts</h3>
						<div class="food-list-box">
							<div class="food-list">
								<h5 class="food-name">Ice Cream Tarte Apple</h5>
								<p class="food-price">$40</p>
							</div>
							<div class="food-types">
								<ul>
									<li>Apple</li>
									<li>Italian</li>
									<li>Milk</li>
									<li>Fruit</li>
								</ul>
							</div>
						</div>
						<div class="food-list-box">
							<div class="food-list">
								<h5 class="food-name">Fruit ‘Mille Feuille’</h5>
								<p class="food-price">$40</p>
							</div>
							<div class="food-types">
								<ul>
									<li>Apple</li>
									<li>Italian</li>
									<li>Milk</li>
									<li>Fruit</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="food-menu-box">
						<h3 class="h3-title">Drinks</h3>
						<div class="food-list-box">
							<div class="food-list">
								<h5 class="food-name">Double Chocolate Shake</h5>
								<p class="food-price">$40</p>
							</div>
							<div class="food-types">
								<ul>
									<li>Ice</li>
									<li>Italian</li>
									<li>Fruit</li>
									<li>Chocolate</li>
								</ul>
							</div>
						</div>
						<div class="food-list-box">
							<div class="food-list">
								<h5 class="food-name">All Fruit Milk Shake</h5>
								<p class="food-price">$40</p>
							</div>
							<div class="food-types">
								<ul>
									<li>Ice</li>
									<li>Italian</li>
									<li>Fruit</li>
									<li>Chocolate</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<br>
<br>
<section class="main-statistics common-sec" id="statistics">
    <div class="container">
        <div class="row">
			<div class="col-12">
				<div class="food-title">
					<h2 class="h2-title">Resturent Statistics</h2>
				</div>
			</div>
            <div class="col-md-3 col-sm-6">
                <div class="stat-box">
                    <h3 class="stat-number">123</h3>
                    <p class="stat-label">Outlets</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="stat-box">
                    <h3 class="stat-number">100</h3>
                    <p class="stat-label">Chefs</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="stat-box">
                    <h3 class="stat-number">300</h3>
                    <p class="stat-label">Menus</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="stat-box">
                    <h3 class="stat-number">30</h3>
                    <p class="stat-label">Countries</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection 