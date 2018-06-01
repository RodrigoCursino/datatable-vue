<?php

namespace App\Utils;

use Illuminate\Validation\ValidationException;

trait DataViewer
{
    public function scopeAdvencedFilters ($query)
    {
        return $this->process($query, request()->all())
            ->orderBy(
                request('order_column', 'created_at'),
                request('order_direction', 'desc')
        )->paginate(request('limit',10));
    }

    public function process($query, $data)
    {
        $v = validator()->make($data, [
            'order_column'    => 'sometimes|required|in:'.$this->orderableColumns(),
            'order_direction' => 'sometimes|required|in:asc,desc',
            'limit'           => 'sometimes|required|integer|min:1',
            // advenced filters
            'filter_match'    => 'sometimes|required|in:and,or',
            'f'               => 'sometimes|required|array',
            'f.*.column'      => 'required|in:'.$this->writeListColumns(),
            'f.*.operator'    => 'required_with:f.*.column|in:'.$this->allowedFilters(),
            'f.*.query_1'     => 'required',
            'f.*.query_2'     => 'required_if:f.*.operator,between,not_between'
        ]);

        if ($v->fails()) {
            return dd($v->messages()->all());
            throw new ValidationException();
        };

        return (new CustomQueryBuilder)->apply($query, $data);
    }
    protected function writeListColumns () {

        return implode(",", $this->allowedFilters);
    }
    protected function orderableColumns () {

        return implode(",", $this->orderable);
    }
    protected function allowedFilters () {

        return implode(",", [
            'equal_to',
            'not_equal_to',
            'less_than',
            'greater_than',
            'between',
            'not_between',
            'contains',
            'starts_with',
            'ends_with',
            'in_the_past',
            'in_the_next',
            'in_the_peroid',
            'less_than_count',
            'greater_than_count',
            'equals_to_count',
            'equals_to_count',
            'not_equals_to_count',
            'not_equals_to_count'
        ]);
    }
}