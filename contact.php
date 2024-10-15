<?php
include_once __DIR__ . "/templates/header.php";

?>
<link rel="stylesheet" href="assets/form-style.css">

<body>
    <form method="POST">
        <div class="form">
            <div class="title">Welcome</div>
            <div class="subtitle">Let's create your account!</div>
            <div class="input-container ic1">
                <input id="firstname" name="fname" class="input" type="text" placeholder=" " />
                <div class="cut"></div>
                <label for="firstname" class="placeholder">First name</label>
            </div>
            <div class="input-container ic2">
                <input id="lastname" name="lname" class="input" type="text" placeholder=" " />
                <div class="cut"></div>
                <label for="lastname" class="placeholder">Last name</label>
            </div>
            <div class="input-container ic2">
                <input id="email" name="email" class="input" type="text" placeholder=" " />
                <div class="cut cut-short"></div>
                <label for="email" class="placeholder">Email
                    </>
            </div>
            <button type="text" class="submit">submit</button>
        </div>
    </form>
</body>

<?php
include_once __DIR__ . "/templates/footer.php";

?>