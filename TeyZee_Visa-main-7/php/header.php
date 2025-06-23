<?php
//Enter Session Code here
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <link rel="stylesheet" href="https://www.teyzeevisas.com/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- Additional CSS files if needed -->
   <?php if (!empty($additional_css)): ?>
        <?php echo $additional_css; ?>
    <?php endif; ?> 
    
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i {
        w[l] = w[l] || [];
        w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' }); 
        var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; 
        j.async = true; 
        j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl; 
        f.parentNode.insertBefore(j, f); 
    })(window, document, 'script', 'dataLayer', 'GTM-TZGFW4FB');</script>
    <!-- End Google Tag Manager -->
    
    <!-- Additional JavaScript if needed -->
    <?php if (!empty($additional_js)): ?>
        <?php echo $additional_js; ?>
    <?php endif; ?>
    </html>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TZGFW4FB" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <header>
        <div class="container header-container">
            <div class="logo">
                <a href="https://www.teyzeevisas.com/">
                    <img src="https://www.teyzeevisas.com/VisaImages/destinations/Teyzee_logo_240w_500h.jpeg" alt="TeyZee Visas Logo">
                </a>
            </div>
            <div class="header-actions">
                <a href="https://wa.me/919029027420" class="contact"><i class="fab fa-whatsapp"></i> Chat with us</a>
                <a href="tel:919029027420" class="contact"><i class="fas fa-phone"></i> Call Us</a>
            </div>
                
        </div>
    </header>