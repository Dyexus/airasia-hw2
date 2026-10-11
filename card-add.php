<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Gift Card | AirAsia Rewards</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <main>
        <h1>Add Gift Card</h1>

        <form action="card-list.php" method="get">
            <p>
                <label for="cardName">Card Name</label>
                <input type="text" id="cardName"
                       name="cardName" maxlength="100" required>
            </p>

            <p>
                <label for="cardType">Card Type</label>
                <input type="text" id="cardType"
                       name="cardType" maxlength="100" required>
            </p>

            <p>
                <label for="cardValue">Card Value</label>
                <input type="number" id="cardValue"
                       name="cardValue" min="0" step="0.01" required>
            </p>

            <p>
                <label for="points">Points Required</label>
                <input type="number" id="points"
                       name="points" min="0" step="1" required>
            </p>

            <button type="submit">Submit</button>
            <a href="card-list.php">Cancel</a>
        </form>
    </main>
</body>
</html>