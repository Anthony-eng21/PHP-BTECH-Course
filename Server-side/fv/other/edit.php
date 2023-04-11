
<?php 
    // $investment = '';
    // $interest_rate = '';
    // $years = '';

    // get the data from the form
    $investment = (int) $_POST["investment"] ?? "";
    $interest_rate = (int) $_POST["interest_rate"] ?? "";
    $years =  (int) $_POST["years"] ?? "";
    
   
    
    // apply currency and percent formatting
    $investment_f = '$' . number_format($investment, 2);
    $yearly_rate_f = $interest_rate . '%';
    $future_value_f = '$' . number_format($future_value, 2);

    ?>


<!DOCTYPE html>
<html>
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <main>
    <h1>Future Value Calculator</h1>
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
    <?php } ?>
    <form action=<?php echo rawurlencode("edit.php"); ?> method="post">

        <div id="data">
            <label>Investment Amount:</label>
            <input type="text" name="investment"
                   value="<?php echo htmlspecialchars($investment); ?>">
            <br>

            <label>Yearly Interest Rate:</label>
            <input type="text" name="interest_rate"
                   value="<?php echo htmlspecialchars($interest_rate); ?>">
            <br>

            <label>Number of Years:</label>
            <input type="text" name="years"
                   value="<?php echo htmlspecialchars($years); ?>">
            <br>
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"><br>
        </div>

    </form>
    </main>
</body>
</html>





