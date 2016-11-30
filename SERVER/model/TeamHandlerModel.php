<?php

/**
 * Created by PhpStorm.
 * User: apol
 * Date: 24/11/16
 * Time: 10:19
 */

require_once "ConsTeam.php";
require_once "Team.php";

class TeamHandlerModel
{
    public static function getTeam($id) {
        //Listado de equipos preparado
        $ListaTeams = null;

        // Intanciamos la base datos y despues cogemos la conexion
        $db = DatabaseModel::getInstance();
        $db_connection = $db->getConnection();

        //IMPORTANTE: Debemos validar que el codigo por donde vamos a referenciar
        // el equipo es un digito EJ: codigo = 3 y no codigo = 3jghjsj.
        // Tambien debemos de crear un metodo para cambiar el codigo que se muestra
        // al codigo real de la base de datos

        $valid = self::isValid($id);

        // Si es nulo el id no metemos en la query el where id = cod
        if ($valid === true || $id == null) {
            $query = "SELECT " . \ConsTeamDB\ConsTeam::COD . ","
                . \ConsTeamDB\ConsTeam::ACTIVE . ","
                . \ConsTeamDB\ConsTeam::TEAM_NAME . ","
                . \ConsTeamDB\ConsTeam::FIRST_NAME . ","
                . \ConsTeamDB\ConsTeam::LAST_NAME . ","
                . \ConsTeamDB\ConsTeam::ABREBIATION . ","
                . \ConsTeamDB\ConsTeam::CITY . ","
                . \ConsTeamDB\ConsTeam::STATE . ","
                . \ConsTeamDB\ConsTeam::DIVISION . ","
                . \ConsTeamDB\ConsTeam::CONFERENCE . " FROM "
                . \ConsTeamDB\ConsTeam::TABLE_NAME;

            if ($id != null) {
                $query = $query . " WHERE " . \ConsTeamDB\ConsTeam::COD . "= ?";
            }

            $prepare_query = $db_connection->prepare($query);

            if ($id != null) {
                $prepare_query->bind_param('i', $id);
            }

            $prepare_query->execute();
            $ListaTeams = array(); //Convierte la lista en un array

            // ??
            $prepare_query->bind_result($team_id, $team_name, $first_name, $last_name, $active, $city, $abbreviation, $state, $division, $conference);

            while ($prepare_query->fetch()) {
                //Crear el objeto
                $team = new Team($team_id, $team_name, $first_name, $last_name, $active, $city, $abbreviation, $state, $division, $conference);
                //Añadir al array
                $ListaTeams[] = $team;
            }

            if (sizeof($ListaTeams)<=1) {
                $respuesta = $team;
            } else {
                $respuesta = $ListaTeams;
            }
        }

        $db_connection->close();
        return $respuesta;
    }

    public static function postTeam(Team $team)
    {
        $db = DatabaseModel::getInstance();
        $db_connection = $db->getConnection();

        $query = "INSERT INTO Equipos(active, team_name, first_name, last_name, abbreviation, city, site_name, conference, division_id) VALUES (?,?,?,?,?,?,?,?,?)";

        $prepare = $db_connection->prepare($query);

        //TODO Terminar!
        $prepare->bind_param('issssssss', $team->getActive());


    }
        public static function isValid($id) {
        $res = false;

        if(ctype_digit($id)) {
            $res = true;
        }
        return $res;
    }



}