<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .bg-purple {
            background-color: #800080; /* Purple */
            color: #fff; /* White text */
        }
        .icon {
            font-size: 3rem; /* Adjust icon size */
            margin-bottom: 1rem; /* Spacing between icon and text */
        }
        .company-img {
            width: 100%; /* Ensure image takes full width of its container */
            height: auto; /* Maintain aspect ratio */
        }
        /* Style for Header and Footer */
        header, footer {
            background-color: #333; /* Dark Gray */
            color: #fff; /* White text */
            text-align: center;
            padding: 1rem 0;
        }
    </style>
</head>
<body>
<?php include '../includes/header.php'; ?>

<!-- Header -->
<header class="bg-purple">
    <h1>Privacy Policy</h1>
    <p>Protecting your privacy is our priority.</p>
</header>

<div class="container-fluid">
    <div class="row">
        <img src="../assets/images/19199499.jpg" class="img-fluid company-img" height="40vh" alt="Company Image">
    </div>
    <div class="row text-justifi p-5">
        <!-- Privacy Policy Content -->
        <p>Your privacy is important to us. It is Trip Bazaar's policy to respect your privacy regarding any information we may collect from you across our website, tripbazaar.com, and other sites we own and operate.</p>
        <!-- Include more privacy policy content here -->
    </div>
</div>

<!-- Privacy Policy Icons -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 text-center">
            <i class="fas fa-lock icon"></i>
            <h4>Data Security</h4>
            <p>We prioritize the security of your personal data.</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-shield-alt icon"></i>
            <h4>Data Protection</h4>
            <p>We implement measures to protect your information.</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-user-secret icon"></i>
            <h4>Confidentiality</h4>
            <p>Your information is kept confidential.</p>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include '../includes/footer.php'; ?>


<!-- Bootstrap JS (Optional) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
