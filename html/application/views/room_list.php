<section class="site-hero inner-page overlay" style="background-image: url(/~team3/my/images/hero_4.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="heading mb-3">ROOMS</h1>
            <ul class="custom-breadcrumbs mb-4">
              <li><a href="/~team3/main">Home</a></li>
              <li>&bullet;</li>
              <li>Rooms</li>
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

	<section class="section bg-white pb-0" id="next"></section>

 <section class="section">
      <div class="container">
		<div class="row">
		<?
			foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
			{
				$no=$row->no;
		?>
          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
            <a href="/~team3/room/view/no/<?=$no?>" class="room">
              <figure class="img-wrap">
				<?
					if ($row->pic)     // 이미지가 있는 경우
						echo("<img src='/~team3/product_img/$row->pic' class='img-fluid mb-3'>");
					else                   // 이미지가 없는 경우
						echo("<img src='' class='img-fluid mb-3'>");
				?>
              </figure>
              <div class="p-3 text-center room-info">
                <h2><?=$row->name; ?></h2>
                <span class="text-uppercase letter-spacing-1"><?=number_format($row->price); ?>원 / 1박</span>
              </div>
            </a>
          </div>
		<?
			}
		?>
		</div>
      </div>
</section>
    