<?php

namespace App\View\Helper;

use Cake\ORM\TableRegistry;
use Cake\View\Helper;

class FormatHelper extends Helper
{
    public function getName($id, $table)
    {
        
        $record = TableRegistry::getTableLocator()->get($table);
        //$record = TableRegistry::get($table);
        $query = $record->find()->where(['id' => $id]);
        return $query->first()->name;
        
    }
    
}
