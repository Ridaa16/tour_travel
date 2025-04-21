<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Information</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <style>
    /* Additional CSS styles */
    /* You can add your custom styles here */
    .bg-purple {
      background-color: #800080; /* Purple */
      color: #fff; /* White text */
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
    /* Custom CSS for purple icons */
    .purple-icon {
      color: #800080; /* Purple */
    }
    .colmtxt{
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 51px;
    padding-left: 71px;
    font-size: 25px;
    padding-top:40px;
}
  </style>
</head>
<body>
<?php include '../includes/header.php'; ?>
<header class="bg-purple">
    <h1>Contact Us</h1>
    <p>Feel Free to contact us Tripbazzar</p>
</header>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-6">
      <!-- Image column -->
      <img src="../assets/images/Call center manager taking calls.jpg" class="img-fluid company-img" alt="Call center manager taking calls">
    </div>
    <div class="col-md-6 colmtxt">
      <!-- Contact information column -->
      <ul class="list-unstyled">
        <li><strong>Address:</strong> 123 Main St, City, Country</li>
        <li><strong>Phone:</strong> +123-456-7890</li>
        <li><strong>Email:</strong> example@example.com</li>
        <li><strong>Social Links:</strong>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook purple-icon"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter purple-icon"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin purple-icon"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram purple-icon"></i></a></li>
            <!-- Add more social links as needed -->
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <!-- 24 Hour Support Icons Row -->
  <div class="row mt-5">
    <div class="col-md-3">
      <div class="text-center">
        <i class="fas fa-phone fa-3x purple-icon"></i>
        <h4>24/7 Support</h4>
      </div>
    </div>
    <div class="col-md-3">
      <div class="text-center">
        <i class="fab fa-whatsapp fa-3x purple-icon"></i>
        <h4>WhatsApp</h4>
      </div>
    </div>
    <div class="col-md-3">
      <div class="text-center">
        <i class="far fa-envelope fa-3x purple-icon"></i>
        <h4>Email</h4>
      </div>
    </div>
    <div class="col-md-3">
      <div class="text-center">
        <i class="fas fa-comments fa-3x purple-icon"></i>
        <h4>Live Chat</h4>
      </div>
    </div>
  </div>
  <!-- Map Embedding -->
  <div class="row mt-5">
    <div class="col-md-12">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3057.5061898226836!2d-74.0071840846213!3d40.70757967932762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2599c046be2ab%3A0x4ef55ba75b3a68de!2sEmpire%20State%20Building!5e0!3m2!1sen!2sus!4v1633115398962!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
</div>
<?php include '../includes/footer.php'; ?>
<!-- Bootstrap JS (optional) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
