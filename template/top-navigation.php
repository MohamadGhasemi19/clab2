    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.html">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                           <a class= "nav-link"  href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class= "nav-link"  href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="post.html">Sample Post</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="contact.html">Contact</a>
                        </li>
                    </ul>   
                       <?php wp_nav_menu([
                          'theme_location' => 'top_bar'
                       ]); ?>
                </div>
            </div>
        </nav>