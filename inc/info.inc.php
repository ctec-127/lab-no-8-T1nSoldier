<div class="container">
<div class="row">
<div class="col-6">
    <h3>Formulas</h3>
<!-- <div class="btn-group col-6">    -->
<button class="row mt-1 btn btn-danger btn-block" data-toggle="collapse" data-target="#convertF">Fahrenheit</button>
    <div id="convertF" class="collapse">
        
        <button class="row mt-1 ml-3 btn btn-primary" data-toggle="collapse" data-target="#ftok">To Kelvin</button>
        
        <button class="row mt-1 ml-3 btn btn-success" data-toggle="collapse" data-target="#ftoc">To Celsius</button>
            <div id="ftok" class="collapse">
                <p class="alert-primary">(&deg;F - 32) x 5/9 + 273.15 = &deg;K</p> 
            </div>
            <div id="ftoc" class="collapse">
                <p class="alert-success">(&deg;F) - 32 x 5/9 = &deg;C</p>
            </div>
    </div>


<button class="row mt-1 btn btn-success btn-block" data-toggle="collapse" data-target="#convertC">Celsius </button>
    <div id="convertC" class="collapse">

    <button class="row mt-1 ml-3 btn btn-danger" data-toggle="collapse" data-target="#ctof">To Fahrenheit</button>
        
        <button class="row mt-1 ml-3 btn btn-primary" data-toggle="collapse" data-target="#ctok">To Kelvin</button>
            <div id="ctof" class="collapse">
                <p class="alert-danger">(&deg;C x 9/5) + 32 = &deg;F </p> 
            </div>
            <div id="ctok" class="collapse">
                <p class="alert-primary">&deg;C + 273.15 = &deg;K</p>
            </div>
    </div>


<button class="row mt-1 btn btn-primary btn-block" data-toggle="collapse" data-target="#convertK">Kelvin </button>
    <div id="convertK" class="collapse">

    <button class="row mt-1 ml-3 btn btn-danger" data-toggle="collapse" data-target="#ktof">To Fahrenheit</button>
        
        <button class="row mt-1 ml-3 btn btn-success" data-toggle="collapse" data-target="#ktoc">To Celsius</button>
            <div id="ktof" class="collapse">
                <p class="alert-danger">(&deg;K - 273.15) x 9/5 + 32 = &deg;F </p> 
            </div>
            <div id="ktoc" class="collapse">
                <p class="alert-success">&deg;K - 273.15 = &deg;C</p>
            </div>
    </div>

</div><!--end of formula column-->
<div class="col-6">
    <h3>Information</h3>
    <div id="information">
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link alert-danger" data-toggle="collapse" href="#fahrenheitinfo">
          Fahrenheit
        </a>
      </div>
      <div id="fahrenheitinfo" class="collapse" data-parent="#information">
        <div class="card-body alert-danger">
            <p>The Fahrenheit scale is baced on a proposal by German physicist Daniel Gabriel Fahrenheit in 1724</p> 
            <p>The &deg;0 point is the freezing point of an equal mixture of ice water and ammonium chloride</p>
            <p>Pure water freezes at &deg;32</p>
            <p>The human body is &deg;98.6 on average</p>
            <p>Pure water boils at &deg;212</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link alert-success" data-toggle="collapse" href="#celsiusinfo">
        Celsius
      </a>
      </div>
      <div id="celsiusinfo" class="collapse" data-parent="#information">
        <div class="card-body alert-success">
          <p>The Celsius scale was named for Swedish astronomer Anders Celsius. It was previously called the centigrade scale.</p>
          <p>The centigrade scale was proposed in 1742</p>
          <p>The Celsius scale places the &deg;0 point where pure water freezes</p>
          <p>The human body is &deg;37 on average</p>
          <p>Pure water boils at &deg;100</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link alert-primary" data-toggle="collapse" href="#kelvininfo">
         Kelvin
        </a>
      </div>
      <div id="kelvininfo" class="collapse" data-parent="#information">
        <div class="card-body alert-primary">
          <p>The Kelvin scale is named for William Thomson, 1st Baron Kelvin of Glasgow University. Kelvin uses the same degree scale as Celsius</p>
          <p>0K is absolute zero, where all atomic motion ceases, making it the lowest temperature possible</p>
          <p>Pure water freezes at 273.15K</p>
          <p>The human body is 310.15K on average</p>
          <p>Pure water boils at 373.15K</p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>