<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    public function getEstadoSpanAttribute(){
        $span = "";
        switch ($this->estado){
            case "aceptado":
                $span = '<span class="badge bg-label-success me-1">ACEPTADO</span>';
            break;
            case "en espera":
                $span = '<span class="badge bg-label-primary me-1">EN ESPERA</span>';
            break;
            case "cancelado":
                $span = '<span class="badge bg-label-warning me-1">CANCELADO</span>';
            break;
            case "baneado":
                $span = '<span class="badge bg-label-info me-1">BANEADO</span>';
            break;
        }
        return $span;
    }
}
