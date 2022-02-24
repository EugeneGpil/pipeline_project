<?php

	namespace App\QueryFilters;

	use Illuminate\Database\Eloquent\Builder;

	class Active extends Filter {

		protected function applyFilters($builder): Builder {
			return $builder->where('active', request($this->filterName()));
		}

	}