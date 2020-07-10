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
            </form>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-2">
        <div>
            <?php echo form_open('teacher/classes'); ?>
            <button type="submit" class="btn btn-sm background">🚸 Classes</button>
            </form>
        </div>
        <div class="mt-3">
            <?php echo form_open('login/session_unset'); ?>
            <button type="submit" class="btn btn-sm background">📆 Lessons schedule</button>
            </form>
        </div>
    </div>
    <div class="col-md-4">
        <table class="table background rounded">
            <thead>
                <tr>
                    <th class="lead" scope="col"> <?php echo $title; ?></th>
                    <!--<th scope="col">First</th>-->
                    <!--<th scope="col">Last</th>-->
                    <!--<th scope="col">Handle</th>-->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($classes as $class_item): ?>
                    <tr>
                        <th class="lead" scope="row"><?php echo $class_item['name']; ?></th>
                        <td><?php
                            echo form_open('teacher/pupils');
                            echo form_hidden('class', $class_item['name']);
                            ?>
                            <button type="submit" class="btn btn-sm background">🚸 Pupils</button>
                            </form>
                        </td>
                        <td><?php echo form_open('teacher/pupils'); ?>
                            <button type="submit" class="btn btn-sm background">📘 Class Diary</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>