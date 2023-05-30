<section class="site-hero inner-page overlay" style="background-image: url(/~team3/product_img/<?=$row->pic;?>)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <ul class="custom-breadcrumbs mb-4">
              <li>ROOM</li>
            </ul>
			<h1 class="heading mb-3"><?=$row->name;?></h1>
						&nbsp
			<font color="lightgrey"><?=$row->bigo?></font>
          </div>
        </div>
      </div>

      <a class="mouse smoothscroll" href="#next">
        <div class="mouse-icon">
          <span class="mouse-wheel"></span>
        </div>
      </a>
</section>

<section class="section bg-light pb-0" id="next"></section>

<!--룸 사진 슬라이드--->
<section class="section slider-section bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading" data-aos="fade-up">Photos</h2>
            <p data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
              <div class="slider-item">
                <a href="/~team3/product_img/<?=$row->pic;?>" data-fancybox="images" data-caption="Caption for this image"><img src="/~team3/product_img/<?=$row->pic;?>" alt="Image placeholder" class="img-fluid"></a>
              </div>
              <div class="slider-item">
                <a href="/~team3/product_img/<?=$row->pic2;?>" data-fancybox="images" data-caption="Caption for this image"><img src="/~team3/product_img/<?=$row->pic2;?>" alt="Image placeholder" class="img-fluid"></a>
              </div>
              <div class="slider-item">
                <a href=/~team3/product_img/<?=$row->pic3;?>" data-fancybox="images" data-caption="Caption for this image"><img src="/~team3/product_img/<?=$row->pic3;?>" alt="Image placeholder" class="img-fluid"></a>
              
            </div>
            <!-- END slider -->
          </div>
        
        </div>
      </div>
</section>

<section class="section bg-image overlay" style="background-image: url('/~team3/product_img/<?=$row->pic;?>');">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading text-white" data-aos="fade">Info</h2>
            <p class="text-white" data-aos="fade" data-aos-delay="100">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
        <div class="food-menu-tabs" data-aos="fade">
          <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active letter-spacing-2" id="mains-tab" data-toggle="tab" href="#mains" role="tab" aria-controls="mains" aria-selected="true">부대시설</a>
            </li>
            <li class="nav-item">
              <a class="nav-link letter-spacing-2" id="desserts-tab" data-toggle="tab" href="#desserts" role="tab" aria-controls="desserts" aria-selected="false">룸서비스</a>
            </li>
          </ul>
          <div class="tab-content py-5" id="myTabContent">
            
            
            <div class="tab-pane fade show active text-left" id="mains" role="tabpanel" aria-labelledby="mains-tab">
              <div class="row">
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">스파 & 피트니스티</span>
                    <h3 class="text-white"><a href="#" class="text-white">호텔 수영장</a></h3>
                    <p class="text-white text-opacity-7">※ 코로나19로 인한 정부의 사회적 거리두기 단계에 따라 해당 시설을 운영하지 않으니 이용 시 참고 부탁 드립니다.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">스파 & 피트니스</span>
                    <h3 class="text-white"><a href="#" class="text-white">피트니스센터</a></h3>
                    <p class="text-white text-opacity-7">※ 코로나19로 인한 정부의 사회적 거리두기 단계에 따라 해당 시설을 운영하지 않으니 이용 시 참고 부탁 드립니다.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">쇼핑</span>
                    <h3 class="text-white"><a href="#" class="text-white">인덕 프리미엄 푸드 마켓</a></h3>
                    <p class="text-white text-opacity-7">합리적인 가격의 PB상품을 포함한 다양한 공산품 및 신선한 농산품을 구입할 수 있는 인덕 프리미엄 푸드 마켓</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">비즈니스</span>
                    <h3 class="text-white"><a href="#" class="text-white">비즈니스 센터</a></h3>
                    <p class="text-white text-opacity-7">무료 초고속 인터넷 (유선,와이파이) · FAX 송·수신 업무 · 서류 복사 및 프린트 등을 위한 최신기기가 마련된 독립된 공간</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">비즈니스</span>
                    <h3 class="text-white"><a href="#" class="text-white">미팅룸</a></h3>
                    <p class="text-white text-opacity-7">초고속 무료 인터넷 (유선, 와이파이), 팩스기기, 프린터, 복사기, 스크린 및 프로젝트 등 첨단 장비가 완비된 회의실을 제공</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">클리닉</span>
                    <h3 class="text-white"><a href="#" class="text-white">메디컬 클리닉</a></h3>
                    <p class="text-white text-opacity-7">여성의원, 치과, 피부과, 성형외과 클리닉을 포함한 다양한 의료 및 미용 관련 고퀄리티 서비스를 이용 가능</p>
                  </div>
                </div>
              </div>
              

            </div> <!-- .tab-pane -->

            <div class="tab-pane fade text-left" id="desserts" role="tabpanel" aria-labelledby="desserts-tab">
              <div class="row">
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$11.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Banana Split</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$72.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Sticky Toffee Pudding</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$26.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Pecan</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$42.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Apple Strudel</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$7.35</span>
                    <h3 class="text-white"><a href="#" class="text-white">Pancakes</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-primary h4 mb-3">$22.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Ice Cream Sundae</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                </div>
              </div>
            </div> <!-- .tab-pane -->
            
          </div>
        </div>
      </div>
    </section>