<?php 
include("includes/header.php");
if(isset($_GET['del'])){
  $del_id = $_GET['del'];
 	$sql_del = "DELETE FROM trades WHERE id = '$del_id'";
  $query_del = mysqli_query($conn,$sql_del);
  echo "<script>alert('Trade deleted successfully')</script>";
  header("location:user_trades.php");
}
  

if (isset($_POST['trade'])) {
  	$user_id = $_POST['id'];
  	$useremail = $_POST['email'];
    $trade_action = $_POST['trade_action'];
    $trade_type = $_POST['trade_type'];
    $currency_pair = $_POST['currency_pair'];
    $entry_price = $_POST['entry_price'];
    $lot_size = $_POST['lot_size'];
    $take_profit = $_POST['take_profit'];
    $stop_loss = $_POST['stop_loss'];
    $time_in_force = $_POST['time_in_force'];

    $status = 'pending';
    $created_at = date("Y-m-d H:i:s");

    $sql = "INSERT INTO trades (
                user_id, user_email, trade_action, trade_type, currency_pair,
                entry_price, lot_size, take_profit, stop_loss,
                time_in_force, status, created_at
            ) VALUES (
                ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
            )";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "issssdidddss",
        $user_id, $useremail, $trade_action, $trade_type, $currency_pair,
        $entry_price, $lot_size, $take_profit, $stop_loss,
        $time_in_force, $status, $created_at
    );

    if ($stmt->execute()) {
        echo '<div class="alert alert-success text-center">Trade order placed successfully!</div>';
    } else {
        echo '<div class="alert alert-danger text-center">Error: ' . $stmt->error . '</div>';
    }

    $stmt->close();
}
?>
?>
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Protradingoption Trades List

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Home</a></li>
            <li class="active">trades</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Total Trades</h3>
                        <div class="box-tools">
                            <div class="input-group">
                                <input type="text" name="table_search" class="form-control input-sm pull-right"
                                    style="width: 150px;" placeholder="Search" />
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
    <tr>
        <th>Email</th>
        <th>Currency Pair</th>
        <th>Trade Action</th>
        <th>Trade Type</th>
        <th>Entry Price</th>
        <th>Lot Size</th>
        <th>Take Profit</th>
        <th>Stop Loss</th>
        <th>Time in Force</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

    <?php 
    // Fetch trade details from the database
    $querytra = mysqli_query($conn, "SELECT * FROM trades ORDER BY id DESC");
    
    while ($trade = mysqli_fetch_assoc($querytra)) {  
    ?>
    <tr>
        <td><?php echo htmlspecialchars($trade['user_email']); ?></td>
        <td><?php echo htmlspecialchars($trade['currency_pair']); ?></td>
        <td><?php echo htmlspecialchars($trade['trade_action']); ?></td>
        <td><?php echo htmlspecialchars($trade['trade_type']); ?></td>
        <td><?php echo htmlspecialchars($trade['entry_price']); ?></td>
        <td><?php echo htmlspecialchars($trade['lot_size']); ?></td>
        <td><?php echo htmlspecialchars($trade['take_profit']); ?></td>
        <td><?php echo htmlspecialchars($trade['stop_loss']); ?></td>
        <td><?php echo htmlspecialchars($trade['time_in_force']); ?></td>
       <td><a href="edit_trade.php?id=<?php echo $trade['id']; ?>" class="btn btn-success btn-xs">Edit</a></td>
        <td><a href="user_trades.php?del=<?php echo $trade['id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?');">Delete</a></td>
    </tr>
    <?php } ?>
