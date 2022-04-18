<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//         ______                                                                                               //
//        /     /\                 _                  __ _                                                      //
//       /     /  \               | |                / _(_)                                                     //
//      /_____/----\_    (        | |__   ___  _ __ | |_ _ _ __ ___                                             //
//     "     "          ).        | '_ \ / _ \| '_ \|  _| | '__/ _ \                                            //
//    _ ___          o (:') o     | |_) | (_) | | | | | | | | |  __/                                            //
//   (@))_))        o ~/~~\~ o    |_.__/ \___/|_| |_|_| |_|_|  \___|                                            //
//                   o  o  o                                                                                    //
//                     A cozy alternative to Discord.                                                           //
// This code is a part of Bonfire, the modern, secure alternative to Discord.                                   //
// Bonfire is explicitly free-and-open-source software. You may distribute it under the terms of the MIT        //
// license.                                                                                                     //
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Load Composer libs
require "vendor/autoload.php";


$service = new PHPSupabase\Service(
    "YOUR_API_KEY", 
    "https://aaabbbccc.supabase.co/auth/v1/"
);
