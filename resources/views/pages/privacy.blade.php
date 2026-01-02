@extends('layouts.app')

@section('title', 'Privacy Policy - BCN Sports')
@section('meta_description', 'Lees het privacybeleid van BCN Sports. Wij nemen de bescherming van uw persoonsgegevens serieus en voldoen aan de AVG/GDPR wetgeving.')

@section('content')
    <!-- Hero Section -->
    <section class="bg-secondary py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                Privacy <span class="text-primary">Policy</span>
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
                        BCN Sports respecteert de privacy van alle gebruikers van haar website en diensten.
                        Wij zorgen ervoor dat de persoonlijke informatie die u ons verschaft vertrouwelijk wordt behandeld.
                    </p>
                </div>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">1. Verantwoordelijke</h2>
                <p class="text-gray-600 mb-6">
                    BCN Sports, gevestigd te Almere, is verantwoordelijk voor de verwerking van persoonsgegevens
                    zoals weergegeven in deze privacyverklaring.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">2. Persoonsgegevens die wij verwerken</h2>
                <p class="text-gray-600 mb-4">
                    BCN Sports verwerkt uw persoonsgegevens doordat u gebruik maakt van onze diensten en/of
                    omdat u deze zelf aan ons verstrekt. Hieronder vindt u een overzicht van de persoonsgegevens die wij verwerken:
                </p>
                <ul class="list-disc pl-6 text-gray-600 space-y-2 mb-6">
                    <li>Voor- en achternaam</li>
                    <li>E-mailadres</li>
                    <li>Telefoonnummer</li>
                    <li>Adresgegevens (indien van toepassing)</li>
                    <li>Geboortedatum (indien van toepassing)</li>
                    <li>Betalingsgegevens (voor facturatie)</li>
                    <li>Gegevens over uw activiteiten op onze website</li>
                    <li>Internetbrowser en apparaat type</li>
                </ul>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">3. Doeleinden van gegevensverwerking</h2>
                <p class="text-gray-600 mb-4">BCN Sports verwerkt uw persoonsgegevens voor de volgende doelen:</p>
                <ul class="list-disc pl-6 text-gray-600 space-y-2 mb-6">
                    <li>Het afhandelen van uw inschrijving en betaling</li>
                    <li>U te kunnen bellen of e-mailen indien dit nodig is voor onze dienstverlening</li>
                    <li>U te informeren over wijzigingen in onze diensten en trainingen</li>
                    <li>Het verzenden van nieuwsbrieven (alleen met uw toestemming)</li>
                    <li>Om trainingsroosters en reserveringen te beheren</li>
                    <li>BCN Sports analyseert uw gedrag op de website om de website te verbeteren</li>
                </ul>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">4. Bewaartermijn</h2>
                <p class="text-gray-600 mb-6">
                    BCN Sports bewaart uw persoonsgegevens niet langer dan strikt nodig is om de doelen te realiseren
                    waarvoor uw gegevens worden verzameld. Wij hanteren de volgende bewaartermijnen:
                </p>
                <ul class="list-disc pl-6 text-gray-600 space-y-2 mb-6">
                    <li>Klantgegevens: tot 2 jaar na beeindiging van de overeenkomst</li>
                    <li>Financiele administratie: 7 jaar (wettelijke verplichting)</li>
                    <li>Nieuwsbriefvoorkeuren: tot intrekking van toestemming</li>
                </ul>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">5. Delen met derden</h2>
                <p class="text-gray-600 mb-4">
                    BCN Sports verkoopt uw gegevens niet aan derden en verstrekt deze uitsluitend indien dit nodig
                    is voor de uitvoering van onze overeenkomst met u of om te voldoen aan een wettelijke verplichting.
                    Met bedrijven die uw gegevens verwerken in onze opdracht, sluiten wij een verwerkersovereenkomst
                    om te zorgen voor eenzelfde niveau van beveiliging en vertrouwelijkheid van uw gegevens.
                </p>
                <p class="text-gray-600 mb-6">Wij werken samen met de volgende categorieën van dienstverleners:</p>
                <ul class="list-disc pl-6 text-gray-600 space-y-2 mb-6">
                    <li>Boekingssysteem voor trainingsreserveringen</li>
                    <li>Betalingsdienstverlener voor het verwerken van betalingen</li>
                    <li>E-mailprovider voor het verzenden van communicatie</li>
                    <li>Hostingprovider voor het hosten van onze website</li>
                </ul>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">6. Cookies</h2>
                <p class="text-gray-600 mb-4">
                    BCN Sports gebruikt functionele en analytische cookies. Een cookie is een klein tekstbestand
                    dat bij het eerste bezoek aan deze website wordt opgeslagen op uw computer, tablet of smartphone.
                </p>
                <p class="text-gray-600 mb-4">De cookies die wij gebruiken zijn noodzakelijk voor de technische werking
                    van de website en uw gebruiksgemak. Ze zorgen ervoor dat de website naar behoren werkt.
                    Ook kunnen wij hiermee onze website optimaliseren.</p>
                <p class="text-gray-600 mb-6">
                    U kunt zich afmelden voor cookies door uw internetbrowser zo in te stellen dat deze geen
                    cookies meer opslaat. Daarnaast kunt u ook alle informatie die eerder is opgeslagen via
                    de instellingen van uw browser verwijderen.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">7. Gegevens inzien, aanpassen of verwijderen</h2>
                <p class="text-gray-600 mb-4">U heeft het recht om uw persoonsgegevens in te zien, te corrigeren of te verwijderen.
                    Daarnaast heeft u het recht om uw eventuele toestemming voor de gegevensverwerking in te trekken
                    of bezwaar te maken tegen de verwerking van uw persoonsgegevens door BCN Sports.</p>
                <p class="text-gray-600 mb-6">
                    U kunt een verzoek tot inzage, correctie, verwijdering, of gegevensoverdraging van uw persoonsgegevens
                    sturen naar <a href="mailto:info@bcnsports.nl" class="text-primary hover:text-primary-dark">info@bcnsports.nl</a>.
                    Om er zeker van te zijn dat het verzoek tot inzage door u is gedaan, vragen wij u een kopie van uw
                    identiteitsbewijs met het verzoek mee te sturen.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">8. Beveiliging</h2>
                <p class="text-gray-600 mb-6">
                    BCN Sports neemt de bescherming van uw gegevens serieus en neemt passende maatregelen om
                    misbruik, verlies, onbevoegde toegang, ongewenste openbaarmaking en ongeoorloofde wijziging tegen te gaan.
                    De website maakt gebruik van een betrouwbaar SSL Certificaat om te borgen dat uw persoonsgegevens
                    niet in verkeerde handen vallen.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">9. Klachten</h2>
                <p class="text-gray-600 mb-6">
                    Als u klachten heeft over de manier waarop wij met uw gegevens omgaan, kunt u contact met ons opnemen
                    via <a href="mailto:info@bcnsports.nl" class="text-primary hover:text-primary-dark">info@bcnsports.nl</a>.
                    U heeft ook het recht om een klacht in te dienen bij de Autoriteit Persoonsgegevens.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">10. Wijzigingen</h2>
                <p class="text-gray-600 mb-6">
                    BCN Sports behoudt zich het recht voor om wijzigingen aan te brengen in deze privacyverklaring.
                    Het verdient aanbeveling om deze privacyverklaring regelmatig te raadplegen, zodat u van deze
                    wijzigingen op de hoogte bent.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">11. Contact</h2>
                <p class="text-gray-600 mb-4">
                    Voor vragen over deze privacyverklaring of ons privacybeleid kunt u contact met ons opnemen:
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
                Neem gerust contact met ons op als u vragen heeft over ons privacybeleid.
            </p>
            <a href="{{ route('contact') }}" class="inline-block bg-primary hover:bg-primary-dark text-white px-8 py-4 rounded-full font-bold transition">
                Neem Contact Op
            </a>
        </div>
    </section>
@endsection
