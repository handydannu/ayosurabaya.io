<?php $this->load->view($this->config->item('template_name') . 'header'); ?>

        <!-- S: Main Container -->
        <main id="container">
          <div class="container pd-free">
            
            <!-- S: Row 2 Column -->
            <div class="row">

              <?php echo $this->load->view($this->config->item('template_name') . 'ads-side-banner'); ?>

              <!-- S: Content Container -->
              <article class="col-md-8">

                <!-- S: Breadcrumb -->
                <div class="col-news-breadcrumb">
                  <div class="pa">
                    <a href="<?php echo site_url(); ?>">Home</a>
                    / <a href="<?php echo site_url('video'); ?>" class="active">Video</a>
                  </div>
                </div>
                <!-- E: Breadcrumb -->

                <div class="col-md-12">
                  <!-- S: Archive Title Head -->
                  <div class="row">
                    <div class="col-md-12 col-news-archive-head">
                    </div>
                  </div>
                  <!-- E: Archive Title Head -->

                  <!-- S: Headline of Archive Section -->
                  <div class="row mg-bottom-15" id="headline-archive-slider">
                    <div class="headline-bu">AYO VIDEO</div>
                    <ul class="headline-archive-list">
                      <?php if (count($video) >= 5) { $lc = 5; } else { $lc = count($video); } // loop count ?>
                      <?php for($i = 0; $i < $lc; $i++) { ?>
                        <?php
                          $dc = content_time($video[$i]['date']);
                          $dp = id_time($video[$i]['date']);

                          $url = site_url('watch') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $video[$i]['video_id'] . '/' . $video[$i]['name'];
                          $url_img = 'http://i.ytimg.com/vi/' . $video[$i]['video'] . '/hqdefault.jpg';
                        ?>
                      <li data-thumb="<?php echo $url_img; ?>">
                        <figure>
                          <img src="<?php echo $url_img; ?>" class="img-responsive" />
                          <figcaption style="bottom: 0px;">
                            <span class="headline-post-meta">
                              <span class="date">
                                <i class="fa fa-calendar"></i>&nbsp;&nbsp;&nbsp;<?php echo $dp; ?>
                              </span>
                              <span class="author">
                                <i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;<?php echo $video[$i]['source']; // Really bad source to be author name! ?>
                              </span>
                            </span>
                            <span class="headline-post-author">
                            </span>
                            <a href="<?php echo $url; ?>">
                              <?php echo $video[$i]['title']; ?>
                            </a>
                          </figcaption>
                        </figure>
                      </li>
                    <?php } ?>
                    </ul>
                  </div>
                  <!-- E: Headline of Archive Section -->

                  <!-- S: Video List -->
                  <div class="col-video-content mg-out">
                  <?php for($i = 5; $i < count($video); $i++) { ?>
                    <?php
                      $dc = content_time($video[$i]['date']);
                      $dp = id_time($video[$i]['date']);

                      $url = site_url('watch') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $video[$i]['video_id'] . '/' . $video[$i]['name'];
                      $url_img = 'http://i.ytimg.com/vi/' . $video[$i]['video'] . '/hqdefault.jpg';
                    ?>
                    <?php if($i % 2 == 1) { ?>
                    <div class="row">
                    <?php } ?>
                      <div class="col-md-6">
                        <figure>
                          <a href="<?php echo $url; ?>">
                            <img data-original="<?php echo $url_img; ?>" class="img-responsive img-lazy" />
                            <noscript>
                              <img src="<?php echo $url_img; ?>" class="img-responsive" />
                            </noscript>
                            <div class="cover-play">
                              <i class="fa fa-play-circle-o"></i>
                            </div>
                          </a>
                          <figcaption>
                            <a href="<?php echo $url; ?>"><?php echo $video[$i]['title']; ?></a>
                            <span class="recent-media-meta">
                              <span class="recent-date">
                                <i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php echo $dp; ?>
                              </span>
                            </span>
                          </figcaption>
                        </figure>
                      </div>
                    <?php if($i % 2 == 0) { ?>
                    </div>
                    <?php } ?>
                  <?php } ?>
                  </div>
                  <!-- S: Video List -->
                </div>

                <!-- S: Pagination -->
                <?php if ($page['links'] != '') { ?>
                <div class="row">
                  <div class="col-md-12 col-pagination">
                    <ul>
                      <?php echo $page['links']; ?>
                    </ul>
                  </div>
                </div>
                <?php } ?>
                <!-- E: Pagination -->

              </article>
              <!-- E: Content Container -->

              <!-- S: Sidebar -->
              <?php $this->load->view($this->config->item('template_name') . 'content-sidebar'); ?>
              <!-- E: Sidebar -->
            </div>
            <div class="clearfix"></div>
            <!-- E: Row 2 Column -->
          </div>
        </main>
        <!-- E: Main Container -->

<?php $this->load->view($this->config->item('template_name') . 'footer'); ?>