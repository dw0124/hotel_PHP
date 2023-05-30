<script>   
   function validateForm() {
	  let x = document.forms["form_main"]["check_in"].value;
	  let y = document.forms["form_main"]["check_out"].value;
	  let z = document.forms["form_main"]["check_in"].length;
	  let r = document.forms["form_main"]["check_out"].length;
	  if (x == "") {
		alert("체크인 날짜를 입력해주세요.");
		document.getElementById("check_in").focus();
		return false;
	  }else if(y == "") {
		alert("체크아웃 날짜를 입력해주세요.");
		document.getElementById("check_out").focus();
		return false;
	  }/* else if ( z != 9)
	  {
		alert("잘못된 입력입니다.");
		document.getElementById("check_in").focus();
		console.log(document.forms["form_main"]["check_in"].length;)
		return false;
	  } else if ( r != 9)
	  {
		alert("잘못된 입력입니다.");
		document.getElementById("check_out").focus();
		console.log("r")
		return false;
	  }*/
	}

	
</script>
	
	
	<!-- END head -->
	    <section class="site-hero overlay" style="background-image: url(/~team3/my/images/hero_4.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade-up">
            <span class="custom-caption text-uppercase text-white d-block  mb-3">Welcome To 5 <span class="fa fa-star text-primary"></span>   Hotel</span>
            <h1 class="heading">A Best Place To Stay</h1>
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

	<section class="section bg-light pb-0"  >
      <div class="container">
       
        <div class="row check-availabilty" id="next">
          <div class="block-32" data-aos="fade-up" data-aos-offset="-200">

            <form name="form_main" onsubmit="return validateForm()" action='/~team3/reservation/' method="post" >

              <div class="row">


                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3" style="margin-left: 15px; margin-right: 15px; padding-left: 30px;">
                  <label for="checkin_date" id="check_in_text" class="font-weight-bold text-black">Check In</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="date" id="check_in" name="check_in" maxlength="10" class="form-control" value="">
                  </div>
                </div>


                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3" style="margin-left: 15px; margin-right: 15px; padding-left: 30px;">
                  <label for="checkout_date" class="font-weight-bold text-black">Check Out</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="date" id="check_out" name="check_out" maxlength="10" class="form-control" value="">
                  </div>
                </div>

				<div class="col-md-1 mb-3 mb-md-0"></div>
                
                <div class="col-md-6 col-lg-3 align-self-end">

				<?
					if ($this->session->userdata("uid"))
						echo("<button class='btn btn-primary btn-block text-white' style='margin-left: 15px; margin-right: 15px;'>Check Availabilty</button>");
					else
						echo("<button class='btn btn-primary btn-block text-white' style='margin-left: 15px; margin-right: 15px;'disabled='disabled'>Need login</button>");
				?>

                </div>

				<div class="col-md-1 mb-3 mb-md-0" style="margin-right: 32px;"></div>

              </div>
            </form>
          </div>


        </div>
      </div>
    </section>
	
	<section class="py-5 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
            <figure class="img-absolute">
              <img src="/~team3/my/images/food-1.jpg" alt="Image" class="img-fluid">
            </figure>
            <img src="/~team3/product_img/superior_sweet1.jpg" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
            <h2 class="heading">Welcome!</h2>
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            <p><a href="/~team3/room/lists" class="btn btn-primary text-white py-2 mr-3">Learn More</a> <span class="mr-3 font-family-serif"><em>or</em></span> <a href="https://vimeo.com/channels/staffpicks/93951774"  data-fancybox class="text-uppercase letter-spacing-1">See video</a></p>
          </div>
          
        </div>
      </div>
    </section>

