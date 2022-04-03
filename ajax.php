<script>
    $(document).ready(function(){
        $("#search").keyup(function(){
            var input = $(this).val();
            if(input.length > 2){
                $.ajax({
                    url:"search.php",
                    method:"POST",
                    data:{input: input},

                    success:function(data){
                        $("#searchresult").html(data);
                    }
                })
                $("#searchresult").css('display', 'block');
            } else {
                $("#searchresult").css('display', 'none');
            }
        }) 
    })
</script>
