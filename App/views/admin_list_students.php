<div class=" w-[90%] mx-auto border-1 border-cyan-300 bg-slate-100 rounded-lg">



    <div class="flex w-full border-b border-cyan-300 px-4 items-center justify-between">

        <h4 class=" px-4 py-3 text-lg font-medium">
            Informacion de Estudiantes
        </h4>

        <a href="?controller=AdminController&action=list_teachers&modal=admin_create_student" class=":hoverbg-blue-400 bg-blue-500 text-cyan-100 flex font-medium px-3 py-2 rounded-lg hover:text-cyan-800">
            Agregar Estudiante
        </a>

    </div>

    <div class="p-4">
        <table id="example" class="table table-striped">
            <thead class="h-12 ">
                <tr>
                    <th>#</th>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Direccion</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($data as $key => $row) : ?>
                    <tr>


                        <td><?= $key + 1 ?></td>
                        <td><?= $row['dni'] ?></td>
                        <td><?= $row['first_name'] . ' ' . $row['last_name'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['address'] ?></td>
                        <td><?= $row['birthday'] ?></td>


                        <td>
                            <a href="?controller=AdminController&action=list_students&modal=admin_edit_student&row=<?= $key ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-cyan-700 hover:stroke-red-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                </svg>

                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>


            </tbody>

        </table>

    </div>



</div>
</div>