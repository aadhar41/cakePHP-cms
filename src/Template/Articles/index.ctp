<!-- File: src/Template/Articles/index.ctp -->

<div class="container-fluid">

    <div class="row">

        <div class="col-lg-12">


            <h2 class="text-muted page-heading">Articles</h2>


            <p><?= $this->Html->link("Add Article", ['action' => 'add'], ['class' => 'btn btn-info']) ?></p>

            <table class="table table-bordered table-hover">
                <tr>
                    <th>Title</th>
                    <th>Created</th>
                    <th>Action</th>
                </tr>

            <!-- Here's where we iterate through our $articles query object, printing out article info -->



            <?php foreach ($articles as $article): ?>
                <tr>
                    <td>
                        <?= $this->Html->link($article->title, ['action' => 'view', $article->slug]) ?>
                    </td>        

                    <td>
                        <?= $article->created->format(DATE_RFC850) ?>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-5 col-xs-6">
                                <?= $this->Html->link('Edit', ['action' => 'edit', $article->slug], ['class' => 'edit-button btn btn-primary']) ?>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-5 col-xs-6">
                                <?= $this->Form->postLink(
                                    'Delete',
                                    ['action' => 'delete', $article->slug], ['class' => 'delete-button btn btn-danger', 'confirm' => 'Are you sure?'])
                                ?>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>

            </table>

        </div>

    </div>

</div>