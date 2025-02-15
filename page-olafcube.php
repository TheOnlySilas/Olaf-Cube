´´´php
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
            <a href="https://www.be.linksjugend-solid.de" target="_blank">
                <svg class="svg-icon" width="100%" height="100%" viewBox="0 0 681 567" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
                    xmlns:serif="http://www.serif.com/"
                    style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                    <g>
                        <path
                            d="M476.22,242.15L476.22,241.016C475.937,235.63 472.819,231.945 466.866,232.795C460.913,233.929 457.512,238.748 457.512,244.701C457.512,250.37 460.913,254.339 466.866,253.205C472.535,252.071 475.937,247.819 476.22,242.15ZM557.575,275.032L537.449,276.166L540,223.441L495.496,220.606L495.496,265.11L476.22,268.512L476.22,263.693C473.102,268.228 468.567,271.347 462.614,272.48C448.157,275.032 438.803,263.126 438.236,248.103C437.669,233.362 445.323,218.622 460.63,215.788C467.433,214.654 472.535,216.354 476.22,220.606L476.22,192.827L495.496,189.425L495.496,220.039L512.787,218.906L507.402,124.795L207.78,143.221L211.181,203.032L140.599,198.78L135.78,292.606L159.874,294.024L159.874,269.929L179.15,266.528L179.15,320.669C179.433,338.811 170.929,346.465 153.071,348.732L153.071,330.874C157.606,330.591 159.874,328.606 159.874,324.354L159.874,295.724L107.717,298.559L111.685,392.386L153.071,390.402L150.803,423.284L414.142,437.457L418.11,376.795L561.26,369.142L557.575,275.032ZM411.591,250.37C411.591,245.551 409.039,243.567 405.071,244.134C400.535,244.985 398.268,248.386 397.984,253.205L397.984,281.835L378.709,285.236L378.709,231.095L397.984,227.693L397.701,233.362C400.819,228.543 405.638,225.142 411.591,224.008C422.362,222.024 430.866,228.827 430.866,244.985L430.866,276.166L411.591,279.567L411.591,250.37ZM389.48,321.236L408.756,317.835L408.756,371.977L389.48,375.378L389.48,321.236ZM399.118,293.173C405.071,292.039 409.89,296.291 409.89,302.244C409.89,308.197 405.354,314.15 399.401,315.284C393.449,316.417 388.346,312.165 388.63,306.213C388.346,300.827 392.598,294.307 399.118,293.173ZM359.716,301.394L378.992,297.992L378.992,377.079L359.716,380.48L359.716,301.394ZM335.622,273.047C337.606,277.016 341.858,277.299 345.827,276.732C349.795,276.166 352.63,274.465 354.898,271.63L368.22,280.985C363.118,287.221 356.315,291.189 346.96,292.89C327.118,296.291 316.063,284.669 316.063,268.512C315.779,252.638 326.551,239.032 342.425,236.481C358.866,233.646 370.488,244.701 370.488,260.008C370.488,261.992 370.205,264.543 369.638,267.095L335.622,273.047ZM295.087,363.756C295.087,349.866 304.157,334.843 322.299,331.725C339.591,328.606 351.496,341.646 351.496,356.386C351.212,370.276 342.425,385.299 324.284,388.417C306.142,391.536 294.803,378.496 295.087,363.756ZM242.929,388.984L257.953,378.213C260.504,382.181 263.905,383.315 267.307,382.748C269.291,382.465 270.992,381.614 270.992,379.914C270.992,377.929 267.874,377.646 263.905,377.079C256.252,376.228 244.913,374.811 244.913,361.488C244.913,349.299 255.685,343.063 265.323,341.362C274.677,339.662 283.748,341.929 288.85,349.866L274.677,359.787C272.693,356.669 270.425,355.536 267.591,355.819C266.173,355.819 264.472,356.953 264.472,358.654C264.189,361.205 267.874,361.772 272.126,362.055C279.78,362.906 290.551,363.756 290.551,378.213C290.551,390.402 279.78,396.071 269.291,398.055C257.669,400.039 248.598,398.622 242.929,388.984ZM221.386,338.528L235.559,335.976L233.858,360.071L223.087,362.055L221.386,338.528ZM192.189,334.559L215.433,330.591L215.433,345.614L207.496,347.032L207.496,393.803L215.433,392.386L215.433,407.41L192.189,411.378L192.189,334.559ZM180.283,251.221C180.283,257.173 175.748,263.126 169.795,264.26C164.126,265.394 159.307,261.142 159.024,255.189C159.024,249.803 162.992,243.284 169.512,242.15C175.465,241.016 180.283,245.551 180.283,251.221ZM222.52,287.788L222.52,259.158L241.795,255.756L241.795,309.898L222.52,313.299L222.52,307.914C219.402,312.732 214.583,316.134 208.63,317.268C197.858,319.252 189.354,312.449 189.354,296.291L189.354,265.11L208.63,261.709L208.63,290.906C208.63,295.724 211.181,297.709 215.15,297.142C219.968,296.008 222.236,292.606 222.52,287.788ZM257.101,239.032L237.827,242.433L237.827,163.347L257.101,159.945L257.101,239.032ZM288,164.197C288,170.15 283.465,176.102 277.512,177.236C271.559,178.37 266.457,174.118 266.457,168.166C266.457,162.78 270.425,156.26 276.945,155.126C283.181,153.992 287.717,158.244 288,164.197ZM286.866,179.504L286.866,233.646L267.591,237.047L267.591,182.906L286.866,179.504ZM288.567,253.488L288.567,247.252L307.843,243.851L307.843,296.291C307.843,314.15 294.803,323.504 280.347,326.055C268.724,328.04 258.519,325.205 253.417,317.551L268.724,305.362C271.559,308.764 274.677,309.614 279.496,308.764C284.032,307.914 288.567,305.079 288.567,299.41L288.567,294.874C285.732,298.843 281.197,301.677 275.528,302.528C259.653,305.362 251.15,293.173 250.583,279.284C250.016,265.677 257.669,250.654 273.543,247.819C280.063,247.536 285.165,249.52 288.567,253.488ZM349.795,222.307L330.52,225.709L330.52,196.512C330.52,191.693 327.969,189.709 324,190.276C319.465,191.126 317.197,194.528 316.914,199.347L316.914,227.977L297.638,231.378L297.638,177.236L316.914,173.835L316.63,179.504C319.748,174.685 324.567,171.284 330.52,170.15C341.291,168.166 349.795,174.969 349.795,191.126L349.795,222.307ZM411.874,157.394L396,187.441L413.008,211.252L392.315,214.937L378.992,194.811L378.992,217.205L359.716,220.606L359.716,144.921L378.992,141.52L378.992,182.906L389.764,161.362L411.874,157.394ZM413.008,199.347L428.031,188.575C430.583,192.544 433.984,193.677 437.386,193.111C439.37,192.827 441.071,191.977 441.071,190.276C441.071,188.292 437.953,188.008 433.984,187.441C426.331,186.591 414.992,185.173 414.992,171.851C414.992,159.945 425.764,153.425 435.402,151.725C445.039,150.024 453.827,152.292 458.929,160.229L444.756,170.15C442.772,166.748 440.504,165.898 437.669,166.181C435.968,166.465 434.551,167.599 434.268,169.016C434.268,171.567 437.669,171.851 441.921,172.417C449.858,172.984 460.63,174.118 460.63,188.292C460.63,200.481 449.858,206.15 439.37,208.134C427.748,210.118 418.961,208.701 413.008,199.347ZM473.953,360.354L454.677,363.756L454.677,358.937C451.559,363.473 447.024,366.591 441.071,367.725C426.614,370.276 417.26,358.37 416.693,343.347C416.126,328.606 423.779,313.866 439.087,311.032C445.89,309.898 450.992,311.599 454.677,315.85L454.677,288.071L473.953,284.669L473.953,360.354ZM513.354,354.685L490.11,358.654L490.11,343.63L498.047,342.213L498.047,295.441L490.11,296.858L490.11,281.835L513.354,277.866L513.354,354.685ZM454.677,337.394L454.677,336.26C454.394,330.591 451.276,326.906 445.323,328.04C439.37,329.173 435.968,333.992 435.968,339.945C435.968,345.614 439.37,349.583 445.323,348.449C450.992,347.599 454.394,343.063 454.677,337.394ZM288.567,273.331C288.284,267.662 284.882,264.544 279.213,265.677C273.543,266.244 269.858,271.063 269.858,276.732C269.858,282.402 273.543,285.803 279.213,284.953C284.599,284.102 288.284,279.567 288.567,274.181L288.567,273.331ZM314.079,361.488C314.079,367.158 317.764,370.276 322.866,369.425C327.969,368.575 331.37,364.04 331.654,358.37C331.654,352.701 327.969,349.583 322.866,350.433C317.764,351.284 314.079,355.819 314.079,361.488ZM335.339,260.291L352.63,257.173C351.212,252.355 348.094,251.504 344.409,252.071C340.157,252.922 336.756,255.473 335.339,260.291Z" />
                        <g transform="matrix(1.11579,0,0,1.11579,-1184.26,-1420.07)">
                            <g transform="matrix(46.6178,0,0,46.6178,1565.43,1652.96)">
                            </g>
                            <text x="1441.24px" y="1652.96px"
                                style="font-family:'Gilroy-HeavyItalic', 'Gilroy';font-weight:900;font-size:46.618px;">B
                                <tspan x="1469.91px " y="1652.96px ">e</tspan>rlin
                            </text>
                        </g>
                    </g>
                </svg>
            </a>
            <a href="https://www.instagram.com/solidberlin" target="_blank">
                <svg class="svg-icon-2" width="100%" height="100%" viewBox="0 0 1080 1080" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
                    xmlns:serif="http://www.serif.com/"
                    style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                    <path
                        d="M1017.96,271.227L1017.96,808.773C1017.96,924.224 924.224,1017.96 808.773,1017.96L271.227,1017.96C155.776,1017.96 62.045,924.224 62.045,808.773L62.045,271.227C62.045,155.776 155.776,62.045 271.227,62.045L808.773,62.045C924.224,62.045 1017.96,155.776 1017.96,271.227ZM957.955,271.227C957.955,188.891 891.109,122.045 808.773,122.045L271.227,122.045C188.891,122.045 122.045,188.891 122.045,271.227L122.045,808.773C122.045,891.109 188.891,957.955 271.227,957.955L808.773,957.955C891.109,957.955 957.955,891.109 957.955,808.773L957.955,271.227Z" />
                    <g transform="matrix(1.07114,0,0,1.07114,-38.4167,-38.4167)">
                        <path
                            d="M540,260.469C694.277,260.469 819.531,385.723 819.531,540C819.531,694.277 694.277,819.531 540,819.531C385.723,819.531 260.469,694.277 260.469,540C260.469,385.723 385.723,260.469 540,260.469ZM540,316.484C416.638,316.484 316.484,416.638 316.484,540C316.484,663.362 416.638,763.516 540,763.516C663.362,763.516 763.516,663.362 763.516,540C763.516,416.638 663.362,316.484 540,316.484Z" />
                    </g>
                    <g transform="matrix(0.962727,0,0,0.962727,44.5168,2.25393)">
                        <circle cx="820.819" cy="251.505" r="66.485" />
                    </g>
                </svg>

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
```