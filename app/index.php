<!doctype html>
<html lang="">

<head>
    <?php include 'includes/head.php'; ?>
</head>

<body>
    <header class="">
        <div class="wrapper">
            <button class="menu">
                <img src="images/hamburger.svg" alt="Menu">
            </button>
            <h1 class="logo">Web <strong>Starter Kit</strong></h1>
            <section class="app-bar-actions">
                <!-- Put App Bar Buttons Here -->
                <!-- e.g <button><i class="icon icon-star"></i></button> -->
            </section>
        </div>
    </header>

    <nav class="navdrawer-container promote-layer">
        <h4>Navigation</h4>
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#hello">Hello</a></li>
            <li><a href="#get-started">Get Started</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <main class="main">
        <div class="wrapper">
            <h1 id="hello">Hello!</h1>
            <p>Welcome to Web Starter Kit.</p>

            <h2 id="get-started">Get Started.</h2>
            <p>Read how to <a href="https://developers.google.com/web/starter-kit">Get Started</a> or check out the <a href="styleguide.html">Style Guide</a>.</p>
        </div>
    </main>


    <?php 
        include 'includes/footer.php';
        include 'includes/scripts.php';
    ?>

    
</body>

</html>