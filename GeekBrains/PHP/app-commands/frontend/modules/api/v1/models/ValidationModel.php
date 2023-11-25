<?php

namespace frontend\modules\api\v1\models;

use yii\base\Model;

abstract class ValidationModel extends Model
{
    public function getErrorMessage()
    {
        $arrayErrors = [];
        foreach ($this->getErrors() as $key => $error) {
            foreach ($error as $errorMessage) {
                $arrayErrors[$key] = $errorMessage;
            }
        }

        return $arrayErrors;
    }
}
