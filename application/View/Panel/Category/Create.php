<?php $this->include('Panel.Layouts.Header')?>
                <form action="<?php $this->url('Category/store/')?>" method="POST">
                    <section class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="name ...">
                    </section>
                    <section class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="description ...">
                    </section>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
                <?php $this->include('Panel.Layouts.Footer')?>
