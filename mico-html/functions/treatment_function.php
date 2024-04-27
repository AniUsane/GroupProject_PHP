<?php
if (!function_exists('treatment')) {
  $treatments = [
      [
          'image' => './images/t1.png',
          'heading' => 'Nephrologist Care',
          'paragraph' => "alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
          'link' => 'Read More',
      ],
      [
          'image' => './images/t2.png',
          'heading' => 'Eye Care',
          'paragraph' => "alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
          'link' => 'Read More',
      ],
      [
          'image' => './images/t3.png',
          'heading' => 'Pediatrician Clinic',
          'paragraph' => "alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
          'link' => 'Read More',
      ],
      [
          'image' => './images/t4.png',
          'heading' => 'Parental Care',
          'paragraph' => "alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
          'link' => 'Read More',
      ],
  ];


  function treatment($treatments){
      foreach($treatments as $treatment){
          echo '
          <div class="col-md-6 col-lg-3">
          <div class="box ">
            <div class="img-box">
              <img src=" ' . $treatment['image'] . ' " alt="">
            </div>
            <div class="detail-box">
              <h4> ' . $treatment['heading'] . ' </h4>
              <p> ' . $treatment['paragraph'] . ' </p>
              <a href=""> ' . $treatment['link'] . ' </a>
            </div>
          </div>
        </div>
          ';
      }
  }
}

?>