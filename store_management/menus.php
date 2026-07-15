<br>
<nav class="navbar navbar-inverse" style="background-color:#1f607d;">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="index.php" class="navbar-brand" id="index_menu"><img src="images/Store_Mngmnt_System.png" alt="Store Mngmnt System"></a>
		</div>
		<ul class="nav navbar-nav menus">
			<li><a href="supplier.php" id="supplier_menu">Supplier</a></li>	
			|
			<li><a href="customer.php" id="customer_menu">Customer</a></li>
			|
			<li><a href="product.php" id="product_menu">Product</a></li>
			|
			<li><a href="purchase.php" id="purchase_menu">Purchase</a></li>
			|
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
					 Setting Up <span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li><a href="category.php" id="category_menu">Category</a></li>
					<li><a href="brand.php" id="brand_menu">Brand</a></li>
				</ul>
			</li>
			|
			<li><a href="order.php" id="order_menu">Orders</a></li>			
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count"></span> 
					<?php echo $_SESSION['name']; ?><span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li><a href="#">Account</a></li>
					<li><a href="action.php?action=logout">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>
</nav>