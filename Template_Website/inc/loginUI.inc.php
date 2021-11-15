<!-- Modal Dialog for login -->
<!-- wird bei Bedarf her- und auch wieder weggeklappt -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title w-100 text-center" id="exampleModalLabel">Login</h5>
            </div>
            <div class="modal-body">
                <form class="form-signin login" action="index.php" method="POST">
                    <label for="inputUsername" class="sr-only">Username</label>
                    <input type="text" id="inputUsername" name="username" class="form-control" placeholder="Username" required autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                    <button class="btn btn-primary" type="submit">Einloggen</button>
                    <button class="btn btn-secondary" type="button"  data-dismiss="modal">Abbrechen</button>
                </form>
            </div>
        </div>
    </div>
</div>
