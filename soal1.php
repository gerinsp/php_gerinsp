<?php

$jml = $_GET['jml'];
$total = 0;
$j = 3;
echo "<table border=1 cellpadding=10 cellspacing=0>\n";
for ($a = $jml; $a > 0; $a--)
{
  echo "<tr>";
  echo "<td colspan=$jml>HASIL: $total</td>";
  echo "</tr>";
  echo "<tr>\n";
  for ($b = $a; $b > 0; $b--)
  {
    echo "<td>$b</td>";
    $total += $b;
  }
  echo "</tr>\n";
}
echo "</table>";
?>