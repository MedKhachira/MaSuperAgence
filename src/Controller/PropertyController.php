<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Property;

class PropertyController extends AbstractController
{
	/**
	 * [index description]
	 * @Route("/biens",name="property.index")
	 * @return Response [description]
	 */
	public function index() : Response
	{
        $property = new Property();
        $property->setTitle("Mon premier bien")
        ->setPrice(15000)
        ->setRooms(4)
        ->setBedrooms(3)
        ->setDescription("une petite description")
        ->setSurface(60)
        ->setFloor(4)
        ->setHeat(1)
        ->setCity("Paris")
        ->setAdress("72 rue arago")
        ->setPostalCode('34000');

        $em = $this->getDoctrine()->getManager();
        $em->persist($property);
        $em->flush();
        return $this->render('property/index.html.twig');
	}
}