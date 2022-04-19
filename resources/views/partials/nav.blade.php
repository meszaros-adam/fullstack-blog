<!-- HEADER -->
<div style="position: relative;">
			<div class="header">
				<div class="menu_all" id="myHeader">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-4 col-md-4 col-lg-4">
								<div class="logo">
									<a href="/">
										<div class="logo_img">
											<img src="https://cdn.logo.com/hotlink-ok/logo-social.png" alt="image">
										</div>
									</a>
								</div>
							</div>
							<div class="col-8 col-md-8 col-lg-8">
								<div class="menu_right d-flex">
									<div class="menu_right_list">
										<ul class="menu_right_ul d-flex">
											<li class="dis_fx_cntr">
												<a href="/">HOME</a>
											</li>
											@if(count($categories)>0)
												@foreach($categories as $cat)
												<li class="dis_fx_cntr">
													<a href="/category/{{$cat->categoryName}}/{{$cat->id}}">{{$cat->categoryName}}</a>
												</li>
												@endforeach
											@endif
											<li>
												<a href="/login_page">LOGIN</a>
											</li>
											<li>
												<a href="/registration_page">Register</a>
											</li>
										</ul>
									</div>
									<search> </search>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- HEADER -->