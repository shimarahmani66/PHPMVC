<?php $this->include('Panel.Layouts.Header')?>
<form action="<?php $this->url('Article/update/'.$article['id'])?>" method="POST">
                    <section class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="title ..." value="<?php echo $article['title']?>">
                    </section>
                    <section class="form-group">
                        <label for="cat_id">Category</label>
                        <select class="form-control" name="cat_id" id="cat_id">
                        <?php foreach($categories as $category){?>
                            <option value="<?php echo $category['id']?>" <?php if($article['cat_id']==$category['id']) echo 'selected';?>><?php echo $category['name']?></option>
                            
                        <?php }?>
                        </select>
                    </section>
                    <section class="form-group">
                        <label for="body">Body</label>
                        <textarea class="form-control" name="body" id="body" rows="5" placeholder="body ..."><?php echo $article['body']?></textarea>
                    </section>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
                <?php $this->include('Panel.Layouts.Footer')?>

           