<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Evgeniy
 * Date: 02.04.15
 * Time: 12:20
 * To change this template use File | Settings | File Templates.
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Прижатый к низу футер</title>
    <!--    <link rel="stylesheet/less" type="text/css" href="css/styleless.less" />-->
    <link rel="stylesheet" href="css/tipy1.css"/>
    <link rel="stylesheet" href="css/supertable.css"/>
<!--        <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.2.0/less.min.js"></script>-->
<!--    <script src="https://code.jquery.com/jquery.js"></script>-->

    <script src="jquery-1.11.2.min.js"></script>
    <script src="jquery.supertable-0.1.js"></script>
<!--        <script src="jsmodule.js"></script>-->
    <script type="text/javascript">

      /* function Y(){

           this.$ = "35345";
       }*/

        $(function(){


            "use strict"
//            fma();
            $('#table').stable({

                ajax_p:"ajax",
                multisort: true
            });

//            alert(in_f.$);
//            in_f.t();
//
////          var g = new Y();
//           alert(in_f.$);





//             function a(){
//
//                 for(var i =0;i<100000000;i++){};
//             }
//            var start = Date.now();
//            var start = new Date().getTime();


//           alert($('#table tbody tr'));
//            $('tbody').append('<tr><td>Берлин</td> <td>Германия</td> <td>123</td></tr>');

//            var r =  $('#table tbody tr[cellgroup='0']');
//            alert(r);
//            $('tbody').html(r);
//            $('#table tbody').append(r);
//            $('#table tbody').append(r);
//            $('#table').append('<tr><td>Берлин</td> <td>Германия</td> <td>123</td></tr>');
//            $('tbody').append(r);
//            a();


//            var finish =  new Date();
//
//           var   diff =finish - start  ;

//            alert(diff);

//            $('table').hide("slow");

//            $('#press').click(function(){
//
//                var r =  $('#table tbody');
////                var sortrows = r.toArray().reverse();
////              var sub =  r.find('tr').has('td[cellgroup=\'4\']').toArray().reverse();
//                var sub =  r.find('tr').has('td[cellgroup=\'4\']').each(function(){
//                    alert($(this).index());
//
//                })
//                alert(sub.length);
//                r.find('tr:nth-child(3)').before(sub);
//                r.find('tr:last-child').after(sub);
//                var sub =  r.find('tr').has('td[cellgroup=\'4\']').toArray().reverse();
//                alert(sub.length);
//                r.append(sub);


//            $('tbody').html(r);
//                $('#table tbody').append(r);
//                for(var i=r.length-1;i>=0 ;i--)
//                $('#table tbody').append(r[i]);
//                this.toArray();
//                alert('press');

            });

//            $('#table td:first-child').each(function(){
////                alert($(this).text());
//            });
//
//            function comparer(index) {
//                return function(a, b) {
//                    var valA = getCellValue(a, index), valB = getCellValue(b, index)
//                    return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.localeCompare(valB)
//                }
//            }
//            function getCellValue(row, index){ return $(row).children('td').eq(index).html() }
//
//
//            $('#table th').click(function(){
//                var table = $(this).parents('table').eq(0);
//                var rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()));
////                alert($(this).index());
//                this.asc = !this.asc;
//                if (!this.asc){rows = rows.reverse()};
//                for (var i = 0; i < rows.length; i++){table.append(rows[i])};
//            })



//        })



        //        $("#sort").click(function () {
//            var mylist = $('#menu');
//            var listitems = mylist.children('div').get();
//            listitems.sort(function(a, b) {
//                var compA = $(a).text().toUpperCase();
//                var compB = $(b).text().toUpperCase();
//                return (compA < compB) ? -1 : (compA > compB) ? 1 : 0;
//            })
//            $.each(listitems, function(idx, itm) { mylist.append(itm); });
//        });
//        var table = $('table');
//
//        $('#facility_header, #city_header')
//            .wrapInner('<span title="sort this column"/>')
//            .each(function(){
//
//                var th = $(this),
//                    thIndex = th.index(),
//                    inverse = false;
//
//                th.click(function(){
//
//                    table.find('td').filter(function(){
//
//                        return $(this).index() === thIndex;
//
//                    }).sortElements(function(a, b){
//
//                            if( $.text([a]) == $.text([b]) )
//                                return 0;
//
//                            return $.text([a]) > $.text([b]) ?
//                                inverse ? -1 : 1
//                                : inverse ? 1 : -1;
//
//                        }, function(){
//
//                            // parentNode is the element we want to move
//                            return this.parentNode;
//
//                        });
//
//                    inverse = !inverse;
//
//delegate
//
//        $("#wizard li").click(function () {
//            console.log( $(this).index() );
//        });
//
//        However rather than attaching one click handler for each list item it is better (performance wise) to use delegate which would look like this:
//
//        $("#wizard").delegate('li', 'click', function () {
//            console.log( $(this).index() );
//        });
//
//        In jQuery 1.7+, you should use on. The below example binds the event to the #wizard element, working like a delegate event:
//
//            $("#wizard").on("click", "li", function() {
//                console.log( $(this).index() );
//            });



        //                });
    </script>
</head>
<body>

<div class="page">
    <div class="wrap">
        <div class="box"><div id='press'>less</div></div>
        Декоративный шрифт, который включает в себя 650 символов вместе с разными знаками и символами. Дает достаточно широкие возможности для типографики, что сами можете видеть из иллюстрации выше.
    </div>
    <div class="itl">
        Декоративный шрифт, который включает в себя 650 символов вместе с разными знаками и символами. Дает достаточно широкие возможности для типографики, что сами можете видеть из иллюстрации выше.</div>
</div>
</div>



    <table id="table" cellpadding="5" >

        <thead>
          <tr>
            <th>column1</th>
            <th>column2</th>
             <th>column3</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <td width="100" align="center">Москва</td>
                <td>М</td>
                <td>3</td>
            </tr>
            <tr>
                <td width="100" align="center">Москва</td>
                <td>Б</td>
                <td>4</td>
            </tr>
            <tr>
                <td width="100" align="center">Москва</td>
                <td>А</td>
                <td>5</td>
            </tr>
            <tr>
                <td width="100" align="center">Москва</td>
                <td>В</td>
                <td>5</td>
            </tr>
            <tr>
                <td width="100" align="center">Москва</td>
                <td>Г</td>
                <td>5</td>
            </tr>
            <tr><td>Токио</td>
                <td>Япония</td>
                <td>234</td>
            </tr>
            <tr>
                <td width="100" align="center">Сан-Франциско</td>
                <td>Россия</td>
                <td>5</td>
            </tr>
            <tr>
                <td width="100" align="center">Владивосток</td>
                <td>Россия</td>
                <td>5</td>
            </tr>
            <tr>
                <td>Берлин</td>
                <td>Германия</td>
                <td>123</td>
            </tr>
            <tr>
                <td>Берлин</td>
                <td>Жермания</td>
                <td>1200003</td>
            </tr>
            <tr>
                <td>Берлин</td>
                <td>Вермания</td>
                <td>1200003</td>
            </tr>
            <tr>
                <td>Берлин</td>
                <td>Хермания</td>
                <td>1200003</td>
            </tr>
        </tbody>
    </table>

<div class="footer">

<!--    <div class="logo-asc"></div>-->
    часть</div>


</body>
</html>