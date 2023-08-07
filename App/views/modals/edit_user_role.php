<?php

$user = $_GET['user'];

?>
<div class="flex w-screen h-screen absolute bg-[#000000a3] left-0 top-0 right-0 bottom-0 z-10">

    <div class="flex flex-col w-[440px]  shadow-lg rounded-xl border m-auto shadow-cyan-800 p-8 bg-gray-50 relative">

        <div class="absolute top-8 right-8">
            <a href="?controller=AdminController&action=list_roles">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>

            </a>
        </div>

        <div class="flex text-cyan-600 text-2xl items-center gap-4 w-fit mx-auto py-6">

            Editar Permisos

        </div>

        <form action="?controller=AdminController&action=list_roles&modal=edit_user_role&user=0&modal_act=edit_role" method="POST" class="flex flex-col gap-6 mx-auto py-6 h-fit w-full">

            <div>

                <label for="email" class="text-xs">Correo Electronico</label>

                <input type="email" name="email" id="email" readonly value="<?= $data[$user]['email'] ?>" placeholder="Correo" required class="outline-none px-3 w-full flex border h-10 rounded-md shadow-md shadow-cyan-950 bg-gray-200 text-gray-600">

            </div>

            <div class="flex flex-col">

                <label for="role" class="text-xs">Rol del Usuario</label>

                <select name="role" id="role" class="outline-none px-3 w-full flex border h-10 rounded-md shadow-md shadow-cyan-950 bg-gray-200 text-gray-600">

                    <option value="1" <?php if ($data[$user]['role_id'] === 1) : ?> selected <?php endif ?>>Admin</option>

                    <option value="2" <?php if ($data[$user]['role_id'] === 2) : ?> selected <?php endif ?>>Maestro</option>

                    <option value="3" <?php if ($data[$user]['role_id'] === 3) : ?> selected <?php endif ?>>Alumno</option>

                </select>

            </div>

            <div class="flex flex-col">


                <label class="relative inline-flex items-center cursor-pointer">

                    <input type="checkbox" name="state" value="1" class="sr-only peer" <?php if ($data[$user]['state'] === 1) : ?> checked <?php endif ?>>

                    <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                    <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-700">Usuario <?= $data[$user]['state'] === 0 ? 'inactivo' : 'activo' ?></span>
                </label>


            </div>

            <div class="flex w-full justify-end">
                <a href="?controller=AdminController&action=list_roles" class="shadow-md shadow-cyan-950 bg-cyan-500 rounded-md text-gray-700 text-lg font-medium hover:text-gray-50 mx-auto px-8 py-2">Cancelar</a>

                <button type="submit" class="shadow-md shadow-cyan-950 bg-cyan-600    rounded-md hover:text-gray-300 text-lg font-medium text-gray-50 mx-auto px-8 py-1">Guardar</button>

            </div>
        </form>

    </div>


</div>