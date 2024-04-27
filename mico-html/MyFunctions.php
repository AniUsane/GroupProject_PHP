<?php 
    function OurDoctors() {
        $ourdoctors = [
                [ "name" => "Hennry",
                 "specialization" => "MBBS",
                 "imageSrc" => "images/team1.jpg",
                 "socialLinks" => [
                    "facebook" => "",
                    "twitter" => "",
                    "linkedin" => "",
                    "instagram" => ""
             
                 ]
                 ],
             [
                 "name" => "Jenni",
                 "specialization" => "MBBS",
                 "imageSrc" => "images/team2.jpg",
                 "socialLinks" => [
                     "facebook" => "",
                     "twitter" => "",
                     "linkedin" => "",
                     "instagram" => ""
                    ]  
                 ],
             [
                 "name" => "Morco",
                 "specialization" => "MBBS",
                 "imageSrc" => "images/team3.jpg",
                 "socialLinks" => [
                    "facebook" => "",
                    "twitter" => "",
                    "linkedin" => "",
                   "instagram" => ""
                     ]      
                 ]
        ];
        foreach ($ourdoctors as $doc) {
            echo '<div class="item">
                <div class="box">
                    <div class="img-box">
                        <img src="' . $doc['imageSrc'] . '" alt="' . $doc['name'] . '" />
                    </div>
                    <div class="detail-box">
                        <h5>' . $doc['name'] . '</h5>
                        <h6>' . $doc['specialization'] . '</h6>
                        <div class="social_box">';
            foreach ($doc['socialLinks'] as $socialnetwork => $sociallink) {
                echo '<a href="' . $sociallink . '"><i class="fa fa-' . $socialnetwork . '" aria-hidden="true"></i></a>';
            }
            echo '</div>
                    </div>
                </div>
            </div>';
        };
    };
    
    function TreatmentServices() {
        $services = [
            [   "title" => "Nephrologist Care",
                "image" => "images/t1.png",
                "description" => "alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
                "ReadMoreLink" => ""
            ],
            [   "title" => "Eye Care",
                "image" => "images/t2.png",
                "description" => "alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
                "ReadMoreLink" => ""
            ],
            [  "title" => "Pediatrician Clinic",
               "image" => "images/t3.png",
               "description" => "alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
               "ReadMoreLink" => ""
            ],
            [  "title" => "Parental Care",
               "image" => "images/t4.png",
               "description" => "alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
               "ReadMoreLink" => ""
           ]
        ];
        for ($i = 0; $i < sizeof($services); $i++) {
            echo '<div class="col-md-6 col-lg-3">
            <div class="box">
            <div class="img-box">
              <img src = "'. $services[$i]['image'].'">
          </div>
          <div class="detail-box">
              <h4> '. $services[$i]['title'].' </h4>
              <p>'. $services[$i]['description'].'</p>
              <a href="'. $services[$i]['ReadMoreLink'].'">Read More</a>
          </div>
      </div>
      </div>';
          };
    };
    
   function TestimonialFunction(){
    $TestimonialArr = [
        [
            'client_name' => 'Morijorch',
            'model_text' => 'Default model text',
            'quote' => "editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various"
        ],
        [
            'client_name' => 'Rochak',
            'model_text' => 'Default model text',
            'quote' => "Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy."
        ],
        [
            'client_name' => 'Brad Johns',
            'model_text' => 'Default model text',
            'quote' => "Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy, editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various"
        ]
        ];
        for ($i = 0; $i < sizeof($TestimonialArr); $i++) {
            echo '<div class="carousel-item ' . ($i === 0 ? 'active' : '') . '">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5> '. $TestimonialArr[$i]['client_name'].'</h5>
                  <h6>'. $TestimonialArr[$i]['model_text'].'</h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>'. $TestimonialArr[$i]['quote'].'</p>
          </div>
          </div>';
        };
   } 