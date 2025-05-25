<?php
include_once base_path('app/Views/layouts/header.view.php');
include_once base_path('app/Views/layouts/navbar.view.php');
?>
<!-- Main Content Container -->
<div class="container mt-4 mb-5">
    <div class="row">
        <div class="col-md-12 text-center mb-4">
            <h1>Welcome to My Framework</h1>
            <p class="lead">A lightweight PHP framework for modern web applications</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Easy to Use</h5>
                    <p class="card-text">Simple and intuitive architecture that gets you started quickly.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Flexible</h5>
                    <p class="card-text">Build anything from small websites to complex web applications.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Modern</h5>
                    <p class="card-text">Built with modern PHP practices and design patterns.</p>
                </div>
            </div>
        </div>
    </div>
<div class="row mt-5">
    <div class="col-md-12">
        <h2 class="text-center mb-4">Framework Features</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Core PHP Architecture</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Built with pure PHP - no complex dependencies</li>
                            <li class="list-group-item">MVC (Model-View-Controller) architecture</li>
                            <li class="list-group-item">Clean and organized code structure</li>
                            <li class="list-group-item">Easy to understand and maintain</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Routing & Middleware</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Simple route definition system</li>
                            <li class="list-group-item">Request-based routing</li>
                            <li class="list-group-item">Flexible middleware implementation</li>
                            <li class="list-group-item">Easy request handling and processing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Customization</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Customizable helper functions</li>
                            <li class="list-group-item">Extensible architecture</li>
                            <li class="list-group-item">Easy to add new features</li>
                            <li class="list-group-item">Flexible configuration options</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Developer Experience</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Quick setup and configuration</li>
                            <li class="list-group-item">Comprehensive documentation</li>
                            <li class="list-group-item">Developer-friendly structure</li>
                            <li class="list-group-item">Built-in debugging tools</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include_once base_path('app/Views/layouts/footer.view.php') ?>