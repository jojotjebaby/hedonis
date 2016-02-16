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
        return $this->render('SiteBundle:Home:index.html.twig');
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
        return $this->render('SiteBundle:Beer:duiker.html.twig');
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
        return $this->render('SiteBundle:Home:news.html.twig');
    }
    /**
     * @Route("/verkoop", name="site_sales")
     */
    public function salesAction()
    {
        return $this->render('SiteBundle:Home:sales.html.twig');
    }
    /**
     * @Route("/contact", name="site_contact")
     */
    public function contactAction()
    {
        return $this->render('SiteBundle:Home:contact.html.twig');
    }


}
