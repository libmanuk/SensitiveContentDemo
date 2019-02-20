<html>
<head>
<title>Sample Sensitive Content Filter</title>
</head>
<body>
<?php
// https://stackoverflow.com/questions/15229732/show-a-div-onclick-and-hide-the-image-that-triggered-it/15229787

$sensitiveText = "murder,dead,blood";
$dctitle = "Crime scene photo of an unidentified murder victim.";

$SensitiveArray = explode(',', $sensitiveText);
$sensitives = $SensitiveArray;

foreach ($sensitives as $sensitive)
{
    if (stripos($dctitle, $sensitive) !== FALSE)
    {
        $sensitiveFlag = "true";

    } elseif (strpos($dcsource, $needle) !== FALSE) {

        $sensitiveFlag = "true";
    }
}


if ("true" == $sensitiveFlag):

echo "<div><p id=\"clickSense\"><img src=\"sharp_sensitive.png\" onclick=\"show('sensitive_image'); hide('clickSense')\" alt=\"click me\" style=\"text-align:center\"></p>";


echo "<div id=\"sensitive_image\" style=\"display:none;\"><img src=\"sensitive_image.jpg\" style=\width:480px;height:480px;\"/></div></div>";


else:

echo "<div><img src=\"sensitive_image.jpg\"/></div>";

endif;

?>
<script>
  function show (toBlock){
    setDisplay(toBlock, 'block');
  }
  function hide (toNone) {
    setDisplay(toNone, 'none');
  }
  function setDisplay (target, str) {
    document.getElementById(target).style.display = str;
  }
</script>
</html>
