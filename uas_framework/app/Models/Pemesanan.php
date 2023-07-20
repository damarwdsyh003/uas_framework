<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    public $timestamps=false;

    protected $table="pemesanan";
    protected $primaryKey="id_pemesanan";
    protected $fillable=[
        'tgl_pemesanan',
        'id_makanan',
        'id_minuman',
        'id_users',
    ];

    // Pemesanan.php

    public function makanan()
    {
        return $this->belongsTo('App\Models\Makanan', 'id_makanan', 'id_makanan');
    }

    public function minuman()
    {
        return $this->belongsto('App\Models\Minuman', 'id_minuman', 'id_minuman');
    }

    public function users()
    {
        return $this->belongsto('App\Models\Users', 'id_users', 'id_users');
    }
}
