<?php
/**
 * Created by PhpStorm.
 * User: Dani
 * Date: 30/05/2018
 * Time: 18:51
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Team;
use AppBundle\Form\TeamType;
#use AppBundle\Model\Dao\EquipoDao;

class TeamController extends Controller
{
    /**
     * @Route("/crearEquipo", name="crearEquipo")
     */
    public function crearAction()
    {
        $team = new Team();
        $titulo = "Create Equipo";
        $form = $this->createForm(TeamType::class, $team);

        return $this->render('team/crear.html.twig', [
            'form' => $form->createView(),
            'titulo' => $titulo,
        ]);
    }

    /**
     * @Route("/equipo/guardar", name="guardarEquipo")
     */
    public function guardarAction(Request $request) {
        if (!$request->isMethod('POST')) {
            //return $this->redirectToRoute('catalogo.listar');
        }
        $team = new Team();
        $form = $this->createForm(TeamType::class, $team);

        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($team);
            $em->flush();
            $this->addFlash('success', $this->get('translator')->trans('Product successfully saved!'));
            return $this->redirectToRoute('crearEquipo');
        }

    }
}