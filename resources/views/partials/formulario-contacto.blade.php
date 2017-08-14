<form>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputName4" class="col-form-label">Nombre</label>
            <input aria-describedby="name-block" name="first-name" type="text" class="form-control" id="inputName4" placeholder="Nombre..." required>
            <small id="name-block" class="form-text text-muted">
                Ej: Verónica Isabel
            </small>
        </div>
        <div class="form-group col-md-4">
            <label for="inputApellido4" class="col-form-label">Apellido</label>
            <input aria-describedby="lastname-block" name="last-name" type="text" class="form-control" id="inputApellido4" placeholder="Apellido..." required>
            <small id="lastname-block" class="form-text text-muted">
                Ej: Peña Berroa
            </small>
        </div>
        <div class="form-group col-md-4">
            <label for="inputEmail4" class="col-form-label">Email</label>
            <input aria-describedby="email-block"  name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email" required>
            <small id="email-block" class="form-text text-muted">
                Ej: example@example.com
            </small>
        </div>
    </div>
    <div class="form-group">
        <label for="inputSubject" class="col-form-label">Asunto</label>
        <input aria-describedby="subject-block" type="text" class="form-control" id="inputSubject" placeholder="Asunto del mensaje..." required>
        <small id="subject-block" class="form-text text-muted">
            Ej: Precio de un bizcocho de chocolate
        </small>
    </div>
    <div class="form-group">
        <label for="inputMsg" class="col-form-label">Mensaje</label>
        <textarea name="msg" class="form-control" id="inputMsg" placeholder="Ej: Saludos, me gustaría saber el precio de..." row="3" required></textarea>
    </div>
    {{csrf_field()}}
    <button type="submit" class="btn btn-primary btn-block">Enviar</button>
</form>