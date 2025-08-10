<?php
// Include your header, database connection, and any necessary functions
include("includes/header.php"); // This should contain your $conn database connection

// --- 1. Fetch Existing Trade Data ---
$trade_id = null; // Initialize trade_id to null
$trade_data = null; // Initialize trade_data to null

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $trade_id = $_GET['id'];

    // Prepare and execute the SQL query to fetch trade details
    $sql_fetch = "SELECT * FROM trades WHERE id = ?";
    $stmt_fetch = $conn->prepare($sql_fetch);
    if ($stmt_fetch === false) {
        echo '<div class="alert alert-danger text-center">Error preparing fetch statement: ' . $conn->error . '</div>';
        exit;
    }
    $stmt_fetch->bind_param("i", $trade_id);
    $stmt_fetch->execute();
    $result_fetch = $stmt_fetch->get_result();

    if ($result_fetch->num_rows > 0) {
        $trade_data = $result_fetch->fetch_assoc();
    } else {
        // Trade not found, redirect back to the trade list with an error
        echo "<script>alert('Trade not found!'); window.location.href='user_trades.php';</script>";
        exit;
    }
    $stmt_fetch->close();
} else {
    // No ID provided, redirect back to the trade list
    echo "<script>alert('No trade ID provided for editing!'); window.location.href='user_trades.php';</script>";
    exit;
}

// --- 2. Handle Form Submission for Updating Trade ---
if (isset($_POST['update_trade'])) {
    // Sanitize and validate inputs
    $trade_id_to_update = $_POST['trade_id'];
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

    // New/Corrected fields to be updated
    $status = $_POST['status'];
    $amount = $_POST['amount']; // New: Get the 'amount'
    $profit_loss = $_POST['profit_loss'];

    // SQL to update the trade record - Added 'amount', 'status', 'profit_loss'
   $sql_update = "UPDATE trades SET
                    user_id = ?, user_email = ?, trade_action = ?, trade_type = ?, currency_pair = ?,
                    entry_price = ?, lot_size = ?, take_profit = ?, stop_loss = ?,
                    time_in_force = ?, status = ?, amount = ?, profit_loss = ?
                    WHERE id = ?";

    $stmt_update = $conn->prepare($sql_update);
    if ($stmt_update === false) {
        echo '<div class="alert alert-danger text-center">Error preparing update statement: ' . $conn->error . '</div>';
    } else {
        // Adjust bind_param types and order to match the new SQL query
        // "issssdidddi" (original) + "sdi" (new status, amount, profit_loss) + "i" (trade_id_to_update)
        // Order: user_id (i), user_email (s), trade_action (s), trade_type (s), currency_pair (s),
        //        entry_price (d), lot_size (i), take_profit (d), stop_loss (d),
        //        time_in_force (i), status (s), amount (d), profit_loss (d), trade_id (i)
        $stmt_update->bind_param(
            "issssdiddisddi", // <-- THIS IS THE CORRECTED STRING
            $user_id, $useremail, $trade_action, $trade_type, $currency_pair,
            $entry_price, $lot_size, $take_profit, $stop_loss,
            $time_in_force, $status, $amount, $profit_loss, $trade_id_to_update
        );

        if ($stmt_update->execute()) {
            echo '<div class="alert alert-success text-center">Trade updated successfully!</div>';
            // Refresh the trade_data to show updated values immediately
            $sql_fetch_updated = "SELECT * FROM trades WHERE id = ?";
            $stmt_fetch_updated = $conn->prepare($sql_fetch_updated);
            if ($stmt_fetch_updated === false) {
                echo '<div class="alert alert-danger text-center">Error preparing re-fetch statement: ' . $conn->error . '</div>';
            } else {
                $stmt_fetch_updated->bind_param("i", $trade_id_to_update);
                $stmt_fetch_updated->execute();
                $result_fetch_updated = $stmt_fetch_updated->get_result();
                if ($result_fetch_updated->num_rows > 0) {
                    $trade_data = $result_fetch_updated->fetch_assoc(); // Update $trade_data
                }
                $stmt_fetch_updated->close(); // Close the re-fetch statement
            }
        } else {
            echo '<div class="alert alert-danger text-center">Error updating trade: ' . $stmt_update->error . '</div>';
        }
        $stmt_update->close(); // Close the update statement ONLY ONCE here
    }
}

// Ensure $query and $query_users are available for the dropdowns
// Assuming 'firstname' and 'lastname' columns exist in your 'users' table
$query_users = mysqli_query($conn, "SELECT id, email, name FROM users ORDER BY email ASC");
$query_users_for_id = mysqli_query($conn, "SELECT id, email, name FROM users ORDER BY email ASC");

