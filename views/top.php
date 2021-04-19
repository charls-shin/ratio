<h1><img id=UivImg src=".//univ_2017/0241.gif?2020092818" alt='인하대학교'></h1>
<h2><span class="stext">2021학년도</span><br /><span class="btextr">수시모집 </span><span class="btextb">경쟁률</span></h2>
<fieldset class="finalwrap">
    <!--원서접수바로가기버튼시작-->
    <ul id="ul_gobtn" class="btn">
        <li style='background:#da3b40 url(.//btn_bg.png) no-repeat right center;'><a href='http://ipsi3.uwayapply.com/susi2/inha/?CHA=1' target=_new_apply id='id_gouway'><b>원서접수</b> 바로가기</a></li>



    </ul>
    <!--원서접수바로가기버튼끝-->

    <!--전형바로가기시작-->
    <form name="search">
        <span id='ID_DateStr'><label for='final'>최종현황</label></span>
        <select id='final' name='selectType' class='form3' onChange='javascript:viewType(this.value);'>
            <option value=''>--------전 체--------</option>
            <option value='A11'>학생부종합 인하미래인재</option>
            <option value='A12'>학생부종합 학교장추천</option>
            <option value='A13'>학생부종합 고른기회</option>
            <option value='B14'>학생부종합 농어촌학생</option>
            <option value='A15'>학생부종합 평생학습자</option>
            <option value='B16'>학생부종합 특성화고 등을 졸업한 재직자</option>
            <option value='B17'>학생부종합 서해5도지역출신자</option>
            <option value='A28'>학생부교과 학생부교과</option>
            <option value='A310'>논술 논술우수자</option>
            <option value='A451'>실기/실적 조형예술학과-인물소묘</option>
            <option value='A452'>실기/실적 디자인융합학과</option>
            <option value='A453'>실기/실적 연극영화학과-연기</option>
            <option value='A454'>실기/실적 연극영화학과-이론연출</option>
            <option value='A456'>실기/실적 의류디자인학과-실기</option>
            <option value='A424'>실기/실적 체육특기자</option>
        </select>

        <script>
            function fnScrollMove(id,spd){
                // 2017.09.01 이희창 - 해당 id로 스크롤 이동 !
                var offset = $("#" + id).offset();
                if(offset && offset.top){
                    var spd=( typeof(spd) == "number" ? spd : 0);	// 이동속도
                    var h_height=( typeof($("#header:visible").height()) == "number" ? $("#header:visible").height() : 0 );	// 탑헤더의 크기 빼줌
                    $("html, body").animate({scrollTop : Number(Number(offset.top)-Number(h_height)-20)}, spd);
                }
            }
            function viewType(arg)
            {
                if( arg=="" ){
                    fnScrollMove("container");
                }else{
                    fnScrollMove("Div_"+arg);
                }
            }

            function viewGr(arg)
            {
                document.search.selectType.options.length = 0;
                document.search.selectType.options[0]=new Option("전체",arg,0,0);
                switch (arg) {

                    default :
                        document.search.selectType.options[1]=new Option('학생부종합 인하미래인재','A11',0,0);
                        document.search.selectType.options[2]=new Option('학생부종합 학교장추천','A12',0,0);
                        document.search.selectType.options[3]=new Option('학생부종합 고른기회','A13',0,0);
                        document.search.selectType.options[4]=new Option('학생부종합 농어촌학생','B14',0,0);
                        document.search.selectType.options[5]=new Option('학생부종합 평생학습자','A15',0,0);
                        document.search.selectType.options[6]=new Option('학생부종합 특성화고 등을 졸업한 재직자','B16',0,0);
                        document.search.selectType.options[7]=new Option('학생부종합 서해5도지역출신자','B17',0,0);
                        document.search.selectType.options[8]=new Option('학생부교과 학생부교과','A28',0,0);
                        document.search.selectType.options[9]=new Option('논술 논술우수자','A310',0,0);
                        document.search.selectType.options[10]=new Option('실기/실적 조형예술학과-인물소묘','A451',0,0);
                        document.search.selectType.options[11]=new Option('실기/실적 디자인융합학과','A452',0,0);
                        document.search.selectType.options[12]=new Option('실기/실적 연극영화학과-연기','A453',0,0);
                        document.search.selectType.options[13]=new Option('실기/실적 연극영화학과-이론연출','A454',0,0);
                        document.search.selectType.options[14]=new Option('실기/실적 의류디자인학과-실기','A456',0,0);
                        document.search.selectType.options[15]=new Option('실기/실적 체육특기자','A424',0,0);

                        break;
                }

                viewType(arg);
            }

        </script>

    </form>
    <!--전형바로가기시작-->
</fieldset>
