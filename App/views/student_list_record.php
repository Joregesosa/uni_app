<?php
    if($_SESSION['user']['role_id'] != 3){
        header('location: index.php');
    }
?> 
<div class=" w-[90%] mx-auto border-1 border-cyan-300 bg-slate-100 rounded-lg">



    <div class="flex w-full border-b border-cyan-300 px-4 items-center justify-between">

        <h4 class=" px-4 py-3 text-lg font-medium">
            Informacion de Estudiantes
        </h4>

    </div>

    <div class="p-4">
        <table id="example" class="table table-striped">
            <thead class="h-12 ">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Calificacion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($data as $key => $row) : ?>
                    <tr>

                        <td><?= $key + 1 ?></td>
                        <td><?= $row['subject'] ?></td>
                        <td><?= $row['score'] ?></td>

                        <td class="flex gap-2">

                            <a href="?controller=StudentController&action=delete_record&row=<?= $key ?>&record=<?= $row['record'] ?>">

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>


                            </a>

                            <a href="?controller=StudentController&action=list_record&modal=messages&modal_act=list_messages&row=<?= $key ?>&record=<?= $row['record'] ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
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