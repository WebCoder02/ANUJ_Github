
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Norway Visa Checklist</title>
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
    <h1>Norway Schengen Visa Checklist</h1>

    <div class="tab-container">
        <div class="tab">
            <button class="tablinks active" onclick="openTab(event, 'tourist')">Tourist Visa</button>
            <button class="tablinks" onclick="openTab(event, 'business')">Business Visa</button>
            <button class="tablinks" onclick="openTab(event, 'additional')">Additional Information</button>
        </div>

        <div id="tourist" class="tabcontent active">
            <h2>Norway Tourist Visa Checklist </h2>
            <table>
                <tr>
                    <th width="30%">Documents</th>
                    <th width="70%">Description</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        Schengen application form (<a href="https://www.udi.no/en/" target="_blank">https://www.udi.no/en/</a>)<br>
                          <span class="special-doc">Login to see the Visa Application form and the Document Checklist.</span>
                        <?php if (isset($_SESSION['user_id'])): ?>
                        <!-- Special links for logged-in users -->
                        <a href="https://www.vfsglobal.com/denmark/pdf/application-for-schengen-visa_7e5a8e972b5146cf7a47be87a5be6cc02379d75cdb43bbe0183533f93287a741.pdf">Download Application Form</a>
                        <a href="https://visa.vfsglobal.com/one-pager/norway/cameroon/english/pdf/checklist-schengen-new.pdf">Download Document Checklist</a>
                        <?php else: ?>
                            <p>
                                If you have not registered on TeyzeeVisas, please <strong>Register Now</strong>.<br>
                                To <strong>Register</strong>, please click the Check Eligibility button:<br>
                                <a href="/php/payment.php?country=norway&amount=499" class="doc-link">Check Eligibility</a><br>
                                Pay ₹499 to check your visa eligibility and get free registration.<br>
                                After registration, you will receive your User ID and password on your registered Email ID.<br>
                                If you have already registered on TeyzeeVisas, please login:<br>
                                <a href="/php/login.php?country=norway" class="doc-link">Login</a>
                            </p>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>
                        Valid passport or official travel document and copy of all used pages.<br>
                        The passport must have at least 2 blank pages and be valid for at least 3 months past your departure date.
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>If you reside in another country than your own: Your valid residence permit</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Proof of accommodation during your entire visit (Hotel reservation / private arrangement)</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Copy of personal identification documentation (ID, birth certificate)</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Documents confirming your civil status (e.g. single, married, divorced, widow(er))</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>
                        Proof of financial situation and that you have means to support yourself during your visit.<br>
                        Original bank statements (company or individual) on the turnover during the last three months. In addition:<br>
                        <strong>If you are employed:</strong><br>
                        i. Your last three payslips<br>
                        ii. Your employment contract or recent employer statement.<br>
                        iii. Approval for holidays<br>
                        <strong>If you are a company owner or self-employed:</strong><br>
                        i. Certificate of registration of the company<br>
                        ii. Statement of taxes payment<br>
                        <strong>If you are retired:</strong><br>
                        i. Pension statements<br>
                        <strong>Other means:</strong><br>
                        i. Remittances, bank savings account<br>
                        ii. Credit card(s)<br>
                        iii. Regular income generated by property (contract of renting land/house, certificate of land use right etc.)
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>
                        <strong>If you are a minor (under 18 years old):</strong><br>
                        i. If you travel with one parent only: written consent from your other parent/guardian, and copy of his or her ID. Alternatively: documentation that one parent has custody alone.<br>
                        ii. If you travel alone: written consent of both parents or guardians having the care and custody of the applicant, copies of IDs for both parents/guardians, parents’ marriage certificate
                    </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>
                        Confirmed booking of roundtrip air ticket, with fixed travel dates of maximum 90 days.<br>
                        <em>Do not buy the ticket until visa has been granted.<br>
                        Note: The visa will be issued according to the dates on the booking.</em>
                    </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Travel medical insurance covering the entire period of intended stay.</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>
                        <strong>Optional:</strong> Power of Attorney for applicants who want the reference, or other person, to represent them.<br>
                        Can be downloaded from the embassy’s website.
                    </td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>
                        <strong>ADDITIONAL DOCUMENTS TO BE SUBMITTED FOR:</strong><br>
                        <u>VISIT FAMILY OR FRIEND</u><br>
                        1. Invitation, signed, from family member/friend stating the purpose of the visit<br>
                        2. Copy of relevant pages of family member’s passport (showing personal information, Norwegian work or residence permit)<br>
                        3. Documentation to prove family relationship with reference in Norway (i.e. birth-, marriage, divorce certificates, photos etc.)<br>
                        4. High quality copy of UDI sponsorship form signed by reference in Norway<br><br>
        
                        <u>BUSINESS TRIP</u><br>
                        1. Invitation, naming the applicant, from a firm or an authority in Norway<br>
                        2. Introduction letter from applicant’s employer in home country<br>
                        3. Documentation of an established business relationship<br>
                        4. Entry tickets for fair / congress / conference, if applicable<br><br>
        
                        <u>OFFICIAL, GOVERNMENT DELEGATION</u><br>
                        Note from the Consular Department of the Ministry of Foreign Affairs (compulsory only for Official- or Diplomatic passport holder)<br><br>
        
                        <u>OTHER</u><br>
                        1. Supporting letter explaining the purpose of your visit – if not clear from other documents<br><br>
        
                        <u>SPORT TRIALS / FOOTBALL</u><br>
                        1. Letter of introduction from the national sports association in your home country<br>
                        2. Letter of introduction from your club<br>
                        3. Invitation letter from tournament/event organizer/club in Norway<br><br>
        
                        <u>TOURISM</u><br>
                        1. Trip schedule / Detailed itinerary (sum up the duration, locations and transportation if travelling to different countries in Schengen area)
                    </td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>
                        <strong>Notes:</strong><br>
                        • I am aware that I can also submit additional documents, not listed above, if I think they are relevant for, or will assist with, the Embassy’s consideration.<br>
                        • I am aware that I can submit a letter to explain my relationship with the sponsor in Norway (family, business or cultural) if this is not clear from my other documents, or I do not have the relevant document.<br>
                        • I am aware that I will not be granted a visa with multiple entries if I have not documented a need for more than one entry.<br>
                        • By my signature, I certify that I have submitted all the documents checked in the list above, and that I have been informed that it is my responsibility to submit any missing documents within one week, by email or registered mail. VFS Global will not forward missing documents to the Embassy. Same should be mentioned on the letter, with the complete home address.
                    </td>
                </tr>
            </table>
        </div>

        <div id="business" class="tabcontent">
            <h2>Norway Business Visa Checklist</h2>
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
                            <a href="https://www.vfsglobal.com/denmark/pdf/application-for-schengen-visa_7e5a8e972b5146cf7a47be87a5be6cc02379d75cdb43bbe0183533f93287a741.pdf">Download Application Form</a>
                            <a href="https://visa.vfsglobal.com/one-pager/norway/cameroon/english/pdf/checklist-schengen-new.pdf">Download Document Checklist</a>
                            <?php else: ?>
                            <p>
                                If you have not registered on TeyzeeVisas, please <strong>Register Now</strong>.<br>
                                To <strong>Register</strong>, please click the Check Eligibility button:<br>
                                <a href="/php/payment.php?country=norway&amount=499" class="doc-link">Check Eligibility</a><br>
                                Pay ₹499 to check your visa eligibility and get free registration.<br>
                                After registration, you will receive your User ID and password on your registered Email ID.<br>
                                If you have already registered on TeyzeeVisas, please login:<br>
                                <a href="/php/login.php?country=norway" class="doc-link">Login</a>
                            </p>
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
                        relationship between the Indian and the Norwegian company 
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

        <div id="additional" class="tabcontent"><h2>This Information is available only to users who have logged in.</h2>             <?php if (isset($_SESSION['user_id'])): ?>
                        <!-- Special links for logged-in users -->
            <h2>Additional Information Required</h2>
            <table>
                <tr>
                    <th width="40%">How to fill the Visa form</th>
                    <th width="60%">Details</th>
                </tr>
                <tr>
                    <td>Are you visiting any other Schengen countries during your stay?</td>
                    <td>Check list of Schengen countries: Norway, Norway, Norway, Croatia, Norway, Norway,
                        Norway, France, Germany, Greece, Norway, Norway, Italy, Norway, Liechtenstein, Norway,
                        Norway, Norway, Norway, Norway, Poland, Portugal, Slovakia, Slovenia, Spain, Norway, and
                        Switzerland.</td>
                </tr>
                <tr>
                    <td>What is your first country of entry?</td>
                    <td>Check list of Schengen countries: Norway, Norway, Norway, Croatia, Norway, Norway,
                        Norway, France, Germany, Greece, Norway, Norway, Italy, Norway, Liechtenstein, Norway,
                        Norway, Norway, Norway, Norway, Poland, Portugal, Slovakia, Slovenia, Spain, Norway, and
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
            <?php endif; ?>
        </div>
    </div>

    <div class="note">
        <strong>Note:</strong><p style="text-align:justify; text-indent: 5%">Above information is compiled by TeyZee Visas team on a best effort basis. While every attempt is made for accuracy, we are not responsible for any errors or delayed updates.</p> <br>
        <p style="text-align:justify; text-indent: 5%">This checklist is provided for informational purposes only. Requirements may change, so it's recommended to verify the current requirements with the Embassy of Norway or consulate in your country before
        applying.</p>
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

                <!-- <div class="footer-col">
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
                </div> --
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


                    const message = `Kindly provide the latest ${templateName} for my visa application. In case you have not paid TeyZee Visa Fees, please make the visa service fees payment and get the receipt number. Link to Visa Fees Page for Norway- https://teyzee.com/France-visa-fees; please type the 7 digit receipt no in your next whatsapp message to us`;


                    const encodedMessage = encodeURIComponent(message);


                    const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodedMessage}`;
                    window.location.href = whatsappUrl;
                });
            });
        });
    </script>
</body>

</html>
