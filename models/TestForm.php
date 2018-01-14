<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 12.01.18
 * Time: 18:32
 */

namespace app\models;


use yii\base\Model;

class TestForm extends Model
{
    public $name;
    public $email;
    public $text;

    public function attributeLabels(){
    	return [
    	'name' => 'имя в модели',
    	'email' => 'E-mail',
    	'text' => 'Текст сообщения',
    	];
    }

    public function rules(){
    	return [
    		[['name','email'], 'required', 'message' => 'поле обязательно'],
    		['email', 'email'],
    		// ['name', 'string', 'min' => 2, 'tooShort' => 'слишко мало символов'],
    		// ['name', 'string', 'max' => 5, 'tooLong' => 'слишком много символов'],
    		['name', 'string','length' => [2,5]],
    		['name', 'myRule'],
    		['text', 'trim'],
    	];
    }

    public function myRule($attribute)
    {
        if (!in_array($this->$attribute, ['hello', 'world'])) {
            $this->addError($attribute, 'Must be hello or world');
        }
    }
}