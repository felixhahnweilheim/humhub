<?php

namespace humhub\modules\user\widgets;

use humhub\modules\user\models\User;

class UserWall extends \humhub\components\Widget
{

    /**
     * @var User $user
     */
    public $user;

    public function run()
    {
        return $this->render('userWall', ['user' => $this->user]);
    }

}
