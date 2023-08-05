<section class="flex flex-col w-80 h-full bg-gray-900 text-gray-400">

    <div class="flex items-center w-full h-20 px-3 gap-6 border-b border-cyan-900">
        <div class="w-16 h-16 rounded-full overflow-hidden">
            <img src="./src/assets/logo.jpg" alt="logo">
        </div>

        <h2 class="text-cyan-500 text-xl">UNIVERSIDAD</h2>
    </div>

    <div class="w-[calc(100%-1rem)] mx-auto h-fit border-b border-cyan-900 p-4 text-xl">
        <h3>Admin</h3>
        <h4 class="text-base ml-3">Administrador</h4>
    </div>

    <nav class="flex flex-col p-6">

        <h2 class="uppercase w-full text-center text-xl">Menu Administración</h2>

        <ul class="py-8 gap-8 flex flex-col">

            <li class="flex gap-6 text-lg">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" stroke-width="1.5" class="w-7 h-7 fill-gray-400">
                    <path d="M400-485q-66 0-108-42t-42-108q0-66 42-108t108-42q66 0 108 42t42 108q0 66-42 108t-108 42ZM80-164v-94q0-35 17.5-63t50.5-43q72-32 133.5-46T400-424h23q-6 14-9 27.5t-5 32.5h-9q-58 0-113.5 12.5T172-310q-16 8-24 22.5t-8 29.5v34h269q5 18 12 32.5t17 27.5H80Zm587 44-10-66q-17-5-34.5-14.5T593-222l-55 12-25-42 47-44q-2-9-2-25t2-25l-47-44 25-42 55 12q12-12 29.5-21.5T657-456l10-66h54l10 66q17 5 34.5 14.5T795-420l55-12 25 42-47 44q2 9 2 25t-2 25l47 44-25 42-55-12q-12 12-29.5 21.5T731-186l-10 66h-54Zm27-121q36 0 58-22t22-58q0-36-22-58t-58-22q-36 0-58 22t-22 58q0 36 22 58t58 22ZM400-545q39 0 64.5-25.5T490-635q0-39-25.5-64.5T400-725q-39 0-64.5 25.5T310-635q0 39 25.5 64.5T400-545Zm0-90Zm9 411Z" />
                </svg>

                <a href="">Permisos</a>

            </li>

            <li class="flex gap-6 text-lg">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" stroke-width="1.5" class="w-7 h-7 fill-gray-400">
                    <path d="M860-131v-649H100v320H40v-320q0-25 17.625-42.5T100-840h760q24.75 0 42.375 17.625T920-780v580q0 26-17 45.5T860-131ZM360-401q-66 0-108-42t-42-108q0-66 42-108t108-42q66 0 108 42t42 108q0 66-42 108t-108 42Zm0-60q39 0 64.5-25.5T450-551q0-39-25.5-64.5T360-641q-39 0-64.5 25.5T270-551q0 39 25.5 64.5T360-461ZM40-80v-94q0-38 19-65t49-41q67-30 128.5-45T360-340q62 0 123 15.5t127.921 44.694q31.301 14.126 50.19 40.966Q680-212 680-174v94H40Zm60-60h520v-34q0-16-9.5-30.5T587-226q-64-31-117-42.5T360-280q-57 0-111 11.5T132-226q-14 7-23 21.5t-9 30.5v34Zm260-411Zm0 411Z" />
                </svg>

                <a href="?controller=AdminController&&action=list_teachers">Maestros</a>

            </li>

            <li class="flex gap-6 text-lg">


                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                </svg>

                <a href="?controller=AdminController&&action=list_students">Alumnos</a>

            </li>

            <li class="flex gap-6 text-lg">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" />
                </svg>

                <a href="?controller=AdminController&&action=list_subjects">Clases</a>

            </li>

        </ul>

    </nav>


</section>