<x-app-layout>

    <!-- <div class="container  py-8">

        <h1 class="text-4xl font-bold text-gray-600 ">{{$post->name}}</h1>

        <div class="text-lg  text-gray-600 mb-2">
            {!!$post->extract!!}
        </div>
    </div> -->

    <!-- <div class="grid grid-cols-3"> -->
        <!-- Contenido principal -->
       <!--  <div class="col-span-2">
        
        <figure>
            @if($post->image)
                <img class="w-full h-80 object-cover object-center"  src="{{Storage::url($post->image->url)}}" alt="">
                @else
                <img class="w-full h-80 object-cover object-center"  src="public.storage.archive.escritorio.jpg" alt="">
            @endif
        </figure>

        <div class="text-base tex-gray-500 mt-1 ">
            {!!$post->body!!}
        </div>

        </div> -->

        <!-- Contenido relacionado -->
       <!--  <aside class="">
            <h1>
                Más en {{$post->category->name}}
            </h1>
        </aside> -->
 <!--    </div> -->


    <div class="min-h-screen flex flex-col p-8 sm:p-16 md:p-24 justify-center bg-white">
  <!-- Themes: blue, purple and teal -->
  <div data-theme="teal" class="mx-auto max-w-6xl">
    
    <section class="font-sans text-black">
      <div class="[ lg:flex lg:items-center ] [ fancy-corners fancy-corners--large fancy-corners--top-left fancy-corners--bottom-right ]">
        <div class="flex-shrink-0 self-stretch sm:flex-basis-40 md:flex-basis-50 xl:flex-basis-60">
          <div class="h-full">

          <figure>
          <article class="h-full">
              <div class="h-full">
                <img class="h-full object-cover" src="https://inviqa.com/sites/default/files/styles/pullout/public/2020-08/XD-1.jpeg?h=f75d236a&itok=PBoXPDmW" width="733" height="412" alt='""' typeof="foaf:Image" />
              </div>
            </article>
        </figure>

            
          </div>
        </div>
        <div class="p-6 bg-grey">
          <div class="leading-relaxed">
            <h2 class="leading-tight text-4xl font-bold">{!!$post->name!!}</h2>
            <p class="mt-4">{!!$post->extract!!}</p>
            <p class="mt-4">{!!$post->body!!}</p>
            <p><a class="mt-4 button button--secondary" href="https://inviqa.com/cxcon-experience-transformation">Explore this event</a></p>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>


</x-app-layout>