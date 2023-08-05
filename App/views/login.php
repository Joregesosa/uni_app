 <div class="flex flex-col w-[420px] h-[512px] shadow-lg rounded-xl border m-auto shadow-cyan-800 p-10 bg-gray-50">

     <div class="flex text-cyan-600 text-6xl items-center gap-4 w-fit mx-auto py-6">

         <span class="flex">L<img src="./src/assets/logo.jpg" alt="" class="w-12 h-14 rounded-full border-4 border-cyan-600">GIN</span>

     </div>
     <?php

        if (isset($_SESSION['invalidCredentials'])) :

        ?>

         <span class="w-full text-center text-xs text-cyan-100 mx-auto bg-red-400 rounded-sm py-1">

             <?= $_SESSION['invalidCredentials'] ?>

        </span>

     <?php

        endif;


        ?>

     <form action="?controller=SessionController&&action=login" method="POST" class="flex flex-col gap-8 mx-auto py-8">

         <div class="flex border h-12 p-2 items-center rounded-md shadow-md shadow-cyan-950">

             <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-7 h-7">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                 </svg>
             </span>

             <input type="email" name="email" id="email" placeholder="Correo" require class="outline-none w-full h-full mx-3">

         </div>

         <div class="flex border h-12 p-2 items-center rounded-md shadow-md shadow-cyan-950">

             <span>

                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-7 h-7">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                 </svg>

             </span>

             <input type="password" name="pass" id="pass" require placeholder="************" class="outline-none w-full h-full mx-3">

         </div>

         <button type="submit" class="shadow-md shadow-cyan-950 bg-cyan-600 w-44 h-10 rounded-md text-gray-300 text-lg font-medium hover:text-gray-50 mx-auto">Login</button>
     </form>

 </div>

  