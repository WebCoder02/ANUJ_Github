
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>France Visa Checklist</title>
    <link rel="stylesheet" href="document.css">
    <link rel="stylesheet" href="Country_page.css">
    <link rel="stylesheet" href="styles.css">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">-->
</head>

<body>
    <?php include 'header.php'; ?>
    <!--Completed Revision 18th June 2025-->
    <!--<header>
        <div class="container header-container">
            <div class="logo">
                <a href="https://www.teyzeevisas.com/">
                    <img src="https://teyzeevisas.com/VisaImages/destinations/Teyzee_logo_240w_500h.jpeg" alt="TeyZee Visas Logo">
                </a>

            </div>
            <div class="header-actions">
                <a href="https://wa.me/919029027420" class="contact"><i class="fab fa-whatsapp"></i> Chat with us</a>
                <a href="tel:+919029027420" class="contact"><i class="fas fa-phone"></i> Call Us</a>
                <a href="#" class="login-btn">Login</a>
            </div>
        </div>
    </header>-->
    <h1>France Schengen Visa Checklist</h1>

    <div class="tab-container">
        <div class="tab">
            <button class="tablinks active" onclick="openTab(event, 'tourist')">Tourist Visa</button>
            <button class="tablinks" onclick="openTab(event, 'business')">Business Visa</button>
            <button class="tablinks" onclick="openTab(event, 'student')">Student Visa</button>
            <button class="tablinks" onclick="openTab(event, 'additional')">Additional Information</button>
        </div>

        <div id="tourist" class="tabcontent active">
            <h2>France Tourist Visa Checklist</h2>
            <table>
                <tr>
                    <th width="30%">Documents</th>
                    <th width="70%">Description</th>
                </tr>
                <tr>
                    <td>Original Passport</td>
                    <td>With at least 2 blank pages valid for at least three months after the trip, issued in last 10
                        years</td>
                </tr>
                <tr>
                    <td>Copy of Passport Pages</td>
                    <td>
                        <ul>
                            <li>Clear photocopy of passport first and last page</li>
                            <li>All pages of your travel document containing visas, entry and exit stamps</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>Photograph</td>
                    <td>35mm x 45mm, with about 80% of your head and the top of your shoulders covering the photo, white
                        background, taken in the last 6 months, teeth should not be visible, ears should be visible</td>
                </tr>
                <tr>
                    <td>Application form</td>
                    <td>Put your signature and carry it on the day of appointment
                        <br>
                        <span class="special-doc">Login to see the Visa Application form and the Document Checklist.</span>
                        <?php if (isset($_SESSION['user_id'])): ?>
                        <!-- Special links for logged-in users -->
                        <a href="https://www.vfsglobal.com/denmark/pdf/application-for-schengen-visa_7e5a8e972b5146cf7a47be87a5be6cc02379d75cdb43bbe0183533f93287a741.pdf">Download Application Form</a>
                        <a href="https://www.welcometofrance.com/app/uploads/List-of-documents-to-be-submitted-with-an-application-for-a-short-stay-visa-1.pdf">Download Document Checklist</a>
                        <?php else: ?>
                            <p>
                                If you have not registered on TeyzeeVisas, please <strong>Register Now</strong>.<br>
                                To <strong>Register</strong>, please click the Check Eligibility button:<br>
                                <a href="/php/payment.php?country=france&amount=499" class="doc-link">Check Eligibility</a><br>
                                Pay ₹499 to check your visa eligibility and get free registration.<br>
                                After registration, you will receive your User ID and password on your registered Email ID.<br>
                                If you have already registered on TeyzeeVisas, please login:<br>
                                <a href="/php/login.php?country=france" class="doc-link">Login</a>
                            </p>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td>Appointment slip</td>
                    <td>This needs be carried on the day of appointment</td>
                </tr>
                <tr>
                    <td>Flight tickets</td>
                    <td>Confirmed roundtrip ticket. Also includes, Reservations for internal transfer within Schengen
                        states (flight, train itinerary or car rental)</td>
                </tr>
                <tr>
                    <td>Hotel Tickets</td>
                    <td>Hotel bookings for complete stay in Schengen</td>
                </tr>
                <tr>
                    <td>Cover Letter</td>
                    <td>Mentioning the purpose of the trip and itinerary <a href="/templates/cover_letter_template.doc"
                            class="doc-link" target="_blank">Download Template</a></td>
                </tr>
                <tr>
                    <td>Travel Insurance</td>
                    <td>Travel insurance covering not less than 30,000 Euros</td>
                </tr>
                <tr>
                    <td>Bank statement</td>
                    <td>Bank statements last 3 months, available balance should be at least 50-150 Euros per person per
                        day of the trip. Advisable to transfer the money to maintain the balance 15 days before the
                        appointment. Does not need to be signed by the bank</td>
                </tr>
                <tr>
                    <td>ITR</td>
                    <td>Copy of income tax return + ITR V acknowledgment of last 02 financial year if available</td>
                </tr>
                <tr>
                    <td>Sponsor Bank Statement and ITR</td>
                    <td>If trip sponsored by someone else, copy of bank statements last 3 months and copy of income tax
                        return + ITR V acknowledgment for previous financial year (signed by bank)</td>
                </tr>
                <tr>
                    <td>Sponsorship Letter</td>
                    <td>If sponsored, letter from sponsor stating the amount, relationship and source of funds 
                        <!-- <a
                            href="/templates/sponsorship_letter_template.doc" class="doc-link" target="_blank">Download
                            Template</a> -->
                        </td>
                </tr>
                <tr>
                    <td>Proof of occupation (If employed)</td>
                    <td>Last 3 months salary slips, Employment contract, NOC from the employer and form 16 
                        <!-- <a
                            href="/templates/noc_from_employer.doc" class="doc-link" target="_blank">Download NOC
                            Template</a> -->
                        </td>
                </tr>
                <tr>
                    <td>Proof of occupation (If self employed)</td>
                    <td>GST certificate, Company registration proof, Company bank statement and company ITR</td>
                </tr>
                <tr>
                    <td>Proof of occupation (If Retired)</td>
                    <td>
                        <ul>
                            <li>Proof of Retirement</li>
                            <li>Proof of regular income generated by ownership of property or business</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>Marital status</td>
                    <td>
                        <ul>
                            <li>If married, Marriage certificate</li>
                            <li>If divorced, Divorce papers</li>
                            <li>If single, Nothing required</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>Minor documents</td>
                    <td>Birth certificate, marksheet, consent letter from parents if minor is travelling alone or with
                        only one parent</td>
                </tr>
            </table>
        </div>

        <div id="business" class="tabcontent">
            <h2>France Business Visa Checklist</h2>
            <table>
                <tr>
                    <th width="30%">Document</th>
                    <th width="70%">Description</th>
                </tr>
                <tr>
                    <td>Official Document Links </td>
                    <td><span class="special-doc">Login to see the Business Visa Application form and the Document Checklist.</span>
                        <?php if (isset($_SESSION['user_id'])): ?>
                        <!-- Special links for logged-in users -->
                        <a href="https://france-visas.gouv.fr/en/india">Download Application Form</a>
                        <a href="https://france-visas.gouv.fr/documents/d/france-visas/fv_com_tutoriel_portugais">Download Document Checklist</a>
                        <?php endif; ?></td>
                </tr>
                <tr>
                    <td>Original Passport</td>
                    <td>With at least 2 blank pages valid for at least three months after the trip, issued in last 10
                        years</td>
                </tr>
                <tr>
                    <td>Copy of Passport Pages</td>
                    <td>
                        <ul>
                            <li>Clear photocopy of passport first and last page</li>
                            <li>All pages of your travel document containing visas, entry and exit stamps</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>Passport size photo</td>
                    <td>35*45mm, 80% face coverage, white background, taken in the last 6 months, teeth should not be
                        visible, ears should be visible</td>
                </tr>
                <tr>
                    <td>Visa application form</td>
                    <td>Put your signature and carry it on the day of appointment</td>
                </tr>
                <tr>
                    <td>Appointment letter</td>
                    <td>This needs be carried on the day of appointment</td>
                </tr>
                <tr>
                    <td>Flight ticket</td>
                    <td>Confirmed roundtrip ticket. Also includes, Reservations for internal transfer within Schengen
                        states (flight, train itinerary or car rental)</td>
                </tr>
                <tr>
                    <td>Hotel booking</td>
                    <td>Hotel bookings for complete stay in Schengen</td>
                </tr>
                <tr>
                    <td>Proof of occupation (If employed)</td>
                    <td>Last 3 months salary slips, Employment contract, NOC from the employer and form 16
                         <!-- <a
                            href="/templates/noc_from_employer.doc" class="doc-link" target="_blank">Download NOC
                            Template</a> -->
                        </td>
                </tr>
                <tr>
                    <td>Proof of occupation (If self employed)</td>
                    <td>GST certificate, Company registration proof, Company bank statement and company ITR</td>
                </tr>
                <tr>
                    <td>Bank statement</td>
                    <td>Recommended ~120 Euros per day of the trip. Should not be more than 4 days old on appointment
                        day</td>
                </tr>
                <tr>
                    <td>IT return</td>
                    <td>
                        <ul>
                            <li>Copy of personal income tax return + ITR V acknowledgment of last 02 financial year if
                                available</li>
                            <li>If self employed, income tax return + ITR V acknowledgment of last 02 financial year if
                                available</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>Travel insurance</td>
                    <td>Minimum coverage of 30,000 Euros</td>
                </tr>
                <tr>
                    <td>Invitation letter</td>
                    <td>
                        <ul>
                            <li>If applicable. With contact details of the host and address</li>
                            <li>Invitation letter from the  company</li>
                        </ul>
                        <!-- <a href="/templates/business_invitation_letter.doc" class="doc-link" target="_blank">Download
                            Template</a> -->
                    </td>
                </tr>
                <tr>
                    <td>Company Cover letter</td>
                    <td>Introduction letter by Indian company on a company letterhead mentioning purpose of visit and
                        relationship between the Indian and the French company 
                        <!-- <a href="/templates/company_cover_letter.doc"
                            class="doc-link" target="_blank">Download Template</a> -->
                        </td>
                </tr>
                <tr>
                    <td>Applicant Cover letter</td>
                    <td>Cover letter by the applicant mentioning purpose of visit and other details of the trip 
                        <!-- <a
                            href="/templates/cover_letter_template.doc" class="doc-link" target="_blank">Download
                            Template</a> -->
                        </td>
                </tr>
                <tr>
                    <td>Company Sponsorship Letter (from Indian employer)</td>
                    <td>If the trip is sponsored by the Indian company please mention the details too 
                        <!-- <a
                            href="/templates/company_sponsorship_letter.doc" class="doc-link" target="_blank">Download
                            Template</a> -->
                        </td>
                </tr>
            </table>
        </div>

        <div id="student" class="tabcontent">
            <h2>France Student Visa Checklist</h2>
            <table>
                <tr>
                    <th width="30%">Document</th>
                    <th width="70%">Description</th>
                </tr>
                <tr><td>Passport</td><td>Valid at least 6 months beyond intended stay; two blank pages recommended.</td></tr>
                <tr><td>Campus France Registration</td><td>Online file number (IN) and interview confirmation from Campus France India.</td></tr>
                <tr><td>Admission Letter</td><td>Official acceptance from a French educational institution.</td></tr>
                <tr><td>Visa Application Form</td><td>Long‑Stay Student Visa form, printed, signed and dated.</td></tr>
                <tr><td>Photos</td><td>Two recent passport-style colour photos (35×45 mm; biometric guidelines).</td></tr>
                <tr><td>Academic Records</td><td>Transcripts and diplomas from previous studies (10th grade onward).</td></tr>
                <tr><td>Curriculum Vitae</td><td>Résumé detailing education and experience.</td></tr>
                <tr><td>Motivation Letter</td><td>Personal cover letter explaining your study goals and choice of program.</td></tr>
                <tr><td>Proof of Funds</td><td>Bank statements, ITRs or sponsor documents showing ≥ €615/month plus tuition fee proof.</td></tr>
                <tr><td>Accommodation Proof</td><td>Rental agreement, student housing confirmation, or host invitation with address.</td></tr>
                <tr><td>Insurance</td><td>Medical/travel insurance covering at least €30,000 for emergencies and repatriation.</td></tr>
                <tr><td>Flight & Travel Plan</td><td>Flight reservation for short stays or proposed travel itinerary.</td></tr>
                <tr><td>Health Declaration (OFII)</td><td>Completed OFII form if required upon arrival in France.</td></tr>
                <tr><td>Visa Fee</td><td>Paid at VFS/Consulate during submission.</td></tr>
                <tr><td>Biometrics</td><td>Fingerprint scan and photo at Visa Application Centre (age ≥12).</td></tr>
                <tr><td>Translations</td><td>Documents not in English or French translated and certified.</td></tr>
            </table>
         </div>

        <div id="additional" class="tabcontent"><h2>This Information is available only to users who have logged in.</h2>            
         <?php if (isset($_SESSION['user_id'])): ?>
                        <!-- Special links for logged-in users -->
            <h2>Additional Information Required</h2>
            <table>
                <tr>
                    <th width="40%">How to fill the Visa form</th>
                    <th width="60%">Details</th>
                </tr>
                <tr>
                    <td>Are you visiting any other Schengen countries during your stay?</td>
                    <td>Check list of Schengen countries: Austria, Belgium, Czech Republic, Croatia, Denmark, Estonia,
                        Finland, France, Germany, Greece, Hungary, Iceland, Italy, Latvia, Liechtenstein, Lithuania,
                        Luxembourg, Malta, Netherlands, Norway, Poland, Portugal, Slovakia, Slovenia, Spain, Sweden, and
                        Switzerland.</td>
                </tr>
                <tr>
                    <td>What is your first country of entry?</td>
                    <td>Check list of Schengen countries: Austria, Belgium, Czech Republic, Croatia, Denmark, Estonia,
                        Finland, France, Germany, Greece, Hungary, Iceland, Italy, Latvia, Liechtenstein, Lithuania,
                        Luxembourg, Malta, Netherlands, Norway, Poland, Portugal, Slovakia, Slovenia, Spain, Sweden, and
                        Switzerland.</td>
                </tr>
                <tr>
                    <td>Have you been issued Schengen visa in the past 5 years?</td>
                    <td>If yes, mention last visa start date and end date</td>
                </tr>
                <tr>
                    <td>Have your digital fingerprints previously been taken in connection with a previous application
                        for a Schengen visa?</td>
                    <td>If yes, mentioned Date of taking fingerprints and Visa number of last visa</td>
                </tr>
                <tr>
                    <td>What is your marital status?</td>
                    <td>Pick one: Single, Married, Divorced, Widowed, Unmarried Partner, Separated</td>
                </tr>
                <tr>
                    <td>How long are you planning to stay in Schengen area?</td>
                    <td>No. of days</td>
                </tr>
                <tr>
                    <td>What is your employment status?</td>
                    <td>
                        <ul>
                            <li>If Student, mention: name of the Institution, Institute address, Institute address and
                                Institute email</li>
                            <li>If Employed, mention: Name of the employer/Organization, Job title,
                                Employer/Organization address, Employer/Organization email</li>
                            <li>If Unemployed, mention last job role and last date of working</li>
                            <li>If Self Employed, mention: Job Title</li>
                            <li>If Retired, mention: Date of retirement</li>
                            <li>If Other, mention details on the other employment status</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>Will someone else will be paying towards the cost of your trip?</td>
                    <td>
                        If yes, mention if it will be paid by
                        <ol>
                            <li>Friend/family</li>
                            <li>Employer</li>
                            <li>Any other company</li>
                        </ol>
                        Also mention: Name of the person/org who will fund, relationship of the person/org who will
                        fund, how much money they will be paying
                    </td>
                </tr>
            </table>
            <?php endif;?>
        </div>
    </div> 

    <div class="note">
        <strong>Note:</strong> This checklist is provided for informational purposes only. Requirements may change, so
        it's recommended to verify the current requirements with the  embassy or consulate in your country before
        applying.
    </div>
    <?php include 'footer.php'; ?>

    <!-- <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3>Address</h3>
                    <div class="address">
                        <p><i class="fas fa-map-marker-alt"></i>
                            </i> A-302, RG City Centre, DB Gupta Road, Delhi 110011</p>
                    </div>
                    <div class="address">
                        <p><i class="fas fa-map-marker-alt"></i>
                            </i> Mumbai - WeWSork Platinum, Marol, Mumbai, Maharashtra, 400059
                        </p>
                    </div>
                    <a href="https://wa.me/919029027420" class="whatsapp-button"><i class="fab fa-whatsapp"></i> Chat
                        with us</a>
                </div>

                <div class="footer-col">
                    <h3>About us</h3>
                    <ul>
                        <li><a href="mailto:business.tours@kalltrip.com">Email us</a></li>
                        <li><a href="#">Blogs</a></li>
                        <li><a href="/html/privacy.html">Privacy Policy</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3>Refund policy</h3>
                    <ul>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Terms & conditions</a></li>
                    </ul>
                </div> -->
                <!-- <div class="footer-links"> -->
                <!-- <div class="footer-col">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Support</h3>
                    <ul>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Refund Policy</a></li>
                        <li><a href="/html/privacy.html">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Social</h3>
                    <ul>
                        <li><a href="https://www.facebook.com/profile.php?id=61575094024472"><i
                                    class="fab fa-facebook"></i> Facebook</a></li>
                        <li>
                            <a href="https://x.com/TeyzeeVisas" target="_blank"
                                style="text-decoration: none; display: inline-flex; align-items: center;">
                                <span
                                    style="font-weight: bold; font-size: 10px; background-color: rgb(255, 255, 255); color: rgb(160, 151, 151); padding: 0px 4px; border-radius: 8px;">
                                    𝕏
                                </span>
                                <span style="margin-left: 6px; color: rgb(255, 255, 255);">X</span>
                            </a>
                        </li>
                        <li><a href="https://www.instagram.com/teyzee_visas/"><i class="fab fa-instagram"></i>
                                Instagram</a></li>
                    </ul>
                </div>

            </div>

            <div class="footer-countries">
                <h3>Read more about visas</h3>
                <div class="country-links">
                    <a href="/html/france_customer.html">France</a> •
                    <a href="/html/italy_customer.html">Italy</a> •
                    <a href="/html/germany_customer.html">Germany</a> •
                    <a href="/html/switzerland.html">Switzerland</a> •
                    <a href="/html/greece_customer.html">Greece</a> •
                    <a href="/html/singapore_customer.html">Singapore</a> •
                    <a href="/html/turkey_customer.html">Turkey</a> •
                    <a href="/html/France_customer.html">France</a> •
                    <a href="#">Russia</a> •
                    <a href="#">United Arab Emirates</a> •
                    <a href="#">Indonesia</a> •
                    <a href="#">Vietnam</a> •
                    <a href="#">Azerbaijan</a> •
                    <a href="#">United Kingdom</a> •
                    <a href="#">Spain</a> •
                    <a href="#">South Korea</a> •
                    <a href="#">Georgia</a> •
                    <a href="#">Hungary</a> •
                    <a href="#">Finland</a> •
                    <a href="#">Norway</a> •
                    <a href="#">Egypt</a> •
                    <a href="#">Oman</a> •
                    <a href="#">Sweden</a> •
                    <a href="#">Austria</a> •
                    <a href="#">Denmark</a> •
                    <a href="#">Uzbekistan</a> •
                    <a href="#">Cambodia</a> •
                    <a href="#">Morocco</a> •
                    <a href="#">Netherlands</a> •
                    <a href="#">Philippines</a> •
                    <a href="#">Brazil</a> •
                    <a href="#">Saudi Arabia</a> •
                    <a href="#">Kenya</a> •
                    <a href="#">Portugal</a> •
                    <a href="#">Belgium</a> •
                    <a href="#">Croatia</a> •
                    <a href="#">Lithuania</a> •
                    <a href="#">Ireland</a> •
                    <a href="#">Luxembourg</a> •
                    <a href="#">Hong Kong</a> •
                    <a href="#">Malaysia</a> •
                    <a href="#">Japan</a> •
                    <a href="#">Bahrain</a> •
                    <a href="#">Czech Republic</a> •
                    <a href="#">Romania</a> •
                    <a href="#">Bulgaria</a> •
                    <a href="#">Slovakia</a> •
                    <a href="#">Latvia</a> •
                    <a href="#">Estonia</a>
                </div>
            </div>
            <div class="copyright">
                <p>© 2025 TeyZee Visas. All Rights Reserved.</p>
            </div>
        </div>
    </footer> -->
    <script>
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;

            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].className = tabcontent[i].className.replace(" active", "");
            }

            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            document.getElementById(tabName).className += " active";
            evt.currentTarget.className += " active";
        }

        // JavaScript to redirect users to WhatsApp with template request message
        document.addEventListener('DOMContentLoaded', function () {
            // Select all download links with the class "doc-link"
            const downloadLinks = document.querySelectorAll('.doc-link');

            // WhatsApp number - Replace with your actual number
            const whatsappNumber = "919892527420"; // Format: country code without + followed by number

            // Loop through each download link and modify its behavior
            downloadLinks.forEach(function (link) {
                link.addEventListener('click', function (e) {
                    e.preventDefault(); // Prevent the default download behavior

                    // Get the template type from the link
                    const templatePath = link.getAttribute('href').split('/').pop();
                    const templateName = templatePath.replace('.doc', '').replace(/_/g, ' ');


                    const message = `Kindly provide the latest ${templateName} for my visa application. In case you have not paid TeyZee Visa Fees, please make the visa service fees payment and get the receipt number. Link to Visa Fees Page for France - https://teyzee.com/France-visa-fees; please type the 7 digit receipt no in your next whatsapp message to us`;


                    const encodedMessage = encodeURIComponent(message);


                    const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodedMessage}`;
                    window.location.href = whatsappUrl;
                });
            });
        });
    </script>
</body>

</html>
