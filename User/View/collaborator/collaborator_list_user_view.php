<<<<<<< HEAD
<?php include '../../Controller/sliderController.php' ?>
<?php include '../../Controller/common/colorsController.php' ?>
<?php include '../../Controller/collaboratorListController.php'?>
=======
>>>>>>> cb21674bc937154fbe4f4f2cf5cfda26dcd4b64f
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Collaborator Profile</title>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap"
        rel="stylesheet" />

        <style>
        .collaborator{
            color:rgb(20, 184, 166 ) !important;
        }
<<<<<<< HEAD

    
        .typing {


border-right: 2px solid gray;
overflow: hidden;
animation: type 3s steps(30), blink 0.8s linear infinite;


}

@keyframes type {
from {
  width: 0;
}
}

@keyframes blink {
from {
  border-right-color: transparent;
}
}

=======
>>>>>>> cb21674bc937154fbe4f4f2cf5cfda26dcd4b64f
        </style>
    <!-- flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

     <!-- tailwind -->
     <link href="../resources/css/dist/output.css" rel="stylesheet">

    <!-- ionic icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<<<<<<< HEAD
<div class="bg-[#F7F7F7]" style=" background-color: <?= $colors[0]['background'] ?>;color:<?= $colors[0]['bd_text_color']?>">
=======
<div class="bg-[#F7F7F7]">
>>>>>>> cb21674bc937154fbe4f4f2cf5cfda26dcd4b64f
    <!-- Navigation -->
    <?php include '../header/header.php' ?>
    <!-- Start Collaborator Hero Section  -->
    <div class="w-full relative mb-20">
<<<<<<< HEAD
        <img class="w-full" src="../resources/img/<?= $resultSlider[0]['collaborator_slider']?>" alt="collaboratorHero.pngs" />
        <p class="text-white  w-96 lg:w-[600px] text-sm sm:text-xl lg:text-3xl font-playFair whitespace-nowrap font-bold overflow-hidden typing absolute top-14 sm:top-16 left-5 lg:top-52 lg:left-24 xl:left-20">Unlock Potential; Build The Future</p>
=======
        <img class="w-full" src="../resources/img/139546482_16064444264841n 1 (2).png" alt="collaboratorHero.pngs" />
      
