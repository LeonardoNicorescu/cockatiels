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
    <title>About Cockatiels</title>
</head>
<body>
<header>
        <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
        <a href="logout.php">Logout</a>
        <a href="homepage.php">Homepage</a>
        <a href="guide.php">Care guide</a>
    </header>

    <section class="about-cockatiels">
        <h2>About Cockatiels</h2>

        <div class="introduction-section">
            <h3>Introduction</h3>
            <p>Cockatiels, scientifically known as Nymphicus hollandicus, are charming and affectionate companion birds. Originating from Australia, these birds have become popular pets due to their playful nature and unique characteristics.</p>
        </div>

        <div class="physical-features-section">
            <h3>Physical Features</h3>
            <p>Cockatiels are medium-sized birds with a distinctive crest on their heads. They come in various color variations, including gray, white, lutino, and pied. The vibrant cheek patches and expressive crests add to their visual appeal.</p>
        </div>

        <div class="behavior-section">
            <h3>Behavior</h3>
            <p>Cockatiels are known for their social and interactive behavior. They thrive on companionship and enjoy spending time with their human family members. These birds are capable mimics and can learn whistles and simple tunes.</p>
        </div>

        <div class="vocalizations-section">
            <h3>Vocalizations</h3>
            <p>Cockatiels are expressive vocalists. They use a variety of sounds to communicate, including whistling, chirping, and mimicry. Each bird has its unique repertoire, and some cockatiels can even learn to imitate words.</p>
        </div>

        <div class="diet-section">
            <h3>Diet</h3>
            <p>A well-balanced diet is crucial for the health of cockatiels. Their diet should include a mix of high-quality pellets, seeds, fresh fruits, and vegetables. Providing a diverse range of foods ensures they receive essential nutrients.</p>
        </div>

        <div class="care-section">
            <h3>Care</h3>
            <p>Proper care involves providing a spacious cage, regular veterinary check-ups, and a stimulating environment. Cockatiels enjoy toys, especially those that encourage mental and physical activity. Regular interaction and positive reinforcement contribute to their well-being.</p>
        </div>

        <div class="lifespan-section">
            <h3>Lifespan</h3>
            <p>Cockatiels have an average lifespan of 15 to 20 years, although some may live longer with proper care. Factors such as diet, environment, and genetics play a role in determining their lifespan.</p>
        </div>

        <div class="reproduction-section">
            <h3>Reproduction</h3>
            <p>Cockatiels are known to be prolific breeders. Breeding pairs may exhibit specific behaviors, such as courtship rituals and nest-building. It's essential to research and understand the responsibilities associated with cockatiel breeding before attempting it.</p>
        </div>

        <div class="common-health-issues-section">
            <h3>Common Health Issues</h3>
            <p>Like any pet, cockatiels can experience health issues. Common concerns include respiratory infections, nutritional deficiencies, and feather-related problems. Regular veterinary check-ups and a healthy diet help prevent many health issues.</p>
        </div>

    </section>

</body>
</html>