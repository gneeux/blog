<?php
/**
 * 移植Hexo主题Next.Mist
 *
 * @package Next.Mist
 * @author zgq354
 * @version 1.2.6
 * @link http://blog.izgq.net/archives/444/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<main id="main" class="main">
    <div class="main-inner">
        <div id="content" class="content">
            <section id="posts" class="posts-expand">
                <?php while($this->next()): ?>
                    <article class="post-type-normal " itemscope itemtype="http://schema.org/Article">
                        <header class="post-header">
                            <div class="post-meta" style="font-size:14px;margin-bottom:7px">
                                <span class="post-time">
                                  [<time itemprop="dateCreated" datetime="<?php $this->date('c'); ?>" content="<?php $this->date('yy-m-d'); ?>">
                                    <?php $this->date('Y.m.d'); ?>
                                  </time>]- <a href="<?php $this->permalink() ?>" itemprop="url">
                                        <?php $this->title() ?>
                                      </a>
                                </span>
                            </div>
                        </header>
                    </article>
                <?php endwhile; ?>
            </section>
            <?php $this->pageNav('&laquo; ', ' &raquo;',5,'...',array('wrapTag' => 'nav','wrapClass' =>'pagination','itemTag'=>'','prevClass'  =>  'extend prev', 'nextClass'     =>  'extend next', 'currentClass'     =>  'page-number current')); ?>
        </div>
    </div>

    <?php $this->need('sidebar.php'); ?>
</main>

<?php $this->need('footer.php'); ?>
