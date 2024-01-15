<?php 
session_start(); 
require_once 'function.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home & About Cockatiels</title>
</head>
<body>
    <header>
        <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
        <a href="logout.php">Logout</a>
        <a href="homepage.php">Homepage</a>
        <a href="guide.php">Care guide</a>
    </header>

    <section class="home-about">
        <div class="welcome-section">
            <h2>Welcome to Our Cockatiel Paradise</h2>
            <p>Explore the fascinating world of cockatiels and learn more about these beautiful birds.</p>
            <img src="cockatiels.jpg" alt="cockatiels" style="max-width: 400px; max-height: 300px;">
        </div>

        <div class="about-section">
            <h2><a href="about.php">About cockatiels</a></h2>
            <h3>Origin:</h3>
            <p>Cockatiels, also known as Nymphicus hollandicus, are native to Australia.</p>

            <h3>Lifespan:</h3>
            <p>The average lifespan of a cockatiel is around 15 to 20 years with proper care.</p>

            <h3>Common Characteristics:</h3>
            <ul>
                <li>Distinctive crest on their head</li>
                <li>Playful and social nature</li>
                <li>Mimicry of sounds and whistles</li>
            </ul>

            <h3>Color Variations, Mutations, and Patterns:</h3>
            <p>Cockatiels come in various color variations, mutations, and patterns, including:</p>
            <ul>
                <li>Pied</li>
                <img src="pied.jpg" style="max-width: 400px; max-height: 300px;">
                <li>Lutino</li>
                <img src="lutino.jpg" style="max-width: 400px; max-height: 300px;">
                <li>Cinnamon</li>
                <img src="cinnamon.jpg" style="max-width: 400px; max-height: 300px;">
            </ul>
        </div>
    </section>

    <section class="care-guide">
        <h3><a href="guide.php">Care guide</a></h3>
    </section>

</body>
</html>