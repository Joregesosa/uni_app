 <div class=" w-[90%] mx-auto border-1 border-cyan-300 bg-slate-100 rounded-lg">

    <h4 class="w-full border-b border-cyan-300 px-4 py-3 text-lg font-medium">
        Informacion de Maestros
    </h4>

    <div class="p-4">
        <table id="example" class="table table-striped">
            <thead class="h-12 ">
                <tr>
                    <th>#</th>
                    <th>Email/Usuario</th>
                    <th>Permiso</th>
                    <th>Estado</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($data as $key => $row) : ?>
                    <tr>

                        <td><?= $key + 1 ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= role($row['role_id']) ?></td>
                        <td><?= state($row['state']) ?></td>


                        <td>
                            <a href="<?= $key ?>">
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

<?php

function role($role)
{
    switch ($role) {

        case 1:
            return '<span class="flex bg-yellow-500 px-2 py-[2px] text-cyan-900 text-sm w-fit rounded-md font-medium">Admin</span>';
            break;
        case 2:
            return '<span class="flex bg-cyan-600 px-2 py-[2px] text-gray-50 text-sm w-fit rounded-md font-medium">Maestro</span>';
            break;

        default:
            return '<span class="flex bg-gray-700 px-2 py-[2px] text-gray-50text-sm  w-fit rounded-md font-medium">Alumno</span>';
            break;
    }
}

function state($state)
{
    switch ($state) {

        case 1:
            return '<span class="flex bg-green-600 px-1 py-[2px] text-gray-50 w-fit rounded-md font-medium text-sm">Activo</span>';
            break;

        default:
            return '<span class="flex bg-red-600 px-1 py-[2px] text-gray-50 w-fit rounded-md font-medium text-sm">Inactivo</span>';
            break;
    }
}
