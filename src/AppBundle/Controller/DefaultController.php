<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template
     */
    public function indexAction()
    {
        // lista wszystkich samochodów
        $cars = $this->getDoctrine()
            ->getRepository('AppBundle:Car')
            ->findAll();
        
        $categories = $this->getDoctrine()
            ->getRepository('AppBundle:CarCategory')
            ->findAll();
        
        // lista popularnych samochodów
        $popular = $this->getDoctrine()
            ->getRepository('AppBundle:Car')
            ->findBy(array(), array('nbOrders' => 'desc'), 5);
        
        // lista najczęściej recenzowanych samochodów
        $frequentlyReviewed = $this->getDoctrine()
            ->getRepository('AppBundle:Car')
            ->findBy(array(), array('nbReviews' => 'desc'), 5);
        
        return array(
            'cars'                => $cars,
            'categories'            => $categories,
            'popular'               => $popular,
            'frequentlyReviewed'    => $frequentlyReviewed
        );
    }
    
    /**
     * @Route("/popular", name="popular")
     */
    public function poopularAction()
    {
        // lista popularnych samochodów
        $cars = $this->getDoctrine()
            ->getRepository('AppBundle:Car')
            ->findBy(array(), array('nbOrders' => 'desc'));
    
        return $this->render('AppBundle:Default:cars.html.twig', array(
            'title'     => "Lista popularnych samochodów",
            'cars'    => $cars
        ));
    }
    
    /**
     * @Route("/mostly-reviewed", name="reviewed")
     */
    public function reviewedAction()
    {
        // lista najczęściej recenzowanych samochodów
        $cars = $this->getDoctrine()
            ->getRepository('AppBundle:Car')
            ->findBy(array(), array('nbReviews' => 'desc'));
    
        return $this->render('AppBundle:Default:cars.html.twig', array(
            'title'     => "Lista najczęściej recenzowanych samochodów",
            'cars'    => $cars
        ));
    }
    
    /**
     * @Route("/seach", name="search")
     * @Template()
     */
    public function searchAction()
    {
        if (!$query = $this->getRequest()->query->get('q', false)) {
            return $this->redirectToRoute('homepage');
        }
        
        $cars = $this->getDoctrine()
            ->getRepository('AppBundle:Car')
            ->createQueryBuilder('m')
            ->innerJoin('m.categories', 'c')
            ->where('m.name LIKE :name OR m.description LIKE :description OR m.model LIKE :model')
            ->setParameters(array(
                'name'  => "%".$query."%",
                'description'  => "%".$query."%",
                'model'  => "%".$query."%",
            ))
            ->getQuery()
            ->getResult();
            
        return array(
            'cars'    => $cars
        );
    }
    
}
