<?php

require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();
echo '<pre>', print_r($faker), '</pre><br>';
?>
<br><br><br>

<?php

echo '<pre>', print_r($_ENV), '</pre><br>';