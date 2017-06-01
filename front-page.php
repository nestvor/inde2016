<?php
/**
 * The front page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Inde_2016
 */

get_header(); ?>

    <section id="main-content">
        <div class="row">
            <div class="col-md-offset-2 col-md-9">
                <div class="row">
                    <div class="col-md-8">
                        <div id="content" class="site-content">
                            <div id="primary" class="content-area">
                                <main id="main" class="site-main" role="main">

                                    <div class="section group latest-cards">
                                        <!--                                        <div class="row is-table-row">-->
                                        <!--                                            <div class="col-md-4">-->
                                        <!--                                                Dobili smo se na sejtanik večerji s celo paleto ledenih čajev in družabnih iger, na kateri smo zbirali prispevke za dokončno obnovo strehe. Dež nas je pregnal v notranje prostore, kjer smo se vseeno imeli fino. Hvala vsem, ki ste prišli in nam s prispevki pomagali priti korak bližje zadanim strEšnim ciljem!   Menendes brothers […]-->
                                        <!--                                            </div>-->
                                        <!--                                            <div class="col-md-4">-->
                                        <!--                                                Tudi Inde-janci nismo mogli ostati ravnodušni na vse bolj odmevno in bližajočo se problematiko beguncev, ki pomoč iščejo v Evropi. Ker zbirnega centra v Kopru ni, smo se odločili organizirati še sami in tako ustanovili zbirni center za pomoč v prostorih Inde in sicer od 16h-19h vsak pondeljek in sredo. Zaenkrat potrebujejo, kar je spodaj […]-->
                                        <!--                                            </div>-->
                                        <!--                                            <div class="col-md-4">-->
                                        <!--                                                rage prijateljice in prijatelje naprošamo, da nam NE prinašate več kavčev. Hvaležni smo za vsakega, ki smo ga do sedaj dobili, vendar za enkrat za nove prišleke nimamo več prostora. 🙂 Enako velja tudi za oblačila, ki so do zdaj romala v free shop – slednjega smo začasno ukinili. Namesto tega pa lahko odvečne obleke, […]-->
                                        <!--                                            </div>-->
                                        <!--                                        </div>-->
                                        <div class="row is-table-row">
                                            <?php
                                            /* display the 3 latest posts */

                                            $args = array( 'posts_per_page' => 3);
                                            $myposts = get_posts( $args );
                                            foreach( $myposts as $post ) :
                                                setup_postdata($post);
                                                get_template_part( 'template-parts/front-page-card');
                                            endforeach;

                                            wp_reset_postdata();
                                            ?>
                                        </div>
                                    </div>

                                    <div class="section group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <?php dynamic_sidebar( 'fp-calendar-widgets' ); ?>
                                            </div>

                                            <div class="col-md-8">
                                                <?php
                                                $deps   = array_merge( array( 'jquery' ), Tribe__Events__Template_Factory::get_vendor_scripts() );
                                                $path   = Tribe__Events__Template_Factory::getMinFile( tribe_events_resource_url( 'tribe-events.js' ), true );
                                                wp_enqueue_script( $path, $deps );

                                                ?>

                                                <div id="tribe-events-pg-template">
                                                    <?php tribe_events_before_html(); ?>
                                                    <?php tribe_get_view(); ?>
                                                    <?php tribe_events_after_html(); ?>
                                                </div> <!-- #tribe-events-pg-template -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="section group">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h3>NE OBLAST, TEMVEČ MOČ</h3>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ullamcorper elit quis tristique ultrices. Duis in cursus erat. Nam placerat blandit urna, sit amet feugiat sapien. Sed sed sagittis enim. Aliquam egestas lorem varius dictum ultrices. Sed ullamcorper sem a est fringilla condimentum. Nullam non consequat diam. Duis aliquet, augue nec iaculis mollis, nibh urna iaculis elit, non viverra lorem dui ut lacus. Aliquam erat volutpat. Vestibulum elementum maximus nibh ut bibendum. Nullam sodales justo nec ipsum congue tincidunt.

                                                Nunc bibendum laoreet bibendum. Fusce pretium, sapien eu sollicitudin volutpat, massa velit porttitor lorem, eu condimentum mauris libero in nulla. Ut lobortis tellus lacus, sed molestie mi euismod vel. Duis eu metus id ante commodo ultrices. Suspendisse potenti. Nunc eget ex et metus malesuada elementum. Aenean sit amet auctor nisl. Donec nec lectus tincidunt, pellentesque urna nec, consequat est. Phasellus at sagittis sapien. Nunc lobortis pharetra ex, iaculis vestibulum metus vehicula et. Praesent bibendum maximus justo, cursus gravida nulla luctus sit amet.
                                            </div>

                                            <div class="col-md-4">
                                                <h3>O U.P.I.</h3>
                                                <ul>
                                                    <li>PISMA</li>
                                                    <li>IZJAVA ZA MEDIJE</li>
                                                    <li>SS SOLIDARNA SREDA</li>
                                                    <li>KAFETERIJA ANARHIJA</li>
                                                    <li>CIKLUS PREDAVANJ</li>
                                                    <li>KONTAKT</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </main><!-- #main -->
                            </div><!-- #primary -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <?php
                        get_sidebar();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
