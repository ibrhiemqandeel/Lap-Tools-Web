<x-muster pageTitleTow="{{ $pageTitleTow }}">
    <x-slot:PageTitle>
        {{ $pageTitle }} - Lap Tools Web
        </x-slot>
        <main>
            <main>


                <div class="DevelopersPage" id="DevelopersPageId">
                    <h1 class="DevelopersPageH1" id="DevelopersPageH1Id">{{ $titel }}</h1>
                </div>
                <div class="DevelopersPageContent" id="DevelopersPageContentId">
                    <a href={{ route($routeNameOne) }} target="_self">
                        <div>
                            <div class="ContentOne" style="background-image: url('{{ $imgesUrlPagesOne }} '); ">
                            </div>
                            <h3 class="conten">{{ $contentOne }}</h3>
                        </div>
                    </a>
                    <a href={{ route($routeNameTwo) }} target="_self">
                        <div>
                            <div class="ContentFourTwo" style="background-image: url('{{ $imgesUrlPagesTwo }}');">
                            </div>
                            <h3 class="conten">{{ $contentFourTwo }}</h3>
                        </div>
                    </a>

                    <a href={{ route($routeNameThree) }} target="_self">
                        <div>
                            <div class="ContentThree" style="background-image: url('{{ $imgesUrlPagesThree }}');">
                            </div>
                            <h3 class="conten">{{ $contentThree }}</h3>
                        </div>
                    </a>


                </div>
                <script src="/javaScript/main.js"></script>
                <style>
                    /*Titel back End ############*/

                    div h1.DevelopersPageH1 {
                        display: flex;
                        justify-content: center;
                        width: 40%;
                        align-items: center;
                        margin: 20px auto 10px;
                    }

                    /*Titel Developers ############*/

                    div h1.DevelopersPageH1 {
                        display: flex;
                        justify-content: center;
                        width: 40%;
                        align-items: center;
                        margin: 20px auto 30px;
                        color: #f00;
                        font-size: 3.5rem;
                        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
                        position: relative;
                        top: 50px;
                    }

                    /* Content */

                    div.DevelopersPageContent {
                        display: grid;
                        /* ينشئ أعمدة مرنة تتكيف مع حجم الشاشة */
                        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                        gap: 40px;
                        /* مسافة بين كل كارت والآخر */
                        padding: 20px;
                        width: 80%;
                        margin: 50px auto;
                        gap: 10%;


                    }

                    div div.ContentOne,
                    div div.ContentFourTwo,
                    div div.ContentThree {
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        width: 100%;
                        height: 350px;
                        background-size: contain;
                        background-repeat: no-repeat;
                        background-position: center;
                        border-radius: 20px;
                        border-radius: 20px;
                        transition: transform 0.3s ease;
                    }

                    div div.ContentOne:hover,
                    div div.ContentFourTwo:hover,
                    div div.ContentThree:hover {
                        transform: scale(1.05);
                        box-shadow: 0 0 15px rgba(255, 0, 0, 0.5);
                    }

                    h3 {
                        display: flex;
                        justify-content: center;
                        width: 80%;
                        align-items: center;
                        margin: 0px auto 0px;
                        color: #f00;
                        font-size: 3rem;
                        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;

                    }

                    h3.conten {
                        margin-left: 20%;
                    }

                    h3:hover {
                        color: rgb(8, 7, 7);
                        font-size: 3.5rem;
                    }

                    a {
                        text-decoration: none;
                    }
                </style>
                <script src="/javaScript/main.js"></script>
            </main>
</x-muster>
