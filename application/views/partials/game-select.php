<div class="game-week-select-div">
    <label>Bet Day</label>
    <i class="fa fa-chevron-left bet-week-prev"></i>
    <select class="select2 game-week-select" name="game-week-select" onchange="initPage()">
        <?php for($i=1; $i<=60; $i++) {?>
        <option <?php if($i == $betweek) echo "selected";?> value="<?php echo $i?>"><?php echo $i?></option>
        <?php }?>
    </select>
    <i class="fa fa-chevron-right bet-week-next"></i>
</div>