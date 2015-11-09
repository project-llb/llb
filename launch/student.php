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
        <div id="open">
            <h2 style="color: cornflowerblue">Workshop aanmelding</h2>
            <p>aanmelding voor workshops is op dit moment:</p>
            <h2 style="color: red">Gesloten</h2>
        </div>
        <div id="info">
            <h2  style="color: cornflowerblue; text-align: center">Mijn Gegevens</h2>
            <div id="info1">
                <tr>Leerlingnummer:</tr><br><br>
                <tr>Voornaam:</tr><br><br>
                <tr>Tussenvoegsels:</tr><br><br>
                <tr>Achternaam:</tr><br><br>
                <tr>Telefoon:</tr><br><br>
                <tr>Klas:</tr><br><br>
                <tr>Cohort:</tr><br><br>
                <tr>Mailadres:</tr><br><br><br><br><br>
                <tr>Wachtwoord:</tr><br>
            </div>
            <div id="info2">
                <tr>0099901</tr><br><br>
                <tr>Stef</tr><br><br>
                <br><br>
                <tr>Winter</tr><br><br>
                <tr>0636286140</tr><br><br>
                <tr>B-ITA4-2a</tr><br><br>
                <tr>2015-2016</tr><br><br>
                <tr>stefwinter1995@gmail.com</tr><br><tr><font style="color: red">Nog niet geverifieerd</font></tr><br>
                <tr><i style="font-size: 13px">Er is een verificatiecode verzonden naar het emailadres</i></tr>
                <br><br>
                <tr><i style="color: green">Wachtwoord aangepast</i></tr>
            </div>
            <br><br>
            <p><i><bold style="color: red; font-size: 15px">Lett op!!</bold> Zolang het mailadres nog niet geverifieerd is en/of je standaard wachtwoord nog niet is aangepast kun je geen gebruik maken van bepaalde delen van de site, zoals aanmelden voor workshops.</i></p>
        </div>
        <div id="work">
            <div>
                <h2  style="color: cornflowerblue; text-align: center">Info Workshops</h2>
                <p style="text-align: center">Informatie over de workshops van de huidige periode:</p>
            </div>
            <div class="accordion">
                <div class="accordion-section">
                    <a class="accordion-section-title" href="#accordion-1">Zang</a>

                    <div id="accordion-1" class="accordion-section-content" >
                        <p><i>Zingen is gezond en geeft je energie. In deze workshops leer je jezelf krachtig neer te zetten in een presentatie. Dit oefen je d.m.v. Zang- en bewegingsoefeningen. En met veel humor o.l.v. een gastdocent. Een erg leuke workshop voor iemand die graag stevig in zijn/haar schoenen wil staan</i></p>
                    </div><!--end .accordion-section-content-->
                </div><!--end .accordion-section-->
                <div class="accordion-section">
                    <a class="accordion-section-title" href="#accordion-2">Sport</a>

                    <div id="accordion-2" class="accordion-section-content">
                        <p><i>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent nulla mi, rutrum ut feugiat at, vestibulum ut neque? Cras tincidunt enim vel aliquet facilisis. Duis congue ullamcorper vehicula. Proin nunc lacus, semper sit amet elit sit amet, aliquet pulvinar erat. Nunc pretium quis sapien eu rhoncus. Suspendisse ornare gravida mi, et placerat tellus tempor vitae.</i></p>
                    </div><!--end .accordion-section-content-->
                </div><!--end .accordion-section-->
                <div class="accordion-section">
                    <a class="accordion-section-title" href="#accordion-3">SOA</a>

                    <div id="accordion-3" class="accordion-section-content">
                        <p><i>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent nulla mi, rutrum ut feugiat at, vestibulum ut neque? Cras tincidunt enim vel aliquet facilisis. Duis congue ullamcorper vehicula. Proin nunc lacus, semper sit amet elit sit amet, aliquet pulvinar erat. Nunc pretium quis sapien eu rhoncus. Suspendisse ornare gravida mi, et placerat tellus tempor vitae.</i></p>
                    </div><!--end .accordion-section-content-->
                </div><!--end .accordion-section-->
                <div class="accordion-section">
                    <a class="accordion-section-title" href="#accordion-4">Weet wat je eet</a>

                    <div id="accordion-4" class="accordion-section-content">
                        <p><i>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent nulla mi, rutrum ut feugiat at, vestibulum ut neque? Cras tincidunt enim vel aliquet facilisis. Duis congue ullamcorper vehicula. Proin nunc lacus, semper sit amet elit sit amet, aliquet pulvinar erat. Nunc pretium quis sapien eu rhoncus. Suspendisse ornare gravida mi, et placerat tellus tempor vitae.</i></p>
                    </div><!--end .accordion-section-content-->
                </div><!--end .accordion-section-->
                <div class="accordion-section">
                    <a class="accordion-section-title" href="#accordion-5">Ik heb geen idee</a>

                    <div id="accordion-5" class="accordion-section-content">
                        <p><i>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent nulla mi, rutrum ut feugiat at, vestibulum ut neque? Cras tincidunt enim vel aliquet facilisis. Duis congue ullamcorper vehicula. Proin nunc lacus, semper sit amet elit sit amet, aliquet pulvinar erat. Nunc pretium quis sapien eu rhoncus. Suspendisse ornare gravida mi, et placerat tellus tempor vitae.</i></p>
                    </div><!--end .accordion-section-content-->
                </div><!--end .accordion-section-->
            </div><!--end .accordion-->
        </div>
    </div>
    <?php include "../libs/footer.php"; ?>

</div>

</body>
</html>