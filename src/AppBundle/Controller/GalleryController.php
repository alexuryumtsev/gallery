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
     * @Route("albums/pictures/{aid}", name="CopPictures")
     */

    public function picturesAction($aid)
    {
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('AppBundle:CopPictures')->findBy(array('aid' => $aid));
        //var_dump($posts);die;

        return $this->render('gallery/pictures.html.twig', array(
            'posts' => $posts,
        ));
    }

    /**
     *
     * @Route("albums/", name="CopAlbums")
     *
     */

    public function albumsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $albums = $em->getRepository('AppBundle:CopAlbums')->findAll();
        $posts = $em->getRepository('AppBundle:CopPictures')->findBy(array('pid' => '1'));

//        var_dump($posts);die;


        return $this->render('gallery/albums.html.twig', array(
            'albums' => $albums,
            'posts' => $posts,
        ));
    }
}