<?php

namespace Guywarner\LaravelSinglestoreFulltext\Models;

use Guywarner\LaravelSinglestoreFulltext\Database\SingleStoreQueryBuilder;
use Illuminate\Database\Eloquent\Model;

class SingleStoreModel extends Model
{
    protected function newBaseQueryBuilder(): SingleStoreQueryBuilder
    {
        return new SingleStoreQueryBuilder($this->getConnection());
    }
}
