<?php
get_header();

if (have_posts()):
    while (have_posts()):
        the_post();
        the_content();

    endwhile;
endif;
?>

<div class="titelbild">
    <div class="presenter">
        <img class="logo-presenter" src="<?php echo get_template_directory_uri() ?>/assets/Logo CD schwarz_1.svg">
    </div>
    <div class="container">

        <h1 class="olaf-cube-text">OLAF CUBE</h1>
        <div class="cube" id="cube">
            <div class="front"></div>
            <div class="back"></div>
            <div class="right"></div>
            <div class="left"></div>
            <div class="top"></div>
            <div class="bottom"></div>
        </div>

        <div class="ueberleitung-container">
            <p class="ueberleitung-text">Aber mal im Ernst...</p>
            <div class="scroll-indicator">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <polyline points="19 12 12 19 5 12"></polyline>
                </svg>
            </div>
        </div>
    </div>
</div>
<div class="text-container">
    <div class="info-container">
        <h2>Olaf Scholz macht den Reichen die Taschen voll!</h2>
        <p class="info-text">Als Bürgermeister hat Scholz verhindert, dass das Hamburger Finanzamt gestohlenes Steuergeld von der Warbung-Bank zurückverlangt. Nach einem kleinen Plausch hat er Bankchef Olearius direkt an seinen Finanzsenator verwiesen.</p>
    </div>
    <div class="info-container">
        <h2>Olaf Scholz reißt den Sozialstaat ab!</h2>
        <p class="info-text">Reiche dürfen mit Verbrechen wegkommen aber den Armen kürzt er das Brot vom Tisch! Das Bürgergeld ist nichts als Hartz IV unter einem anderen Namen und es bleibt so unsozial wie sein „Vorgänger“. </p>
    </div>
    <div class="info-container">
        <h2>Olaf Scholz macht beim Rechtsruck mit!</h2>
        <p class="info-text">Friedrich Merz geht nur den letzten Schritt aber Olaf Scholz ist auch schon weit auf dem Weg zu AfD und rechtem Terror. Seine Ampelregierung hat die menschenverachtende GEAS-Reform durchgesetzt und er selbst will "in großem Stile" abschieben, auch nach Syrien oder Afghanistan.</p>
    </div>
</div>
<div class="footer">
    <div class="aufruf">
        <h2>und was bleibt dann noch &uuml;brig?</h2>
        <p class="info-text">Wir haben da eine Alternative zum Scholz-Cube:</p>
        <a href="https://www.die-linke.de/bundestagswahl-2025/wahlprogramm/"><img id="pyramiden"
                src="<?php echo get_template_directory_uri() ?>/assets/Pyramiden von gysi.png"></a>
        <h2>DIE PYRAMIDEN VON GYSI</h2>
        <p class="info-text" style="background-color: transparent;">Sorry, den Witz konnten wir nicht lassen. Doch eins ist klar: Nur die Linke kämpft gegen Oligarchie, Sozialabbau und Rechtsruck! Wie sie es schon gemacht hat, als die Rot-Grüne Koalition ihre Anti-Arbeiter Agenda 2010 eingeführt hat. Aber nur wählen reicht nicht! Um von dem Ort, an den uns Stillstand unter Union und Ampel gebracht haben, wegzukommen und den Rechtsruck zu bekämpfen: </p>
        <h2>Organisier dich!</h2>
    </div>
    <div class="socials">
        <p>Zum Beispiel bei uns:</p>
        <div class="social-icons">
            <a class="fill-green" href="https://www.be.linksjugend-solid.de/basisgruppen_/" target="_blank">
                <i class="fa-solid fa-angles-right"></i>
            </a>
            <a href="https://www.instagram.com/solidberlin" target="_blank">
            <i class="fa-brands fa-instagram"></i>

            </a>
        </div>
    </div>
</div>
<?php get_footer(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/olafcube.css" />
<script>
    let cube = document.getElementById('cube');
    let startX, startY, startRotateX = 0, startRotateY = 0;

    function rotateCube(event) {
        let deltaX = event.clientX - startX;
        let deltaY = event.clientY - startY;
        cube.style.transform = `rotateX(${startRotateX - deltaY}deg) rotateY(${startRotateY + deltaX}deg)`;
    }

    cube.addEventListener('mousedown', function (event) {
        startX = event.clientX;
        startY = event.clientY;
        document.addEventListener('mousemove', rotateCube);
    });

    document.addEventListener('mouseup', function () {
        document.removeEventListener('mousemove', rotateCube);
        let transform = cube.style.transform.match(/rotateX\(([-\d.]+)deg\) rotateY\(([-\d.]+)deg\)/);
        startRotateX = parseFloat(transform[1]);
        startRotateY = parseFloat(transform[2]);
    });

    // Touch events for mobile
    cube.addEventListener('touchstart', function (event) {
        startX = event.touches[0].clientX;
        startY = event.touches[0].clientY;
        document.addEventListener('touchmove', rotateCubeTouch);
    });

    document.addEventListener('touchend', function () {
        document.removeEventListener('touchmove', rotateCubeTouch);
        let transform = cube.style.transform.match(/rotateX\(([-\d.]+)deg\) rotateY\(([-\d.]+)deg\)/);
        startRotateX = parseFloat(transform[1]);
        startRotateY = parseFloat(transform[2]);
    });

    function rotateCubeTouch(event) {
        let deltaX = event.touches[0].clientX - startX;
        let deltaY = event.touches[0].clientY - startY;
        cube.style.transform = `rotateX(${startRotateX - deltaY}deg) rotateY(${startRotateY + deltaX}deg)`;
    }
</script>
