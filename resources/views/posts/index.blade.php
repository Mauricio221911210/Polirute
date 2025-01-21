<x-app-layout>
    

    <!-- <div class="container py-10 bg-blue-600">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 ">

            @foreach ($posts as $post)
                <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 @else https://imgs.search.brave.com/ejfBbcuDdjnxJCOMBWIsQ1YMpbHLDB1HzlKWwJwVG9c/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93YWxs/cGFwZXJzLmNvbS9p/bWFnZXMvZmVhdHVy/ZWQvaW1hZ2VuZXMt/ZGUtZXNjcml0b3Jp/by1kZS1vZmljaW5h/LWExeWl2YmF4YWw5/MmppbTIuanBn @endif " style="background-image: url(@if($post->image) {{Storage::url($post->image->url)}} @endif)" >
                    <div class="w-full h-full px-8 flex flex-col justify-center">

                        <div class="">
                            @foreach ($post->tags as $tag)
                                <a href="" class="inline-block px-3 h-6 bg-{{$tag->color}}-600 text-white rounded-full ">
                                 {{$tag->name}}   
                                </a>
                            @endforeach
                        </div>



                        <h1 class="text-4xl text-white leading-8 font-bold mt-2">
                            <a href="{{route('posts.show', $post)}}">
                                {{$post->name}}
                            </a>
                        </h1>
                    </div>
                </article>
            @endforeach


        </div>

    </div> -->

    <section class="relative z-10 dark:bg-gray-800">
  <div class="w-full overflow-hidden">
    <div class="relative z-20 flex flex-row w-full lg:w-11/12 mx-auto px-4 lg:!px-0">
      <div class="fw-full md:w-7/12 lg:w-8/12 py-6 md:py-12">
        <div class="flex flex-row">
          <div class="w-1/12 text-8xl md:text-9xl font-bold text-blue-900" data-inviewport="fadeInSoft">
          53 
          </div>
          <div class="w-11/12 flex flex-col ml-28 mt-3">
            <p class="font-light text-xl md:text-3xl dark:text-gray-200">años </p>
            <h2 class="font-semibold text-3xl md:text-5xl lg:text-6xl dark:text-gray-200">siendo líderes</h2>
          </div>
        </div>
        <div class="pt-2 pb-4 md:pt-4 border-b border-gray-300 dark:border-gray-700">
          <p class="font-light dark:text-gray-200">
          Empresa 100% Mexicana.
          En Poliuretanos S.A. de C.V., nos especializamos en fabricación de espuma de poliuretano flexible para todo tipo de industria manufacturera, satisfaciendo las necesidades de nuestros clientes, sobrepasando sus expectativas de calidad y servicio
          </p>
        </div>
        <div class="w-full mt-2 md:pt-4 flex flex-col lg:flex-row">
          <div class="w-full lg:w-1/3 flex flex-row mt-6 md:!mt-0 fadeInSoft" data-inviewport="fadeInSoft">
            <div class="relative w-3/12">
              <div class="absolute bottom-6 top-0 rounded-full w-12 h-12  bg-blue-900 flex pl-3 items-center">
                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" class="text-[#fff] w-6 h-6"><defs><style>.cls-6374f8d9b67f094e4896c60e-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><circle class="cls-6374f8d9b67f094e4896c60e-1" cx="12" cy="13.91" r="8.59"></circle><path class="cls-6374f8d9b67f094e4896c60e-1" d="M2.07,8.18a11.54,11.54,0,0,1,3.6-3.82"></path><path class="cls-6374f8d9b67f094e4896c60e-1" d="M18.33,4.36a11.54,11.54,0,0,1,3.6,3.82"></path><line class="cls-6374f8d9b67f094e4896c60e-1" x1="12" y1="1.5" x2="12" y2="5.32"></line><line class="cls-6374f8d9b67f094e4896c60e-1" x1="10.09" y1="1.5" x2="13.91" y2="1.5"></line><line class="cls-6374f8d9b67f094e4896c60e-1" x1="5.93" y1="19.98" x2="3.41" y2="22.5"></line><line class="cls-6374f8d9b67f094e4896c60e-1" x1="20.59" y1="22.5" x2="18.07" y2="19.98"></line><line class="cls-6374f8d9b67f094e4896c60e-1" x1="12" y1="8.18" x2="12" y2="14.86"></line></svg>
              </div>
            </div>
            <div class="w-9/12 flex flex-col">
              <h1 class="font-semibold mb-1.5 md:mb-3 uppercase md:pl-4 dark:text-gray-200">Experiencia</h1>
              <p class="mb-1 font-light pr-2 leading-relaxed line-clamp-3 md:pl-4 dark:text-gray-200">
              Expertos en Poliuretanos Flexible. Nos respalda con clientes Nacionales e Internacionales.
              </p>
            </div>
          </div>
          <div class="w-full lg:w-1/3 flex flex-row mt-6 md:!mt-0 fadeInSoft" data-inviewport="fadeInSoft">
            <div class="relative w-3/12">
              <div class="absolute bottom-6 top-0 rounded-full w-12 h-12  bg-blue-900 flex pl-3 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" class="text-[#fff] w-6 h-6"><defs><style>.cls-6375f1aeb67f094e4896c9ea-1,.cls-6375f1aeb67f094e4896c9ea-2{fill:none;stroke:currentColor;stroke-miterlimit:10;}.cls-6375f1aeb67f094e4896c9ea-1{stroke-linecap:square;}</style></defs><g id="calendar"><rect class="cls-6375f1aeb67f094e4896c9ea-1" x="1.5" y="2.43" width="21" height="4.77" transform="translate(24 9.64) rotate(180)"></rect><line class="cls-6375f1aeb67f094e4896c9ea-2" x1="17.73" y1="0.52" x2="17.73" y2="4.34"></line><line class="cls-6375f1aeb67f094e4896c9ea-2" x1="6.27" y1="0.52" x2="6.27" y2="4.34"></line><polygon class="cls-6375f1aeb67f094e4896c9ea-1" points="22.5 11.98 22.5 7.21 1.5 7.21 1.5 22.48 22.5 22.48 22.5 15.79 22.5 11.98"></polygon><line class="cls-6375f1aeb67f094e4896c9ea-2" x1="9.14" y1="11.02" x2="11.05" y2="11.02"></line><line class="cls-6375f1aeb67f094e4896c9ea-2" x1="12.95" y1="11.02" x2="14.86" y2="11.02"></line><line class="cls-6375f1aeb67f094e4896c9ea-2" x1="16.77" y1="11.02" x2="18.68" y2="11.02"></line><line class="cls-6375f1aeb67f094e4896c9ea-2" x1="9.14" y1="14.84" x2="11.05" y2="14.84"></line><line class="cls-6375f1aeb67f094e4896c9ea-2" x1="5.32" y1="14.84" x2="7.23" y2="14.84"></line><line class="cls-6375f1aeb67f094e4896c9ea-2" x1="12.95" y1="14.84" x2="14.86" y2="14.84"></line><line class="cls-6375f1aeb67f094e4896c9ea-2" x1="16.77" y1="14.84" x2="18.68" y2="14.84"></line><line class="cls-6375f1aeb67f094e4896c9ea-2" x1="9.14" y1="18.66" x2="11.05" y2="18.66"></line><line class="cls-6375f1aeb67f094e4896c9ea-2" x1="5.32" y1="18.66" x2="7.23" y2="18.66"></line><line class="cls-6375f1aeb67f094e4896c9ea-2" x1="12.95" y1="18.66" x2="14.86" y2="18.66"></line></g></svg>
              </div>
            </div>
            <div class="w-9/12 flex flex-col">
              <h1 class="font-semibold mb-1.5 md:mb-3 uppercase md:pl-4 dark:text-gray-200">Calidad</h1>
              <p class="mb-1 font-light pr-2 leading-relaxed line-clamp-3 md:pl-4 dark:text-gray-200">
              Nuestros clientes y nuestros especialistas avalan la calidad de nuestros productos.
              </p>
            </div>
          </div>
          <div class="w-full lg:w-1/3 flex flex-row mt-6 md:!mt-0 fadeInSoft" data-inviewport="fadeInSoft">
            <div class="relative w-3/12">
              <div class="absolute bottom-6 top-0 rounded-full w-12 h-12  bg-blue-900 flex pl-3 items-center">
                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" class="text-[#fff] w-6 h-6"><defs><style>.cls-63ce7444ea57ea6c838005ed-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><path class="cls-63ce7444ea57ea6c838005ed-1" d="M6.27,21.55H8.5l2.33.95h7.92a2.86,2.86,0,0,0,2.85-2.59l.88-9.13c0-.14,0-.28,0-.42h0a2.18,2.18,0,0,0-2.18-2.18H15.63l.52-1.09a6.27,6.27,0,0,0,.62-2.73h0A2.86,2.86,0,0,0,13.91,1.5h0A1.9,1.9,0,0,0,12,3.41h0a6,6,0,0,1-1.25,3.66l-2.33,3H6.27"></path><rect class="cls-63ce7444ea57ea6c838005ed-1" x="1.5" y="9.14" width="4.77" height="13.36"></rect></svg>
              </div>
            </div>
            <div class="w-9/12 flex flex-col">
              <h1 class="font-semibold mb-1.5 md:mb-3 uppercase md:pl-4 dark:text-gray-200"> Innovación</h1>
              <p class="mb-1 font-light pr-2 leading-relaxed line-clamp-3 md:pl-4 dark:text-gray-200">
              Enfocados en la búsqueda de la mejora continua de todos nuestros productos, logrando innovación en el mercado
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="relative hidden md:inline md:w-5/12 lg:w-4/12 mt-12 justify-items-center bottom-0" data-inviewport="fadeIn-normal">
        <img class="object-cover w-auto h-[385px] absolute left-[20%] button-0" src="https://i.ibb.co/Q9Gfz7w/portrait-person-working-construction-field-freepic-AI-Gen.png" title="Construction Worker" alt="{constr.worker}" />
      </div>
    </div>
  </div>
</section>

    <div class="max-w-7xl mx-auto my-8 px-2">

    <div class="flex justify-center text-2xl md:text-3xl font-bold">
       Anuncios
    </div>

    <ul class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 p-2 xl:p-5">
    @foreach ($posts as $post)            
        <li class="relative bg-white flex flex-col justify-between border rounded shadow-md hover:shadow-teal-400">

            <a class="relative" href="/tool/writey-ai">
                <img class="rounded relative w-full object-cover aspect-video"
                    src="https://images.unsplash.com/photo-1529236183275-4fdcf2bc987e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxfHxrZXlib2FyZHxlbnwwfDB8fHwxNjk5NTI1MDAzfDA&ixlib=rb-4.0.3&q=80&w=1080" alt="Writey A.I" loading="lazy">
            </a>


            <div class="flex flex-col justify-beetween gap-3 px-4 py-2">
                <a href="{{route('posts.show', $post)}}"
                    class="flex justify-center items-center text-xl font-semibold text-teal-700 hover:text-teal-800 two-lines text-ellipsis">
                    <span >{!!$post->name!!}</span>
                </a>

                <p href="{{route('posts.show', $post)}}" class="text-gray-600 two-lines">
                {!!$post->extract!!}
                </p>

                <ul class="flex flex-wrap items-center justify-start text-sm gap-2">
                    <li title="Pricing type"
                        class="flex items-center cursor-pointer gap-0.5 bg-gray-100 text-black px-2 py-0.5 rounded-full">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13 3.5C13 2.94772 12.5523 2.5 12 2.5C11.4477 2.5 11 2.94772 11 3.5V4.0592C9.82995 4.19942 8.75336 4.58509 7.89614 5.1772C6.79552 5.93745 6 7.09027 6 8.5C6 9.77399 6.49167 10.9571 7.5778 11.7926C8.43438 12.4515 9.58764 12.8385 11 12.959V17.9219C10.2161 17.7963 9.54046 17.5279 9.03281 17.1772C8.32378 16.6874 8 16.0903 8 15.5C8 14.9477 7.55228 14.5 7 14.5C6.44772 14.5 6 14.9477 6 15.5C6 16.9097 6.79552 18.0626 7.89614 18.8228C8.75336 19.4149 9.82995 19.8006 11 19.9408V20.5C11 21.0523 11.4477 21.5 12 21.5C12.5523 21.5 13 21.0523 13 20.5V19.9435C14.1622 19.8101 15.2376 19.4425 16.0974 18.8585C17.2122 18.1013 18 16.9436 18 15.5C18 14.1934 17.5144 13.0022 16.4158 12.1712C15.557 11.5216 14.4039 11.1534 13 11.039V6.07813C13.7839 6.20366 14.4596 6.47214 14.9672 6.82279C15.6762 7.31255 16 7.90973 16 8.5C16 9.05228 16.4477 9.5 17 9.5C17.5523 9.5 18 9.05228 18 8.5C18 7.09027 17.2045 5.93745 16.1039 5.17721C15.2467 4.58508 14.1701 4.19941 13 4.0592V3.5ZM11 6.07814C10.2161 6.20367 9.54046 6.47215 9.03281 6.8228C8.32378 7.31255 8 7.90973 8 8.5C8 9.22601 8.25834 9.79286 8.79722 10.2074C9.24297 10.5503 9.94692 10.8384 11 10.9502V6.07814ZM13 13.047V17.9263C13.7911 17.8064 14.4682 17.5474 14.9737 17.204C15.6685 16.7321 16 16.1398 16 15.5C16 14.7232 15.7356 14.1644 15.2093 13.7663C14.7658 13.4309 14.0616 13.1537 13 13.047Z"
                                fill="currentColor"></path>
                        </svg>
                        @foreach ($post->tags as $tag)
                        <span class="inline-block px-3 h-6 bg-{{$tag->color}}-600 text-white rounded-full">{{$tag->name}}</span>
                        @endforeach
                    </li>

                </ul>

        </li>
     @endforeach
        

</div>



<div class="mt-4">
            {{$posts->links()}}
 </div>




</x-app-layout>
