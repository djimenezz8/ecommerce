<?php
/**
 * Template Name: Home-Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mercadolibre
 */

get_header();
?>
<div class="container-fluid p-0">
    <?php include get_template_directory() . '/assets/modulos/modulo-productos/loop-slider.php'; ?>
</div>
<div class="container d-flex justify-content-center mt-5 mb-5">
    <div class="row info-pago col-11 pt-1 pb-1">
        <ul class="row align-items-center mb-0">
            <li class="col-12 col-sm-3 justify-content-start paga-comodo d-flex align-items-center">
                <p class="comodo-seguro">Paga cómodo y seguro <br>
                    <small class="subtitulo">con Mercado Pago</small>
                </p>

            </li>
            <li class="col-12 col-sm-6 tarjetas-section 1">
                <div class="row">
                    <div class="col-12 col-sm-6 d-flex align-items-center  mt-3 mb-3">
                        <div class="icono me-3 ms-2">
                            <a type="button" class="link-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <img class="tarjeta" src="http://localhost:8888/ecommerce/wp-content/uploads/2023/06/tarjeta-1.png" alt="tarjeta1">
                            </a>
                        </div>
                        <div class="text-modal">
                            <p class="comodo-seguro">Hasta 12 cuotas sin interés</p>
                            <a type="button" class="link-primary ver-mas" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Ver más
                            </a>
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h3>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad praesentium dolorem molestiae non et deserunt exercitationem dolores ea quidem. Ut repellat commodi illo maxime dolor ipsum nulla at obcaecati eaque.
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et expedita quaerat illum eaque hic possimus cum consequuntur quasi sed enim eos officia, atque quas sequi itaque, similique dolores saepe pariatur.
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias accusamus libero, et dignissimos corporis placeat natus corrupti amet ducimus aspernatur recusandae, incidunt consequatur nihil laudantium rem ullam optio, sint quam?
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ipsam earum blanditiis, magnam ex dolorum labore natus ipsa modi! Iusto perferendis reprehenderit laboriosam aspernatur temporibus provident sed harum, nihil quas!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-1"></div>
                    <div class="col-12 col-sm-5 d-flex align-items-center  mt-3 mb-3">
                        <div class="icono me-3 ms-2">
                            <a type="button" class="link-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <img class="tarjeta" src="http://localhost:8888/ecommerce/wp-content/uploads/2023/06/tarjeta-2.png" alt="tarjeta2">
                            </a>
                        </div>
                        <div class="text-modal">
                            <p class="comodo-seguro">Tarjeta de débito</p>
                            <a type="button" class="link-primary ver-mas" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Ver más
                            </a>
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title fs-5" id="staticBackdropLabel">Medios de pago</h3>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad praesentium dolorem molestiae non et deserunt exercitationem dolores ea quidem. Ut repellat commodi illo maxime dolor ipsum nulla at obcaecati eaque.
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et expedita quaerat illum eaque hic possimus cum consequuntur quasi sed enim eos officia, atque quas sequi itaque, similique dolores saepe pariatur.
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias accusamus libero, et dignissimos corporis placeat natus corrupti amet ducimus aspernatur recusandae, incidunt consequatur nihil laudantium rem ullam optio, sint quam?
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ipsam earum blanditiis, magnam ex dolorum labore natus ipsa modi! Iusto perferendis reprehenderit laboriosam aspernatur temporibus provident sed harum, nihil quas!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-12 col-sm-3 d-flex align-items-center  mt-3 mb-3">
                <div class="icono me-3 ms-2">
                    <a type="button" class="link-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <img class="tarjeta" src="http://localhost:8888/ecommerce/wp-content/uploads/2023/06/plus.png" alt="plus">
                    </a>
                </div>
                <div class="text-modal">
                    <p class="comodo-seguro">Más medios de pagos</p>
                    <a type="button" class="link-primary ver-mas" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Ver todos
                    </a>
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h3>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad praesentium dolorem molestiae non et deserunt exercitationem dolores ea quidem. Ut repellat commodi illo maxime dolor ipsum nulla at obcaecati eaque.
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et expedita quaerat illum eaque hic possimus cum consequuntur quasi sed enim eos officia, atque quas sequi itaque, similique dolores saepe pariatur.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias accusamus libero, et dignissimos corporis placeat natus corrupti amet ducimus aspernatur recusandae, incidunt consequatur nihil laudantium rem ullam optio, sint quam?
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ipsam earum blanditiis, magnam ex dolorum labore natus ipsa modi! Iusto perferendis reprehenderit laboriosam aspernatur temporibus provident sed harum, nihil quas!
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Understood</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="container">
    <?php include get_template_directory() . '/assets/modulos/modulo-productos/loop-principal.php'; ?>
</div>
<div class="container">
    <?php include get_template_directory() . '/assets/modulos/modulo-productos/loop-streaming.php'; ?>
</div>
<div class="container">
    <?php include get_template_directory() . '/assets/modulos/modulo-productos/loop-categoria.php'; ?>
</div>
<div class="container-fluid a-footer p-0">
    <div class="container">
    <?php include get_template_directory() . '/assets/modulos/modulo-productos/loop-footer.php'; ?>
    </div>
</div>
<?php
get_sidebar();
get_footer();
