

              <aside class="col-md-4">
                <div class="row">



               <!-- S: Sidebar: NETIZEN -->
              <!--<section class="col-cat-news col-md-12 col-sm-12 col-xs-12 mg-top-15 mg-btm-15">
                <div id="custom-content-1" style="border: 2px dashed #FF0004">
                  <div class="custom-title" style="border-bottom: 2px dashed #FF0004">
                    <h3>
                      <a href="<?php echo site_url(); ?>netizen" target="_blank" title="Menuju Halaman Arsip Netizen/Netizen"><img src="/assets/img/widget/netizen-tasik.png" class="img-responsive" /></a>
                    </h3>
                  </div>
                  <div class="custom-content" style="padding-right: 5px;">
                    <ul>
                      <?php for($i = 0; $i < count($netizen); $i++) { ?>
                        <?php

                          $dc = content_time($netizen[$i]['post_date_created']);
                          $dp = id_time($netizen[$i]['post_date']);

                          $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $netizen[$i]['post_id'] . '/' . /*$kodim[$i]['category_id'] . '/' .*/ $netizen[$i]['slug'];
                          $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $netizen[$i]['post_id'] . '/';
                        ?>
                      <li>
                        <a href="<?php echo $url; ?>">
                          <span class="custom-meta">
                            <span class="custom-list-title"><?php echo $netizen[$i]['post_title']; ?></span>
                          </span>
                          <img src="<?php echo $url_img . $netizen[$i]['post_image_thumb']; ?>" />
                        </a>
                      </li>
                      <?php } ?>
                    </ul>
                  </div>

                </div>
                <div class="link-archive text-center" >
                  <a href="<?php echo site_url(); ?>netizen" target="_blank" title="Menuju Halaman Arsip Netizen/Netizen">Arsip &raquo;</a>
                </div>
              </section>-->
              <!-- E: Sidebar: NETIZEN -->



 

                  <div class="sidebar-container">
                    <!-- S: Sidebar Section: Popular -->
                    <section id="popular-news" class="col-md-12 col-sidebar">
                      <div class="headline-bu">Terpopuler<div class="headline-bu-content"></div></div>
                      <br><br>
                      <!--<div class="popular-title">
                        <h3>
                          <i class="glyphicon glyphicon-fire"></i>&nbsp;&nbsp;
                          Terpopuler
                        </h3>
                      </div>-->
                      <div class="popular-content">
                         <div class="pa">
                            <ol>
                            <?php foreach($popular as $p) { ?>
                            <?php
                              // error_reporting(E_ALL);
                              $dc = content_time($p['post_date_created']);
                              $dp = id_time($p['post_date']);

                              $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $p['post_id'] . '/' . /*$p['category_id'] . '/' .*/ $p['slug'];
                              $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $p['post_id'] . '/';

                              // _d($url_img . $p['post_image_thumb']);
                            ?>
                            <a href="<?php echo $url; ?>">
                              <li>
                                <?php echo $p['post_title']; ?>
                                <div class="view-visitor">
                                  Dibaca <?php echo $p['hits']; ?> Kali
                                </div>
                                  <!--<img src="<?php echo $url_img . $p['post_image_thumb']; ?>" />-->
                              </li>
                            </a>
                            <?php } ?>
                          </ol>
                        </div>
                    <!--<ul>-->
                    <!--<ul>
                    
                    <?php foreach($popular as $p) { ?>
                      <?php
                        
                        $dc = content_time($p['post_date_created']);
                        $dp = id_time($p['post_date']);

                        $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $p['post_id'] . '/' . /*$p['category_id'] . '/' .*/ $p['slug'];
                        $url_img = $this->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $p['post_id'] . '/';

                        
                      ?>
                      
                      <li>
                        <a href="<?php echo $url; ?>">
                          <span class="popular-meta">
                            <span class="popular-list-title"><?php echo $p['post_title']; ?></span>
                            <span class="popular-count-viewers"><i class="glyphicon glyphicon-eye-open"></i>&nbsp;&nbsp;Dibaca <?php echo $p['hits']; ?> Kali</span>
                          </span>
                          
                            <img src="<?php echo $url_img . $p['post_image_thumb']; ?>" />
                          
                        </a>
                      </li>

                    <?php } ?>
                    </ul>-->
                      </div>
                    </section>
                    <br>
                    <!-- E: Sidebar Section: Popular -->
                    <!-- S: Socmed Widget -->
                    <section id="popular-news" class="col-md-12 col-sidebar">
                      <div class="headline-bu">&nbsp;&nbsp;Sosial Media<div class="headline-bu-content"></div></div>
                      <!--<div class="popular-title">
                        <h3>
                         Social Media
                        </h3>
                      </div>-->
                      <br><br>
                      <div class="popular-content">

          							<!-- Twitter Timeline Widget -->
          							<a class="twitter-timeline" data-width="400" data-height="1100" data-theme="light" href="https://twitter.com/AyoBogorCom">Tweets by AyoCirebon</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
          							<br>
          							<!-- Instagram Timeline Widget -->
          							<!-- SnapWidget -->
          							<script src="https://snapwidget.com/js/snapwidget.js"></script>
          							<iframe src="https://snapwidget.com/embed/423530" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>

                      </div>
                    </section>


    						
                  </div>
                </div>
              </aside>
