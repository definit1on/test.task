<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'logo', 'website'];

    // Relationship to Employees
    public function employee() {
        return $this->hasMany(Employee::class, 'company_id');
    }
}
