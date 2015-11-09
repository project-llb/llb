<!DOCTYPE>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script>
        $(document).ready(function() {
            function close_accordion_section() {
                $('.accordion .accordion-section-title').removeClass('active');
                $('.accordion .accordion-section-content').slideUp(300).removeClass('open');
            }

            $('.accordion-section-title').click(function(e) {
                // Grab current anchor value
                var currentAttrValue = $(this).attr('href');

                if($(e.target).is('.active')) {
                    close_accordion_section();
                }else {
                    close_accordion_section();

                    // Add active class to section title
                    $(this).addClass('active');
                    // Open up the hidden content panel
                    $('.accordion ' + currentAttrValue).slideDown(300).addClass('open');
                }

                e.preventDefault();
            });
        });


    </script>
</head>
<body>
<div id="container">
    <?php include "../libs/header.php"; ?>
    <?php include "../libs/navbar.php"; ?>
    <div id="content">
        <div class="accordion">
            <div class="accordion-section">
                <a class="accordion-section-title" href="#accordion-1">B-ITA4-1a</a>

                <div id="accordion-1" class="accordion-section-content">
                    <div class="CSSTableGenerator" >
                        <table >
                            <tr>
                                <td>
                                    Leerlingnummer
                                </td>
                                <td>
                                    Voornaam
                                </td>
                                <td>
                                    Achternaam
                                </td>
                                <td>
                                    Telefoonnummer
                                </td>
                                <td>
                                    Klas
                                </td>
                                <td>
                                    Emailadres
                                </td>
                                <td>
                                    Wachtwoord
                                </td>
                                <td>
                                    Geslaagd
                                </td>
                            </tr>
                            <tr>
                                <td >
                                    0099901
                                </td>
                                <td>
                                    Stef
                                </td>
                                <td>
                                    Winter
                                </td>
                                <td>
                                    0636286140
                                </td>
                                <td>
                                    B-ITA4-1a
                                </td>
                                <td>
                                    stefwinter1995@gmail.com
                                </td>
                                <td>
                                    <font style="color: green">Wachtwoord aangepast</font>
                                </td>
                                <td>
                                    <p style="text-align: center">&#9989;</p>
                                </td>
                            </tr>
                            <tr>
                                <td >
                                    8798596
                                </td>
                                <td>
                                    Terrence
                                </td>
                                <td>
                                    de Windt
                                </td>
                                <td>
                                    0686541287
                                </td>
                                <td>
                                    B-ITA4-1a
                                </td>
                                <td>
                                    bdamanmaster8@hotmail.com
                                </td>
                                <td>
                                    <font style="color: red">Nog niet aangepast</font>
                                </td>
                                <td>
                                    <p style="text-align: center; color: red">&#10008;</p>
                                </td>
                            </tr>
                            <tr>
                                <td >
                                    5632148
                                </td>
                                <td>
                                    Henk
                                </td>
                                <td>
                                    van Zand
                                </td>
                                <td>
                                    0685695475
                                </td>
                                <td>
                                    B-ITA4-1a
                                </td>
                                <td>
                                    henkvanzand@gmail.com
                                </td>
                                <td>
                                    <font style="color: red">Nog niet aangepast</font>
                                </td>
                                <td>
                                    <p style="text-align: center; color: red">&#10008;</p>
                                </td>
                            </tr>
                            <tr>
                                <td >
                                    8529634
                                </td>
                                <td>
                                    Piet
                                </td>
                                <td>
                                    Zeeschuit
                                </td>
                                <td>
                                    0635485621
                                </td>
                                <td>
                                    B-ITA4-1a
                                </td>
                                <td>
                                    pietzeeschuit@gmail.com
                                </td>
                                <td>
                                    <font style="color: green">Wachtwoord aangepast</font>
                                </td>
                                <td>
                                    <p style="text-align: center">&#9989;</p>
                                </td>
                            </tr>
                            <tr>
                                <td >
                                    5289364
                                </td>
                                <td>
                                    Hendrik
                                </td>
                                <td>
                                    Schuil
                                </td>
                                <td>
                                    0652384579
                                </td>
                                <td>
                                    B-ITA4-1a
                                </td>
                                <td>
                                    hendrikschuil@gmail.com
                                </td>
                                <td>
                                    <font style="color: green">Wachtwoord aangepast</font>
                                </td>
                                <td>
                                    <p style="text-align: center">&#9989;</p>
                                </td>
                            </tr>
                        </table>
                    </div>


                </div><!--end .accordion-section-content-->
            </div><!--end .accordion-section-->

            <div class="accordion-section">
                <a class="accordion-section-title" href="#accordion-2">B-ITA4-2a</a>

                <div id="accordion-2" class="accordion-section-content">
                    <div class="CSSTableGenerator" >
                        <table >
                            <tr>
                                <td>
                                    Leerlingnummer
                                </td>
                                <td>
                                    Voornaam
                                </td>
                                <td>
                                    Achternaam
                                </td>
                                <td>
                                    Telefoonnummer
                                </td>
                                <td>
                                    Klas
                                </td>
                                <td>
                                    Emailadres
                                </td>
                                <td>
                                    Wachtwoord
                                </td>
                                <td>
                                    Geslaagd
                                </td>
                            </tr>
                            <tr>
                                <td >
                                    0099901
                                </td>
                                <td>
                                    Stef
                                </td>
                                <td>
                                    Winter
                                </td>
                                <td>
                                    0636286140
                                </td>
                                <td>
                                    B-ITA4-2a
                                </td>
                                <td>
                                    stefwinter1995@gmail.com
                                </td>
                                <td>
                                    <font style="color: green">Wachtwoord aangepast</font>
                                </td>
                                <td>
                                    <p style="text-align: center">&#9989;</p>
                                </td>
                            </tr>
                            <tr>
                                <td >
                                    8798596
                                </td>
                                <td>
                                    Terrence
                                </td>
                                <td>
                                    de Windt
                                </td>
                                <td>
                                    0686541287
                                </td>
                                <td>
                                    B-ITA4-2a
                                </td>
                                <td>
                                    bdamanmaster8@hotmail.com
                                </td>
                                <td>
                                    <font style="color: red">Nog niet aangepast</font>
                                </td>
                                <td>
                                    <p style="text-align: center; color: red">&#10008;</p>
                                </td>
                            </tr>
                            <tr>
                                <td >
                                    5632148
                                </td>
                                <td>
                                    Henk
                                </td>
                                <td>
                                    van Zand
                                </td>
                                <td>
                                    0685695475
                                </td>
                                <td>
                                    B-ITA4-2a
                                </td>
                                <td>
                                    henkvanzand@gmail.com
                                </td>
                                <td>
                                    <font style="color: red">Nog niet aangepast</font>
                                </td>
                                <td>
                                    <p style="text-align: center; color: red">&#10008;</p>
                                </td>
                            </tr>
                            <tr>
                                <td >
                                    8529634
                                </td>
                                <td>
                                    Piet
                                </td>
                                <td>
                                    Zeeschuit
                                </td>
                                <td>
                                    0635485621
                                </td>
                                <td>
                                    B-ITA4-2a
                                </td>
                                <td>
                                    pietzeeschuit@gmail.com
                                </td>
                                <td>
                                    <font style="color: green">Wachtwoord aangepast</font>
                                </td>
                                <td>
                                    <p style="text-align: center">&#9989;</p>
                                </td>
                            </tr>
                            <tr>
                                <td >
                                    5289364
                                </td>
                                <td>
                                    Hendrik
                                </td>
                                <td>
                                    Schuil
                                </td>
                                <td>
                                    0652384579
                                </td>
                                <td>
                                    B-ITA4-2a
                                </td>
                                <td>
                                    hendrikschuil@gmail.com
                                </td>
                                <td>
                                    <font style="color: green">Wachtwoord aangepast</font>
                                </td>
                                <td>
                                    <p style="text-align: center">&#9989;</p>
                                </td>
                            </tr>
                        </table>
                    </div>


                </div><!--end .accordion-section-content-->
            </div><!--end .accordion-section-->

            <div class="accordion-section">
                <a class="accordion-section-title" href="#accordion-3">B-ITA4-3a</a>

                <div id="accordion-3" class="accordion-section-content">
                    <div class="CSSTableGenerator" >
                        <table >
                            <tr>
                                <td>
                                    Leerlingnummer
                                </td>
                                <td>
                                    Voornaam
                                </td>
                                <td>
                                    Achternaam
                                </td>
                                <td>
                                    Telefoonnummer
                                </td>
                                <td>
                                    Klas
                                </td>
                                <td>
                                    Emailadres
                                </td>
                                <td>
                                    Wachtwoord
                                </td>
                                <td>
                                    Geslaagd
                                </td>
                            </tr>
                            <tr>
                                <td >
                                    0099901
                                </td>
                                <td>
                                    Stef
                                </td>
                                <td>
                                    Winter
                                </td>
                                <td>
                                    0636286140
                                </td>
                                <td>
                                    B-ITA4-3a
                                </td>
                                <td>
                                    stefwinter1995@gmail.com
                                </td>
                                <td>
                                    <font style="color: green">Wachtwoord aangepast</font>
                                </td>
                                <td>
                                    <p style="text-align: center">&#9989;</p>
                                </td>
                            </tr>
                            <tr>
                                <td >
                                    8798596
                                </td>
                                <td>
                                    Terrence
                                </td>
                                <td>
                                    de Windt
                                </td>
                                <td>
                                    0686541287
                                </td>
                                <td>
                                    B-ITA4-3a
                                </td>
                                <td>
                                    bdamanmaster8@hotmail.com
                                </td>
                                <td>
                                    <font style="color: red">Nog niet aangepast</font>
                                </td>
                                <td>
                                    <p style="text-align: center; color: red">&#10008;</p>
                                </td>
                            </tr>
                            <tr>
                                <td >
                                    5632148
                                </td>
                                <td>
                                    Henk
                                </td>
                                <td>
                                    van Zand
                                </td>
                                <td>
                                    0685695475
                                </td>
                                <td>
                                    B-ITA4-3a
                                </td>
                                <td>
                                    henkvanzand@gmail.com
                                </td>
                                <td>
                                    <font style="color: red">Nog niet aangepast</font>
                                </td>
                                <td>
                                    <p style="text-align: center; color: red">&#10008;</p>
                                </td>
                            </tr>
                            <tr>
                                <td >
                                    8529634
                                </td>
                                <td>
                                    Piet
                                </td>
                                <td>
                                    Zeeschuit
                                </td>
                                <td>
                                    0635485621
                                </td>
                                <td>
                                    B-ITA4-3a
                                </td>
                                <td>
                                    pietzeeschuit@gmail.com
                                </td>
                                <td>
                                    <font style="color: green">Wachtwoord aangepast</font>
                                </td>
                                <td>
                                    <p style="text-align: center">&#9989;</p>
                                </td>
                            </tr>
                            <tr>
                                <td >
                                    5289364
                                </td>
                                <td>
                                    Hendrik
                                </td>
                                <td>
                                    Schuil
                                </td>
                                <td>
                                    0652384579
                                </td>
                                <td>
                                    B-ITA4-3a
                                </td>
                                <td>
                                    hendrikschuil@gmail.com
                                </td>
                                <td>
                                    <font style="color: green">Wachtwoord aangepast</font>
                                </td>
                                <td>
                                    <p style="text-align: center">&#9989;</p>
                                </td>
                            </tr>
                        </table>
                    </div>


                </div><!--end .accordion-section-content-->
            </div><!--end .accordion-section-->

            <div class="accordion-section">
                <a class="accordion-section-title" href="#accordion-4">B-ITA4-4a</a>

                <div id="accordion-4" class="accordion-section-content">
                    <div class="CSSTableGenerator" >
                        <table >
                            <tr>
                                <td>
                                    Leerlingnummer
                                </td>
                                <td>
                                    Voornaam
                                </td>
                                <td>
                                    Achternaam
                                </td>
                                <td>
                                    Telefoonnummer
                                </td>
                                <td>
                                    Klas
                                </td>
                                <td>
                                    Emailadres
                                </td>
                                <td>
                                    Wachtwoord
                                </td>
                                <td>
                                    Geslaagd
                                </td>
                            </tr>
                            <tr>
                                <td >
                                    0099901
                                </td>
                                <td>
                                    Stef
                                </td>
                                <td>
                                    Winter
                                </td>
                                <td>
                                    0636286140
                                </td>
                                <td>
                                    B-ITA4-4a
                                </td>
                                <td>
                                    stefwinter1995@gmail.com
                                </td>
                                <td>
                                    <font style="color: green">Wachtwoord aangepast</font>
                                </td>
                                <td>
                                    <p style="text-align: center">&#9989;</p>
                                </td>
                            </tr>
                            <tr>
                                <td >
                                    8798596
                                </td>
                                <td>
                                    Terrence
                                </td>
                                <td>
                                    de Windt
                                </td>
                                <td>
                                    0686541287
                                </td>
                                <td>
                                    B-ITA4-4a
                                </td>
                                <td>
                                    bdamanmaster8@hotmail.com
                                </td>
                                <td>
                                    <font style="color: red">Nog niet aangepast</font>
                                </td>
                                <td>
                                    <p style="text-align: center; color: red">&#10008;</p>
                                </td>
                            </tr>
                            <tr>
                                <td >
                                    5632148
                                </td>
                                <td>
                                    Henk
                                </td>
                                <td>
                                    van Zand
                                </td>
                                <td>
                                    0685695475
                                </td>
                                <td>
                                    B-ITA4-4a
                                </td>
                                <td>
                                    henkvanzand@gmail.com
                                </td>
                                <td>
                                    <font style="color: red">Nog niet aangepast</font>
                                </td>
                                <td>
                                    <p style="text-align: center; color: red">&#10008;</p>
                                </td>
                            </tr>
                            <tr>
                                <td >
                                    8529634
                                </td>
                                <td>
                                    Piet
                                </td>
                                <td>
                                    Zeeschuit
                                </td>
                                <td>
                                    0635485621
                                </td>
                                <td>
                                    B-ITA4-4a
                                </td>
                                <td>
                                    pietzeeschuit@gmail.com
                                </td>
                                <td>
                                    <font style="color: green">Wachtwoord aangepast</font>
                                </td>
                                <td>
                                    <p style="text-align: center">&#9989;</p>
                                </td>
                            </tr>
                            <tr>
                                <td >
                                    5289364
                                </td>
                                <td>
                                    Hendrik
                                </td>
                                <td>
                                    Schuil
                                </td>
                                <td>
                                    0652384579
                                </td>
                                <td>
                                    B-ITA4-4a
                                </td>
                                <td>
                                    hendrikschuil@gmail.com
                                </td>
                                <td>
                                    <font style="color: green">Wachtwoord aangepast</font>
                                </td>
                                <td>
                                    <p style="text-align: center">&#9989;</p>
                                </td>
                            </tr>
                        </table>
                    </div>


                </div><!--end .accordion-section-content-->
            </div><!--end .accordion-section-->
        </div><!--end .accordion-->
    </div>
    <?php include "../libs/footer.php"; ?>

</div>

</body>
</html>