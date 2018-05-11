<?php
//$servername = "127.0.0.1";
//$username = "root";
//$password = "root1";
//
//// Create connection
//$conn = new mysqli($servername, $username, $password);
//
//if ($con) {
//    $test = '';
//}
?>


<html>
<style>
    .luella {
        font-size: 72px;
    }
</style>

<?php
    $text = "luella is nice\n";
    $text .= "";
    print phpinfo();
?>

<body>
    <div class="luella">
        <?php print $text; ?>
    </div>
    <div id="counting">
        <h2>Counting to 1 million</h2>
    </div>
    <script>
      (function() {
        var text = document.getElementById("counting");
        for (i = 0; i < 1000000; i++) {
          text.innerHTML = "<p>Counting .. " + i + "</p>";
        }
      });
    </script>
</body>
</html>
