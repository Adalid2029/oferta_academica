<div class="page-title parallax parallax4" style="background-position: 50% 88px;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h2 class="title">INSCRIPCIÓN</h2>
                </div><!-- /.page-title-heading -->
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="<?= base_url() ?>">Inicio</a></li>
                        <li><?= strtoupper($publicacion_detalle['nombre_programa']) ?></li>
                    </ul>
                </div><!-- /.breadcrumbs -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>

<section class="main-content blog-posts course-single" style="padding: 20px 0 !important;">
    <div class="container">
        <h1 class="bold"><?= strtoupper($publicacion_detalle['nombre_programa']) ?> </h1>
        <div class="row">
            <div class="col-md-4">
                <div class="course-widget-price">
                    <h4 class="course-title">DETALLES DEL <?= strtoupper($publicacion_detalle['grado_academico']) ?></h4>
                    <ul>
                        <li>
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <span>Starts</span>
                            <span class="time">May 29, 2016</span>
                        </li>
                        <li>
                            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                            <span>Duration</span>
                            <span class="time">2 Months</span>
                        </li>
                        <li>
                            <i class="fa fa-leanpub" aria-hidden="true"></i>
                            <span>Class Duration</span>
                            <span class="time">7:00 - 9:00</span>
                        </li>
                        <li>
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            <span>Institution</span>
                            <span class="time">ABC University</span>
                        </li>
                        <li>
                            <i class="fa fa-user-plus" aria-hidden="true"></i>
                            <span>Seats Available</span>
                            <span class="time">23 Student</span>
                        </li>
                        <li>
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <span>Level</span>
                            <span class="time">All level</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <h4 class="title-1 bold">FORMULARIO DE INSCRIPCIÓN</h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <h6 class="font-weight-bold">Carnet de Identidad<span class="active">*</span></h6>
                            <div class="controls">
                                <input type="text" name="nombre_programa" id="nombre_programa" class="form-control form-control-sm" onkeyup="javascript:this.value=this.value.toUpperCase();" value="EDUCACION SUPERIOR" data-validation-required-message="This field is required" aria-invalid="false">
                                <div class="help-block"></div>
                            </div>
                            <div class="form-control-feedback"><small><code></code></small></div>
                        </div>
                    </div>
                </div>

                <div class="flat-spacer h8px"></div>
                <h4 class="title-2">What You Will Learn</h4>
                <p>
                    Fusce eleifend donec sapien sed phase lusa pellentesque lacus.Vivamus lorem arcu semper duiac. Cras ornare arcu avamus nda leo Etiam ind arcu. Morbi justo mauris tempus pharetra interdum at congue semper purus. Lorem ipsum dolor sit
                </p>
                <p class="marginbt-12px">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <ul class="flat-list color-black">
                    <li>2 Glossaries for difficult terms &amp; acronyms</li>
                    <li>25 hours of High Quality e-Learning content</li>
                    <li>72 end of chapter quizzes </li>
                    <li>30 PDUs Offered </li>
                    <li>Collection of 47 six sigma tools for hands-on practice</li>
                </ul>

                <p class="mgbt-36">
                    Fusce eleifend donec sapien sed phase lusa. Pellentesque lacus vamus lorem arcu semper duiac. Cras ornare arcu avamus nda leo. Etiam ind arcu morbi justo mauris tempus pharetra interdum at congue semper purus. Lorem ipsum dolor sit amet sed consectetur adipisicing elit sed do eiusmod tempor incididunt.
                </p>

                <h4 class="bold mgbt-17">Explore The Best Concepts</h4>
                <p class="mgbt-48">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occa ecatedcupida tat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore veritatis etuquasi architect obeatae vitae dicta sunt explicabo nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequun tur magni.
                </p>
            </div><!-- /.entry-post -->
        </div><!-- /.main-post -->
    </div><!-- /container -->
</section>