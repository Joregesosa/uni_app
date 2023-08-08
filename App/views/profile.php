<?php

$user = $_SESSION['user'];

?>
<div class=" w-[90%] mx-auto border-1 border-cyan-300 bg-slate-100 rounded-lg">
    <div class="flex w-full border-b border-cyan-300 px-4 items-center justify-between">

        <h4 class="w-fit   py-3 text-lg font-medium">

            Informacion de usuario

        </h4>


    </div>
    <div class="p-4">

        <form action="?controller=UserController&action=edit_profile" method="POST" class="flex flex-col gap-6 mx-auto py-6 h-fit w-full max-w-3xl">
            <?php
            if ($user['id'] === 3) :
            ?>
                <div>
                    <label for="dni" class="text-xs">DNI</label>

                    <input type="text" name="dni" id="dni" placeholder="DNI" required value="<?= $user['dni'] ?>" class="outline-none px-3 w-full flex border h-10 rounded-md shadow-md shadow-cyan-950 bg-gray-200 text-gray-600" />

                </div>
            <?php
            endif;
            ?>


            <div>
                <label for="email" class="text-xs">Correo Electronico</label>

                <input type="email" name="email" id="email" placeholder="Correo" required value="<?= $user['email'] ?>" class="outline-none px-3 w-full flex border h-10 rounded-md shadow-md shadow-cyan-950 bg-gray-100 text-gray-600" />

            </div>
            
            <div>
                <label for="pass" class="text-xs">Contraseña</label>

                <input type="pass" name="pass" id="pass" placeholder="Escribe tu nueva contraseña"  class="outline-none px-3 w-full flex border h-10 rounded-md shadow-md shadow-cyan-950 bg-gray-100" />

            </div>

            <div>
                <label for="first_name" class="text-xs">Nombres</label>

                <input type="text" name="first_name" id="first_name" placeholder="ej: Manuel" required value="<?= $user['first_name'] ?>" class="outline-none px-3 w-full flex border h-10 rounded-md shadow-md shadow-cyan-950 bg-gray-100" />
            </div>

            <div>
                <label for="last_name" class="text-xs">Apellidos</label>

                <input type="text" name="last_name" id="last_name" placeholder="ej: Santiago" required value="<?= $user['last_name'] ?>" class="outline-none px-3 w-full flex border h-10 rounded-md shadow-md shadow-cyan-950 bg-gray-100" />

            </div>

            <div>
                <label for="address" class="text-xs">Dirección</label>

                <input type="text" name="address" id="address" placeholder="Direccion" value="<?= $user['address'] ?>" class="outline-none px-3 w-full flex border h-10 rounded-md shadow-md shadow-cyan-950 bg-gray-100" />

            </div>

            <div>
                <label for="birthday" class="text-xs">Fecha de nacimiento</label>

                <input type="date" name="birthday" id="birthday" placeholder="birthday" value="<?= $user['birthday'] ?>" class="outline-none px-3 w-full flex border h-10 rounded-md shadow-md shadow-cyan-950" />
            </div>


            <div class="flex w-full justify-end">
                <a href="index.php" class="shadow-md shadow-cyan-950 bg-cyan-500 rounded-md text-gray-700 text-lg font-medium hover:text-gray-50 mx-auto px-8 py-2">Cancelar</a>

                <button type="submit" class="shadow-md shadow-cyan-950 bg-cyan-600 rounded-md hover:text-gray-300 text-lg font-medium text-gray-50 mx-auto px-8 py-1">
                    Guardar
                </button>
            </div>

        </form>

    </div>



</div>