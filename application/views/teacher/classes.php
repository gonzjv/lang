<div class="row">
    <div class="col-md-3">
        <div class="mt-3 text-center lead background rounded">
            <?php echo $this->session->role . ' ' . $this->session->name . ', you are here!' ?>
        </div>
    </div>
    <div class="col-md-2">
        <div class="mt-3">
            <?php echo form_open('login/session_unset'); ?>
            <button type="submit" class="btn btn-warning btn-sm">Quit🌄</button>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="mx-5 text-center lead background rounded">
            <?php echo $title; ?>
        </div>
    </div>
</div>
<?php foreach ($classes as $class_item): ?>
    <div class="row mt-3">
        <div class="col-md-3">
            <div class="mx-5 text-center lead background rounded">
                <?php echo $class_item['name']; ?>
            </div>
        </div>
        <div class="col-md-3">
            <?php echo form_open('teacher/classes'); ?>
            <button type="submit" class="btn btn-sm background">Pupils</button>
        </div>
    </div>
    </form>
<?php endforeach; ?>
</div>
</div>