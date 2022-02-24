<?php

	namespace App\QueryFilters;

	use Closure;
	use Illuminate\Database\Eloquent\Builder;
	use Illuminate\Support\Str;

	abstract class Filter {
		public function handle($request, Closure $next): Builder {

			if (!request()->has($this->filterName())) {
				return $next($request);
			}

			$builder = $next($request);

			return $this->applyFilters($builder);
		}

		protected abstract function applyFilters($builder): Builder;

		protected function filterName(): string {
			return Str::snake(class_basename($this));
		}
	}