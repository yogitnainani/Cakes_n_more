<h1 align='center'>Hello Admin!</h1>
<center>
<form action="#">
  <input type="submit" name="addItem" value="Add Item" class="btn btn-success">
  <input type="submit" name="delItem" value="Delete Item" class="btn btn-danger">
  <input type="submit" name="updateItem" value="Update Item" class="btn btn-info">
</form>

<?php
  if(isset($_GET['addItem'])){
   echo "<form class='form-horizontal border' action='addItem_msg.php' method='post' enctype='multipart/form-data'>
           <fieldset>
             <legend>Add Item</legend>
               <div class='form-group'>
                 <label for='productCode' class='col-lg-2 control-label'>Product Code</label>
                   <div class='col-lg-10'>
                     <input type=text' class='form-control' name='productCode' id='productCode' placeholder='Product Code'>
                   </div>
               </div>
               <div class='form-group'>
                 <label for='img' class='col-lg-2 control-label'>Choose Image</label>
                   <div class='col-lg-10'>
                     <input type='file' class='form-control' id='img' name='img' placeholder='image'>
                   </div>
               </div>
               <div class='form-group'>
                 <div class='col-lg-10 col-lg-offset-2'>
                   <button type='reset' class='btn btn-default'>Reset</button>
                   <button type='submit' class='btn btn-primary' name='upload'>Upload</button>
                 </div>
               </div>
             </fieldset>
           </form>";
  }

 ?>

<h2 align="center">Pending Orders!</h2>
