@extends('layout')
@section('content')
   <div class="container box-list-tour top-30">
      <div class="row">
        <div class="col-md-12 col-xs-12 bx-title-lst-tour text-center">
          <div class="w100 fl title-tour1">
            <h2 style="color: #ffc700;font-size: 30px;"><img src="" alt="icon" style="width: 80px;"> Tour Giá Sốc</h2>
          </div>

        </div>
        <div class="col-md-12 col-xs-12 bx-content-lst-tour">
          @foreach ($category_parent as $key =>$cate_parnet )
          
        
          <div class="row">
            <div class="col-md-4 col-xs-12 lst-tour-item">
               <div class="w100 fl bx-wap-pr-item">
                 <div class="clearfix box-wap-imgpr">
                   <a href="">
                     <img src="{{asset('fontend/imgs/logo-ghenh-da-dia.jpg')}}" class="img-default" alt="tour"
                        style="margin-bottom: 6px;">
                     <img src="{{asset('fontend/imgs/merry-christmas-1.png')}}" class="img-event-giang-sinh">
                 </div>
                 <div class="clear"></div>
                 <h4><a href="{{route('chi-tiet-tour', ['du-lich-quy-nhơn-1.html'])}}">Tour Hot nhất Hè 2023 Quy Nhơn - Phú Yên (Xứ Nẫu
                     đẹp nhất Việt Nam)</a></h4>
                 <div class="clear"></div>
                 <div class="group-calendar w100 fl">
                   <div class="col-md-6 col-xs-7 date-start">
                     <i class="fa fa-calendar"></i>
                     Hàng ngày
                   </div>
                   <div class="col-md-6 col-xs-5 date-range">
                     <span class="lst-icon1"><i class="fa fa-clock-o"></i></span><span> 3 Ngày</span>
                   </div>
                 </div>
                 <div class="group-localtion w100 fl">
                   <div class="col-md-6 col-xs-7 map-maker">
                     <span class="lst-icon1"><i class="fa fa-map-marker"></i></span><span> Khởi hành 63
                        tỉnh/TP</span>
                   </div>
                   <div class="col-md-6 col-xs-5 numner-sit">
                     <span class="lst-icon1"><i class="fa fa-users"></i></span><span> Số chỗ: 10</span>
                   </div>
                 </div>
                 <div class="note-attack"><i class="fa fa-bell" aria-hidden="true"></i> Khuyến mãi 200K cho nhóm khách
                   5 người trở lên</div>
                 <div class="group-book w100 fl">
                   <span class="price-sell">4.990.000 VNĐ </span>
                   <a href="{{route('chi-tiet-tour', ['du-lich-quy-nhơn-1.html'])}}" class="link-book btn_view_tour0">Xem chi tiết</a>
                 </div>
               </div>
            </div>
            <div class="col-md-4 col-xs-12 lst-tour-item">
               <div class="w100 fl bx-wap-pr-item">
                 <div class="clearfix box-wap-imgpr">
                   <a href="">
                     <img src="{{asset('fontend/imgs/logo-ghenh-da-dia.jpg')}}" class="img-default" alt="tour"
                        style="margin-bottom: 6px;">
                     <img src="{{asset('fontend/imgs/merry-christmas-1.png')}}" class="img-event-giang-sinh">
                   </a>
                 </div>
                 <div class="clear"></div>
                 <h4><a href="{{route('chi-tiet-tour', ['du-lich-quy-nhơn-2.html'])}}">Tour Hot nhất Hè 2023 Quy Nhơn - Phú Yên (Xứ Nẫu
                     đẹp nhất Việt Nam)</a></h4>
                 <div class="clear"></div>
                 <div class="group-calendar w100 fl">
                   <div class="col-md-6 col-xs-7 date-start">
                     <i class="fa fa-calendar"></i>
                     Hàng ngày
                   </div>
                   <div class="col-md-6 col-xs-5 date-range">
                     <span class="lst-icon1"><i class="fa fa-clock-o"></i></span><span> 3 Ngày</span>
                   </div>
                 </div>
                 <div class="group-localtion w100 fl">
                   <div class="col-md-6 col-xs-7 map-maker">
                     <span class="lst-icon1"><i class="fa fa-map-marker"></i></span><span> Khởi hành 63
                        tỉnh/TP</span>
                   </div>
                   <div class="col-md-6 col-xs-5 numner-sit">
                     <span class="lst-icon1"><i class="fa fa-users"></i></span><span> Số chỗ: 10</span>
                   </div>
                 </div>
                 <div class="note-attack"><i class="fa fa-bell" aria-hidden="true"></i> Khuyến mãi 200K cho nhóm khách
                   5 người trở lên</div>
                 <div class="group-book w100 fl">
                   <span class="price-sell">4.990.000 VNĐ </span>
                   <a href="{{route('chi-tiet-tour', ['du-lich-quy-nhơn-2.html'])}}" class="link-book btn_view_tour0">Xem chi tiết</a>
                 </div>
               </div>
            </div>
            <div class="col-md-4 col-xs-12 lst-tour-item">
               <div class="w100 fl bx-wap-pr-item">
                 <div class="clearfix box-wap-imgpr">
                   <a href="">
                     <img src="{{asset('fontend/imgs/logo-ghenh-da-dia.jpg')}}" class="img-default" alt="tour"
                        style="margin-bottom: 6px;">
                     <img src="{{asset('fontend/imgs/merry-christmas-1.png')}}" class="img-event-giang-sinh">
                     
                   </a>
                 </div>
                 <div class="clear"></div>
                 <h4><a href="{{route('chi-tiet-tour', ['du-lich-quy-nhơn-3.html'])}}">Tour Hot nhất Hè 2023 Quy Nhơn - Phú Yên (Xứ Nẫu
                     đẹp nhất Việt Nam)</a></h4>
                 <div class="clear"></div>
                 <div class="group-calendar w100 fl">
                   <div class="col-md-6 col-xs-7 date-start">
                     <i class="fa fa-calendar"></i>
                     Hàng ngày
                   </div>
                   <div class="col-md-6 col-xs-5 date-range">
                     <span class="lst-icon1"><i class="fa fa-clock-o"></i></span><span> 3 Ngày</span>
                   </div>
                 </div>
                 <div class="group-localtion w100 fl">
                   <div class="col-md-6 col-xs-7 map-maker">
                     <span class="lst-icon1"><i class="fa fa-map-marker"></i></span><span> Khởi hành 63
                        tỉnh/TP</span>
                   </div>
                   <div class="col-md-6 col-xs-5 numner-sit">
                     <span class="lst-icon1"><i class="fa fa-users"></i></span><span> Số chỗ: 10</span>
                   </div>
                 </div>
                 <div class="note-attack"><i class="fa fa-bell" aria-hidden="true"></i> Khuyến mãi 200K cho nhóm khách
                   5 người trở lên</div>
                 <div class="group-book w100 fl">
                   <span class="price-sell">4.990.000 VNĐ </span>
                   <a href="{{route('chi-tiet-tour', ['du-lich-quy-nhơn-3.html'])}}" class="link-book btn_view_tour0">Xem chi tiết</a>
                 </div>
               </div>
            </div>
            <div class="col-md-4 col-xs-12 lst-tour-item">
               <div class="w100 fl bx-wap-pr-item">
                 <div class="clearfix box-wap-imgpr">
                   <a href="">
                     <img src="{{asset('fontend/imgs/logo-ghenh-da-dia.jpg')}}" class="img-default" alt="tour"
                        style="margin-bottom: 6px;">
                     <img src="{{asset('fontend/imgs/merry-christmas-1.png')}}" class="img-event-giang-sinh">
                     
                   </a>
                 </div>
                 <div class="clear"></div>
                 <h4><a href="{{ route('chi-tiet-tour', ['du-lich-quy-nhơn-4.html']) }}">Tour Hot nhất Hè 2023 Quy Nhơn - Phú Yên (Xứ Nẫu
                     đẹp nhất Việt Nam)</a></h4>
                 <div class="clear"></div>
                 <div class="group-calendar w100 fl">
                   <div class="col-md-6 col-xs-7 date-start">
                     <i class="fa fa-calendar"></i>
                     Hàng ngày
                   </div>
                   <div class="col-md-6 col-xs-5 date-range">
                     <span class="lst-icon1"><i class="fa fa-clock-o"></i></span><span> 3 Ngày</span>
                   </div>
                 </div>
                 <div class="group-localtion w100 fl">
                   <div class="col-md-6 col-xs-7 map-maker">
                     <span class="lst-icon1"><i class="fa fa-map-marker"></i></span><span> Khởi hành 63
                        tỉnh/TP</span>
                   </div>
                   <div class="col-md-6 col-xs-5 numner-sit">
                     <span class="lst-icon1"><i class="fa fa-users"></i></span><span> Số chỗ: 10</span>
                   </div>
                 </div>
                 <div class="note-attack"><i class="fa fa-bell" aria-hidden="true"></i> Khuyến mãi 200K cho nhóm khách
                   5 người trở lên</div>
                 <div class="group-book w100 fl">
                   <span class="price-sell">4.990.000 VNĐ </span>
                   <a href="{{ route('chi-tiet-tour', ['du-lich-quy-nhơn-4.html']) }}" class="link-book btn_view_tour0">Xem chi tiết</a>
                 </div>
               </div>
            </div>

          </div>
        </div>
      </div>
   </div>
   @endforeach
   <!-- <div class="container box-list-tour top-30">
      <div class="row">
        <div class="col-md-12 col-xs-12 bx-title-lst-tour text-center">

          <div class="w100 fl title-tour1">
            <h2 style="color: #ffc700;font-size: 30px;"><img src="" alt="icon" style="width: 80px;">Tour Quốc tế</h2>
          </div>

        </div>
        <div class="col-md-12 col-xs-12 bx-content-lst-tour">
          <div class="row">
            <div class="col-md-4 col-xs-12 lst-tour-item">
               <div class="w100 fl bx-wap-pr-item">
                 <div class="clearfix box-wap-imgpr">
                   <a href="">
                     <img src="{{asset('fontend/imgs/ha-noi-kuala-lumpur-cao-nguyen-genting-ha-noi.jpg')}}" class="img-default"
                        alt="tour" style="margin-bottom: 6px;">
                     <img src="{{asset('fontend/imgs/8-3.png')}}" class="img-event-8-3">
                  
                   </a>
                 </div>
                 <div class="clear"></div>
                 <h4><a href="{{ route('chi-tiet-tour', ['du-lich-singapore-521.html']) }}">Tour Du lịch Singapore Malaysia 4 ngày 3 Đêm giá
                     kích cầu, Sập Thị trường, dịch vụ cao cấp nhất, có cam kết</a></h4>
                 <div class="clear"></div>
                 <div class="group-calendar w100 fl">
                   <div class="col-md-6 col-xs-7 date-start">
                     <i class="fa fa-calendar"></i>
                     Thứ 2, Thứ 3, Thứ 6 Hàng Tuần
                   </div>
                   <div class="col-md-6 col-xs-5 date-range">
                     <span class="lst-icon1"><i class="fa fa-clock-o"></i></span><span> 4 Ngày</span>
                   </div>
                 </div>
                 <div class="group-localtion w100 fl">
                   <div class="col-md-6 col-xs-7 map-maker">
                     <span class="lst-icon1"><i class="fa fa-map-marker"></i></span><span> TP. Hồ Chí Minh</span>
                   </div>
                   <div class="col-md-6 col-xs-5 numner-sit">
                     <span class="lst-icon1"><i class="fa fa-users"></i></span><span> Số chỗ: 12</span>
                   </div>
                 </div>
                 <div class="note-attack"><i class="fa fa-bell" aria-hidden="true"></i></div>
                 <div class="group-book w100 fl">
                   <span class="price-sell">7.500.000 VNĐ </span>
                   <a href="{{ route('chi-tiet-tour', ['du-lich-singapore-521.html']) }}" class="link-book btn_view_tour0">Xem chi tiết</a>
                 </div>
               </div>
            </div>
            <div class="col-md-4 col-xs-12 lst-tour-item">
               <div class="w100 fl bx-wap-pr-item">
                 <div class="clearfix box-wap-imgpr">
                   <a href="">
                     <img src="{{asset('fontend/imgs/ha-noi-kuala-lumpur-cao-nguyen-genting-ha-noi.jpg')}}" class="img-default"
                        alt="tour" style="margin-bottom: 6px;">
                     <img src="{{asset('fontend/imgs/8-3.png')}}" class="img-event-8-3">
                  
                   </a>
                 </div>
                 <div class="clear"></div>
                 <h4><a href="{{ route('chi-tiet-tour', ['du-lich-singapore-131.html']) }}">Tour Du lịch Singapore Malaysia 4 ngày 3 Đêm giá
                     kích cầu, Sập Thị trường, dịch vụ cao cấp nhất, có cam kết</a></h4>
                 <div class="clear"></div>
                 <div class="group-calendar w100 fl">
                   <div class="col-md-6 col-xs-7 date-start">
                     <i class="fa fa-calendar"></i>
                     Thứ 2, Thứ 3, Thứ 6 Hàng Tuần
                   </div>
                   <div class="col-md-6 col-xs-5 date-range">
                     <span class="lst-icon1"><i class="fa fa-clock-o"></i></span><span> 4 Ngày</span>
                   </div>
                 </div>
                 <div class="group-localtion w100 fl">
                   <div class="col-md-6 col-xs-7 map-maker">
                     <span class="lst-icon1"><i class="fa fa-map-marker"></i></span><span> TP. Hồ Chí Minh</span>
                   </div>
                   <div class="col-md-6 col-xs-5 numner-sit">
                     <span class="lst-icon1"><i class="fa fa-users"></i></span><span> Số chỗ: 12</span>
                   </div>
                 </div>
                 <div class="note-attack"><i class="fa fa-bell" aria-hidden="true"></i></div>
                 <div class="group-book w100 fl">
                   <span class="price-sell">7.500.000 VNĐ </span>
                   <a href="{{ route('chi-tiet-tour', ['du-lich-singapore-131.html']) }}" class="link-book btn_view_tour0">Xem chi tiết</a>
                 </div>
               </div>
            </div>
            <div class="col-md-4 col-xs-12 lst-tour-item">
               <div class="w100 fl bx-wap-pr-item">
                 <div class="clearfix box-wap-imgpr">
                   <a href="">
                     <img src="{{asset('fontend/imgs/ha-noi-kuala-lumpur-cao-nguyen-genting-ha-noi.jpg')}}" class="img-default"
                        alt="tour" style="margin-bottom: 6px;">
                     <img src="{{asset('fontend/imgs/8-3.png')}}" class="img-event-8-3">
                     
                   </a>
                 </div>
                 <div class="clear"></div>
                 <h4><a href="{{ route('chi-tiet-tour', ['du-lich-singapore-malaysia-511.html']) }}">Tour Du lịch Singapore Malaysia 4 ngày 3 Đêm giá
                     kích cầu, Sập Thị trường, dịch vụ cao cấp nhất, có cam kết</a></h4>
                 <div class="clear"></div>
                 <div class="group-calendar w100 fl">
                   <div class="col-md-6 col-xs-7 date-start">
                     <i class="fa fa-calendar"></i>
                     Thứ 2, Thứ 3, Thứ 6 Hàng Tuần
                   </div>
                   <div class="col-md-6 col-xs-5 date-range">
                     <span class="lst-icon1"><i class="fa fa-clock-o"></i></span><span> 4 Ngày</span>
                   </div>
                 </div>
                 <div class="group-localtion w100 fl">
                   <div class="col-md-6 col-xs-7 map-maker">
                     <span class="lst-icon1"><i class="fa fa-map-marker"></i></span><span> TP. Hồ Chí Minh</span>
                   </div>
                   <div class="col-md-6 col-xs-5 numner-sit">
                     <span class="lst-icon1"><i class="fa fa-users"></i></span><span> Số chỗ: 12</span>
                   </div>
                 </div>
                 <div class="note-attack"><i class="fa fa-bell" aria-hidden="true"></i></div>
                 <div class="group-book w100 fl">
                   <span class="price-sell">7.500.000 VNĐ </span>
                   <a href="{{ route('chi-tiet-tour', ['du-lich-singapore-malaysia-511.html']) }}" class="link-book btn_view_tour0">Xem chi tiết</a>
                 </div>
               </div>
            </div>
            <div class="col-md-4 col-xs-12 lst-tour-item">
               <div class="w100 fl bx-wap-pr-item">
                 <div class="clearfix box-wap-imgpr">
                   <a href="">
                     <img src="{{asset('fontend/imgs/ha-noi-kuala-lumpur-cao-nguyen-genting-ha-noi.jpg')}}" class="img-default"
                        alt="tour" style="margin-bottom: 6px;">
                     <img src="{{asset('fontend/imgs/8-3.png')}}" class="img-event-8-3">
                     
                   </a>
                 </div>
                 <div class="clear"></div>
                 <h4><a href="{{ route('chi-tiet-tour', ['du-lich-singapore-malaysia-412.html']) }}">Tour Du lịch Singapore Malaysia 4 ngày 3 Đêm giá
                     kích cầu, Sập Thị trường, dịch vụ cao cấp nhất, có cam kết</a></h4>
                 <div class="clear"></div>
                 <div class="group-calendar w100 fl">
                   <div class="col-md-6 col-xs-7 date-start">
                     <i class="fa fa-calendar"></i>
                     Thứ 2, Thứ 3, Thứ 6 Hàng Tuần
                   </div>
                   <div class="col-md-6 col-xs-5 date-range">
                     <span class="lst-icon1"><i class="fa fa-clock-o"></i></span><span> 4 Ngày</span>
                   </div>
                 </div>
                 <div class="group-localtion w100 fl">
                   <div class="col-md-6 col-xs-7 map-maker">
                     <span class="lst-icon1"><i class="fa fa-map-marker"></i></span><span> TP. Hồ Chí Minh</span>
                   </div>
                   <div class="col-md-6 col-xs-5 numner-sit">
                     <span class="lst-icon1"><i class="fa fa-users"></i></span><span> Số chỗ: 12</span>
                   </div>
                 </div>
                 <div class="note-attack"><i class="fa fa-bell" aria-hidden="true"></i></div>
                 <div class="group-book w100 fl">
                   <span class="price-sell">7.500.000 VNĐ </span>
                   <a href="{{ route('chi-tiet-tour', ['du-lich-singapore-malaysia-412.html']) }}" class="link-book btn_view_tour0">Xem chi tiết</a>
                 </div>
               </div>
            </div>
          </div>
        </div>
      </div>
   </div> -->
   <!-- <div class="container box-list-tour top-30">
      <div class="row">
        <div class="col-md-12 col-xs-12 bx-title-lst-tour text-center">
          <div class="w100 fl title-tour1 ">
            <h2 style="color: #ffc700;font-size: 30px;  padding: 150px; ;"><img src="" alt="icon"
                 style="width: 80px;">Tour nội địa</h2>
          </div>

        </div>
        <div class="col-md-12 col-xs-12 bx-content-lst-tour">
          <div class="row">
            <div class="col-md-4 col-xs-12 lst-tour-item">
               <div class="w100 fl bx-wap-pr-item">
                 <div class="clearfix box-wap-imgpr">
                   <a href="">
                     <img src="{{asset('fontend/imgs/sapa4.png')}}" class="img-default" alt="tour" style="margin-bottom: 6px;">
                     <img src="{{asset('fontend/imgs/merry-christmas-1.png')}}" class="img-event-giang-sinh">
                    
                   </a>
                 </div>
                 <div class="clear"></div>
                 <h4><a href="{{route('chi-tiet-tour', ['du-lich-doc-la-451.html'])}}">Tour độc lạ, trọn gói: Hà Nội - Hà Giang - Lũng Cú
                     - Đèo Mã Phì - Sông Nho Quế - Sapa - Fansipan</a></h4>
                 <div class="clear"></div>
                 <div class="group-calendar w100 fl">
                   <div class="col-md-6 col-xs-7 date-start">
                     <i class="fa fa-calendar"></i>
                     Thứ 7 Hàng Tuần
                   </div>
                   <div class="col-md-6 col-xs-5 date-range">
                     <span class="lst-icon1"><i class="fa fa-clock-o"></i></span><span> 5 Ngày</span>
                   </div>
                 </div>
                 <div class="group-localtion w100 fl">
                   <div class="col-md-6 col-xs-7 map-maker">
                     <span class="lst-icon1"><i class="fa fa-map-marker"></i></span><span> Khởi hành 63
                        tỉnh/TP</span>
                   </div>
                   <div class="col-md-6 col-xs-5 numner-sit">
                     <span class="lst-icon1"><i class="fa fa-users"></i></span><span> Số chỗ: 15</span>
                   </div>
                 </div>
                 <div class="note-attack"><i class="fa fa-bell" aria-hidden="true"></i> Vé thuyền trên sông Nho Quế
                 </div>
                 <div class="group-book w100 fl">
                   <span class="price-sell">8.990.000 VNĐ </span>
                   <a href="{{route('chi-tiet-tour', ['du-lich-doc-la-451.html'])}}" class="link-book btn_view_tour0">Xem chi tiết</a>
                 </div>
               </div>
            </div>
            <div class="col-md-4 col-xs-12 lst-tour-item">
               <div class="w100 fl bx-wap-pr-item">
                 <div class="clearfix box-wap-imgpr">
                   <a href="">
                     <img src="{{asset('fontend/imgs/sapa4.png')}}" class="img-default" alt="tour" style="margin-bottom: 6px;">
                     <img src="{{asset('fontend/imgs/merry-christmas-1.png')}}" class="img-event-giang-sinh">
                    
                   </a>
                 </div>
                 <div class="clear"></div>
                 <h4><a href="{{route('chi-tiet-tour', ['du-lich-doc-la-5123.html'])}}">Tour độc lạ, trọn gói: Hà Nội - Hà Giang - Lũng Cú
                     - Đèo Mã Phì - Sông Nho Quế - Sapa - Fansipan</a></h4>
                 <div class="clear"></div>
                 <div class="group-calendar w100 fl">
                   <div class="col-md-6 col-xs-7 date-start">
                     <i class="fa fa-calendar"></i>
                     Thứ 7 Hàng Tuần
                   </div>
                   <div class="col-md-6 col-xs-5 date-range">
                     <span class="lst-icon1"><i class="fa fa-clock-o"></i></span><span> 5 Ngày</span>
                   </div>
                 </div>
                 <div class="group-localtion w100 fl">
                   <div class="col-md-6 col-xs-7 map-maker">
                     <span class="lst-icon1"><i class="fa fa-map-marker"></i></span><span> Khởi hành 63
                        tỉnh/TP</span>
                   </div>
                   <div class="col-md-6 col-xs-5 numner-sit">
                     <span class="lst-icon1"><i class="fa fa-users"></i></span><span> Số chỗ: 15</span>
                   </div>
                 </div>
                 <div class="note-attack"><i class="fa fa-bell" aria-hidden="true"></i> Vé thuyền trên sông Nho Quế
                 </div>
                 <div class="group-book w100 fl">
                   <span class="price-sell">8.990.000 VNĐ </span>
                   <a href="{{route('chi-tiet-tour', ['du-lich-doc-la-5123.html'])}}" class="link-book btn_view_tour0">Xem chi tiết</a>
                 </div>
               </div>
            </div>
            <div class="col-md-4 col-xs-12 lst-tour-item">
               <div class="w100 fl bx-wap-pr-item">
                 <div class="clearfix box-wap-imgpr">
                   <a href="">
                     <img src="{{asset('fontend/imgs/sapa4.png')}}" class="img-default" alt="tour" style="margin-bottom: 6px;">
                     <img src="{{asset('fontend/imgs/merry-christmas-1.png')}}" class="img-event-giang-sinh">
                   
                   </a>
                 </div>
                 <div class="clear"></div>
                 <h4><a href="{{route('chi-tiet-tour', ['du-lich-doc-la-821.html'])}}">Tour độc lạ, trọn gói: Hà Nội - Hà Giang - Lũng Cú
                     - Đèo Mã Phì - Sông Nho Quế - Sapa - Fansipan</a></h4>
                 <div class="clear"></div>
                 <div class="group-calendar w100 fl">
                   <div class="col-md-6 col-xs-7 date-start">
                     <i class="fa fa-calendar"></i>
                     Thứ 7 Hàng Tuần
                   </div>
                   <div class="col-md-6 col-xs-5 date-range">
                     <span class="lst-icon1"><i class="fa fa-clock-o"></i></span><span> 5 Ngày</span>
                   </div>
                 </div>
                 <div class="group-localtion w100 fl">
                   <div class="col-md-6 col-xs-7 map-maker">
                     <span class="lst-icon1"><i class="fa fa-map-marker"></i></span><span> Khởi hành 63
                        tỉnh/TP</span>
                   </div>
                   <div class="col-md-6 col-xs-5 numner-sit">
                     <span class="lst-icon1"><i class="fa fa-users"></i></span><span> Số chỗ: 15</span>
                   </div>
                 </div>
                 <div class="note-attack"><i class="fa fa-bell" aria-hidden="true"></i> Vé thuyền trên sông Nho Quế
                 </div>
                 <div class="group-book w100 fl">
                   <span class="price-sell">8.990.000 VNĐ </span>
                   <a href="{{route('chi-tiet-tour', ['du-lich-doc-la-821.html'])}}" class="link-book btn_view_tour0">Xem chi tiết</a>
                 </div>
               </div>
            </div>
          </div>
        </div>
      </div>
   </div> -->
@endsection