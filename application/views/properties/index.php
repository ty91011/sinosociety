<?php

?>

<h1>Properties List</h1>
<ul>
<?

foreach($properties AS $property)
{
    echo "<li>";
    var_dump($property);
    echo "</li>";
}

?>
</ul>