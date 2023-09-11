

{extends file="template/layout.tpl"}

{block name="title"}
    GameHub | Products
{/block}

{block name="navmenu"}{/block}

{block name="productPage"}
    <style>
        .card {
            display: inline-block;
        }
    </style>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary">
        <div class="col-md-6 p-lg-5 mx-auto my-5">
            <h1 class="display-3 fw-bold">Products</h1>
            <h3 class="fw-normal text-muted mb-3">Games</h3>
            <div class="d-flex gap-3 justify-content-center lead fw-normal">
                <a class="icon-link" href="#">
                </a>
            </div>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="img/GameHub.png" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text">Some Info</p>
            <a href="#" class="btn btn-primary" style="background-color: orange; color: black; border: none">More Info</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="img/GameHub.png" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text">Some Info</p>
            <a href="#" class="btn btn-primary">More Info</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="img/GameHub.png" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text">Some Info</p>
            <a href="#" class="btn btn-primary">More Info</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="img/GameHub.png" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text">Some Info</p>
            <a href="#" class="btn btn-primary">More Info</a>
        </div>
    </div>

{/block}