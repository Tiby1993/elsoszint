<?php

/**
 * Created by PhpStorm.
 * User: Gulyás Gergő
 * Date: 2016. 11. 15.
 * Time: 23:20
 */
class model_feed_post extends Application
{
    function __construct() {
        // adatbázis csatlakozás
        try{
            include 'database.php';
            $cfg = "application/include/config.php";
            new database($cfg);
        } catch(Exception $exc ) {
            echo $exc->getMessage();
        }
        $this->profile($_SESSION['id']);
    }

    public function getAllFeed($user_id = null)
    {
        $query = "SELECT * 
                  FROM feed_post";


        if($user_id) {
            $query .= "WHERE `created_by` = " . $user_id;
        }

        if($sql = mysql_query($query)) {
            $data = mysql_fetch_assoc($sql);
        } else {
            throw new Exception ("Hiba");
        }

        return $data;
    }

    public function getCommentForPost($post_id = null)
    {
        if(!$post_id) {
            throw new Exception ("Nincs ilyen poszt");
        }

        $query = "SELECT * 
                  FROM comment
                  WHERE feed_post_id = " . $post_id;

        if($sql = mysql_query($query)) {
            $data = mysql_fetch_assoc($sql);
        } else {
            throw new Exception ("Hiba");
        }

        return $data;
    }

    public function getLikesForPost($post_id = null)
    {
        if(!$post_id) {
            throw new Exception ("Nincs ilyen poszt");
        }

        $query = "SELECT u.username, u.full_name, f.feed_post_id 
                  FROM feed_like as f 
                  JOIN users as u ON u.id = f.user_id 
                  WHERE feed_post_id = " . $post_id;

        if($sql = mysql_query($query)) {
            $data = mysql_fetch_assoc($sql);
        } else {
            throw new Exception ("Hiba");
        }

        return $data;
    }

    public function getLikesCountForPost($post_id = null)
    {
        if(!$post_id) {
            throw new Exception ("Nincs ilyen poszt");
        }

        $query = "SELECT count(*) 
                  FROM feed_like as f 
                  WHERE feed_post_id = " . $post_id;

        if($sql = mysql_query($query)) {
            $data = mysql_fetch_assoc($sql);
        } else {
            throw new Exception ("Hiba");
        }

        return $data;
    }

}