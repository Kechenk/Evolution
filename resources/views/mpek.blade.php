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
          <a href="javascript:void(0)" onclick="showTable('tunggal')" 
             class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg p-4 text-gray-900 dark:text-gray-100 text-lg sm:text-xl transform transition-transform duration-200 hover:scale-95">
            Tunggal
          </a>
          <a href="javascript:void(0)" onclick="showTable('beregu')" 
             class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg p-4 text-gray-900 dark:text-gray-100 text-lg sm:text-xl transform transition-transform duration-200 hover:scale-95">
            Beregu
          </a>
        </div>
      </div>

      <!-- Registration Tables -->
      <div id="tunggalTable" class="mt-8 hidden">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
          <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100">Registration Table for Tunggal</h3>
          <table class="w-full mt-4 text-left text-gray-900 dark:text-gray-100">
            <!-- Table Headers -->
            <thead>
              <tr>
                <th class="p-2 border-b dark:border-gray-700">ID</th>
                <th class="p-2 border-b dark:border-gray-700">Name</th>
                <th class="p-2 border-b dark:border-gray-700">Category</th>
              </tr>
            </thead>
            <tbody>
              <!-- Table Rows -->
              <tr>
                <td class="p-2 border-b dark:border-gray-700">1</td>
                <td class="p-2 border-b dark:border-gray-700">John Doe</td>
                <td class="p-2 border-b dark:border-gray-700">Tunggal</td>
              </tr>
              <!-- Add more rows as needed -->
            </tbody>
          </table>
        </div>
      </div>

      <div id="bereguTable" class="mt-8 hidden">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
          <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100">Registration Table for Beregu</h3>
          <table class="w-full mt-4 text-left text-gray-900 dark:text-gray-100">
            <!-- Table Headers -->
            <thead>
              <tr>
                <th class="p-2 border-b dark:border-gray-700">ID</th>
                <th class="p-2 border-b dark:border-gray-700">Name</th>
                <th class="p-2 border-b dark:border-gray-700">Team</th>
              </tr>
            </thead>
            <tbody>
              <!-- Table Rows -->
              <tr>
                <td class="p-2 border-b dark:border-gray-700">1</td>
                <td class="p-2 border-b dark:border-gray-700">Jane Smith</td>
                <td class="p-2 border-b dark:border-gray-700">Team A</td>
              </tr>
              <!-- Add more rows as needed -->
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>

  <script>
    function showTable(option) {
      // Hide both tables
      document.getElementById('tunggalTable').classList.add('hidden');
      document.getElementById('bereguTable').classList.add('hidden');
      
      // Show the selected table
      if (option === 'tunggal') {
        document.getElementById('tunggalTable').classList.remove('hidden');
      } else if (option === 'beregu') {
        document.getElementById('bereguTable').classList.remove('hidden');
      }
    }
  </script>
</x-app-layout>
