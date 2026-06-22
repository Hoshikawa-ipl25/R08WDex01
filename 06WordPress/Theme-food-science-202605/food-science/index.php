<?php get_header(); ?>

<main>
  <section class="section">
    <div class="section_inner">
      <div class="section_header">
        <h1 class="heading heading-primary"><span>最新情報</span>NEWS -
          <?php if (is_year()) {
            echo get_the_date('Y') . '年';
          } else {
            // wp_title('');
            echo single_cat_title();
            //single_cat_title(); は、カテゴリー別アーカイブページでのカテゴリー名を取得
            //https://lovelog.eternal-tears.com/wp-reference/single_cat_title/
          }
          ?>



        </h1>
      </div>

      <div class="archive">
        <div class="archive_category">
          <h2 class="archive_title">カテゴリー</h2>
          <ul class="archive_list">
            <!-- <li class="current-cat"><a href="#">お知らせ</a></li> -->
            <!-- <li><a href="#">コラム</a></li> -->
            <?php
            $args = [
              'title_li' => '', //見出しを削除
            ];
            wp_list_categories($args); ?>
          </ul>
        </div>

        <div class="archive_yealy">
          <h2 class="archive_title">年別</h2>
          <ul class="archive_list">
            <!-- <li><a href='#'>2023</a></li>
            <li><a href='#'>2022</a></li> -->
            <?php
            $args = [
              'type' => 'yearly', //年別を指定
            ];
            wp_get_archives($args); ?>
          </ul>
        </div>
      </div>

      <div class="section_body">
        <?php if (have_posts()): ?>
          <div class="cardList">
            <?php while (have_posts()): the_post(); ?>
              <?php get_template_part('template-parts/loop', 'news'); ?>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </div>

      <!-- ページナビゲーション設置 -->
      <?php if (function_exists('wp_pagenavi')): ?>
        <div class="pagination">
          <?php wp_pagenavi(); ?>
        </div>
      <?php endif; ?>


    </div>
  </section>
</main>


<?php get_footer(); ?>