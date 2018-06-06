<?php
/**
 * Created by PhpStorm.
 * User: wilddebug
 * Date: 06.06.18
 * Time: 10:17
 */

namespace frontend\controllers\api\v1;

use common\models\Posts;
use yii\rest\ActiveController;

class PostsController extends ActiveController
{
    public $modelClass = 'common\models\Posts';



}