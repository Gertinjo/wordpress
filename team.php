<?php
/* Template Name: Team */

get_header();
?>

<main class="team-page section-pad">

    <header class="team-intro">
        <h1 id="heading"><?php the_title(); ?></h1>
    </header>

    <?php
    $team = new WP_Query([
        'post_type'      => 'post',
        'posts_per_page' => -1,
        'category_name'  => 'team',
        'orderby'        => 'title',
        'order'          => 'ASC',
    ]);
    ?>

    <?php if ($team->have_posts()) : ?>
        <ul class="team-list">
            <?php while ($team->have_posts()) : $team->the_post();

                $role      = get_field('role');
                $shortbio  = get_field('short_bio');
                $email     = get_field('email');
                $linkedin  = get_field('linkedin');
            ?>

                <li class="team-card">

                    <div class="team-photo">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('team-avatar', [
                                'alt' => esc_attr(get_the_title())
                            ]);
                        }
                        ?>
                    </div>

                    <div class="team-info">

                        <h3 class="team-name"><?php the_title(); ?></h3>

                        <?php if ($role) : ?>
                            <p class="team-role"><?php echo esc_html($role); ?></p>
                        <?php endif; ?>

                        <?php if (has_excerpt()) : ?>
                            <p class="team-bio"><?php the_excerpt(); ?></p>
                        <?php elseif ($shortbio) : ?>
                            <p class="team-bio"><?php echo esc_html($shortbio); ?></p>
                        <?php endif; ?>

                        <?php if ($email || $linkedin) : ?>
                            <p class="team-links">
                                <?php if ($email) : ?>
                                    <a href="mailto:<?php echo antispambot($email); ?>">Email</a>
                                <?php endif; ?>

                                <?php if ($linkedin) : ?>
                                    <a href="<?php echo esc_url($linkedin); ?>" target="_blank" rel="noopener">
                                        LinkedIn
                                    </a>
                                <?php endif; ?>
                            </p>
                        <?php endif; ?>

                    </div>
                </li>

            <?php endwhile; ?>
        </ul>

        <?php wp_reset_postdata(); ?>

    <?php else : ?>
        <p>No team members yet.</p>
    <?php endif; ?>

</main>

<?php get_footer(); ?>
