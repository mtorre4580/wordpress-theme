<!-- Contact template (theme) -->
<article class="py-5">
    <div class="container">			    
        <form method="post" action="/wordpress/wp-content/themes/reefcorals/send.php">
            <p class="text-center">¿Tenés alguna consulta? por favor envianos un mail</p>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email">
                <small class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
            </div>
            <div class="form-group">
                <label for="message">Mensaje</label>
                <textarea class="form-control" id="message" name="message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</article>