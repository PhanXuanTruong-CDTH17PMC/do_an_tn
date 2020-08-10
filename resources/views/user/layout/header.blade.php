 <div >
    <div class="text-center" id="nav">
        <span class="logo-lg"style="font-size:40px; padding-top:20px;margin-top:20px">
            <img src="{{ asset('assets/images/logo.png') }}" alt="" height="90">
            
        </span>
        <label style="font-size:35px;font-family:Georgia "> PT Home's </label>
    </div>
    <div class="tab">
        <div>
            <a class="button" href="/thong-bao">Thông báo</a>
        </div>
        <div>
            <a class="button" href="#">Hóa đơn</a>
        </div>
        <div>
            <a class="button" href="#">Phương tiện</a>
        </div>
        <div>
            <a class="button" href="/phan-anh">Phản ánh</a>
        </div>
        <div>
            <a class="button button2 "  href="logout">Đăng xuất</a>
        </div>
        <div>
            <a class=" name" style="" href="#">Xin chào {{Auth('canho')->user()->name}}</a>
        </div>
    </div>
</div>

<style>

    .tab{
    background-color:#1E90FF;
    overflow: hidden;
    border: none;
    padding-left:5%;
    padding-right:6%;
    
    }
    
    .tab .button {
    float: left;
    outline: none;
    padding: 15px 16px;
    color: white;
    font-size:18px;
    }
    .tab .name {
    float: right;
    outline: none;
    padding: 15px 16px;
    transition: 0.5s;
    color: white;
    font-size:18px;
    }
    .tab .button2 {
    float: right;
    border: 3px solid white;
    border-radius:50px;
    color: white;
    }
    .tab .button:hover {
    background-color: white;
    color:#1E90FF;
    height:62.5px;
    }
    

</style>