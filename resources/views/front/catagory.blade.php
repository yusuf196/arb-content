<p>من فضلك قم باختيار </p>
<form action="selcat" method="post" value="{{ csrf_token() }}">
    {{ csrf_field() }}
@foreach($cats as $cat)

    <input type="checkbox"   name="box[]" value="{{$cat->id}}">{{$cat->cat_name}}<br>
@endforeach

<p class="form-submit">

  <a href="/home"><input type="submit" id="publish-question" value="اضافة الى مفضلتي" class="button color small submit"></a>


</p>

</form>
<a href="/home"><input type="submit" value="اذهب الى الصفحة الرئيسية"></a>


