<?php get_header(); ?>

<main>
  <div class="section">
    <div class="section_inner">
      <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
            <header class="section_header">
              <h1 class="heading heading-primary"><?php the_title(); ?></h1>
            </header>
            <div class="post_content">
              <time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('Y年m月d日'); ?></time>
              <div class="content">
                <?php the_content(); ?>
              </div>
            </div>
            <footer class="post_footer">
              <!-- ↓カテゴリーの表示とリンク -->
              <?php
              $categories = get_the_category();
              if ($categories): ?>

                <div class="category">
                  <div class="category_list">
                    <?php foreach ($categories as $category): ?>
                      <div class="category_item"><a href="<?php echo get_category_link($category); ?>" class="btn btn-sm is-active"><?php echo $category->name; ?></a></div>
                    <?php endforeach; ?>
                  </div>
                </div>
              <?php endif; ?>

              <div class="prevNext">
                <!-- １つ前の記事のタイトルとリンクの表示 -->
                <?php
                $previous_post = get_previous_post();
                if ($previous_post):
                ?>
                  <div class="prevNext_item prevNext_item-prev">
                    <a href="<?php the_permalink($previous_post); ?>">
                      <svg width="20" height="38" viewBox="0 0 20 38">
                        <path d="M0,0,19,19,0,38" transform="translate(20 38) rotate(180)" fill="none" stroke="#224163" stroke-width="1" />
                      </svg>
                      <span><?php echo get_the_title($previous_post); ?></span>
                    </a>
                  </div>
                <?php endif ?>

                <?php
                $next_post = get_next_post();
                if ($next_post):
                ?>
                  <div class="prevNext_item prevNext_item-next">
                    <a href="<?php the_permalink($next_post); ?>">
                      <span><?php echo get_the_title($next_post); ?></span>
                      <svg width="20" height="38" viewBox="0 0 20 38">
                        <path d="M1832,1515l19,19L1832,1553" transform="translate(-1832 -1514)" fill="none" stroke="#224163" stroke-width="1" />
                      </svg>
                    </a>
                  </div>
                <?php endif ?>

              </div>
            </footer>
          </article>
        <?php endwhile ?>
      <?php endif ?>

      <!-- ページの下部に、新着記事３件のサムネイル等を表示 -->
      <!-- 教科書P.161 -->
      <?php
      $args = [ //$args は、設定をいれてある
        'post_type' => 'post', //投稿記事（お知らせの記事）だけを指定
        'posts_per_page' => 3, //最新記事を3件表示
      ];

      // 作った設定をいれて、新しいWPクエリを作る
      $latest_query = new WP_Query($args);

      // サブループのWPループにしたい該当の投稿記事があるかチェック
      if ($latest_query->have_posts()):
      ?>
        <section class="latest">

          <header class="latest_header">
            <h2 class="heading heading-secondary">新着情報</h2>
          </header>
          <div class="latest_body">
            <div class="cardList">

              <?php while ($latest_query->have_posts()): $latest_query->the_post(); ?>
                <?php get_template_part('template-parts/loop', 'news'); ?>
              <?php
              endwhile;
              // ↓カスタムループ（サブループ）を使ったあとは、投稿データの設定を一旦リセットする
              wp_reset_postdata();
              ?>

            </div>
          </div>
        </section>
      <?php endif; ?>

    </div>
  </div>
</main>

<?php get_footer(); ?>