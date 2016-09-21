<head>
    <title>Login | Tella365 </title>
</head>
<?php
require_once ("headers/initializer.php");

include_once (NAVIGATION);
?>

<div class="container">
   <?php
   require ("php-graph-sdk-master/src");
$fb = new Facebook\Facebook([
    'app_id' => '{193334877754313}', // Replace {app-id} with your app id
    'app_secret' => '{8d5bf5dfdfeefb7f2f24e8b517cc0fde}',
    'default_graph_version' => 'v2.7',
    ]);

    $helper = $fb->getRedirectLoginHelper();

    $permissions = ['godwinshobowale@gmail.com']; // Optional permissions
    $loginUrl = $helper->getLoginUrl('https://localhost/tella365.com', $permissions);

    echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>'
        ?>
</div>
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>

<?php
include_once (FOOTER);

?>