>>>>>>> cb21674bc937154fbe4f4f2cf5cfda26dcd4b64f
    </div>
    <!-- End Collaborator Hero Section  -->

    <!-- Start Partanership List Section  -->
    <div class=" mb-28 overflow-hidden whitespace-nowrap ">
        <h1 class="tracking-wider font-playFair text-3xl font-extrabold text-center mb-14">Our Partners</h1>
        <div class="inline-block space-x-10 animate-slide   px-0 ">
   <?php 

 foreach ($collaborators as $collaborator) {
 ?>
  
          <img src="../../../Storage/collaborator_img/gc<?= $collaborator['id'] . '/' . $collaborator['gc_logo'] ?>" alt="<?= $collaborator['gc_company_name']; ?>"class="inline h-20 w-20 lg:h-48 "   alt="logo">

       
    


   <?php }?>
   </div>
    <!-- End Partanership List Section  -->

    <!-- Start Collaborator register Section  -->
    <div class="w-full relative">
        <img class="w-full" src="../resources/img/collaboratorRegister.png" alt="collaboratorHero.png" />
        <div class="w-1/2 text-white top-1 left-2 xl:left-36 xl:top-20  absolute lg:top-10 lg:left-10 tracking-wide ">
            <h1 class="font-medium font-playFair text-xs lg:text-3xl mb-2 lg:mb-5  " >Collaborator Requirement</h1>
            <div class="lg:space-y-4 space-y-1 text-2xs lg:text-lg  tracking-wide font-light">
                <p >. Real estate licensing </p>
                <p >. Understanding of tax implications</p>
                <p >. Networking for property listings </p>
                <p >. In-depth knowledge of the local market.</p>
            </div>
        </div>
        <div class=" text-white bottom-10 right-5 xl:right-40  absolute lg:bottom-2/4 lg:right-16 tracking-wide ">
            <h1 class="font-bold text-sm lg:text-3xl mb-2 tracking-wide lg:px-5 font-playFair">To Be Our
                Partner</h1>
            <button class="absolute text-xs h-7 w-full lg:h-16 bg-darkGreen  lg:text-lg  lg:my-10 rounded-md hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                Collaborator Register
            </button>
        </div>
    </div>

    <!-- End Collaborator register Section  -->

    <!-- Start Search Company name Section  -->

    <div class="flex flex-col w-full items-center justify-evenly my-8">
        <h1 class="font-bold text-3xl text-center " style="font-family: 'Playfair Display';">Property Contact</h1>

        <div class="w-full my-16 flex gap-5 justify-center">
            <input type="text" name="collaboratorName" placeholder="Company Name"
                class=" sm:w-1/4 px-5 py-3 rounded-lg  border-2 ">
            <button class="sm:w-32 w-20 text-lg lg:h-12 font-medium sm:text-xl text-white rounded-lg bg-darkGreen 
            hover:bg-white-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                Search
            </button>
        </div>
        <!-- Start  Company profile info Section  -->
        <div class="sm:w-3/4 w-11/12 sm:py-10 bg-gray-800 border-gray-200 rounded my-5 flex justify-around flex-col sm:flex-row items-center hover:p-2">
            <div class="w-46 h-46  bg-[#F7F7F7] my-5">
                <img class=" w-40 h-40" src="../resources/img/common/company Logo/TPL Myanmar.png" alt="company Logo" />
            </div>
            <div class=" text-center  sm:text-left h-46  my-5 text-white ">
                <div class="font-bold  sm:text-xl mb-8 ">
                    TPL Myanmar Real Estate & Service Co.,Ltd
                </div>
                <div class="mb-2">
                    <ion-icon class="mr-2" name="person-outline"></ion-icon>
                    <span>319, Rm 4, Yan Aung Lane (2), Ward (2), Yankin, Yangon , Myanmar</span>
                </div>
                <div class="mb-2">
                    <ion-icon class="mr-2" name="call-outline"></ion-icon>
                    <span>(+95) 95198105</span>
                </div>
                <div class="mb-2 whitespace-nowrap">
                    <ion-icon class="mr-2" name="mail-outline"></ion-icon>
                    <span>tplmyanmar@gmail.coms</span>
                </div>
            </div>


        </div>
        <!-- Start  Company profile info Section  -->

        <!-- Start  Company profile info Section  -->
        <div class="sm:w-3/4 w-11/12 sm:py-10 bg-gray-800 border-gray-200 rounded my-5 flex justify-around flex-col sm:flex-row items-center hover:p-2">
            <div class="w-46 h-46  bg-[#F7F7F7] my-5">
                <img class=" w-40 h-40" src="../resources/img/common/company Logo/TPL Myanmar.png" alt="company Logo" />
            </div>
            <div class=" text-center  sm:text-left h-46  my-5 text-white ">
                <div class="font-bold  sm:text-xl mb-8 ">
                    TPL Myanmar Real Estate & Service Co.,Ltd
                </div>
                <div class="mb-2">
                    <ion-icon class="mr-2" name="person-outline"></ion-icon>
                    <span>319, Rm 4, Yan Aung Lane (2), Ward (2), Yankin, Yangon , Myanmar</span>
                </div>
                <div class="mb-2">
                    <ion-icon class="mr-2" name="call-outline"></ion-icon>
                    <span>(+95) 95198105</span>
                </div>
                <div class="mb-2 whitespace-nowrap">
                    <ion-icon class="mr-2" name="mail-outline"></ion-icon>
                    <span>tplmyanmar@gmail.coms</span>
                </div>
            </div>


        </div>
        <!-- Start  Company profile info Section  -->

        <!-- Start  Company profile info Section  -->
        <div class="sm:w-3/4 w-11/12 sm:py-10 bg-gray-800 border-gray-200 rounded my-5 flex justify-around flex-col sm:flex-row items-center hover:p-2">
            <div class="w-46 h-46  bg-[#F7F7F7] my-5">
                <img class=" w-40 h-40" src="../resources/img/common/company Logo/TPL Myanmar.png" alt="company Logo" />
            </div>
            <div class=" text-center  sm:text-left h-46  my-5 text-white ">
                <div class="font-bold  sm:text-xl mb-8 ">
                    TPL Myanmar Real Estate & Service Co.,Ltd
                </div>
                <div class="mb-2">
                    <ion-icon class="mr-2" name="person-outline"></ion-icon>
                    <span>319, Rm 4, Yan Aung Lane (2), Ward (2), Yankin, Yangon , Myanmar</span>
                </div>
                <div class="mb-2">
                    <ion-icon class="mr-2" name="call-outline"></ion-icon>
                    <span>(+95) 95198105</span>
                </div>
                <div class="mb-2 whitespace-nowrap">
                    <ion-icon class="mr-2" name="mail-outline"></ion-icon>
                    <span>tplmyanmar@gmail.coms</span>
                </div>
            </div>


        </div>
        <!-- Start  Company profile info Section  -->

        <div class="sm:w-3/4 w-11/12 sm:py-10 bg-gray-800 border-gray-200 rounded my-5 flex justify-around flex-col sm:flex-row items-center hover:p-2">
            <div class="w-46 h-46  bg-[#F7F7F7] my-5">
                <img class=" w-40 h-40" src="../resources/img/common/company Logo/TPL Myanmar.png" alt="company Logo" />
            </div>
            <div class=" text-center  sm:text-left h-46  my-5 text-white ">
                <div class="font-bold  sm:text-xl mb-8 ">
                    TPL Myanmar Real Estate & Service Co.,Ltd
                </div>
                <div class="mb-2">
                    <ion-icon class="mr-2" name="person-outline"></ion-icon>
                    <span>319, Rm 4, Yan Aung Lane (2), Ward (2), Yankin, Yangon , Myanmar</span>
                </div>
                <div class="mb-2">
                    <ion-icon class="mr-2" name="call-outline"></ion-icon>
                    <span>(+95) 95198105</span>
                </div>
                <div class="mb-2 whitespace-nowrap">
                    <ion-icon class="mr-2" name="mail-outline"></ion-icon>
                    <span>tplmyanmar@gmail.coms</span>
                </div>
            </div>


        </div>
        <!-- Start  Company profile info Section  -->

    </div>

    <!-- End Search Company name Section  -->
      <!-- pagination -->
    <div class="flex justify-center my-16">
        <nav aria-label="Page navigation example">
            <ul class="flex items-center -space-x-px h-10 text-base">
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <span class="sr-only">Previous</span>
                        <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                </li>
                <li>
                    <a href="#" aria-current="page"
                        class="z-10 flex items-center justify-center px-4 h-10 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <span class="sr-only">Next</span>
                        <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

   
    <?php include '../footer/footer.php' ?>
</body>

</html>