<div class="container">
<div class="jumbotron">
  <h1 class="display-4">Temperature Converter</h1>
  <p class="lead">Using this application, you may translate a temperature from one scale to another.</p>
  <hr class="my-4">
  <p>Enter the number to be converted and select the scale to convert from.</p>
  <p>Select the scale you want to convert to. Press "convert" and Presto!</p>
  
</div>
<div id="wrapper">
	<h1>Temperature Conversion Controls</h1>
	<h4>CTEC 127 - PHP with SQL 1</h4>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<div class="section">
			<label for="temp" class="col-3">Temperature</label>
			<input class="mr-5" type="text" value="<?php if (isset($_POST['originaltemp'])) echo $_POST['originaltemp'];?>" name="originaltemp" size="7" maxlength="7" id="temp">

			<select name="originalunit">
				<option class="form-control" value="--Select--"<?php if($originalUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
				<option class="form-control" value="celsius"<?php if($originalUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
				<option class="form-control" value="farenheit"<?php if($originalUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
				<option class="form-control" value="kelvin"<?php if($originalUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
			</select>
		</div>
		
		<div class="section">
			<label for="convertedtemp" class="col-3">Converted Temperature</label>
			<input class="mr-5" type="text" value="<?php if (isset($_POST['originaltemp'])) echo round($convertedTemp, 1);?>" 
			name="convertedtemp" size="7" maxlength="7" id="convertedtemp" readonly>

			<select name="conversionunit">
				<option class="form-control" value="--Select--"<?php if($conversionUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
				<option class="form-control" value="celsius"<?php if($conversionUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
				<option class="form-control" value="farenheit"<?php if($conversionUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
				<option class="form-control" value="kelvin"<?php if($conversionUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
			</select>
		</div>
		<input type="submit" value="Convert"/>   
	</form>
</div><!-- end wrapper div-->
</div>