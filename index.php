<?php

require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();

var_dump($faker); ?>
<br><br><br>

<?php

echo '<pre>', print_r($_ENV), '</pre><br>';