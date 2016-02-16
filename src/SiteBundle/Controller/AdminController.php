<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HomeController extends Controller
{
    /**
     * @Route("/admin", name="admin_index")
     */
    public function indexAction()
    {
        return $this->render('SiteBundle:Admin:index.html.twig');
    }
    /**
     * @Route("/admin/subscribers", name="admin_subscribers")
     */
    public function subscribersAction()
    {
        return $this->render('SiteBundle:Admin:subscribers.html.twig');
    }
    /**
     * @Route("/admin/articles", name="admin_articles")
     */
    public function articlesAction()
    {
        return $this->render('SiteBundle:Admin:articles.html.twig');
    }
    /**
     * @Route("/admin/articles/add", name="admin_articles_add")
     */
    public function addArticlesAction()
    {
        return $this->render('SiteBundle:Admin:addArticles.html.twig');
    }
    /**
     * @Route("/admin/articles/mod/{id}", name="admin_articles_mod")
     */
    public function modArticlesAction()
    {
        return $this->render('SiteBundle:Admin:modArticles.html.twig');
    }
    /**
     * @Route("/admin/articles/del/{id}", name="admin_articles_del")
     */
    public function delArticlesAction()
    {
        return $this->render('SiteBundle:Admin:delArticles.html.twig');
    }
    /**
     * @Route("/admin/sales", name="admin_sales")
     */
    public function salesAction()
    {
        return $this->render('SiteBundle:Admin:sales.html.twig');
    }
    /**
     * @Route("/admin/sales/add", name="admin_sales_add")
     */
    public function addSalesAction()
    {
        return $this->render('SiteBundle:Admin:addSales.html.twig');
    }
    /**
     * @Route("/admin/sales/mod/{id}", name="admin_sales_mod")
     */
    public function modSalesAction()
    {
        return $this->render('SiteBundle:Admin:modSales.html.twig');
    }
    /**
     * @Route("/admin/sales/del/{id}", name="admin_sales_del")
     */
    public function delSalesAction()
    {
        return $this->render('SiteBundle:Admin:delSales.html.twig');
    }   
}
