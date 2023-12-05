@extends("testweb")
@section("content")
<article class="gw pos-r pb-5">

    <section class="container px-xl-3 px-lg-4 px-sm-4 px-xs-2">
        <ul class="row d-lg-flex d-xs-none btn-wrap w-100 mb-lg-5 pb-5">
            <li class="col-lg-auto px-xxl-4 px-xl-3 px-lg-2"><a href="index.html">活動首頁</a></li>
            <li class="col-lg-auto px-xxl-4 px-xl-3 px-lg-2"><a href="act.html">活動說明</a></li>
            <li class="col-lg-auto px-xxl-4 px-xl-3 px-lg-2"><a href="notice.html">注意事項</a></li>
            <li class="col-lg-auto px-xxl-4 px-xl-3 px-lg-2  active"><a href="qa.html">活動Q&A</a></li>
            <li class="col-lg-auto px-xxl-4 px-xl-3 px-lg-2"><a href="pro.html">產品介紹</a></li>
            <li class="col-lg-auto px-xxl-4 px-xl-3 px-lg-2"><a href="list.html">中獎專區</a></li>
        </ul>
        <h2 class="text-center title mb-5 mt-lg-5">活動Q&A</h2>
        <div class="col-xxl-10 col-lg-11 col-sm-11 col-xs-12 px-xl-3  mx-auto">
            <div class="w-100 accordion collapse-set mb-lg-5" id="accordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                            Q1.中獎了，需繳稅嗎?
                        </button>
                    </h2>
                    <div id="collapse-1" class="accordion-collapse collapse" data-bs-parent="#accordion">
                        <div class="accordion-body">
                            <ul class="custom-list">
                                <li>依中華民國稅法規定，獎項金額超過NT$1,000元以上(含稅)，主辦單位將於隔年開立各類所得稅扣繳憑單給中獎者，中獎者應提供個人資料及身分證正反面影本，若未提供或所提供之資料不實，或拒絕繳納上述稅金者，將視同放棄中獎權益。超過NT$20,000元以上(含稅)，依國稅局規定中獎者需自行負擔10%機會中獎稅金，將由主辦單位代扣中獎所得稅，不願繳交稅金者視同放棄得獎權利。如未超過有關獎品金額仍需依法報稅，但不需繳付機會中獎稅
                                </li>
                                <li>依中華民國稅法規定，非中華民國境內居住之個人(即在中華民國境內居位未達183天之本國人及外國人)不論中獎金額多寡，皆須繳20%機會中獎稅。</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--accordion-item-->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                            Q2.未成年子女中獎該準備哪些證件?
                        </button>
                    </h2>
                    <div id="collapse-2" class="accordion-collapse collapse" data-bs-parent="#accordion">
                        <div class="accordion-body">
                            <ul class="custom-list">
                                <li>請直系親屬提供『個人身份證影本』及『戶口名簿影本』並依活動辦法辦理。</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--accordion-item-->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                            Q3.若獎項已超過兌換或使用期限，該怎麼辦?
                        </button>
                    </h2>
                    <div id="collapse-3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                        <div class="accordion-body">
                            <ul class="custom-list">
                                <li>很抱歉！此次活動若已超過兌換或使用期限，一概無法兌換、使用或補發。</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--accordion-item-->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                            Q4.若平台登入資料錯誤，該怎麼辦?
                        </button>
                    </h2>
                    <div id="collapse-4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                        <div class="accordion-body">
                            <ul class="custom-list">
                                <li>本活動為保障每一位中獎者權益，每人只能抽獎一次，故資料若登入錯誤，將無法進行資料變更。<br>請各位輸入資料時務必小心，預祝您中大獎！</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--accordion-item-->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                            Q5.中獎資訊欄查無自己中獎資訊，怎麼辦?
                        </button>
                    </h2>
                    <div id="collapse-5" class="accordion-collapse collapse" data-bs-parent="#accordion">
                        <div class="accordion-body">
                            <ul class="custom-list">
                                <li>每人皆有一次抽獎機會，由於資料流量過大，系統資料整合時間統一將於每週一上午10:00更新中獎資訊，有請協助於平台上查詢，謝謝。</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--accordion-item-->

            </div>
            <!--#accordion-->
            <p class="text-center sm-title px-lg-0 px-xs-3">
                若您有任何疑問， 請直接來電至服務專線： 0800-000000，謝謝！<br>(服務時間：週一至週五，正常上班時間上午9:00至下午5:00)
            </p>

        </div>
        <!--col-->

    </section>
</article>

@endsection