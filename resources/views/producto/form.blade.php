    
    <div class="form-group row">
            <label class="col-md-3 form-control-label" for="titulo">Categoría</label>
            
            <div class="col-md-9">
            
                <select class="form-control" name="id" id="id" required>
                                                
                <option value="0" disabled>Seleccione</option>
                
                @foreach($categorias as $cat)
                  
                   <option value="{{$cat->id}}">{{$cat->nombre}}</option>
                        
                @endforeach

                </select>
            
            </div>
                                       
    </div>
    
    
    <div class="form-group row">
                <label class="col-md-3 form-control-label" for="codigo">Código</label>
                <div class="col-md-9">
                    <input type="text" id="codigo" name="codigo" class="form-control" placeholder="Ingrese el Código" required pattern="[0-9]{0,15}">
                   
                </div>
    </div>
    
    <div class="form-group row">
                <label class="col-md-3 form-control-label" for="stock">Stock</label>
                <div class="col-md-9">
                    <input type="text" id="stock" name="stock" class="form-control" placeholder="Ingrese el stock" disabled>
                </div>
    </div>

     <div class="form-group row">
                <label class="col-md-3 form-control-label" for="nombre">Nombre</label>
                <div class="col-md-9">
                    <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingrese la nombre" required pattern="^[a-zA-Z_áéíóúñ\s]{0,100}$">
                </div>
    </div>

     <div class="form-group row">
                <label class="col-md-3 form-control-label" for="nombre">Precio Venta</label>
                <div class="col-md-9">
                    <input type="number" id="precio_venta" name="precio_venta" class="form-control" placeholder="Ingrese el precio venta" required pattern="^[a-zA-Z_áéíóúñ\s]{0,100}$">
                </div>
    </div>

    <div class="form-group row">
                <label class="col-md-3 form-control-label" for="imagen">Imagen</label>
                <div class="col-md-9">
                  
                    <input type="file" id="imagen" name="imagen" class="form-control">
                       
                </div>
    </div>


    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times fa-2x"></i> Cerrar</button>
        <button type="submit" class="btn btn-success"><i class="fa fa-save fa-2x"></i> Guardar</button>
        
    </div>