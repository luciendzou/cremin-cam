@if ($mode !== 'governance')
    <section class="compliance-section">
        <div class="compliance-inner">
            <div class="rv" style="text-align:center">
                <div class="stag">Conformité &amp; Réglementation</div>
                <h2 class="stitle" style="text-align:center">Une institution <span class="bl">agréée et contrôlée</span></h2>
                <p class="compliance-intro">CREMIN-CAM opère dans un cadre réglementaire strict, sous la supervision des autorités compétentes du Cameroun et de la zone CEMAC.</p>
            </div>
            <div class="compliance-grid">
                <div class="comp-card rv d1"><div class="comp-icon"><svg viewBox="0 0 24 24"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg></div><div class="comp-title">Agrément MINFI</div><p class="comp-val">N° <strong>00000074/MINFI</strong> délivré le 08 janvier 2009 par le Ministère des Finances du Cameroun.</p></div>
                <div class="comp-card rv d2"><div class="comp-icon"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div class="comp-title">Supervision COBAC</div><p class="comp-val">CREMIN-CAM est soumis au contrôle permanent de la <strong>COBAC</strong>, l'autorité de supervision bancaire et microfinancière de la zone CEMAC.</p></div>
                <div class="comp-card rv d3"><div class="comp-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10A15.3 15.3 0 0112 2z"/></svg></div><div class="comp-title">Réseau RECCU-CAM</div><p class="comp-val">Membre du réseau <strong>RECCU-CAM LTD</strong>, fédération coopérative qui mutualise les ressources et protège les dépôts des membres.</p></div>
            </div>
        </div>
    </section>
@endif

<section class="partners-section">
    <div class="rv">
        <div class="stag">Nos partenaires</div>
        <h2 class="stitle" style="text-align:center">Plus de <span class="bl">10 partenaires</span> de confiance</h2>
        <p class="ssub" style="margin:12px auto 0;text-align:center">Banques, assureurs, opérateurs de transfert et institutions publiques, un écosystème solide au service de nos membres.</p>
    </div>
    <div class="partners-scroll">
        <div class="partners-track">
            @foreach ([
                ['https://www.cremin-cam.org/images/partner/ecobank.png', 'Ecobank'],
                ['https://www.cremin-cam.org/images/partner/bicec.png', 'BICEC'],
                ['https://www.cremin-cam.org/images/partner/UBA-logo-2.png', 'UBA'],
                ['https://www.cremin-cam.org/images/partner/Orange-Money.jpg', 'Orange Money'],
                ['https://www.cremin-cam.org/images/partner/mobile-money.jpg', 'MTN MoMo'],
                ['https://www.cremin-cam.org/images/partner/nfc.jpg', 'NFC Bank'],
                ['https://www.cremin-cam.org/images/partner/bf_life_insurance.png', 'BF Life'],
                ['https://www.cremin-cam.org/images/partner/wafacash.png', 'Wafacash'],
                ['https://www.cremin-cam.org/images/partner/Ria.png', 'Ria'],
                ['https://www.cremin-cam.org/images/partner/fodecc.jpg', 'FODECC'],
                ['https://www.cremin-cam.org/images/partner/Campost_logo.png', 'Campost'],
                ['https://www.cremin-cam.org/images/partner/minfi.png', 'MINFI'],
                ['https://www.cremin-cam.org/images/partner/ecobank.png', 'Ecobank'],
                ['https://www.cremin-cam.org/images/partner/bicec.png', 'BICEC'],
                ['https://www.cremin-cam.org/images/partner/UBA-logo-2.png', 'UBA'],
                ['https://www.cremin-cam.org/images/partner/Orange-Money.jpg', 'Orange Money'],
            ] as [$src, $alt])
                <img src="{{ $src }}" class="plogo" alt="{{ $alt }}">
            @endforeach
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="cta-in">
        <div class="rv">
            <h2>Rejoignez une institution<br>qui <span>vous ressemble</span></h2>
            <p>Plus de 5 000 membres nous font confiance. Rejoignez la communauté CREMIN-CAM et accédez à des services financiers de qualité, proches de vous.</p>
        </div>
        <div class="cta-btns rv d1">
            <a href="#footer-contact" class="bo">Ouvrir mon compte</a>
            <a href="{{ route('branches') }}" class="bw">Nos agences</a>
        </div>
    </div>
</section>
