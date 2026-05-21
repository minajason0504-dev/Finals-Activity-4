<?php
if (isset($_POST['age']) && isset($_POST['citizenship'])) {

    $age = $_POST['age'];
    $citizenship = $_POST['citizenship'];

    if ($age >= 18) {
        if (strtolower($citizenship) == "filipino") {
            $result = "Eligible to vote";
        } else {
            $result = "Not eligible: Must be a Filipino citizen";
        }
    } else {
        $result = "Not eligible: Must be 18 years old and above";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Voting Eligibility</title>
</head>
<body>

<h2>Voting Eligibility Checker</h2>

<form method="POST">
    Age: <input type="number" name="age" required><br><br>
    Citizenship: <input type="text" name="citizenship" required><br><br>
    <button type="submit">Check</button>
</form>

<?php
if (isset($result)) {
    echo "<h3>$result</h3>";
}
?>

</body>
</html>