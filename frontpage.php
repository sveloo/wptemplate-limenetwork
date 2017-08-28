<?php // Template Name: Homepage ?>

<?php get_header(); ?>

<?php get_template_part('includes/content', 'slider'); ?>

<?php get_template_part('includes/content', 'twitter'); ?>

<?php get_template_part('includes/content', 'features'); ?>


<div class="section pathways">
    <div class="container">
        <div class="row">
            <div class="quicklinks">
                <ul class="collection with-header">
                    <li class="collection-header orange-gradient"><h4>Indigenous Pathways into Medicine</h4></li>
                </ul>
            </div>
            <div class="col s6">
                <div class="video-container">
                    <iframe width="1280" height="720" src="https://www.youtube.com/embed/28mbmiuZDaM?controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>

            <div class="col s6">
                <div class="video-container">
                    <iframe width="1280" height="720" src="https://www.youtube.com/embed/wqoZ8wciBI8?controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col s6">
                <div class="video-container">
                    <iframe width="1280" height="720" src="https://www.youtube.com/embed/QWocwuR9u9k?controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>

            <div class="col s6">
                <div class="video-container">
                    <iframe width="1280" height="720" src="https://www.youtube.com/embed/1mIL4KpoXkY?controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <p>The LIME Network Indigenous Pathways into Medicine Online Resource is designed to help future students determine which university will be the best fit for them as they study to become a doctor. There are many paths to gain entry into a medical degree.</p>
                <p class="center-align  "><a class="waves-effect waves-light btn btn-purple">Search for Pathways</a></p>
            </div>
        </div>
    </div>
</div>

<div class="section resources">
    <div class="container">
        <div class="col s12">
            <div class="quicklinks">
                  <ul class="collection with-header">
                    <li class="collection-header"><h4>Featured Resources</h4></li>
                    <a href="#!" class="collection-item"><span class="new badge" data-badge-caption="Publication"></span>Race and Public Health | Harvard School of Public Health</a>
                    <a href="#!" class="collection-item"><span class="new badge" data-badge-caption="Journal"></span>Mental Health in Remote and Rural Communities</a>
                    <a href="#!" class="collection-item"><span class="new badge" data-badge-caption="Book"></span>Aboriginal and Torres Strait Islander Health Performance Framework, 2017</a>
                    <a href="#!" class="collection-item"><span class="new badge" data-badge-caption="Video"></span>The health of Indigenous Australians</a>
                    <a href="#!" class="collection-item"><span class="new badge" data-badge-caption="Publication"></span>Indigenous Student Matriculation into Medical School: Policy and Progress</a>
                    <a href="#!" class="collection-item"><span class="new badge" data-badge-caption="Paper"></span>The Development of an Indigenous Health Curriculum for Medical Students</a>
                    <a href="#!" class="collection-item"><span class="new badge" data-badge-caption="Book"></span>Keynote: Race is real and so is racism - Making the case for teaching race in Indigenous health curriculum</a>
                    <a href="#!" class="collection-item"><span class="new badge" data-badge-caption="Presenation"></span>Keynote Presentation: Externalising a complicated situation - Teaching Racism in an Indigenous curriculum: A case study</a>
                    <a href="#!" class="collection-item"><span class="new badge" data-badge-caption="Publication"></span>Unsafe learning environments: Indigenous medical students' experiences of racism</a>
                    <a href="#!" class="collection-item"><span class="new badge" data-badge-caption="Paper"></span>Shifting Understandings: Do scenario-based clinical decisions change with immersion?</a>
                  </ul>           
            </div>
        </div>
    </div>
</div>

<div class="section partners">
    <div class="container">
            <div class="col s12 center-align">
                <img src="<?php echo get_template_directory_uri(); ?>/images/md_logo.gif" class="responsive-img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/unimelb.jpg" class="responsive-img">
                <p class="footnote">The LIME Network is hosted by the Faculty of Medicine, Dentistry and Health Sciences at the University of Melbourne.<br>This website was funded by the Australian Government Department of Health.<br> The views expressed on the website do not necessarily represent the position of the Australian Government.</p>

                <p class="footnote">LIME logo and artwork by Michelle Smith and Kevin Murray</p>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>