<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Reservation System - Contact</title>
    <?php require('include/links.php'); ?>
</head>

<body class="bg-light">

    <!-- Header -->
    <?php require('include/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Contact Us</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. <br>
            Cum vero, a corrupti expedita suscipit aspernatur deleniti itaque. Quae, quam placeat?
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe class="w-100 rounded mb-4" height="320px"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30879.702079736824!2d120.97371363825698!3d14.658054878114704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b65265f54e8b%3A0x8599f4a6c3e70871!2sThe%20B%20Hotel%20Quezon%20City!5e0!3m2!1sen!2sph!4v1666418563131!5m2!1sen!2sph"
                        loading="lazy"></iframe>
                    <h5>Address</h5>
                    <a href="https://goo.gl/maps/52nwccfXtXwSWX687" target="_blank"
                        class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-geo-alt-fill"></i> Rastatel, Hotel
                    </a>
                    <h5 class="mt-4">Call Us</h5>
                    <a href="tel: +921327972234" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>+921327972234
                    </a>
                    <br>
                    <h5>Call Us</h5>
                    <a href="tel: +921327972234" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>+921327972234
                    </a>
                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: jasper.macaraeg42@gmail.com"
                        class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-envelope-fill"></i>
                        jasper.macaraeg42@gmail.com</a>
                    <h5 class="mt-4">Follow Us</h5>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-twitter me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-facebook me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5">
                        <i class="bi bi-instagram me-1"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form action="">
                        <h5>Send Us a Message</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500">Name</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500">Email</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500">Subject</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500">Message</label>
                            <textarea class="form-control shadow-none" rows="10" style="resize: none;"></textarea>
                        </div>
                        <button type="submit" class="btn text-white custom-bg mt-3">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php require('include/footer.php'); ?>

</body>

</html>