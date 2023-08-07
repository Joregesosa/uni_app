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

                Agregar Clase

            </div>

            <form action="?controller=AdminController&action=list_subjects&modal=admin_create_subject&modal_act=create_subject" method="POST" class="flex flex-col gap-8 mx-auto py-6 h-fit w-full">

                <div>

                    <label for="subject" class="text-xs">Nombre de la Clase</label>

                    <input type="text" name="subject" id="subject" placeholder="ej: Matematica II" required class="outline-none px-3 w-full flex border h-10 rounded-md shadow-md shadow-cyan-950 bg-gray-200 text-gray-600">

                </div>

                <div class="flex flex-col pb-3">

                    <label for="teacher" class="text-xs">Asignar Maestro</label>

                    <select name="teacher" id="teacher" class="outline-none px-3 w-full flex border h-10 rounded-md shadow-md shadow-cyan-950 bg-gray-200 text-gray-600">

                        <option value="">Sin asignar</option>

                        <?php foreach ($modal_data as $teacher) : ?>
                            <option value="<?= $teacher['id'] ?>"><?= $teacher['name'] ?></option>
                        <?php endforeach; ?>

                    </select>

                </div>

                <div class="flex w-full justify-end">
                    <a href="?controller=AdminController&action=list_subjects" class="shadow-md shadow-cyan-950 bg-cyan-500 rounded-md text-gray-700 text-lg font-medium hover:text-gray-50 mx-auto px-8 py-2">Cancelar</a>

                    <button type="submit" class="shadow-md shadow-cyan-950 bg-cyan-600    rounded-md hover:text-gray-300 text-lg font-medium text-gray-50 mx-auto px-8 py-1">Guardar</button>

                </div>

            </form>

        </div>


    </div>