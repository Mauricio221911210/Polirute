<div class="form-group">
                    {!! Form::label('name', 'Nombre:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el nombre del Anuncio']) !!}      
            
                    @error('name')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
        </div>

        <div class=" form-group">
        
                    {!! Form::label('slug', 'slug') !!}
                    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el slug de la etiqueta', 'readonly']) !!}      
            
                @error('slug')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            
            </div>

            <div class="form-group">
               
                {!! Form::label('category_id', 'categoria') !!}
                {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

                @error('category_id')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
            </div>

            <div class="form-group">
                <p class="font-weigth-bold">Etiquetas</p>

                @foreach ($tags as $tag)

                <label class="mr-2">

                {!! Form::checkbox('tags[]', $tag->id, null) !!}
                {{$tag->name}}
                
                    
                </label>
                @endforeach

                @error('tags')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
            </div>

            <div class="form-group">
                <p class="font-weigth-bold">Estado</p>

                <label>
                     {!! Form::radio('status', 1, true) !!}
                     Borrador
                </label>

                <label>
                     {!! Form::radio('status', 2) !!}
                     Publicado
                </label>

            </div>

            <div class="row mb-3">
                <div class="col">
                    <div class="image-wrapper">
                        @isset ($post->image)
                        <img id="picture" src="{{Storage::url($post->image->url)}}" alt="">
                        @else
                        <img src="https://imgs.search.brave.com/ejfBbcuDdjnxJCOMBWIsQ1YMpbHLDB1HzlKWwJwVG9c/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93YWxs/cGFwZXJzLmNvbS9p/bWFnZXMvZmVhdHVy/ZWQvaW1hZ2VuZXMt/ZGUtZXNjcml0b3Jp/by1kZS1vZmljaW5h/LWExeWl2YmF4YWw5/MmppbTIuanBn" alt="">
                        @endif
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                    {!! Form::label('file', 'Imagen que se mostrara en el Anuncio') !!}
                    {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}

                    @error('file')
                    <small class="text-danger">{{$message}}</small>
                    @enderror

                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum rem eum vero ex tenetur eligendi illum, obcaecati enim voluptatibus repellendus quas consequuntur excepturi facilis reprehenderit recusandae eveniet laboriosam rerum adipisci.</p>
                
                
                </div>
            </div>

            <hr>

            <div class="form-group">
               
                {!! Form::label('extract', 'resumen:') !!}
                {!! Form::textarea('extract',  null, ['class' => 'form-control']) !!}

                @error('extract')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
            </div>

            <div class="form-group">
               
                {!! Form::label('body', 'contenido:') !!}
                {!! Form::textarea('body',  null, ['class' => 'form-control']) !!}

                @error('body')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
            </div>
      