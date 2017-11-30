<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Shoes</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
</head>

<body>

    <div class="container">
        <header>
            <nav>
                <ul>
                    <li><a href="#Shoes">SHOES</a></li>
                    <li><a href="#Overview">Overview</a></li>
                    <li><a href="#Brands">Brands</a></li>
                    <li><a href="#Styles">Styles</a></li>
                    <li><a href="#Survey">Survey</a></li>
                </ul>
            </nav>
        </header>

        <section id="Shoes">
            <h1>Do you shoe?</h1>
            <!-- This section will include a banner or graphic with two buttons, take survey or read more displayed in the terminal area. -->
        </section>

        <section id="Overview">
            <h2>About The Site</h2>
            <p>Welcome to our site! If you would like to read a brief history of shoes, learn the top current brands or most common styles please continue reading. Otherwise, feel free to head down to the <a href="#Survey">Survey</a>.</p>

            <h2>Definition</h2>
            <p>shoe | SHo͞o | - noun</p>
            <p>a covering for the foot, typically made of leather, having a sturdy      sole and not reaching above the ankle.</p>
            <p>Source: New Oxford American Dictionary (Second Edition).</p>

            <h2>History</h2>
            <p>There is a great deal of evidence to suggest that shoes have been worn by humans for tens of thousands of years but the oldest recovered example found is 10,000 years old (Source: University of Oregon - The Museum of Natural and Cultural History). The world’s oldest leather shoe is a 5,500 year old specimen found in an Armenian cave (Source: National Geographic).</p>
        </section>

        <section id="Brands">
            <h2>Popular Brands Today</h2>
            <!-- Possibly make a horizontal grid layout and use the brand logo images instead of words, then on hover display the brand name. -->
            
            <img src="images/logoNike.png" alt="Nike Logo">

            <img src="images/logoAdidas.png" alt="Adidas Logo">

            <img src="images/logoJordan.png" alt="Jordan Logo">

            <img src="images/logoConverse.png" alt="Converse Logo">

            <p>Source: Fortune.com</p>
        </section>

        <section id="Styles">
            <section>
                <h2>Men's</h2>
                <!-- Possibly make a horizontal grid layout and use the style images instead of words, then on hover display the style name. -->
                <ul>
                    <li>Dress</li>
                    <li>Casual</li>
                    <li>Athletic</li>
                </ul>
            </section>
            <section>
                <h2>Women's</h2>
                <!-- Possibly make a horizontal grid layout and use the style images instead of words, then on hover display the style name. -->
                <ul>
                    <li>Heels</li>
                    <li>Flats</li>
                    <li>Athletic</li>
                </ul>
            </section>
        </section>
        

        <section id="Survey">
            <h2>Shoe Survey</h2>

            <form method="post">
                <fieldset>
                    <h3>Personal Information</h3>
                    
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" required><br>
                    
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email" required><br><br>

                    <div class="questionTitle">Please Select Your Gender:</div>

                    <input type="radio" name="gender" id="male" value="male">
                    <label for="male"> Male</label><br>

                    <input type="radio" name="gender" id="female" value="female">
                    <label for="female"> Female</label>
                </fieldset>

                <fieldset>
                    <h3>About Your Shoes</h3>

                    <div class="question male">
                        <div class="questionTitle">Which of the following shoe styles do you own?</div>

                        <input type="checkbox" name="styleType[]" id="dress" value="dress">
                        <label for="dress"> Dress</label><br>

                        <input type="checkbox" name="styleType[]" id="casual" value="casual">
                        <label for="casual"> Casual</label><br>

                        <input type="checkbox" name="styleType[]" id="athletic" value="athletic">
                        <label for="athletic"> Athletic</label><br><br>
                    </div>

                    <div class="question female">
                        <div class="questionTitle">Which of the following shoe styles do you own?</div>

                        <input type="checkbox" name="styleType[]" id="heels" value="heels">
                        <label for="heels"> Heels</label><br>

                        <input type="checkbox" name="styleType[]" id="flats" value="flats">
                        <label for="flats"> Flats</label><br>

                        <input type="checkbox" name="styleType[]" id="athletic2" value="athletic">
                        <label for="athletic2"> Athletic</label><br><br>
                    </div>

                    <div class="question chooser">
                        <div class="questionTitle">How likely are you to purchase new shoes in the next 3 months?</div>

                        <label for="howLikely">0 Being Least Likely and 10 Most Likely</label><br>


                        <div class = "range-field">
                        <input type="range" name="rangeLikely" id="howLikely" min="0" max="10">
                        </div>

                        <!-- use html5 'range' attribute to make a slider from 0 to 10 -->
                        
                    </div>

                    <div class="question">
                        <div class="questionTitle">When did you last purchase a pair of shoes?</div>
 
                        <input type="radio" name="shoePurchase" id="lessOne" value="Less than a month ago">
                        <label for="lessOne"> Less than a month ago</label><br>

                        <input type="radio" name="shoePurchase" id="oneToSix" value="1-6 months ago">
                        <label for="oneToSix"> 1-6 months ago</label><br>

                        <input type="radio" name="shoePurchase" id="sixToYear" value="6 months to a year ago">
                        <label for="sixToYear"> 6 months to a year ago</label><br>

                        <input type="radio" name="shoePurchase" id="overYear" value="More than a year ago">
                        <label for="overYear"> More than a year ago</label><br>
                    </div>

                </fieldset>
            </form>
        </section>

        <footer>
            Information Architecture - Aaron Raymond | Design - Hillary Chun | Front End - Ali Hashim | Back End - John Denzer
        </footer>
    </div><!--.container-->
  

  <!-- Downloading jQuery and Materialize file for JS -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>  
</body>

</html>
