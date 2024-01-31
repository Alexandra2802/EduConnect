$(document).ready(function(){
    $('th.to-sort').each(function(column){
        $(this).hover(function(){
            //for hover in
            $(this).data('type',$(this).attr('class'))
            $(this).addClass('clickable')
        },function(){
            // for hover out
            $(this).removeClass('clickable')
        })
        $(this).click(function(){
            
            var type=$(this).data('type')
            var records= $('table').find('tbody > tr')
            records.sort(function(a,b){
                var value1=$(a).children('td').eq(column).text()
                var value2=$(b).children('td').eq(column).text()
                if(type == 'num to-sort'){
                    //convert to number
                    value1 *= 1
                    value2 *= 1
                }
                return (value1<value2) ? -1 : (value1>value2 ? 1 :0)
            })
            $.each(records,function(index,row){
                $('tbody').append(row)
            })
        })
    })
})