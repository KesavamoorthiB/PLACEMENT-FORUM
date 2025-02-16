<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Andada+Pro:ital@1&display=swap" rel="stylesheet">
    <!-- Favicons -->
    <link href="img/logo.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="assets/css/variables.css" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- custom css -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/AdminLTE.min.css">
    <link rel="stylesheet" href="css/_all-skins.min.css">
    <link rel="stylesheet" href="assets/css/chat.css">
    <title>Login</title>
</head>

<body>


    <?php

    include 'php/header.php'

    ?>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24">
            <div class="flex flex-wrap -m-4">
                <div class="p-4 md:w-1/3">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="assets/img/login/21.jpg" alt="blog">
                        <div class="p-6">
                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Are you a </h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Students Portal</h1>
                            <p class="leading-relaxed mb-3">Students can login using their credentials. New students can register.</p>
                            <div class="flex items-center flex-wrap ">
                                <a href="login-candidates.php" class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Login/Register
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/3 ">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="assets/img/login/19.jpg" alt="blog">
                        <div class="p-6">
                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Are you from the</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Company's Portal</h1>
                            <p class="leading-relaxed mb-3">The Company Representative can log into their account from here.</p>
                            <div class="flex items-center flex-wrap">
                                <a href="login-company.php" class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Login/Register
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>

                                    </svg>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/3 bg-gray-800" style="font-family: 'Andada Pro', serif; color:#d1b8c6">
                    <ol list-style:upper-roman>
                        <li>எண்ணிய முடிதல் வேண்டும்
                            நல்லவை   எண்ணல் வேண்டும்</li>
                        <br>
                        <li>திண்ணிய நெஞ்சம் வேண்டும் 
                            தெளிந்த நல்லறிவு வேண்டும்</li>
                        <br>
                        
                        <li style="text-align:right">- மகாகவி பாரதியார்</li>

                    </ol>
                </div>
            </div>

        </div>
        <div>


        </div>
    </section>


    <?php
    include 'php/footer.php'
    ?>
</body>

</html>