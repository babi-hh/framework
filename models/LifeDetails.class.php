<?php

namespace app\models;

use app\models\Node;

/**
 * Description of LifeDetails
 *
 * @author Seldoon <Sedloon@sina.cn>
 * Created: Mar 25, 2017 8:55:13 PM
 */
class LifeDetails extends Node {

    public function init() {
        $this->type = 'life_details';
        parent::init();
    }

}
