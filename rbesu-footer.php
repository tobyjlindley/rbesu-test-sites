<?php
if (isset($_POST['email']) && isset($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = 'toby.lindley@redbaronsesu.org.uk';
    $subject = "You have a message from your website contact form";
    $body = '<html>
                <body>
                    <p>Name:<br>'.$name.'<p>
                    <p>Email Address:<br>'.$email.'<p>
                    <p>Message:<br>'.$message.'<p>
                </body>
            </html>'
    // headers
    $headers = "From: ".$name." <".$email.">\r\n";
    $headers .= "Reply-To: ".$email."">\r\n";
    $headers .= MIME-Version: 1.0>\r\n";
    $headers .= "Content-type: text/html; charset=utf-8">\r\n";
    // send
    $send = mail($to, $subject, $body, $headers);
    
}
?>
<!doctype html lang="en" xml:lang="en">
    <link rel="stylesheet" href="styles/rbesu-style.css">
    <link rel="icon" href="images/rbesu-logo.svg" sizes="16x16">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="" href="php/form-email.php">
<div id="footer">
    <form method="post" action="rbesu-footer.php">
        <label id="title" for="title">Contact Us</label>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="    Your Name">
        <label for="email">Email Address:</label>
        <input type="text" id="email" name="email" placeholder="    Your email address">
        <label for="message">Message:</label>
        <textarea rows = 4 cols = 1 type="text" id="message" name="message" placeholder="    Your Message"></textarea>
        <input type="submit" id="submit" value="Submit">
    </form>
    <ul id="socials">
        <li id="title"><p>Socials</p></li>
        <li id="insta"><a href="https://www.instagram.com/redbaronsesu/" class="fa fa-instagram"></a></li>
        <li id="fb"><a href="https://www.facebook.com/redbaronsesu/" class="fa fa-facebook"></a></li>
    </ul>
    <p id="copyright">Copyright Red Barons ESU. All rights reserved.</p>
    <ul id="sitemap">
        <li id="title">Sitemap</li>
        <li><a href="rbesu-index.php">Home</a></li>
        <li><a href="rbesu-what-is-explorers.php">What Is Explorers</a></li>
        <li><a href="rbesu-who-are-red-barons.php">Who are the Red Barons</a></li>
        <li><a href="rbesu-blog.php">Blog</a></li>
        <li><a href="rbesu-join-us.php">Join Us</a></li>
        <li><a href="rbesu-help-us.php">Help Us</a></li>
        <li><a href="rbesu-contact-us.php">Contact Us</a></li>
        <li><a href="rbesu-documents.php">Documents</a></li>
        <li><a href="rbesu-useful-links.php">Useful Links</a></li>
    </ul>
</div>
</html>