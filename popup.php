
<html>
<body>

 <div class="modal fade" id="myModaldesign" role="dialog">
              <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
                 <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h3 class="modal-title" style="color:green;">Congratulation</h3>
                    </div>
                 <div class="modal-body modal-lg" style="text-align:left; color: black;">
                
                 <div class="row">
				 
                     <h3 style="color:red; text-align:center; font-size:20px; "><?php echo  $_SESSION['textt']; ?> </h3>
                 </div>
      

                 </div>
                 <div class="modal-footer">
                   <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" style="color:black">OK</button>
                 </div>
                </div>
      
                 </div>
            </div>
</body>
</html>