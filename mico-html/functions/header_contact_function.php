<?php

if (!function_exists('contacts')) {
    $contacts = [
        'number' => '+01 123455678990',
        'email' => 'demo@gmail.com',
        'address' => 'Location',
    ];

    function contacts()
    {
        global $contacts;
        echo '
        <div class="header_top">
            <div class="container">
                <div class="contact_nav">
                    <a href="">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span>Call : ' . $contacts['number'] . '</span>
                    </a>
                    <a href="">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span>Email : ' . $contacts['email'] . '</span>
                    </a>
                    <a href="">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>' . $contacts['address'] . '</span>
                    </a>
                </div>
            </div>
        </div>';
    }
}

?>