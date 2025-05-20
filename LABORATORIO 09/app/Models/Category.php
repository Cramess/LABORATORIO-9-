<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;
#Define un modelo Eloquent en Laravel que representa la tabla categorias en la base de datos. 
#Este modelo facilita la interacción con la base de datos utilizando el ORM (Mapeo Objeto-Relacional) de Laravel.
#HasFactory: Permite utilizar fábricas de modelos para generar datos de prueba.
#Model: La clase base de Eloquent, de la cual Category hereda funcionalidades para interactuar con la base de datos.
class Category extends Model
{
    use HasFactory;
    # Especifica el nombre de la tabla de la base de datos
    protected $table = 'categorias'; 
    #Por defecto, Eloquent espera que la clave primaria sea id, por lo que esta línea es necesaria para adaptarse 
    #a la estructura de la base de datos.
    protected $primaryKey = 'id_categoria'; 
    #Especifica que el atributo descripcion es "masivamente asignable", lo que significa que se puede asignar en masa
    # (por ejemplo, al crear o actualizar registros). Esto es una medida de seguridad para evitar la asignación masiva
    # de columnas no deseadas.
    protected $fillable = ['descripcion'];

    public function products()
    {
        # Especifica el modelo con el que se aplicó la relación de uno a muchos, define el nombre de la clave foránea
        # del modelo con el que se aplica la relación, indica el nombre de la clave primaria de esta clase
        return $this->hasMany('App\Models\Producto', 'id_categoria', 'id_categoria');
    }   
}