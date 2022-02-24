<?php

	namespace App\QueryFilters;

	use Illuminate\Database\Eloquent\Builder;

	class MaxCount extends Filter
	{

		protected function applyFilters($builder): Builder
		{
			return $builder->take(request($this->filterName()));
		}

	}