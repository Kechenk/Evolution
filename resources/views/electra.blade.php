<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-lg sm:text-xl text-gray-800 dark:text-gray-200 leading-tight text-center sm:text-left">
      {{ __('Electra') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100 text-2xl">
          Silahkan Memilih Opsi Berikut ini
        </div>
      </div>
      <button
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
        type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation"
        aria-controls="drawer-navigation">
        Show navigation
      </button>
      {{-- Validation Test --}}
      @if ($errors->any())
        <div role="alert">
          <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">Error</div>
          <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
            <ul class="list-disc pl-5 space-y-1">
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        </div>
      @endif

      <!-- Display Success Message -->
      @if (session('success'))
        <div class="mt-4 p-4 bg-green-500 text-white rounded">
          {{ session('success') }}
        </div>
      @endif

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

      <!-- Tunggal Forms -->
      <div id="tunggalForm" class="mt-8 hidden">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
          <h3 class="text-xl font-bold text-gray-900 dark:text-gray-100">Tunggal Registration Form</h3>

          <form method="POST" action="{{ route('tunggal.register') }}" class="mt-4" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
              <label class="block text-gray-700 dark:text-gray-300">Nama Team</label>
              <input type="text" name="team"
                class="w-full p-2 border rounded-xl border-gray-300 dark:border-gray-700">
            </div>

            <div class="mb-4">
              <x-input-label class="block text-gray-700">Dari Mana Kalian Tahu Tentang Elektra</x-input-label>
              <select id="information" name="information" class="block mt-1 w-full rounded-xl" required autofocus>
                <option value="Instagram" {{ old('information') == 'Instagram' ? 'selected' : '' }}>Instagram</option>
                <option value="Teman" {{ old('information') == 'Teman' ? 'selected' : '' }}>Teman</option>
                <option value="Pihak Sekolah" {{ old('information') == 'Pihak Sekolah' ? 'selected' : '' }}>Pihak
                  Sekolah</option>
                <option value="Kakak Kelas / Alumni"
                  {{ old('information') == 'Kakak Kelas / Alumni' ? 'selected' : '' }}>Kakak
                  Kelas / Alumni</option>
                <option value="Grup Kelas / Sekolah / OSN / Lain-Lain"
                  {{ old('information') == 'Grup Kelas / Sekolah / OSN / Lain-Lain' ? 'selected' : '' }}>
                  Grup Kelas / Sekolah / OSN / Lain-Lain
                </option>
              </select>
            </div>

            <div class="mb-4">
              <label class="block text-gray-700 dark:text-gray-300">Nama Ketua</label>
              <input type="text" name="leader_name"
                class="w-full p-2 border rounded-xl border-gray-300 dark:border-gray-700">
            </div>

            <div class="mb-4">
              <x-input-label class="block text-gray-700 dark:text-gray-300">Kelas</x-input-label>
              <select id="leader_grade" name="leader_grade"-xl class="block mt-1 w-full rounded-xl" required autofocus>
                <option value="X" {{ old('leader_grade') == 'X' ? 'selected' : '' }}>X</option>
                <option value="XI" {{ old('leader_grade') == 'XI' ? 'selected' : '' }}>XI</option>
                <option value="XII" {{ old('leader_grade') == 'XII' ? 'selected' : '' }}>XII</option>
              </select>
            </div>

            <div class="mb-4">
              <label class="block text-gray-700 dark:text-gray-300">Nama Sekolah</label>
              <input type="text" name="school_name"
                class="w-full p-2 border rounded-xl border-gray-300 dark:border-gray-700">
            </div>

            <div class="mb-4">
              <label class="block text-gray-700 dark:text-gray-300">Alamat Sekolah</label>
              <input type="text" name="school_address"
                class="w-full p-2 border rounded-xl border-gray-300 dark:border-gray-700">
            </div>

            <div class="mb-4">
              <label class="block text-gray-700 dark:text-gray-300 mb-1">Nomer Whatsapp</label>
              <div class="flex items-center border rounded-xl border-gray-300 dark:border-gray-700">
                <span
                  class="p-2 text-gray-700 dark:text-gray-300 font-bold bg-gray-100 dark:bg-gray-900 rounded-l-xl">+62</span>
                <input type="text" name="whatsapp"
                  class="w-full p-2 border-l-0 rounded-r-xl border-gray-300 dark:border-gray-700 focus:outline-none"
                  placeholder="8123456789" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
              </div>
            </div>

            <div class="mb-4">
              <label class="block text-gray-700 dark:text-gray-300">Link Twibbon</label>
              <input type="text" name="tweet"
                class="w-full p-2 border rounded-xl border-gray-300 dark:border-gray-700">
            </div>

            <div class="mb-4">
              <label class="block text-gray-700 dark:text-gray-300">Region</label>
              <select name="region" id="region-select"
                class="w-full p-2 border rounded-xl border-gray-300 dark:border-gray-700">
                <option value="">-- Pilih Provinsi --</option>
                <option value="Aceh">Aceh</option>
                <option value="Bali">Bali</option>
                <option value="Banten">Banten</option>
                <option value="Bengkulu">Bengkulu</option>
                <option value="DI Yogyakarta">DI Yogyakarta</option>
                <option value="DKI Jakarta">DKI Jakarta</option>
                <option value="Gorontalo">Gorontalo</option>
                <option value="Jambi">Jambi</option>
                <option value="Jawa Barat">Jawa Barat</option>
                <option value="Jawa Tengah">Jawa Tengah</option>
                <option value="Jawa Timur">Jawa Timur</option>
                <option value="Kalimantan Barat">Kalimantan Barat</option>
                <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                <option value="Kalimantan Timur">Kalimantan Timur</option>
                <option value="Kalimantan Utara">Kalimantan Utara</option>
                <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                <option value="Kepulauan Riau">Kepulauan Riau</option>
                <option value="Lampung">Lampung</option>
                <option value="Maluku">Maluku</option>
                <option value="Maluku Utara">Maluku Utara</option>
                <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                <option value="Papua">Papua</option>
                <option value="Papua Barat">Papua Barat</option>
                <option value="Papua Selatan">Papua Selatan</option>
                <option value="Papua Tengah">Papua Tengah</option>
                <option value="Papua Pegunungan">Papua Pegunungan</option>
                <option value="Riau">Riau</option>
                <option value="Sulawesi Barat">Sulawesi Barat</option>
                <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                <option value="Sulawesi Utara">Sulawesi Utara</option>
                <option value="Sumatra Barat">Sumatra Barat</option>
                <option value="Sumatra Selatan">Sumatra Selatan</option>
                <option value="Sumatra Utara">Sumatra Utara</option>
              </select>
            </div>

            <div class="p-10">
              <input type="file" name="file" id="file" class="sr-only"
                accept=".jpg, .jpeg, .png, .JPG, .JPEG, .PNG" onchange="showPreview(event)" />
              <label for="file" id="fileLabel"
                class="relative flex min-h-[200px] items-center justify-center rounded-xl border border-dashed border-[#e0e0e0] p-12 text-center bg-white">
                <div id="fileContent">
                  <span id="dropText" class="mb-2 block text-xl font-semibold text-[#07074D]">Drop files here</span>
                  <span id="orText" class="mb-2 block text-base font-medium text-[#6B7280]">Or</span>
                  <span id="browseText"
                    class="inline-flex rounded border border-[#e0e0e0] py-2 px-7 text-base font-medium text-[#07074D]">Browse</span>
                </div>
                <img id="filePreview" class="hidden w-4/5 h-4/5 object-contain rounded-xl" />
              </label>
            </div>

            <script>
              function showPreview(event) {
                const file = event.target.files[0];
                const filePreview = document.getElementById("filePreview");
                const fileLabel = document.getElementById("fileLabel");
                const fileContent = document.getElementById("fileContent");
                const browseText = document.getElementById("browseText");

                if (file && file.type.startsWith("image/")) {
                  const reader = new FileReader();
                  reader.onload = function(e) {
                    filePreview.src = e.target.result;
                    filePreview.classList.remove("hidden");
                    fileContent.classList.add("hidden");
                    browseText.textContent = "Change File";
                  };
                  reader.readAsDataURL(file);
                }
              }
            </script>



            {{-- <div class="mb-4">
              <label for="file" class="block text-gray-700 dark:text-gray-300 mb-2">Upload File</label>
              <div
                class="flex flex-col items-center justify-center w-full border-2 border-gray-300 dark:border-gray-700 rounded-xl bg-gray-50 dark:bg-gray-800 p-4">
                <input type="file" name="file" id="file" class="opacity-0 absolute w-full h-full"
                  onchange="previewImage(event)" />
                <div
                  class="flex items-center w-auto border-2 border-gray-800 dark:border-b-gray-800 dark:border-l-gray-600 border-b-4 border-l-4 rounded-xl py-2 px-4 cursor-pointer">
                  <span class="text-gray-700 dark:text-gray-300 font-medium text-left w-full">Choose a file</span>
                </div>
                <div class="mt-4 w-full flex justify-center">
                  <img id="image-preview" src="" alt="Image preview"
                    class="hidden w-[400px] h-auto rounded-xl border-2 border-gray-300 dark:border-gray-700" />
                </div>
                <p id="file-name" class="mt-2 text-sm text-gray-700 dark:text-gray-300"></p>
              </div>
            </div> --}}

            <button type="submit"
              class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Register</button>
          </form>
        </div>
      </div>


      {{-- Beregu Form --}}
      <div id="bereguForm" class="mt-8 hidden">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
          <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100">Beregu Registration Form</h3>
          <form method="POST" action="{{ route('beregu.register') }}" class="mt-4"
            enctype="multipart/form-data>
            @csrf

            <div class="mb-4">
            <label class="block text-gray-700 dark:text-gray-300">Nama Team</label>
            <input type="text" name="team"
              class="w-full p-2 border rounded-xl border-gray-300 dark:border-gray-700">
        </div>

        <div class="mb-4">
          <x-input-label class="block text-gray-700">Dari Mana Kalian Tahu Tentang Elektra</x-input-label>
          <select id="information" name="information" class="block mt-1 w-full rounded-xl" required autofocus>
            <option value="Instagram" {{ old('information') == 'Instagram' ? 'selected' : '' }}>Instagram</option>
            <option value="Teman" {{ old('information') == 'Teman' ? 'selected' : '' }}>Teman</option>
            <option value="Pihak Sekolah" {{ old('information') == 'Pihak Sekolah' ? 'selected' : '' }}>Pihak
              Sekolah</option>
            <option value="Kakak Kelas / Alumni" {{ old('information') == 'Kakak Kelas / Alumni' ? 'selected' : '' }}>
              Kakak
              Kelas / Alumni</option>
            <option value="Grup Kelas / Sekolah / OSN / Lain-Lain"
              {{ old('information') == 'Grup Kelas / Sekolah / OSN / Lain-Lain' ? 'selected' : '' }}>
              Grup Kelas / Sekolah / OSN / Lain-Lain
            </option>
          </select>
        </div>

        <div class="mb-4">
          <label class="block text-gray-700 dark:text-gray-300">Nama Ketua</label>
          <input type="text" name="leader_name"
            class="w-full p-2 border rounded-xl border-gray-300 dark:border-gray-700">
        </div>

        <div class="mb-4">
          <x-input-label class="block text-gray-700 dark:text-gray-300">Kelas</x-input-label>
          <select id="leader_grade" name="leader_grade" class="block mt-1 w-full rounded-xl" required autofocus>
            <option value="X" {{ old('leader_grade') == 'X' ? 'selected' : '' }}>X</option>
            <option value="XI" {{ old('leader_grade') == 'XI' ? 'selected' : '' }}>XI</option>
            <option value="XII" {{ old('leader_grade') == 'XII' ? 'selected' : '' }}>XII</option>
          </select>
        </div>

        <div class="mb-4">
          <label class="block text-gray-700 dark:text-gray-300">Nama Anggota</label>
          <input type="text" name="member_name"
            class="w-full p-2 border rounded-xl border-gray-300 dark:border-gray-700">
        </div>

        <div class="mb-4">
          <x-input-label class="block text-gray-700 dark:text-gray-300">Kelas</x-input-label>
          <select id="member_grade" name="member_grade" class="block mt-1 w-full rounded-xl" required autofocus>
            <option value="X" {{ old('member_grade') == 'X' ? 'selected' : '' }}>X</option>
            <option value="XI" {{ old('member_grade') == 'XI' ? 'selected' : '' }}>XI</option>
            <option value="XII" {{ old('member_grade') == 'XII' ? 'selected' : '' }}>XII</option>
          </select>
        </div>

        <div class="mb-4">
          <label class="block text-gray-700 dark:text-gray-300">Nama Sekolah</label>
          <input type="text" name="school_name"
            class="w-full p-2 border rounded-xl border-gray-300 dark:border-gray-700">
        </div>

        <div class="mb-4">
          <label class="block text-gray-700 dark:text-gray-300">Alamat Sekolah</label>
          <input type="text" name="school_address"
            class="w-full p-2 border rounded-xl border-gray-300 dark:border-gray-700">
        </div>

        <div class="mb-4">
          <label class="block text-gray-700 dark:text-gray-300 mb-1">Nomer Whatsapp Ketua</label>
          <div class="flex items-center border rounded-xl border-gray-300 dark:border-gray-700">
            <span
              class="p-2 text-gray-700 dark:text-gray-300 font-bold bg-gray-100 dark:bg-gray-900 rounded-l-xl">+62</span>
            <input type="text" name="leader_whatsapp"
              class="w-full p-2 border-l-0 rounded-r-xl border-gray-300 dark:border-gray-700 focus:outline-none"
              placeholder="8123456789" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
          </div>
        </div>

        <div class="mb-4">
          <label class="block text-gray-700 dark:text-gray-300 mb-1">Nomer Whatsapp Anggota</label>
          <div class="flex items-center border rounded-xl border-gray-300 dark:border-gray-700">
            <span
              class="p-2 text-gray-700 dark:text-gray-300 font-bold bg-gray-100 dark:bg-gray-900 rounded-l-xl">+62</span>
            <input type="text" name="member_whatsapp"
              class="w-full p-2 border-l-0 rounded-r-xl border-gray-300 dark:border-gray-700 focus:outline-none"
              placeholder="8123456789" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
          </div>
        </div>

        <div class="mb-4">
          <label class="block text-gray-700 dark:text-gray-300">Link Twibbon Ketua</label>
          <input type="text" name="leader_tweet"
            class="w-full p-2 border rounded-xl border-gray-300 dark:border-gray-700">
        </div>

        <div class="mb-4">
          <label class="block text-gray-700 dark:text-gray-300">Link Twibbon Anggota</label>
          <input type="text" name="member_tweet"
            class="w-full p-2 border rounded-xl border-gray-300 dark:border-gray-700">
        </div>

        <div class="mb-4">
          <label class="block text-gray-700 dark:text-gray-300">Region</label>
          <select name="region" id="region-select"
            class="w-full p-2 border rounded-xl border-gray-300 dark:border-gray-700">
            <option value="">-- Pilih Provinsi --</option>
            <option value="Aceh">Aceh</option>
            <option value="Bali">Bali</option>
            <option value="Banten">Banten</option>
            <option value="Bengkulu">Bengkulu</option>
            <option value="DI Yogyakarta">DI Yogyakarta</option>
            <option value="DKI Jakarta">DKI Jakarta</option>
            <option value="Gorontalo">Gorontalo</option>
            <option value="Jambi">Jambi</option>
            <option value="Jawa Barat">Jawa Barat</option>
            <option value="Jawa Tengah">Jawa Tengah</option>
            <option value="Jawa Timur">Jawa Timur</option>
            <option value="Kalimantan Barat">Kalimantan Barat</option>
            <option value="Kalimantan Selatan">Kalimantan Selatan</option>
            <option value="Kalimantan Tengah">Kalimantan Tengah</option>
            <option value="Kalimantan Timur">Kalimantan Timur</option>
            <option value="Kalimantan Utara">Kalimantan Utara</option>
            <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
            <option value="Kepulauan Riau">Kepulauan Riau</option>
            <option value="Lampung">Lampung</option>
            <option value="Maluku">Maluku</option>
            <option value="Maluku Utara">Maluku Utara</option>
            <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
            <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
            <option value="Papua">Papua</option>
            <option value="Papua Barat">Papua Barat</option>
            <option value="Papua Selatan">Papua Selatan</option>
            <option value="Papua Tengah">Papua Tengah</option>
            <option value="Papua Pegunungan">Papua Pegunungan</option>
            <option value="Riau">Riau</option>
            <option value="Sulawesi Barat">Sulawesi Barat</option>
            <option value="Sulawesi Selatan">Sulawesi Selatan</option>
            <option value="Sulawesi Tengah">Sulawesi Tengah</option>
            <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
            <option value="Sulawesi Utara">Sulawesi Utara</option>
            <option value="Sumatra Barat">Sumatra Barat</option>
            <option value="Sumatra Selatan">Sumatra Selatan</option>
            <option value="Sumatra Utara">Sumatra Utara</option>
          </select>
        </div>

        <div class="p-10">
          <input type="file" name="file" id="file" class="sr-only"
            accept=".jpg, .jpeg, .png, .JPG, .JPEG, .PNG" onchange="showPreview(event)" />
          <label for="file" id="fileLabel"
            class="relative flex min-h-[200px] items-center justify-center rounded-xl border border-dashed border-[#e0e0e0] p-12 text-center bg-white">
            <div id="fileContent">
              <span id="dropText" class="mb-2 block text-xl font-semibold text-[#07074D]">Drop files here</span>
              <span id="orText" class="mb-2 block text-base font-medium text-[#6B7280]">Or</span>
              <span id="browseText"
                class="inline-flex rounded border border-[#e0e0e0] py-2 px-7 text-base font-medium text-[#07074D]">Browse</span>
            </div>
            <img id="filePreview" class="hidden w-4/5 h-4/5 object-contain rounded-xl" />
          </label>
        </div>

        <script>
          function showPreview(event) {
            const file = event.target.files[0];
            const filePreview = document.getElementById("filePreview");
            const fileLabel = document.getElementById("fileLabel");
            const fileContent = document.getElementById("fileContent");
            const browseText = document.getElementById("browseText");

            if (file && file.type.startsWith("image/")) {
              const reader = new FileReader();
              reader.onload = function(e) {
                filePreview.src = e.target.result;
                filePreview.classList.remove("hidden");
                fileContent.classList.add("hidden");
                browseText.textContent = "Change File";
              };
              reader.readAsDataURL(file);
            }
          }
        </script>

        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Register</button>
        </form>
      </div>
    </div>

  </div>
  </div>

  <script>
    function showForm(option) {
      document.getElementById('tunggalForm').classList.add('hidden');
      document.getElementById('bereguForm').classList.add('hidden');
      if (option === 'tunggal') {
        document.getElementById('tunggalForm').classList.remove('hidden');
      } else if (option === 'beregu') {
        document.getElementById('bereguForm').classList.remove('hidden');
      }
    }

    $(document).ready(function() {
      $('#region-select').select2({
        placeholder: '-- Pilih Provinsi --',
        allowClear: true
      });
    });
  </script>
</x-app-layout>
