 <div class=" w-[90%] mx-auto border-1 border-cyan-300 bg-slate-100 rounded-lg">
     <div class="flex w-full border-b border-cyan-300 px-4 items-center justify-between">
         <h4 class="w-fit   py-3 text-lg font-medium">
             Informacion de Clases
         </h4>

         <a href="?controller=AdminController&action=list_subjects&modal=admin_create_subject&modal_act=without_subjects" class=":hoverbg-blue-400 bg-blue-500 text-cyan-100 flex font-medium px-3 py-2 rounded-lg hover:text-cyan-800">
             agregar clase
         </a>

     </div>
     <div class="p-4">
         <table id="example" class="table table-striped">
             <thead class="h-12 ">
                 <tr>
                     <th>#</th>
                     <th>Clase</th>
                     <th>maestro</th>
                     <th>Alumnos Inscritos</th>
                     <th>Acciones</th>
                 </tr>
             </thead>
             <tbody>

                 <?php foreach ($data as $key => $row) : ?>
                     <tr>
                         <td><?= $key + 1 ?></td>
                         <td><?= $row['subject'] ?></td>
                         <td><?= $row['first_name'] ? $row['first_name'] . ' ' . $row['last_name']  : '<span class="flex bg-yellow-500 px-2 py-[2px] text-cyan-900 w-fit rounded-md font-medium">sin asignar</span>' ?></td>
                         <td><?= $row['reg_students'] ? $row['reg_students'] : '<span class="flex bg-yellow-500 px-2 py-[2px] text-cyan-900 w-fit rounded-md font-medium">sin asignar</span>' ?></td>

                         <td>
                             <a href="?controller=AdminController&action=list_subjects&modal=admin_edit_subject&row=<?= $key ?>&modal_act=without_subjects">
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