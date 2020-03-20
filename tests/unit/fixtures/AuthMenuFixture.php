<?php

namespace tests\unit\fixtures;

use yii\test\BaseActiveFixture;

class AuthMenuFixture extends BaseActiveFixture
{
    public $tableName = '{{%auth_menu}}';
    public $dataFile = '@app/tests/unit/fixtures/data/auth_menu.php';

    public function load()
    {
        $fixtureData = $this->getData();
        $this->data = [];
        foreach ($fixtureData as $alias => $row) {
            $this->db->createCommand()->insert($this->tableName, $row)->execute();
            $this->data[$alias] = $row;
        }
    }

    public function unload()
    {
        $fixtureData = $this->getData();
        $id = array_column($fixtureData, 'id');
        $this->db->createCommand()->delete($this->tableName, ['IN', 'id', $id])->execute();

        parent::unload();
    }
}
