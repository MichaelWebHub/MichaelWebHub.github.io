<?php include('header.php') ?>

    <div class="container mt-5 mb-5">
        <div class="contact-clean">
            <form method="post">
                <h2 class="text-center">Contact us</h2>
                <div class="green-line"></div>
                <div class="form-group mt-4"><input class="form-control" type="text" name="name" placeholder="Name" /></div>
                <div class="form-group mt-4"><input class="form-control" type="email" name="email" placeholder="Email" /></div>
                <div class="form-group mt-4"><input class="form-control" type="text" name="subject" placeholder="Subject" /></div>
                <div class="form-group mt-4"><textarea class="form-control" rows="14" name="message" placeholder="Message"></textarea></div>
                <div class="form-group mt-4"><button class="btn btn-primary send-msg" type="submit">Send</button></div>
            </form>
        </div>
    </div>

<?php include('footer.php') ?>