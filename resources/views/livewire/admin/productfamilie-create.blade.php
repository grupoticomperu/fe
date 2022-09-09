<div>
    <div class="flex items-center justify-center" >
        <button class="items-center justify-center sm:flex btn btn-orange" wire:click="nuevo">
           <i class="mx-2 fa-regular fa-file"></i> Nuevo
        </button > 
                      
    </div>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Crear Nuevo Producto
          
        </x-slot>

        <x-slot name="content">



        
            <div class="py-2 mb-1" wire:ignore>
                <label>Categorias </label>
                <select wire:model="category_id" class="py-2 select2" data-placeholder="Selecccione una categoria" style="height:50%; width:100%">
                    <option value="" selected disabled>escoge tu categoria</option> 
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                    
                </select>
                <x-jet-input-error for="category_id" /> 
            </div>

            
            <div class="py-2 mb-1" wire:ignore>
                <label>{{ $category_id }}Sub Categorias {{ $subcategory_id }}</label>
                <select wire:model="subcategory_id" class="py-2 select21" data-placeholder="Selecccione una subcategoria" style="height:50%; width:100%" >
                    <option value="" selected disabled>escoge tu subcategoria</option> 
                    @foreach($subcategories as $subcategory)
                    <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                    @endforeach
                    
                </select>
                <x-jet-input-error for="subcategory_id" /> 
            </div>
            


            <div class="py-2 mb-1" wire:ignore>
                <label>Marcas</label>
                <select wire:model="brand_id" class="py-2 select2ma" data-placeholder="Selecccione sus nmarcas" style="height:50%; width:100%">
                    {{-- <option value="" selected disabled>escoge tu categoria</option> --}}
                    @foreach($brands as $brand)
                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                    @endforeach
                    
                </select>
                <x-jet-input-error for="categories" /> 
            </div>


            <div class="py-2 mb-1"  wire:ignore>
                <label>Modelos</label>
                <select wire:model="modelo_id" class="py-2 select2m" data-placeholder="Selecccione sus modelos" style="height:50%; width:100%">
                    {{-- <option value="" selected disabled>escoge tu categoria</option> --}}
                    @foreach($modelos as $modelo)
                    <option value="{{$modelo->id}}">{{$modelo->name}}</option>
                    @endforeach
                    
                </select>
                <x-jet-input-error for="categories" /> 
            </div>


            <div class="py-2 mb-1">
                <label>Producto o Servicio</label>
                <select name="modelos" class="py-2 " data-placeholder="Selecccione tipo" style="height:50%; width:100%">
                    <option value="" selected disabled>escoge tipo de producto</option>
 
                    <option value="1">producto terminado</option>
                    <option value="2">Mercaderia</option>
                    <option value="3">Servicio</option>
                    
                </select>
                <x-jet-input-error for="categories" /> 
            </div>



            <div class="py-2 mb-2">
                <label>Producto simple o compuesto</label>
                <select name="modelos" class="py-2" data-placeholder="Selecccione tipo" style="height:50%; width:100%">
                    <option value="" selected disabled>escoge tipo de producto</option>
 
                    <option value="1">producto simple</option>
                    <option value="2">producto con combinacines</option>
         
                    
                </select>
                <x-jet-input-error for="categories" /> 
            </div>


            <div class="py-2 mb-2">
                <label>Genero</label>
                <select name="modelos" class="py-2 " data-placeholder="Selecccione tipo" style="height:50%; width:100%">
                    <option value="" selected disabled>escoge tipo de producto</option>
 
                    <option value="1">Varon</option>
                    <option value="2">Mujer</option>
                    <option value="2">Unisex</option>
                    
                </select>
                <x-jet-input-error for="categories" /> 
            </div>

            <div class="flex items-center justify-center px-2 mt-2 mr-4 md:mt-0">
                                
                <x-jet-input type="checkbox" wire:model="haveserialnumber" class="mx-1" /> 
                Tiene numero de Serie  
            </div> 

        </x-slot>

        <x-slot name="footer">

            <x-jet-button wire:click="$set('open', false)"  class="mr-2">
                <i class="mx-2 fa-sharp fa-solid fa-xmark"></i>Cancelar    
            </x-jet-secondary-button>

            <x-jet-danger-button wire:click="save" wire:loading.attr="disabled" wire:target="save" class="disabled:opacity-25">
                <i class="mx-2 fa-regular fa-floppy-disk"></i> Guardar
            </x-jet-danger-button>
            
        </x-slot>

    </x-jet-dialog-modal>



</div>

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.slim.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>

    document.addEventListener('livewire:load',function(){
        $('.select2').select2({
           tags:true
       });
        $('.select2').on('change', function(){
            @this.set('category_id', this.value);
        });
    })
</script>

<script>

    document.addEventListener('livewire:load',function(){
        $('.select2m').select2({
           tags:true
       });
        $('.select2m').on('change', function(){
            @this.set('modelo_id', this.value);
        });
    })
</script>


<script>

    document.addEventListener('livewire:load',function(){
        $('.select2ma').select2({
           tags:true
       });
        $('.select2ma').on('change', function(){
            @this.set('brand_id', this.value);
        });
    })
</script>


<script>
     document.addEventListener('livewire:load',function(){
        $('.select21').select2();
        $('.select21').on('change', function(){
            @this.set('subcategory_id', this.value);
        });
    })
 

/*     $('.select2').select2({
           tags:true
       }); */

/*     $('.select22').select2({
           tags:true
       }); */
</script>
@endpush