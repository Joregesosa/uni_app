<?php

$row = $_GET['row'];

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

            Agregar Calificacion

        </div>

        <form action="?controller=TeacherController&action=list_students&modal=teacher_edit_score&modal_act=edit_score&row=<?= $row ?>&record=<?= $data[$row]['record_id'] ?>" method="POST" class="flex flex-col gap-8 mx-auto py-6 h-fit w-full">

            <div>

                <label for="name" class="text-xs">Nombre Alumno</label>

                <input readonly type="text" name="name" id="name" value="<?= $data[$row]['student'] ?>" placeholder="Clase" required class="outline-none px-3 w-full flex border h-10 rounded-md shadow-md shadow-cyan-950 bg-gray-200 text-gray-600">

            </div>

            <div>

                <label for="score" class="text-xs">Calificacion</label>

                <input type="text" name="score" id="score" value="<?= $data[$row]['score'] ?>" placeholder="0.00" required class="outline-none px-3 w-full flex border h-10 rounded-md shadow-md shadow-cyan-950 bg-gray-200 text-gray-600">

            </div>


            <div class="flex w-full justify-end">

                <a href="?controller=TeacherController&action=list_students" class="shadow-md shadow-cyan-950 bg-cyan-500 rounded-md text-gray-700 text-lg font-medium hover:text-gray-50 mx-auto px-8 py-2">Cancelar</a>

                <button type="submit" class="shadow-md shadow-cyan-950 bg-cyan-600    rounded-md hover:text-gray-300 text-lg font-medium text-gray-50 mx-auto px-8 py-1">Guardar</button>

            </div>

        </form>

    </div>


</div>