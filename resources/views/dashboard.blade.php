<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100 text-2xl">
          Selamat Datang
        </div>
      </div>
    </div>
  </div>
    <div class="max-w-7xl mx-auto px-6 lg:px-8 my-8">
      <div
        class="bg-gradient-to-r from-green-400 to-green-500 dark:from-green-800 dark:to-green-700 shadow-lg rounded-lg overflow-hidden">
        <div class="p-8 text-center text-white">
          <h2 class="text-3xl font-bold mb-2">Daftar Electra Sekarang!</h2>
          <p class="text-lg mb-4">Klik banner di bawah ini untuk memulai pendaftaran.</p>
          <a href="{{ route('electra') }}"
            class="inline-block bg-white text-green-500 font-semibold px-6 py-3 rounded-full hover:bg-green-100 transition-colors hover:scale-105 duration-200">
            Pendaftaran Electra
          </a>
        </div>
      </div>
    </div>

</x-app-layout>
