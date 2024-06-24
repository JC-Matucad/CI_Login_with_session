<?php $this->load->view('Components/header'); ?>
  <body>
    <div class="d-flex flex-row justify-content-end">
      <button class="btn btn-outline-success m-1" type="submit" id="logoutBtn">Logout</button>
    </div>

    <h1>WELCOME</h1>
    <?php if (!empty($statusData)): ?>
        <h1>User <?php echo $statusData; ?>!</h1>
    <?php endif; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        document.getElementById('logoutBtn').addEventListener('click', function() {
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '<?= base_url('Welcome/logout') ?>', true);
            xhr.onload = function () {
                if (xhr.status === 200) {
                    window.location.href = '<?= base_url('Login') ?>';
                } else {
                    console.error('Logout failed. Status: ' + xhr.status);
                }
            };
            xhr.send();
        });
    </script>

  </body>
</html>