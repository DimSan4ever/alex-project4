<pre>
<?php
require 'states/states.php';

$states = $us_state_abbrevs_names['states'];

$state_codes = array();
$state_values = array();

foreach ($states as $state_k => $state_v) {
    $state_codes[] = $state_k;
    $state_values[] = $state_v;
}

sort($state_codes);
sort($state_values);

$newArray = array();

$sorted_states = array();

$i = 0;

foreach ($state_codes as $state_code) {
    $sorted_states[$state_code] = $state_values[$i];
    $i++;
}

var_dump($sorted_states);

$countries = $us_state_abbrevs_names['countries'];
rsort($countries);

var_dump($countries);
?>
</pre>