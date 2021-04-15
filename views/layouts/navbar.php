<?php
use yii\helpers\Html;
?>
<nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Administrator</strong>
                             </span> <span class="text-muted text-xs block">Admin <b class="caret"></b></span> </span> </a>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>

                <li>
                    <?= Html::a('<i class="fa fa-bandcamp"></i></span> <span class="nav-label"> Jenis Destinasi', ['/jenis-destinasi/index']) ?>
                </li>

                <li>
                    <?= Html::a('<i class="fa fa-diamond"></i></span> <span class="nav-label"> Destinasi', ['/destinasi/index']) ?>
                </li>

                <li>
                    <?= Html::a('<i class="fa fa-magic"></i></span> <span class="nav-label"> Event', ['/event/index']) ?>
                </li>

                <li>
                    <?= Html::a('<i class="fa fa-newspaper-o"></i></span> <span class="nav-label"> Berita', ['/berita/index']) ?>   
                </li>

                <li>
                    <?= Html::a('<i class="fa fa-bitbucket-square"></i></span> <span class="nav-label"> Kuliner', ['/kuliner/index']) ?>   
                </li>

                <li>
                    <?= Html::a('<i class="fa fa-photo"></i></span> <span class="nav-label"> Gallery', ['/gallery/index']) ?>
                </li>
            </ul>
        </div>
    </nav>