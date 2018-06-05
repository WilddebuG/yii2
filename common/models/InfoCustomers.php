<?php
/**
 * Created by PhpStorm.
 * User: wilddebug
 * Date: 05.06.18
 * Time: 11:23
 */

namespace common\models;

use yii\db\ActiveRecord;
use yii\base\Model;

class InfoCustomers extends Model
{
    public $first_name;
    public $last_name;
    public $email;

    public function rules()
    {
        return [[
                ['email','first_name','last_name'],'required'],
                ['email','email'],
            ];
    }


}