<?php require_once("php/database.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sociodox</title>
    <link rel="stylesheet" href="main.css">
    <script defer src="app/index.js"></script>
    <script defer src="app/contact.js"></script>
    <script defer src="app/donation.js"></script>
</head>
<body>
    <center>
    <header>
        <nav>
            <input type="checkbox" id="nav" class="hidden"/>
            <label for="nav" class="nav-btn">
                <i></i>
                <i></i>
                <i></i>
            </label>

            <div class="logo">
                <a href="#"> SOCIODOX </a>
            </div>

            <div class="nav-wrapper">
                <ul>
                    <li> <a data-page="educate" href="#home">         HOME    </a> </li>
                    <li> <a data-page="donate" href="#donate">        DONATE  </a> </li>
                    <li> <a data-page="contact" href="#contact">      CONTACT </a> </li>
                    <li> <a data-page="our-team" href="#our-team">    ABOUT   </a> </li>

                    <li><div class="dropdown">
                            <a>LOGIN</a>                        
                            <div class="dropdown-content">
                                <a  onclick="toggle()">People Login</a>
                                <a href="#">Org Login</a>
                            </div>
                        </div>
                    </li>
                    <div class="marker"></div>
                </ul>
            </div>
        </nav>
    </header>
    <main id="blur">
        <section data-text="educate" class="educate" id="home">
            <div class="educate-img"></div>
            <h1>Speak Up for Education</h1>
            <h2>You have a voice which means you have a choice</h2>
            <p>At least 35 million children aged 6-14 years do not attend school in India<br>1 in 4 children of school-going age is out of school in our country</p>
            <button>Here's how you can help</button>
        </section>
        <section class="trees" id="trees">
            <img src="images/home/trees.jpg" alt="Trees">
            <div class="trees-text">
                <h1>Every 1.2 seconds</h1>
                <p>man destroys an area of forest<br>the size of a football field</p>
            </div>
        </section>
        <section class="pollution" id="pollution">
            <div class="pollution-img"></div>
            <h1>4.2 million</h1>
            <h2>deaths every year</h2>
            <p>occur as a result of exposure to ambient<br>(outdoor) air pollution</p>
        </section>
        <section class="feed" id="feed">
            <div class="feed-text">
                <p id="feed-heading">Become an agent of change</p>
                <p id="feed-para">Help to design interventions to ensure reliable meals for children in underved
                    communities where food can act an incentive to educate and skill development
                </p>
            </div>
            <img src="images/home/feed.webp" alt="Feed">
        </section>
        <section class="blog" id="blog">
                <img src="images/home/Amazon.jpg" alt="Blog">
                <div class="blog-text">
                    <h6>Featured Blog</h6>
                    <h1>Ancestral Memory: Key to Saving the Amazon</h1>
                    <p>From Colombia, Brazil and Equator, different voices stress the importance
                        of protecting Indigenous traditions and the Amazon ecosystem they depend
                        on in the wake of the COVID-19 pandemic.
                    </p>
                    <button>Here their story</button>
                </div>
        </section>
        <section data-text="donate" class="donate" id="donate">
            <div id="donation-title">Donation</div>
            <div id="donate-wrapper">
                <h1>Give With Confidence</h1>
                <form class="donation-form" id="donation-form-submit" method="post">
                    <div class="select-don-type">
                        <input type="radio" name="don-type" id="once" value="once" checked>
                        <label for="once">Give Once</label>
                        <input type="radio" name="don-type" id="monthly" value="monthly">
                        <label for="monthly">Give Monthly</label>
                    </div>
                    <div class="select-org">
                        <label>Select Organization</label>
                        <select name="org_name" id="org_name">
                            <?php
                                $result = pg_query($conn,"Select * from organization");

                                while($row = pg_fetch_assoc($result)){
                                    $orgName = $row["org_name"];
                            ?>
                                    <option value="<?php echo $orgName; ?>" > <?php echo "$orgName"; ?> </option>
                            <?php
                                }
                            ?>
                        </select>
                        <img src="logo/down-chevron.png">
                    </div>
                    <hr>
                    <div class="donator-info">
                        <div id="first-row">
                            <div class="first-name">
                                <label for="first-name">First Name</label>
                                <input type="text" name="first-name" class="don-input" id="d-fn">
                            </div>
                            <div class="last-name">
                                <label for="last-name">Last Name</label>
                                <input type="text" name="last-name" class="don-input" id="d-ln">
                            </div>
                        </div>
                        <div id="second-row">
                            <div class="email">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="don-input" id="d-em">
                            </div>
                            <div class="mobile">
                                <label for="mobile">Mobile</label>
                                <input type="text" name="mobile" class="don-input" id="d-mb">
                            </div>
                        </div>
                        <div id="third-row">
                            <div class="pan">
                                <label for="pan">ID</label>
                                <input type="text" name="pan" class="don-input" id="d-pan">
                            </div>
                            <div class="country">
                                <label for="country">Country</label>
                                <select id="country" name="country">
                                    <option value="IND">India</option>
                                    <option value="USA">USA</option>
                                    <option value="JPN">Japan</option>
                                    <option value="EUK">UK</option>
                                </select>
                                <img src="logo/down-chevron.png">
                            </div>
                        </div>
                        <div id="fourth-row">
                            <div class="add-note">
                                <label for="add-note">Additional Note</label>
                                <input type="text" name="add-note" class="don-input" id="add-note">
                            </div>
                            <div class="amount">
                                <label for="amount">Amount</label>
                                <input type="text" name="amount" id="amount" class="don-input">
                            </div>
                        </div>
                    </div>
                    <div id="impact-button">
                        <input type="submit" value="Create an Impact">
                    </div>
                </form>
            </div>
        </section>
        <section data-text="contact" id="contact" class="contact">
            <div id="contact-title">Contact</div>
            <div class="contact-container">
                <div class="contactinfo">
                    <div>
                        <h2> Contact Info </h2>
                        <ul class="info">
                            <li>
                                <span><img src="logo/place-white.png"></span>
                                <span>
                                Fergusson College<br>Pune<br>411001
                                </span>
                            </li>
                            <li>
                                <span><img src="logo/email-white.png"></span>
                                <span> info@sociodox.org </span>
                            </li>
                            <li>
                                <span><img src="logo/call-white.png"></span>
                                <span> +91-99999-99999 </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="contactForm">
                    <form method="POST" id="contact-form-submit">
                        <h2> Send a Message </h2>
                        <div class="formBox">
                            <div class="inputBox w50">
                                <input type="text" name="cfname" id="cfname" required>
                                <span id="cfn-span"> First Name </span>
                            </div>
                            <div class="inputBox w50">
                                <input type="text" name="clname" id="clname" required>
                                <span id="cln-span"> Last Name </span>
                            </div>
                            <div class="inputBox w50">
                                <input type="text" name="cemail" id="cemail" required>
                                <span id="cem-span"> Email Address </span>
                            </div>
                            <div class="inputBox w50">
                                <input type="text" name="cmobile" id="cmobile" required>
                                <span id="cmb-span"> Mobile Number </span>
                            </div>
                            <div class="inputBox w100">
                                <textarea name="cmsg" id="cmsg" required></textarea>
                                <span> Write your message here... </span>
                            </div>
                            <div class="inputBox w100">
                                <input type="submit" value="Send">
                            </div>
                        </div>
                    </form>
                </div>
              </div>
            </div>
        </section>
        <section data-text="our-team" class="our-team" id="our-team">
            <h2>Our Team</h2>
            <div class="member-card">
              <div class="member">
                <img src="images/home/devis.jpg" class="member-dp">
                <h3 class="user-name"> Devis </h3>
                <h5> Project Head </h5>
              </div>
    
              <div class="member">
                <img src="images/home/aditya.jpg" class="member-dp">
                <h3 class="user-name"> Aditya </h3>
                <h5> Database Expert </h5>
              </div>
    
              <div class="member">
                <img src="images/home/utkarsh.jpg" class="member-dp">
                <h3 class="user-name"> Utkarsh </h3>
                <h5> Design Helper </h5>
              </div>
            </div>
        </section>
        <section id="our-priorities">
            <h2>Our Priorities</h2><br>
            <h1>A World Where People and Nature Trive</h1>
            <h3>We work to connect people with social organization</h3>
            <div class="priority-card">
              <div class="priority">
                <img src="logo/people.png" class="priority-logo">
                <h3> Make a global community </h3>
              </div>
    
              <div class="priority">
                <img src="logo/fire.png" class="priority-logo">
                <h3> Focus on real social issues </h3>
              </div>
    
              <div class="priority">
                <img src="logo/shake-hands.png" class="priority-logo">
                <h3> Bring people and Organizations closer </h3>
              </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="f-section">
            <!--logo-->
            <h1 id="f-logo"> SOCIODOX </h1>
            <!--list-->
            <ul>
              <h1 id="f-title"> Contact </h1>
              <li><p> +91-99999-99999 </p></li>
              <li><p> Fergusson College, Pune</p></li>
              <li><p> Just a project</p></li>
            </ul>
            <!--f-social-->
            <div class="f-social">
              <h1 id="f-title"> Social </h1>
              <!--Social icons-->
              <div class="f-social-icons">
                <a href="#"> <img src="logo/facebook-white.png">    </a>
                <a href="#"> <img src="logo/twitter-white.png">     </a>
                <a href="#"> <img src="logo/instagram-white.png">   </a>
              </div>
            </div>
            <!--email-->
            <div class="f-email">
              <form name="newsletter">
              <!--heading-->
              <h1 id="f-title"> Newsletter </h1>
              <input type="text" placeholder="Enter Your Email" name="email"/><br/>
              <button class="Newsletter" type="submit" onclick="validate_newsletter(document.newsletter.email)">SUBSCRIBE</button>
              </form>
            </div>
          </div>
          <p class="copyright"> copyright sociodox.org</p>
    </footer>
    <!--after blur signin/signup popup-->
    <div class="container" id="popup">
        <!--signup part-->
  
        <div class="form-container sign-up-container">
          <form action="php/signup.php" method="POST">
            <h3 class="login_heading"> Create Account </h3>

            <div class="social-container">
              <a href="#" class="social"> <img src="logo/google.png" ></a>
              <a href="#" class="social"> <img src="logo/facebook-blue.png"></a>
            </div>
            <input type="text" placeholder="Email address or phone number" name="email_phone" required>
            <input type="text" placeholder="Username" name="username" required onkeyup="showHint(this.value)">
            <input type="password" placeholder="Password" name="password" required>
            <span id="txtHint"></span>
            <button type="submit" id="action-btn"> Sign Up </button>
            <button type="button" id="cancel_button" onclick="toggle()"> Cancel </button>
          </form>
        </div>
  
        <!--signin part-->
              
        <div class="form-container sign-in-container">
          <form action="php/checklogin.php" method="POST">
            <h3 class="login_heading"> Sign In </h3>
        
            <div class="social-container">
                <a href="#" class="social"> <img src="logo/google.png" ></a>
                <a href="#" class="social"> <img src="logo/facebook-blue.png"></a>
            </div>
            <input type="text" placeholder="Email address or phone number" name="email_phone" required>
            <input type="password" placeholder="Password" name="password" required>
            <button type="submit" id="action-btn"> Sign In </button>
        
            <button type="button" id="cancel_button" onclick="toggle()"> Cancel </button>
            <a class="login_anchor" href="#" style="text-decoration:none;"> Forgotten account </a>
          </form>
        </div>
  
        <!--signin/signup overlay-->
  
        <div class="overlay-container">
          <div class="overlay">
            <div class="overlay-panel overlay-left">
              <h3 class="login_heading"> Hey sapiens, </h3>
              <p class="login_paragraph"> Glad you're back... </p>
              <button class="ghost" id="signIn"> Sign In </button>
            </div>
            <div class="overlay-panel overlay-right">
              <h3 class="login_heading"> Welcome, Homo-sapiens </h3>
              <p class="login_paragraph"> So, you are new here. Let's make a new account...</p>
              <button class="ghost" id="signUp"> Sign Up </button>
            </div>
          </div>
        </div>
    </div>
    <div id="success-popup">
        <div id="success-popup-msg"></div>
        <button id="success-button" onclick="success_toggle(); resetAllForms();"></button>
    </div>
    </center>
</body>
</html>