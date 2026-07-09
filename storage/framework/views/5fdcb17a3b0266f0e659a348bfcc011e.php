<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Inventaris Barang</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

    <style>
        body{
            background: linear-gradient(135deg,#009d63,#198754);
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .login-card{
            width:420px;
            border:none;
            border-radius:20px;
            overflow:hidden;
            box-shadow:0 15px 40px rgba(0,0,0,.2);
        }

        .card-header{
            background:#198754;
            color:white;
            text-align:center;
            padding:30px;
            border:none;
        }

        .card-header i{
            font-size:60px;
            margin-bottom:10px;
        }

        .card-body{
            padding:35px;
            background:white;
        }

        .form-control{
            border-radius:10px;
            height:48px;
        }

        .btn-login{
            background:#198754;
            color:white;
            height:48px;
            border-radius:10px;
            font-weight:bold;
        }

        .btn-login:hover{
            background:#157347;
            color:white;
        }

        .copyright{
            font-size:13px;
            color:#777;
            text-align:center;
            margin-top:15px;
        }
    </style>

</head>

<body>

<div class="card login-card">

    <div class="card-header">

        <i class="fas fa-boxes-stacked"></i>

        <h3>Inventaris Barang</h3>

        <small>Silakan Login Terlebih Dahulu</small>

    </div>

    <div class="card-body">

        
        <?php if(session('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i>
                <?php echo e(session('success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        
        <?php if(session('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fas fa-times-circle me-2"></i>
                <?php echo e(session('error')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('login')); ?>" method="POST">

            <?php echo csrf_field(); ?>

            <div class="mb-3">

                <label>Email</label>

                <div class="input-group">

                    <span class="input-group-text">
                        <i class="fas fa-envelope"></i>
                    </span>

                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="Masukkan Email"
                        required>

                </div>

            </div>

            <div class="mb-4">

                <label>Password</label>

                <div class="input-group">

                    <span class="input-group-text">
                        <i class="fas fa-lock"></i>
                    </span>

                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        placeholder="Masukkan Password"
                        required>

                </div>

            </div>

            <button class="btn btn-login w-100">
                <i class="fas fa-sign-in-alt me-2"></i>
                Login
            </button>

        </form>

        <div class="copyright">
            © <?php echo e(date('Y')); ?> Sistem Inventaris Barang <br>
            Copyright Nurvia Agustin
        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\bangsukri\resources\views/login.blade.php ENDPATH**/ ?>