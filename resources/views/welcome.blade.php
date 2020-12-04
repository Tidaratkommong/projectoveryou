@extends('layouts.test')



@section('content')

<!-- end products -->


<!-- chatbot-->

<!--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">-->
<script>
    var botmanWidget = {
        aboutText: 'ssdsd',
        title: 'Over You 99',
        mainColor: '#2E8B57',
        bubbleBackground: '#2E8B57',
        introMessage: '✋สวัสดีค่ะ นี่เป็นข้อความอัตโนมัติ มีอะไรให้เราช่วยไหมคะ ถ้าต้องการเริ่มต้นใหม่ พิมพ์คำว่า "เริ่มใหม่" ได้ตลอดเวลา ',
        placeholderText: 'Ask Me Something',
        aboutLink: 'mhdevelopment.gr'

    };
</script>
<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>


<!-- endchatbot -->


<br />
<br />
<ul class="nav justify-content-center bg-dark fixed-bottom ">
    <li class="nav-item">
        <a class="btn btn-link" href="#"></a>
    </li>
    <br />

</ul>

@endsection

