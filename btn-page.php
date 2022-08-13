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
<a href="https://domain.ir/receive-page.php?token=<?= $_SESSION['token'] ?>">go to page</a>
</button>
