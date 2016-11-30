<?php

/**
 * Created by PhpStorm.
 * User: apol
 * Date: 24/11/16
 * Time: 10:19
 */

require_once "ConsTeam.php";

class ManejadoraTeam
{
    public static function getTeam($id) {
        //Listado de equipos preparado
        $ListaTeams = null;

        // Intanciamos la base datos y despues cogemos la conexion
        $db = DataBaseAcces::getInstance();
        $db_connection = $db->getConnection();

        //IMPORTANTE: Debemos validar que el codigo por donde vamos a referenciar
        // el equipo es un digito EJ: codigo = 3 y no codigo = 3jghjsj.
        // Tambien debemos de crear un metodo para cambiar el codigo que se muestra
        // al codigo real de la base de datos

        $valid = self::isValid($id);

        // Si es nulo el id no metemos en la query el where id = cod
        if ($valid === true || $id == null) {
            $query = "SELECT " . \ConsTeamDB\ConsTeam::COD . ","
                . \ConsTeamDB\ConsTeam::FULL_NAME . ","
                . \ConsTeamDB\ConsTeam::CITY . ","
                . \ConsTeamDB\ConsTeam::ABREBIATION . ","
                . \ConsTeamDB\ConsTeam::STATE . ","
                . \ConsTeamDB\ConsTeam::DIVISION . " FROM "
                . \ConsTeamDB\ConsTeam::TABLE_NAME;

            if ($id != null) {
                $query = $query . " WHERE " . \ConsTeamDB\ConsTeam::COD . "= ?";
            }

            $prepare_query = $db_connection->prepare($query);

            if ($id != null) {
                $prepare_query->bind_param('s', $id);
            }

            $prepare_query->execute();
            $ListaTeams = array(); //Convierte la lista en un array

            // ??
            $prepare_query->bind_result($cod, $full_name, $city, $abrebiation,
                $state, $division);

            while ($prepare_query->fetch()) {
                //Crear el objeto
                $team = new Team($cod, $full_name, $city, $abrebiation,
                    $state, $division);
                //Añadir al array
                $ListaTeams[] = $team;
            }
        }

        $db_connection->close();
        return $ListaTeams;
    }

    public static function isValid($id) {
        $res = false;

        if(ctype_digit($id)) {
            $res = true;
        }
        return $res;
    }



}