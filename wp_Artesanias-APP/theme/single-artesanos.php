<?php get_header(); ?>
<?php 
                    while(have_posts()):the_post(); 
                        $postD                  = get_the_ID();
                        $thumbID                = get_post_thumbnail_id($postD);
                        $imgDestacadaD          = wp_get_attachment_url($thumbID);
                        $titleArtesano         = get_the_title();                        
                        $documentArtesano      = get_field('documento-artesano');
                        $geneArtesano          = get_field('genero-artesano');
                        $phoneArtesano         = get_field('telefono-artesano');   
                        $emailArtesano         = get_field('correo-artesano');
                        $nacimientoArtesano    = get_field('nacimiento-artesano');
                        $regionArtesano        = get_field('region-artesano');
                        $provinciaArtesano     = get_field('provincia-artesano');
                        $distritoArtesano      = get_field('distrito-artesano');
                ?>
<main class="artesano">
    <div class="container">
        <h1><?php echo $titleArtesano; ?></h1>
        <div class="artesano-single row">
            
        
                <div class="col-sm-12 col-lg-9">
                    
                    <p>
                        <strong>Nº Documento</strong>
                        <span><?php echo $documentArtesano ;?></span>
                    </p>
                    <p>
                        <strong>Genero:</strong>
                        <span><?php echo $geneArtesano ;?></span>
                    </p>
                    <p>
                        <strong>Teléfono:</strong>
                        <span><?php echo $phoneArtesano ;?></span>
                    </p>
                    <p>
                        <strong>Correo Electrónico:</strong>
                        <span><?php echo $emailArtesano ;?></span>
                    </p>
                    <p>
                        <strong>Fecha de Nacimiento</strong>
                        <span><?php echo $nacimientoArtesano ;?></span>
                    </p>
                    <p>
                        <strong>Región</strong>
                        <span><?php echo $regionArtesano ;?></span>
                    </p>
                    <p>
                        <strong>Provincia</strong>
                        <span><?php echo $provinciaArtesano ;?></span>
                    </p>
                    <p>
                        <strong>Distrito</strong>
                        <span><?php echo $distritoArtesano ;?></span>
                    </p>
                    
                </div>
                <div class="col-sm-12 col-lg-3">
                    <figure>
                        <img src="<?php echo $imgDestacadaD; ?>" class="artesano-single-qr">
                    </figure>
                </div>
                
        </div>
    </div>
</main>
<?php endwhile; ?>


<?php get_footer();?>
