
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>China Visa Checklist</title>
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
                <a href="https:www.teyzeevisas.com/">
                    <img src="https://teyzeevisas.com/VisaImages/destinations/Teyzee_logo_240w_500h.jpeg" alt="TeyZee Visas Logo">
                </a>

            </div>
            <div class="header-actions">
                <a href="https:wa.me/919029027420" class="contact"><i class="fab fa-whatsapp"></i> Chat with us</a>
                <a href="tel:+919029027420" class="contact"><i class="fas fa-phone"></i> Call Us</a>
                <a href="#" class="login-btn">Login</a>
            </div>
        </div>
    </header>-->
    <h1>China Schengen Visa Checklist</h1>

    <div class="tab-container">
        <div class="tab">
            <button class="tablinks active" onclick="openTab(event, 'tourist')">Tourist Visa</button>
            <button class="tablinks" onclick="openTab(event, 'business')">Business Visa</button>
            <button class="tablinks" onclick="openTab(event, 'additional')">Additional Information</button>
        </div>

        <div id="tourist" class="tabcontent active">
            <h2>China Tourist Visa Checklist</h2>
            <table>
                <tr>
                    <th width="30%">Documents</th>
                    <th width="70%">Description</th>
                </tr>
                <tr>
                    <td>Application form</td>
                    <td>Two Indian Government visa application forms duly filled in online.<br/>
                    Two hand filled reference form for Chinese (in block letters, photocopies not accepted.)<br>
                    <span class="special-doc">Login to see the Visa Application form and the Document Checklist.</span>
                            <?php if (isset($_SESSION['user_id'])): ?>
                        <!-- Special links for logged-in users -->
                        <a href="https://visaoffice.eu/media/uploads/document_examples/Order_forms/china/data_collect_form_china.pdf">Download Application Form</a>
                        <a href="https://www.visaforchina.cn/YYC3_EN/qianzhengyewu/jichuzhishi/changjianwenti/336247379642683392.html">Download Document Checklist</a>
                        <?php else: ?>
                            <p>
                                If you have not registered on TeyzeeVisas, please <strong>Register Now</strong>.<br>
                                To <strong>Register</strong>, please click the Check Eligibility button:<br>
                                <a href="/php/payment.php?country=china&amount=499" class="doc-link">Check Eligibility</a><br>
                                Pay ₹499 to check your visa eligibility and get free registration.<br>
                                After registration, you will receive your User ID and password on your registered Email ID.<br>
                                If you have already registered on TeyzeeVisas, please login:<br>
                                <a href="/php/login.php?country=china" class="doc-link">Login</a>
                            </p>
                        <?php endif; ?>
                
                </td>
                </tr>
                <tr>
                    <td>Passport</td>
                    <td>Original passport valid for at least 6 months from entry, with a minimum of two blank visa pages.</td>
                </tr>
                <tr>
                    <td>Passport Copies</td>
                    <td>Photocopy of the passport’s information page and any previous Chinese visa pages (if applicable).</td>
                </tr>
                
                <tr>
                    <td>Photographs</td>
                    <td>Two recent colour passport-size photos (48 × 33 mm), full-face, bare-head, white background.</td>
                </tr>
                <tr>
                    <td>Travel Tickets & Itinerary</td>
                    <td>Confirmed round-trip flight bookings and a brief travel itinerary in China.</td>
                </tr>
                <tr>
                    <td>Accommodation Proof</td>
                    <td>Hotel reservation confirmation for the duration of the stay, or an invitation letter if staying with a host.</td>
                </tr>
                <tr>
                    <td>Cover Letter</td>
                    <td>Personal letter stating purpose of visit, intended travel dates and travel plan.</td>
                </tr>
                <tr>
                    <td>Proof of Funds</td>
                    <td>Evidence of financial capability such as bank statements or salary slips.</td>
                </tr>
                <tr>
                    <td>Legal Stay Proof (if applicable)</td>
                    <td>Original and copy of valid residence permit or visa if applying while residing in a third country.</td>
                </tr>
                <tr>
                    <td>Previous Passports (if applicable)</td>
                    <td>Copies of expired passports or previously issued Chinese passports/visas from within the last five years.</td>
                </tr>
                <tr>
                    <td>Fingerprint Scan</td>
                    <td>Ten-finger biometric data collection at the visa centre (exemptions for ages under 14 or over 70 or recent scan).</td>
                </tr>
                <tr>
                    <td>Visa Fee</td>
                    <td>Payment of visa fee and service charge in cash at the visa centre; fees vary by entry type.</td>
                </tr>
                <tr>
                    <td>Additional Requirements</td>
                    <td>Authorities may request extra documents or a personal interview based on applicant’s circumstances.</td>
                </tr>
            </table>
        </div>

        <div id="business" class="tabcontent">
            <h2>China Business Visa Checklist</h2>
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
                        <a href="https://visaoffice.eu/media/uploads/document_examples/Order_forms/china/data_collect_form_china.pdf">Download Application Form</a>
                        <a href="https://www.visaforchina.cn/YYC3_EN/qianzhengyewu/jichuzhishi/changjianwenti/336247379642683392.html">Download Document Checklist</a>
                        <?php else: ?>
                            <p>
                                If you have not registered on TeyzeeVisas, please <strong>Register Now</strong>.<br>
                                To <strong>Register</strong>, please click the Check Eligibility button:<br>
                                <a href="/php/payment.php?country=china&amount=499" class="doc-link">Check Eligibility</a><br>
                                Pay ₹499 to check your visa eligibility and get free registration.<br>
                                After registration, you will receive your User ID and password on your registered Email ID.<br>
                                If you have already registered on TeyzeeVisas, please login:<br>
                                <a href="/php/login.php?country=china" class="doc-link">Login</a>
                            </p>
                        <?php endif; ?></td>
                </tr>  
                <tr>
                    <td>Passport</td>
                    <td>Original passport valid for at least 6 months beyond intended stay with at least two blank visa pages.</td>
                </tr>
                <tr>
                    <td>Passport Copy</td>
                    <td>Photocopy of the passport's data page (signed).</td>
                </tr>
                <tr>
                    <td>Visa Application Form</td>
                    <td>Fully completed, printed, and signed visa application form (COVA).</td>
                </tr>
                <tr>
                    <td>Photograph</td>
                    <td>One recent passport-style photo (48 × 33 mm) on white background; full-face, no glasses/headwear.</td>
                </tr>
                <tr>
                    <td>Invitation Letter</td>
                    <td>Official invitation from a registered Chinese company or trade fair organizer, stating details of visit, host information, etc.</td>
                </tr>
                <tr>
                    <td>Business Cover Letter</td>
                    <td>Letter from your employer or company on letterhead introducing the applicant and purpose of travel.</td>
                </tr>
                <tr>
                    <td>Proof of Residency</td>
                    <td>Copy of current address — e.g., driver’s license, utility bill, or government-issued ID.</td>
                </tr>
                <tr>
                    <td>Company Documents</td>
                    <td>Copy of inviting company’s business license or registration certificate.</td>
                </tr>
                <tr>
                    <td>Flight Itinerary</td>
                    <td>Confirmed round-trip flight bookings showing entry and exit from China.</td>
                </tr>
                <tr>
                    <td>Accommodation Booking</td>
                    <td>Hotel reservation or accommodation confirmation for the duration of the stay.</td>
                </tr>
                <tr>
                    <td>Proof of Financial Means</td>
                    <td>Recent bank statements or salary slips to demonstrate financial capability.</td>
                </tr>
                <tr>
                    <td>Visa Fee</td>
                    <td>Payment of applicable visa application fee, as per nationality and entry type.</td>
                </tr>
                <tr>
                    <td>Special Cases</td>
                    <td>
                    Additional documents may be required for specific categories, such as:
                    <ul>
                        <li>Former Chinese nationals or those of Chinese descent</li>
                        <li>NGO/non-profit employees</li>
                        <li>Applicants with previous Chinese visas</li>
                    </ul>
                    </td>
                </tr>
                <tr>
                    <td>Optional Extensions</td>
                    <td>Business visa can be extended inside China if longer stay is needed.</td>
                </tr>
                <tr>
                    <td>Disclaimer</td>
                    <td>Authorities may request further documents or interviews as needed, and determine visa validity and number of entries.</td>
                </tr>
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
                        Finland, China, Germany, Greece, Hungary, Iceland, Italy, Latvia, Liechtenstein, Lithuania,
                        Luxembourg, Malta, Netherlands, Norway, Poland, Portugal, Slovakia, Slovenia, Spain, Sweden, and
                        Switzerland.</td>
                </tr>
                <tr>
                    <td>What is your first country of entry?</td>
                    <td>Check list of Schengen countries: Austria, Belgium, Czech Republic, Croatia, Denmark, Estonia,
                        Finland, China, Germany, Greece, Hungary, Iceland, Italy, Latvia, Liechtenstein, Lithuania,
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
            <?php endif; ?>
        </div>
    </div>

    <div class="note">
        <strong>Note:</strong> This checklist is provided for informational purposes only. Requirements may change, so
        it's recommended to verify the current requirements with the  embassy or consulate in your country before
        applying.
    </div>

      <?php include 'footer.php'; ?>
     <!--<footer>
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
                     <a href="https:wa.me/919029027420" class="whatsapp-button"><i class="fab fa-whatsapp"></i> Chat
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
                         <li><a href="https:www.facebook.com/profile.php?id=61575094024472"><i
                                     class="fab fa-facebook"></i> Facebook</a></li>
                         <li>
                             <a href="https:x.com/TeyzeeVisas" target="_blank"
                                 style="text-decoration: none; display: inline-flex; align-items: center;">
                                 <span
                                     style="font-weight: bold; font-size: 10px; background-color: rgb(255, 255, 255); color: rgb(160, 151, 151); padding: 0px 4px; border-radius: 8px;">
                                     𝕏
                                 </span>
                                 <span style="margin-left: 6px; color: rgb(255, 255, 255);">X</span>
                             </a>
                         </li>
                         <li><a href="https:www.instagram.com/teyzee_visas/"><i class="fab fa-instagram"></i>
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
                     <a href="/html/china_customer.html">China</a> •
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
     </footer>-->
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

         //JavaScript to redirect users to WhatsApp with template request message
        document.addEventListener('DOMContentLoaded', function () {
             //Select all download links with the class "doc-link"
            const downloadLinks = document.querySelectorAll('.doc-link');

            // WhatsApp number - Replace with your actual number
            const whatsappNumber = "919892527420";  //Format: country code without + followed by number
               
            // Loop through each download link and modify its behavior
            downloadLinks.forEach(function (link) {
                link.addEventListener('click', function (e) {
                    e.preventDefault(); // Prevent the default download behavior

                     //Get the template type from the link
                    const templatePath = link.getAttribute('href').split('/').pop();
                    const templateName = templatePath.replace('.doc', '').replace(/_/g, ' ');


                    const message = `Kindly provide the latest ${templateName} for my visa application. In case you have not paid TeyZee Visa Fees, please make the visa service fees payment and get the receipt number. Link to Visa Fees Page for China - https:teyzee.com/China-visa-fees; please type the 7 digit receipt no in your next whatsapp message to us`;


                    const encodedMessage = encodeURIComponent(message);


                    const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodedMessage}`;
                    window.location.href = whatsappUrl;
                });
            });
        });
    </script>
</body>

</html>
