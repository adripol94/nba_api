<?php

/**
 * Created by PhpStorm.
 * User: apol
 * Date: 30/11/16
 * Time: 9:42
 */
class TeamController extends Controller
{
    public function manageGetVerb(Request $request) {
        $listaTeam = null;
        $id = null;
        $response = null;
        $code = null;

        if (isset($request->getUrlElements()[2])) {
            $id = $request->getUrlElements()[2];
        }

        $listaTeam = ManejadoraTeam::getTeam($id);

        if ($listaTeam != null) {
            $code = '200';
        } else {
            if (ManejadoraTeam::isValid($id)) {
                $code = '404';
            } else {
                $code = '400';
            }
        }

        $response = new Response($code, null, $listaTeam, $request->getAccept());
        $response->generate();
    }
}