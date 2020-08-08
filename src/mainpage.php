<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script>
      $(function () {
                    $( "#datepicker" ).datepicker({
                      changeMonth: true,//this option for allowing user to select month
                      changeYear: true, //this option for allowing user to select from year range
					  dateFormat: "yy-mm-dd"
                    });
                  });
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
              <li class="active">
                <a href="#">Home</a>
              </li>
              <li>
                <a href="reports.php">Reports</a>
              </li>
            </ul>
          </div>
        </div>
        <br>
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
        <br>
        <div class="row">
          <div class="col-md-12">
            <form class="form-horizontal" role="form" method="POST" action="wallet_add.php">
              <div class="row">
                <p>Add Money to your Wallet (Amount in Rs.) :
                  <input type="number" class="form-control" name="wallet_money">
                </p>
              </div>
              <div class="row text-center">
                <input class="btn btn-sm btn-success" type="submit" value="Add it...">
              </div>
            </form>
          </div>
        </div>
        <br>
        <br>
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center text-warning">---------------------------------------- &nbsp;OR &nbsp;--------------------------------------</h1>
          </div>
        </div>
        <br>
        <br>
        <div class="row">
          <div class="col-md-12">
            <p class="h4">Deduct money Spent - Expense :</p>
            <form class="form-horizontal" role="form" method="POST" action="exp_deduct.php">
              <div class="form-group">
                <div class="col-sm-2">
                  <p>Expense Name :</p>
                </div>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="exp_name">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <p>Money spent (in Rs.) :</p>
                </div>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name="exp_amount">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <p>Date :</p>
                </div>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="datepicker" name="exp_date">
                </div>
              </div>
              <div class="row text-center">
                <input class="btn btn-danger btn-sm" type="submit" value="Deduct">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
     <b>


<div class="th">
<p class="blink">Expense Tracker Developed by<a href="https://github.com/hemanth-07-11" target=_blank><b><font color="black"> HEMANTH N </font></b></a></p>
</div>
</b>

</body></html>