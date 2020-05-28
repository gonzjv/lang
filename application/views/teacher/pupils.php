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
<!--                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>-->
            </thead>
            <tbody>
                <?php foreach ($pupils as $pupils_item): ?>
                    <tr>
                        <th scope="row"><?php echo $pupils_item['name']; echo $pupils_item['surname']; ?></th>
                        <td><?php
//                            echo form_open('teacher/pupils');
//                            echo form_hidden('class', $class_item['name']);
                            ?>
                            <button type="submit" class="btn btn-sm background">🚸 Pupils</button>
                            </form>
                        </td>
                        <td><?php echo form_open('login/session_unset'); ?>
                            <button type="submit" class="btn btn-sm background">📘 Class Diary</button>
                            </form>
                        </td>
                        <td>@mdo</td>
                    </tr>
<?php endforeach; ?>
            </tbody>
        </table>
        </form>
    </div>
</div>
</div>
</div>