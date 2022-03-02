<?php

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\annotation\Route;

/**
 * @Route("api/listings", name = "api_listings_")
 */
class ApiListingController extends AbstractController
{

    /**
     * @Route(
     *  "home/show_allHomes",
     *  name = "showAll",
     *  methods= {"GET"}
     * )
     */

    public function showListing():Response{
        $homes = $this->getDoctrine()
        ->getRepository(Empresa::class)
        ->findAll();

    }
   
    /**
     * @Route(
     *  "/home/show/{propertyId}",
     *  name = "home_show",
     *  methods= {"GET"},
     *  requirements = {
     *      "propertyId" = "\d+"
     *  }
     * )
     */

    public function show(int $id) :Response{
        $home = $this->getDoctrine()
            ->getRepository(Home::class)
            ->find($id);

        if (!$home) {
            throw $this->createNotFoundException(
                'No encontro home con id '.$id
            );
        }

    }

    /**
     * @Route(
     *  "/listings/add",
     *  name = "add_home",
     *  methods= {"POST"}
     * )
     */


    public function add(Request $request
    ):Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $home = new Home();
        $home->setName($request->request->get("name"));
        $home->setBedrooms($request->request->get("bedrooms"));
        $home->setBathrooms($request->request->get("bahtrooms"));
        $home->setMaxGuests($request->request->get("maxguests"));
        $home->setWifi($request->request->get("wifi"));
        $home->setAirConditioning($request->request->get("air_conditioing"));
        $home->setHeating($request->request->get("heating"));
        $home->setProvince($request->request->get("province"));
        $home->setCity($request->request->get("city"));
        $home->setPrice($request->request->get("price_night"));
        $entityManager->persist($home);
        return $this->redirectToRoute("/show_allHomes"); 

    }

    /**
     * @Route(
     *  "/update/{propertyId}",
     *  name = "get",
     *  methods= {"GET"},
     *  requirements = {
     *      "propertyId" = "\d+"
     *  }
     * )
     */

    public function update(int $id,
    Request $request) :Response{
        $entityManager = $this->getDoctrine()->getManager();
        $home = new Home();
        $home->setName($request->request->get("name"));
        $home->setBedrooms($request->request->get("bedrooms"));
        $home->setBathrooms($request->request->get("bahtrooms"));
        $home->setMaxGuests($request->request->get("maxguests"));
        $home->setWifi($request->request->get("wifi"));
        $home->setAirConditioning($request->request->get("air_conditioing"));
        $home->setHeating($request->request->get("heating"));
        $home->setProvince($request->request->get("province"));
        $home->setCity($request->request->get("city"));
        $home->setPrice($request->request->get("price_night"));
        $entityManager->persist($home);
        $entityManager->flush();

        return $this->redirectToRoute("/show_allHomes"); 

    }

    /**
     * @Route(
     *  "/delete/{propertyId}",
     *  name = "delete",
     *  methods= {"Delete"},
     *  requirements = {
     *      "propertyId" = "\d+"
     *  }
     * )
     */

    public function remove(
        int $id,
        Request $request) :Response{
            $home = $this->getDoctrine() ->getRepository(Home::class) ->find($id);
        
            $entityManager = $this->getDoctrine()->getManager();
    
            $entityManager->remove($home); 
            $entityManager->flush();
        }

}

?>