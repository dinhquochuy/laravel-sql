
<header class="header-style-1">
	<style>
		img{
			max-width: 100%;
		}
	</style>
	<!-- ============================================== TOP MENU ============================================== -->
	<div class="top-bar animate-dropdown">
		<div class="container">
			<div class="header-top-inner">
				<div class="cnt-account">
					<ul class="list-unstyled">
						@if(Auth::check())
							<li>
								<a href="">Chào bạn {{Auth::user()->fullname}}</a>
							</li>
							<li>
								<a href="{{route('Logout')}}">
									<i class="icon fa fa-user"></i>Đăng Xuất</a>
							</li>
						@else	
							<li>
								<a href="{{route('dang_ki')}}">Đăng kí</a>
							</li>
							<li>
								<a href="{{route('dang_nhap')}}">
									<i class="icon fa fa-sign-in"></i>Đăng nhập</a>
							</li>
						@endif	
					</ul>
				</div>
				<!-- /.cnt-account -->
				<div class="clearfix"></div>
			</div>
			<!-- /.header-top-inner -->
		</div>
		<!-- /.container -->
	</div>
	<!-- /.header-top -->
	<!-- ============================================== TOP MENU : END ============================================== -->
	<div class="main-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
					<!-- ============================================================= LOGO ============================================================= -->
					<div class="logo">
						<a href="{{route('trang_chu')}}">
							<img src="{{URL::asset('template/assets/images/logo.png')}}" alt="">
						</a>
					</div>
					<!-- /.logo -->
					<!-- ============================================================= LOGO : END ============================================================= -->
				</div>
				<!-- /.logo-holder -->

				<div class="col-xs-12 col-sm-12 col-md-6 top-search-holder">
					<div class="contact-row">
						<div class="phone inline">
							<i class="icon fa fa-phone"></i> (400) 888 888 868
						</div>
						<div class="contact inline">
							<i class="icon fa fa-envelope"></i> saler@unicase.com
						</div>
					</div>
					<!-- /.contact-row -->
					<!-- ============================================================= SEARCH AREA ============================================================= -->
					<div class="search-area">
						<form method="get" action="{{route('search')}}">
							<div class="control-group">
								<ul class="categories-filter animate-dropdown">
									<li class="dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" href="category.html">Categories
											<b class="caret"></b>
										</a>
										<ul class="dropdown-menu" role="menu">
											<li class="menu-header">Computer</li>
											<li role="presentation">
												<a role="menuitem" tabindex="-1" href="category.html">- Laptops</a>
											</li>
											<li role="presentation">
												<a role="menuitem" tabindex="-1" href="category.html">- Tv & audio</a>
											</li>
											<li role="presentation">
												<a role="menuitem" tabindex="-1" href="category.html">- Gadgets</a>
											</li>
											<li role="presentation">
												<a role="menuitem" tabindex="-1" href="category.html">- Cameras</a>
											</li>

										</ul>
									</li>
								</ul>

								<input class="search-field" placeholder="Search here..." name="key"/>

								<a class="search-button" href="#"></a>

							</div>
						</form>
					</div>
					<!-- /.search-area -->
					<!-- ============================================================= SEARCH AREA : END ============================================================= -->
				</div>
				<!-- /.top-search-holder -->

				<div class="col-xs-12 col-sm-12 col-md-3 animate-dropdown top-cart-row">
					<!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

					<div class="dropdown dropdown-cart">
						<a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
							<div class="items-cart-inner">
								<div class="total-price-basket">
									<span class="lbl">Giỏ Hàng</span> 
								</div>
								<div class="basket">
									<i class="glyphicon glyphicon-shopping-cart"></i>
								</div>
								<div class="basket-item-count">
								<span class="count">
									@if(Session::has('cart')){{Session('cart')->totalQty}}@else 0 @endif
								</span>
								</div>

							</div>
						</a>
						<ul class="dropdown-menu">
							<li>
								@if(Session::has('cart'))
									@foreach($product_cart as $food)
										<div class="cart-item product-summary">
											<div class="row">
												<div class="col-xs-4">
													<div class="image">
														<a href="{{route('detail',$food['item']['id'])}}">
															<img src="template/assets/images/{{$food['item']['image']}}" alt="">
														</a>
													</div>
												</div>
												<div class="col-xs-7">

													<h3 class="name">
														<a href="index.php?page-detail">{{$food['item']['name']}}</a>
													</h3>
													<div class="price">{{$food['qty']}}<div>{{$food['item']['price']}}</div></div>
												</div>
												<div class="col-xs-1 action">
													<a href="{{route('xoagiohang',$food['item']['id'])}}">
														<i class="fa fa-trash"></i>
													</a>
												</div>
											</div>
										</div>
									@endforeach	
									<!-- /.cart-item -->
									<div class="clearfix"></div>
									<hr>

									<div class="clearfix cart-total">
										<div class="pull-right">
											<span class="text">Sub Total :</span>
											<span class='price'>@if(Session::has('cart')){{number_format($totalPrice)}} @else 0 @endif đồng</span>
										</div>
										<div class="clearfix"></div>	

									<a href="{{route('dathang',$food['item']['id'])}}" class="btn btn-upper btn-primary btn-block m-t-20">Đặt Hàng</a>
									</div>
									<!-- /.cart-total-->
								@endif
							</li>
						</ul>
						<!-- /.dropdown-menu-->
					</div>
					<!-- /.dropdown-cart -->

					<!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
				</div>
				<!-- /.top-cart-row -->
			</div>
			<!-- /.row -->

		</div>
		<!-- /.container -->

	</div>
	<!-- /.main-header -->

	<!-- ============================================== NAVBAR ============================================== -->
	<div class="header-nav animate-dropdown">
		<div class="container">
			<div class="yamm navbar navbar-default" role="navigation">
				<div class="navbar-header">
					<button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="nav-bg-class">
					<div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
						<div class="nav-outer">
							<ul class="nav navbar-nav">
								<li class="active dropdown yamm-fw">
									<a href="home.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Home</a>
								</li>
								<li class="dropdown yamm">
									<a href="home.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Danh Sách Sản Phẩm</a>
									<ul class="dropdown-menu">
										@foreach($loai_food as $loai)
										<li>
											<a href="{{route('typefood',$loai->id)}}">{{$loai->name}}</a>
										</li>
										
										@endforeach
									</ul>
								</li>
								<li class="dropdown">
									<a href="{{route('info')}}">Info</a>
								</li>
								<li class="dropdown">	
									<a href="{{route('contact')}}">Contact</a>
								</li>
							</ul>
							<!-- /.navbar-nav -->
							<div class="clearfix"></div>
						</div>
						<!-- /.nav-outer -->
					</div>
					<!-- /.navbar-collapse -->


				</div>
				<!-- /.nav-bg-class -->
			</div>
			<!-- /.navbar-default -->
		</div>
		<!-- /.container-class -->

	</div>
	<!-- /.header-nav -->
	<!-- ============================================== NAVBAR : END ============================================== -->

</header>

<!-- ============================================== HEADER : END ============================================== -->