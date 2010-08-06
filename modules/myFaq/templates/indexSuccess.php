<?php
$groupNames = array_keys($groups->getRawValue())
?>
<script type="text/javascript">
$(function(){
    $('#faqGroups ul li a').click(function(){
        $('#faqItems > ul li.item').hide();
        $($(this).attr('href')).show();
        return false;
    });

    $('#faqItems dl a').click(function(){
        $('#'+$(this).attr('rel')).toggle(100);
    })

    <?php if (count($groupNames)): ?>
    $('#<?php echo $groupNames[0] ?>').show();
    <?php endif ?>
});
</script>

<div id="faqGroups" class="shadowBlock">
    <h3><?php echo __('FAQ') ?></h3>
    <ul>
    <?php foreach($groupNames as $groupName): ?>
        <li><a href="#<?php echo $groupName ?>"><?php echo __($groupName) ?></a></li>
    <?php endforeach ?>
    </ul>
</div>

<div id="faqItems">
    <h1><?php echo __('FAQ') ?></h1>
    <ul>
    <?php foreach($groups as $groupName => $items): ?>
        <li id="<?php echo $groupName ?>" class="item">
        <h2><?php echo __($groupName) ?></h2>
        <dl>
        <?php foreach($items as $item): ?>
            <dt><a rel="answer<?php echo $item->getId() ?>" href="#"><?php echo $item->getQuestion(ESC_RAW) ?></a></dt>
            <dd id="answer<?php echo $item->getId() ?>"><?php echo $item->getAnswer(ESC_RAW) ?></dd>
        <?php endforeach ?>
        </dl>
        </li>
    <?php endforeach ?>
    </ul>
</div>