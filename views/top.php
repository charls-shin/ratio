<h1><img id=UivImg src=".//univ_2017/0241.gif?2020092818" alt='���ϴ��б�'></h1>
<h2><span class="stext">2021�г⵵</span><br /><span class="btextr">���ø��� </span><span class="btextb">�����</span></h2>
<fieldset class="finalwrap">
    <!--���������ٷΰ����ư����-->
    <ul id="ul_gobtn" class="btn">
        <li style='background:#da3b40 url(.//btn_bg.png) no-repeat right center;'><a href='http://ipsi3.uwayapply.com/susi2/inha/?CHA=1' target=_new_apply id='id_gouway'><b>��������</b> �ٷΰ���</a></li>



    </ul>
    <!--���������ٷΰ����ư��-->

    <!--�����ٷΰ������-->
    <form name="search">
        <span id='ID_DateStr'><label for='final'>������Ȳ</label></span>
        <select id='final' name='selectType' class='form3' onChange='javascript:viewType(this.value);'>
            <option value=''>--------�� ü--------</option>
            <option value='A11'>�л������� ���Ϲ̷�����</option>
            <option value='A12'>�л������� �б�����õ</option>
            <option value='A13'>�л������� ����ȸ</option>
            <option value='B14'>�л������� ������л�</option>
            <option value='A15'>�л������� ����н���</option>
            <option value='B16'>�л������� Ư��ȭ�� ���� ������ ������</option>
            <option value='B17'>�л������� ����5�����������</option>
            <option value='A28'>�л��α��� �л��α���</option>
            <option value='A310'>��� ��������</option>
            <option value='A451'>�Ǳ�/���� ���������а�-�ι��ҹ�</option>
            <option value='A452'>�Ǳ�/���� �����������а�</option>
            <option value='A453'>�Ǳ�/���� ���ؿ�ȭ�а�-����</option>
            <option value='A454'>�Ǳ�/���� ���ؿ�ȭ�а�-�̷п���</option>
            <option value='A456'>�Ǳ�/���� �Ƿ��������а�-�Ǳ�</option>
            <option value='A424'>�Ǳ�/���� ü��Ư����</option>
        </select>

        <script>
            function fnScrollMove(id,spd){
                // 2017.09.01 ����â - �ش� id�� ��ũ�� �̵� !
                var offset = $("#" + id).offset();
                if(offset && offset.top){
                    var spd=( typeof(spd) == "number" ? spd : 0);	// �̵��ӵ�
                    var h_height=( typeof($("#header:visible").height()) == "number" ? $("#header:visible").height() : 0 );	// ž����� ũ�� ����
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
                document.search.selectType.options[0]=new Option("��ü",arg,0,0);
                switch (arg) {

                    default :
                        document.search.selectType.options[1]=new Option('�л������� ���Ϲ̷�����','A11',0,0);
                        document.search.selectType.options[2]=new Option('�л������� �б�����õ','A12',0,0);
                        document.search.selectType.options[3]=new Option('�л������� ����ȸ','A13',0,0);
                        document.search.selectType.options[4]=new Option('�л������� ������л�','B14',0,0);
                        document.search.selectType.options[5]=new Option('�л������� ����н���','A15',0,0);
                        document.search.selectType.options[6]=new Option('�л������� Ư��ȭ�� ���� ������ ������','B16',0,0);
                        document.search.selectType.options[7]=new Option('�л������� ����5�����������','B17',0,0);
                        document.search.selectType.options[8]=new Option('�л��α��� �л��α���','A28',0,0);
                        document.search.selectType.options[9]=new Option('��� ��������','A310',0,0);
                        document.search.selectType.options[10]=new Option('�Ǳ�/���� ���������а�-�ι��ҹ�','A451',0,0);
                        document.search.selectType.options[11]=new Option('�Ǳ�/���� �����������а�','A452',0,0);
                        document.search.selectType.options[12]=new Option('�Ǳ�/���� ���ؿ�ȭ�а�-����','A453',0,0);
                        document.search.selectType.options[13]=new Option('�Ǳ�/���� ���ؿ�ȭ�а�-�̷п���','A454',0,0);
                        document.search.selectType.options[14]=new Option('�Ǳ�/���� �Ƿ��������а�-�Ǳ�','A456',0,0);
                        document.search.selectType.options[15]=new Option('�Ǳ�/���� ü��Ư����','A424',0,0);

                        break;
                }

                viewType(arg);
            }

        </script>

    </form>
    <!--�����ٷΰ������-->
</fieldset>
