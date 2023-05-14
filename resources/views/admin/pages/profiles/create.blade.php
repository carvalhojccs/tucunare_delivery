<x-app-layout>
    <div
    class="block mt-2 rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700"
  >
    <!-- begin breadcrumb -->
    <div class="border-b-2 border-neutral-100 px-6 py-3 dark:border-neutral-600 dark:text-neutral-50 flex justify-between">
      <div class="bg-white flex items-center flex-wrap">
          <ul class="flex items-center">
              <li class="inline-flex items-center">
                  <a href="#" class="text-gray-600 hover:text-blue-500">
                      <svg class="w-5 h-auto fill-current mx-2 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24" fill="#000000">
                          <path d="M0 0h24v24H0V0z" fill="none" />
                          <path
                              d="M10 19v-5h4v5c0 .55.45 1 1 1h3c.55 0 1-.45 1-1v-7h1.7c.46 0 .68-.57.33-.87L12.67 3.6c-.38-.34-.96-.34-1.34 0l-8.36 7.53c-.34.3-.13.87.33.87H5v7c0 .55.45 1 1 1h3c.55 0 1-.45 1-1z" />
                      </svg>
                  </a>

                  <svg class="w-5 h-auto fill-current mx-2 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24">
                      <path d="M0 0h24v24H0V0z" fill="none" />
                      <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z" />
                  </svg>
              </li>

              <li class="inline-flex items-center">
                  <a href="{{ route('profiles.index') }}" class="text-gray-600 hover:text-blue-500">
                      Perfis
                  </a>
                  <svg class="w-5 h-auto fill-current mx-2 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24">
                      <path d="M0 0h24v24H0V0z" fill="none" />
                      <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z" />
                  </svg>
              </li>

              <li class="inline-flex items-center">
                  <a href="#" class="text-gray-600 hover:text-blue-500">
                      Cadastro
                  </a>              
              </li>          
          </ul>
      </div>  
    </div>
    <!-- end breadcrumb -->
    <x-form action="{{ route('profiles.store') }}" method="POST">
      @include('admin.pages.profiles.partials.form')
    </x-form>
  </div>
  </x-app-layout>
  