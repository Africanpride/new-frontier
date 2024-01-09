

 <!-- ========== HEADER ========== -->
 <header
     class="flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full text-md  py-4 bg-white backdrop-blur-md
md:backdrop-blur-none dark:bg-firefly-900 text-sm  sticky top-0 inset-x-0  sm:justify-start sm:flex-nowrap !font-bold
 border-b  sm:py-0  dark:border-gray-700/20">

     <nav class="max-w-[95rem] flex flex-wrap basis-full items-center w-full mx-auto px-4 sm:px-6 lg:px-8 py-3"
         aria-label="Global">
         <x-branding />


         <div class="flex items-center gap-x-3 ml-auto md:pl-3 md:order-3">
             <div
                 class="pl-4 flex justify-between items-center gap-4   md:before:w-px md:before:h-4 before:bg-gray-300 dark:before:bg-gray-700">
                 <a class="pl-3" href="https://www.youtube.com/@costrad6590" target="_blank">
                     <img class="h-4" src="{{ asset('images/main/youtube.png') }}" />
                    </a>

                 <x-dark-switch />

                 <x-front-auth />

             </div>




             <div class="sm:hidden">
                <button type="button" class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-x-2 rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-transparent dark:border-gray-700 dark:text-white dark:hover:bg-white/10 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-collapse="#navbar-slide-up-animation" aria-controls="navbar-slide-up-animation" aria-label="Toggle navigation">
                  <svg class="hs-collapse-open:hidden flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
                  <svg class="hs-collapse-open:block hidden flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                </button>
              </div>

         </div>

         <div id="docs-navbar"
             class="hs-collapse overflow-hidden hidden transition-all duration-300 basis-full grow ml-auto md:block md:w-auto md:basis-auto md:order-2 open  tracking-wide
             overflow-y-auto max-h-[75vh] scrollbar-y"
             style="">
             <div
                 class="flex flex-col gap-x-0 mt-5 divide-y divide-dashed divide-gray-200 md:flex-row md:items-center md:justify-end md:gap-x-7 md:mt-0 md:pl-7 md:divide-y-0 md:divide-solid dark:divide-gray-700">



                 <div class=" dark:text-firefly-200 text-firefly-700 flex justify-start items-center gap-2 py-4">

                     <a href="{{ url('/') }}"
                         class=" text-firefly-700 dark:text-firefly-200 hover:text-firefly-500
                         hover:dark:text-firefly-300
    {{ Request::is('home') ? 'font-bold text-firefly-600 dark:text-firefly-100 hover:text-firefly-400 hover:dark:text-firefly-200' : '' }} ">
                         Home

                     </a>
                 </div>
                 <div class="text-firefly-700 dark:text-firefly-200 flex justify-start items-center gap-2 py-4">

                     <a href="{{ url('about') }}"
                         class=" text-firefly-700 dark:text-firefly-200 hover:text-firefly-500 hover:dark:text-firefly-300
    {{ Request::is('about') ? 'font-bold text-firefly-600 dark:text-firefly-100 hover:text-firefly-400 hover:dark:text-firefly-200' : '' }} ">
                         About

                     </a>
                 </div>


                 {{-- @livewire('institutes-list') --}}

                 <div class="text-firefly-700 dark:text-firefly-200 flex justify-start items-center gap-2 py-4">

                     <a href="{{ url('news') }}"
                         class="  text-firefly-700 dark:text-firefly-200 hover:text-firefly-500 hover:dark:text-firefly-300
{{ Request::is('news') ? 'font-bold text-firefly-600 dark:text-firefly-100 hover:text-firefly-400 hover:dark:text-firefly-200' : '' }} ">

                         {{ __('News') }}
                     </a>

                 </div>

                 <div class="text-firefly-700 dark:text-firefly-200 flex justify-start items-center gap-2 py-4">

                     <a href="{{ url('institute.show') }}"
                         class="  text-firefly-700 dark:text-firefly-200 hover:text-firefly-500 hover:dark:text-firefly-300
{{ Request::is('costrad') ? 'font-bold text-firefly-600 dark:text-firefly-100 hover:text-firefly-400 hover:dark:text-firefly-200' : '' }} ">

                         {{ __('COSTrAD') }}
                     </a>
                 </div>

                 <div class="text-firefly-700 dark:text-firefly-200 flex justify-start items-center gap-2 py-4">

                     <a href="{{ url('donate') }}">
                         <span
                             class=" inline bg-firefly-50 border border-firefly-300 text-firefly-600 text-[.6125rem] leading-4 uppercase rounded-full py-1 px-3 dark:bg-firefly-900/[.75] dark:border-firefly-700 dark:text-firefly-500">{{ __('Donate') }}</span>
                     </a>
                 </div>
             </div>
         </div>
     </nav>

 </header>
