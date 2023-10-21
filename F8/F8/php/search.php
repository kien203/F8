<?php
session_start();
include 'connect.php';
        $id = $_SESSION["id"];
        $searchValue = $_POST["searchValue"];
        $data = "SELECT * FROM info_course WHERE title LIKE '%$searchValue%' ";
        $show = mysqli_query($conn, $data);
        while ($row = mysqli_fetch_array($show)) {
            $name = $row["name"];
            $title = $row["title"];
            $img = $row["img"];
            $stringName = strval($name);
            // echo "$name";
            $sql = "SELECT * FROM course_registed WHERE id_user = $id";
            $result = mysqli_query($conn, $sql);
            $array = array();
            while ($row2 = mysqli_fetch_array($result)){
                $name_course = $row2["name_course"];
                array_push($array, $name_course);
            }

            for ($i=0; $i < count($array); $i++) { 
                $stringName2 = strval($array[$i]);
                if ($stringName == $stringName2) {
                    $link = "./learn/" . $name . ".html";
                } else {
                    $link = "index.php?page_layout=./course_free/" . $name . ".php";
                }
                $string = $img . "|n" . $title . "|n" . $link . "|a";
                break;
            }
            echo $string;
        }
?>