        <!-- sec4-->
        <section id="sec4">
            <div class="container">
                <div class="row justify-content-center" id="kontakt">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
                        <h1 class="text-center">KONTAKT</h1>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                        <p class="text-center">ul. Rudzka 96/2, 44-200 Rybnik</p>
                        <p class="text-center">+48 601 214 021</p> <p class="text-center">robek.roman@gmail.com</p>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-5">
                        <footer>
                            <p>&copy;2020 Ekoprojekt<br>Created by: Artur Robek</p>
                        </footer>
                    </div>
                </div>
            </div>
        </section>
        <!-- end sec4-->


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="<?php echo get_bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
        <script>
            $(window).scroll(function(){
                $('.navbar').toggleClass('scrolled', $(this).scrollTop()>75);
            });
        </script>
        <?php wp_footer(); ?>
    </body>
</html>