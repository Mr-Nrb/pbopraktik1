<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierModel extends Model
{
    use HasFactory;
    protected $table = 'supplier';
    protected $softDelete = false;
    public $timestamps = false;
    protected $primaryKey = 'id_supplier';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['nama_supplier','alamat_supplier','telp_supplier'];
}
