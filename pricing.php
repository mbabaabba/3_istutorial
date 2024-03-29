<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is a prcing page...">
    <meta name="author" content="is team">
    <title>Pricing Page</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        body {
            background-image: linear-gradient(180deg, #eee, #fff 100px, #fff);
        }

        .container {
            max-width: 960px;
        }

        .pricing-header {
            max-width: 700px;
        }
    </style>
</head>

<body>

    <div class="container py-3">
        <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                <a href="<? echo $_SERVER['PHP_SELF'] ?>" class="d-flex align-items-center text-dark text-decoration-none">


                    <span class="fs-4">Tutotial Class</span>

                </a>

                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                    <a class="me-3 py-2 text-dark text-decoration-none" href="#">Home</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="#">Product</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="#">Pricing</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="#">Support</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="#">Logout</a>
                </nav>
            </div>

            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Pricing</h1>
                <p class="fs-5 text-muted">The investment that pays off. Get 25% dicsount on our enterprise class.
                    Check out the research!
            </div>
        </header>

        <main>
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Free</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">Eye Opener<small class="text-muted fw-light"></small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>2 Courses</li>
                                <li>Duration : 2 Weeks</li>
                                <li>Start Date : Aug 1, 2022</li>
                                <li>Introductory Classes</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Pro</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">&#x20A6; 100,000<small class="text-muted fw-light"></small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>10 Courses</li>
                                <li>Duration : 12 Weeks</li>
                                <li>Start Date : Aug 1, 2022</li>
                                <li>IT Certification</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm border-primary">
                        <div class="card-header py-3 text-white bg-primary border-primary">
                            <h4 class="my-0 fw-normal">Enterprise</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">&#x20A6; 500,000<small class="text-muted fw-light"></small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>15 Courses</li>
                                <li>Duration : 24 Weeks</li>
                                <li>Start Date : Aug 1, 2022</li>
                                <li>Advance IT Cert</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="display-6 text-center mb-4">Compare plans</h2>

            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th style="width: 34%;"></th>
                            <th style="width: 22%;">Free</th>
                            <th style="width: 22%;">Pro</th>
                            <th style="width: 22%;">Enterprise</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="text-start">Certifications</th>
                            
                            <td><svg class="form-check-input flex-shrink-0" type="checkbox" value="" checked width="24" height="24">  
                            <use xlink:href="#check" />
                                </svg></td>
                            <td><svg class="form-check-input flex-shrink-0" type="checkbox" value="" checked width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                            <td><svg class="form-check-input flex-shrink-0" type="checkbox" value="" checked width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-start">Learning Multiply Languages</th>
                            <td></td>
                            <td><svg class="form-check-input flex-shrink-0" type="checkbox" value="" checked width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                            <td><svg class="form-check-input flex-shrink-0" type="checkbox" value="" checked width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                        </tr>
                    </tbody>

                    <tbody>
                        <tr>
                            <th scope="row" class="text-start">Praticals Classes</th>
                            <td><svg class="bi" width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                            <td><svg class="form-check-input flex-shrink-0" type="checkbox" value="" checked width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                            <td><svg class="form-check-input flex-shrink-0" type="checkbox" value="" checked width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-start">Connects with Member</th>
                            <td></td>
                            <td><svg class="form-check-input flex-shrink-0" type="checkbox" value="" checked width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                            <td><svg class="form-check-input flex-shrink-0" type="checkbox" value="" checked width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-start">Better Learning Techniques.</th>
                            <td></td>
                            <td><svg class="bi" width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                            <td><svg class="form-check-input flex-shrink-0" type="checkbox" value="" checked width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-start">Job Opportunities</th>
                            <td></td>
                            <td></td>
                            <td><svg class="form-check-input flex-shrink-0" type="checkbox" value="" checked width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>

        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
                <div class="col-12 col-md">
                    <img class="mb-2" src="image/islogo.png" alt="" height="50rem">
                    <small class="d-block mb-3 text-muted">&copy; <?php echo date("Y"); ?></small>
                </div>
                <div class="col-6 col-md">
                    <h5>Features</h5>
                    <ul class="list-unstyled text-small">
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Last time</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Resources</h5>
                    <ul class="list-unstyled text-small">
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>About</h5>
                    <ul class="list-unstyled text-small">
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>

</body>

</html>