<!DOCTYPE html>
<html>
<head>
<title>Eco list - Shopping list</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src = "script.js"></script>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="../footer.css"/>
<link rel="stylesheet" href="../navButton.css"/>
<link rel="stylesheet" href="../navMenu.css">
<script src="navScript.js"></script>
<link rel="stylesheet" href="../fonts/font.css">
<script src="../functionHiding.js" id="SelfDestruct"></script>
</head>
<body onload="setBurger(true);hide_function()">
    <div id="GUI">
        <?php include('../navButton.html');
            include('../navMenu.html');?>
    </div>
<p>&nbsp;</p>
<h1 class="text-center ecolistTitle">My EcoList</h1>
<p>&nbsp;</p>
  <section class="container">

    <div id="btnAddContainer">
      <button id="btnAdd" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-plus-sign"></i>&nbsp; Add Item&nbsp;</button>
    </div>
    <div id="btnCartContainer">
      <button id="btnCart" type="button" class="btn btn-info"><i class="glyphicon glyphicon-shopping-cart"></i>&nbsp; View Cart&nbsp;</button>
    </div>

    <!--
    <div id="btnRemoveContainer">
     <button id="btnRemove" type="button" class="btn btn-primary" data-toggle="tooltip" data-original-title="Add more controls"><i class="glyphicon glyphicon-minus-sign"></i>&nbsp; Remove All Items&nbsp;</button>
    </div>
    -->


    <div class="TableWrapper">
      <div class="table table-responsive" id="TableOne">
        <table class="table table-responsive table-striped table-bordered">
          <thead>
      	     <tr>
          	    <th class="checkBoxTableHead">Cart</th>
               	<th class="nameTableHead">Name</th>
              	<th class="smallTableHead">Quantity</th>
              	<th class="smallTableHead">Remove</th>
              </tr>
          </thead>

          <tbody id="TextBoxContainer">
          <!--new rows appear here-->
          </tbody>

          <tfoot>
            <tr>
              <th colspan="4">
                  <button id="btnRemove" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-minus-sign"></i>&nbsp; Remove All Items&nbsp;</button>
              </th>
            </tr>
          </tfoot>
        </table>
      </div>
      <div id="cartContainer">
          <div id="cartTitle">
              <h1 class="text-center">Cart</h1>
              </div>

              <div id="removeWarning">
              <p>double tap to remove</p>
              </div>
                 
              <div id="listContainer">
                <ul class="list-group" data-toggle="tooltip" title="double tap to remove" data-placement="top">
                </ul>
                 <button id="btnSave" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok-circle"></i>&nbsp; Save Cart&nbsp;</button>
                 <button id="btnClear" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-minus-sign"></i>&nbsp; Clear Cart&nbsp;</button>
              </div>
          </div>
    </div>
  </section>
  <?php
    include('../footer.html');
  ?>
  </body>
<html>