<div class="dashboard-sidebar">
		<div class="dashboard-sidebar-inner" data-simplebar>
			<div class="dashboard-nav-container">

				<!-- Responsive Navigation Trigger -->
				<a href="#" class="dashboard-responsive-nav-trigger">
					<span class="hamburger hamburger--collapse" >
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</span>
					<span class="trigger-title">Dashboard Navigation</span>
				</a>
				
				<!-- Navigation -->
				<div class="dashboard-nav">
					<div class="dashboard-nav-inner">

						<ul data-submenu-title="Start">
							<li class="active"><a href="dashboard.html"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
							<!-- <li><a href="dashboard-messages.html"><i class="icon-material-outline-question-answer"></i> Messages <span class="nav-tag">2</span></a></li>
							<li><a href="dashboard-bookmarks.html"><i class="icon-material-outline-star-border"></i> Bookmarks</a></li> -->
							<li><a href="dashboard-reviews.html"><i class="icon-material-outline-rate-review"></i> Reviews</a></li>
						</ul>
						
						<ul data-submenu-title="{{trans('app.manageAdsProducts')}} ">
							<li><a href="#"><i class="icon-material-outline-business-center"></i>{{trans('app.my-ads')}} </a>
								<ul>
								<li><a href="{{ url('ads-categories') }}">{{trans('app.manage-CategoriesAds')}}</a></li>
									<li><a href="{{ url('dashboard/ads') }}">{{trans('app.manage-ads')}}</a></li>
									<li><a href="{{ url('dashboard/ads/new') }}">{{trans('app.add-ads')}}</a></li>
								</ul>	
							</li>
							<li><a href="#"><i class="icon-material-outline-assignment"></i> {{trans('app.my-products')}}</a>
								<ul>
									<li><a href="dashboard-manage-tasks.html">{{trans('app.manage-CategoriesProducts')}}</a></li>
									<li><a href="dashboard-manage-tasks.html">{{trans('app.manage-products')}}</a></li>
									<li><a href="dashboard-manage-bidders.html">{{trans('app.add-product')}}</a></li>
								</ul>	
							</li>
						</ul>

						<ul data-submenu-title="Account">
							<li><a href="dashboard-settings.html"><i class="icon-material-outline-settings"></i> Settings</a></li>
							<li><a href="index-logged-out.html"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
						</ul>
						
					</div>
				</div>
				<!-- Navigation / End -->

			</div>
		</div>
	</div>