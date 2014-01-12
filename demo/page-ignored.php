<?php
require_once('vendor/autoload.php');
$age = new AKlump\VerifyAge\VerifyAge('config.yaml');

// Even though we include the age verification by ignoring this file it won't
// be protected.
$age->ignore('/page-ignored.php');
?>
<?php include 'templates/header.php' ?>

<h1>Non-Restricted Content</h1>

<p class="jumbotron">You see this page because it has been ignored.  It will never require age verification.</p>

<?php include 'templates/footer.php' ?>