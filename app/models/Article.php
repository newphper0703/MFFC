<?php
/**
 * Article Model
 */
class Article extends \Illuminate\Database\Eloquent\Model
{
    public $timestamps = false;

    public static function first()
    {
        $connection = mysqli_connect("127.0.0.1","root","123456");
        if (!$connection) {
            die('Could not connect: ' . mysqli_error($connection));
        }

        mysqli_set_charset($connection, "utf8mb4");

        mysqli_select_db($connection, "mffc");

        $result = mysqli_query($connection, "SELECT * FROM articles limit 0,1");

        if ($row = mysqli_fetch_array($result)) {
            return $row;
            echo '<h1>'.$row["title"].'</h1>';
            echo '<p>'.$row["content"].'</p>';
        }

        mysqli_close($connection);
    }
}
