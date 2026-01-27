@extends('layouts.app')

@section('title', 'Privacy Policy - BCN Sports')
@section('meta_description', 'Read the privacy policy of BCN Sports. We take the protection of your personal data seriously and comply with GDPR legislation.')

@section('content')
    <!-- Hero Section -->
    <section class="bg-secondary py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                Privacy <span class="text-primary">Policy</span>
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
                        BCN Sports respects the privacy of all users of its website and services.
                        We ensure that the personal information you provide to us is treated confidentially.
                    </p>
                </div>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">1. Data Controller</h2>
                <p class="text-gray-600 mb-6">
                    BCN Sports, located in Almere, is responsible for the processing of personal data
                    as described in this privacy policy.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">2. Personal Data We Process</h2>
                <p class="text-gray-600 mb-4">
                    BCN Sports processes your personal data because you use our services and/or
                    because you provide it to us yourself. Below is an overview of the personal data we process:
                </p>
                <ul class="list-disc pl-6 text-gray-600 space-y-2 mb-6">
                    <li>First and last name</li>
                    <li>Email address</li>
                    <li>Phone number</li>
                    <li>Address details (if applicable)</li>
                    <li>Date of birth (if applicable)</li>
                    <li>Payment details (for invoicing)</li>
                    <li>Data about your activities on our website</li>
                    <li>Internet browser and device type</li>
                </ul>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">3. Purposes of Data Processing</h2>
                <p class="text-gray-600 mb-4">BCN Sports processes your personal data for the following purposes:</p>
                <ul class="list-disc pl-6 text-gray-600 space-y-2 mb-6">
                    <li>Processing your registration and payment</li>
                    <li>To contact you by phone or email if necessary for our services</li>
                    <li>To inform you about changes to our services and training sessions</li>
                    <li>Sending newsletters (only with your consent)</li>
                    <li>To manage training schedules and reservations</li>
                    <li>BCN Sports analyses your behaviour on the website to improve the website</li>
                </ul>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">4. Retention Period</h2>
                <p class="text-gray-600 mb-6">
                    BCN Sports does not retain your personal data for longer than is strictly necessary to achieve the purposes
                    for which your data is collected. We apply the following retention periods:
                </p>
                <ul class="list-disc pl-6 text-gray-600 space-y-2 mb-6">
                    <li>Customer data: up to 2 years after termination of the agreement</li>
                    <li>Financial records: 7 years (legal obligation)</li>
                    <li>Newsletter preferences: until withdrawal of consent</li>
                </ul>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">5. Sharing with Third Parties</h2>
                <p class="text-gray-600 mb-4">
                    BCN Sports does not sell your data to third parties and only provides it if this is necessary
                    for the execution of our agreement with you or to comply with a legal obligation.
                    With companies that process your data on our behalf, we enter into a data processing agreement
                    to ensure the same level of security and confidentiality of your data.
                </p>
                <p class="text-gray-600 mb-6">We work with the following categories of service providers:</p>
                <ul class="list-disc pl-6 text-gray-600 space-y-2 mb-6">
                    <li>Booking system for training reservations</li>
                    <li>Payment service provider for processing payments</li>
                    <li>Email provider for sending communications</li>
                    <li>Hosting provider for hosting our website</li>
                </ul>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">6. Cookies</h2>
                <p class="text-gray-600 mb-4">
                    BCN Sports uses functional and analytical cookies. A cookie is a small text file
                    that is stored on your computer, tablet, or smartphone when you first visit this website.
                </p>
                <p class="text-gray-600 mb-4">The cookies we use are necessary for the technical operation
                    of the website and your ease of use. They ensure that the website functions properly.
                    They also allow us to optimise our website.</p>
                <p class="text-gray-600 mb-6">
                    You can opt out of cookies by setting your internet browser to no longer store cookies.
                    In addition, you can also delete all information previously stored via your browser settings.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">7. Viewing, Modifying, or Deleting Data</h2>
                <p class="text-gray-600 mb-4">You have the right to view, correct, or delete your personal data.
                    In addition, you have the right to withdraw any consent you have given for data processing
                    or to object to the processing of your personal data by BCN Sports.</p>
                <p class="text-gray-600 mb-6">
                    You can send a request for access, correction, deletion, or data transfer of your personal data
                    to <a href="mailto:info@bcnsports.nl" class="text-primary hover:text-primary-dark">info@bcnsports.nl</a>.
                    To ensure that the request for access has been made by you, we ask you to send a copy of your
                    identification document with the request.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">8. Security</h2>
                <p class="text-gray-600 mb-6">
                    BCN Sports takes the protection of your data seriously and takes appropriate measures to prevent
                    misuse, loss, unauthorised access, unwanted disclosure, and unauthorised modification.
                    The website uses a reliable SSL Certificate to ensure that your personal data does not
                    fall into the wrong hands.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">9. Complaints</h2>
                <p class="text-gray-600 mb-6">
                    If you have complaints about the way we handle your data, you can contact us
                    at <a href="mailto:info@bcnsports.nl" class="text-primary hover:text-primary-dark">info@bcnsports.nl</a>.
                    You also have the right to file a complaint with the Dutch Data Protection Authority (Autoriteit Persoonsgegevens).
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">10. Changes</h2>
                <p class="text-gray-600 mb-6">
                    BCN Sports reserves the right to make changes to this privacy policy.
                    It is recommended to consult this privacy policy regularly so that you are aware of any changes.
                </p>

                <h2 class="text-2xl font-bold text-secondary mt-8 mb-4">11. Contact</h2>
                <p class="text-gray-600 mb-4">
                    For questions about this privacy policy or our privacy practices, you can contact us:
                </p>
                <div class="bg-light rounded-xl p-6">
                    <p class="text-gray-600 m-0">
                        <strong class="text-secondary">BCN Sports</strong><br>
                        Almere, The Netherlands<br>
                        Email: <a href="mailto:info@bcnsports.nl" class="text-primary hover:text-primary-dark">info@bcnsports.nl</a>
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
                Feel free to contact us if you have any questions about our privacy policy.
            </p>
            <a href="{{ route(\App\Helpers\LocaleHelper::localizedRoute('contact')) }}" class="inline-block bg-primary hover:bg-primary-dark text-white px-8 py-4 rounded-full font-bold transition">
                Contact Us
            </a>
        </div>
    </section>
@endsection
