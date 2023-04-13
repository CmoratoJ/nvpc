<form id="form">
    <div class="row">
        <div class="col mb-2">
            <label for="user" class="form-label">Buscar por username</label>
            <input id="user" class="form-control" name="user" type="text" required value="CmoratoJ">
        </div>
        <div class="col mb-6">
            <label for="search" class="form-label">Buscar por repositório</label>
            <input id="search" class="form-control" name="search" type="text" placeholder="Informe do nome do repositório">
        </div>
        <div class="col col-md-2">
            <label for="type" class="form-label">Arquivado ?</label>
            <select id="archived" class="form-control" name="archived">
                <option value="N">Não</option>
                <option value="S">Sim</option>
            </select>
        </div>
        <div class="col mb-2">
            <label for="language" class="form-label">Buscar por linguagem</label>
            <input id="language" class="form-control" name="language" type="text" placeholder="Informe o nome da linguagem">
        </div>
    </div>
    <button type="submit" class="btn btn-success mb-5" id="buscar">Buscar</button>
</form>


<?php require 'table.php'; ?>