<!DOCTYPE>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div id="container">
    <?php include "../libs/header.php"; ?>
    <?php include "../libs/navbar.php"; ?>
    <div id="content">
        <div id="workshop">
            <h2 style="color: cornflowerblue; text-align: center">Workshop toevoegen</h2>
        </div>
        <div id="mail">
            <h2 style="color: cornflowerblue; text-align: center">Standaardmails aanmaken</h2>
            <FORM METHOD="post" ACTION="bestemming">
                <I style="margin-left: 20px">In het volgende vak kun je tekst invoeren:</I><BR>
                <BR>
                <TEXTAREA style="margin-left: 20px" NAME="tekstvak" ROWS="25" COLS="56"></TEXTAREA>
            </FORM>
            <a style="margin-left: 20px" href="#" class="myButton">e-mail opslaan</a>
        </div>
    </div>
    <?php include "../libs/footer.php"; ?>

</div>

</body>
</html>