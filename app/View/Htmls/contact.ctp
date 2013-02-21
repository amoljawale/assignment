<div class="page-header">
    <h1>Forms</h1>
</div>
<div class="row">
    <div class="span10 offset1">
        <?php
            echo $this->Form->create();
        ?>
        <div class="clearfix">
        <?php
            echo $this->Form->input('User.name', array('class' => 'input-medium search-query' ,'text' => 'The User Alias'));
            echo $this->Form->end('Search');
        ?>
        </div>
    </div>
</div>