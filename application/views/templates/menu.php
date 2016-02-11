<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                
                <?php foreach($menu_ as $item){ ?>
                <li class="sub-menu">
                  <a href="<?php if($item -> PATH_ == 'x') { echo "javascript:;"; } else { echo site_url($item -> PATH_); } ?>" class="">
                      <i class="<?php echo $item -> PRE_ICON ;?>"></i>
                      <span><?php echo $item -> MENU; ?></span>
                      <?php if($item -> PATH_ == 'x') { ?><span class="menu-arrow arrow_carrot-right"></span><?php } ?>
                  </a>
                  <ul class="sub">
                      <?php foreach($submenu_ as $subitem) { ?>
                        <?php if($subitem -> ID_ == $item -> ID_) { ?>
                          <li><a class="" href="<?PHP echo site_url($subitem -> PATH_);?>"><i class="<?php echo $subitem -> PRE_ICON; ?>"></i><?php echo $subitem -> SUBMENU; ?></a></li>                          
                        <?php } ?>
                      <?php } ?>
                  </ul>
                </li>
                <?php } ?>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>