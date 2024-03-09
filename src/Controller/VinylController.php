<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use function Symfony\Component\String\u;
use Symfony\Component\Routing\Annotation\Route;

class VinylController 
{
    
    #[Route("/")]
    
    public function homepage(): Response
    {
       return new Response('PB james');
    }
    #[Route("/browse/{slug}")]
    
    public function browse(string $slug=null): Response
    {
        if($slug){
            $title= u(str_replace('-',' ',$slug))->title(true);
        }else{
            $title='All genre';
        }
        
       return new Response($title); 
    }
}
