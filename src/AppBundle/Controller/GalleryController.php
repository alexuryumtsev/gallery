<?php
/**
 * Created by PhpStorm.
 * User: stazher
 * Date: 16.05.18
 * Time: 15:14
 */

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GalleryController extends Controller
{
    /**
     * @Route("albums/", name="pictures")
     */

    public function listAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('AppBundle:Cpg15xPictures')->findAll();
      //  var_dump($posts);die;


        return $this->render('gallery/pictures.html.twig', array(
            'posts' => $posts,
        ));
    }
}