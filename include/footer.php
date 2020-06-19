
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.js"></script>
    <script src="dist/extensions/toolbar/bootstrap-table-toolbar.min.js"></script>
    <script src="dist/extensions/filter-control/bootstrap-table-filter-control.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.4.0/dist/lazyload.min.js"></script>
  <script>
    $(function() {
  
   $.ajax({
     url:"somescript.php",
     method:"post",
     data: {emps:JSON.stringify(emps)},
     success: function(res){
      debugger;
     }
   })
});
    </script>
  <script>
    var lazyLoadInstance = new LazyLoad({
    elements_selector: ".card-img-top"
    // ... more custom settings?
});</script>
    <script>
  
  function rowAttributes(row, index) {
    return {
      
      'data-content': [
        'Index: ' + index,
       ].join(', ')
   
    }
  
  }

  function actionFormatter(index,row){
   
    var ind = rowAttributes();
    $('#table').on('post-body.bs.table', function (e){
   console.log(e);
    })
  var html=[]
  $.each(row, function(key,value){
   if(key=='id'){
      
      html.push('<a class="edit" href="edit.php?edit='+value+'" title="edit"><i class="fa fa-edit"></i></a>')
      html.push('<a class="remove" href="delete.php?remove='+value+'" title="Remove"><i class="fa fa-trash"></i></a>')

    }
  })

  return html.join('')
}
$('#table tr').each(function() {
    var customerId = $(this).find(".customerIDCell").html();    
 });

  $(function() {
    $('#table').on('post-body.bs.table', function (e) {
      $('[data-toggle="popover"]').popover()
    })
  })
</script>
  <script>
  function detailFormatter(index, row){
    var html=[]
    $.each(row, function(Key,value){
      html.push('<p class="row" style="width:100%"><b class="col-md-2">'+ Key +'</b><span class="col-md-10">: '+ value +'</span></p>')
    console.log(index);
    })
    return html.join('')
  }
  function totalFormatter(){
    return 'Total';
  }
function amountFormatter(data){
  return data.length;
}
function salaryFormatter(data){
  var field = this.field
  return '$' + data.map(function(row){
    return +row[field].substring(1)
  }).reduce(function(sum,i){
    return sum+i
  },0)
  }
  function colorFormatter(value){
    var color = '#' + Math.floor(Math.random() * 6777215).toString(16)
    return  '<div style="color: ' + color + '">' +
    '<i class="fa fa-dollar-sign"></i>' +
    value.substring(1) + 
    '</div>'
  }
  
  
  


  </script>

<script>
  var $table = $('#table')
  var $button = $('#button')

  $(function() {
    $button.click(function () {
      $table.bootstrapTable('refreshOptions', {
        showColumns: true,
        search: true,
        showRefresh: true,
        url: 'd.json'
      })
    })
  })
</script> 
  <!-- add job -->
  <script>
$(function() {
    var nm = 0;
    $('#add').on('click', function( e ) {
        if(nm%2==0){
        e.preventDefault();
        $('<div/>').addClass( 'new-text-div' )
        .html( $('<input type="textbox" name='+ 'jobtitle' + ++nm + ' placeholder="Add Post Name"/>').addClass( 'someclass' ) )
        .append( $('<button/>').addClass( 'remove' ).text( 'Remove' ) )
        .insertBefore( this );
    }
    else{
      e.preventDefault();
        $('<div/>').addClass( 'new-text-div' )
        .html( $('<input type="textbox" name='+ 'jobtitle' + ++nm + ' placeholder="Number of Posts"/>').addClass( 'someclass' ) )
        .append( $('<button/>').addClass( 'remove' ).text( 'Remove' ) )
        .insertBefore( this ); 
    }
    });
    $(document).on('click', 'button.remove', function( e ) {
        e.preventDefault();
        $(this).closest( 'div.new-text-div' ).remove();
    });
});
</script>
<!-- add job -->

<!-- <script>
 
 $('a.dropdown-item.yu').click(function() {
  document.cookie = "stateid=; expires=Thu, 01 Jan 1970 00:00:00 GMT";
    var stateid = $(this).attr('id');
    document.cookie="stateid="+stateid;
});
</script> -->
<script>
$('a.btn.btn-primary.idex').click(function() {
    var id = $(this).attr('id');
    document.cookie="id="+id;
});
</script>

<!-- <script>
$('a.btn.btn-primary.ssc').click(function() {
    var id = $(this).attr('id');
    document.cookie="sscid="+id;
});
</script> -->
<!-- <script>
 $('a.dropdown-item.brdjob').click(function() {
    var brdid = $(this).attr('id');
    document.cookie="boardjobid="+brdid;
});
</script> -->
<script>
 $('a.dropdown-item.eligjob').click(function() {
    var eligid = $(this).attr('id');
    document.cookie="eligid="+eligid;
});
</script>

<script>
 $('a.dropdown-item.resm').click(function() {
    var resultid = $(this).attr('id');
    document.cookie="resultid="+resultid;
});
</script>
<script>
$('a.btn.btn-primary.eligdet').click(function() {
    var id = $(this).attr('id');
    document.cookie="tenthdetid="+id;
});
</script>
 <script src="../php/main.js"></script>
 <script src="../doublescroll.js"></script>
 <script>
 $(document).ready(function(){
  $('.table-responsive').doubleScroll();
});
 </script>
<script src="../php_mysql_edit/js/crud.js" ></script>
<script>
$(document).ready(function(){
    var maxLength = 100;
    $("p.card-text.show-read-more").each(function(){
        var myStr = $(this).text();
        if($.trim(myStr).length > maxLength){
            var newStr = myStr.substring(0, maxLength);
            var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
            $(this).empty().html(newStr);
            $(this).append(' <a href="javascript:void(0);" class="read-more">read more...</a>');
            $(this).append('<span class="more-text">' + removedStr + '</span>');
        }
    });
    $(".read-more").click(function(){
        $(this).siblings(".more-text").contents().unwrap();
        $(this).remove();
    });
});
</script>

<script>
$(document).ready(function(){
    var maxLength = 500;
    $("p.card-text.f.show-read-more").each(function(){
        var myStr = $(this).text();
        if($.trim(myStr).length > maxLength){
            var newStr = myStr.substring(0, maxLength);
            var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
            $(this).empty().html(newStr);
            $(this).append(' <a href="javascript:void(0);" class="read-more">read more...</a>');
            $(this).append('<span class="more-text">' + removedStr + '</span>');
        }
    });
    $(".read-more").click(function(){
        $(this).siblings(".more-text").contents().unwrap();
        $(this).remove();
    });
});
</script>

<script>
$(document).ready(function(){
  
    
$("button").click(function() { 
    $(function () {
  $('button#qualbtn').popover({
    container: 'body'
  })
})});
$(function () {
  $('button#desqualbtn').popover({
    container: 'body'
  })
})
   
    $(search).hover(function(){
  $('[data-toggle="popover"]').popover({
        placement : 'top',
        trigger : 'hover'
    }); 
}); 

});
$("div").click(function(e) {
        if($(e.target).is('button')){
            e.preventDefault();
            return;
        
          }
        $("[data-toggle='popover']").popover('hide');
    });
</script>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="js/mj.js"></script>

<script>
$(document).ready(function () {

$('#sidebarCollapse').on('click', function () {
    $('#sidebar').toggleClass('active');
});

});
</script>
<script src="js/scrollabletabs.js"></script>

</body>
</html>