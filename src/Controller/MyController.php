<?php 
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\TalkService;

class MyController
{
    /**
     * @Route("/coming", name="app_coming")
     */
    public function coming(TalkService $talk)
    {
        $myResponse = $talk->determineWhatToSay(TalkService::CASE_FRIEND_COMING);

        return new Response(
            '<html><body>My friend is coming, I should say: '.$myResponse.'</body></html>'
        );
    }

    /**
     * @Route("/leaving", name="app_leaving")
     */
    public function comming(TalkService $talk)
    {
        $myResponse = $talk->determineWhatToSay(TalkService::CASE_FRIEND_LEAVING);

        return new Response(
            '<html><body>My friend is leaving, I should say: '.$myResponse.'</body></html>'
        );
    }
}