?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Edit Trade
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="user_trades.php">Trades</a></li>
            <li class="active">Edit Trade</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Trade Details (ID: <?php echo htmlspecialchars($trade_id); ?>)</h3>
                    </div>
                    <form action="edit_trade.php?id=<?php echo htmlspecialchars($trade_id); ?>" method="post">
                        <div class="box-body">
                            <input type="hidden" name="trade_id" value="<?php echo htmlspecialchars($trade_id); ?>">

                            <div class="form-group">
                                <label for="userEmailSelect">Select an email</label>
                                <select class="form-control" name="email" id="userEmailSelect" required>
                                    <?php
                                    if ($query_users && mysqli_num_rows($query_users) > 0) {
                                        mysqli_data_seek($query_users, 0); // Reset pointer if already used
                                        while ($fetchuser = mysqli_fetch_assoc($query_users)) {
                                            $selected = ($trade_data['user_email'] == $fetchuser['email']) ? 'selected' : '';
                                            echo '<option value="' . htmlspecialchars($fetchuser['email']) . '" ' . $selected . '>' . htmlspecialchars($fetchuser['email']) . '</option>';
                                        }
                                    } else {
                                        echo '<option value="">No users found</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="userIdSelect">Select a user (by ID)</label>
                                <select class="form-control" name="id" id="userIdSelect" required>
                                    <?php
                                    if ($query_users_for_id && mysqli_num_rows($query_users_for_id) > 0) {
                                        mysqli_data_seek($query_users_for_id, 0); // Reset pointer if already used
                                        while ($fetchuserid = mysqli_fetch_assoc($query_users_for_id)) {
                                            $selected = ($trade_data['user_id'] == $fetchuserid['id']) ? 'selected' : '';
                                            // Display full name if available, otherwise just email or ID
                                            $display_name = !empty($fetchuserid['name'])
                                                            ? htmlspecialchars($fetchuserid['name'])
                                                            : htmlspecialchars($fetchuserid['email']); // Fallback to email
                                            echo '<option value="' . htmlspecialchars($fetchuserid['id']) . '" ' . $selected . '>' . $display_name . '</option>';
                                        }
                                    } else {
                                        echo '<option value="">No users found</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Trade Action</label>
                                <div class="d-flex justify-content-center">
                                    <div class="button p-2">
                                        <input type="radio" id="a25" value="BUY" name="trade_action" required="" <?php echo ($trade_data['trade_action'] == 'BUY') ? 'checked' : ''; ?>>
                                        <label style="background-color: green;" class="btn btn-success rounded-pill mt-1" for="a25">BUY</label>
                                    </div>
                                    <div class="button p-2">
                                        <input type="radio" id="a50" value="SELL" name="trade_action" required="" <?php echo ($trade_data['trade_action'] == 'SELL') ? 'checked' : ''; ?>>
                                        <label style="background-color: red;" class="btn btn-danger rounded-pill mt-1" for="a50">SELL</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="formSelector">Trade Type</label>
                                <select id="formSelector" name="trade_type" class="form-control" required>
                                    <option value="0">Choose Trade Type</option>
                                    <option value="Crypto" <?php echo ($trade_data['trade_type'] == 'Crypto') ? 'selected' : ''; ?>>Crypto</option>
                                    <option value="Forex" <?php echo ($trade_data['trade_type'] == 'Forex') ? 'selected' : ''; ?>>Forex</option>
                                </select>
                            </div>

                            <div id="Crypto" style="display:none;">
                                <div class="form-group">
                                    <label>Crypto Assets</label>
                                    <select name="currency_pair" class="form-control">
                                        <?php
                                        $crypto_pairs = ["ETH/USD", "BTC/USD", "ETH/USDT", "BTC/USDT", "USD/BTC", "USD/ETH", "USD/USDT", "USD/MATIC", "USD/ADA", "DAI/ETH", "DAI/USDC", "USDT/BTC", "USDT/ETH", "USDT/DOGE", "USDT/BCH", "USDT/LTC", "ETH/BTC", "ETH/BCH", "ETH/LINK", "ETH/ADA", "ETH/DOGE", "BTC/ETH", "BTC/DOGE", "BTC/LTC", "BTC/ADA", "BTC/XLM", "DAI/wETH"];
                                        foreach ($crypto_pairs as $pair) {
                                            $selected = ($trade_data['currency_pair'] == $pair) ? 'selected' : '';
                                            echo '<option value="' . htmlspecialchars($pair) . '" ' . $selected . '>' . htmlspecialchars($pair) . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div id="Forex" style="display:none;">
                                <div class="form-group">
                                    <label>Forex Assets</label>
                                    <select name="currency_pair" class="form-control">
                                        <?php
                                        $forex_pairs = ["AUD/CAD", "AUD/CHF", "AUD/JPY", "AUD/NZD", "AUD/USD", "EUR/AUD", "GBP/AUD", "CAD/CHF", "CAD/JPY", "EUR/CAD", "GBP/CAD", "NZD/CAD", "USD/CAD", "CHF/JPY", "EUR/CHF", "GBP/CHF", "NZD/CHF", "USD/CHF", "EUR/GBP", "EUR/JPY", "EUR/NZD", "EUR/USD", "GBP/JPY", "GBP/NZD", "GBP/USD", "NZD/JPY", "NZD/USD", "USD/JPY"]; // Added some missing
                                        foreach ($forex_pairs as $pair) {
                                            $selected = ($trade_data['currency_pair'] == $pair) ? 'selected' : '';
                                            echo '<option value="' . htmlspecialchars($pair) . '" ' . $selected . '>' . htmlspecialchars($pair) . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <script>
                                var formSelector = document.getElementById("formSelector");
                                var Crypto = document.getElementById("Crypto");
                                var Forex = document.getElementById("Forex");

                                function showHideCurrencyPairs() {
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
                                }

                                // Initial call to set correct display based on fetched data
                                showHideCurrencyPairs();

                                // Event listener for changes
                                formSelector.addEventListener("change", showHideCurrencyPairs);
                            </script>

                            <div class="form-group">
                                <label>Entry Price</label>
                                <input class="form-control" name="entry_price" placeholder="1.2345" type="number" step="any" required="" value="<?php echo htmlspecialchars($trade_data['entry_price']); ?>">
                            </div>

                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input class="form-control" name="amount" id="amount" placeholder="500" type="number" step="any" required="" value="<?php echo htmlspecialchars($trade_data['amount']); ?>">
                                <small class="form-text text-muted">Total value of the trade (e.g., $500 invested).</small>
                            </div>
                            <div class="form-group">
                                <label>Lot Size</label>
                                <select name="lot_size" class="form-control" required="">
                                    <?php
                                    $lot_sizes = [2, 5, 10, 15];
                                    foreach ($lot_sizes as $ls) {
                                        $selected = ($trade_data['lot_size'] == $ls) ? 'selected' : '';
                                        echo '<option value="' . htmlspecialchars($ls) . '" ' . $selected . '>' . htmlspecialchars($ls) . ' LS</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Take Profit</label>
                                <input class="form-control" name="take_profit" placeholder="1.0013" type="text" required="" value="<?php echo htmlspecialchars($trade_data['take_profit']); ?>">
                            </div>

                            <div class="form-group">
                                <label>Stop Loss</label>
                                <input class="form-control" name="stop_loss" placeholder="1.0013" type="text" required="" value="<?php echo htmlspecialchars($trade_data['stop_loss']); ?>">
                            </div>

                            <div class="form-group">
                                <label>Time in Force</label>
                                <select name="time_in_force" class="form-control" required="">
                                    <?php
                                    $time_options = [5, 10, 15, 30];
                                    foreach ($time_options as $time) {
                                        $selected = ($trade_data['time_in_force'] == $time) ? 'selected' : '';
                                        echo '<option value="' . htmlspecialchars($time) . '" ' . $selected . '>' . htmlspecialchars($time) . ' minutes</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control" required>
                                    <option value="pending" <?php echo ($trade_data['status'] == 'pending') ? 'selected' : ''; ?>>Pending</option>
                                    <option value="active" <?php echo ($trade_data['status'] == 'active') ? 'selected' : ''; ?>>Active</option>
                                    <option value="closed" <?php echo ($trade_data['status'] == 'closed') ? 'selected' : ''; ?>>Closed</option>
                                    <option value="cancelled" <?php echo ($trade_data['status'] == 'cancelled') ? 'selected' : ''; ?>>Cancelled</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="profit_loss">Profit/Loss</label>
                                <input class="form-control" name="profit_loss" id="profit_loss" placeholder="0.00" type="number" step="any" value="<?php echo htmlspecialchars($trade_data['profit_loss']); ?>">
                                <small class="form-text text-muted">Enter a positive value for profit, negative for loss.</small>
                            </div>
                            <div class="alert alert-info fade show" role="alert">
                                <center> Your trade will auto close if SL or TP does not hit.</center>
                            </div>

                        </div>
                        <div class="box-footer">
                            <button type="submit" name="update_trade" class="btn btn-primary btn-lg">Update Trade</button>
                            <a href="user_trades.php" class="btn btn-default pull-right">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
include("includes/footer.php");
?>