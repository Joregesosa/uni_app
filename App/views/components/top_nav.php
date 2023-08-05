<div class="flex flex-col w-[calc(100%-20rem)] bg-slate-200">

    <nav class="w-full h-20 px-3 bg-gray-900 flex justify-end borde-b border-cyan-800">

        <div id="toggleMenu" class="flex w-fit h-full items-center gap-4 text-lg  text-gray-200 cursor-pointer">

            <span class="w-14 h-14 bg-cyan-600 rounded-full">

            </span>

            <span><?= $first_name . ' ' . $last_name ?></span>

            <span id="arrow" class="w-5 h-5 rotate-180">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 stroke-gray-200">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                </svg>

            </span>
        </div>

    </nav>
    <div class="w-full h-16 flex items-center px-8 justify-between ">

        <h3 class="text-xl font-medium"><?= $usuario->title ?></h3>
        <h3 class="text-base text-cyan-600">HOME/PERMISOS</h3>
    </div>