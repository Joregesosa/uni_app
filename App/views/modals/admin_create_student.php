<div class="flex w-screen h-screen absolute bg-[#000000a3] left-0 top-0 right-0 bottom-0 z-10">
  <div class="flex flex-col w-[440px] shadow-lg rounded-xl border m-auto shadow-cyan-800 p-8 bg-gray-50 relative">

    <div class="absolute top-8 right-8">
      <a href="?controller=AdminController&action=list_students">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </a>
    </div>

    <div class="flex text-cyan-600 text-2xl items-center gap-4 w-fit mx-auto py-6">
      Agregar Estudiante
    </div>

    <form action="?controller=AdminController&action=list_students&modal=admin_create_student&modal_act=create_student" method="POST" class="flex flex-col gap-6 mx-auto py-6 h-fit w-full">

      <div>
        <label for="dni" class="text-xs">DNI</label>

        <input type="text" name="dni" id="dni" placeholder="DNI" required class="outline-none px-3 w-full flex border h-10 rounded-md shadow-md shadow-cyan-950 bg-gray-200 text-gray-600" />
      </div>

      <div>
        <label for="email" class="text-xs">Correo Electronico</label>

        <input type="email" name="email" id="email" placeholder="Correo" required class="outline-none px-3 w-full flex border h-10 rounded-md shadow-md shadow-cyan-950 bg-gray-100 text-gray-600" />
      </div>

      <div>
        <label for="first_name" class="text-xs">Nombres</label>

        <input type="text" name="first_name" id="first_name" placeholder="ej: Manuel" required class="outline-none px-3 w-full flex border h-10 rounded-md shadow-md shadow-cyan-950 bg-gray-100" />
      </div>

      <div>
        <label for="last_name" class="text-xs">Apellidos</label>

        <input type="text" name="last_name" id="last_name" placeholder="ej: Santiago" required class="outline-none px-3 w-full flex border h-10 rounded-md shadow-md shadow-cyan-950 bg-gray-100" />
      </div>

      <div>
        <label for="address" class="text-xs">Dirección</label>

        <input type="text" name="address" id="address" placeholder="Direccion" class="outline-none px-3 w-full flex border h-10 rounded-md shadow-md shadow-cyan-950 bg-gray-100" />
      </div>

      <div>
        <label for="birthday" class="text-xs">Fecha de nacimiento</label>

        <input type="date" name="birthday" id="birthday" placeholder="birthday" class="outline-none px-3 w-full flex border h-10 rounded-md shadow-md shadow-cyan-950" />
      </div>


      <div class="flex w-full justify-end">
        <a href="?controller=AdminController&action=list_teachers" class="shadow-md shadow-cyan-950 bg-cyan-500 rounded-md text-gray-700 text-lg font-medium hover:text-gray-50 mx-auto px-8 py-2">Cancelar</a>

        <button type="submit" class="shadow-md shadow-cyan-950 bg-cyan-600 rounded-md hover:text-gray-300 text-lg font-medium text-gray-50 mx-auto px-8 py-1">
          Guardar
        </button>
      </div>

    </form>
  </div>
</div>