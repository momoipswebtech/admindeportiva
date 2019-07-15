<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
    	'name','slug','description'
    ];

    //Relaciones
    public function permissions()
    {
    	return $this->hasMany('App\Permission');
    }

    public function users()
    {
    	return $this->belongsToMany('App\User')->withTimestamps();
    }

    //Almacenamiento
    public function store($request)
    {
        $slug = str_slug($request->name, '-');
        alert('Éxito','El rol se ha guardado','success')->showConfirmButton();
        return self::create($request->all() + [
            'slug' => $slug,
        ]);
    }

    public function my_update($request)
    {
        $slug = str_slug($request->name, '-');
        self::update($request->all() + [
            'slug' => $slug
        ]);
        alert('Éxito','El rol se ha actualizado','success')->showConfirmButton();
    }

    //Validación

    //Recuperación de información

    //Otras operaciones

}
