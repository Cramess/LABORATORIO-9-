<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    use HasFactory;
    protected $table = 'productos'; 
    protected $primaryKey = 'id_producto';
    protected $fillable = ['nombre', 'marca', 'precio', 'stock', 'id_categoria'];

    #Esto indica que cada producto pertenece a una única categoría. Método inverso al definidio en el modelo Category
    public function categorya() {
        return $this->belongsTo('App\Models\Categoria', 'id_categoria', 'id_categoria');
    }
}
