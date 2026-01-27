@extends('layouts.app')

@section('title', 'Terms and Conditions - BCN Sports')
@section('meta_description', 'Read the terms and conditions of BCN Sports. Here you will find all information about our services, subscriptions, cancellation policy and more.')

@section('content')
    <!-- Hero Section -->
    <section class="bg-secondary py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                Terms & <span class="text-primary">Conditions</span>
            </h1>
            <p class="text-gray-300">Last updated: {{ date('Y-m-d') }}</p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="prose prose-lg max-w-none">

                <div class="bg-light rounded-xl p-6 mb-8">
                    <p class="text-gray-600 m-0">
                        These terms and conditions apply to all services and products of BCN Sports.
                        By using our services, you agree to these terms and conditions.
                    </p>
                </div>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">Article 1 - Definitions</h2>
                <p class="text-gray-600 mb-4">In these terms and conditions, the following definitions apply:</p>
                <ul class="list-disc pl-6 text-gray-600 space-y-2 mb-6">
                    <li><strong>BCN Sports:</strong> the provider of Bootcamp Trials events (throughout The Netherlands) and outdoor personal training (Almere and surrounding areas), based in Almere.</li>
                    <li><strong>Participant:</strong> the natural person who participates in the activities of BCN Sports.</li>
                    <li><strong>Subscription:</strong> an agreement in which the participant has access to training sessions for a specified period.</li>
                    <li><strong>Training:</strong> a scheduled outdoor training session, Bootcamp Trials event, or personal training session under the guidance of a trainer.</li>
                    <li><strong>Multi-pass card:</strong> a prepaid card that entitles the holder to a specified number of training sessions.</li>
                </ul>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">Article 2 - Applicability</h2>
                <p class="text-gray-600 mb-6">
                    These terms and conditions apply to all offers, quotations, agreements, and
                    services of BCN Sports. Deviations from these terms and conditions are only valid if they
                    have been expressly agreed upon in writing.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">Article 3 - Subscriptions and Prices</h2>
                <h3 class="text-xl font-semibold text-secondary mt-6 mb-3">3.1 Available services and rates</h3>
                <div class="bg-light rounded-xl p-6 mb-4">
                    <ul class="text-gray-600 space-y-2 m-0">
                        <li><strong>1:1 Personal Training:</strong> €74,95 per session - individual training with full personal attention</li>
                        <li><strong>Duo Training (1:2):</strong> €54,95 per person per session - train together with a partner</li>
                        <li><strong>Small Group Training:</strong> €39,95 per person per session - small group of minimum 3 and maximum 4 participants</li>
                        <li><strong>Bootcamp Trials Events:</strong> prices are announced per event upon announcement</li>
                    </ul>
                </div>

                <h3 class="text-xl font-semibold text-secondary mt-6 mb-3">3.2 Price changes</h3>
                <p class="text-gray-600 mb-6">
                    BCN Sports reserves the right to adjust prices. Price changes will be announced at least
                    1 month in advance. Existing subscriptions will retain the previous price until the end of
                    the current subscription period.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">Article 4 - Payment</h2>
                <p class="text-gray-600 mb-4">
                    4.1 Payment of monthly subscriptions is due in advance, before the start of the subscription period.
                </p>
                <p class="text-gray-600 mb-4">
                    4.2 Multi-pass cards and individual sessions must be paid for in advance.
                </p>
                <p class="text-gray-600 mb-6">
                    4.3 In case of late payment, BCN Sports may deny the participant access to training sessions
                    until payment has been fulfilled.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">Article 5 - Termination and Cancellation</h2>
                <h3 class="text-xl font-semibold text-secondary mt-6 mb-3">5.1 Subscription termination</h3>
                <p class="text-gray-600 mb-4">
                    Subscriptions may be terminated subject to a notice period of 1 month.
                    Termination must be made in writing or by e-mail. The subscription will then end on
                    the first day of the following month after the notice period has expired.
                </p>
                <h3 class="text-xl font-semibold text-secondary mt-6 mb-3">5.2 Cancellation of training sessions</h3>
                <p class="text-gray-600 mb-4">
                    Participants must cancel at least 12 hours before the start of a training session.
                    In case of late cancellation or no-show, the session will be deducted from
                    the multi-pass card or will count as a missed training session.
                </p>
                <h3 class="text-xl font-semibold text-secondary mt-6 mb-3">5.3 Cancellation by BCN Sports</h3>
                <p class="text-gray-600 mb-6">
                    BCN Sports reserves the right to cancel training sessions in the event of extreme weather conditions
                    or unforeseen circumstances. Participants will be notified as soon as possible.
                    Cancelled training sessions will not be deducted from multi-pass cards.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">Article 6 - Subscription Suspension</h2>
                <p class="text-gray-600 mb-6">
                    In the event of prolonged illness, injury, or vacation, the subscription may be temporarily
                    suspended. This must be requested in writing in advance. BCN Sports evaluates each
                    request individually. Suspension is possible for a minimum of 2 weeks and a maximum of 2 months per year.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">Article 7 - Code of Conduct</h2>
                <p class="text-gray-600 mb-4">The participant agrees to the following:</p>
                <ul class="list-disc pl-6 text-gray-600 space-y-2 mb-6">
                    <li>Treat trainers, fellow participants, and equipment with respect</li>
                    <li>Arrive on time for training sessions (at least 5 minutes before the start)</li>
                    <li>Wear appropriate sportswear and footwear</li>
                    <li>Report any physical limitations or health concerns to the trainer</li>
                    <li>Follow the instructions of the trainer</li>
                    <li>Refrain from using drugs or alcohol before or during training</li>
                </ul>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">Article 8 - Liability</h2>
                <p class="text-gray-600 mb-4">
                    8.1 Participation in training sessions is entirely at the participant's own risk.
                </p>
                <p class="text-gray-600 mb-4">
                    8.2 BCN Sports is not liable for any injury or damage, of any nature whatsoever, that the
                    participant may suffer as a result of participating in activities of BCN Sports, unless
                    there is intent or gross negligence on the part of BCN Sports.
                </p>
                <p class="text-gray-600 mb-4">
                    8.3 BCN Sports is not liable for theft, embezzlement, or loss of the participant's belongings.
                </p>
                <p class="text-gray-600 mb-6">
                    8.4 The participant must be insured against accidents and civil liability.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">Article 9 - Health</h2>
                <p class="text-gray-600 mb-4">
                    9.1 The participant declares to be in good health and physically capable of participating
                    in training sessions.
                </p>
                <p class="text-gray-600 mb-6">
                    9.2 If in doubt about their own health, the participant should consult a physician
                    before participating in training sessions. BCN Sports reserves the right to require
                    a health declaration.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">Article 10 - Multi-Pass Card Validity</h2>
                <p class="text-gray-600 mb-6">
                    The 10-session multi-pass card is valid for 6 months from the date of purchase. After this period,
                    unused sessions expire without the right to a refund. The multi-pass card is personal and non-transferable.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">Article 11 - Family Package</h2>
                <p class="text-gray-600 mb-4">
                    11.1 The Family Package is intended for members of the same household or designated persons
                    (maximum 4 persons).
                </p>
                <p class="text-gray-600 mb-6">
                    11.2 The names of the persons using the Family Package must be provided to BCN Sports in advance.
                    Changes must be communicated in writing.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">Article 12 - Visual Material</h2>
                <p class="text-gray-600 mb-6">
                    BCN Sports may take photos and videos during training sessions for promotional purposes.
                    By participating in training sessions, the participant consents to the use of this visual material.
                    If the participant objects, this must be communicated in writing in advance.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">Article 13 - Complaints</h2>
                <p class="text-gray-600 mb-6">
                    Complaints about the services of BCN Sports must be submitted in writing via e-mail
                    within 14 days of occurrence. BCN Sports will respond to the complaint in substance
                    within 4 weeks.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">Article 14 - Amendment of Terms</h2>
                <p class="text-gray-600 mb-6">
                    BCN Sports reserves the right to amend these terms and conditions. Amendments will be
                    announced at least 1 month in advance. In case of substantial changes, the participant
                    has the right to terminate the subscription.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">Article 15 - Applicable Law</h2>
                <p class="text-gray-600 mb-6">
                    These terms and conditions and all agreements between BCN Sports and the participant are
                    governed by Dutch law. Disputes will be submitted to the competent court in Almere.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">Article 16 - Contact</h2>
                <p class="text-gray-600 mb-4">
                    For questions about these terms and conditions, please contact us:
                </p>
                <div class="bg-light rounded-xl p-6">
                    <p class="text-gray-600 m-0">
                        <strong class="text-secondary">BCN Sports</strong><br>
                        Almere, The Netherlands<br>
                        E-mail: <a href="mailto:info@bcnsports.nl" class="text-primary hover:text-primary-dark">info@bcnsports.nl</a>
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-light">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-2xl font-bold text-secondary mb-4">Do you have questions?</h2>
            <p class="text-gray-600 mb-6">
                Feel free to contact us if you have any questions about our terms and conditions.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route(\App\Helpers\LocaleHelper::localizedRoute('contact')) }}" class="inline-block bg-primary hover:bg-primary-dark text-white px-8 py-4 rounded-full font-bold transition">
                    Contact Us
                </a>
                <a href="{{ route(\App\Helpers\LocaleHelper::localizedRoute('prijzen')) }}" class="inline-block bg-secondary hover:bg-secondary-light text-white px-8 py-4 rounded-full font-bold transition">
                    View Prices
                </a>
            </div>
        </div>
    </section>
@endsection
