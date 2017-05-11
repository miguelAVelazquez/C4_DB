<div class="row">
    <div class="col-md-12">
        <form method="post" action="etc_item" id="form-busqueda" >
            <div class="row">
                <div class="col-md-1 col-xs-2">
                    <div class="radio">
                        <label>
                            <input type="radio" name="buscar"  value="id">ID
                        </label>
                    </div>
                </div>
                <div class="col-md-1 col-xs-3">
                    <div class="radio">
                        <label>
                            <input type="radio" name="buscar" value="nombre" required>NAME
                        </label>
                    </div>
                </div>
                <div class="col-md-3 col-xs-7">
                    <div class="input-group">
                        <input type="text" class="form-control input-sm" name="dato" placeholder="Insert data" required>
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary btn-sm" id="buscar"><span class="glyphicon glyphicon-search" aria-hidden="true"></span
                        </span>
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
            </div>
        </form>
    </div>
</div>