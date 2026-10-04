<?php require_once 'Product.php' ?>

<?php require_once 'Product.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Products</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body class="bg-light">

<div class="container py-5">

    <h1 class="text-center mb-5">
        Our Products
    </h1>

    <div class="row g-4">

        <!-- Product One -->
        <div class="col-md-6 col-lg-4">

            <div class="card h-100 shadow-sm border-0">

                <div class="card-body d-flex flex-column">

                    <span class="badge text-bg-primary align-self-start mb-3">
                        <?= $proOne->brand ?>
                    </span>

                    <h5 class="card-title fw-bold">
                        <?= $proOne->getName() ?>
                    </h5>

                    <p class="card-text text-muted">
                        <?= $proOne->description ?>
                    </p>

                    <div class="mt-auto">

                        <p class="mb-1 text-muted">
                            Original Price:
                            <del>
                                <?= number_format($proOne->price, 2) ?> EGP
                            </del>
                        </p>

                        <p class="mb-1">
                            After Discount:
                            <strong class="text-primary">
                                <?= number_format($proOne->priceAfterDiscount(), 2) ?> EGP
                            </strong>
                        </p>

                        <h5 class="fw-bold text-success mb-3">
                            Final Price:
                            <?= number_format($proOne->getFinalPrice(), 2) ?> EGP
                        </h5>

                        <button class="btn btn-primary w-100">
                            Buy Now
                        </button>

                    </div>

                </div>

            </div>

        </div>


        <!-- Product Two -->
        <div class="col-md-6 col-lg-4">

            <div class="card h-100 shadow-sm border-0">

                <div class="card-body d-flex flex-column">

                    <span class="badge text-bg-dark align-self-start mb-3">
                        <?= $proTwo->brand ?>
                    </span>

                    <h5 class="card-title fw-bold">
                        <?= $proTwo->getName() ?>
                    </h5>

                    <p class="card-text text-muted">
                        <?= $proTwo->description ?>
                    </p>

                    <div class="mt-auto">

                        <p class="mb-1 text-muted">
                            Original Price:
                            <del>
                                <?= number_format($proTwo->price, 2) ?> EGP
                            </del>
                        </p>

                        <p class="mb-1">
                            After Discount:
                            <strong class="text-primary">
                                <?= number_format($proTwo->priceAfterDiscount(), 2) ?> EGP
                            </strong>
                        </p>

                        <h5 class="fw-bold text-success mb-3">
                            Final Price:
                            <?= number_format($proTwo->getFinalPrice(), 2) ?> EGP
                        </h5>

                        <button class="btn btn-dark w-100">
                            Buy Now
                        </button>

                    </div>

                </div>

            </div>

        </div>


        <!-- Product Three -->
        <div class="col-md-6 col-lg-4">

            <div class="card h-100 shadow-sm border-0">

                <div class="card-body d-flex flex-column">

                    <span class="badge text-bg-info align-self-start mb-3">
                        <?= $proThree->brand ?>
                    </span>

                    <h5 class="card-title fw-bold">
                        <?= $proThree->getName() ?>
                    </h5>

                    <p class="card-text text-muted">
                        <?= $proThree->description ?>
                    </p>

                    <div class="mt-auto">

                        <p class="mb-1 text-muted">
                            Original Price:
                            <del>
                                <?= number_format($proThree->price, 2) ?> EGP
                            </del>
                        </p>

                        <p class="mb-1">
                            After Discount:
                            <strong class="text-primary">
                                <?= number_format($proThree->priceAfterDiscount(), 2) ?> EGP
                            </strong>
                        </p>

                        <h5 class="fw-bold text-success mb-3">
                            Final Price:
                            <?= number_format($proThree->getFinalPrice(), 2) ?> EGP
                        </h5>

                        <button class="btn btn-info w-100">
                            Buy Now
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</body>

</html>