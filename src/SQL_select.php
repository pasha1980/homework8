<?php


namespace App;


class SQL_select
{

    public static function __callStatic($name, $arguments)
    {
        $request1 = 'SELECT ' . $arguments[0] . ' FROM ' . $arguments[1] . ' WHERE ';

        $findby = substr($name, 4, 2);

        if($findby == 'Be') {

            $rest = substr($name, 11);
        }
        elseif ($findby == 'By') {

            $rest = substr($name, 6);
        }

        if($rest == 'Id') {
            $request2 = 'id = ' . $arguments[2];
        }
        elseif ($rest == 'EmailAndByStatus') {
            $request2 = 'email = ' . $arguments[2] . ' AND status = ' . $arguments[3];
        }
        elseif ($rest == 'CreatedAt') {
            $request2 = 'created_at BETWEEN ' . $arguments[2] . 'AND' . $arguments[3];
        }
        elseif ($rest == 'CreatAtAndByStatus') {
            $request2 = 'created_at BETWEEN ' . $arguments[2] . 'AND' . $arguments[3] . 'AND status = ' . $arguments[4];
        }
        elseif ($rest == 'CreatedAt') {
            $request2 = 'created_at BETWEEN ' . $arguments[2] . 'AND' . $arguments[3] . 'AND status IN (' . $arguments[4] . ', ' . $arguments[5] . ')';
        }

        echo $request1 . $request2 . ';';                                   // Для проверки сформированного запроса
    }
}