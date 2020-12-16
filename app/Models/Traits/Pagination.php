<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

trait Pagination {

  public function addPagination(Builder $query, array $params) {
    return $query->paginate(config('config.perPage', 15))
      ->appends($params);
  }
}
