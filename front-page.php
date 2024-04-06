<?php get_header();  ?>
   
    <main class="main">
        <!--  /---------------- BANNER --------------/ -->
        <?php $banner = get_field('banner'); ?>
        <section class="section section-banner">
            <div class="container">
                <div class="wrapper">
                    <div class="inner">
                        <div class="banner-left">
                            <div class="banner-left__info">
                                <h1>
                                    <?php echo $banner['main_title']  ?>
                                </h1>
                                <p><?php echo $banner['sub_title'] ?></p>
                            </div>
                            <div class="banner-left__footer">
                                <div class="banner-left-top">
                                    <div class="banner-left__footer__title">
                                        <span class="label-btn__banner"><?php echo $banner['small_title'] ?></span><br />
                                    </div>
                                </div>
                                <div class="banner-left-bottom">
                                    <div class="banner-left__btn">
                                        <button type="submit">
                                            <?php echo $banner['link_text'] ?>
                                        </button>
                                        <div class="banner-left__btn_icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_left.png" alt="" srcset="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="banner-right">
                            <div class="banner-right__img">
                                <img src="<?php echo $banner['image']; ?>" alt="" srcset="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--  /---------------- SHIPPAI --------------/ -->
        <?php $shippaiItem = get_field('shippai');?>
        <section class="section section-shippai">
            <div class="container">
                <div class="wrapper">
                    <div class="inner">
                        <div class="body-shippai__title">
                            <h2><?php echo $shippaiItem['main_title'] ?></h2>
                        </div>
                        <div class="shippai-grid-card">
                            <div class="grid-container">
                                <?php 
                                    $gridItems = $shippaiItem['grid_card'];
                                    foreach($gridItems as $item):
                                ?>
                                <div class="grid-item">
                                    <div class="grid-img">
                                        <img src="<?php echo $item['image']; ?>" alt="" srcset="">
                                    </div>
                                    <div class="grid-content">
                                        <h4>
                                          <?php echo $item['main_content']; ?>
                                        </h4>
                                    </div>
                                </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                        <div class="img-arrow-down">
                            <img src="<?php echo $shippaiItem['image_arrow_down']; ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ------------------ ONEPLAT_NARA --------------------- -->
        <?php $oneplatNaraItems = get_field('oneplat_nara');?>
        <section class="section section-oneplat_nara">
            <div class="container">
                <div class="wrapper">
                    <div class="inner">
                        <div class="oneplat_nara__title">
                            <h2><?php echo @$oneplatNaraItems['main_title']; ?></h2>
                        </div>
                        <div class="oneplat_nara__img">
                            <img src="<?php echo @$oneplatNaraItems['image_logo']; ?>" alt="">
                            <h2><?php echo @$oneplatNaraItems['logo_text']; ?></h2>
                        </div>
                        <div class="oneplat_nara-box">
                            <div class="oneplat_nara-box__title">
                                <h2><?php echo @$oneplatNaraItems['sub_title'];  ?></h2>
                                <div class="line"></div>
                            </div>
                            <div class="oneplat_nara-box__card">
                                <div class="grid-container">
                                    <?php
                                        $cardItems = @$oneplatNaraItems['grid_card'] ?? [];
                                        foreach($cardItems as $item):
                                    ?>
                                    <div class="grid-item">
                                        <div class="grid-img">
                                            <img src="<?php echo @$item['image'] ?>" alt="" srcset="">
                                        </div>
                                        <div class="grid-title">
                                            <h4><?php echo @$item['main_content'] ?></h4>
                                        </div>
                                        <div class="grid-content">
                                            <p>
                                                <?php echo @$item['sub_content'] ?>
                                            </p>
                                        </div>
                                    </div>
                                    <?php endforeach ?>
                                    <!-- <div class="grid-item">
                                        <div class="grid-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/Layer_2.png" alt="" srcset="">
                                        </div>
                                        <div class="grid-title">
                                            <h4>事業会社の目線と 開発会社の目線</h4>
                                        </div>
                                        <div class="grid-content">
                                            <p>
                                                両者の視点を融合させることで、より効果的なサービス開発が実現が可能です。事業会社のニーズや要求を理解し、開発会社の専門知識や技術を活かすことで、顧客満足度が向上し、双方の利益が最大化します。
                                            </p>
                                        </div>
                                    </div>
                                    <div class="grid-item">
                                        <div class="grid-img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/Layer_3.png" alt="" srcset="">
                                        </div>
                                        <div class="grid-title">
                                            <h4>開発スピードと精度のマネジメント</h4>
                                        </div>
                                        <div class="grid-content">
                                            <p>
                                                適切なスケジュール管理と品質管理により、プロジェクトは効率的に進行し、納期を守りながらもバグやエラーを最小限に抑えます。これにより、顧客満足度が向上し、競争力が強化されます。

                                            </p>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ------------------ DIAGRAM - desktop ----------------------->
        <?php $diagramItems = get_field('diagram');?>
        <section class="section section-diagram">
            <div class="container">
                <div class="wrapper">
                    <div class="inner">
                        <div class="body-diagram__title">
                            <h2><?php echo $diagramItems['main_title'] ?></h2>
                        </div>
                        <div class="line"></div>
                        <div class="body-diagram__content">
                            <img src="<?php echo $diagramItems['image'] ?>" alt="" srcset="" id="img-diagram">

                            <?php
                                $dataDiagram = ["content-ai", "content-language", "content-database",
                                                 "content-cloud", "content-devops", "content-media", 
                                                 "content-big_data"];
                                $listDiagrams = $diagramItems['list_items'];
                                foreach($listDiagrams as $key => $item){
                                    echo '<div class="body-diagram__item" id="'.@$dataDiagram[$key].'">
                                            <h4>'.@$item['title'].'</h4>
                                            <ul>';
                                            foreach(@$item['items'] ?? [] as $value){
                                                echo '<li>- '.@$value['item'].'</li>';
                                            }
                                      echo  '</ul></div>';
                                }
                                
                            ?>
                            <!-- <div class="body-diagram__item" id="content-ai">
                                <h4>AI & 機械学習</h4>
                                <ul>
                                    <li>- TensorFlow, PyTorch</li>
                                    <li>- Probability and Statistics</li>
                                    <li>- Data Modeling and Evaluation</li>
                                </ul>
                            </div>

                            <div class="body-diagram__item" id="content-language">
                                <h4>プログラミング言語</h4>
                                <ul>
                                    <li>- Java: Spring MVC, Hibernate,</li>
                                    <li>- .NET: .NET Core, MVC.NET</li>
                                    <li>- PHP: Laravel, CakePHP, Symfony, CodeIgniter</li>
                                    <li>- Ruby: Ruby On Rails</li>
                                    <li>- Microservices: Spring Boot</li>
                                    <li>- Javascript: Loopback, Express,ReactJS,<br/>Vue.js,AngularJS</li>
                                    <li>- Mobile: iOS, Android, React Native, Flutter</li>
                                </ul>
                            </div>

                            <div class="body-diagram__item" id="content-database">
                                <h4>データベース</h4>
                                <ul>
                                    <li>- MySQL, PostgreSQL, Oracle, MS SQL</li>
                                    <li>- MongoDB</li>
                                    <li>- Neo4J, ElasticSearch, Cassandra</li>
                                    <li>- Redis, Memcache</li>
                                </ul>
                            </div>

                            <div class="body-diagram__item" id="content-big_data">
                                <h4>ビッグデータ</h4>
                                <ul>
                                    <li>- Hadoop</li>
                                    <li>- Apache Spark, Apache Storm</li>
                                    <li>- Data Visualization</li>
                                </ul>
                            </div>

                            <div class="body-diagram__item" id="content-media">
                                <h4>メディアサービス</h4>
                                <ul>
                                    <li>- Vimeo Live Stream</li>
                                    <li>- AWS MediaLive, MediaPackage,<br /> MediaConverter, MediaStore</li>
                                </ul>
                            </div>

                            <div class="body-diagram__item" id="content-cloud">
                                <h4>クラウドソリューション</h4>
                                <ul>
                                    <li>- Amazon Web Services</li>
                                    <li>- Windows Azure</li>
                                    <li>- Heroku, OpenShift</li>
                                    <li>- Google App Engine</li>
                                </ul>
                            </div>

                            <div class="body-diagram__item" id="content-devops">
                                <h4>DevOps</h4>
                                <ul>
                                    <li>- Jenkins, Chef</li>
                                    <li>- Ansible, Docker, Kubernetes</li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ------------------ DIAGRAM - mobile, tablet ----------------------->
        <section class="section section-diagram__mobile">
            <div class="container">
                <div class="wrapper">
                    <div class="inner">
                        <div class="diagram__title">
                            <h2>あらゆるシステム開発に対応する<br />
                                ハイブリッドSES</h2>
                        </div>
                        <div class="line"></div>

                        <div class="diagram-container__step">

                            <div class="line-up"></div>

                            <div class="diagram__step">
                                <div class="diagram__step_icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/computer.svg" alt="">
                                </div>
                                <div class="diagram__step_content">
                                    <h4>AI & 機械学習</h4>
                                    <ul>
                                        <li>- TensorFlow, PyTorch</li>
                                        <li>- Probability and Statistics</li>
                                        <li>- Data Modeling and Evaluation</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="diagram__step">
                                <div class="diagram__step_icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/db.svg" alt="">
                                </div>
                                <div class="diagram__step_content">
                                    <h4>データベース</h4>
                                    <ul>
                                        <li>- MySQL, PostgreSQL, Oracle, MS SQL</li>
                                        <li>- MongoDB</li>
                                        <li>- Neo4J, ElasticSearch, Cassandra</li>
                                        <li>- Redis, Memcache</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="diagram__step">
                                <div class="diagram__step_icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/cloud.svg" alt="">
                                </div>
                                <div class="diagram__step_content">
                                    <h4>クラウドソリューション</h4>
                                    <ul>
                                        <li>- Amazon Web Services</li>
                                        <li>- Windows Azure</li>
                                        <li>- Heroku, OpenShift</li>
                                        <li>- Google App Engine</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="diagram__step">
                                <div class="diagram__step_icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/devops.svg" alt="">
                                </div>
                                <div class="diagram__step_content">
                                    <h4>DevOps</h4>
                                    <ul>
                                        <li>- Jenkins, Chef</li>
                                        <li>- Ansible, Docker, Kubernetes</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ------------------ TAIOU ----------------------->
        <?php $taiouItems = get_field('taiou');?>
        <section class="section section-taiou">
            <div class="container">
                <div class="wrapper">
                    <div class="inner">
                        <div class="body-taiou__title">
                            <h2>
                                <?php echo $taiouItems['main_title'];  ?>
                            </h2>
                        </div>
                        <div class="line"></div>
                        <div class="body-taiou__box">
                            <?php
                                $taiouList = $taiouItems['list_items'];
                                foreach($taiouList as $item):
                            ?>
                            <div class="body-taiou__img">
                                <img src="<?php echo $item['image'] ?>" alt="">
                                <p><?php echo $item['content']  ?></p>
                            </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ------------------ FLOW ----------------------->
        <?php $flowItems = get_field('flow');?>
        <section class="section section-flow">
            <div class="container">
                <div class="wrapper">
                    <div class="inner">
                        <div class="body-flow__title">
                            <h2><?php echo $flowItems['main_title']; ?></h2>
                        </div>
                        <div class="line"></div>
                        <div class="body-flow__sub_title">
                            <h4><?php echo $flowItems['sub_title']; ?></h4>
                        </div>

                        <div class="body-flow-container__step">

                            <div class="line-up"></div>

                            <?php
                                $stepFlow = $flowItems['step_flow'];
                                $steps = ['one', 'two', 'three', 'four'];
                                foreach($stepFlow as $key => $item){
                                    echo '  <div class="body-flow__step" id="step-'.@$steps[$key].'">
                                                <div class="flow__step_icon">
                                                    <img src="'.@$item['image'].'" alt="">
                                                </div>
                                                <div class="flow__step_content" >
                                                    <div class="step-title">
                                                        <h4>'.@$item['step_text'].'</h4>
                                                    </div>
                                                    <div class="step-sub-title">
                                                        <h3>'.@$item['title'].'</h3>
                                                    </div>
                                                    <div class="step-content">
                                                        <p>'.@$item['content'].'</p>
                                                    </div>
                                                </div>
                                            </div>';
                                }
                            ?>
                        </div>

                        <div class="body-flow-container__support">
                            <div class="flow-support">
                                <?php
                                    $flowSupport = $flowItems['flow_support'];
                                    foreach($flowSupport as $item){
                                        if(trim(@$item['center_content']) !== "")
                                        {
                                            echo '  <div class="flow-support-btn">
                                                        <button class="btn__center" type="submit">'.$item['center_content'].'</button>
                                                    </div>';
                                        }
                                        else 
                                        {
                                            echo '  <div class="flow-support-btn">
                                                        <div class="support-btn-left">';
                                                        
                                            echo         (trim($item['left_content']) == "") ? '' :  
                                                        '<button class="btn__left" type="submit">'.$item['left_content'].'</button>';

                                            echo        '</div>
                                                        <div class="support-btn-right">';

                                            echo          (trim($item['right_content']) == "") ? '' 
                                                            : '<button class="btn__right" type="submit">'.$item['right_content'].'</button>';
                                            
                                            echo         '</div>
                                                    </div>';
                                        }
                                    }
                                ?>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ------------------ FAQ ----------------------->
        <?php $faqItems = get_field('faq');?>
        <section class="section section-faq">
            <div class="container">
                <div class="wrapper">
                    <div class="inner">
                        <div class="body-faq__title">
                            <h2><?php echo $faqItems['main_title']; ?></h2>
                        </div>
                        <div class="line"></div>
                        <div class="body-faq__list">
                            <?php 
                                $listFaq = $faqItems['list_items'];
                                foreach($listFaq as $item):
                            ?>
                            <div class="faq-list-item">
                                <div class="faq-list-item__title">
                                    <h3>Q.</h3>
                                </div>
                                <div class="faq-list-item__content">
                                    <p><?php echo @$item['content']; ?></p>
                                </div>
                                <div class="faq-btn-add">
                                    <button type="submit">
                                        <span class="icon-add"></span>
                                    </button>
                                </div>
                            </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ------------------ contact ----------------------->
        <section class="section section-contact">
            <div class="container">
                <div class="wrapper">
                    <div class="inner">
                        <div class="contact-title">
                            <h2>
                                サービスに関するお問い合わせ
                            </h2>
                        </div>
                        <div class="line"></div>
                        <div class="contact-footer">
                            <div class="contact-footer__content">
                                <span class="label-btn">まずはお気軽にご相談ください！</span>
                            </div>
                            <div class="contact-footer__btn">
                                <button type="submit">無料オンライン相談</button>
                                <!-- <div class="contact-btn-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_left.png" alt="" srcset="">
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer();  ?>
