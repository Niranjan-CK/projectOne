<x-layout>
  <main class="max-w-lg mx-auto mt-10 bg-gray-400 border border-gray-200 rounded-xl p-6 ">
    <form action="/login" method="post" class="mt-10">
      @csrf
      <div class="mb-6">

      <div class="mb-6">
        <label
          class="mb-2 block uppercase font-bold text-xs text-gray-700"
          for="email">
          Email
        </label>
        <input
          type="email"
          id="email"
          name="email"
          value="{{ old('email') }}"
          class="border border-gray-400 p-2 w-full"
          />
      </div>

      <div class="mb-6">
        <label
          class="mb-2 block uppercase font-bold text-xs text-gray-700"
          for="password">
          Password
        </label>
        <input
          type="password"
          id="password"
          name="password"
          class="border border-gray-400 p-2 w-full"
        />
      </div>
      <div class="mb-6">
        <input 
          type="submit" 
          class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-blue-600"
          value="Submit"
          >
            
      </div>
    </form>

   
    @if($errors->any())
      <div class="p-6 bg-white">
        @foreach( $errors->all() as $error)
          <p class="text-red-500 text-xs">{{ $error}}</p>
        @endforeach
      </div>
    @endif
  </main>
</x-layout>