<?php $this->include('Panel.Layouts.Header')?>
                <form action="<?php $this->url('Category/update/'.$category['id']);?>" method="POST">
                    <section class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="name ..." value="<?php echo $category['name'];?>">
                    </section>
                    <section class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control"  name="description" id="description" placeholder="description ..." value="<?php echo $category['description'];?>">
                    </section>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
                <?php $this->include('Panel.Layouts.Footer')?>

            