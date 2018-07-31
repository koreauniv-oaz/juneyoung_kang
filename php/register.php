<?php include('./dbconfig.php'); ?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <title>회원가입</title>
    </head>
    <body>
        <form method="post" action="multi.php">
            <input name="name" type="text" placeholder="name" required>
            <input name="id" type="text" placeholder="id" required>
            <input name="pw" type="password" placeholder="pw" required>
            <input name="pw_re" type="password" placeholder="pw_re" required>
            <input type="hidden" name="cmd" value="1">
            <button>Submit</button>
        </form>
    </body>
</html>