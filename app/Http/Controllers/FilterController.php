<?php

	namespace App\Http\Controllers;

	use App\Models\Post;
	use Illuminate\Http\Request;
	use Illuminate\View\View;

	class FilterController extends Controller {
		public function __invoke(): View {
			$posts = Post::allPost();

			return view('posts', compact('posts'));
		}
	}
