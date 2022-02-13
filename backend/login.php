<?php
if (isset($_SESSION['user'])) {
    to("./backstage.php?do=manage");
}
?>
<!-- login -->
<section class="login-page">
    <main class="container">
        <h1>Login</h1>
        <main class="border border-info p-4 mx-auto my-5 w-md-50">
            <p id="error"></p>
            <div class="row my-3">
                <div class="col">
                    <label for="">Account</label>
                    <input type="text" class="form-control" name="account" id="account">
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <label for="exampleFormControlTextarea1">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
            </div>
            <button class="btn btn-info mx-auto" onclick="checkLogin()">Log In</button>
        </main>
    </main>
</section>