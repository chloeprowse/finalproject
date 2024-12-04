<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Women Tennis Players</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Top Women Tennis Players</h1>
        <nav>
            <ul>
                <?php
                $stmt = $pdo->query("SELECT * FROM players ORDER BY rank ASC");
                while ($player = $stmt->fetch()) {
                    echo "<li><a href='player.php?id=" . $player['id'] . "'>" . htmlspecialchars($player['name']) . "</a></li>";
                }
                ?>
            </ul>
        </nav>
    </header>
</body>
</html>
