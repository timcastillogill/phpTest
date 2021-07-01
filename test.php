
<h1><?php
// Hello Emily
echo "Hello, world";
?>
</h1>

<p><?php

$style = "style='color: blue'";

$color = "blue";
$txt = "Hello Ealing";
// Try to print variable value
echo "<em>The color of the sky is " . $color . "</em><br>";

echo $txt;

define("HOUSE", "Surbiton");
echo HOUSE,  $color, "My favourite color";
echo "<h3 style='color: blue; text-align: center'>This is my favourite color</h3>";
echo "<h3 " . $style . "'text-align: center'>This is my favourite other color</h3>";
print "Hello Blue board!";

echo strlen(HOUSE);
?>
</p>