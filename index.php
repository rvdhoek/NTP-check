<html>
<HEAD>
<meta name="robots" content="noindex">

<TITLE>NTP test</TITLE>
</HEAD>

<BODY BGCOLOR="WHITE">
<H1>A simple NTP test</H1>

<table border="3" bordercolor="#c86260" bgcolor="#ffffcc" width="50%" cellspacing="5" cellpadding="3">

<tr><td align="center" colspan="2">MIJN MENU</td></tr>
<tr><td valign="top">
   <form method="post" action="handler.php">

        <p>NTP ip adres:</p>
        <input type="text" name="ntp_servername"></p>

        <p>What to test:
        <input type="checkbox" name="opt0" /> ntpdate </p>
        <input type="checkbox" name="opt1" /> ntpq -c pe </p>
        <input type="checkbox" name="opt2" /> ntpq -crv </p>
        <input type="checkbox" name="opt3" /> ntpq -c ntpversion -c version </p>
        <input type="checkbox" name="opt4" /> ntpq -c associations </p>
        <input type="submit" value="Submit" />

        </form>
</tr>
</HEAD>
</html>
