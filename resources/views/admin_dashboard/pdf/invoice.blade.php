

<table class="table text-md-nowrap" id="example1" >
    <thead>
    <tr>
        <th class="wd-15p border-bottom-0">#</th>
        <th class="wd-15p border-bottom-0">رقم الفاتورة</th>
        <th class="wd-20p border-bottom-0">تاريخ الفاتورة</th>
        <th class="wd-15p border-bottom-0">تاريخ الاستحقاق</th>
        <th class="wd-25p border-bottom-0">القسم</th>
        <th class="wd-10p border-bottom-0">المنتج</th>
        <th class="wd-20p border-bottom-0">الخصم</th>
        <th class="wd-15p border-bottom-0">نسبة الضريبة</th>
        <th class="wd-10p border-bottom-0">الاجمالي</th>
        <th class="wd-25p border-bottom-0">الحالة</th>
        <th class="wd-25p border-bottom-0">ملاحضات</th>
    </tr>
    </thead>
    <tbody>

    <?php $i=1 ?>
    @foreach($invoices as $Invoice)
        <tr>
            <td>{{$i ++}}</td>
            <td>{{$Invoice->invoice_number}}</td>
            <td>{{$Invoice->invoice_date}}</td>
            <td>{{$Invoice->due_date}}</td>
            <td>{{$Invoice->section->section_name}}</td>
            <td>{{$Invoice->product}}</td>
            <td>{{$Invoice->discount}}</td>
            <td>{{$Invoice->rate_vat}}</td>
            <td>{{$Invoice->total}}</td>
            <td >
                <span class="{{$Invoice->status == 1?' text-success':''}}">{{$Invoice->status == 1?' مدفوعة':''}}</span>
                <span class="{{$Invoice->status == 2?'text-danger':''}}">{{$Invoice->status == 2?'غير مدفوعة':''}}</span>
                <span class="{{$Invoice->status == 3?' text-warning':''}}">{{$Invoice->status == 3?'مدفوعة جزئيأ':''}}</span>
            </td>
            <td>{{$Invoice->note}}</td>
        </tr>

    @endforeach


    </tbody>
</table>


