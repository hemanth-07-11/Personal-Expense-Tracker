<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
	
	<!--Load the AJAX API-->
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript">
            // Load the Visualization API and the piechart package.
	google.load('visualization', '1', {packages: ['corechart']});
      google.setOnLoadCallback(drawChart);

      function drawChart() {

        var jsonData = $.ajax({
                          url: "fetch.php",
                          dataType: "json",
                          async: false
                          }).responseText;
						  
		var data = new google.visualization.DataTable(jsonData);
        
        var options = {
          title: 'Expense Track',
          width: 1000,
          height: 500
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

        chart.draw(data, options);
		}
        </script>

  </head>
<style>
.th {
  position: absolute;
transition: transform .2s; 
  top: 10px;
font-family:Segoe Print;
  right:130px;

 color:black;
 -ms-transform: rotate(278deg); /* IE 9 */
  transform: rotate(0deg);
  text-shadow: 1px 3px #8CF7F2;
  font-size: 20px;
   -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;

}
.th:hover{

transform: scale(1.1);
 -ms-transform: rotate(278deg); /* IE 9 */
  transform: rotate(0deg);
font-size: 40px
}

.blink {
      animation: blinker 1s linear infinite;
      color: black;
      font-size: 26px;
      font-weight: bold;
    
      }
      @keyframes blinker {  
      50% { opacity: 0; }
      }
@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #F4F967, 0 0 20px #F4F967 , 0 0 30px #F4F967, 0 0 40px #F4F967, 0 0 50px red, 0 0 60px white, 0 0 70px 0C0A0A;
  }
  
  to {
    text-shadow: 0 0 20px red, 0 0 30px #ff4da6, 0 0 40px #EEE972, 0 0 50px red, 0 0 60px #EEE972, 0 0 70px red, 0 0 80px #F4F967;
  }}



</style>
<body>

    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul class="nav nav-pills">
              <li>
                <a href="mainpage.php">Home</a>
              </li>
              <li class="active">
                <a href="#">Reports</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8"></div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-12">
                <h2 class="text-primary text-right">Money in Wallet
                  <br>Rs. <?php include('money_in_wallet.php');?></h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <h2 class="text-success">Expense Timeline :</h2>
              </div>
            </div>
            <div class="row">
				<div class="col-md-12">
					<!--Div that will hold the pie chart-->
                    <div id="chart_div"></div>
				</div>
			</div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
              	<h2 class="text-success">Expense Report :</h2>
              </div>
            </div>
            <div class="row">
				<div class="col-md-12">
					<?php include("exp_table.php"); ?>
				</div>
			</div>
          </div>
        </div>
      </div>
    </div>
  
   <b>


<div class="th">
<p class="blink">Expense Tracker Developed by<a href="https://github.com/hemanth-07-11" target=_blank><font color="black"> HEMANTH N </font></a></p>
</div>
</b>

</body></html>