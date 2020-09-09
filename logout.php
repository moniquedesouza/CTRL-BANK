<?php
session_start();
session_destroy();
echo '<script language="javascript">';
		echo 'alert("Sessão encerrada!!")';
		echo '</script>';
?>
<script language= "JavaScript">
window.location="index.html";
</script>