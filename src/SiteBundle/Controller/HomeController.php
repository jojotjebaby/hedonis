<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HomeController extends Controller
{
    /**
     * @Route("/", name="site_index")
     */
    public function indexAction()
    {
    	//get the last 5 articles.
        $listArticles = $this->getDoctrine()->getRepository('SiteBundle:Article')->home();
        
        return $this->render('SiteBundle:Home:index.html.twig',array(
        'listArticles' => $listArticles,
        ));
    }
    /**
     * @Route("/about", name="site_about")
     */
    public function aboutAction()
    {
        return $this->render('SiteBundle:Home:about.html.twig');
    }
   	/**
     * @Route("/ouwenduiker", name="site_beer_ouwenduiker")
     */
    public function oldDuikerAction()
    {
        return $this->render('SiteBundle:Beer:ouweduiker.html.twig');
    }
    /**
     * @Route("/excusemewhileikissmystout", name="site_beer_excuse")
     */
    public function stoutAction()
    {
        return $this->render('SiteBundle:Beer:stout.html.twig');
    }
    /**
     * @Route("/news", name="site_news")
     */
    public function newsAction()
    {
        $listArticles = $this->getDoctrine()->getRepository('SiteBundle:Article')->findall();

        $numberarticles = count($listArticles);

        $leftArticles = array();
        $rightArticles = array();

        //making 2 lists, one for right and one for left.
        for($i=0;$i < $numberarticles; $i++){
            if($i % 2 == 0 ){
                //the number is odd
                array_push($leftArticles, $listArticles[$i]);
            }
            else{
                array_push($rightArticles, $listArticles[$i]);
            }
        }

        return $this->render('SiteBundle:Home:news.html.twig',array(
            'leftArticles' => $leftArticles,
            'rightArticles' => $rightArticles,
        ));
    }
    /**
     * @Route("/verkoop", name="site_sales")
     */
    public function salesAction()
    {
        

        //making a list for every state.
        $west = $this->getDoctrine()->getRepository('SiteBundle:Sales')->west();
        $oost = $this->getDoctrine()->getRepository('SiteBundle:Sales')->oost();
        $antwerpen = $this->getDoctrine()->getRepository('SiteBundle:Sales') ->antwerpen();
        $limburg = $this->getDoctrine()->getRepository('SiteBundle:Sales') ->limburg();
        $vlaams = $this->getDoctrine()->getRepository('SiteBundle:Sales') ->vlaams();

        $listSales = array('west'=> $west, 'oost' => $oost, 'antwerpen' => $antwerpen, 'limburg' => $limburg, 'vlaams' => $vlaams);


        return $this->render('SiteBundle:Home:sales.html.twig',array(
            'listSales' => $listSales,
        ));
    }
    /**
     * @Route("/contact", name="site_contact")
     */
    public function contactAction()
    {
        return $this->render('SiteBundle:Home:contact.html.twig');
    }


}
