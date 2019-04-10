<?php
/*
Template Name: page-about
*/
?>

<?php get_header(); ?>

<?php
$headline = get_field("headline");
$services = get_field("services");
$clients = get_field("clients");
$credit = get_field("credit");
$copyright = get_field("copyright");
?>

<main class="main--about">
    <div class="about--container">
        <section>
            <div class="headline">
                <?php echo $headline; ?>
            </div>
        </section>
        <section>
            <div class="services">
                <h3>Services</h3>
                <?php echo $services; ?>
            </div>
        </section>
        <section>
            <div class="clients">
                <h3>Clients and Collaborators</h3>
                <?php echo $clients; ?>
            </div>
        </section>
        <section>
            <div class="credit">
                <h3>Credits</h3>
                <?php echo $credit; ?>
            </div>
        </section>
        <section class="copyright">
            <?php echo $copyright; ?>
        </section>
    </div>
</main>

<?php get_footer(); ?>
