<?php
function gToken() {
$data = random_bytes(32);
$b = base64_encode($data);
return $b;
}

session_start();
$_SESSION['token'] = gToken();
?>

<button type="button">
<a href="https://domain.ir/yorpage.php?token=<?= $SESSION['token'] ?>go to that page</a>
</button>
