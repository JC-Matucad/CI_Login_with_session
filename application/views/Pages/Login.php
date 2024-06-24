<?php $this->load->view('Components/header'); ?>
  <body>



    <div class="container d-flex justify-content-center mt-5">
        <div class="card" style="width: 30rem;">
            <div class="card-body">
                <form method="post" action="<?=base_url()?>Login/Validate">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" id="inpName" name="inpName">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inpPassword" name="inpPassword">
                    </div>
                    
                    <button type="submit" class="btn btn-primary mt-3">Login</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>