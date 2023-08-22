<!DOCTYPE html>
<html>
<head>
    <title>Vulnerabilities Demo</title>
</head>
<body>
    <h1>Vulnerabilities Demo</h1>
    <h2>Remote File Inclusion (RFI) Vulnerability</h2>
    <p>This page demonstrates the RFI vulnerability. Enter a page name to include:</p>
    <form action="index.php" method="GET">
        <label for="page">Page:</label>
        <input type="text" id="page" name="page">
        <input type="submit" value="Include">
    </form>

    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        include($page . '.php');
    }
    ?>
    
    <hr>

    <h2>XML Injection Vulnerability</h2>
    <p>This page demonstrates the XML Injection vulnerability. Enter your name and email:</p>
    <form action="user.php" method="GET">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <br>
        <input type="submit" value="Submit">
    </form>

    <hr>

    <h2>SQL Injection Vulnerability</h2>
    <p>This page demonstrates the SQL Injection vulnerability. Enter a user ID:</p>
    <form action="sql_injection.php" method="GET">
        <label for="userid">User ID:</label>
        <input type="text" id="userid" name="userid">
        <br>
        <input type="submit" value="Submit">
    </form>

    <hr>

    <h2>Cross-Site Scripting (XSS) Vulnerability</h2>
    <p>This page demonstrates the Cross-Site Scripting (XSS) vulnerability. Enter a comment:</p>
    <form action="xss.php" method="POST">
        <label for="comment">Comment:</label>
        <input type="text" id="comment" name="comment">
        <br>
        <input type="submit" value="Submit">
    </form>

    <hr>

    <h2>Cross-Site Request Forgery (CSRF) Vulnerability</h2>
    <p>This page demonstrates the Cross-Site Request Forgery (CSRF) vulnerability.</p>
    <a href="csrf.php?action=transfer&amount=100">Transfer $100</a>

    <hr>

    <h2>Insecure Direct Object References (IDOR) Vulnerability</h2>
    <p>This page demonstrates the Insecure Direct Object References (IDOR) vulnerability. Enter a user ID:</p>
    <form action="idor.php" method="GET">
        <label for="userid">User ID:</label>
        <input type="text" id="userid" name="userid">
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
