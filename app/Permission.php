<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [
    	'name','slug','description','role_id'
    ];

    //Relaciones
    public function role()
    {
    	return $this->belongsTo('App\Role');
    }

    public function users()
    {
    	return $this->belongsToMany('App\User')->withTimestamps();
    }

    //Almacenamiento
    public function store($request)
    {
        $slug = str_slug($request->name, '-');
        alert('Éxito','El permiso se ha creado','success')->showConfirmButton();
        return self::create($request->all() + [
            'slug' => $slug,
        ]);
    }

    public function my_update($request)
    {
        $slug = str_slug($request->name, '-');
        self::update($request->all() + [
            'slug' => $slug,
        ]);
        alert('Éxito','El permiso se ha actualizado correctamente','success')->showConfirmButton();
    }

    //Validación

    //Recuperación de información

    //Otras operaciones
}
