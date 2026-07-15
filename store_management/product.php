<?php
ob_start();
session_start();
include('inc/header.php');
include 'Inventory.php';
$inventory = new Inventory();
$inventory->checkLogin();
?>
<title>Inventory Management System</title>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<script src="js/product.js"></script>
<script src="js/common.js"></script>
<?php include('inc/container.php');?>
<div class="container">
	<?php include("menus.php"); ?>

	<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
                    <div class="panel-heading">
                    	<div class="row">
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
                            	<h3 class="panel-title">Manage Product</h3>
                            </div>

                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" align='right'>
                                <button type="button" name="add" id="addProduct" class="btn btn-success btn-xs">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row"><div class="col-sm-12 table-responsive">
                            <table id="productList" class="table table-bordered table-striped">
                                <thead><tr>
                                    <th>ID</th>
									<th>Category</th>
									<th>Brand Name</th>
                                    <th>Product Name</th>
									<th>Product Model</th>
                                    <th>Quantity</th>
                                    <th>Supplier Name</th>
                                    <th>Status</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr></thead>
                            </table>
                        </div></div>
                    </div>
                </div>
			</div>
		</div>

        <div id="productModal" class="modal fade">
            <div class="modal-dialog">
                <form method="post" id="productForm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><i class="fa fa-plus"></i> Add Product</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Select Category</label>
                                <select name="categoryid" id="categoryid" class="form-control" required>
                                    <option value="">Select Category</option>
                                    <?php echo $inventory->categoryDropdownList();?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Select Brand</label>
                                <select name="brandid" id="brandid" class="form-control" required>
                                    <option value="">Select Brand</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" name="pname" id="pname" class="form-control" required />
                            </div>
							<div class="form-group">
                                <label>Product Model</label>
                                <input type="text" name="pmodel" id="pmodel" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label>Product Description</label>
                                <textarea name="description" id="description" class="form-control" rows="5" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Product Quantity</label>
                                <div class="input-group">
                                    <input type="text" name="quantity" id="quantity" class="form-control" required pattern="[+-]?([0-9]*[.])?[0-9]+" />
                                    <span class="input-group-addon">
                                        <select name="unit" id="unit" required>
                                            <option value="">Select Unit</option>
                                            <option value="Bags">Bags</option>
                                            <option value="Bottles">Bottles</option>
                                            <option value="Box">Box</option>
                                            <option value="Dozens">Dozens</option>
                                            <option value="Feet">Feet</option>
                                            <option value="Gallon">Gallon</option>
                                            <option value="Grams">Grams</option>
                                            <option value="Inch">Inch</option>
                                            <option value="Kg">Kg</option>
                                            <option value="Liters">Liters</option>
                                            <option value="Meter">Meter</option>
                                            <option value="Nos">Nos</option>
                                            <option value="Packet">Packet</option>
                                            <option value="Rolls">Rolls</option>
                                        </select>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Product Base Price</label>
                                <input type="text" name="base_price" id="base_price" class="form-control" required pattern="[+-]?([0-9]*[.])?[0-9]+" />
                            </div>
                            <div class="form-group">
                                <label>Product Tax (%)</label>
                                <input type="text" name="tax" id="tax" class="form-control" required pattern="[+-]?([0-9]*[.])?[0-9]+" />
                            </div>
							<div class="form-group">
                                <label>Supplier</label>
                                <select name="supplierid" id="supplierid" class="form-control" required>
                                    <option value="">Select Supplier</option>
                                    <?php echo $inventory->supplierDropdownList();?>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="pid" id="pid" />
                            <input type="hidden" name="btn_action" id="btn_action" />
                            <input type="submit" name="action" id="action" class="btn btn-info" value="Add" />
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div id="productViewModal" class="modal fade">
            <div class="modal-dialog">
                <form method="post" id="product_form">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><i class="fa fa-plus"></i> Product Details</h4>
                        </div>
                        <div class="modal-body">
                            <Div id="productDetails"></Div>
                        </div>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

</div>
<?php include('inc/footer.php');?>
