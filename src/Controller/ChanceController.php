<?php 
    namespace App\Controller;

    class ChanceController
    {
        public function getNumber() {
            $number = rand(0, 100);
            return new Response("<html>
            <body>Le numéro de la chance est $number</body>
            </html>");
        }
    }
 