@extends('web.master')

@section('title', 'Blog')

@section('content')
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h1 class="text-3xl font-bold text-gray-900 mb-4">Latest News & Tips</h1>
            <p class="text-gray-600 max-w-2xl mx-auto">Stay updated with our latest news, driving tips, and travel guides.</p>
        </div>

        @php($paginator = \App\Models\Blog::where('is_published', true)->latest('published_at')->paginate(9))
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($paginator as $post)
                <article class="bg-white rounded-2xl shadow-md overflow-hidden group hover:shadow-xl transition duration-300">
                    @if($post->thumbnail_path)
                        <img src="{{ asset('storage/'.$post->thumbnail_path) }}" alt="{{ $post->title }}" class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
                    @endif
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-4">
                            <span>{{ optional($post->published_at)->format('F d, Y') }}</span>
                            <span class="mx-2">•</span>
                            <span>Read</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">
                            <a href="{{ url('blog/details/'.$post->slug) }}" class="hover:text-indigo-600 transition">{{ $post->title }}</a>
                        </h3>
                        @if($post->excerpt)
                            <p class="text-gray-600 mb-6">{{ $post->excerpt }}</p>
                        @endif
                        <div class="flex items-center justify-between">
                            <a href="{{ url('blog/details/'.$post->slug) }}" class="text-indigo-600 font-medium hover:text-indigo-700 transition">Read More →</a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="mt-8">
            {{ $paginator->withQueryString()->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>
</section>
@endsection
