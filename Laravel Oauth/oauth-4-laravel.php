<?php
return array( 

    /*
    |--------------------------------------------------------------------------
    | oAuth Config
    |--------------------------------------------------------------------------
    */

    /**
     * Storage
     */
    'storage' => 'Session', 

    /**
     * Consumers
     */
    'consumers' => array(

        /**
         * Author Joakim D 
         * Facebook client_id/client_secret I got from developer.facebook.com so we can log in with facebook
         */
        'Facebook' => array(
            'client_id'     => '361383370712713',
            'client_secret' => '9fa51885aa102fcec4669c565db182a7',
            'scope'         => array('public_profile', 'email'),
        ),  
         /**
         * Author Joakim D 
         * Same as facebook but for Google client_id/client_secret I got from dgoogle developer so we can log in with google
         */
        'Google' => array(
        'client_id'     => '179291477685-vmnc97hujne8rf4rv7ihtpta15fvbbf1.apps.googleusercontent.com',
        'client_secret' => 'O7F5QkJLerIBuR51BAruVIJx',
        'scope'         => array('userinfo_email', 'userinfo_profile'),
        ),      

    )

);