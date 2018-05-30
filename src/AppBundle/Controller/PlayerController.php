<?php
/**
 * Created by PhpStorm.
 * User: Dani
 * Date: 30/05/2018
 * Time: 19:58
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Player;
use AppBundle\Form\PlayerType;


class PlayerController extends Controller
{

    /**
     * @Route("/crearJugador", name="crearJugador")
     */
    public function crearAction()
    {
        $team = new Player();
        $titulo = "Create Player";
        $form = $this->createForm(PlayerType::class, $team);

        return $this->render('player/crear.html.twig', [
            'form' => $form->createView(),
            'titulo' => $titulo,
        ]);
    }

    /**
     * @Route("/jugador/guardar", name="guardarPlayer")
     */
    public function guardarAction(Request $request) {
        if (!$request->isMethod('POST')) {
            //return $this->redirectToRoute('catalogo.listar');
        }
        $team = new Player();
        $form = $this->createForm(PlayerType::class, $team);

        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($team);
            $em->flush();
            $this->addFlash('success', $this->get('translator')->trans('Product successfully saved!'));
            return $this->redirectToRoute('crearJugador');
        }

    }

}