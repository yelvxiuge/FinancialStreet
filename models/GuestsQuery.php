<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Guests]].
 *
 * @see Guests
 */
class GuestsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Guests[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Guests|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
