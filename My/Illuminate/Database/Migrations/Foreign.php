<?php

namespace My\Illuminate\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;

trait Foreign
{
    
    public function dropForeign($index) {
        $blueprint = new Blueprint($this->table);
        $blueprint->dropForeign($index);
    }

}
