<?php
// get the data from the form
$investment = (int) $_POST["investment"] ?? "";
$interest_rate =  (int) $_POST["interest_rate"] ?? "";
$years =  (int) $_POST["years"] ?? "";

// validate investment inputs here
$error_message = "";
function is_blank($value)
{
    return !isset($value) || trim($value) === '';
} //validates data presence

function has_presence($value)
{
    return !is_blank($value);
}

function has_length_greater_than($value, $min)
{
    $length = strlen($value);
    return $length > $min;
}

function has_length_less_than($value, $max)
{
    $length = strlen($value);
    return $length <= $max;
}

if (is_blank($years)) {
    $error_message = "this field must be filled";
}
// echo is_blank($years);

if (is_blank($interest_rate)) {
    $error_message = "this field must be filled";
}
// echo is_blank($interest_rate);

if (is_blank($investment)) {
    $error_message = "this field must be filled";
}
// echo is_blank($investment);
//thats the end of the empty spaces validation 
//now the greater than 0
if ($investment <= 0) {
    $error_message = "investment must be greater than 0";
}
// echo has_length_greater_than($investment, 0);

if ($years == 0) {
    $error_message = "Year must be greater than 0";
    // $error_message = "interest rate must be greater than 0";
}
// echo has_length_greater_than($interest_rate, 0);

// echo has_length_greater_than($years, 0);
//end of all the greater than 0 

if ($interest_rate >= 15) {
    $error_message = "interest rate must be less than or equal to 15";
}
// echo has_length_less_than($interest_rate, 15);

if ($years >= 31) {
    $error_message = "year must be less than or equal to 31";
}
// echo has_length_less_than($years, 31);
// if an error message exists, go to the index page
if ($error_message != '') {
    // echo $years, $interest_rate, $investment;
    include('index.php');
    exit();
}
//sessions

// calculate the future value
$future_value = $investment;
for ($i = 1; $i <= $years; $i++) {
    $future_value = $future_value + ($future_value * $interest_rate * .01);
}

// apply currency and percent formatting
$investment_f = '$' . number_format($investment, 2);
$yearly_rate_f = $interest_rate . '%';
$future_value_f = '$' . number_format($future_value, 2);
?>
<!DOCTYPE html>
<html>
<?php 
    session_start();
    if(isset($_POST['Calculate'])){
        //store session data
        $_SESSION['investment'] = $_POST['investment'];
        $_SESSION['interest_rate'] = $_POST['interest_rate'];
        $_SESSION['years'] = $_POST['years'];
    }
    ?>
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <main>
        <h1>Future Value Calculator</h1>

        <label>Investment Amount:</label>
        <span><?php echo $investment_f; ?></span><br>

        <label>Yearly Interest Rate:</label>
        <span><?php echo $yearly_rate_f; ?></span><br>

        <label>Number of Years:</label>
        <span><?php echo $years; ?></span><br>

        <label>Future Value:</label>
        <span><?php echo $future_value_f; ?></span><br>
    </main>
</body>

</html>