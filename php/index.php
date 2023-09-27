<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-LY4+dLb0T3tA6F5/kJEDoF9zxfW9CE+WqT8K3/ENy+5skXQpzIU5A1LHnT7T2hco5a/FLXgIBz/j8xYtW9gQ2Fg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <title>Dashboard</title>
</head>
<body>
  <div class="container-fluid golden-background">
    <div class="row">
      <nav class="navbar navbar-expand-lg navbar-light bg-transparent w-100">
        <a class="navbar-brand" href="#">
        <!-- Adjust the path to your image -->
        <img src="../img/icon1.png" alt="Icon Image" class="icon-image"> 
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Team</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Item 1</a>
                <a class="dropdown-item" href="#">Item 2</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
            <li class="nav-item">
              <button class="nav-link login-button">LOGIN</button>
            </li>
            <li class="nav-item">
              <button class="nav-link register-button">REGISTER</button>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>

 <!-- Section 2 -->
 <div class="container-fluid golden-background">
    <div class="row">
      <div class="col-md-12">
        <div class="section-content">
        <div class="section-content text-center">
          <h2><strong>The Best Solution for Your Business</strong></h2>
          <div class="animated-images">
            <!-- Animated images go here -->
            <img src="../img/image1.jpg" alt="Image 1" class="middle-image">
            <img src="../img/image2.jpg" alt="Image 2" class="bottom-left-image">
            <img src="../img/image3.jpg" alt="Image 3" class="bottom-right-image">
            <!-- Add more images as needed -->
          </div>
          <!-- Add image links if required -->
        </div>
      </div>
    </div>
  </div>

  <!-- Section 3 -->
  <div class="container-fluid golden-background">
    <div class="row">
      <div class="col-md-12">
        <div class="section-content text-center">
          <h2><strong>Our Services</strong></h2>
          <div id="serviceCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#serviceCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#serviceCarousel" data-slide-to="1"></li>
              <li data-target="#serviceCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="carousel-item-content">
                  <img src="../img/icon2.png" alt="Access to Finance">
                  <h3>Access to Finance</h3>
                  <p>Supports to find appropriate financial solutions from the right place.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="carousel-item-content">
                  <img src="../img/icon3.png" alt="Policy Support">
                  <h3>Policy Support</h3>
                  <p>A platform to lobby issues, derive solutions, and enable speedy implementation.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="carousel-item-content">
                  <img src="../img/icon4.png" alt="Market Facilitation">
                  <h3>Market Facilitation</h3>
                  <p>Get to your untapped markets, exploit and cater.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#serviceCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#serviceCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- Section 4 -->
  <div class="container mt-5">
    <div class="row">
      <!-- Card 1 -->
      <div class="col-lg-4 mb-4">
        <div class="card">
          <img src="../img/card1_image.jpg" class="card-img-top" alt="Card 1 Image">
          <div class="card-body">
            <h5 class="card-title font-weight-bold text-center">Entrepreneur</h5>
            <p class="card-text font-weight-bold text-center">Be a Part of ...</p>
            <a href="#" class="btn btn-primary btn-round center-btn">Register Now</a>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-lg-4 mb-4">
        <div class="card">
          <img src="../img/card2_image.jpg" class="card-img-top" alt="Card 2 Image">
          <div class="card-body">
            <h5 class="card-title font-weight-bold text-center">Award Ceremony</h5>
            <p class="card-text font-weight-bold text-center">Learn more</p>
            <a href="#" class="btn btn-primary btn-round center-btn">Learn More</a>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-lg-4 mb-4">
        <div class="card">
          <img src="../img/card3_image.jpg" class="card-img-top" alt="Card 3 Image">
          <div class="card-body">
            <h5 class="card-title font-weight-bold text-center">Entrepreneur</h5>
            <p class="card-text font-weight-bold text-center">Be a Part of ...</p>
            <a href="#" class="btn btn-primary btn-round center-btn">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Section 5 -->
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-6 mb-4">
        <div class="table-content">
          <h2 class="font-weight-bold">What we do</h2>
          <p>We provide innovative solutions to drive your business forward and achieve your goals.</p>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <!--  video player with custom styling -->
        <div class="video-container">
          <video controls class="custom-video">
            <source src="../vid/sample1.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </div>
  </div>
 <!-- Section 6 -->
 <div class="container mt-5">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-box">
          <div class="left-section">
            <div class="section-content">
              <h2 class="font-weight-bold">News and Publications</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vehicula urna ut purus ultrices,
                vitae lacinia turpis vehicula.
              </p>
              <a href="#" class="btn btn-primary">See More</a>
            </div>
            <div class="section-content">
              <h5>Latest News</h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan leo nec magna scelerisque
                aliquam.
              </p>
              <a href="#" class="btn btn-secondary">Continue Reading</a>
            </div>
            <div class="section-content">
              <h5>Employment Opportunities</h5>
              <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.
              </p>
              <a href="#" class="btn btn-secondary">Continue Reading</a>
            </div>
            <div class="section-content">
              <h5>Currently Held Meetings</h5>
              <p>
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              </p>
              <a href="#" class="btn btn-secondary">Continue Reading</a>
            </div>
          </div>
          <div class="right-section">
            <div id="carouselExample" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../img/news1.jpg" class="d-block w-100" alt="News 1 Image">
                </div>
                <div class="carousel-item">
                  <img src="../img/news2.jpg" class="d-block w-100" alt="News 2 Image">
                </div>
                <div class="carousel-item">
                  <img src="../img/news3.jpg" class="d-block w-100" alt="News 3 Image">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Gallery Section -->
