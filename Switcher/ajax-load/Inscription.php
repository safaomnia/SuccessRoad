<section class="">
  <div class="container position-relative p-0 mt-90" style="max-width: 700px;">
    <h3 class="bg-theme-colored2 p-15 pt-10 mt-0 mb-0 text-white">Inscription</h3>
    <div class="section-content bg-white p-30">
      <div class="row">
        <div class="col-md-12">
          <!-- Register Form Starts -->
          <form method="POST" id="reservation_form_popup" name="reservation_form" class="reservation-form mb-0 bg-silver-deep p-30" method="post" action="#">
            <h3 class="text-center mt-0 mb-30">Enregistrez ici un nouveau compte!</h3>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group mb-30">
                  <input placeholder="NCIN" id="NCIN" name="NCIN" required="" maxlength="8" class="form-control" aria-required="true" type="text" pattern="[0-9]{8}" title="Entrer 8 chiffres !!">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group mb-30">
                  <input placeholder="Nom" id="Nom" name="Nom" class="form-control" required="" aria-required="true" type="text">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group mb-30">
                  <input placeholder="Prénom" id="Prenom" name="Prenom" required="" class="form-control" aria-required="true" type="text">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group mb-30">
                  <input placeholder="Email" id="Email" name="Email" required="" class="form-control" aria-required="true" type="Email">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group mb-30">
                  <input placeholder="Login" id="Login" name="Login" required="" class="form-control" aria-required="true" type="text">
                </div>
              </div>
			  <div class="col-sm-12">
                <div class="form-group mb-30">
                  <input placeholder="Mot de passe" id="MotPasse" name="MotPasse" required="" class="form-control" aria-required="true" type="password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="Entrer au minimum un caractère majuscule, un caractère minuscule et un chiffre!!">
                </div>
              </div>
			  <div class="col-sm-12">
                <div class="form-group mb-30">
                  <input placeholder="Confirmer mot de passe" id="Confirm" name="Confirm" required="" class="form-control" aria-required="true" type="password">
                </div>
              </div>
			  
              <div class="col-sm-12">
                <div class="form-group mb-0 mt-0">
                  <button type="submit" class="btn btn-colored btn-block btn-theme-colored2 text-white btn-lg btn-flat">Inscrire</button>
                </div>
              </div>
            </div>
          </form>

          <!-- Appointment Form Validation-->
          <script type="text/javascript">
            $("#popup_appointment_form").validate({
              submitHandler: function(form) {
                var form_btn = $(form).find('button[type="submit"]');
                var form_result_div = '#form-result';
                $(form_result_div).remove();
                form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                var form_btn_old_msg = form_btn.html();
                form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                $(form).ajaxSubmit({
                  dataType:  'json',
                  success: function(data) {
                    if( data.status == 'true' ) {
                      $(form).find('.form-control').val('');
                    }
                    form_btn.prop('disabled', false).html(form_btn_old_msg);
                    $(form_result_div).html(data.message).fadeIn('slow');
                    setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                  }
                });
              }
            });
            THEMEMASCOT.initialize.TM_datePicker();
          </script>
        </div>
      </div>
    </div>
    <button title="Close (Esc)" type="button" class="mfp-close font-36">×</button>
  </div>
</section>