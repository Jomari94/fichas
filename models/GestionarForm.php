<?php

namespace app\models;

use yii\base\Model;

class GestionarForm extends Model
{
    public $titulo;
    public $nombre;

    public function rules()
    {
        return [
            [['titulo', 'nombre',], 'required'],
            [['titulo'], 'string', 'max' => 100],
            [['nombre'], 'string', 'max' => 50],
            [['titulo'], 'exist',
                'skipOnError' => true,
                'targetClass' => Ficha::className(),
                'targetAttribute' => ['titulo' => 'titulo'],
            ],
            [['nombre'], 'exist',
                'skipOnError' => true,
                'targetClass' => Persona::className(),
                'targetAttribute' => ['nombre' => 'nombre'],
            ],
        ];
    }
}
