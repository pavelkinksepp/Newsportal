<?php
ob_start();
?>
<h1>Kõik uudised</h1>
<?php
ViewNews::AllNews($arr);
$content = ob_get_clean();
include_once 'view/layout.php';
