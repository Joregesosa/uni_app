<?php if (in_array($_SESSION['user']['role_id'], [2, 3])) : ?>
    <div class="flex w-screen h-screen absolute bg-[#000000a3] left-0 top-0 right-0 bottom-0 z-10">

        <div class="flex flex-col w-[440px]  shadow-lg rounded-xl border m-auto shadow-cyan-800 p-8 bg-gray-50 relative">

            <div class="absolute top-8 right-8">
                <a href="?controller=TeacherController&action=list_students">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>

                </a>
            </div>

            <div class="flex text-cyan-600 text-2xl items-center gap-4 w-fit mx-auto py-6">

                Mensajes

            </div>
            <ul class="flex flex-col w-full h-[420px] overflow-y-scroll bg-gray-900">
                <li class="flex flex-col bg-gray-100 w-3/4 m-3 p-2 rounded-2xl self-end">
                    <span class="text-[10px]">tu - 12/07/23</span>
                    <p class="text-xs mt-1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam, voluptas.</p>
                </li>
                <li class="flex flex-col bg-gray-100 w-3/4 m-2 p-2 rounded-2xl self-start">
                    <span class="text-[10px]">name - 12/07/23</span>
                    <p class="text-xs mt-1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam, voluptas.</p>
                </li>
            </ul>

            

            <form action="" method="POST" class="flex flex-col gap-6 mx-auto py-6 h-fit w-full">

                <div>

                    <label for="email" class="text-xs">Correo Electronico</label>

                    <textarea placeholder="Escribe tu mensaje" name="message" id="message" class="resize-none outline-none p-3 w-full flex border h-20 rounded-md shadow-md shadow-cyan-950 bg-gray-200 text-gray-600"></textarea>

                </div>

                <div class="flex w-full justify-end">
                    <a href="?controller=TeacherController&action=list_students" class="shadow-md shadow-cyan-950 bg-cyan-500 rounded-md text-gray-700 text-lg font-medium hover:text-gray-50 mx-auto px-8 py-2">Cancelar</a>

                    <button type="submit" class="shadow-md shadow-cyan-950 bg-cyan-600    rounded-md hover:text-gray-300 text-lg font-medium text-gray-50 mx-auto px-8 py-1">Guardar</button>

                </div>

            </form>

        </div>


    </div>

<?php
else :
    header('location: index.php');
endif;
?>