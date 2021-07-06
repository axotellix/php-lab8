<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel = "stylesheet" href = "styles/css/Normalize.css">
    <link rel="stylesheet" href="styles/css/styles.css">

    <link rel = "shortcut icon" href = "imgs/favicon.ico">

    <title>EcoGuard.</title>
</head>
<body>

    <!-- [ NAVBAR ] -->
    <nav>
        
        <button class = 'menu'>
            <svg class="icon">
                <use xlink:href="imgs/icons.svg#ico-menu"></use>
            </svg>
        </button>

        <h1 class="logo">EcoGuard.</h1>

    </nav>


    <!-- [ MAIN ] -->
    <section class = 'form bg-light'>
        
        <form action="result.php" method = "POST" class = 'form-wide form-light centered'>
            <textarea type="text" name = 'text'  placeholder="Your text ..."></textarea>

            <input type="submit" value = 'ANALYSE' enabled = 'true'>
        </form>

    </section>


    <footer class = 'fixed-bottom'>
        <p>&copy; EcoGuard | All rights reserved.</p>
    </footer>

</body>
</html>