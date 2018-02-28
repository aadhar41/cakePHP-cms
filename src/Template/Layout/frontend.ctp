<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->element('head') ?>
</head>
<body>
    <?= $this->element('header') ?>
    <!-- Page Content -->
    <br>
     <main role="main">

            <?= $this->Flash->render() ?>

        <div class="row">
            <?= $this->fetch('content') ?>
        </div>

     </main>
    <?= $this->element('footer') ?>
</body>
</html>