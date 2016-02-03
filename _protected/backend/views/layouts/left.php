<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>



        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                   /*  [
                        'label' => 'User Management',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
							['label' => 'All Users', 'icon' => 'fa fa-file-code-o', 'url' => ['/user'],],
                            ['label' => 'Add New User', 'icon' => 'fa fa-dashboard', 'url' => ['/user/create'],],
                        ],
                    ], */
				
                   [
                        'label' => 'Menu Management',
                        'icon' => 'fa fa-bars ',
                        'url' => '#',
                        'items' => [
                            ['label' => 'All Menus', 'icon' => 'fa fa-circle-o', 'url' => ['/parent-menu'],],
                            ['label' => 'Add New Menu', 'icon' => 'fa fa-plus', 'url' => ['/parent-menu/create'],],
						],	
					],
					 
                     [
                        'label' => 'Pages Management',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'All Pages', 'icon' => 'fa fa-circle-o', 'url' => ['/pages'],],
                            ['label' => 'Add New Page', 'icon' => 'fa fa-plus', 'url' => ['/pages/create'],],
                        ],
                    ],
					[
                        'label' => 'Blog Management',
                        'icon' => 'fa fa-files-o ',
                        'url' => '#',
                        'items' => [
							 ['label' => 'All Categories', 'icon' => 'fa fa-circle-o', 'url' => ['/post-categories'],],
                            ['label' => 'Add New Category', 'icon' => 'fa fa-plus', 'url' => ['/post-categories/create'],],
                            ['label' => 'All Posts', 'icon' => 'fa fa-circle-o', 'url' => ['/posts'],],
                            ['label' => 'Add New Post', 'icon' => 'fa fa-plus', 'url' => ['/posts/create'],],
						],	
					],
					[
                        'label' => 'Page Settings',
                        'icon' => 'fa fa-cogs ',
                        'url' => '#',
                        'items' => [
                            ['label' => 'HomePage Setting', 'icon' => 'fa fa-circle-o', 'url' => ['/homepage'],],
						],	
					],	
					[
                        'label' => 'Slider Management',
                        'icon' => 'fa fa-picture-o',
                        'url' => '#',
                        'items' => [
                            ['label' => 'All Slider', 'icon' => 'fa fa-file-image-o ', 'url' => ['/slider'],],
                            ['label' => 'Add New Slider', 'icon' => 'fa fa-plus', 'url' => ['/slider/create'],],
						],	
					],
						[   'label' => 'Global Settings',
                        'icon' => 'fa fa-cogs',
                        'url' => ['/global-setting/update?id=1'],
                        	
					], 
								
					
                ],
				
            ]
        ) ?>

    </section>

</aside>
