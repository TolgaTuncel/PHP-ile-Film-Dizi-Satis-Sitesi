<section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?=base_url()?>assets/admin/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$this->session->
                    admin_session["adsoy"]?></div>
                    <div class="email"></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header"></li>
                    <li>
                        <a href="<?=base_url()?>admin/home">
                            <i class="material-icons">home</i>
                            <span>ANA SAYFA</span>
                        </a>
                    </li>
                    
                   
                    <li>
                        <a href="<?=base_url()?>admin/Kullanicilar" class="#">
                            
                            <i class="material-icons">accessibility</i>
                            <span>KULLANICILAR</span>
                        </a>
                   
                    </li>
                    <li>
                        <a href="<?=base_url()?>admin/Musteriler" class="#">
                            <i class="material-icons">account_circle</i>
                            <span>MUSTERILER</span>
                        </a>
                     
                    </li>
                    <li>
                        <a href="<?=base_url()?>admin/Kategoriler" class="#">
                            <i class="material-icons">list</i>
                            <span>KATEGORILER</span>
                        </a>
                      

                    </li>
                    <li>
                        <a href="<?=base_url()?>admin/Urunler" class="#">
                            <i class="material-icons">shopping_basket</i>
                            <span>URUNLER</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?=base_url()?>assets/pages/tables/normal-tables.html">Normal Tables</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>assets/pages/tables/jquery-datatable.html">Jquery Datatables</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>assets/pages/tables/editable-table.html">Editable Tables</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?=base_url()?>admin/Siparisler" class="#">
                            <i class="material-icons">shopping_cart</i>
                            <span>SIPARISLER</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?=base_url()?>assets/pages/medias/image-gallery.html">Image Gallery</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>assets/pages/medias/carousel.html">Carousel</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?=base_url()?>admin/mesajlar" class="#">
                            <i class="material-icons">question_answer</i>
                            <span>ILETISIM MESAJLARI</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?=base_url()?>assets/pages/charts/morris.html">Morris</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>assets/pages/charts/flot.html">Flot</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>assets/pages/charts/chartjs.html">ChartJS</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>assets/pages/charts/sparkline.html">Sparkline</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>assets/pages/charts/jquery-knob.html">Jquery Knob</a>
                            </li>
                        </ul>
                    </li>
                       
                     <li>
                        <a href="<?=base_url()?>admin/Sorucevaplar" class="#">
                            <i class="material-icons">visibility</i>
                            <span>S.S.S</span>
                        </a>
                      

                    </li>
                    <li>
                    <li class="active">
                        
                        
                    </li>
                    <li>
                        <a href="<?=base_url()?>admin/home/ayarlar" class="#">
                            <i class="material-icons">build</i>
                            <span>SAYFA AYARLARI</span>
                        </a>

                    </li>
                    
                    
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2017 - 2018 <a href="javascript:void(0);">Admin Panel</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 2.1.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>