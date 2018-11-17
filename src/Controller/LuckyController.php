<?php
/**
 * Created by PhpStorm.
 * User: halex
 * Date: 17.11.18
 * Time: 23:59
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
    public function number()
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}