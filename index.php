<?php get_header(); ?>
<body>
  <div class="container">
    <div class="jumbotron">
  <h1>Saturn Theme</h1>
  <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <p><a class="btn btn-primary btn-lg">Learn more</a></p>
</div>

  <div id="main">
    <div id="content">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <h4>Posted on <?php the_time('F jS, Y') ?></h4>
        <p><?php the_content(__('(more...)')); ?></p>
        <hr> <?php endwhile; else: ?>
          <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
        </div>
        <?php get_sidebar(); ?>
      </div>
      <div id="delimiter">
      </div>
      <?php get_footer(); ?>
    </div>
</body>
