<x-layout>
    <x-slot:heading>Job Create</x-slot:heading>
<form method="POST" action="/job">
    @csrf
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Create a new job</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">We just need handful of details from you.</p>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

          <x-form-field>
            <x-form-label for="Title">Title</x-form-label>
            <div class="mt-2">
              <x-form-input name="Title" id="Title" placeholder="CEO" required/>
              <x-form-error name="Title"/>
            </div>
          </x-form-field>

          <x-form-field>
            <x-form-label for="Salary">Salary</x-form-label>
            <div class="mt-2">
              <x-form-input name="Salary" id="Salary" placeholder="$ 50,000 per year" required/>
              <x-form-error name="Salary"/>
            </div>
          </x-form-field>

        </div>
      </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
      <a href="/" type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
      <x-form-button>Save</x-form-button>
    </div>
  </form>

</x-layout>
