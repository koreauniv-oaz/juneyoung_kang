<?php include('./dbconfig.php'); ?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <title>로그인</title>
    </head>
    <body>
        <form method="post" action="multi.php">
            <input name="id" type="text" placeholder="id" required>
            <input name="pw" type="password" placeholder="pw" required>
            <input type="hidden" name="cmd" value="0">
            <button>Submit</button>
        </form>
    </body>
</html>