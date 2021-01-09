<?php

require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();
echo '<pre>', print_r($faker), '</pre><br>';
?>
<br><br><br>
<h1>TEST</h1>
<?php

echo '<pre>', print_r($_ENV), '</pre><br>';