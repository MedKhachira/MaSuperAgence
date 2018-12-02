<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
	/**
	 * [$twig description]
	 * @var Environment
	 */
	private $twig;
    
	public function __construct(Environment $twig)
	{
		$this->twig = $twig;
	}

	public function index() : Response
	{
		//return new Response($this->twig->render('pages/home.html.twig'));
		return $this->render('pages/home.html.twig');
	}
}
?>