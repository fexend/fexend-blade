<?php

namespace App\Models;

use App\Observers\RoleObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Role as ModelsRole;

#[ObservedBy(RoleObserver::class)]
class Role extends ModelsRole
{
    use HasFactory;
    use HasUuids;
}
