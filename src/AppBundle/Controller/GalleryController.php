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
     * @Route("albums/{aid}/pictures", name="CopPictures")
     */

    public function picturesAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('AppBundle:CopPictures')->findAll();
        //var_dump($posts);die;


        return $this->render('gallery/pictures.html.twig', array(
            'posts' => $posts,
        ));
    }

    /**
     * @Route("albums/", name="CopAlbums")
     */

    public function albumsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $albums = $em->getRepository('AppBundle:CopAlbums')->findAll();
        $posts = $em->getRepository('AppBundle:CopPictures')->findAll();

      //  var_dump($posts);die;


        return $this->render('gallery/albums.html.twig', array(
            'albums' => $albums,
            'posts' => $posts,
        ));
    }
}