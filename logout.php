<?php

session_start();

unset($_SESSION["username"]);
session_destroy();
echo "
<script>
    alert('Logout Berhasil')
    window.location = 'index.php'
</script>
";

?>