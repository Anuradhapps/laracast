<x-layout>
    <x-slot:heading>
        Edit Job : {{ $job->Title }}
    </x-slot:heading>
<form method="POST" action="/job/{{ $job->id }}">
    @csrf
    @method('PATCH')
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            <label for="Title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input
                type="text"
                name="Title"
                id="Title"
                class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                placeholder="Shift Leader"
                value="{{ $job->Title }}"
                required>
              </div>
              @error('Title')
                  <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="sm:col-span-4">
            <label for="Salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input
                type="text"
                name="Salary"
                id="Salary"
                class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                placeholder="$ 50,000 per year"
                value="{{ $job->Salary }}"
                required>
              </div>
              @error('Salary')
                  <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
              @enderror
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-6 flex items-center justify-between gap-x-6">
        <div class="flex items-center gap-x-6">
            <button form="delete-form" class="text-red-500 text-sm font-bold">Delete</button>
        </div>
        <div class="flex items-center gap-x-6">
            <a href="/job/{{ $job->id }}" type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
        </div>

    </div>
  </form>

  <form id="delete-form" method="POST" action="/job/{{ $job->id }}" class="hidden">
    @csrf
    @method('DELETE')
 </form>

</x-layout>
