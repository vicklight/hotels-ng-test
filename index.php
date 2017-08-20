<?php include_once("intern.php");
?>
<!Doctype html>
<html>
    <head>
        <title>hotels.ng test</title>
    </head>
    <body>

    <form action="intern.php" method="post">
        <label>Intern ID</label><input type="text" name="intern_id">
        <br/>

        <label>Name</label><input type="text" name="name">
        <br/>

        <label>Email</label><input type="email" name="email">
        <br/>

        <label>Phone</label><input type="number" name="phone" maxlength="12">
        <br/>
        <input type="submit" value="submit info">
    </form>

    </body>
</html>