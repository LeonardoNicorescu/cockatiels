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
    <title>Care Guide - Cockatiels</title>
</head>
<body>
<header>
        <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
        <a href="logout.php">Logout</a>
        <a href="homepage.php">Homepage</a>
        <a href="guide.php">Care guide</a>
    </header>

    <section class="care-guide">
<h3>Care Guide</h3>

            <p>Providing proper care is essential for the health and happiness of your pet cockatiel. Below is a detailed care guide covering various aspects of cockatiel care:</p>

            <h4>Cage Setup:</h4>
            <p>Choose a spacious cage to allow your cockatiel room to move and spread its wings. The cage should have horizontal bars for climbing. Include multiple perches of varying sizes and textures. Cockatiels enjoy exploring, so provide toys for mental stimulation. Make sure the cage is placed away from drafts and direct sunlight. Clean the cage regularly to maintain a healthy environment.</p>

            <h4>Diet:</h4>
            <p>Offer a well-balanced diet that includes high-quality pellets, seeds, fresh fruits, and vegetables. Limit the intake of high-fat and sugary treats. Provide fresh water daily. Cockatiels enjoy bathing, so offer a shallow dish for them to splash around in. Monitor their diet closely and adjust as needed, especially during molting or breeding seasons.</p>

            <h4>Grooming:</h4>
            <p>Regularly check and trim your cockatiel's nails and beak if needed. Molting is a natural process, so provide a nutritious diet to support feather growth. Avoid using mirrors in the cage, as excessive preening may lead to behavioral issues. Provide mineral blocks or cuttlebones for beak maintenance. Monitor the condition of feathers, and address any signs of abnormal molting or feather plucking promptly.</p>

            <h4>Health Care:</h4>
            <p>Schedule regular veterinary check-ups to monitor your cockatiel's health. Watch for signs of illness, including changes in behavior, appetite, feather quality, and droppings. Keep the living environment clean to prevent the spread of diseases. Be aware of common health issues in cockatiels, such as respiratory infections and nutritional deficiencies. If you notice any abnormalities, seek professional veterinary advice immediately.</p>

            <h4>Interaction:</h4>
            <p>Cockatiels are social birds that thrive on interaction. Spend quality time talking to, playing with, and training your cockatiel. Positive reinforcement encourages good behavior. Cockatiels enjoy learning tricks and can be taught to mimic sounds. Consider getting a companion if your cockatiel enjoys the company of other birds. Pay attention to your bird's body language to understand its mood and preferences.</p>

            <h4>Environment:</h4>
            <p>Create a safe and stimulating environment for your cockatiel. Provide a variety of toys, perches, and climbing opportunities. Cockatiels enjoy exploring different textures and materials. Rotate toys regularly to prevent boredom. Consider placing the cage in a central location where the bird can observe household activities. Ensure the temperature is suitable for your cockatiel, avoiding extremes that could impact its health.</p>

            <h4>Training and Enrichment:</h4>
            <p>Train your cockatiel using positive reinforcement techniques. Teach basic commands, and encourage mental stimulation through puzzle toys and foraging activities. Cockatiels enjoy exploring and figuring out challenges. Provide a diverse range of toys, including chew toys, to keep your bird engaged. Enrichment activities contribute to both physical and mental well-being.</p>

            <h4>Traveling with Cockatiels:</h4>
            <p>When traveling with your cockatiel, ensure that it has a secure travel carrier. Familiarize your bird with the carrier beforehand. Bring familiar items, such as favorite toys and perches, to reduce stress. Maintain a comfortable temperature in the travel environment. Plan for regular breaks and offer food and water during longer journeys.</p>

    </section>

</body>
</html>