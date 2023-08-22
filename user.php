<?php
if (isset($_GET['name']) && isset($_GET['email'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];

    // Generate the XML document with user inputs
    $xml = <<<XML
<user>
    <name>$name</name>
    <email>$email</email>
</user>
XML;

    // Display the generated XML
    echo "<h3>User Information:</h3>";
    echo "<pre>" . htmlentities($xml) . "</pre>";
} else {
    echo "Please fill out the form.";
}
?>
