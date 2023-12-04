<div class="flex flex-col h-full w-full font-bold text-white background select-none">
    <div class="-z-10 h-full w-full absolute">
        <style>
            .background {
                background-image: url(<?= $background ?>);
                background-repeat: repeat;
            }
        </style>
    </div>

    <nav class="w-full h-[10vh] z-20 fixed flex bg-gray-400 justify-center">
        <h1 class="text-4xl m-2 tracking-widest"> Curso <?= $course ?> </h1>
        <div class="flex text-center justify-center z-10">
            <div class="flex justify-end absolute right-0 md:right-28">
                <img src="<?= $ticket ?>"  width="130" class="flex justify-end">
                <img src="<?= $logo ?>" width="75px" style="margin: 1.7rem" class="absolute flex place-content-center">
            </div>
        </div>
    </nav>

    <div class="w-full h-[80vh] md:h-screen flex place-content-center place-items-center items-center relative">
        <img src="<?=$groupImage?>" class="w-4/5 lg:w-3/5 border-4 border-b-[25px] border-white" alt="">
        <img class="absolute bottom-2 right-2 w-[10%]" src="<?=LOCALHOST?>/img/arrow-turn-down-solid.svg" alt="">
    </div>

    <div class="flex w-full h-[10vh] absolute z-20 text-white">
        <?php if ($previous != 0) { ?>
            <a href="<?= LOCALHOST ?>/course/<?= $previous ?>" class="ml-2 mb-2 lg:mt-2 lg:ml-2 p-6 lg:p-4 border-black fixed bottom-0 lg:bottom-auto lg:top-0 left-0 align-middle bg-emerald-500 rounded-lg hover:bg-emerald-600 transition-transform duration-150 transform active:scale-90"><i class="fas fa-step-backward"></i> Anterior    </a>
        <?php } ?>
        <?php if ($next != 0) { ?>
            <a href="<?= LOCALHOST ?>/course/<?= $next ?>" class="mr-2 mb-2 lg:mt-2 lg:mr-2 p-6 lg:p-4 border-black fixed bottom-0 lg:bottom-auto lg:top-0 right-0 align-middle bg-emerald-500 rounded-lg hover:bg-emerald-600 transition-transform duration-150 transform active:scale-90">Siguiente <i class="fas fa-step-forward"></i></a>
        <?php } ?>
    </div>

    <div class="flex h-[30vh] md:h-[40vh] lg:h-[45vh] w-full justify-center items-end align-middle">
        <?php $count = 0; 
            foreach($outstanding as $u) { if ($u['role_id'] == 2) continue; ?>
        <div class="flex justify-center relative transform hover:scale-110 z-10 w-1/3 md:w-1/6 mx-4">
            <img src="<?=LOCALHOST?>/img/<?=$u['pathimg']?>" class="border-8 border-b-[25px] border-white m-2" alt="">
            <h6 class="flex font-bold text-xs md:text-md lg:text-lg absolute bottom-2 aling-bottom items-end text-center text-black z-10"><?= ucfirst($u['fullname'])?></h6>
            <?php switch($u['role_id']) { 
                case 1:
                ?>
                <img src="<?= LOCALHOST?>/img/emblems/teacher.png" class="absolute -right-8 bottom-4 w-1/2 lg:w-1/3">
            <?php break;
                case 3:?>
                <img src="<?= LOCALHOST?>/img/emblems/standard_guard.png" class="absolute -right-8 bottom-4 w-1/2 lg:w-1/3">
            <?php break;
                case 4:?>
                <img src="<?= LOCALHOST?>/img/emblems/standard_bearer.png" class="absolute -right-8 bottom-4 w-1/2 lg:w-1/3">
                <?php break; }?>
        </div>
        <?php
        } ?>
    </div>
    <div class="grid h-full w-full justify-center items-center align-top grid-cols-3 md:grid-cols-4 lg:grid-cols-5 my-8 space-y-2 md:space-y-4">
        <?php
            foreach($users as $u) { ?>
        <div class="justify-center relative transform hover:scale-110 z-10 flex place-items-center place-content-center">
            <?php if ($u['role_id'] == 2) { ?>
            <img src="<?= LOCALHOST ?>/img/<?=$u['pathimg']?>" class="w-1/2 border-8 border-b-[25px] border-yellow-300" alt="">
            <?php } else {?>
            <img src="<?= LOCALHOST ?>/img/<?=$u['pathimg']?>" class="w-1/2 border-8 border-b-[25px] border-white" alt="">
            <?php }?>
            <h6 class="flex font-bold text-xs lg:text-xs absolute bottom-0.5 aling-bottom items-end text-center text-black z-10"><?= ucfirst($u['fullname'])?></h6>
        </div>
        <?php
        } ?>
    </div>

    <section class="w-full h-[10vh]"></section>
</div>