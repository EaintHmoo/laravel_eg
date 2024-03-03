<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Tests\Browser\ThreadTypeTest;

class Branch extends Model
{
    use SoftDeletes;
    // use MultiTenantModelTrait;
    use Auditable;
    use HasFactory;

    public $table = 'branches';

    public static $searchable = [
        'name',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'created_at',
        'user_id',
        'updated_at',
        'deleted_at',
        'created_by_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }



    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function currency_rates(): BelongsToMany
    {
        return $this->belongsToMany(CurrencyRate::class, 'currency_rate_branch', 'branch_id', 'currency_rate_id');
    }

    public function purchase_sources(): BelongsToMany
    {
        return $this->belongsToMany(PurchaseSource::class, 'purchase_source_branch', 'branch_id', 'purchase_source_id');
    }

    public function brands(): BelongsToMany
    {
        return $this->belongsToMany(Brand::class, 'brand_branch', 'branch_id', 'brand_id');
    }

    public function mades(): BelongsToMany
    {
        return $this->belongsToMany(Made::class, 'made_branch', 'branch_id', 'made_id');
    }

    public function units(): BelongsToMany
    {
        return $this->belongsToMany(Unit::class, 'unit_branch', 'branch_id', 'unit_id');
    }

    public function thread_types(): BelongsToMany
    {
        return $this->belongsToMany(ThreadType::class, 'thread_type_branch', 'branch_id', 'thread_type_id');
    }

    public function damages()
    {
        return $this->belongsToMany(Damage::class, 'damage_branch', 'branch_id', 'damage_id')->orderBy('date', 'desc');
    }

    public function usages()
    {
        return $this->belongsToMany(Usage::class, 'usage_branch', 'branch_id', 'usage_id');
    }

    public function maintenances()
    {
        return $this->hasMany(Maintenance::class, 'branch_id')->orderBy('date', 'desc');
    }

    // public function customers(): BelongsToMany
    // {
    //     return $this->belongsToMany(Customer::class, 'branch_id');
    // }
}
