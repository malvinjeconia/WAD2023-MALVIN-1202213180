<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use app\Http\Models;

class ShowroomController extends Controller
{
   use HasFactory;

   protected $table = 'showroom_mobil';

   protected $fillable = [

        'id','nama_mobil','brand_mobil','warna_mobil','tipe_mobil','harga_mobil'   
   ];
}
