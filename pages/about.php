<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
    <h1>About Us</h1>
    <p>Tripbazzar provide a best tour and travell packages</p>
</header>

<div class="container-fluid">
    <div class="row">
        <img src="../assets/images/2595.jpg" class="img-fluid company-img" alt="Company Image">
    </div>
    <div class="row text-justifi p-5">
        <p>Trip Bazaar Tour and Travel Company is a renowned travel agency located in Dehradun, India. We specialize in providing a wide range of travel services to cater to the diverse needs and preferences of our clients. With our extensive experience in the travel industry, we aim to deliver exceptional and memorable travel experiences to our customers.<br>
          At Trip Bazaar, we understand that each traveler has unique requirements and expectations. Therefore, we offer customized travel solutions to ensure that every trip is tailored to suit individual preferences. Whether you are planning a leisure vacation, a business trip, or an adventure tour, our team of dedicated professionals is committed to curating the perfect itinerary for you.<br>
          Our services encompass various aspects of travel planning and execution. We offer assistance in flight bookings, hotel accommodations, transportation arrangements, visa and documentation support, travel insurance, and much more. Our team works diligently to ensure that every detail is taken care of, allowing you to relax and enjoy your journey without any worries.<br>
          One of our core values at Trip Bazaar is customer satisfaction. We prioritize the needs of our clients and strive to provide top-notch services that exceed their expectations. Our knowledgeable and friendly staff is available round the clock to address any queries or concerns you may have during your trip. We believe in building long-lasting relationships with our customers, and their positive feedback and repeat business serve as a testament to our commitment to excellence.<br>
          In addition to individual travel arrangements, we also organize group tours and packages for various destinations. Whether it’s a family vacation, a corporate retreat, or a special interest group tour, our team can create tailor-made itineraries to suit your group’s requirements. We handle all the logistics and ensure that your group experiences a seamless and enjoyable journey together.<br>
          At Trip Bazaar, we are passionate about exploring the world and creating unforgettable memories. We continuously strive to offer innovative travel solutions and stay updated with the latest trends and destinations. With our expertise and extensive network of partners, we aim to provide our clients with unparalleled travel experiences that are both enriching and fulfilling.</p>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 text-center">
            <i class="fas fa-user-circle icon"></i>
            <h4>Our Team</h4>
            <p>We have a dedicated team of professionals.</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-cogs icon"></i>
            <h4>Our Mission</h4>
            <p>Our mission is to provide top-notch services.</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-heart icon"></i>
            <h4>Our Values</h4>
            <p>We believe in integrity, innovation, and excellence.</p>
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
