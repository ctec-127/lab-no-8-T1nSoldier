<div class="container">
<div class="jumbotron alert-success">
  <h1 class="display-4">Temperature Converter</h1>
  <p class="lead">Using this application, you may translate a temperature from one scale to another.</p>
  <hr class="my-2">
  <p>Enter the number to be converted and select the scale to convert from.</p>
  <p>Select the scale you want to convert to. Press "convert" and Presto!</p>
  
</div>
<div id="wrapper">
	<!-- <div class="row"> -->
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<div class="row">
		<div class="card bg-info col-lg-5 col-md-12" >
			<div class="card-body section">
			<label for="temp" class="col">Temperature</label>
			<select class="col" name="originalunit">
				<option class="form-control" value="--Select--"<?php if($originalUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
				<option class="form-control" value="celsius"<?php if($originalUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
				<option class="form-control" value="farenheit"<?php if($originalUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
				<option class="form-control" value="kelvin"<?php if($originalUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
			</select>
			<input class="col mt-2" type="text" value="<?php if (isset($_POST['originaltemp'])) echo $_POST['originaltemp'];?>" name="originaltemp" size="7" maxlength="7" id="temp">
			</div>
		</div>
		
		<div class="card col-lg-2 col-md-12"></div>

		<div class="card bg-info col-lg-5 col-md-12">
			<div class="card-body">
			<label for="convertedtemp" class="col">Converted Temp</label>
			<select class="col" name="conversionunit">
				<option class="form-control" value="--Select--"<?php if($conversionUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
				<option class="form-control" value="celsius"<?php if($conversionUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
				<option class="form-control" value="farenheit"<?php if($conversionUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
				<option class="form-control" value="kelvin"<?php if($conversionUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
			</select>
			<input class="mt-2 col" type="text" value="<?php if (isset($_POST['originaltemp'])) echo round($convertedTemp, 1);?>" 
			name="convertedtemp" size="7" maxlength="7" id="convertedtemp" readonly>
			</div>
		</div>
	
		<div class="col-12">
		<input class="btn btn-block btn-outline-dark mt-3" type="submit" value="Convert"/>   
		</div>
		</div>
	</form>
</div><!-- end wrapper div-->
<!-- </div> -->