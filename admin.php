<?php
 include('header.php');
if(isset($_SESSION['user_id']) && $_SESSION['user_id']>0 && isset($_SESSION['is_admin']) && $_SESSION['is_admin']==true)
{

}
else
{
	header('Location:index.php');
}
?>
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-12">
      <form class="form-horizontal" action="admin-submit.php" method="post" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend>PRODUCTS</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>  
  <div class="col-md-4">
  <input id="product_name" name="product_name" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_categorie">PRODUCT CATEGORY</label>
  <div class="col-md-4">
    <select id="product_categorie" name="product_category" class="form-control" >
      <option value="fashion">Fashion</option>
      <option value="electronics">Electronics</option>
      <option value="skincare">Skin-care</option>
     </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity">AVAILABLE QUANTITY</label>  
  <div class="col-md-4">
  <input id="available_quantity" name="available_quantity" placeholder="AVAILABLE QUANTITY" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_description">PRODUCT DESCRIPTION</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="product_description" name="product_description"></textarea>
  </div>
</div>


 <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">main_image</label>
  <div class="col-md-4">
    <input id="filebutton" name="fileToUpload" class="input-file" type="file">
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submitbutton">Submit Button</label>
  <div class="col-md-4">
    <button id="singlebutton" name="submitbutton" class="btn btn-primary">Button</button>
  </div>
  </div>

</fieldset>
</form>
 </div>
</div>
</div>
<?php
 include('footer.php');
?>