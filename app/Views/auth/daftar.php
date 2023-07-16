<?= $this->extend('template/templateuser'); ?>
<?= $this->section('konten'); ?>

<?php
$session = session();
$error = $session->getFlashdata('error');
?>

<?php if ($error) { ?>
    <p style="color:red">Terjadi Kesalahan:
    <ul>
        <?php foreach ($error as $e) { ?>
            <li><?php echo $e ?></li>
        <?php } ?>
    </ul>
    </p>
<?php } ?>


<style>
    body {
        background-image: url("/img/tekno.jpg");
    }
</style>
<style>
    .container nav {
        margin-top: 2%;
    }

    .container p {

        margin-left: 1%;
        display: inline-block;
        font-size: 25px;

    }

    .banner p {
        font-size: 14px;

    }

    .container .button {
        display: inline-block;
        margin-left: 3%;
    }
</style>

<body>

    <div class="container">
        <nav>
            <a class="navbar-brand" href="/index.php/auth/login"><img src="/img/FVUSD.png" alt="" height="70" width="200"></a>


            <p><b>Re-LabS System for Practical
                    Learning of Mechatronics Application</b></p>





        </nav>
    </div>

    <div class="container">

        <section class="vh-100">
            <div class="container-fluid h-custom">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-md-9 col-lg-6 col-xl-5">
                        <img src="/assets/images/Lab-Otomasi.png" class="img-fluid" alt="Sample image" style="margin-top: 26px;">
                    </div>
                    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                        <form class="login" method="post" action="/auth/valid_register">

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">Nama</label>
                                <input type="text" name="nama" required id="form3Example3" class="form-control form-control-lg" placeholder="Enter username" />
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">Username</label>
                                <input type="text" name="username" required id="form3Example3" class="form-control form-control-lg" placeholder="Enter username" />
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-3">
                                <label class="form-label" for="form3Example4">Password</label>
                                <input type="password" name="password" required id="form3Example4" class="form-control form-control-lg" placeholder="Enter password" />
                            </div>
                            <div class="form-outline mb-3">
                                <label class="form-label" for="form3Example4">Password</label>
                                <input type="password" name="confirm" required id="form3Example4" class="form-control form-control-lg" placeholder="Enter password" />
                            </div>



                            <div class="text-center text-lg-start mt-4 pt-2">
                                <div class="action">
                                    <!-- <button type="submit" class="btn btn-primary btn-block mb-3" value="Login">Login</button> -->

                                    <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem; margin-top:30px;"" value=" Register">Register</button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </section>

    </div>

    <?= $this->endSection(); ?>