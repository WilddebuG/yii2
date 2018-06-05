<?php
/**
 * Created by PhpStorm.
 * User: wilddebug
 * Date: 05.06.18
 * Time: 11:50
 */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;

?>

    <div class="new">
        <h1>Posts info</h1>
    </div>
    <table style="width:100%">
        <tr style="background: lime;">
            <th>Title</th>
            <th>Description</th>
            <th>Posted by</th>
            <th>User email</th>
        </tr>
        <?php
        foreach ($posts as $post) {
            $user = $post->customer;
            echo '<tr><td>' . $post->post_title . '</td>';
            echo '<td>' . $post->post_description . '</td>';
            echo '<td>' . $user->first_name . ' ' . $user->last_name . '</td>';
            echo '<td>' . $user->email . '</td></tr>';
        }
        ?>
    </table>