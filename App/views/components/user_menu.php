<div id="menu" class="w-52 h-fit absolute z-10 right-4 top-20 bg-gray-100 shadow-md shadow-cyan-800 rounded-lg hidden">

    <ul class="flex flex-col p-3 gap-3 text-lg">

        <a href="?controller=UserController">
            <li class="flex w-full h-fit gap-6 hover:shadow-md shadow-cyan-800 p-2 rounded-lg">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </span>
                Profile

            </li>
        </a>

        <a href="?controller=SessionController&action=logout">

            <li class="flex w-full h-fit gap-6 hover:shadow-md shadow-cyan-800 p-2 rounded-lg">

                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                    </svg>

                </span>
                Logout
            </li>

        </a>

    </ul>
</div>