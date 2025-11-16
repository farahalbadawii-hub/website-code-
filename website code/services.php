<?php
include 'connect.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Blush & Bloom Salon</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="services.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <nav class="navbar">
            <ul>
           
                <li class="nc"><a href="home.php" class="items">Home</a></li>
                <li class="nc"><a href="services.php" class="items">Services</a></li>
                <li class="nc"><a href="booking.php" class="items">Book</a></li>
                <li class="nc"><a href="cart.php" class="items">Cart</a></li>
                <?php if(isset($_SESSION['email'])): ?>
                    <li class="nc"><a href="signout.php" class="items">Sign Out</a></li>
                <?php else: ?>
                    <li class="nc"><a href="login.php" class="items">Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
    <main>
    <section>
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img src="resourses/photos/massage therapy.jpg" class="d-block w-100" alt="Massage Therapy">
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="resourses/photos/comfort core.jpg" class="d-block w-100" alt="Comfort Core">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="resourses/photos/nail bar 2.jpg" class="d-block w-100" alt="Nail Bar">
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="resourses/photos/rest room.jpg" class="d-block w-100" alt="Rest Room">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="resourses/photos/salonpic.jpg" class="d-block w-100" alt="Salon">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>
            
            <section class="card-content">
                <div class="cards">
                    <div class="card">
                        <img src="resourses/photos/hair cut.jpg" alt="Hair Cut" class="card-img">
                        <div class="card-body">
                            <h2 class="card-title">Hair Cut</h2>
                            <p class="card-description">10 JD</p>
                        </div>
                    </div>

                    <div class="card">
                        <img src="resourses/photos/makeup.jpg" alt="Makeup" class="card-img">
                        <div class="card-body">
                            <h2 class="card-title">Makeup</h2>
                            <p class="card-description">50 JD</p>
                        </div>
                    </div>

                    <div class="card">
                        <img src="resourses/photos/hair style.jpg" alt="Hair Style" class="card-img">
                        <div class="card-body">
                            <h2 class="card-title">Hair Style</h2>
                            <p class="card-description">50 JD</p>
                        </div>
                    </div>

                    <div class="card">
                        <img src="resourses/photos/nails.jpg" alt="Nails" class="card-img">
                        <div class="card-body">
                            <h2 class="card-title">Nails</h2>
                            <p class="card-description">18 JD</p>
                        </div>
                    </div>

                    <div class="card">
                        <img src="resourses/photos/massage therapy.jpg" alt="Massage Therapy" class="card-img">
                        <div class="card-body">
                            <h2 class="card-title">Massage</h2>
                            <p class="card-description">30 JD</p>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        </section>
    </main>
    <footer class="footer">
        <p>Copyright © 2024 B&B Salon</p>
    </footer>
</body>
</html>