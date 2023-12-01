<div class="flex flex-col h-full w-full font-bold text-white">
    <div class="-z-10 h-[150%] w-full absolute">
        <img src="<?= $background ?>">
        <img src="<?= $background ?>">
    </div>

    <div class="flex text-center justify-center">
        <h1 class="text-4xl m-2"> Curso <?= $course ?> </h1>
        <div class="flex justify-end absolute right-32">
            <img src="../../public/img/TicketCourse.png"  width="130" class="flex justify-end">
        </div>
    </div>
    
    <div class="flex w-full h-full absolute z-10 text-white">
        <a href="<?= LOCALHOST ?>/course/<?= $page - 1?>" class="p-4 border-black absolute left-0 align-middle bg-emerald-500 rounded-lg hover:bg-emerald-600 transition-transform duration-150 transform active:scale-90"><i class="fas fa-step-backward"></i> Anterior    </a>
        <a href="<?= LOCALHOST ?>/course/<?= $page + 1?>" class="p-4 border-black absolute right-0 align-middle bg-emerald-500 rounded-lg hover:bg-emerald-600 transition-transform duration-150 transform active:scale-90">Siguiente <i class="fas fa-step-forward"></i></a>
    </div>

    <div class="flex h-[50vh] w-full justify-center items-end align-middle">
        <?php $count = 0; 
            foreach($users as $u) {  ?>
        <div class="m-2 flex justify-center p-2 relative">
            <img src="<?=LOCALHOST?>/img/<?=$u['pathimg']?>" class="w-1/2 border-8 border-b-[25px] border-white" alt="">
            <h6 class="flex font-bold text-lg absolute bottom-1 aling-bottom items-end text-black"><?= ucfirst($u['fullname'])?></h6>
        </div>
        <?php $count++; 
        if ($count >= 3) break;
        } ?>
    </div>
    <div class="flex h-screen w-full justify-center items-start align-top">
        <?php $count = 0; 
            foreach($users as $u) {  if ($count++ < 3) continue;?>
        <div class="m-2 flex justify-center p-2 relative">
            <img src="../../public/img/<?=$u['pathimg']?>" class="w-1/2 border-8 border-b-[25px] border-white" alt="">
            <h6 class="flex font-bold text-lg absolute bottom-1 aling-bottom items-end text-black"><?= ucfirst($u['fullname'])?></h6>
        </div>
        <?php
        } ?>
    </div>
</div>