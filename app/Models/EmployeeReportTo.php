<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeReportTo extends Model
{
  protected $table = 'employee_reports_to';
    public $timestamps = false;
    
        protected $fillable = [
        'report_to','employee_id'
    ];
    
}
