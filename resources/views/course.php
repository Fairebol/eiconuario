<div class="flex flex-col h-full w-full font-bold">
    <div class="flex justify-center text-center mx-auto">
        <h1 class=""> Curso <?= $course ?> </h1>
    </div>
    
    <div class="flex w-full h-full absolute z-10 text-white">
        <a href="<?= LOCALHOST ?>/course/<?= $page - 1?>" class="p-4 border-black absolute left-0 align-middle bg-emerald-500 rounded-lg hover:bg-emerald-600 transition-transform duration-150 transform active:scale-90"><i class="fas fa-step-backward"></i> Anterior    </a>
        <a href="<?= LOCALHOST ?>/course/<?= $page + 1?>" class="p-4 border-black absolute right-0 align-middle bg-emerald-500 rounded-lg hover:bg-emerald-600 transition-transform duration-150 transform active:scale-90">Siguiente <i class="fas fa-step-forward"></i></a>
    </div>
    <div class="flex flex-row justify-center items-center">
        <?php foreach($users as $u) { ?>
            <div class="m-2">
                <img src="<?=$u['pathimg']?>" alt="">
                <h6><?= $u['fullname']?></h6>
            </div>
        <?php } ?>
    </div>
</div>