<?php 
    //set default value of variables for initial page load
    if (!isset($investment)) { $investment = ''; } 
    if (!isset($interest_rate)) { $interest_rate = ''; } 
    if (!isset($years)) { $years = ''; } 
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
    <form action="display_results.php" method="post">

        <div id="data">
            <label>Investment Amount:</label>
            <input type="text" name="investment"
                   value="<?php echo htmlspecialchars($investment); ?><?php
                        if(isset($_COOKIE["investment"])) {
                            echo $_COOKIE["investment"];
                        }
                   ?>"">
            <br>

            <label>Yearly Interest Rate:</label>
            <input type="text" name="interest_rate"
                   value="<?php echo htmlspecialchars($interest_rate); ?><?php
                        if(isset($_COOKIE["interest_rate"])) {
                            echo $_COOKIE["interest_rate"];
                        }
                   ?>">
            <br>

            <label>Number of Years:</label>
            <input type="text" name="years"
                   value="<?php echo htmlspecialchars($years); ?><?php
                        if(isset($_COOKIE["years"])) {
                           echo $_COOKIE["years"];
                        }
                   ?>">
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