<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style type="text/css">.pre {
  background-color: black;
  color: white;
  padding: 15px;
  width: 100%;
  margin-top: 15px;
}
li.active {
  background-color: rgba(30, 221, 221, 0.616);
}
pre {
  color: white;
  background-color: black;
  border: none;
}
.word-break {
  word-wrap: break-word;
  word-break: normal;
}
.codepre {
  height: 800px;
  overflow: scroll;
}

</style>
</head>
<body>
<div class="container-fluid">
    <div id="app">
        <div class="row" >
            <div class="col-md-4">
                <div class="pre">
                    <div><?php echo $msg; ?></div>
                    <span><?php echo $data->class.'('.$data->getErrortype().')'.'<br>'; ?></span>
                    <h3 class="word-break" style="color:red;"><?php echo $data->errstr.'<br>'; ?></h3>
                    <span><?php echo $data->file.':'.$data->line.'<br>'; ?></span>
                </div>
                <div class="pre" >
                    <?php foreach(json_decode($contents,true) as $key=>$value ){?>
                        <div class="alert <?php echo $key==0?'alert-warning':'alert-success' ?>" data-id="<?php echo $key; ?>">
                            <strong class="word-break">
                            <?php echo $value['file']; ?>
                                <span class="badge">
                                    <?php echo $value['line']; ?>
                                </span>
                                <a href="<?php echo 'code:/'.str_replace('\\','/',$value['file']).':'.$value['line']; ?>">打开文件</a>
                            </strong> 
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-8">
                <?php foreach(json_decode($contents,true) as $key => $value){ ?>
                    <div id="<?php echo 'c_'.$key; ?>" class="pre codepre <?php echo $key!==0?'hide':''; ?>" >
                        <span><?php echo $value['file']; ?></span>
                        <pre><ol><?php foreach($value['contents'] as $k=>$v){ ?><li value="<?php echo $v['line']; ?>"  class="<?php echo $v['line']==$value['line']?"active":""; ?>"><?php echo $v['content']; ?></li><?php } ?></ol></pre>
                    </div>
                <?php } ?>
            </div>
        </div> 
    </div>
</div>
</body>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(".alert").on('click',function(e){
        var id=$(this).data("id");
        $('.alert').removeClass('alert-warning').addClass('alert-success');
        $(this).addClass('alert-warning').removeClass('alert-success');
        $('.codepre').addClass('hide');
        $("#c_"+id).removeClass('hide');
    })
</script>
</html>
