<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Funcionario;
use App\Permission;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    
    public function userFuncionario()
    {
        return $this->hasOne(Funcionario::class);
    }

    public function role()
    {
        return $this->belongsToMany(\App\Role::class);
    }

    public function hasPermission(Permission $permission)
    {
        # code...
        return $this->hasAnyRole($permission->roles);
    }

    public function hasAnyRole($roles)
    {
        # code...
        if (is_array($roles)|| is_object($roles)){

           return !! $roles->intersect($this->role)->count();
            }
            return $this->role->contains('name', $roles);
    }
}
