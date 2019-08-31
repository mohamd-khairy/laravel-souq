@extends('layouts.app')

@section('content')
<section id="work-detail">
  <div class="container">
    <hr>
    <div class="row">
      <div style="padding-bottom: 10px" class="col-sm-6 portfolio-item">
        <img src="images/portfolio/work-1.jpg" class="img-responsive" alt="">
      </div>
        <div class="col-md-6 work-detail ">
           <h4 style="padding-bottom: 10px;color: #57a1e0;">تيشيرت ازرق وجميل وحلو وسعره كوويس </h4>
           <h5>للبيــــع</h5>
           <h5>100 ج.م</h5>
          <p >تيشرت صيفي مقاس xl وقماشته نضيفه جدا </p>
          <h5>01021952160</h5>
          <h5>البحيره \ دمنهور</h5>
        </div>
    </div>
    <div class="row" >
      
      <div style="padding-bottom: 10px" class="col-sm-4 portfolio-item">
        <img src="images/portfolio/work-1.jpg" class="img-responsive" alt="">
      </div><div style="padding-bottom: 10px" class="col-sm-4 portfolio-item">
        <img src="images/portfolio/work-1.jpg" class="img-responsive" alt="">
      </div><div style="padding-bottom: 10px" class="col-sm-4 portfolio-item">
        <img src="images/portfolio/work-1.jpg" class="img-responsive" alt="">
      </div><div style="padding-bottom: 10px" class="col-sm-4 portfolio-item">
        <img src="images/portfolio/work-1.jpg" class="img-responsive" alt="">
      </div>
   <!--  </div>
    <div class="row"> -->
    
      </div>
  </div>
</section>
<section id="work-detail">
  <div class="container">
    <hr>
    <div class="row" style="background-color: #71a8c7; border-radius: 10px;padding: 15px;margin: 20px">
       <div class="col-md-12 col-sm-6">

        <h4>الموبايل : 01021952160 </h4>
        <h4>العنوان : دمنهور\ البحيره </h4>
  <input type="email" name="" placeholder="اكتب ايميلك " class="form-control img-responsive"><br>
  <textarea style=" resize: none;" rows="3" cols="3" maxlength="200" placeholder="اكتب رسالتك " class="form-control img-responsive"></textarea><br>
  <button type="button"   style="margin:10px;border-radius: 10px;background-color: black; height: auto;" ><i class="fa fa-paperclip"></i> اضف ملحقات للرساله</button>
  <button type="button"   style="margin:10px;border-radius: 10px;background-color: black; height: auto;" ><i class="fa fa-send"></i> ارسل</button>
  

       </div>
    </div>
  </div>
</section>

<!-- <section style="background-color:#709fb9 ">
  <h5>الموبايل : 01021952160</h5>
  <input type="email" name="" placeholder="اكتب ايميلك ">
  <textarea rows="3" cols="3" maxlength="200" placeholder="اكتب رسالتك "></textarea>
</section> -->
<!-- portfolio grid section --> 
<!-- service section -->
<section id="backto" class="work-detail section">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center section"> <a href="/"><i class="fa fa-th fa-2x"></i></a>
        <p>Back to projects</p>
      </div>
    </div>
  </div>
</section>
@endsection

