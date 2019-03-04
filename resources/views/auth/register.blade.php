@include('layouts.header')
<div class="container" id="signup">
    <h2 class="text-center">سجل الأن<i class="icon-right"></i></h2>
    <div class="form-style form-style-3">
        <form method="POST" action="{{ route('register') }}" >
            {{ csrf_field() }}
            <div class="form-inputs clearfix">
                <p>
                    <label class="required">الأسم<span>*</span></label>
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                </p>
                <p>
                    <label class="required">البريد الإلكتروني<span>*</span></label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                </p>
                <p>
                    <label class="required">كلمة المرور<span>*</span></label>
                    <input id="password" type="password" class="form-control" name="password" required>

                </p>
                <p>
                    <label class="required">إعادة كلمة المرور<span>*</span></label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                </p>
            </div>
            <p class="form-submit">
                <input type="submit" value="تسجيل جديد" class="button color small submit">
            </p>
        </form>
    </div>
</div><!-- End signup -->
@include('layouts.footer')