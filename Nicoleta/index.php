<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Clinica D.A.M.E Landing Page</title>
    <!-- Ion Icons Js -->
    <script type="module" src="https://clinicadame.com/wp-content/uploads/2022/04/CLINICA-DAME-QUITO.jpg"></script>
    <script nomodule src="h"></script>
    <!-- JS -->
    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <!-- Menu -->
    <div class="menu">
        <div class="container flex">
            <!-- Mobile Button -->
            <div class="mobile-btn">
                <ion-icon name="grid"></ion-icon>
            </div>
            <div class="logo">
                <img src="https://clinicadame.com/wp-content/uploads/2021/03/clinica-dame.png" alt="" />
            </div>

            <ul class="nav">
                <li class="nav-item"><a href="#">Home</a></li>
                <li class="nav-item"><a href="#why-us">Cine suntem?</a></li>
                <li class="nav-item"><a href="#explore">Vezi mai multe</a></li>
                <li class="nav-item"><a href="#discount">Registreazate</a></li>
            </ul>

          
        </div>
    </div>
    <!-- End Menu -->

    <!-- Header -->
    <header class="header">
        <div class="container flex">
            <div class="text">
                <h1 class="mb">
                    Clinica Dame <br />
                De inestigatii cea mai buna
                </h1>

                <p class="mb">
                    Doresti sa iti faci o investigatie medicala la cei mai buni specialisti?
                    atunci nu ezita si inscriete la noi 
                </p>

                <a href="#" class="btn mt">Afla mai multe</a>
            </div>

            <div class="visual">
                <img src="https://clinicadame.com/wp-content/uploads/2022/04/CLINICA-DAME-QUITO.jpg" alt="" />
            </div>
        </div>
    </header>
    <!-- End Header -->

    <!-- Why Us -->
    <div class="section" id="why-us">
        <div class="container flex">
            <div class="text">
                <h2 class="primary mb">Cine suntem?</h2>
                
                <p class="tertiary">
                    
Suntem o Instituție Privată creată pentru a oferi Servicii de Sănătate într-o manieră eficientă și responsabilă, angajați față de populația ecuadoriană și urmărind să colaboreze cu Politicile de Sănătate atât în ​​procesele de Prevenire, cât și de tratament în toate specialitățile Medicale, funcționează și oferă îngrijire neîntreruptă 24/7. ore din zi, cu servicii de ambulatoriu, spitalizare, terapie intensivă neonatală, pediatrică și adulți, diagnostic imagistic și suport de laborator.
                </p>
            </div>
            <div class="visual">
                <img src="https://www.hevcon.com.br/wp-content/uploads/2022/02/017e6206-5f56-4546-83a6-87af09bdb463.jpg" alt="" />
            </div>
        </div>
    </div>
    <!-- End Why Us -->

    <!-- Explore -->
    <div class="section" id="explore">
        <div class="container flex">
            <div class="visual">
                <img src="https://medijobs.ro/wp-content/uploads/2021/02/Copie-a-blog-design-2021-02-12T153438.414.png" alt="" />
            </div>
            <div class="text">
                <h2 class="primary mb">
                   Serviciile noastre
                </h2>
                <p class="tertiary mb">
                   <br>Urgenta</br>
                   <br>Laborator</br>
                   <br>Spitalizare</br>
                   <br>centru de gastroenterologie</br>
                   <br>Terapie intensiva</br>

                

                </p>

                
            </div>
        </div>
    </div>
    <!-- End Explore -->

    <!-- Trainer -->
    <div class="section" id="trainer">
        <h2 class="primary mb">Valorile noastre principale</h2>
        <div class="container flex">
            <div class="trainer">
                <img src="https://clinicadame.com/wp-content/uploads/2022/04/CLINICA-DAME-ETICA.png" width="120
                " alt="" />
                <h3 class="secondary mb">ETICĂ</h3>
                <p class="tertiary mb">
                <br>Acționăm cu transparență, desfășurând activități profesionale</br>
                <br> în toate domeniile sub parametri de moralitate și principii. </br>               </p>

                <a href="#" class="btn-2">
                    <ion-icon name="arrow-redo-circle-outline"></ion-icon>
                </a>
            </div>

            <div class="trainer">
                <img src="https://clinicadame.com/wp-content/uploads/2022/04/CALIDAD.png" width="120" alt="" />
                <h3 class="secondary mb">CALITATE</h3>
                <p class="tertiary mb">
  <br>Respectam procesele care garanteaza</br>
  <br> excelenta in prezentarea unor servicii accesibile ,oportune relevante,sigure si continuie.   </br>             </p>

                <a href="#" class="btn-2">
                    <ion-icon name="arrow-redo-circle-outline"></ion-icon>
                </a>
            </div>

            <div class="trainer">
                <img src="https://clinicadame.com/wp-content/uploads/2022/04/COMPROMISO-.png" alt="" width="120" />
                <h3 class="secondary mb">angajament</h3>
                <p class="tertiary mb">
                Lucrăm cu dragoste pentru ceea ce facem, dând tot ce este mai bun din noi în beneficiul oamenilor și al clinicii.                </p>

                <a href="#" class="btn-2">
                    <ion-icon name="arrow-redo-circle-outline"></ion-icon>
                </a>
            </div>
        </div>
    </div>
    <!-- End Trainer -->

    
    <!-- End Testimonial -->

    <!-- End Discount -->

    <!-- Footer -->
 

    <!-- End Footer -->
    <script src="script.js"></script>
    <form action="action_page.php">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>
</body>

</html>