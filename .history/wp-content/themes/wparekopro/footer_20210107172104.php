        <!-- sec4-->
        <section id="sec4">
            <div class="container">
                <div class="row" id="kontakt">
                    <div class="col">
                        <h1 class="text-center">KONTAKT</h1>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 col-12 text-center">
                        <p>ul. Rudzka 96/2, 44-200 Rybnik</p>
                        <p><a href="tel:+48601214021">+48 601 214 021</a></p>
                        <p><a href="mailto:robek.roman@gmail.com">robek.roman@gmail.com</a></p>
                        <p>BHP: <a href="mailto:robek.bhp@gmail.com">robek.bhp@gmail.com</a></p>
                        <p>NIP: 642 041 31 14</p>
                        <p>Regon: 241644630</p>
                    </div>
                    <div class="col-md-6 col-12 text-center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10235.209911355048!2d18.535915!3d50.108704!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa8fe8ea04630f6be!2sEkoprojekt%20Roman%20Robek%20-%20budownictwo%2C%20specjalista%20ds.%20BHP%20i%20zarz%C4%85dzania%20%C5%9Brodowiskiem!5e0!3m2!1spl!2spl!4v1610026528238!5m2!1spl!2spl" width="300" height="240" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-12 text-right">
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
        <script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
        <script>
            $(window).scroll(function(){
                $('.navbar').toggleClass('scrolled', $(this).scrollTop()>100);
            });
        </script>
        <?php wp_footer(); ?>
    </body>
</html>