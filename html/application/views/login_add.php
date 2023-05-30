    <section class="site-hero inner-page overlay" style="background-image: url(/~team3/my/images/hero_4.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="heading mb-3">Sign Up</h1>
            <ul class="custom-breadcrumbs mb-4">
              <li><a href="/~team3/main">Home</a></li>
              <li>&bullet;</li>
              
              <li>Sign Up</li>
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
        <div class="row align-items-center">


	<script>
			
			

			function find_product()
			{
				window.open("/~team3/findaddress","","resizable=yes,scrollbars=yes,width=500,height=600");
			}

			

	</script>


  <!-- Grid column -->
  <div class="col-md-10 col-lg-8 col-xl-5 mx-xl-auto" data-aos="fade-up" data-aos-delay="200">

    <section class="form-elegant scrollbar-light-blue">

      <!--Form without header-->
      <div class="card">

        <div class="card-body mx-4">
		<form name="form1" method="post" action="">

          <!--Header-->
          <div class="text-center">
            <h3 class="dark-grey-text mb-5"><strong></strong></h3>
          </div>

          <!--Body-->
          

          
		
          <div class="md-form">
		  Your name
            <input type="text" name="name" class="form-control" onKeydown="if (event.keyCode == 13) { javascript:form1.submit(); }">
            <? If (form_error("name")==true) echo form_error("name"); ?>
          </div>

		  <div class="md-form" style="margin-top: 5px;">
		  Your id
            <input type="text" name="uid" id="uid" class="form-control" onKeydown="if (event.keyCode == 13) { javascript:form1.submit(); }">
            <? If (form_error("uid")==true) echo form_error("uid"); ?>
          </div>

          <div class="md-form" style="margin-top: 5px;">
		  Your password
            <input type="password" name="pwd" class="form-control" onKeydown="if (event.keyCode == 13) { javascript:form1.submit(); }">
			<? If (form_error("pwd")==true) echo form_error("pwd"); ?>
          </div>


			<div class="" style="margin-top: 5px;">
			Your birthday
				<div class="field-icon-wrap">
					<div class="icon"><span class="icon-calendar"></span></div>
					<input type="date" name="birth" class="form-control" onKeydown="if (event.keyCode == 13) { javascript:form1.submit(); }">
				</div>
			</div>

		  <div class="md-form" style="margin-top: 5px;">
		  Your email
            <input type="text" name="email" class="form-control" onKeydown="if (event.keyCode == 13) { javascript:form1.submit(); }">
            <? If (form_error("email")==true) echo form_error("email"); ?>
          </div>

		  <div class="md-form" style="margin-top: 5px;">
		  Your phone
            <input type="text" name="phone" class="form-control" onKeydown="if (event.keyCode == 13) { javascript:form1.submit(); }">
			<? If (form_error("phone")==true) echo form_error("phone"); ?>
          </div>

		  

		  <div class="md-form pb-3" style="margin-top: 5px;">
		  Your address
		  	<input type="text" name="zipcode" placeholder="zipcode" class="form-control" readonly style="border:0; margin-bottom:5px;">
            <input type="text" name="address1" onClick="find_product();" class="form-control" style=" margin-bottom:5px;"  onKeydown="if (event.keyCode == 13) { javascript:form1.submit(); }">
			<? If (form_error("address1")==true) echo form_error("address1"); ?>
			<input type="text" name="address2" class="form-control" placeholder="상세주소"  onKeydown="if (event.keyCode == 13) { javascript:form1.submit(); }">
			<? If (form_error("address2")==true) echo form_error("address2"); ?>
          </div>

          <div class="text-center mb-3">
            <button type="button" class="btn blue-gradient btn-block btn-rounded z-depth-1a" onclick="javascript:form1.submit();">Sign up</button>
          </div>
		</form>
          

          

        </div>

        <!--Footer-->
        <div class="modal-footer mx-5 pt-3 mb-1">
          <p class="font-small grey-text d-flex justify-content-end">You have account? <a href="/~team3/login"
              class="blue-text ml-1">
              Login</a></p>
        </div>

      </div>
      <!--/Form without header-->

    </section>

  </div>
  <!-- Grid column -->
          
          
          
        </div>
      </div>
    </section>