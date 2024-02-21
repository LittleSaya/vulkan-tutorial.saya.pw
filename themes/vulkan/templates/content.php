<?php $this->layout('theme::layout/05_page') ?>
<article>
    <?php if ($params['html']['date_modified']) { ?>
        <div class="page-header sub-header clearfix">
            <h1><?= $page['title'] ?></h1>
            <span style="float: left; font-size: 10px; color: gray;">
                <?= date("l, F j, Y", $page['modified_time']); ?>
            </span>
        </div>
    <?php } else { ?>
        <div class="page-header">
            <h1><?= $page['title'] ?></h1>
        </div>
    <?php } ?>

    <?= $page['content']; ?>

    <?php if(!empty($page['prev']) || !empty($page['next'])) { ?>
    <nav>
        <ul class="pager">
            <?php if(!empty($page['prev'])) { ?><li><a href="<?= $base_url . $page['prev']->getUrl() ?>">Previous</a></li><?php } ?>
            <?php if(!empty($page['next'])) { ?><li><a href="<?= $base_url . $page['next']->getUrl() ?>">Next</a></li><?php } ?>
        </ul>
    </nav>
    <?php } ?>

    <?php if ($page['title'] != 'Privacy policy' && $page['title'] != 'Politique de confidentialité') { ?>
    <div id="waldo-tag-4314"></div>
    
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
    <?php } ?>
</article>

