<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable=['Ndato','TipoIdentificacion','Rsocial','DireccionC','correo','celular','telefono1','telefono2'];
}