</table>

                    </div><!-- /.box-body -->
                </div><!-- /.box -->
               <form action="" method="post">
                 <h2>Create a Trade</h2>
                 <div class="form-group">
                                <label style="padding-right: 5px;" for="exampleInputltc">Select an email</label>
                                <select class="form-control" name="email">
                                    <option>
                                        -- select --</option>
                                        <?php 
                                            while($fetchuser = mysqli_fetch_assoc($query)){
                                        ?>
                                    <option value="<?php echo $fetchuser['email']; ?>"><?php echo $fetchuser['email']; ?></option>
                                   <?php 
                                            }
                                   ?>

                                </select>
                            </div>
                 <div class="form-group">
                                <label style="padding-right: 5px;" for="exampleInputltc">Select a user</label>
                                <select class="form-control" name="id">
                                    <option>
                                        -- select --</option>
                                        <?php 
                                            while($fetchuserid = mysqli_fetch_assoc($query)){
                                        ?>
                                    <option value="<?php echo $fetchuserid['id']; ?>"><?php echo $fetchuserid['firstname'].' '.$fetchuserid['lastname']; ?></option>
                                   <?php 
                                            }
                                   ?>

                                </select>
                            </div>
                        <div class="row row-sm mg-b-20">
                                                <div class="d-flex">
                                                    <span class="text-dark tx-semibold">
										  
										  	<div style="padding-left: 50px;" class="button p-4">
                          <input type="radio" id="a25" value="BUY" name="trade_action" required="">
                          <label style="background-color: green;" class="btn rounded-12 mt-12" for="a25">BUY</label>
                        </div>
										  
										    </span>

                                                    <div class="ms-auto fs-14 text-dark tx-semibold">

                                                        <div style="padding-left: 50px;" class="button p-4">
                                                            <input type="radio" id="a50" value="SELL" name="trade_action" required="">
                                                            <label style="background-color: red;" class="btn rounded-12 mt-12" for="a50">SELL</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                          
                                            <div class="row row-sm mg-b-20">
                                                <div class="col-lg-12">
                                                    <p class="mg-b-10 tx-semibold">Type</p>
                                                    <select id="formSelector" name="trade_type" class="form-control select2-no-search">
        <option value="0">Choose Trade Type</option>
        <option value="Crypto">Crypto</option>
        <option value="Forex">Forex</option>
    </select>
                                                </div>
                                            </div>

                                            <div id="Crypto" style="display:none;">
                                                <div class="row row-sm mg-b-20">
                                                    <div class="col-lg-12">
                                                        <p class="mg-b-10 tx-semibold">Crypto Assets</p>
                                                        <select name="currency_pair" class="form-control select2-no-search">
												<option value="ETH/USD">ETH/USD</option>
												<option value="BTC/USD">BTC/USD </option>
												<option value="ETH/USDT">ETH/USDT </option>
												<option value="BTC/USDT">BTC/USDT </option>
												<option value="USD/BTC">USD/BTC </option>
												<option value="USD/ETH">USD/ETH </option>
												<option value="USD/USDT">USD/USDT </option>
												<option value="USD/MATIC">USD/MATIC </option>
												<option value="USD/ADA">USD/ADA </option>
												<option value="DAI/ETH">DAI/ETH </option>
												<option value="DAI/USDC">DAI/USDC </option>
												<option value="USDT/BTC">USDT/BTC </option>
												<option value="USDT/ETH">USDT/ETH </option>
												<option value="USDT/DOGE">USDT/DOGE </option>
												<option value="USDT/BCH">USDT/BCH </option>
												<option value="USDT/LTC">USDT/LTC </option>
												<option value="ETH/BTC">ETH/BTC </option>
												<option value="ETH/BCH">ETH/BCH </option>
												<option value="ETH/LINK">ETH/LINK </option>
												<option value="ETH/ADA">ETH/ADA </option>
												<option value="ETH/DOGE">ETH/DOGE </option>
												<option value="BTC/ETH">BTC/ETH </option>
												<option value="BTC/DOGE">BTC/DOGE </option>
												<option value="BTC/LTC">BTC/LTC </option>
												<option value="BTC/ADA">BTC/ADA </option>
												<option value="BTC/XLM">BTC/XLM </option>
												<option value="DAI/wETH">DAI/wETH </option>
											</select>

                                                    </div>
                                                    <div class="d-flex">
                                                        <span class="text-dark tx-semibold">Balance ~ <font color="teal">$0.00</font></span>


                                                    </div>
                                                </div>

                                            </div>
                                            <div id="Forex" style="display:none;">

                                                <div class="row row-sm mg-b-20">
                                                    <div class="col-lg-12">
                                                        <p class="mg-b-10 tx-semibold">Forex Assets</p>
                                                        <select name="currency_pair" class="form-control select2-no-search">
											<option value="AUD/CAD">AUD/CAD </option>
											<option value="AUD/CHF">AUD/CHF </option>
											<option value="AUD/JPY">AUD/JPY </option>
											<option value="AUD/NZD">AUD/NZD </option>
											<option value="AUD/USD">AUD/USD </option>
											<option value="EUR/AUD">EUR/AUD </option>
											<option value="GBP/AUD">GBP/AUD </option>
											<option value="AUD/CAD">AUD/CAD </option>
											<option value="CAD/CHF">CAD/CHF </option>
											<option value="CAD/JPY">CAD/JPY </option>
											<option value="EUR/CAD">EUR/CAD </option>
											<option value="GBP/CAD">GBP/CAD </option>
											<option value="NZD/CAD">NZD/CAD </option>
											<option value="USD/CAD">USD/CAD </option>
											<option value="AUD/CHF">AUD/CHF </option>
											<option value="CAD/CHF">CAD/CHF </option>
											<option value="CHF/JPY">CHF/JPY </option>
											<option value="EUR/CHF">EUR/CHF </option>
											<option value="GBP/CHF">GBP/CHF </option>
											<option value="NZD/CHF">NZD/CHF </option>
											<option value="USD/CHF">USD/CHF </option>
											<option value="EUR/AUD">EUR/AUD </option>
											<option value="EUR/CAD">EUR/CAD </option>
											<option value="EUR/CHF">EUR/CHF </option>
											<option value="EUR/GBP">EUR/GBP </option>
											<option value="EUR/JPY">EUR/JPY </option>
											<option value="EUR/NZD">EUR/NZD </option>
											<option value="EUR/USD">EUR/USD </option>
											<option value="GBP/AUD">GBP/AUD </option>
											<option value="GBP/CAD">GBP/CAD </option>
											<option value="GBP/CHF">GBP/CHF </option>
											<option value="GBP/JPY">GBP/JPY </option>
											<option value="GBP/NZD">GBP/NZD </option>
											<option value="GBP/USD">GBP/USD </option>
											<option value="EUR/GBP">EUR/GBP </option>
											<option value="NZD/CAD">NZD/CAD </option>
											<option value="NZD/CHF">NZD/CHF </option>
											<option value="NZD/JPY">NZD/JPY </option>
											<option value="NDZ/USD">NDZ/USD </option>
											<option value="AUD/NZD">AUD/NZD </option>
											<option value="EUR/NZD">EUR/NZD </option>
											<option value="AUD/JPY">AUD/JPY </option>
											<option value="CAD/JPY">CAD/JPY </option>
											<option value="CHF/JPY">CHF/JPY </option>
											<option value="EUR/JPY">EUR/JPY </option>
											<option value="GBP/JPY">GBP/JPY </option>
											<option value="NZD/JPY">NZD/JPY </option>
											<option value="USD/JPY">USD/JPY </option>
											<option value="AUD/USD">AUD/USD </option>
											<option value="EUR/USD">EUR/USD </option>
											<option value="GBP/USD">GBP/USD </option>
											<option value="NZD/USD">NZD/USD </option>
											<option value="USD/CAD">USD/CAD </option>
											<option value="USD/CHF">USD/CHF </option>
											<option value="USD/JPY">USD/JPY </option>
											</select>

                                                    </div>
                                                    <div class="d-flex">
                                                        <span class="text-dark tx-semibold">Balance ~ <font color="teal">$0.00</font></span>


                                                    </div>
                                                </div>


                                            </div>
                                            <script>
                                                var formSelector = document.getElementById("formSelector");
                                                var Crypto = document.getElementById("Crypto");
                                                var Forex = document.getElementById("Forex");

                                                formSelector.addEventListener("change", function(event) {
                                                    Crypto.style.display = "none";
                                                    Forex.style.display = "none";

                                                    switch (formSelector.value) {
                                                        case "Crypto":
                                                            Crypto.style.display = "block";

                                                            break;
                                                        case "Forex":
                                                            Forex.style.display = "block";
                                                            break;
                                                    }
                                                });
                                            </script>



                                            <div class="row row-sm mg-b-20">
                                                <div class="col-lg-12">
                                                    <div class="form-group text-start">
                                                        <label class="tx-medium">Amount</label>
                                                        <input class="form-control" name="entry_price" placeholder="500" type="number" required="">
                                                    </div>

                                                </div>
                                            </div>


                                            <div class="row row-sm mg-b-20">
                                                <div class="col-lg-12">
                                                    <p class="mg-b-10 tx-semibold">Lot Size</p>
                                                    <select id="inputState" name="lot_size" class="form-control select2-no-search" required="">
											    <option value="2">
													2 LS
												</option>
												<option value="5">
													5 LS
												</option>
												<option value="10">
													10 LS
												</option>
												<option value="15">
													15 LS
												</option>
											</select>
                                                </div>
                                            </div>



                                            <div class="row row-sm mg-b-20">
                                                <div class="col-lg-12">
                                                    <div class="form-group text-start">
                                                        <label class="tx-medium">Take Profit</label>
                                                        <input class="form-control" name="take_profit" placeholder="1.0013" type="text" required="">
                                                    </div>

                                                </div>
                                            </div>


                                            <div class="row row-sm mg-b-20">
                                                <div class="col-lg-12">
                                                    <div class="form-group text-start">
                                                        <label class="tx-medium">Stop Loss</label>
                                                        <input class="form-control" name="stop_loss" placeholder="1.0013" type="text" required="">
                                                    </div>

                                                </div>
                                            </div>


                                            <div class="row row-sm mg-b-20">
                                                <div class="col-lg-12">
                                                    <p class="mg-b-10 tx-semibold">Time in Force</p>
                                                    <select name="time_in_force" class="form-control select2-no-search">
						<option value="5">
							5 mintues
						</option>
						<option value="10">
							10 mintues
						</option>
						<option value="15">
							15 mintues
						</option>
						<option value="30">
							30 mintues
						</option>
					</select>
                                                </div>
                                            </div>


                                            <div class="alert alert-info fade show" role="alert">
                                                <center> Your trade will auto close if SL or TP does not hit.</center>

                                            </div>

                                            <button type="submit" name="trade" class="btn btn-primary btn-lg rounded-6 mt-4">Place Order</button>

                    </form>
            </div>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<?php
include("includes/footer.php");

?>