<div class="container mt-5">
    <div class="section-header">
      <h2 class="font-weight-bold">Gallery</h2>
    </div>
    <div class="gallery">
      <div class="gallery-item">
        <img src="../img/gallery1.jpg" alt="Gallery Image 1">
      </div>
      <div class="gallery-item">
        <img src="../img/gallery2.jpg" alt="Gallery Image 2">
      </div>
      <div class="gallery-item">
        <img src="../img/gallery3.jpg" alt="Gallery Image 3">
      </div>
      <!-- Add more gallery items as needed -->
    </div>
  </div>
  <!-- Map and Links Section -->
  <div class="container mt-5">
    <div class="section-header">
      <h2 class="font-weight-bold">Contact Information</h2>
    </div>
    <div class="contact-section">
      <div class="map">
       
      <!-- Embedded Google Maps (Replace with your Google Maps embed code) -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3083.696981028371!2d-122.0839976846564!3d37.38687957982282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f7e2e8e3e0663%3A0x8b4f6c44834f81ad!2sGolden%20Gate%20Bridge!5e0!3m2!1sen!2sus!4v1612354516851!5m2!1sen!2sus" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
      <div class="contact-links">
        <h5>Contact Us</h5>
        <ul>
          <li><a href="#">Phone: 123-456-7890</a></li>
          <li><a href="#">Email: example@example.com</a></li>
          <li><a href="#">Address: 1234 Street, City, State</a></li>
          <!-- Add more contact links as needed -->
        </ul>
      </div>
    </div>
  </div>
<!-- Footer Section -->
<div class="footer mt-5" style="background-color: #fff7d1;">
    <div class="container">
      <table class="footer-table">
        <tr>
          <td>
            <div class="footer-icon">
              <img src="../img/icon.png" alt="Icon">
            </div>
          </td>
          <td>
            <div class="footer-column">
              <h6>About Us</h6>
              <ul>
                <li>Overview</li>
                <li>Our Strength</li>
                <li>Programs</li>
                <li>Techno Entrepreneurship</li>
                <li>Enterprise Forums</li>
                <li>Award Ceremonies</li>
              </ul>
            </div>
          </td>
          <td>
            <div class="footer-column">
              <h6>Regional Entrepreneurship</h6>
              <ul>
                <li>Development Programs</li>
                <li>Access to Finance</li>
                <li>SME Policy Framework</li>
                <li>Annual Reports</li>
                <li>Gallery</li>
              </ul>
            </div>
          </td>
          <td>
            <div class="footer-column">
              <h6>Event Images & Videos</h6>
              <ul>
                <li>Research & Development</li>
                <li>News</li>
                <li>Event</li>
              </ul>
            </div>
          </td>
          <td>
            <div class="footer-column">
              <h6>FAQ</h6>
              <ul>
                <li>Incubator</li>
                <li>Contact Us</li>
                <li>Brain into Business</li>
                <li>Research Commercialization</li>
              </ul>
            </div>
            <div class="footer-social-icons">
      <a href="#" target="_blank" class="footer-icon"><i class="fab fa-facebook"></i></a>
      <a href="#" target="_blank" class="footer-icon"><i class="fab fa-linkedin"></i></a>
      <a href="#" target="_blank" class="footer-icon"><i class="fab fa-twitter"></i></a>
      <a href="#" target="_blank" class="footer-icon"><i class="fab fa-youtube"></i></a>
      <a href="#" target="_blank" class="footer-icon"><i class="fab fa-instagram"></i></a>
      <!-- Add more social icons as needed -->
    </div>
          </td>
        </tr>
      </table>
    </div>
  </div>
   <!-- Copyright Banner and Company Icons -->
   <div class="copyright-banner">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <p class="copyright-text">© 2023 Your Company. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6">
          <div class="company-icons">
            <img src="../img/company_icon2.png" alt="Company Icon 1">
            <img src="../img/company_icon1.png" alt="Company Icon 2">
            <!-- Add more company icons as needed -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>