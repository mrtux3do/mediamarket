<div class="container-fluid">
	<div class="row">
		<div id="content-header">
			<div id="container">
				<div id="lang-mo">
					<ul>
						<li id="language"> 
							<p class="eng"> EN </p>
							<p class="vi"> Vi </p> 
						</li>
						<li> USD </li>
					</ul>
				</div>

				<div id="menu-top" class="pull-right">
					<ul>
						<li>Help & Contact</li>
						<li>Order Status</li>
						<li id="myaccount">
							<p>My Account</p>
							<ul id="account">
								<li> 
									<?php echo $this->Html->link( 'Register', 
										array(
											'controller' => 'Users',
											'action' => 'register',
											'full_base' => true
										)); 
									?>
								</li>
								<li> 
									<a href="#"> Login </a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div id="top-menu">
			<div id="container">
				<div class="row">
					<div id="logo" class="col-lg-2">
						<div>Media</div><div>market</div>
					</div>

					<div id="search" class="col-lg-7">
						<input type="text" name="search" placeholder="Search for products...">
						<button class="btn-search"></button>
						<!-- <span id="all-category">All Categories</span> -->
					</div>

					<div id="cart-wish" class="col-lg-3">
						<ul>
							<li id="compare">0</li>
							<li id="wishlist">0</li>
							<li id="cart">0</li>
							<li id="price">$0.00</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div id="main-menu">
			<div id="container">
				<div id="sort-category">
					<button>SHOP BY CATEGORY</button>
					<div class="item-categories">
						<ul>
							<?php if(isset($category)): ?>
								<?php foreach($category as $data): ?>
									<li> <?php echo $data['Category']['category_name'] ?> </li>
								<?php endforeach; ?>
							<?php endif; ?>
						</ul>
					</div>
				</div>

				<ul>
					<li id="menu-active">home</li>
					<li id="menu-active">shop</li>
					<li id="menu-active">blog</li>
					<li id="menu-active">pages</li>
					<li>product</li>
					<li>brands</li>
					<li id="menu-deal">today's deal</li>
					<li>new arrival</li>
					<li id="menu-icon"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></li>
				</ul>
			</div>
		</div>
	</div>
</div>