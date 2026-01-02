@extends('layouts.app')

@section('title', 'Algemene Voorwaarden - BCN Sports')
@section('meta_description', 'Lees de algemene voorwaarden van BCN Sports. Hier vindt u alle informatie over onze diensten, abonnementen, annuleringsbeleid en meer.')

@section('content')
    <!-- Hero Section -->
    <section class="bg-secondary py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                Algemene <span class="text-primary">Voorwaarden</span>
            </h1>
            <p class="text-gray-300">Laatst bijgewerkt: {{ date('d-m-Y') }}</p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="prose prose-lg max-w-none">

                <div class="bg-light rounded-xl p-6 mb-8">
                    <p class="text-gray-600 m-0">
                        Deze algemene voorwaarden zijn van toepassing op alle diensten en producten van BCN Sports.
                        Door gebruik te maken van onze diensten gaat u akkoord met deze voorwaarden.
                    </p>
                </div>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">Artikel 1 - Definities</h2>
                <p class="text-gray-600 mb-4">In deze voorwaarden wordt verstaan onder:</p>
                <ul class="list-disc pl-6 text-gray-600 space-y-2 mb-6">
                    <li><strong>BCN Sports:</strong> de aanbieder van outdoor bootcamp trainingen, gevestigd te Almere.</li>
                    <li><strong>Deelnemer:</strong> de natuurlijke persoon die deelneemt aan de activiteiten van BCN Sports.</li>
                    <li><strong>Abonnement:</strong> een overeenkomst waarbij de deelnemer voor een bepaalde periode toegang heeft tot trainingen.</li>
                    <li><strong>Training:</strong> een geplande outdoor bootcamp sessie onder begeleiding van een trainer.</li>
                    <li><strong>Rittenkaart:</strong> een vooraf betaalde kaart die recht geeft op een bepaald aantal trainingen.</li>
                </ul>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">Artikel 2 - Toepasselijkheid</h2>
                <p class="text-gray-600 mb-6">
                    Deze algemene voorwaarden zijn van toepassing op alle aanbiedingen, offertes, overeenkomsten en
                    diensten van BCN Sports. Afwijkingen van deze voorwaarden zijn slechts geldig indien deze
                    uitdrukkelijk schriftelijk zijn overeengekomen.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">Artikel 3 - Abonnementen en Prijzen</h2>
                <h3 class="text-xl font-semibold text-secondary mt-6 mb-3">3.1 Beschikbare abonnementen</h3>
                <div class="bg-light rounded-xl p-6 mb-4">
                    <ul class="text-gray-600 space-y-2 m-0">
                        <li><strong>Solo Bootcamp Pass:</strong> €39,95 per maand - onbeperkt toegang tot alle trainingen voor 1 persoon</li>
                        <li><strong>Family Package:</strong> €59,95 per maand - onbeperkt toegang voor maximaal 4 personen</li>
                        <li><strong>10-Rittenkaart:</strong> €99,00 - 10 trainingen, 6 maanden geldig</li>
                        <li><strong>Losse les:</strong> €12,50 per training</li>
                    </ul>
                </div>

                <h3 class="text-xl font-semibold text-secondary mt-6 mb-3">3.2 Prijswijzigingen</h3>
                <p class="text-gray-600 mb-6">
                    BCN Sports behoudt zich het recht voor om prijzen aan te passen. Prijswijzigingen worden minimaal
                    1 maand van tevoren aangekondigd. Bestaande abonnementen behouden de oude prijs tot het einde van
                    de lopende abonnementsperiode.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">Artikel 4 - Betaling</h2>
                <p class="text-gray-600 mb-4">
                    4.1 Betaling van maandelijkse abonnementen geschiedt vooraf, voor aanvang van de abonnementsperiode.
                </p>
                <p class="text-gray-600 mb-4">
                    4.2 Rittenkaarten en losse lessen dienen vooraf te worden betaald.
                </p>
                <p class="text-gray-600 mb-6">
                    4.3 Bij niet-tijdige betaling kan BCN Sports de deelnemer de toegang tot trainingen ontzeggen
                    tot de betaling is voldaan.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">Artikel 5 - Opzegging en Annulering</h2>
                <h3 class="text-xl font-semibold text-secondary mt-6 mb-3">5.1 Opzegging abonnement</h3>
                <p class="text-gray-600 mb-4">
                    Abonnementen kunnen worden opgezegd met inachtneming van een opzegtermijn van 1 maand.
                    Opzegging dient schriftelijk of per e-mail te geschieden. Het abonnement eindigt dan per
                    de eerste van de volgende maand na afloop van de opzegtermijn.
                </p>

                <h3 class="text-xl font-semibold text-secondary mt-6 mb-3">5.2 Annulering van trainingen</h3>
                <p class="text-gray-600 mb-4">
                    Deelnemers dienen zich minimaal 12 uur voor aanvang van een training af te melden.
                    Bij te late afmelding of geen verschijnen wordt de training in mindering gebracht op
                    de rittenkaart of geldt deze als gemiste training.
                </p>

                <h3 class="text-xl font-semibold text-secondary mt-6 mb-3">5.3 Annulering door BCN Sports</h3>
                <p class="text-gray-600 mb-6">
                    BCN Sports behoudt zich het recht voor trainingen te annuleren bij extreme weersomstandigheden
                    of onvoorziene omstandigheden. Deelnemers worden hiervan zo spoedig mogelijk op de hoogte gesteld.
                    Geannuleerde trainingen worden niet in mindering gebracht op rittenkaarten.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">Artikel 6 - Pauzeren van Abonnement</h2>
                <p class="text-gray-600 mb-6">
                    In geval van langdurige ziekte, blessure of vakantie kan het abonnement tijdelijk worden
                    gepauzeerd. Dit dient vooraf schriftelijk te worden aangevraagd. BCN Sports beoordeelt elk
                    verzoek individueel. Pauzeren is mogelijk voor minimaal 2 weken en maximaal 2 maanden per jaar.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">Artikel 7 - Gedragsregels</h2>
                <p class="text-gray-600 mb-4">De deelnemer verplicht zich tot het volgende:</p>
                <ul class="list-disc pl-6 text-gray-600 space-y-2 mb-6">
                    <li>Respectvol omgaan met trainers, medeparticipanten en materialen</li>
                    <li>Tijdig aanwezig zijn bij de training (minimaal 5 minuten voor aanvang)</li>
                    <li>Geschikte sportkleding en schoeisel dragen</li>
                    <li>Eventuele fysieke beperkingen of gezondheidsklachten melden aan de trainer</li>
                    <li>Aanwijzingen van de trainer opvolgen</li>
                    <li>Geen drugs of alcohol gebruiken voor of tijdens de training</li>
                </ul>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">Artikel 8 - Aansprakelijkheid</h2>
                <p class="text-gray-600 mb-4">
                    8.1 Deelname aan trainingen geschiedt geheel op eigen risico van de deelnemer.
                </p>
                <p class="text-gray-600 mb-4">
                    8.2 BCN Sports is niet aansprakelijk voor enig letsel of schade, van welke aard ook, die de
                    deelnemer mocht ondervinden als gevolg van deelname aan activiteiten van BCN Sports, tenzij
                    er sprake is van opzet of grove schuld aan de zijde van BCN Sports.
                </p>
                <p class="text-gray-600 mb-4">
                    8.3 BCN Sports is niet aansprakelijk voor diefstal, verduistering of verlies van eigendommen
                    van de deelnemer.
                </p>
                <p class="text-gray-600 mb-6">
                    8.4 De deelnemer dient zelf verzekerd te zijn tegen ongevallen en wettelijke aansprakelijkheid.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">Artikel 9 - Gezondheid</h2>
                <p class="text-gray-600 mb-4">
                    9.1 De deelnemer verklaart in goede gezondheid te verkeren en fysiek in staat te zijn aan
                    de trainingen deel te nemen.
                </p>
                <p class="text-gray-600 mb-6">
                    9.2 Bij twijfel over de eigen gezondheid dient de deelnemer eerst een arts te raadplegen
                    voordat hij/zij deelneemt aan trainingen. BCN Sports behoudt zich het recht voor een
                    gezondheidsverklaring te verlangen.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">Artikel 10 - Geldigheid Rittenkaart</h2>
                <p class="text-gray-600 mb-6">
                    De 10-rittenkaart is 6 maanden geldig vanaf aankoopdatum. Na deze periode vervallen niet
                    gebruikte ritten zonder recht op restitutie. De rittenkaart is persoonlijk en niet overdraagbaar.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">Artikel 11 - Family Package</h2>
                <p class="text-gray-600 mb-4">
                    11.1 Het Family Package is bedoeld voor leden van hetzelfde huishouden of aangewezen personen
                    (maximaal 4 personen).
                </p>
                <p class="text-gray-600 mb-6">
                    11.2 De namen van de personen die gebruik maken van het Family Package dienen vooraf te worden
                    doorgegeven aan BCN Sports. Wijzigingen dienen schriftelijk te worden gemeld.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">Artikel 12 - Beeldmateriaal</h2>
                <p class="text-gray-600 mb-6">
                    BCN Sports mag foto's en video's maken tijdens trainingen voor promotiedoeleinden.
                    Door deelname aan de training stemt de deelnemer in met het gebruik van dit beeldmateriaal.
                    Indien de deelnemer bezwaar heeft, dient dit vooraf schriftelijk te worden gemeld.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">Artikel 13 - Klachten</h2>
                <p class="text-gray-600 mb-6">
                    Klachten over de dienstverlening van BCN Sports dienen binnen 14 dagen na het ontstaan
                    schriftelijk te worden ingediend via e-mail. BCN Sports zal binnen 4 weken inhoudelijk
                    op de klacht reageren.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">Artikel 14 - Wijziging Voorwaarden</h2>
                <p class="text-gray-600 mb-6">
                    BCN Sports behoudt zich het recht voor deze algemene voorwaarden te wijzigen. Wijzigingen
                    worden minimaal 1 maand van tevoren aangekondigd. Bij substantiele wijzigingen heeft de
                    deelnemer het recht het abonnement te beeindigen.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">Artikel 15 - Toepasselijk Recht</h2>
                <p class="text-gray-600 mb-6">
                    Op deze voorwaarden en alle overeenkomsten tussen BCN Sports en de deelnemer is Nederlands
                    recht van toepassing. Geschillen worden voorgelegd aan de bevoegde rechter te Almere.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">Artikel 16 - Contact</h2>
                <p class="text-gray-600 mb-4">
                    Voor vragen over deze algemene voorwaarden kunt u contact met ons opnemen:
                </p>
                <div class="bg-light rounded-xl p-6">
                    <p class="text-gray-600 m-0">
                        <strong class="text-secondary">BCN Sports</strong><br>
                        Almere, Nederland<br>
                        E-mail: <a href="mailto:info@bcnsports.nl" class="text-primary hover:text-primary-dark">info@bcnsports.nl</a>
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-light">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-2xl font-bold text-secondary mb-4">Heeft u vragen?</h2>
            <p class="text-gray-600 mb-6">
                Neem gerust contact met ons op als u vragen heeft over onze algemene voorwaarden.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="inline-block bg-primary hover:bg-primary-dark text-white px-8 py-4 rounded-full font-bold transition">
                    Neem Contact Op
                </a>
                <a href="{{ route('prijzen') }}" class="inline-block bg-secondary hover:bg-secondary-light text-white px-8 py-4 rounded-full font-bold transition">
                    Bekijk Prijzen
                </a>
            </div>
        </div>
    </section>
@endsection
