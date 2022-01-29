<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    #[Route('/lucky/number')]
    public function getNumber(): Response
    {
        $number = 0;
        try {
            $number = random_int(0, 999);
        } catch (\Exception $e) {
        }

        /*$data = "<html>
<body>
Lucky Number Is :- {$number}
</body>
</html>";

        return new Response($data, 200);*/

        return $this->render("lucky/number.html.twig",compact('number'));

    }

}