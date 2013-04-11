<?php
/**
 * @package       Setting.Model
 */
class SettingModel extends AppModel {
    public $validate = array(
        'tag_height' => array(
            'rule' => 'isRequired()'
        ),
        'tag_width' => array(
            'rule' => 'notEmpty'
        ),
        
    );

}
