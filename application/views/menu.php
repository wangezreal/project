<?php
if(isset($_SESSION['userID'])):?>
    <div>
    <ul>
        <li>
            <div><a href="<?php echo base_url('log/index/'.$_SESSION['userID'])?>"><span>日志</span></a></div>
        </li>
        <li>
            <div><a href="<?php echo base_url('type/index/'.$_SESSION['userID'])?>"><span>编辑样式</span></a></div>
        </li>
    </ul>
</div>
<?php endif;?>