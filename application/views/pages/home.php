<?php if (isset($this->session->email)): ?>
    <div class="row">
        <div class="col-md-3">
            <div class="mt-3 text-center lead background rounded">
                <?php echo $this->session->role . ' ' . $this->session->name . ', you are here!' ?>
            </div>
            <?php if ($this->session->role == 'teacher'): ?>
                <div class="mt-3">
                    <?php echo form_open('teacher/classes'); ?>
                    <button type="submit" class="btn btn-sm background">🚸 Classes</button>
                    </form>
                </div>
                <div class="mt-3">
                    <?php echo form_open('login/session_unset'); ?>
                    <button type="submit" class="btn btn-sm background">📘 Class Diary</button>
                    </form>
                </div>
                <div class="mt-3">
                    <?php echo form_open('login/session_unset'); ?>
                    <button type="submit" class="btn btn-sm background">📆 Lessons schedule</button>
                    </form>
                </div>
            <?php endif; ?>
            <?php if ($this->session->role == 'pupil'): ?>
                <div class="mt-3">
                    <?php echo form_open('login/session_unset'); ?>
                    <button type="submit" class="btn btn-sm background">📘 Homework</button>
                    </form>
                </div>
                <div class="mt-3">
                    <?php echo form_open('login/session_unset'); ?>
                    <button type="submit" class="btn btn-sm background">📆 Lessons schedule</button>
                    </form>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-md-2">
            <div class="mt-3">
                <?php echo form_open('login/session_unset'); ?>
                <button type="submit" class="btn btn-warning btn-sm">Quit🌄</button>
            </div>
        </div>
    </div>
    </form>
<?php else: ?>

    <?php echo form_open('login'); ?>
    <div class="row mt-md-5 animated fadeInDown ">
        <div class="col-md-3">
            <?php
            echo form_label('', 'email');
            $data = array(
                'name' => 'email',
                'class' => 'form-control background',
                'placeholder' => 'Email'
            );
            echo form_input($data);
            ?>
        </div>
    </div>
    <div class="row animated fadeInDown ">
        <div class="col-md-3">
            <?php
            echo form_label('', 'password');
            $data = array(
                'name' => 'password',
                'class' => 'form-control background',
                'placeholder' => 'Password'
            );
            echo form_input($data);
            ?>
        </div>
    </div>
    <div class="row text-warning">
        <div class="col-md-4">
            <?php echo validation_errors(); ?>
        </div>
    </div>
    <div class="row animated fadeInDown ">
        <div class="col-md-4">
            <div class="ml-2 mt-4">
                <!--<input type="hidden" name="action" value="reg">-->
                <button type="submit" class="btn btn-outline-warning">Start your journey ✈️</button>
                <?php echo anchor('sign_up', 'or Sign Up', 'class=""'); ?>
            </div>
        </div>
        <div class="col-md-3 mt-4">
        </div>
    </div>
    </form>
<?php endif; ?>