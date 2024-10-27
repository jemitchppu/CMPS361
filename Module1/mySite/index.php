<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vault-tec</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.cdnfonts.com/css/monofonto" rel="stylesheet">
</head>

<body>

    <header class="header">
        <a href="index.html"><img class="logo" src="images/logo.jpg"></a>

        <nav class="navbar">
            <a href="index.html">Home</a>
            <a href="#vaults">Vaults</a>
            <a href="#products">Products</a>
            <a href="#about">About</a>
            <a href="#reservations">Reservations</a>
        </nav>

    </header>

    <div class="landing-page" id="landing">
        <img class="landing-image" src="images/landingpage2.png">
        <img class="vaultboy-landing" src="images/vaultboy.png">
    </div>





    <div class="vaults" id="vaults">

        <p class="heading">WHY CHOOSE VAULT-TEC?</p>

        <div class="vault-section">
            <div class="shelter-text">
                <h1>NUCLEAR ATTACK?</h1>
                <p>Protect your Family Now!</p>
                <p>With a secure underground vault</p>
                <p>by <b>VAULT-TEC</b></p>
            </div>

            <img class="walls-image" id="walls" src="images/walls.webp" alt="shelter walls image">
        </div>

        <div class="vault-section">
            <img class="vault-image" id="shelter" src="images/shelter.webp" alt="shelter image">

            <div class="walls-text">
                <h1>5 FOOT THICK</h1>
                <h1>CONCRETE WALLS!</h1>
                <p>INCLUDING:</p>
                <p>- Decorative Wallpaper</p>
                <p>- Themed Rooms</p>
                <p>- Clean Air Ventilation</p>
            </div>
        </div>

        <p class="footer" >CALL 213-25-VAULT TO RESERVE YOUR SPOT TODAY!</p>

    </div>

    <div class="products" id="products">

        <h1 class="yellow-header">Our Wonderful Creations</h1>

        <div class="products-section">
            <h1 class="yellow-text-heading">Pip-Boy</h1>
            <ul>
                <li class="yellow-bullet">Personal Information Processor</li>
                <li class="yellow-bullet">Vitals tracking</li>
                <li class="yellow-bullet">Radio</li>
                <li class="yellow-bullet">Geiger Counter</li>
                <li class="yellow-bullet">GPS</li>
            </ul>
            <img class="product-image" src="images/pipboy.jpg">
        </div>

        <div class="products-section">
            <h1 class="yellow-text-heading">Power Armor</h1>
            <ul>
                <li class="yellow-bullet">Superior Defense</li>
                <li class="yellow-bullet">Increased Strength</li>
                <li class="yellow-bullet">Fall Resistance</li>
                <li class="yellow-bullet">Radiation Protection</li>
                <li class="yellow-bullet">Excellent Maneuverability</li>
            </ul>
            <img class="powerarmor" src="images/powerarmor.png">
        </div>

        <div class="products-section">
            <h1 class="yellow-text-heading">Vaults</h1>
            <ul>
                <li class="yellow-bullet">Radiation Safe</li>
                <li class="yellow-bullet">Clean Air and Water</li>
                <li class="yellow-bullet">Self Sustained Food Sources</li>
                <li class="yellow-bullet">Surface Dweller Protection</li>
                <li class="yellow-bullet">122 Vaults to Repopulate America</li>
            </ul>
            <img class="product-image" src="images/vaultdoor.png">
        </div>


    </div>

    <div class="about" id="about">
        <p class="heading">About Vault-Tec</p>
        <p class="about-pgh">Founded in 2031, we are America's preeminent nuclear defense corporation. Focused on protecting the American people, 
            we have created armor for the American military, and vaults to protect the population in the event of a nuclear war. 
            With the 122 vaults created, we intend to repopulate America once radiation levels fall. Until then, better living, underground!</p>
    </div>

    <div class="reservations" id="reservations">
        <h1 class="yellow-header" id="reservation-head">RESERVE YOUR VAULT SPOT NOW!</h1>


            <div class="reservation-panel">
                <form class="estimate-form">
                    <h1 class="estimate-header">Estimate</h1>
                    <label class="estimate-txt">Number of Adults (Ages 18+):</label>
                    <input class="estimate-entry" type="number" id="quantityX" placeholder="Number of Adults" required>
                    <br>
                    <label class="estimate-txt">Number of Teens (Ages 13-17):</label>
                    <input class="estimate-entry" type="number" id="quantityY" placeholder="Number of Teens" required>
                    <br>
                    <label class="estimate-txt">Number of Children (Ages 0-12):</label>
                    <input class="estimate-entry" type="number" id="quantityZ" placeholder="Number of Children" required>
                    <br>
                    <button type="button" class="submit" onclick="calculateCost()">Submit</button>
                    <h2 id="result">  </h2>
                </form>

            </div>

            <div class="reservation-panel"> 
                <div class="application">
                    <form class="estimate-form">
                        <h1 class="estimate-header">Apply Now!</h1>
                        <label class="estimate-txt">Number of Adults (Ages 18+):</label>
                        <input class="estimate-entry" type="number" id="quantityX" placeholder="Number of Adults" required>
                        <br>
                        <label class="estimate-txt">Number of Teens (Ages 13-17):</label>
                        <input class="estimate-entry" type="number" id="quantityY" placeholder="Number of Teens" required>
                        <br>
                        <label class="estimate-txt">Number of Children (Ages 0-12):</label>
                        <input class="estimate-entry" type="number" id="quantityZ" placeholder="Number of Children" required>
                        <br>
                        <label class="estimate-txt">E-mail:</label>
                        <br>
                        <input class="estimate-entry" type="email"  placeholder="E-mail" required>
                        <br>
                        <button type="button" class="submit" onclick="vault()">Submit</button>
                        <h2 id="appResult">  </h2>
                    </form>
                </div>
                
            </div>

    </div>


    <script src="/js/estimator.js"></script>
    <script src="/js/application.js"></script>

<?php

?>
</body>

</html>