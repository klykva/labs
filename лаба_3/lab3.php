<?php
$string = file_get_contents('lab3.html');
$count = preg_match_all("/<p>.+<\/p>/", $string, $match);
echo "���������� ����� <b>&lt;p&gt;...&lt;/p&gt;</b> � ���������: " . $count . "<br>";
echo "<br>������� ������: <br>";
for ($i=0; $i < $count; $i++) { 
    echo strip_tags($match[0][$i]) . "<br>";
}
?>