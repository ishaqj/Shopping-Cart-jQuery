<?php
  $d = explode("/", trim($path, "/"));
  $srcUrl = '../source.php?dir=' . end($d) . '&amp;file=' . basename($_SERVER["PHP_SELF"]) . '#file';
?>

<footer id='footer'>
<p><em>"Hey Luke, use the <a href='<?=$srcUrl?>'>source</a>."</em></p>
</footer>
<script src="../js/jquery.js"></script>
<script src="../mall/mos.js"></script>
<script src="main.js"></script>

</div>
</body>
</html>
