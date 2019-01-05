<?php

 ?>

 <!-- Contact Section -->
 <section id="contact">
     <div class="container">
         <div class="row">
             <div class="col-lg-12 text-center">
                 <h2 class="section-heading">Contactez-nous!</h2>
             </div>
         </div>
         <div class="row">
             <div class="col-lg-12">
                 <form name="sentMessage" id="contactForm" novalidate>
                     <div class="row">
                         <div class="col-md-6">
                             <div class="form-group">
                                 <input type="text" class="form-control" placeholder="Votre Nom *" id="name" required data-validation-required-message="Entrez votre nom.">
                                 <p class="help-block text-danger"></p>
                             </div>
                             <div class="form-group">
                                 <input type="email" class="form-control" placeholder="Votre Email *" id="email" required data-validation-required-message="Entrez votre adresse courriel.">
                                 <p class="help-block text-danger"></p>
                             </div>
                             <div class="form-group">
                                 <input type="tel" class="form-control" placeholder="Votre Numéro *" id="phone" required data-validation-required-message="Entrez votre numéro.">
                                 <p class="help-block text-danger"></p>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                                 <textarea class="form-control" placeholder="Votre Message *" id="message" required data-validation-required-message="Entrez un message."></textarea>
                                 <p class="help-block text-danger"></p>
                             </div>
                         </div>
                         <div class="clearfix"></div>
                         <div class="col-lg-12 text-center">
                             <div id="success"></div>
                             <button type="submit" class="btn btn-xl">Envoyer</button>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </section>


 <footer>
     <div class="container">
         <div class="row">
             <div class="col-md-4">
                 <span class="copyright">&copy; FermesRB 2017</span>
             </div>
             <div class="col-md-4">
                 <ul class="list-inline social-buttons">
                     <li><a href="https://fr-ca.facebook.com/Les-Fermes-Rivest-Bourgeois-inc-499430940249391/"><i class="fa fa-facebook"></i></a>
                     </li>
                 </ul>
             </div>
         </div>
     </div>
 </footer>

 <!-- jQuery -->
 <script src="vendor/jquery/jquery.min.js"></script>

 <!-- Bootstrap Core JavaScript -->
 <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

 <!-- Plugin JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

 <!-- Contact Form JavaScript -->
 <script src="js/jqBootstrapValidation.js"></script>
 <script src="js/contact_me.js"></script>

 <!-- Theme JavaScript -->
 <script src="js/agency.min.js"></script>

<script>
 // Disable Google Maps scrolling
    // See http://stackoverflow.com/a/25904582/1607849
    // Disable scroll zooming and bind back the click event
    var onMapMouseleaveHandler = function(event) {
        var that = $(this);
        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
    }
    var onMapClickHandler = function(event) {
            var that = $(this);
            // Disable the click handler until the user leaves the map area
            that.off('click', onMapClickHandler);
            // Enable scrolling zoom
            that.find('iframe').css("pointer-events", "auto");
            // Handle the mouse leave event
            that.on('mouseleave', onMapMouseleaveHandler);
        }
        // Enable map zooming with mouse scroll when the user clicks the map
    $('.map').on('click', onMapClickHandler);
</script>

</body>

</html>
