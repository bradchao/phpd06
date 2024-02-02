<?php
    include("bradapis.php");
    session_start();
    if (!isset($_SESSION["member"])) header('location: brad44.php');
    $member = $_SESSION['member'];
?>
<h1>Brad Big Company</h1>
<hr />
Main Page
<hr />
Hello, <?php echo $member->getName(); ?><br />
<img src='data:image/jpeg;base64, <?php echo base64_encode($member->getIcon());?>' />
<a href='logout.php'>Logout</a>