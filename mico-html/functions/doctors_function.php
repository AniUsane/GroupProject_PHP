<?php
if(!function_exists('doctors')){
    $doctors = [
        [
            'image' => './images/team1.jpg',
            'heading' => 'Hennry',
            'heading2' => 'MBBS',
        ],
        [
            'image' => './images/team2.jpg',
            'heading' => 'Jenni',
            'heading2' => 'MBBS',
        ],
        [
            'image' => './images/team3.jpg',
            'heading' => 'Morco',
            'heading2' => 'MBBS',
        ],
    ];

    function doctors($doctors){
        foreach($doctors as $doctor){
            echo '
            <div class="item">
            <div class="box">
              <div class="img-box">
                <img src=" ' . $doctor['image'] . ' " alt="" />
              </div>
              <div class="detail-box">
                <h5> ' . $doctor['heading'] . ' </h5>
                <h6> ' . $doctor['heading2'] . ' </h6>
                <div class="social_box">
                  <a href="">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
            ';
        }
    }
  }

?>