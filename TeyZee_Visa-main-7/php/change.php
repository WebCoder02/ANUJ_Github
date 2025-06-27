<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hungary Visa Checklist</title>
    <link rel="stylesheet" href="document.css">
    <link rel="stylesheet" href="Country_page.css">
    <link rel="stylesheet" href="styles.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->
</head>

<body>
    <!-- php incnlude 'header.php'; -->
    <?php
// Start the session
session_start();

// Check if user is already logged in and has a valid session
if (isset($_SESSION['user']) && isset($_SESSION['session_token'])) {
    $email = $_SESSION['user'];
    $sessionToken = $_SESSION['session_token'];
    
    // If using database-based authentication, verify the session
    try {
        require_once 'database.php';
        require_once 'User.php';
        
        $database = new Database();
        $db = $database->getConnection();
        $user = new User($db);
        
        // Verify session is still valid
        $sessionData = $user->validateSession($sessionToken);
        if ($sessionData && $sessionData['email'] === $email) {
            // User is logged in with valid session, redirect to payment
            header('Location: payment.php');
            exit;
        } else {
            // Invalid session, clear it
            session_destroy();
            session_start();
        }
    } catch (Exception $e) {
        // Error checking session, clear it to be safe
        session_destroy();
        session_start();
    }
}

// Handle success messages from login redirects
$loginSuccess = isset($_GET['login']) && $_GET['login'] === 'success';
$registrationSuccess = isset($_GET['registration']) && $_GET['registration'] === 'success';
?>
// Login button for header.php
<div class="header-actions">
                <?php if ($isLoggedIn): ?>
                    <!-- User is logged in - show user menu -->
                    <div class="user-menu">
                        <span class="user-greeting">Welcome, <?php echo htmlspecialchars($userName); ?>!</span>
                        <a href="/php/dashboard.php" class="dashboard-btn"><i class="fas fa-user"></i> Dashboard</a>
                        <a href="/php/logout.php" class="contact"><i class="fas fa-user-circle"></i> Logout</a>
                    </div>
                    
                <?php else: ?>
                    <!-- User is not logged in - show login button -->
                    <a href="https://www.teyzeevisas.com/payments/login.php" class="contact"><i class="fas fa-user-circle"></i> Login</a>
                <?php endif; ?> 