<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job_listings';
    protected $fillable = ['title', 'salary'];

    public static function findById($id)
    {
        $job = Job::find($id);
        if (!$job) {
            abort(404);

        }
        return $job;
    }
//    public function getidAttribute()
//    {
//        // Logic to retrieve the sid value (e.g., from related data)
//        return $this->attributes['id'];
//    }

}
