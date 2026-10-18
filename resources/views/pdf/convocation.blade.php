<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Convocation Officielle - Forum Ben M'sik</title>
    <style>
        @page {
            margin: 0cm;
        }

        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #111827;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
        }

        /* Bande de couleur en haut de page */
        .top-stripe {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 8px;
            background-color: #3881b6;
            border-bottom: 3px solid #f7941d;
        }

        .page {
            padding: 38px 42px 0 42px;
        }

        /* ---------- LOGOS ---------- */
        .logos {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 22px;
        }

        .logos td {
            vertical-align: middle;
            padding: 0;
        }

        .logo-left {
            width: 50%;
        }

        .logo-right {
            width: 50%;
            text-align: right;
        }

        .logo-pill {
            display: inline-block;
            background-color: #3881b6;
            border-radius: 8px;
            padding: 7px 12px;
        }

        .logo-pill img {
            height: 38px;
            display: block;
        }

        .logo-inst img {
            height: 50px;
        }

        /* ---------- HERO ---------- */
        .hero {
            background-color: #3881b6;
            border-bottom: 5px solid #f7941d;
            border-radius: 8px;
            padding: 24px 28px;
            margin-bottom: 26px;
        }

        .hero-table {
            width: 100%;
            border-collapse: collapse;
        }

        .hero-table td {
            vertical-align: middle;
            padding: 0;
        }

        .hero-tag {
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #fde3bf;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .hero h1 {
            margin: 0;
            color: #ffffff;
            font-size: 28px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .hero p {
            margin: 6px 0 0 0;
            color: #e6f0f8;
            font-size: 13px;
        }

        .ref-cell {
            width: 150px;
            text-align: right;
        }

        .ref-badge {
            display: inline-block;
            background-color: #ffffff;
            color: #1e293b;
            padding: 9px 14px;
            border-radius: 6px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        /* ---------- MESSAGE ---------- */
        .greeting {
            font-size: 14px;
            line-height: 1.7;
            color: #374151;
            margin-bottom: 22px;
        }

        .greeting strong {
            color: #1e293b;
        }

        /* ---------- SECTION TITLES ---------- */
        .section-title {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1.8px;
            font-weight: 700;
            color: #3881b6;
            margin: 0 0 10px 0;
        }

        /* ---------- INFOS ---------- */
        .info-card {
            background-color: #f6f9fc;
            border: 1px solid #e1e9f1;
            border-left: 5px solid #f7941d;
            border-radius: 6px;
            padding: 12px 20px;
            margin-bottom: 24px;
        }

        .table-info {
            width: 100%;
            border-collapse: collapse;
        }

        .table-info td {
            padding: 10px 0;
            border-bottom: 1px solid #e1e9f1;
            font-size: 13px;
        }

        .table-info tr:last-child td {
            border-bottom: none;
        }

        .table-info td.label {
            width: 36%;
            font-weight: 600;
            color: #64748b;
        }

        .table-info td.value {
            color: #111827;
            font-weight: 600;
        }

        /* ---------- QR ---------- */
        .qr-card {
            border: 2px solid #e1e9f1;
            border-radius: 8px;
            padding: 20px 24px;
            margin-bottom: 24px;
        }

        .qr-table {
            width: 100%;
            border-collapse: collapse;
        }

        .qr-table td {
            vertical-align: middle;
            padding: 0;
        }

        .qr-text h3 {
            margin: 0 0 8px 0;
            font-size: 16px;
            color: #1e293b;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .qr-text p {
            margin: 0;
            font-size: 12px;
            line-height: 1.6;
            color: #64748b;
        }

        .qr-cell {
            width: 170px;
            text-align: right;
        }

        .qr-code-box {
            display: inline-block;
            background-color: #ffffff;
            padding: 8px;
            border: 3px solid #3881b6;
            border-radius: 8px;
        }

        .qr-code-box img {
            display: block;
        }

        /* ---------- ETAPES ---------- */
        .steps {
            width: 100%;
            border-collapse: separate;
            border-spacing: 8px 0;
            margin-left: -8px;
        }

        .steps td {
            width: 33%;
            background-color: #f6f9fc;
            border-radius: 6px;
            padding: 12px 14px;
            vertical-align: top;
            font-size: 11px;
            color: #475569;
            line-height: 1.5;
        }

        .step-num {
            display: inline-block;
            width: 20px;
            height: 20px;
            line-height: 20px;
            text-align: center;
            background-color: #f7941d;
            color: #ffffff;
            border-radius: 10px;
            font-size: 11px;
            font-weight: 700;
            margin-bottom: 6px;
        }

        /* ---------- FOOTER ---------- */
        .footer {
            position: absolute;
            bottom: 26px;
            left: 42px;
            right: 42px;
            text-align: center;
            font-size: 10px;
            color: #94a3b8;
            border-top: 1px solid #e1e9f1;
            padding-top: 12px;
            line-height: 1.6;
        }

        .footer .doc {
            text-transform: uppercase;
            letter-spacing: 0.8px;
            font-weight: 600;
            color: #64748b;
        }

        .footer .copyright {
            font-size: 9px;
            margin-top: 3px;
        }
    </style>
</head>

<body>

    @php
        $logoAjmove = base64_encode(file_get_contents(public_path('images/logo-ajmove.png')));
        $logoInst   = base64_encode(file_get_contents(public_path('images/logo-institutions.png')));
    @endphp

    <div class="top-stripe"></div>

    <div class="page">

        <!-- LOGOS -->
        <table class="logos">
            <tr>
                <td class="logo-left">
                    <div class="logo-pill">
                        <img src="data:image/png;base64,{{ $logoAjmove }}" alt="AJMOVE">
                    </div>
                </td>
                <td class="logo-right logo-inst">
                    <img src="data:image/png;base64,{{ $logoInst }}" alt="Ministère / AREF / Direction provinciale Ben M'sik">
                </td>
            </tr>
        </table>

        <!-- HERO -->
        <div class="hero">
            <table class="hero-table">
                <tr>
                    <td>
                        <div class="hero-tag">AJMOVE — Pôle Digitalisation</div>
                        <h1>Convocation Officielle</h1>
                        <p>Forum d'Orientation Ben M'sik — 3ème Édition</p>
                    </td>
                    <td class="ref-cell">
                        <div class="ref-badge">RÉF : #CONV-{{ str_pad($registration->id, 5, '0', STR_PAD_LEFT) }}</div>
                    </td>
                </tr>
            </table>
        </div>

        <!-- MESSAGE -->
        <div class="greeting">
            Bonjour <strong>{{ ucfirst($registration->prenom) }} {{ strtoupper($registration->nom) }}</strong>,<br>
            Nous avons le plaisir de vous confirmer votre accréditation officielle pour représenter votre établissement lors de notre événement.
        </div>

        <!-- INFOS -->
        <div class="section-title">Informations de l'accréditation</div>
        <div class="info-card">
            <table class="table-info">
                <tr>
                    <td class="label">Établissement</td>
                    <td class="value">{{ $registration->ecole }}</td>
                </tr>
                <tr>
                    <td class="label">Filière / Spécialité</td>
                    <td class="value">{{ $registration->filiere ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <td class="label">Représentant(e)</td>
                    <td class="value">{{ strtoupper($registration->nom) }} {{ ucfirst($registration->prenom) }}</td>
                </tr>
                <tr>
                    <td class="label">Adresse e-mail</td>
                    <td class="value">{{ $registration->email }}</td>
                </tr>
            </table>
        </div>

        <!-- QR CODE -->
        <div class="qr-card">
            <table class="qr-table">
                <tr>
                    <td class="qr-text">
                        <h3>Pass d'Accès Sécurisé</h3>
                        <p>Présentez ce QR Code, sur votre smartphone ou imprimé, à l'accueil le jour du forum pour valider votre entrée.</p>
                    </td>
                    <td class="qr-cell">
                        <div class="qr-code-box">
                            @php
                                $renderer = new \BaconQrCode\Renderer\ImageRenderer(
                                    new \BaconQrCode\Renderer\RendererStyle\RendererStyle(130, 1),
                                    new \BaconQrCode\Renderer\Image\SvgImageBackEnd()
                                );
                                $writer = new \BaconQrCode\Writer($renderer);
                                $qrImage = base64_encode($writer->writeString(route('admin.checkin.scan', ['id' => $registration->id])));
                            @endphp
                            <img src="data:image/svg+xml;base64,{{ $qrImage }}" width="130" height="130" alt="QR Code Check-in">
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <!-- ETAPES -->
        <div class="section-title">Le jour du forum</div>
        <table class="steps">
            <tr>
                <td>
                    <div class="step-num">1</div><br>
                    Présentez-vous à l'accueil avec votre convocation.
                </td>
                <td>
                    <div class="step-num">2</div><br>
                    Faites scanner votre QR Code par l'équipe d'organisation.
                </td>
                <td>
                    <div class="step-num">3</div><br>
                    Votre entrée est validée, bon forum !
                </td>
            </tr>
        </table>

    </div>

    <!-- FOOTER -->
    <div class="footer">
        <div class="doc">Document officiel généré par le système</div>
        <div class="copyright">
            © {{ date('Y') }} AJMOVE — Association des Jeunes Marocains d'Orientation et de la Vie Étudiante. Tous droits réservés.
        </div>
    </div>

</body>

</html>