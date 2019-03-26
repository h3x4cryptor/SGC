            <div class="form-group">
  <div class="input-group input-group-lg">
    <div class="input-group-addon">
      <select>
        <option>Mr.</option>
        <option>Mrs.</option>
        <option>Dr</option>
      </select>
    </div>
    <div class="input-group-addon">
      <span class="fa fa-user"></span>
    </div>
    <input type="text" class="form-control" placeholder="Name...">
  </div>


<style>
 .input-merge .col-xs-2,
 .input-merge .col-xs-4,
 .input-merge .col-xs-6 {
   padding-left: 0;
   padding-right: 0;
 }
 .input-merge div:first-child .form-control {
   border-top-right-radius: 0;
   border-bottom-right-radius: 0;
 }
 .input-merge div:last-child .form-control {
   border-top-left-radius: 0;
   border-bottom-left-radius: 0;
 }
 .input-merge div:not(:first-child) {
   margin-left: -1px;
 }
 .input-merge div:not(:first-child):not(:last-child) .form-control {
   border-radius: 0;
 }
 .focus {
   z-index: 2;
 }

</style>



<?php



$array = array([
  po => 'sale',
  branch => 'sale',
  salemanid => 'sale',     
  array([materialnumber => 'sale',
  productname => 'product',
  qty => 'test',
  free => 'test',
  price => 'test',
  sku => 'sku'))]] ;
  print_r( $array );


$insert = array([
  po => $_POST['po'],
  branch => $_POST['branch'],
  salemanid => $_POST['salemanid'],

  array([materialnumber => $_POST['materialnumber'],
  productname => $_POST['productname'],
  qty => $_POST['qty'],
  free => $_POST['free'],
  price => $_POST['price'],
  sku => $_POST['sku'])) ;







    // Loop through Object
    $someObject = ...; // Replace ... with your PHP Object
    foreach($someObject as $key => $value) {
      echo $value->po . ", " . $value->qty . "<br>";
    }

    
?>