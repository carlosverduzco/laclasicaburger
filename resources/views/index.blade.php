<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="">
                    <picture>
                        <img class="hero_image_1" src="./img/hero.jpg">
                        <img class="hero_image_2" src="./img/hero_mobile.jpg"
                    </picture>
                </div>
            </div>
        </div>
    </div>
    <div class="py-6">
        <div class="flex flex-wrap justify-evenly max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-4 bg-white h-index-adds w-5/12 overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="text-center">Especialidades de la Casa</h2>
                <div class="carousel relative shadow-2xl bg-white">
                    <div class="carousel-inner relative overflow-hidden w-full">
                        <!--Slide 1-->
                        <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                        <div class="h-index-adds carousel-item absolute opacity-0">
                            <div class="block h-full w-full bg-white text-white text-5xl text-center">
                                <picture>
                                    <img class="" src="./img/Recomendaciones_diarias/{{date("l")}}/{{$filesarray[0]['basename']}}">
                                </picture>
                            </div>
                        </div>
                        <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white  hover:bg-yellow-400 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                        <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white  hover:bg-yellow-400 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                        <!--Slide 2-->
                        <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                        <div class="h-index-adds carousel-item absolute opacity-0">
                            <div class="block h-full w-full bg-white text-white text-5xl text-center">
                                <picture>
                                    <img class="" src="./img/Recomendaciones_diarias/{{date("l")}}/{{$filesarray[1]['basename']}}">
                                </picture>
                            </div>
                        </div>
                        <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-yellow-400 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                        <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-yellow-400 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                        <!--Slide 3-->
                        <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                        <div class="h-index-adds carousel-item absolute opacity-0">
                            <div class="block h-full w-full bg-white text-white text-5xl text-center">
                                <picture>
                                    <img class="" src="./img/Recomendaciones_diarias/{{date("l")}}/{{$filesarray[2]['basename']}}">
                                </picture>
                            </div>
                        </div>
                        <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-yellow-400 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                        <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-yellow-400 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                        <!-- Add additional indicators for each slide-->
                        <ol class="carousel-indicators">
                            <li class="inline-block mr-3">
                                <label for="carousel-1" class="mb-3 carousel-bullet cursor-pointer block text-4xl text-white hover:text-primary">•</label>
                            </li>
                            <li class="inline-block mr-3">
                                <label for="carousel-2" class="mb-3 carousel-bullet cursor-pointer block text-4xl text-white hover:text-primary">•</label>
                            </li>
                            <li class="inline-block mr-3">
                                <label for="carousel-3" class="mb-3 carousel-bullet cursor-pointer block text-4xl text-white hover:text-primary">•</label>
                            </li>
                        </ol>

                    </div>
                </div>
            </div>
            <div class="bg-white my-4 h-index-adds w-5/12 overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="text-center">Conócenos</h2>
                <div class="carousel relative shadow-2xl bg-white">
                    <div class="carousel-inner relative overflow-hidden w-full">
                        <!--Slide 1-->
                        <input class="carousel-open" type="radio" id="carousel-1_2" name="carousel_2" aria-hidden="true" hidden="" checked="checked">
                        <div class="h-index-adds carousel-item absolute opacity-0">
                            <div class="block h-full w-full bg-white text-white text-5xl text-center">
                                <picture>
                                    <img class="h-index-adds" src="./img/Conocenos/{{$imgsarray2carousel[0]['basename']}}">
                                </picture>
                            </div>
                        </div>
                        <label for="carousel-3_2" class="prev control-1_2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-yellow-400 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                        <label for="carousel-2_2" class="next control-1_2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-yellow-400 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                        <!--Slide 2-->
                        <input class="carousel-open" type="radio" id="carousel-2_2" name="carousel_2" aria-hidden="true" hidden="">
                        <div class="h-index-adds carousel-item absolute opacity-0">
                            <div class="block h-full w-full bg-white text-white text-5xl text-center">
                                <picture>
                                    <img class="h-index-adds" src="./img/Conocenos/{{$imgsarray2carousel[1]['basename']}}">
                                </picture>
                            </div>
                        </div>
                        <label for="carousel-1_2" class="prev control-2_2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-yellow-400 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                        <label for="carousel-3_2" class="next control-2_2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-yellow-400 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                        <!--Slide 3-->
                        <input class="carousel-open" type="radio" id="carousel-3_2" name="carousel_2" aria-hidden="true" hidden="">
                        <div class="h-index-adds carousel-item absolute opacity-0">
                            <div class="block h-full w-full bg-white text-white text-5xl text-center">
                                <picture>
                                    <img class="h-index-adds" src="./img/Conocenos/{{$imgsarray2carousel[2]['basename']}}">
                                </picture>
                            </div>                        </div>
                        <label for="carousel-2_2" class="prev control-3_2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-yellow-400 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                        <label for="carousel-1_2" class="next control-3_2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-yellow-400 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                        <!-- Add additional indicators for each slide-->
                        <ol class="carousel-indicators">
                            <li class="inline-block mr-3">
                                <label for="carousel-1_2" class="mb-3 carousel-bullet cursor-pointer block text-4xl text-white hover:text-primary">•</label>
                            </li>
                            <li class="inline-block mr-3">
                                <label for="carousel-2_2" class="mb-3 carousel-bullet cursor-pointer block text-4xl text-white hover:text-primary">•</label>
                            </li>
                            <li class="inline-block mr-3">
                                <label for="carousel-3_2" class="mb-3 carousel-bullet cursor-pointer block text-4xl text-white hover:text-primary">•</label>
                            </li>
                        </ol>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
