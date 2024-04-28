<?php

if(!function_exists('testimonials')){
    $testimonials = [
        [
            'active' => 'true',
            'heading' => 'Morijorch',
            'heading2' => 'Default model text',
            'paragraph' => "editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various",
        ],
        [
            'active' => 'false',
            'heading' => 'Rochak',
            'heading2' => 'Default model text',
            'paragraph' => "Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.",
        ],
        [
            'active' => 'false',
            'heading' => 'Brad Johns',
            'heading2' => 'Default model text',
            'paragraph' => "Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy, editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various",
        ],
    ];

  
  function testimonials($testimonials){
    $counter = 0;
    
    do {
        $testimonial = $testimonials[$counter];
        
        $activeClass = ($testimonial['active'] == 'true') ? 'active' : '';
        
        echo '
            <div class="carousel-item ' . $activeClass . '">
                <div class="box">
                    <div class="client_info">
                        <div class="client_name">
                            <h5> ' . $testimonial['heading'] . ' </h5>
                            <h6> ' . $testimonial['heading2'] . ' </h6>
                        </div>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p> ' . $testimonial['paragraph'] . ' </p>
                </div>
            </div>
        ';
        
        $counter++;
    } while ($counter < count($testimonials)); 
  }
}
?>