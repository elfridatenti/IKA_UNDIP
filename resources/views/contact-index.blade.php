<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .contact-form {
            margin-top: 50px;
        }

        .contact-info {
            background: #f9f9f9;
            padding: 30px;
            border-radius: 5px;
            margin-bottom: 30px;
        }
    </style>
</head>
<body style="background: #ffffff">

    <!-- Navbar -->
    @include('partials.beranda_head')
    <!-- End Navbar -->

    <div class="site-wrap">

        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <!-- Navbar -->
        @include('partials.beranda_navbar')
        <!-- End Navbar -->

        <section class="slice slice-md bg-section-secondary" id="contactdiv">
            <div class="container-swiper-js-container">
                <div class="container">
                    <div class="row contact-form">
                        <div class="col-md-6">
                            <div class="contact-info">
                                <h2>Contact Information</h2>
                                <p>If you have any questions, feel free to reach out to us using the form below or through the following contact information:</p>
                                <ul class="list-unstyled">
                                    <li><strong>Address:</strong> 123 Main Street, Anytown, USA</li>
                                    <li><strong>Phone:</strong> (123) 456-7890</li>
                                    <li><strong>Email:</strong> contact@yourwebsite.com</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <form action="{{ route('contact.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" class="form-control" id="subject" name="subject" required>
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        @include('partials.beranda_footer')
        <!-- End Footer -->

    </div>

    <!-- Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @include('partials.beranda_script')
    <!-- End Script -->

</body>
</html>