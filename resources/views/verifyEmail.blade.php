{{--
 _______       _            _     _          ______        _                 _ 
(_______)     (_)       _  (_)   | |        (____  \      (_)               | |
 _______  ____ _  ___ _| |_ _  __| |_____    ____)  ) ____ _ _____ ____   __| |
|  ___  |/ ___) |/___|_   _) |/ _  | ___ |  |  __  ( / ___) (____ |  _ \ / _  |
| |   | | |   | |___ | | |_| ( (_| | ____|  | |__)  ) |   | / ___ | | | ( (_| |
|_|   |_|_|   |_(___/   \__)_|\____|_____)  |______/|_|   |_\_____|_| |_|\____|
    
Auteur: Toure AXEL(toure.axel.pro@gmail.com) 
verifyEmail.blade.php(Ɔ) 2023
Description : Saisissez la description puis « Tab »
Créé le :  samedi 10 juin 2023 à 13:55:39 
Dernière modification : samedi 10 juin 2023 à 16:03:31
--}}

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Changer le mot de passe</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/gif" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        module.exports = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            "50": "#eff6ff",
                            "100": "#dbeafe",
                            "200": "#bfdbfe",
                            "300": "#93c5fd",
                            "400": "#60a5fa",
                            "500": "#3b82f6",
                            "600": "#2563eb",
                            "700": "#1d4ed8",
                            "800": "#1e40af",
                            "900": "#1e3a8a"
                        }
                    }
                },
                fontFamily: {
                    'body': [
                        'Inter',
                        'ui-sans-serif',
                        'system-ui',
                        '-apple-system',
                        'Segoe UI',
                        'Roboto',
                        'Helvetica Neue',
                        'Arial',
                        'Noto Sans',
                        'sans-serif',
                        'Apple Color Emoji',
                        'Segoe UI Emoji',
                        'Segoe UI Symbol',
                        'Noto Color Emoji'
                    ]
                }
            }
        };
    </script>
</head>

<body>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="/" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-20 h-20 mr-2" src="http://127.0.0.1:8000/img/logo.png" alt="logo">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">
                        TBC ENERGIE
                    </font>
                </font>
            </a>
            <div
                class="w-full p-6 bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md dark:bg-gray-800 dark:border-gray-700 sm:p-8">
                <h2
                    class="mb-1 text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">
                            Entrez votre E-mail
                        </font>
                    </font>
                </h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="mt-4 space-y-4 lg:mt-5 md:space-y-5" method="POST"
                    action="{{ route('verify_mail') }}">
                    <input type="hidden" name="_token" value="ULvgVQQ9hqivjnyRBe8WTeL2Z7Bmay2k9cTlVLGb">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Votre email</font>
                            </font>
                        </label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="name@company.com" required="">
                    </div>

                    <button
                        class="mb-3 inline-block w-full rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]"
                        type="submit" data-te-ripple-init="" data-te-ripple-color="light"
                        style="background: linear-gradient(to right, #ee7724, #ee7724, #ee7724, #ee7724);">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                Continuer
                            </font>
                        </font>
                    </button>
                </form>
            </div>
        </div>
    </section>

</body>

</html>
