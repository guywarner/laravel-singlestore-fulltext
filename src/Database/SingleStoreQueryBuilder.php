<?php

class SingleStoreQueryBuilder extends \Illuminate\Database\Query\Builder
{
    /**
     * Add a fulltext search to the query.
     *
     * @param  array  $columns
     * @param  string  $value
     * @return $this
     */
    public function whereMatch(array $columns, string $value)
    {
        return $this->whereRaw("MATCH ({$this->grammar->columnize($columns)}) AGAINST (?)", [$value]);
    }
}
