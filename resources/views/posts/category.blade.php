<x-layout :categories="$categories" >
@include('posts._header')

 

  <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
  @if($category->posts->count())
    <x-post-feature-card :post="$category->posts[0]" />
    @if($category->posts->count()>1)
        <div class="lg:grid lg:grid-cols-6">
          @foreach($category->posts->skip(1) as $post)
            <x-post-card
              :post="$post" 
              class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}"
            />
          @endforeach
        </div>
    @endif
      
  @else
    <p class="text-center">No posts Yet</p>
  @endif

  </main>
  
</x-layout>