
        <script type="text/javascript">
                    $(document).ready(function () {
                    //ajax_articles();
                    //ajax_images();
                    //ajax_gallery();
                   // myfunction2();
                   // myfunction3();
                  });
                
                
                function myfunction2(){
                    $.ajax ({
                            url: '<?php echo site_url()."ajax_demo/index";?>',
                            data: { type : 'userstories' },
                            success: function(result) {                                       
                            $('#ajax-content-container').html(result); 
                            }
                        });                    
                }
                
                function myfunction3(){
                    $.ajax ({
                            url: '<?php echo site_url()."ajax_demo/index";?>',
                            data: { type : 'defects' },
                            success: function(result) {                                       
                            $('#ajax-content-container').html(result); 
                            }
                        });                    
                }
                
   </script>
   
   <script type="text/javascript">
       var maxRows = 10;
$('.table table-bordered table-condensed table-striped').each(function() {
    var cTable = $(this);
    var cRows = cTable.find('tr:gt(0)');
    var cRowCount = cRows.size();
    
    if (cRowCount < maxRows) {
        return;
    }

    cRows.each(function(i) {
        $(this).find('td:first').text(function(j, val) {
           return (i + 1) + " - " + val;
        }); 
    });

    cRows.filter(':gt(' + (maxRows - 1) + ')').hide();


    var cPrev = cTable.siblings('.prev');
    var cNext = cTable.siblings('.next');

    cPrev.addClass('disabled');

    cPrev.click(function() {
        var cFirstVisible = cRows.index(cRows.filter(':visible'));
        
        if (cPrev.hasClass('disabled')) {
            return false;
        }
        
        cRows.hide();
        if (cFirstVisible - maxRows - 1 > 0) {
            cRows.filter(':lt(' + cFirstVisible + '):gt(' + (cFirstVisible - maxRows - 1) + ')').show();
        } else {
            cRows.filter(':lt(' + cFirstVisible + ')').show();
        }

        if (cFirstVisible - maxRows <= 0) {
            cPrev.addClass('disabled');
        }
        
        cNext.removeClass('disabled');

        return false;
    });

    cNext.click(function() {
        var cFirstVisible = cRows.index(cRows.filter(':visible'));
        
        if (cNext.hasClass('disabled')) {
            return false;
        }
        
        cRows.hide();
        cRows.filter(':lt(' + (cFirstVisible +2 * maxRows) + '):gt(' + (cFirstVisible + maxRows - 1) + ')').show();

        if (cFirstVisible + 2 * maxRows >= cRows.size()) {
            cNext.addClass('disabled');
        }
        
        cPrev.removeClass('disabled');

        return false;
    });

});
       
   </script>    


        
  
   
        <div id="page-wrapper">
        <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <?php if (!isset($ajax_req)): ?>
            <div><p class="btn btn-link" id="show-gallery" onclick="myfunction3();">View Defect Status </p></div>
        <div><p class="btn btn-link" id="show-images" onclick="myfunction2();">View User Story Status</p></div>

        <?php endif; ?>
        
        <br>
        <br>
        <br>
 
            <div id="ajax-content-container">
              <table class="table table-bordered table-condensed table-striped ">
                <tr>
                  <th class="col-md-3">ID</th>
                  <th class="col-md-3">Description</th>
                  <th class="col-md-3">Status</th>
                </tr>
                <?php foreach ($node_list->result() as $value): ?>
                  <tr>
                    <td><?php print ucfirst($value->id); ?></td>  
                    <td><?php print $value->description; ?></td>
                    <td><?php print ucfirst($value->status); ?></td>
                  </tr>
                <?php endforeach; ?>
                  
              </table>
<!--              <span class="prev">Previous</span> <span class="next">Next</span>-->

              

            </div>
        </div>
        </div>
        </div>  
    