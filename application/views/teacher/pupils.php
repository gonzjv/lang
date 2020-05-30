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
    <div class="col-md-2">
        <div class="mx-1 text-center lead background rounded">
            <?php echo $title; ?>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-5">
        <table class="table background rounded">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Surname</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pupils as $pupils_item): ?>
                    <tr>
                        <th scope="row"><?php echo $pupils_item['id']; ?></th>
                        <td><?php echo $pupils_item['name']; ?>
                        </td>
                        <td><?php echo $pupils_item['surname']; ?>
                        </td>
                        <td><?php echo form_open('pupil'); ?>
                            <button type="submit" class="btn background">Info</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </form>
    </div>
</div>
</div>
</div>