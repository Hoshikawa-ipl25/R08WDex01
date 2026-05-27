<?php get_header(); ?>

<?php if (have_posts()): ?>
  <?php while (have_posts()): the_post(); ?>

    <main>
      <section class="section">
        <div class="section_inner">
          <div class="section_header">
            <h2 class="heading heading-primary"><span><?php the_title(); ?></span><?php echo strtoupper($post->post_name); ?></h2>
          </div>

          <div class="section_body">
            <div class="content">

              <!-- <img src="assets/img/concept/banner_img@2x.jpg" alt="">

              <p>FOOD SCIENCEでご提供するメキシコ料理は、当店の店主が修行したローカルフードを中心にした、ご家族でも楽しめる美味しいメキシカンです。</p>
              <p>
                スパイシーでヘルシーな本場の味をお楽しみ下さい。<br>
                皆様のご来店お待ちしております。
              </p> -->
              <?php the_content(); ?>

            </div>
          </div>
        </div>
      </section>
    </main>

  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>