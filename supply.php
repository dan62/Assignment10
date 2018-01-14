<?php include 'header.php';?>
<script src="js/Validation_suppliers.js"></script>
<div class="container">
  <div class="jumbotron">
    <h1>Create Supplier</h1>
    <form action="create_supplier.php" method="post" name= "myForm" onsubmit="return validateForm()">
    <h6 class="p-3 mb-4 mt-4 bg-primary text-white">1. General Information</h2>
     <div id="items">
      <div class="form-row">
     <div class="form-group col-md-3">
          <label>Supplier First Name</label>
          <input name="fName" type="text" class="form-control">
        </div>
        <div class="form-group col-md-3">
          <label>Surname</label>
          <input name="sName" type="text" class="form-control">
        </div>
      
        <div class="form-group col-md-7">
          <label>Organization Name</label>
          <input name="organization" type="text" class="form-control">
        </div>
         <div class="form-group col-md-7">
          <label>Email Address</label>
          <input name="email" type="email" class="form-control">
        </div>
         <div class="form-group col-md-7">
          <label>Contact Number</label>
          <input name="cell_number" type="number" class="form-control">
        </div>
         <div class="form-group col-md-7">
          <label>Company National Registration Number</label>
          <input name="reg_number" type="text" class="form-control">
        </div></div>
    <div class="form-group">
      <label for="">Company Location</label>
      <textarea name="location" class="form-control" rows="3"></textarea>
    </div>
    <h6 class="p-3 mb-4 mt-4 bg-primary text-white">2. Products able to supply</h2>
    <div id="items">
      <div class="form-row">
        <div class="form-group col-md-2">
          <label>Product</label>
          <input name="product[]" type="text" class="form-control">
        </div>
        <div class="form-group col-md-7">
          <label>Description</label>
          <input name="desc[]" type="text" class="form-control">
        </div>
        <div class="form-group col-md-1">
          <label>Quantity</label>
          <input name="qty[]" type="number" class="form-control">
        </div>
        <div class="form-group col-md-2">
          <label>Cost/Unit (in baht)</label>
          <input name="cost[]" type="number" class="form-control">
        </div>
      </div>
    </div>
  <button id="moreItems" type="button" class="btn btn-info">+Add more items</button>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
</div>

<?php include 'footer.php';?>
