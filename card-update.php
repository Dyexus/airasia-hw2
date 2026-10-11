<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Gift Card | AirAsia Rewards</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <main>
        <h1>Update Gift Card</h1>

        <form action="card-list.php" method="get">
            <p>
                <label for="cardName">Card Name</label>
                <input type="text" id="cardName"
                       name="cardName" value="Amazon Gift Card"
                       maxlength="100" required>
            </p>

            <p>
                <label for="cardType">Card Type</label>
                <input type="text" id="cardType"
                       name="cardType" value="Shopping"
                       maxlength="100" required>
            </p>

            <p>
                <label for="cardValue">Card Value</label>
                <input type="number" id="cardValue"
                       name="cardValue" value="25.00"
                       min="0" step="0.01" required>
            </p>

            <p>
                <label for="points">Points Required</label>
                <input type="number" id="points"
                       name="points" value="2500"
                       min="0" step="1" required>
            </p>

            <button type="submit">Update</button>
            <a href="card-details.php">Cancel</a>
        </form>
    </main>
</body>
</html>