<?php
    if($_SESSION['user']['role_id'] != 2){
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
                    <th>Mensajes</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($data as $key => $row) : ?>
                    <tr>


                        <td><?= $key + 1 ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['score'] ?></td>
                        <td><?= $row['message_count'] ? $row['message_count'] : '<span class="flex bg-blue-500 px-2 py-[2px] text-cyan-50 w-fit rounded-md font-medium">Sin Mensajes</span>' ?></td>


                        <td class="flex">

                            <a href="?controller=TeacherController&action=list_students&modal=teacher_edit_score&row=<?= $key ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-cyan-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                </svg>
                            </a>

                            <a href="?controller=TeacherController&action=list_students&modal=messages&modal_act=list_messages&row=<?= $key ?>&record=<?= $row['record_id'] ?>">
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