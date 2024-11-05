<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-lg sm:text-xl text-gray-800 dark:text-gray-200 leading-tight text-center sm:text-left">
      {{ __('Electra') }}
    </h2>
  </x-slot>
  
  <div class="py-6 sm:py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-4 sm:p-6 text-gray-900 dark:text-gray-100 text-lg sm:text-2xl text-center sm:text-left">
          Silahkan Memilih Opsi Berikut ini
        </div>
      </div>
      
      <div class="mt-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-center">
          <a href="javascript:void(0)" onclick="showForm('tunggal')"
             class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg p-4 text-gray-900 dark:text-gray-100 text-lg sm:text-xl transform transition-transform duration-200 hover:scale-95">
            Tunggal
          </a>
          <a href="javascript:void(0)" onclick="showForm('beregu')"
             class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg p-4 text-gray-900 dark:text-gray-100 text-lg sm:text-xl transform transition-transform duration-200 hover:scale-95">
            Beregu
          </a>
        </div>
      </div>

      <!-- Registration Forms -->
      <div id="tunggalForm" class="mt-8 hidden">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
          <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100">Tunggal Registration Form</h3>
          <form method="POST" action="{{ route('tunggal.register') }}" class="mt-4">
            @csrf
            <div class="mb-4">
              <label class="block text-gray-700 dark:text-gray-300">Name</label>
              <input type="text" name="name" class="w-full p-2 border border-gray-300 dark:border-gray-700 rounded">
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 dark:text-gray-300">Category</label>
              <input type="text" name="category" class="w-full p-2 border border-gray-300 dark:border-gray-700 rounded">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Register</button>
          </form>
        </div>
      </div>

      <div id="bereguForm" class="mt-8 hidden">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
          <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100">Beregu Registration Form</h3>
          <form method="POST" action="{{ route('beregu.register') }}" class="mt-4">
            @csrf
            <div class="mb-4">
              <label class="block text-gray-700 dark:text-gray-300">Team Name</label>
              <input type="text" name="team_name" class="w-full p-2 border border-gray-300 dark:border-gray-700 rounded">
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 dark:text-gray-300">Members</label>
              <input type="text" name="members" class="w-full p-2 border border-gray-300 dark:border-gray-700 rounded">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Register</button>
          </form>
        </div>
      </div>

    </div>
  </div>

  <script>
    function showForm(option) {
      // Hide both forms
      document.getElementById('tunggalForm').classList.add('hidden');
      document.getElementById('bereguForm').classList.add('hidden');
      
      // Show the selected form
      if (option === 'tunggal') {
        document.getElementById('tunggalForm').classList.remove('hidden');
      } else if (option === 'beregu') {
        document.getElementById('bereguForm').classList.remove('hidden');
      }
    }
  </script>
</x-app-layout>
