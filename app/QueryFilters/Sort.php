<?php

	namespace App\QueryFilters;

	use Illuminate\Database\Eloquent\Builder;

	class Sort extends Filter {

		protected function applyFilters($builder): Builder {
			return $builder->orderBy('title', request($this->filterName()));
		}

	}