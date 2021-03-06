<?php require_once dirname(__FILE__) . "/../services/functions.serv.php"; ?>

<header class="pb-3">

    <nav class="navbar navbar-expand-md navbar-dark bg-dark border-secondary border-bottom">

        <div class="container-fluid">

            <a class="navbar-brand fw-light" href="/public/_commander.php">Zorion-LMS</a>

            <!-- Toggler (responsivity) -->

            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <!-- Settings -->

                    <li class="nav-item">

                        <a class="nav-link text-white text-decoration-none" href="/public/commander/_settings.php">
                            <i class="bi bi-sliders"></i> Instellingen
                        </a>

                    </li>

                    <!-- Users -->

                    <li class="nav-item">

                        <a class="nav-link text-white text-decoration-none" href="/public/commander/_users.php">
                            <i class="bi bi-file-earmark-person-fill"></i> Gebruikers
                        </a>

                    </li>

                    <!-- Groups -->

                    <li class="nav-item">

                        <a class="nav-link text-white text-decoration-none" href="/public/commander/_groups.php">
                            <i class="bi bi-bookmark-fill"></i> Groepen
                        </a>

                    </li>

                </ul>

                <form class="d-flex gap-2">

                    <!-- Console -->

                    <a href="/public/_console.php" class="btn bg-primary text-white shadow-none rounded-0 w-50">
                        <i class="bi bi-person-workspace"></i>
                    </a>

                    <!-- Signout -->

                    <a href="/services/signout.serv.php" class="btn bg-danger text-white shadow-none rounded-0 w-50">
                        <i class="bi bi-box-arrow-right"></i>
                    </a>

                </form>

            </div>

        </div>

    </nav>

</header>