@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    คุณเข้าสู่ระบบสำเร็จ
                    ระบบกำลังพาท่านไปหน้ากระทู้...
                        <script type="text/javascript">
                            setTimeout("location.href = '/forums';",1500);
                        </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
