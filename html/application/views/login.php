    <section class="site-hero inner-page overlay" style="background-image: url(/~team3/my/images/hero_4.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="heading mb-3">Login</h1>
            <ul class="custom-breadcrumbs mb-4">
              <li><a href="/~team3/main">Home</a></li>
              <li>&bullet;</li>
              <li>Login</li>
            </ul>
          </div>
        </div>
      </div>

	
      
    <a class="mouse smoothscroll" href="#next">
        <div class="mouse-icon">
          <span class="mouse-wheel"></span>
        </div>
      </a>
    </section>
    <!-- END section -->

	<section class="section bg-light pb-0" id="next"></section>

	<section class="py-5 bg-light">
      <div class="container">
        <div class="row align-items-center" >



  <!-- Grid column -->
  <div class="col-md-10 col-lg-8 col-xl-5 mx-xl-auto"  data-aos="fade-up" data-aos-delay="200">

    <section class="form-elegant scrollbar-light-blue">

      <!--Form without header-->
      <div class="card">

        <div class="card-body mx-4">
		<form name="form_login" method="post" action="">

          <!--Header-->
          <div class="text-center">
            <h3 class="dark-grey-text mb-5"><strong></strong></h3>
          </div>

          <!--Body-->
          

          
		
          <div class="md-form">
		  	Your id
            <input type="text" name="uid" class="form-control" onKeydown="if (event.keyCode == 13) { javascript:form_login.submit(); }">
            <? If (form_error("uid")==true) echo form_error("uid"); ?>
          </div>

          <div class="md-form pb-3" style="margin-top: 5px;">
		  	Your password
            <input type="password" name="pwd" class="form-control" onKeydown="if (event.keyCode == 13) { javascript:form_login.submit(); }">
            <? If (form_error("pwd")==true) echo form_error("pwd"); ?>
            <p class="font-small blue-text d-flex justify-content-end" style="margin-top: 10px;">Forgot <a href="#" class="blue-text ml-1">
                Password?</a></p>
          </div>

          <div class="text-center mb-3">
            <button type="button" class="btn blue-gradient btn-block btn-rounded z-depth-1a" onclick="javascript:form_login.submit();">Login</button>
          </div>
		</form>
          

          

        </div>

        <!--Footer-->
        <div class="modal-footer mx-5 pt-3 mb-1">
          <p class="font-small grey-text d-flex justify-content-end">Not a member? <a href="/~team3/login/add"
              class="blue-text ml-1">
              Sign Up</a></p>
        </div>

      </div>
      <!--/Form without header-->

    </section>

  </div>
  <!-- Grid column -->
          
          
          
        </div>
      </div>
    </section>