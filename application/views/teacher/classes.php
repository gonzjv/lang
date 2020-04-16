<div class="row">
    <div class="col-md-3">
        <div class="mt-3 text-center lead background rounded">
            <?php echo $this->session->role . ' ' . $this->session->name . ', you are here!' . $this->session->surname?>
            
        </div>
        <div class="mt-3 mx-5 text-center lead background rounded">
            <?php echo $title; ?>
            <div>
                <?php foreach ($classes as $class_item): ?>
                    <div>
                        <?php echo $class_item['name']; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="mt-3">
            <?php echo form_open('login/session_unset'); ?>
            <button type="submit" class="btn btn-warning btn-sm">Quit🌄</button>
        </div>
    </div>
</div>