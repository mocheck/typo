(function( $ ) {
    $.fn.stable = function(options ) {


        function log(s) {
            if (typeof console != "undefined" && typeof console.debug != "undefined") {
                console.log(s);
            } else {
                alert(s);
            }
        }

//        $.ajax({
//            type		: "POST",
//            //                cache	: false,
//            url		:    ajaxUrl,
//            data		: data,
//            success: function(data) {
//                //                        console.log(data);
//                if(data!='')
//                    $(target).html(data);
//
//
//
//            }
//        });

        // This is the easiest way to have default options.
        var settings = $.extend({
            // These are the defaults.
            color: "#556b2f",
            backgroundColor: "red"
        }, options );

        // Greenify the collection based on the settings variable.
//        return this.css({
//            color: settings.color,
//            backgroundColor: settings.backgroundColor
//        });
        var th =  this.find('th');
//        var th =  this.find('th').each(function(){
//
//            $(this).attr('order','nosort');
//        });


        function init(){

            th.attr('order','nosort');
            th.addClass('logo-asc');
            alert(settings.ajax_p);
            alert(settings.multisort);
            
        }

        init();

//        $('button').click(function(event){
//            $('p').animate({opacity: 'toggle'}, 2000);
//            if(event.ctrlKey == true){//если при щелчке нажата клавиша ctrl
//                $('p').stop(true); //останавливаем анимацию и очищаем очередь
//                $('p').queue('fx', function(){
//                    $(this).css('border', '3px solid green'); //добавляем в очередь новое действие
//                    $(this).dequeue('fx'); //удаляем наше действие из очереди
//                });
//            }
//        });








        // Тут пишем функционал нашего плагина
//        this.hide("slow");

//        $('#table td:first-child').show()
        function comparer(index) {
            return function(a, b) {
                var valA = getCellValue(a, index), valB = getCellValue(b, index);
                var A = getCell(a, index), B = getCell(b, index);

                if(valA == valB) {
//                    var table = $(A).parents('table').eq(0);
//
//                    var curColBaseIndex = table.data('curBaseIndex');
//                    if(curColBaseIndex == undefined){
//                        table.data('curBaseIndex',0);
//                    }
//                    $(A).attr('cellgroup','0');
//                    $(B).attr('cellgroup','0');
                }else{
//                    var table = $(A).parents('table').eq(0);
//                    var curColBaseIndex = table.data('curBaseIndex');
//                    table.data('curBaseIndex',curColBaseIndex++);
                }

                return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.localeCompare(valB)
            }
        }
        function getCellValue(row, index){ return $(row).children('td').eq(index).html(); }

        function getCell(row, index){ return $(row).children('td').eq(index);}







        function in_array(needle, haystack, strict) {	// Checks if a value exists in an array
            //
            // +   original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)

            var found = false, key, strict = !!strict;

            for (key in haystack) {
                if ((strict && haystack[key] === needle) || (!strict && haystack[key] == needle)) {
                    found = true;
                    break;
                }
            }

            return found;
        }


        function groupCell(colIndex){

            var col_vals = new Object();
            var i = 0,
            last_i = 0;
            var tbody = $('tbody').eq(0);
            var rep_indexes = [];
//            alert('groupCell');

            var  s_col = $('tbody td:first-child').each(function(){

                var   c_v = $(this).html();
                if(c_v in col_vals){

                    i = col_vals[c_v];

                    if(!in_array(i, rep_indexes))
                    rep_indexes.push(i);

                    $(this).attr('cellgroup',i);
//                    alert(col_vals[$(this).html()]);
                }else{

                    col_vals[c_v]=last_i;
                    $(this).attr('cellgroup',last_i);
                    last_i++;
                }

//                if (key in arr)
//

            });
            tbody.data('rep_indexes',rep_indexes);
            delete s_col;
        }

//        $(document).keypress("c",function(e) {
//            if(e.shiftKey)
//                alert("Shift+C was pressed!!");
//        });
//

        function multyColumnSort(sortcol,sortIndex){

            var tbody = $('tbody').eq(0);
            var rep_col_inds = tbody.data('rep_indexes');
            var table = $(this).parents('table').eq(0);
//            alert(rep_col_inds);
//            var allrows = tbody.find('tr');
//            alert(allrows.length);
            sortcol.asc = !sortcol.asc;

            for(var i=0; i< rep_col_inds.length; i++){

//                alert(rep_col_inds[i]);
//                var rows = $(this).find('tr[groupcell=\''+rep_col_inds[i]+'\']').toArray().sort(comparer(sortIndex));

                var rows = tbody.find('tr').has('td[cellgroup=\''+rep_col_inds[i]+'\']');
//
                var ins_index = rows.eq(0).index();
//                    var ins_index =  rows.each(function(){
//
//                        alert($(this).index())
//                    })
//                alert(rows.length)

                rows =  rows.toArray().sort(comparer(sortIndex));
//                alert('Index'+rows.index());


//            alert(this.asc);

            if (!sortcol.asc){rows = rows.reverse()};

                if(ins_index == 0) tbody.prepend(rows);
                else
                tbody.find('tr:nth-child('+ins_index+')').after(rows);

//                appendRows(tbody,rows);
//            var rows = $(this).find('tr:gt(0)');

//                 alert(baseIndex+ ' '+sortIndex);



        }
//            table.append(tbody);

            function appendRows(target,rows){


                for (var i = 0; i < rows.length; i++){target.append(rows[i])};
            }
        }




        th.click(function(e){
            var table = $(this).parents('table').eq(0);
//            table.data('curBaseIndex',0);
//            var curColBaseIndex = table.data('curBaseIndex');

            var issort = $(this).attr('order');

            var rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()));

            var th_sort_base = $('th.basecol');
//            alert(th_sort_base.html());

//            for(a in s_col){
//
//
//            }


            if(e.shiftKey){

//                alert("Shift+C was pressed!!");

                if(th_sort_base.html() == undefined) return;

//                alert('mult');
                multyColumnSort(this,$(this).index());
                return;
            }


            if(th_sort_base.html() == undefined)
                groupCell();



            var tbody = $('tbody').eq(0);
            var rep_col_inds = tbody.data('rep_indexes');

//            alert(rep_col_inds);

//            th_sort_base.removeAttr('basecol');
//            alert();
//            alert(th_sort_base.html());

            if(th_sort_base.html() == undefined ){

            }
            else{
//                alert('hi');
//                th_sort_base.attr('test','test');
                th_sort_base.removeClass('basecol');
//                th_sort_base.each(function(){


//                });
            }

            $(this).addClass('basecol');
//            $(this).attr('basecol','true');


//                log(this.asc);
            this.asc = !this.asc;
//            alert(this.asc);

            if (!this.asc){rows = rows.reverse()};
            for (var i = 0; i < rows.length; i++){table.append(rows[i])};
            if(this.asc){
//               var is_basecol =

//                if(is_basecol == undefined)alert('und');
                $(this).attr('order','asc');
                $(this).removeClass('logo-desc')
                $(this).addClass('logo-asc');
                $(this).attr('order','asc');
            }

            else{

                $(this).attr('order','desc');
                $(this).removeClass('logo-asc')
                $(this).addClass('logo-desc');
                $(this).attr('order','desc');
            }
        })

    };
})(jQuery);