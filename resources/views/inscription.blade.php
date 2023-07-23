<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/gif" sizes="16x16">
    <title>Inscription</title>

</head>

<body class="gradient-form h-full bg-neutral-200 dark:bg-neutral-700">
    <div class="h-full p-10">
        <div class="g-6 flex h-full flex-wrap items-center justify-center text-neutral-800 dark:text-neutral-200">
            <div class="w-full">
                <div class="block rounded-lg bg-white shadow-lg dark:bg-neutral-800">
                    <div class="g-0 lg:flex lg:flex-wrap">
                        <!-- Right column container with background and description-->
                        <div class="flex items-center rounded-b-lg lg:w-4/12 lg:rounded-r-lg lg:rounded-bl-none"
                            style="background: linear-gradient(to right, #28357F, #28357F, #28357F, #28357F)">
                            <div class="px-4 py-6 text-white md:mx-6 md:p-12">
                                <h4 class="mb-6 text-xl font-semibold">
                                    Nous sommes plus qu'une simple entreprise
                                </h4>
                                <p class="text-sm">
                                    Fort de +15 années de métier , TBC ENERGIE vous accompagne dans la réalisation de
                                    vos projets en vous assurant les meilleurs services en Electricité HT-BT-EP ,
                                    Maintenance des Sites Télécoms , Prestations Energie et en Electricité Industrielle.
                                </p>
                            </div>
                        </div>
                        <!-- Left column container-->
                        <div class="px-4 md:px-0 lg:w-8/12">
                            <div class="md:mx-6 md:p-12">
                                <!--Logo-->
                                <div class="text-center">
                                    <img class="mx-auto w-48" src="{{ asset('img/logo.png') }}" alt="logo">
                                    <h4 style='color:#28357F' class="mb-12 mt-1 pb-1 text-xl font-semibold">
                                        NOUS SOMMES L'EQUIPE TBC ENERGIE</span>
                                    </h4>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @if (session()->has('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                </div>
                                <form method="POST" action="{{ route('register') }}"
                                    class="g-6 flex h-full flex-wrap items-center justify-center text-neutral-800 dark:text-neutral-200">
                                    @csrf
                                    <div class="w-full bg-white p-5 rounded-lg lg:rounded-l-none">
                                        <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                                            <div class="mb-4 md:flex md:justify-between">
                                                <div class="mb-4 md:mr-2 md:mb-0">
                                                    <label class="block mb-2 text-sm font-bold text-gray-700"
                                                        for="Prénom">
                                                        Prénom
                                                    </label>
                                                    <input
                                                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                                        id="Prénom" type="text" name="Prenom"
                                                        placeholder="Prenom" />
                                                </div>
                                                <div class="mb-4 md:mr-2 md:mb-0">
                                                    <label class="block mb-2 text-sm font-bold text-gray-700"
                                                        for="Téléphone">
                                                        Téléphone
                                                    </label>
                                                    <input
                                                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                                        id="Téléphone" type="number" name="Telephone"
                                                        placeholder="Téléphone" />
                                                </div>
                                                <div class="md:ml-2">
                                                    <label class="block mb-2 text-sm font-bold text-gray-700"
                                                        for="Nom">
                                                        Nom

                                                    </label>
                                                    <input
                                                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                                        id="Nom" type="text" name="Nom"
                                                        placeholder="Nom" />
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <label class="block mb-2 text-sm font-bold text-gray-700"
                                                    for="email">
                                                    E-mail
                                                </label>
                                                <input
                                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                                    id="email" type="email" name="email" placeholder="Email" />
                                            </div>
                                            <div class="mb-4 md:flex md:justify-between">
                                                <div class="mb-4 md:mr-2 md:mb-0">
                                                    <label class="block mb-2 text-sm font-bold text-gray-700"
                                                        for="password">
                                                        Mot de passe
                                                    </label>
                                                    <input
                                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                                        id="password" type="password" name="password"
                                                        placeholder="******************" />
                                                </div>
                                                <div class="md:ml-2">
                                                    <label class="block mb-2 text-sm font-bold text-gray-700"
                                                        for="c_password">
                                                        Confirmez le mot de passe
                                                    </label>
                                                    <input
                                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                                        id="c_password" type="password" name="password_confirmation"
                                                        placeholder="******************" />
                                                </div>
                                            </div>
                                            <div class="mb-6 text-center">
                                                <button
                                                    class="mb-3 inline-block w-full rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]"
                                                    type="submit" data-te-ripple-init data-te-ripple-color="light"
                                                    style="background: linear-gradient(to right, #ee7724, #ee7724, #ee7724, #ee7724);">
                                                    Créer un compte
                                                </button>

                                            </div>
                                        </form>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
