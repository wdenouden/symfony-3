<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use JMS\JobQueueBundle\Entity\Job;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
//    /**
//     * @Route("/", name="homepage")
//     */
//    public function indexAction(Request $request)
//    {
//        // replace this example code with whatever you need
//        return $this->render('default/index.html.twig', [
//            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
//        ]);
//    }
//
//    /**
//     * @Route("/add", name="addProducts")
//     */
//    public function addAction()
//    {
//        $em = $this->getDoctrine()->getManager();
//
//        for($i = 1; $i <= 20; $i++) {
//            $product = new Product();
//            $product->setName('Product' . $i);
//            $product->setPrice(mt_rand(10, 200));
//            $product->setDescription('Lorem ipsem');
//
//            $em->persist($product);
//            $em->flush();
//        }
//
//        return new Response('Products added');
//
//    }
//
//    /**
//     * @Route("/grid", name="grid")
//     */
//    public function gridAction() {
//        return $this->_datatable()->execute();
//    }
//
//    /**
//     * @Route("/show", name="show_products")
//     */
//    public function showAction() {
//        $this->_datatable();
//        return $this->render('default/show.html.twig');
//    }
//
//    /**
//     * @Route("/delete/{id}", name="delete_product")
//     */
//    public function delete($id) {
//
//    }
//
//    /**
//     * @Route("/edit/{id}", name="edit_product")
//     */
//    public function edit($id) {
//
//    }
//
//    /**
//     * @return \Ali\DatatableBundle\Util\Datatable
//     */
//    private function _datatable() {
//        return $this->get('datatable')
//            ->setEntity(Product::class, "x")
//            ->setFields(
//                array(
//                    "Name"          => "x.name",
//                    "Description"   => "x.description",
//                    "Price"         => "x.price",
//                    "_identifier_"  => "x.id"
//                )
//            );
//    }
//
//    /**
//     * @Route("/add_job", name="add_job")
//     */
//    public function addJob() {
//        $em = $this->getDoctrine()->getManager();
//
//        $job = new Job('app:create-product');
//        $em->persist($job);
//        $em->flush();
//
//        return new Response('Job added!');
//
//    }
}
