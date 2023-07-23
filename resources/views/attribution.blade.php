@if (!session('user'))
    @php
        return redirect('/user/create')->with('error', 'Veuillez vous inscrire pour accéder à cette page.');
    @endphp
@endif
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="{{asset('img/logo.png') }}" type="image/gif" sizes="16x16">
    <title>Attribution</title>

</head>
<body>
  <!--
  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
  <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
    <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>
  <div class="mx-auto max-w-2xl text-center">
    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Attribution de Droit</h2>
    <p class="mt-2 text-lg leading-8 text-gray-600">Attribuer un espace de travail pour l'utilisateur crée.</p>
    @if (session()->has('success'))
    <div class="alert alert-success">
        <p class="mt-2 text-lg leading-8 text-green-500">{{ session('success') }}</p>
    </div>
    @endif
  </div>
  <form method="POST" action="{{ route('registerattribution') }}" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
      @csrf
    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
      <div hidden>
        <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">identifiant</label>
        <div class="mt-2.5">
          <input type="text" readonly id="first-name" name='id' autocomplete="given-name" value=" {{session('user')->id}} " class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div>
        <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">Prenom</label>
        <div class="mt-2.5">
          <input type="text" readonly id="first-name" autocomplete="given-name" value=" {{session('user')->Prenom}} " class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div>
        <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Nom</label>
        <div class="mt-2.5">
          <input type="text" id="last-name" autocomplete="family-name" value="{{session('user')->Nom}}" readonly class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div class="sm:col-span-2">
        <label for="company" class="block text-sm font-semibold leading-6 text-gray-900">Compagnie</label>
        <div class="mt-2.5">
          <input type="text" value="TBC ENERGIE" readonly id="company" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div class="sm:col-span-2">
        <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
        <div class="mt-2.5">
          <input type="email" id="email" readonly autocomplete="email" value=" {{session('user')->email}}" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div class="sm:col-span-2">
      <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Permi</label>
      <div class="mt-2.5">
      <select id="country" name="droit" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>

        </div>
        </div>
      </div>
      <div class="mt-10">
      <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Terminer</button>
    </div>
      </div>

    </div>

  </form>
</div>

</body>
</html>
