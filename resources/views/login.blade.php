<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Connexion TBC ENERGIE</title>
</head>

<body class="gradient-form h-full bg-neutral-200 dark:bg-neutral-700">
    <div class="h-full p-10">
        <div class="g-6 flex h-full flex-wrap items-center justify-center text-neutral-800 dark:text-neutral-200">
            <div class="w-full">
                <div class="block rounded-lg bg-white shadow-lg dark:bg-neutral-800">
                    <div class="g-0 lg:flex lg:flex-wrap">
                        <!-- Left column container-->
                        <div class="px-4 md:px-0 lg:w-6/12">
                            <div class="md:mx-6 md:p-12">
                                <!--Logo-->
                                <div class="text-center">
                                    <img class="mx-auto w-48" src="{{ asset('img/logo.png') }}" alt="logo">
                                    <h4 style='color:#28357F' class="mb-12 mt-1 pb-1 text-xl font-semibold">
                                        NOUS SOMMES L'EQUIPE TBC ENERGIE</span>
                                    </h4>
                                    @error('email')
                                        <p class="mb-0 mr-2">
                                        <p style='color:#f30404'>{{ $message }}</p>
                                        </p>
                                    @enderror
                                </div>
                                <form method="POST" action="{{ route('connexion') }}">
                                    @csrf
                                    <p class="mb-4 text-bold"><strong>Veuillez vous connecter à votre compte</strong>
                                    </p>
                                    <!--Utilisateur input-->
                                    <div class="py-4">
                                        <label for="email"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><strong>Votre
                                                email</strong></label>
                                        <input type="email" name="email" id="email"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="name@company.com" required="">
                                    </div>
                                    <!--Password input-->
                                    <div class="py-4">
                                        <label for="password"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><strong>Votre
                                                mot de passe</strong></label>
                                        <input type="password" name="password" id="password" placeholder="••••••••"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            required="">
                                    </div>

                                    <!--Submit button-->
                                    <div class="mb-12 py-4 text-center">
                                        <button
                                            class="mb-3 inline-block w-full rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]"
                                            type="submit" data-te-ripple-init data-te-ripple-color="light"
                                            style="
                        background: linear-gradient(to right, #28357F, #28357F, #28357F, #28357F); ">
                                            CONNEXION
                                        </button>

                                        <!--Forgot password link-->
                                        <a href="password_reset"><strong><span class="text-red-500">Mot de passe oublié
                                                    ?</span></strong></a>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Right column container with background and description-->
                        <div class="flex items-center rounded-b-lg lg:w-6/12 lg:rounded-r-lg lg:rounded-bl-none"
                            style="background: linear-gradient(to right, #ee7724, #ee7724, #ee7724, #ee7724)">
                            <div class="px-4 py-6 text-white md:mx-6 md:p-12">
                                <h4 class="mb-6 text-xl font-semibold">
                                    Nous sommes plus qu'une simple entreprise
                                </h4>
                                <p class="text-sm">
                                    Fort de +15 années de métier , TBC ENERGIE vous accompagne dans la réalisation de
                                    vos projets en vous assurant les meilleurs services en Electricité HT-BT-EP ,
                                    Maintenance des Sites Télécoms , Prestations Energie et en Electricité
                                    Industrielle.<br>
                                <div class="mb-1 text-base font-medium text-green-700 dark:text-gray-500">Etat du projet
                                    :</div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-gray-700">
                                    <div class="bg-green-600 h-2.5 rounded-full dark:bg-green-500" style="width: 35%">
                                    </div>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
