<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= APP_NAME ?> LICENSE EXPIRED</title>
    <!-- Bootstrap CSS file -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card card-body shadow mt-1">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4><?= APP_NAME ?> 's license expired!</h4>
                            <p>Please renew the License for <?= APP_NAME ?> 
                             to leverage your experience with the app
                             <br/>
                             Contact the site admin for more details.
                             We apologize for the inconvenience and appreciate your 
                             patience
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <img src="<?= url('maintenance.jpg') ?>" class="img-responsive"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>