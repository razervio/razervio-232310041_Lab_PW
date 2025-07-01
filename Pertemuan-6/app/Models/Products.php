<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'is_active'
    ];

    /**
     * Menyimpan data ke database.
     */
    public function storeData($data)
    {
        return self::create($data);
    }

    /**
     * Mengambil data berdasarkan kondisi tertentu.
     */
    public function getByCondition($condition)
    {
        return DB::table($this->table)
            ->where($condition)
            ->get();
    }

    /**
     * Memperbarui data jika data dengan id yang diberikan ada.
     */
    public function updateData($data)
    {
        $isExist = $this->getByCondition([['id', $data['id']]])->first();

        if (!empty($isExist)) {
            unset($data['_token']); // Hilangkan token jika ada
            return DB::table($this->table)
                ->where('id', $data['id'])
                ->update($data);
        }

        return null;
    }

    /**
     * Menghapus data berdasarkan kondisi tertentu.
     */
    public function removeByCondition($condition)
    {
        return self::where($condition)->delete();
    }
}
