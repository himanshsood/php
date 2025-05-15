<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oriental Outsourcing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-brand img {
            height: 40px;
        }
        #about img {
        border: 1px solid #dee2e6;
        border-radius: 5px;
    }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light m-3 mx-5 mb-0">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://orientaloutsourcing.com/wp-content/uploads/2020/12/logo-dark.png" alt="Oriental Outsourcing">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <!-- Home Section -->
        <section id="home" class="py-3 text-center">
            <h1>Welcome to Oriental Outsourcing Consultants Private Limited</h1>
        </section>

        <!-- About Section -->
    <section id="about" class="py-5">
        <div class="row">
            <div class="col-md-3 h-100">
                <img src="https://orientaloutsourcing.com/wp-content/uploads/2024/01/20YEARS1.png" 
                     alt="20 Years" 
                    class="img-fluid border border-1 h-100 w-100 object-fit-cover">
            </div>
            <div class="col-md-9">
                <h2 class="mb-0">About Us</h2>
                <p>Oriental Outsourcing stands out as a prominent software development company that specializes in providing customized digital solutions to businesses worldwide. Our dedicated team comprises 50+ full-stack developers, designers, and innovators who have successfully designed and developed over 100 digital solutions across diverse industry verticals. By fostering close collaboration among our designers, and full-stack developers, we engage in collective research and development endeavors to create innovative applications and solutions that align seamlessly with the evolving technological landscape.</p>
                <p class="my-0">As a technology pioneer, Oriental Outsourcing possesses extensive knowledge and expertise in web development, app development, UI/UX design, and website maintenance. We are committed to assisting companies in conquering their most intricate technological challenges and driving their business growth.</p>
            </div>
        </div>
    </section>
        <!-- Services Section -->
        <section id="services" class="py-2 px-2">
            <h2 class="mb-2">Services</h2>
            <div class="row gy-2 gx-4">
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Web Development</h5>
                            <p class="card-text">Transform your website into a viable source of traffic and revenue with our state-of-the-art web development services.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">UI/UX Design</h5>
                            <p class="card-text">Develop the products you've visualized with the help of our experienced designers. We rely on proven standards and twenty years of experience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Mobile App Development</h5>
                            <p class="card-text">Meet your demanding timeframes with our mobile app development services that combine a mobile platform, custom development, and cutting-edge technology.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">E-Commerce Development</h5>
                            <p class="card-text">Boost the performance and efficiency of your store with the help of our all-inclusive eCommerce development services & solutions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Digital Marketing</h5>
                            <p class="card-text">Craft a large customer flow towards your brand with our digital marketing services. Our experts excel in SEO, PPC, SMO, & much more to boost website traffic & gain more ROI.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">QA And Testing</h5>
                            <p class="card-text">Automated software testing, established standards, simplified Q&A testing lifecycle - use our testing services to ensure the efficient functioning of your software services.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer class="text-center py-3">
        <div class="container">
            <p class="mb-0">© <?php echo date('Y'); ?> Oriental Outsourcing Consultants Private Limited. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>