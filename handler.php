<html>
<HEAD>
<meta name="robots" content="noindex, follow">

<TITLE>NTP test</TITLE>
</HEAD>

<BODY BGCOLOR="WHITE">
<H1>A simple NTP test</H1>

<table border="3" bordercolor="#c86260" bgcolor="#ffffcc" width="50%" cellspacing="5" cellpadding="3">

<tr><td align="center" colspan="2"><?php $strHeading = "<h1>NTP tested: " . $_POST["ntp_servername"] . "</h1>"; echo $strHeading; ?></td></tr>
<tr><td valign="top">



<?php
if (strpos($_POST["ntp_servername"],'qwerty') !== false) {
    echo 'No valid ip/dns name.';
    break;
}
if (strpos($_POST["ntp_servername"],'192') !== false) {
    echo 'No valid ip/dns name.';
    break;
}
if ("" == trim($_POST["ntp_servername"])) {
    echo 'No valid ip/dns name.';
    break;
}


if (isset($_POST['opt0'])) {
                echo "ntpdate -u ". $_POST["ntp_servername"];
                $output = shell_exec('ntpq -c pe '. $_POST["ntp_servername"]);
                echo "<pre>$output</pre>";
                }
if (isset($_POST['opt1'])) {
                echo "ntpq -c pe ". $_POST["ntp_servername"];
                $output = shell_exec('ntpq -c pe '. $_POST["ntp_servername"]);
                echo "<pre>$output</pre>";
                }
if (isset($_POST['opt2'])) {
                echo "ntpq -crv ". $_POST["ntp_servername"];
                $output = shell_exec('ntpq -crv '. $_POST["ntp_servername"]);
                echo "<pre>$output</pre>";
                }
if (isset($_POST['opt3'])) {
                echo "ntpq -c ntpversion -c version ". $_POST["ntp_servername"];
                $output = shell_exec('ntpq -c ntpversion -c version '. $_POST["ntp_servername"]);
                echo "<pre>$output</pre>";
                }
if (isset($_POST['opt4'])) {
                echo "ntpq -c associations ". $_POST["ntp_servername"];
                $output = shell_exec('ntpq -c associations '. $_POST["ntp_servername"]);
                echo "<pre>$output</pre>";
                }
?>


        </tr>
        </body>
</head>
</html>
