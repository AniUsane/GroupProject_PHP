<?php
if (!function_exists('slider_loop')) {
    $sliders = [
      [
          'active' => 'true',
          'heading' => 'Mico',
          'span' => 'Hospital',
          'paragraph' => 'when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to',
          'contact' => 'Contact Us',
          'image' => './images/slider-img.jpg',
      ],
      [
          'active' => 'false',
          'heading' => 'Mico',
          'span' => 'Hospital',
          'paragraph' => 'when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to',
          'contact' => 'Contact Us',
          'image' => './images/slider-img.jpg',
      ],
      [
          'active' => 'false',
          'heading' => 'Mico',
          'span' => 'Hospital',
          'paragraph' => 'when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to',
          'contact' => 'Contact Us',
          'image' => './images/slider-img.jpg',
      ],
  ];


  function slider_loop($sliders){
      foreach($sliders as $slider){
          if($slider['active'] == 'true'){
              echo '
              <div class="carousel-item active">
                  <div class="container ">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="detail-box">
                        <div class="play_btn">
                          <button>
                          <i class="fa fa-play" aria-hidden="true"></i>
                          </button>
                        </div>
                        <h1> ' . $slider['heading']  .' <br>
                        <span> ' . $slider['span']  .' </span>
                        </h1>
                        <p> ' . $slider['paragraph']  .' </p>
                        <a href=""> ' . $slider['contact']  .' </a>
                      </div>
                    </div>
                    <div class="col-md-6">
                    <div class="img-box">
                      <img src="' . $slider['image']  .'" alt="">
                    </div>
                    </div>
                </div>
            </div>
          </div>
          ';
          }
          else {
              echo '
              <div class="carousel-item">
                  <div class="container ">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="detail-box">
                        <div class="play_btn">
                          <button>
                          <i class="fa fa-play" aria-hidden="true"></i>
                          </button>
                        </div>
                        <h1> ' . $slider['heading']  .' <br>
                        <span> ' . $slider['span']  .' </span>
                        </h1>
                        <p> ' . $slider['paragraph']  .' </p>
                        <a href=""> ' . $slider['contact']  .' </a>
                      </div>
                    </div>
                    <div class="col-md-6">
                    <div class="img-box">
                      <img src="' . $slider['image']  .'" alt="">
                    </div>
                    </div>
                </div>
            </div>
          </div>
          ';
          }
      }
  }

}
?>
