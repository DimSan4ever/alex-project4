<pre>
<?php
require 'states2.php';
//Пред вывод
echo "<h2>First</h2>";
print_r($us_state_abbrevs_names);
//Сортировка
ksort($us_state_abbrevs_names['states']);
rsort($us_state_abbrevs_names['countries']);
$values=$us_state_abbrevs_names['states'];
sort($values);
//Цикл
$i=0;
foreach ($us_state_abbrevs_names['states'] as $k=>$v){
    $us_state_abbrevs_names['states'][$k]=$values[$i];
    $i++;
}
//Результат
echo"<h2>Sorted</h2>";
print_r($us_state_abbrevs_names);  
?>
</pre>
