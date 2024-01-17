<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Create New Areasconocimiento</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                <div class="form-group">
                        <label for="docente">Seleccione un Docente</label>
                        <select wire:model="id_docentes" class="form-control" id="docente">
                        <option value="">Seleccione un Docente</option>
                        @foreach($docentes as $docente)
                        <option value="{{ $docente->id }}">{{ $docente->nombre }}</option>
                        @endforeach
                        </select>
                        @error('id_docentes') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="form-group">
    <label for="id_area_con">Seleccione una Área de Conocimiento</label>
    <select wire:model="id_area_con" class="form-control" id="id_area_con">
        <option value="">Seleccione una Área de Conocimiento</option>
        @foreach($areas as $areasconocimientosopciones)
            <option value="{{ $areasconocimientosopciones->id_area_cons }}">{{ $areasconocimientosopciones->nombre }}</option>
        @endforeach
    </select>

    @if ($errors->has('id_area_con'))
        <span class="error text-danger">{{ $errors->first('id_area_con') }}</span>
    @else
        <span class="help-block">Mensaje informativo antes del error (si es necesario)</span>
    @endif
</div>


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-bs-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div wire:ignore.self class="modal fade" id="updateDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Areasconocimiento</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
                    <div class="form-group">
                        <label for="id_docentes"></label>
                        <input wire:model="id_docentes" type="text" class="form-control" id="id_docentes" placeholder="Id Docentes">@error('id_docentes') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="id_area_con"></label>
                        <input wire:model="id_area_con" type="text" class="form-control" id="id_area_con" placeholder="Id Area Con">@error('id_area_con') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary">Save</button>
            </div>
       </div>
    </div>
</div>
