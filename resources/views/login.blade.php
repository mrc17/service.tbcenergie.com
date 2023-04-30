<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="gradient-form h-full bg-neutral-200 dark:bg-neutral-700">
  <div class="h-full p-10">
    <div
      class="g-6 flex h-full flex-wrap items-center justify-center text-neutral-800 dark:text-neutral-200">
      <div class="w-full">
        <div
          class="block rounded-lg bg-white shadow-lg dark:bg-neutral-800">
          <div class="g-0 lg:flex lg:flex-wrap">
            <!-- Left column container-->
            <div class="px-4 md:px-0 lg:w-6/12">
              <div class="md:mx-6 md:p-12">
                <!--Logo-->
                <div class="text-center">
                    <img class="mx-auto w-48" src="{{ asset('img/logo.png') }}" alt="logo">
                  <h4 class="mb-12 mt-1 pb-1 text-xl font-semibold">
                    Nous sommes l'équipe<span class="uppercase" style='color:#28357F'>Tbc Energie</span>
                  </h4>
                </div>

                <form>
                  <p class="mb-4 text-bold">Veuillez vous connecter à votre compte</p>
                  <!--Utilisateur input-->
<!--Large input-->
<div class="relative mb-3" data-te-input-wrapper-init>
    <input
      type="text"
      class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
      id="exampleFormControlInput2"
      placeholder="Form control lg" />
    <label
      for="exampleFormControlInput2"
      class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
      >Form control lg
    </label>
  </div>

                  <!--Password input-->
                  <div class="relative mb-4" data-te-input-wrapper-init>
                    <input
                      type="password"
                      class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                      id="exampleFormControlInput11"
                      placeholder="Password" />
                    <label
                      for="exampleFormControlInput11"
                      class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                      >Mot de passe
                    </label>
                  </div>

                  <!--Submit button-->
                  <div class="mb-12 pb-1 pt-1 text-center">
                    <button
                      class="mb-3 inline-block w-full rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]"
                      type="button"
                      data-te-ripple-init
                      data-te-ripple-color="light"
                      style="
                        background: linear-gradient(to right, #28357F, #28357F, #28357F, #28357F);
                      ">
                      CONNEXION
                    </button>

                    <!--Forgot password link-->
                    <a href="password_reset">Mot de passe oublié ?</a>
                  </div>

                  <!--Register button-->
                  <div class="flex items-center justify-between pb-6">
                    <p class="mb-0 mr-2"></p>
                    <button
                      type="button"
                      class="inline-block rounded border-2 border-danger px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-danger transition duration-150 ease-in-out hover:border-danger-600 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-danger-600 focus:border-danger-600 focus:text-danger-600 focus:outline-none focus:ring-0 active:border-danger-700 active:text-danger-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                      data-te-ripple-init
                      data-te-ripple-color="light">
                      ENREGISTRER
                    </button>
                  </div>
                </form>
              </div>
            </div>

            <!-- Right column container with background and description-->
            <div
              class="flex items-center rounded-b-lg lg:w-6/12 lg:rounded-r-lg lg:rounded-bl-none"
              style="background: linear-gradient(to right, #ee7724, #ee7724, #ee7724, #ee7724)">
              <div class="px-4 py-6 text-white md:mx-6 md:p-12">
                <h4 class="mb-6 text-xl font-semibold">
                    Nous sommes plus qu'une simple entreprise
                </h4>
                <p class="text-sm">
                  Fort de +15 années de métier , TBC ENERGIE vous accompagne dans la réalisation de vos projets en vous assurant les meilleurs services en Electricité HT-BT-EP , Maintenance des Sites Télécoms , Prestations Energie et en Electricité Industrielle.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    // Initialization for ES Users
import {
  Input,
  initTE,
} from "tw-elements";

initTE({ Input });
  </script>
</body>
</html>
