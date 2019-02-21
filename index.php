<html>
<head>
<title>Sensitive Content Filter Demo</title>
<link rel="stylesheet" href="sensitive.css" />
</head>
<body>
    <div id="header"><h3>Sensitive Content Filter Demo</h3>
    <p>GitHub (<a href="https://github.com/libmanuk/SensitiveContentDemo" target=\"_blank\">https://github.com/libmanuk/SensitiveContentDemo</a>)</p>
    <h2 class="caption">Young Dewey Melvil (Great Pyrenees) sticking out his tongue.</h2></div>
<?php


$sensitiveText = "tongue";
$dctitle = "Young Dewey Melvil (Great Pyrenees) sticking out his tongue.";

$mySensitiveArray = explode(',', $sensitiveText);
$needles = $mySensitiveArray;

foreach ($needles as $needle)
{
    if (stripos($dctitle, $needle) !== FALSE)
    {
        $sensitiveFlag = "true";

    } elseif (strpos($dcsource, $needle) !== FALSE) {

        $sensitiveFlag = "true";
    }
}


if ("true" == $sensitiveFlag):

echo "<div>\n<p id=\"tap_text\">click or tap to view image</p>\n<p id=\"clickSense\">\n<img src=\"sharp_sensitive.png\" onclick=\"show('sensitive_image'); hide('clickSense')\" alt=\"click me\" style=\"text-align:center\" class=\"center_simage\">\n</p>\n";


echo "<div id=\"sensitive_image\" style=\"display:none;\">\n<img src=\"sensitive_image.jpg\" style=\width:480px;height:480px;\" class=\"center_image\"/>\n</div>\n</div>\n";


else:

echo "<div><img src=\"sensitive_image.jpg\" class=\"center_image\"/></div>\n";

endif;

?>

<!-- javascript code (https://stackoverflow.com/questions/15229732/show-a-div-onclick-and-hide-the-image-that-triggered-it/15229787) -->

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
