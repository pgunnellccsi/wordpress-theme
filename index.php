<!DOCTYPE html>
<html lang="en">
<head>
    <title>CCSI - Call Center Services</title>
    <meta charset="UTF-8">
    <!-- <title><?php bloginfo('name'); ?></title> -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body>
    <div id="wrapper">
        <div class="header">
            <a><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="CCSI Logo"></a>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="clients.php">Clients</a></li>
                    <li><a href="news.php">News</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="quote">
            <img src="<?php echo get_template_directory_uri(); ?>/images/quote.png" alt="Taxi USA quote">
        </div>
        <div class="tab-container">
            <div class="tab-content">
                <div id="tab1" class="tab active">
                    <div class="tab-body">
                        <img class="tab-image" src="<?php echo get_template_directory_uri(); ?>/images/tab1.png" alt>
                        <div class="tab-body-text">
                            <h3>Full Service Call Center</h3>
                            <div class="site-inline-style1">We answer your phones and dispatch the trips.</div>
                            <a class="tab-body-button">
                                <div class="site-inline-style2">Click here to learn more...</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="tab2" class="tab">
                    <div class="tab-body">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/tab2.png">
                        <div class="tab-body-text">
                            <h3>Hosted Operations</h3>
                            <div class="site-inline-style1">Use our servers and software to take calls and dispatch trips.</div>
                            <a class="tab-body-button">
                                <div class="site-inline-style2">Click here to learn more...</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="tab3" class="tab">
                    <div class="tab-body">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/tab3.png">
                        <div class="tab-body-text">
                            <h3>Many Ways to Book Trips</h3>
                            <div class="site-inline-style1">
                                <ul>
                                    <li>Smart Phone Applications</li>
                                    <li>SMS Text</li>
                                    <li>Websites</li>
                                    <li>Telephone IVR</li>
                                </ul>
                            </div>
                            <a class="tab-body-button">
                                <div class="site-inline-style2">Click here to learn more...</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="tab4" class="tab">
                    <div class="tab-body">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/tab4.png">
                        <div class="tab-body-text">
                            <h3>Cashiering and Billing</h3>
                            <div class="site-inline-style1">Trips and credit cards are handled accurately and consistently, making driver cashiering faster and much more accurate.</div>
                            <a class="tab-body-button">
                                <div class="site-inline-style2">Click here to learn more...</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-buttons">
                <button class="tab-btn active" data-tab="tab1">Full Service Call Center</button>
                <button class="tab-btn" data-tab="tab2">Hosted Call Taking and Dispatch</button>
                <button class="tab-btn" data-tab="tab3">Multiple Booking Options</button>
                <button class="tab-btn" data-tab="tab4">Cashiering and Billing Solutions</button>
            </div>
            
        </div>

        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
        <main>
            <div id="services-text">
                <h2>Services</h2>
                <p>
                    Unlike traditional dispatch system providers where you purchase or lease all the equipment and train the staff to
                    use it, CCSi offers full-service, turnkey reservation, dispatch and back office services by providing computer 
                    hardware, software and personnel.  A typical CCSi client takes advantage of the following services:
                </p>
            </div>
        </main>
    </div>
    <?php wp_footer(); ?>
</body>
</html>
